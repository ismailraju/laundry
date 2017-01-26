<?php  
namespace App\myclass;

class wrapfuncclass 
{
	




	function w()
	{
			
		return "hellowwwwww";	

	}

	
	public function optionwrap($jsondata,$displaykey){
		$arr = json_decode($jsondata);
		//var_dump($arr.length);
		$str="";

		foreach ($arr as $k=>$r){
			$str=$str."<option ";
			//var_dump($r->TaxCode);
			 foreach ($r as $key=>$value){
			    //echo $v; // etc.
				//var_dump($rr);
			    $str=$str." ".$key."='".$value."' ";
			    
			}
			$str=$str.">".$r->$displaykey."</option >";
		}

		

		return $str;

	}
	public function optionwrap_value($jsondata,$displaykey,$valuekey){
		$arr = json_decode($jsondata);
		//var_dump($arr);
		$str="";

		foreach ($arr as $k=>$r){
			$str=$str."<option ";
			//var_dump($r->TaxCode);
			 foreach ($r as $key=>$value){
			    //echo $v; // etc.
				//var_dump($rr);
			    
			    if($key==$valuekey){	$str=$str." value='".$value."' ";	}
			    else{$str=$str." ".$key."='".$value."' ";}
			    
			}
			$str=$str.">".$r->$displaykey."</option >";
		}
	return $str;

	}

		public function optionwrap_value_multi_display($jsondata,$displaykey,$valuekey){
		$arr = json_decode($jsondata);
		//var_dump($arr.length);
		$str="";


		foreach ($arr as $k=>$r){
			$str=$str."<option ";
			//var_dump($r->TaxCode);
			 foreach ($r as $key=>$value){
			    //echo $v; // etc.
				//var_dump($rr);
			    
			    if($key==$valuekey){	$str=$str." value='".$value."' ";	}
			    else{$str=$str." ".$key."='".$value."' ";}
			    
			}

			$str=$str.">";


			for ($i=0; $i <sizeof($displaykey); $i++) { 

		//return json_encode($r->{$displaykey[$i]}) ;

				if(($i!=0)&&($r->{$displaykey[$i]}!="")){$str=$str."-";}
				$str=$str.$r->{$displaykey[$i]};


			}
			
			$str=$str."</option >";


		}

		

		return $str;

	}


}


?>