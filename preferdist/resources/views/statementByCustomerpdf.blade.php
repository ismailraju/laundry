<?php namespace resources\views; 
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use DB;

use App\myclass\queryclass;

use App\myclass\wrapfuncclass;


use mPDF;


$customeridd = $_GET['customeridd'];
$Start = $_GET['Start'];
$End = $_GET['End'];



$customersinfo=DB::table('customers')
	->select('*')
	->where('CustomersId', "$customeridd")
	->get();


//var_dump(	$customersinfo	); exit;


/////////////////////////////////////////////////////////////////////////////

			$CustomersId = $customeridd;
   	 		$statementbycustomerdateStart 	=$Start;
   	 		$statementbycustomerdateEnd 	=$End;

            //return json_encode($CustomersId." ".$statementbycustomerdateStart." ".$statementbycustomerdateEnd." ");
   	 		$result=[];

   	 		$columnnames=[];
   	 		$column_name = array(
	            		'InvoicesId' =>0, 
	            		'InvoiceDate'=>0, 
	            		'TotalAmount'=>0 
            		);	
   	 		//$columnnames=array_merge((array)$columnnames,(array)$column_name);


            $invoices = DB::table('invoices')
							->select('*')
							->where('CustomersId', "$CustomersId")
							->where('InvoiceDate', '>=',"$statementbycustomerdateStart")
							->where('InvoiceDate', '<=',"$statementbycustomerdateEnd")
							->get();


			$tempallinvoicedata=[];		
			$allinvoicedata=[];		

			for ($i=0; $i <sizeof( $invoices) ; $i++) { 



			    	$InvoicesId_=$invoices[$i]->InvoicesId;

			    	

            		$invoicedetails = DB::table('invoicedetails')
            				->join('item' , 'invoicedetails.ItemId', '=', 'item.ItemId')
            				->select('invoicedetails.*','item.ItemName','item.ItemColor')
            				->where('InvoicesId', "$InvoicesId_")
							->get();


							

					for ($ii=0; $ii <sizeof($invoicedetails) ; $ii++) {

								$title=$invoicedetails[$ii]->ItemName;
								
								$column_name = array(
				            		$title=>0, 
				            		$title."Ex"=>0, 
				            		$title."Dm"=>0, 
			            		);	

			            		$columnnames=array_merge((array)$columnnames,(array)$column_name);
								
							}	


			}

//return json_encode($columnnames);

			////////////////////////////////////////

			for ($i=0; $i <sizeof( $invoices) ; $i++) { 

				  	foreach ($columnnames as $key => $value) {

								$columnnames[$key]="";

					}

//return json_encode($columnnames);
					$arrayName = array(
	            		'InvoicesId'  =>0 , 
	            		//'CustomersId' =>0 , 
	            		'InvoiceDate' =>0 , 
	            		'TotalAmount' =>0  
	            		);


			    	$InvoicesId_=$invoices[$i]->InvoicesId;

					$arrayName["InvoicesId"]=	$invoices[$i]->InvoicesId;
			    	//$arrayName["CustomersId"]=	$invoices[$i]->CustomersId;
			    	$arrayName["InvoiceDate"]=	$invoices[$i]->InvoiceDate;
			    	$arrayName["TotalAmount"]=	$invoices[$i]->TotalAmount;
			    	

            		$invoicedetails = DB::table('invoicedetails')
            				->join('item' , 'invoicedetails.ItemId', '=', 'item.ItemId')
            				->select('invoicedetails.*','item.ItemName','item.ItemColor')
            				->where('InvoicesId', "$InvoicesId_")
							->get();


					$onePerticulerinvoice=[];		

					for ($ii=0; $ii <sizeof($invoicedetails) ; $ii++) {

								$title=$invoicedetails[$ii]->ItemName;

								$Quantity=		$invoicedetails[$ii]->Quantity;
					           	$Extra=			$invoicedetails[$ii]->Extra;
					           	$Damage=		$invoicedetails[$ii]->Damage;

					           	if((  is_null ($Quantity) ) 	or ($Quantity==0) )	{$Quantity="";}
					           	if((  is_null ($Extra)    ) 	or ($Extra==0   ) )	{$Extra="";}
					           	if((  is_null ($Damage)   ) 	or ($Damage==0  ) )	{$Damage="";}




				           		$columnnames[$title]			=$Quantity;
				           		$columnnames[$title."Ex"] 	=$Extra;
				           		$columnnames[$title."Dm"] 	=$Damage ;
				           		
	
								
							}	
//return json_encode($columnnames);
					$onePerticulerinvoice=array_merge((array)$columnnames,(array)$arrayName);

//return json_encode($onePerticulerinvoice);
					array_push( $tempallinvoicedata,$onePerticulerinvoice);


			}

//return json_encode($tempallinvoicedata);


			//////////////////////////////////////////////////

    	//return json_encode($tempallinvoicedata);
		//colum name arrange start
		$columnnamesfinal= [];
	

		array_push( $columnnamesfinal,array( 
			"title"=>'InvoicesId', 
			"data" =>'InvoicesId'
			) );
		array_push( $columnnamesfinal,array(
		 "title"=>'InvoiceDate', 
		 "data" =>'InvoiceDate' 
		 ) );



		foreach ($columnnames as $key => $value) {

			array_push( $columnnamesfinal,array( 
				"title"=>$key,
				"data" =>$key

				) );
	

		}
		
		array_push( $columnnamesfinal,array( 
				"title"=>	"Total(£)", 
				"data" =>	"TotalAmount" 

			) );

		//colum name arrange end

//return json_encode($columnnamesfinal);

/////////////////////////////////////////////////////////



		$lastcombine=[];

		$extrabtn=array('print');

		array_push( $lastcombine,array( 
			"columns"=>$columnnamesfinal,
			"data"=>$tempallinvoicedata,
			"dom"=> 'rtlp',
	       	"orderCellsTop"=> true,
	        "select"=> true,
	        "deferRender"=>true,
	        "scrollX"=> 800,
	        "scrollY"=> 350,
	        //"scrollCollapse"=> true,
	        "scroller"=> true,
	        //"autoWidth"=> true
	        //"paging"=> false,
	        "searching"=>false,
	        "destroy"=> true,
	        //"buttons"=> 'print'
			) );


    	 //return json_encode($lastcombine);
//var_dump(	$columnnamesfinal	); exit;

//////////////////////////////////////////////////////////////////////////////////

//$deliverynotedate = $_GET['deliverynotedate'];
//$deliverynotedate = "08/10/2016";
$deliverynotedate =date("d-m-Y"); 

//$invoiceslistarray = $_GET['invoiceslistarray'];
//$invoiceslistarray = json_decode($invoiceslistarray);

//$invoiceslist_Columns =$invoiceslistarray->columns;
//$invoiceslist_Data =$invoiceslistarray->data;


$invoiceslist_Columns =$columnnamesfinal;
$invoiceslist_Data =$tempallinvoicedata;

//var_dump(	$tempallinvoicedata	); exit;
//$customersinfo = $_GET['customersinfo'];
//$customersinfo = json_decode($customersinfo);

//var_dump($deliverynotedate);

//exit;

$outputfilename=$deliverynotedate.'_'.$customersinfo[0]->CustomerName.'.pdf' ;


//var_dump(	sizeof(($quantitylistarray)	)	);

//exit;

$tablestr="";
$tableColoumNamestr="";
$tableColoumTotalstr="";

$QTYtotal=0;
$DMGtotal=0;
$EXTRatotal=0;
$AllTotal=0;

$count_Total_array=[];


for ($i=0; $i < sizeof($invoiceslist_Columns); $i++) { 
	
	// var_dump( $invoiceslist_Columns[$i]['title']); exit;
		$title_=$invoiceslist_Columns[$i]['title'];
		$data_=$invoiceslist_Columns[$i]['data'];



		$tableColoumNamestr=$tableColoumNamestr.'<td width="5%" align="center">';
		$tableColoumNamestr=$tableColoumNamestr.($invoiceslist_Columns[$i]['title']);

		$tableColoumNamestr=$tableColoumNamestr.'</td>';

		$a=array($data_=>0);


//var_dump( $tableColoumNamestr );exit;
		$count_Total_array=array_merge( $count_Total_array , $a );
			

}

//var_dump( $tableColoumNamestr); exit;
//var_dump( $count_Total_array );exit;

for ($i=0; $i < sizeof($invoiceslist_Data); $i++) { 
	
	


		// $QTYtotal=	$QTYtotal+	($invoiceslist_Data[$i]->Quantity);
		// $DMGtotal=	$DMGtotal+	($invoiceslist_Data[$i]->Damage);
		// $EXTRatotal=$EXTRatotal+	($invoiceslist_Data[$i]->Extra);
		// $AllTotal=	$AllTotal  +	($invoiceslist_Data[$i]->TotalAmount);


		$tablestr=$tablestr.'<tr>';




		for ($j=0; $j < sizeof($invoiceslist_Columns); $j++) { 
			
			
			$dataName=$invoiceslist_Columns[$j]['data'];



			$invoiceslist_Single_Data=$invoiceslist_Data[$i];



			$Single_Data_value=$invoiceslist_Single_Data[$dataName];

			//var_dump( $Single_Data_ );exit;
				// $tableColoumNamestr=$tableColoumNamestr.'<td width="5%" align="center">';
				// $tableColoumNamestr=$tableColoumNamestr.($invoiceslist_Columns[$j]->title);

				// $tableColoumNamestr=$tableColoumNamestr.'</td>';
			
			
			$tablestr=$tablestr.'<td align="center">';
			$tablestr=$tablestr.($Single_Data_value);
			$tablestr=$tablestr.'</td>';	

			if( ($dataName=="InvoicesId")||($dataName=="InvoiceDate")  ){

			}else{
				//var_dump( $count_Total_array["$dataName"]   );exit;

				$count_Total_array["$dataName"] = floatval($count_Total_array["$dataName"]) +  floatval($Single_Data_value);
			}	

		}




		$tablestr=$tablestr.'</tr>';
	
			

}





for ($i=0; $i < sizeof($invoiceslist_Columns); $i++) { 
	
		$title_=$invoiceslist_Columns[$i]['title'];
		$data_=$invoiceslist_Columns[$i]['data'];

		$totalValu=$count_Total_array["$data_"];


		$tableColoumTotalstr=$tableColoumTotalstr.'<td width="5%" class="totals cost" align="center">';

		if( ($data_=="InvoicesId")||($data_=="InvoiceDate")  ){

		}else{
			$tableColoumTotalstr=$tableColoumTotalstr.( $totalValu );
		}

		$tableColoumTotalstr=$tableColoumTotalstr.'</td>';

			

}


//var_dump( $tableColoumTotalstr); exit;



//var_dump( $count_Total_array );exit;
//echo ( $tablestr);

//exit;

$html = '
<html>



	<head>


			<style>

			body {font-family: sans-serif;
				font-size: 10pt;
			}

			p {	margin: 0pt; }
			table.items {
				border: 0.1mm solid #000000;
			}

			td { vertical-align: top; }

			.items td {
				border-left: 0.1mm solid #000000;
				border-right: 0.1mm solid #000000;
			}

			table thead td { 

				text-align: center;
				border: 0.1mm solid #000000;
				font-variant: small-caps;
				font-weight: bold;

			}

			.items td.blanktotal {
				background-color: #EEEEEE;
				border: 0.1mm solid #000000;
				background-color: #FFFFFF;
				border: 0mm none #000000;
				border-top: 0.1mm solid #000000;
				border-right: 0.1mm solid #000000;
			}

			.items td.totals {
				text-align: right;
				border: 0.1mm solid #000000;
			}

			.items td.cost {
				text-align: "." center;
			}

	


			</style>
	</head>


	<body>

			<!--mpdf
			<htmlpageheader name="myheader">

				<table width="100%">
				<tr>

					<td width="35%" style="">
						<span style="font-weight: bold; font-size: 14pt;">Liton Laundry</span><br />
						Unit 44 Bilton Way<br />
						Luton, Bedfordshire<br />
						LU1 1UU<br />

					</td>


					<td width="65%" style="text-align: right;">
					<br />
					<span style="font-weight: bold; font-size: 30pt; text-align: middle;">Customer Statement</span>
					</td>

				</tr>
				</table>


				<div style="background-color:black; height:2px;margin-top:10px;margin-bottom:0px;"></div>


	

				<table width="100%" style="" cellpadding="10">
				<tr>

					<td width="45%" style="">
						<span style="font-size: 10pt; ">'
						.$customersinfo[0]->CustomerName.

						'</span><br />'

						.$customersinfo[0]->Address.' '.$customersinfo[0]->City.' '.$customersinfo[0]->Country.' '.

						'<br /><br />'

						.$customersinfo[0]->PostCode.

						'<br /><br />

						<span style="font-family:dejavusanscondensed; font-size: 20pt;">&#9742;</span> '

						.$customersinfo[0]->PhoneNo.

						'<br /><br />

					</td>

					<td width="20%">&nbsp;</td>

					<td width="35%" style="">
						<div style="text-align: right">Date: '

						.date("d/m/Y", strtotime($deliverynotedate) ).

						'</div>
					</td>

				</tr>
				</table>



			</htmlpageheader>





			<htmlpagefooter name="myfooter">

				<div style="border-top: 1px solid #000000; font-size: 9pt; text-align: center; padding-top: 3mm; ">
				Page {PAGENO} of {nb}
				</div>

			</htmlpagefooter>



			<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
			<sethtmlpagefooter name="myfooter" value="on" />

			mpdf-->

	

			

			<br /><br /><br /><br /><br />

			<table class="items" width="100%" style="font-size: 16pt; border-collapse: collapse;" cellpadding="8">
				<thead>
				<tr>

					'.$tableColoumNamestr.'

				</tr>
				</thead>


				<tbody>
				<!-- ITEMS HERE -->

				'.$tablestr.'
				<!-- END ITEMS HERE -->




				<tr>
				'.$tableColoumTotalstr.'
				</tr>

			


			</tbody>


		</table>


				


		<div style="text-align: center; font-style: italic;"></div>


	</body>

</html>
';
//==============================================================
//==============================================================
//==============================================================
//==============================================================
//==============================================================
//==============================================================
//echo $html;exit;



//echo  app_path();

require app_path().'/Libraries/vendor/autoload.php';
/*
define('_MPDF_PATH','../');
//include("../vendor/mpdf/mpdf/mpdf.php");
include("vendor/mpdf/mpdf/mpdf.php");
//@include('include.vendor.mpdf.mpdf.mpdf')

*/

$mpdf=new mPDF('c','A4','','',20,15,48,25,10,10); 
$mpdf->SetProtection(array('print'));
$mpdf->SetTitle("Liton Laundry - Customer Statement");
$mpdf->SetAuthor("Liton Laundry");
$mpdf->SetWatermarkText("");
$mpdf->showWatermarkText = true;
$mpdf->watermark_font = 'DejaVuSansCondensed';
$mpdf->watermarkTextAlpha = 0.1;
$mpdf->SetDisplayMode('fullpage');



$mpdf->WriteHTML($html);


$mpdf->Output($outputfilename, 'I'); exit;

exit;

//echo $html;

?>