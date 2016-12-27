

<?php

$tablenames=new allTableName();


$table=[];

foreach ($tablenames as $key => $value) {
  # code...
  array_push($table, $value);
}


//var_dump($table);wp_die();

$wpdbbackup_class= new wpdbbackup();

$wpdbbackup_class->backup_tables($table);



class wpdbbackup{

    protected $fp;
    protected $index_fp;
    protected $filename;


    /* backup the db OR just a table */
    function backup_tables($tables = '*')
    {


        /*
          upload url create & file create & open
        */

          $upload_dir = wp_upload_dir();

          $this->filename="AS_backup";

          $extension = '.sql';
          $dump_name = sanitize_file_name( $this->filename );

          $this->filename=$dump_name.$extension ;

          $path=    $upload_dir['path'];
          $url=     $upload_dir['url'];
          $basedir= $upload_dir['basedir'];
          $baseurl= $upload_dir['baseurl'];
          $sql_dump_file_dir = $basedir. DIRECTORY_SEPARATOR."appointmentSystem".DIRECTORY_SEPARATOR;
          $sql_dump_file_name = $basedir. DIRECTORY_SEPARATOR."appointmentSystem".DIRECTORY_SEPARATOR.$this->filename;
          $sql_dump_index_file_name = $basedir. DIRECTORY_SEPARATOR."appointmentSystem".DIRECTORY_SEPARATOR."index.php";

          $sql_dump_baseurl_file_name = $baseurl. DIRECTORY_SEPARATOR."appointmentSystem".DIRECTORY_SEPARATOR.$this->filename;

//var_dump( $upload_dir );wp_die();


        if (!file_exists($sql_dump_file_dir)) {
              mkdir($sql_dump_file_dir, 0777, true);
          }else{
              unlink($sql_dump_file_name);
          }



          //$this->index_fp = $this->open($sql_dump_index_file_name,'w+'); 
          //$this->close( $this->index_fp );

          $this->fp = $this->open($sql_dump_file_name,'a'); 

//var_dump( $upload_dir );wp_die();

      /*
        write initial info
      */
        $headinginfo=$this->db_backup_header();

        fwrite( $this->fp, $headinginfo );

          global $wpdb;


          //get all of the tables
          if($tables == '*')
          {
                $tables = array();
                $sql = "SHOW TABLES";
                $result = $wpdb->get_results($sql);


                for ($i=0; $i < sizeof($result); $i++) { 

                      $arrayName = array($result[$i]->Tables_in_wordpress);
                      array_push($tables, $result[$i]->Tables_in_wordpress );
                    

                }



          }
          else
          {
                $tables = is_array($tables) ? $tables : explode(',',$tables);
          }

    //var_dump($tables);wp_die();

          $alter_table_query_string="";

          //cycle through
          foreach($tables as $table)
          {
                $return="";


                $sql = 'SELECT * FROM '.$table;
                $result = $wpdb->get_results($sql);

                $sql = 'SHOW COLUMNS FROM '."$table";
                $singlerow1=$wpdb->get_results(  $sql);
                $num_fields= sizeof( $singlerow1 ) ;


//echo  $table.'-'.$num_fields.'<br/>';
  

                $return.= "\n\n\n\n#\n# Delete any existing table " .$this->backquote( $table )."\n#\n\n";
                $return.= 'DROP TABLE IF EXISTS '.$this->backquote( $table ).';';



                $return.= "\n\n\n\n#\n# Table structure of table " .$this->backquote( $table )."\n#\n\n";

                $sql = 'SHOW CREATE TABLE '.$this->backquote( $table );

                $create_table = $wpdb->get_results( 'SHOW CREATE TABLE ' . $this->backquote( $table ), ARRAY_N );




                $create_table[0][1] = str_replace( 'TYPE=', 'ENGINE=', $create_table[0][1] );

                $alter_table_query  = '';
                $create_table[0][1] = $this->process_sql_constraint( $create_table[0][1], $target_table_name, $alter_table_query );

                $alter_table_query = str_replace( "ALTER TABLE ", "ALTER TABLE ".$this->backquote( $table ), $alter_table_query );

                $alter_table_query_string.="\n\n".$alter_table_query ;




                $eachLineArray = explode("\n", $create_table[0][1] );
                //$return.=$eachLineArray[1];

                //var_dump($eachLineArray);
                $nullTest=[];

                for ($i=1; $i <= $num_fields ; $i++) { 
                      //echo  $eachLineArray[$i]."<br/>";

                      $NOT_NULL = strpos($eachLineArray[$i], "NOT NULL");
                      //var_dump($NOT_NULL);

                      $NULL = strpos($eachLineArray[$i], "NULL");
                      //var_dump($NULL);


                      if((!$NOT_NULL)&&($NULL)){
                        //echo   '   NULL';
                        array_push($nullTest, true);
                      }else{

                        array_push($nullTest, false);
                      }


                      //echo   '<br/><br/><br/><br/><br/>';

                }

                //var_dump($nullTest);



                $return.= "".$create_table[0][1].";\n\n";

                $return.= "\n\n\n\n#\n# Data contents of table " .$this->backquote( $table )."\n#\n\n";


                    $insertsetcout=0;
                    
                      for ($ii=0; $ii < sizeof( $result ) ; $ii++) {

                          $rowstring=""; 

                          $row=[];
                          $commaflag=false;
                          foreach ($result[$ii] as $key => $value) {
                                
                                array_push($row, $value);

                                if($commaflag){
                                  $rowstring.=',';
                                }
                                $rowstring.=$this->backquote( $key  );
                                $commaflag=true;

                          }

                         

                          if($insertsetcout>50){

                            fwrite( $this->fp, $return ); $return ="";

                            $insertsetcout=1;
                            $return.= ");\n".'INSERT INTO '.$this->backquote( $table ).'('.$rowstring.')'.' VALUES'."\n(";
                          }else if ($insertsetcout==0) {
                            
                            $return.= "\n".'INSERT INTO '.$this->backquote( $table ).'('.$rowstring.')'.' VALUES'."\n(";

                          }else{

                                $return.= "),\n(";

                          }
                          $insertsetcout=$insertsetcout+1;
                          //$return.= 'INSERT INTO '.$this->backquote( $table ).'('.$rowstring.')'.' VALUES';


                          for($j=0; $j<$num_fields; $j++) 
                          {

                                  $row[$j] = addslashes($row[$j]);
                                 // $row[$j] = preg_replace("\n","\\n",$row[$j]);

                                  $row[$j] = preg_replace("/(\n){2,}/", "\\n", $row[$j]); 


                                  //if (isset($row[$j])) { 
                                  if ( $row[$j]!="" ) { 
                                    $return.= "'".$row[$j]."'" ; 
                                  } 
                                  else { 

                                    if($nullTest[$j]==true){

                                      $return.= 'NULL'; 

                                    }else{
                                      $return.= "''"; 

                                    }
                                    
                                    
                                  }



                                  if ($j<($num_fields-1)) { $return.= ','; }


                          }



                      }


                 if(sizeof( $result )!=0){

                    $return.= ");\n";
                 }     


                $return.="\n\n\n";

 

                 fwrite( $this->fp, $return );         


          }


  fwrite( $this->fp, "\n\n\n\n\n\n\n".$alter_table_query_string .";");

  $this->close($this->fp);  


//exit;
        //save file
          //$handle = fopen('db-backup-'.date('d/m/y h:m:s').''.'.sql','w+');
          //$handle = fopen('db-backup-'.time().'-'.(md5(implode(',',$tables))).'.sql','w+');
         // print_r($handle);exit;
          //fwrite($handle,$return);
          //fclose($handle);
        //add below code to download it as a sql file
        //header( 'Content-Description: File Transfer' );
    //Header('Content-type: application/octet-stream');
    //Header('Content-Disposition: attachment; filename="'.$sql_dump_baseurl_file_name.'"');
        //Header('Content-Disposition: attachment; filename=db-backup-'.date('d/m/Y H:i:s').''.'.sql');
        //Header('Content-Disposition: attachment; filename=db-backup-'.time().'-'.(md5(implode(',',$tables))).'.sql');
        //echo $return;
    //exit();
/*path
url
basedir
baseurl
sql_dump_file_dir
sql_dump_file_name
sql_dump_index_file_name
sql_dump_baseurl_file_name*/

      ob_start();
      include $sql_dump_file_name;
      $log      = ob_get_clean();



      $url= $this->parse_url( $sql_dump_baseurl_file_name );
      $host     = sanitize_file_name( $url['host'] );
      //$host     = "";
      $filename = sprintf( '%s-AppointmentSystem-%s.sql', $host, date( 'Y-m-d-H-i-s' ) );

      // var_dump($host);   


      header( 'Content-Description: File Transfer' );
      header( 'Content-Type: application/octet-stream' );
      header( 'Content-Length: ' . strlen( $log ) );
      header( 'Content-Disposition: attachment; filename=' . $filename);
      echo $log;
      exit;


    }




  function parse_url( $url ) {
    $url = trim( $url );
    if ( 0 === strpos( $url, '//' ) ) {
      $url       = 'http:' . $url;
      $no_scheme = true;
    } else {
      $no_scheme = false;
    }

    $parts = parse_url( $url );
    if ( $no_scheme ) {
      unset( $parts['scheme'] );
    }

    return $parts;
  }




      function db_backup_header() {
        $str ="";
        $str.='# WordPress MySQL database backup'. "\n";
        $str.="\n";
        $str.='# ' . sprintf( __( 'Generated: %s', 'Appointment System' ), date( 'l j. F Y H:i T' ) ) . "\n";
        $str.='# ' . sprintf( __( 'Hostname: %s'), DB_HOST ) . "\n";
        $str.= '# ' . sprintf( __( 'Database: %s' ), $this->backquote( DB_NAME ) ) . "\n";
        $str.= "# --------------------------------------------------------\n\n";
        $str.= "#/*!40101 SET NAMES $charset */;\n\n";
        $str.= "SET sql_mode='NO_AUTO_VALUE_ON_ZERO';\n\n";

        //var_dump($str);wp_die();

        return $str;
      }




      function open( $filename = '', $mode = 'a' ) {

        if ( '' == $filename ) {
          return false;
        }

        $fp = fopen( $filename, $mode );
        return $fp;
      }




  function backquote( $a_name ) {

    if ( ! empty( $a_name ) && $a_name != '*' ) {
      if ( is_array( $a_name ) ) {
        $result = array();
        reset( $a_name );
        while ( list( $key, $val ) = each( $a_name ) ) {
          $result[ $key ] = '`' . $val . '`';
        }

        return $result;
      } else {
        return '`' . $a_name . '`';
      }
    } else {
      return $a_name;
    }
  }






  function close( $fp ) {
    
      fclose( $fp );
      unset( $fp );
  }








  function process_sql_constraint( $create_query, $table, &$alter_table_query ) {
    if ( preg_match( '@CONSTRAINT|FOREIGN[\s]+KEY@', $create_query ) ) {
      $sql_constraints_query = '';

      $nl_nix = "\n";
      $nl_win = "\r\n";
      $nl_mac = "\r";

      if ( strpos( $create_query, $nl_win ) !== false ) {
        $crlf = $nl_win;
      } elseif ( strpos( $create_query, $nl_mac ) !== false ) {
        $crlf = $nl_mac;
      } else {
        $crlf = $nl_nix;
      }

      // Split the query into lines, so we can easily handle it.
      // We know lines are separated by $crlf (done few lines above).
      $sql_lines = explode( $crlf, $create_query );
      $sql_count = count( $sql_lines );

      // lets find first line with constraints
      for ( $i = 0; $i < $sql_count; $i++ ) {
        if ( preg_match(
          '@^[\s]*(CONSTRAINT|FOREIGN[\s]+KEY)@',
          $sql_lines[ $i ]
        ) ) {
          break;
        }
      }

      // If we really found a constraint
      if ( $i != $sql_count ) {
        // remove, from the end of create statement
        $sql_lines[ $i - 1 ] = preg_replace(
          '@,$@',
          '',
          $sql_lines[ $i - 1 ]
        );

        // let's do the work
        $sql_constraints_query .= 'ALTER TABLE ' . $this->backquote( $table ) . $crlf;

        $first = true;
        for ( $j = $i; $j < $sql_count; $j++ ) {
          if ( preg_match(
            '@CONSTRAINT|FOREIGN[\s]+KEY@',
            $sql_lines[ $j ]
          ) ) {
            if ( strpos( $sql_lines[ $j ], 'CONSTRAINT' ) === false ) {
              $tmp_str = preg_replace(
                '/(FOREIGN[\s]+KEY)/',
                'ADD \1',
                $sql_lines[ $j ]
              );
              $sql_constraints_query .= $tmp_str;
            } else {
              $tmp_str = preg_replace(
                '/(CONSTRAINT)/',
                'ADD \1',
                $sql_lines[ $j ]
              );
              $sql_constraints_query .= $tmp_str;
              preg_match(
                '/(CONSTRAINT)([\s])([\S]*)([\s])/',
                $sql_lines[ $j ],
                $matches
              );
            }
            $first = false;
          } else {
            break;
          }
        }

        $sql_constraints_query .= ";\n";

        $create_query = implode(
                          $crlf,
                          array_slice( $sql_lines, 0, $i )
                        )
                        . $crlf
                        . implode(
                          $crlf,
                          array_slice( $sql_lines, $j, $sql_count - 1 )
                        );
        unset( $sql_lines );

        $alter_table_query = $sql_constraints_query;

        return $create_query;
      }
    }

    return $create_query;
  }










}


?>



