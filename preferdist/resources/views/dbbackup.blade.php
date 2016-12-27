<?php use Illuminate\Support\Facades\DB;



  //echo "hello";
  $Nominalinfo = DB::select('select * from nominal');


  $tablenames = array(

    'customers' ,
    'bank', 
    'banktransfer' ,
    'companies',
    'employees' ,
    'employeestransition' ,
    'employeestransitiondetails' ,
    'expensedetails' ,
    'expensetype' ,
    'invoicedetails' ,
    'invoicemaster' ,
    'invoices' ,
    'invoicetransaction',
    'item' ,
    'itembuy' ,
    'itemcategory' ,
    'itemunit' ,
    'messages' ,
    'migrations' ,
    'nominal' ,
    'password_resets' ,
    'pendingwork' ,
    'products' ,
    'purchase' ,
    'purchasedetails' ,
    'supplier' ,
    'tax' ,
    'user' ,
    'users', 
    'weekdaychange' 
  );





  $fp;
  $index_fp;
  $filename;




  backup_tables($tablenames);







  function backup_tables($tables = '*'){

          $filename  = "laundry_backup";          
          $extension = '.sql';
          $dump_name = ( $filename );       
          $filename=$dump_name.$extension ;


          $basedir= base_path();
          $sql_dump_file_name = $basedir.'/public/uploads/'.$filename;



          if(!file_exists($sql_dump_file_name)) {
              //mkdir($sql_dump_file_dir, 0777, true);
          }else{
              unlink($sql_dump_file_name);
          }


          $fp = fopen( $sql_dump_file_name, 'a');

          $headinginfo=db_backup_header();

          fwrite( $fp, $headinginfo );

          
          if($tables == '*')
          {
                $tables = array();
                $sql = "SHOW TABLES";
                $result = DB::select($sql);

                for ($i=0; $i < sizeof($result); $i++) { 

                      $arrayName = array($result[$i]->Tables_in_londrydatabase);
                      array_push($tables, $result[$i]->Tables_in_londrydatabase );
                }
          }
          else
          {
                $tables = is_array($tables) ? $tables : explode(',',$tables);
          }

          $alter_table_query_string="";

          foreach($tables as $table){

                $return="";
                $sql = 'SELECT * FROM '.$table;
                $result = DB::select($sql);

                $sql = 'SHOW COLUMNS FROM '."$table";
                $singlerow1 = DB::select($sql);

                $num_fields= sizeof( $singlerow1 ) ;

                $return.= "\n\n\n\n#\n# Delete any existing table " .backquote( $table )."\n#\n\n";
                $return.= 'DROP TABLE IF EXISTS '.backquote( $table ).';';

                $return.= "\n\n\n\n#\n# Table structure of table " .backquote( $table )."\n#\n\n";

                $sql = 'SHOW CREATE TABLE '.backquote( $table );

                $create_table = DB::select($sql);

                $create_table[0]->{'Create Table'} = str_replace( 'TYPE=', 'ENGINE=', $create_table[0]->{'Create Table'} );

                $alter_table_query  = '';
                $create_table[0]->{'Create Table'} =  process_sql_constraint ( $create_table[0]->{'Create Table'}, $table, $alter_table_query );


                $alter_table_query_string.="\n\n".$alter_table_query ;
                $eachLineArray = explode("\n", $create_table[0]->{'Create Table'} );

                $nullTest=[];

                for ($i=1; $i <= $num_fields ; $i++) { 
                   

                      $NOT_NULL = strpos($eachLineArray[$i], "NOT NULL");
                      $NULL = strpos($eachLineArray[$i], "NULL");

                      if((!$NOT_NULL)&&($NULL)){
                        
                        array_push($nullTest, true);
                      }else{

                        array_push($nullTest, false);
                      }



                }

                $return.= "".$create_table[0]->{'Create Table'}.";\n\n";

                $return.= "\n\n\n\n#\n# Data contents of table " .backquote( $table )."\n#\n\n";
                $insertsetcout=0;

                for($ii=0;$ii<sizeof($result);$ii++){

                              $rowstring="";
                              $row=[];
                              $commaflag=false;
                              foreach ($result[$ii] as $key => $value) {
                                    
                                    array_push($row, $value);

                                    if($commaflag){
                                      $rowstring.=',';
                                    }
                                    $rowstring.=backquote( $key  );
                                    $commaflag=true;

                              }

                              if($insertsetcout > 50){
                                fwrite( $fp, $return );
                                $return = ''; 
                                $insertsetcout = 1;
                                $return.= ");\n".'INSERT INTO '.backquote( $table )."(".$rowstring.")"." VALUES"."\n(";
                              }
                              else if ($insertsetcout==0) {
                                
                                $return.= "\n".'INSERT INTO '.backquote( $table ).'('.$rowstring.')'.' VALUES'."\n(";
                              }else{

                                    $return.= "),\n(";

                              }

                              $insertsetcout=$insertsetcout+1;

                              for($j=0; $j<$num_fields; $j++){
                                      $row[$j] = addslashes($row[$j]);
                                      $row[$j] = preg_replace("/(\n){2,}/", "\\n", $row[$j]); 

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
                                      
                                  if( $j<($num_fields-1) ) { $return.= ","; }
                              }


                }


                if(sizeof( $result )!=0){

                  $return.= ");\n";
                }     


                $return.="\n\n\n";
                fwrite( $fp, $return ); 
        }
        fwrite( $fp, "\n\n\n\n\n\n\n".$alter_table_query_string .";");

        close($fp);  



        ob_start();
        include $sql_dump_file_name;
        $log      = ob_get_clean();



        //$url= $parse_url( $sql_dump_baseurl_file_name );
        //$host = sanitize_file_name( $url['host'] );
        $host = "laundry";
      
        $filename = sprintf( '%s--%s.sql', $host, date( 'Y-m-d-H-i-s' ) );

  


        header( 'Content-Description: File Transfer' );
        header( 'Content-Type: application/octet-stream' );
        header( 'Content-Length: ' . strlen( $log ) );
        header( 'Content-Disposition: attachment; filename=' . $filename);
        echo $log;
        exit;

    
  }




      function db_backup_header() {
        $str ="";
        $str.='#Laundry Management MySQL database backup'. "\n";
        $str.="\n";
        $str.='# ' . 'Generated: '.date( 'l j. F Y H:i T' ).'  Laundry Management'."\n";
        $str.= "# --------------------------------------------------------\n\n";
        $str.= "SET sql_mode='NO_AUTO_VALUE_ON_ZERO';\n\n";
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
        $sql_constraints_query .= 'ALTER TABLE ' . backquote( $table ) . $crlf;

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













?>



