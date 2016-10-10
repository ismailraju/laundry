<?php  

$deliverynotedate = $_GET['deliverynotedate'];

$quantitylistarray = $_GET['quantitylistarray'];
$quantitylistarray = json_decode($quantitylistarray);

$customersinfo = $_GET['customersinfo'];
$customersinfo = json_decode($customersinfo);


$outputfilename=$deliverynotedate.'_'.$customersinfo[0]->CustomerName.'.pdf' ;

//var_dump( $customersinfo);
//var_dump(	sizeof(($quantitylistarray)	)	);

//exit;

$tablestr="";
$QTYtotal=0;
$DMGtotal=0;
$EXTRatotal=0;
$AllTotal=0;

for ($i=0; $i < sizeof($quantitylistarray); $i++) { 
	
	//echo $quantitylistarray[$i]->ProductName;
	//echo '<br/>';

	$QTYtotal=	$QTYtotal+	($quantitylistarray[$i]->Quantity);
	$DMGtotal=	$DMGtotal+	($quantitylistarray[$i]->Damage);
	$EXTRatotal=$EXTRatotal+	($quantitylistarray[$i]->Extra);
	$AllTotal=		$AllTotal+	($quantitylistarray[$i]->TotalAmount);


		$tablestr=$tablestr.'<tr><td align="center">';
		$tablestr=$tablestr.($quantitylistarray[$i]->ProductName);

		$tablestr=$tablestr.'</td><td align="center">';
		$tablestr=$tablestr.($quantitylistarray[$i]->Quantity);

		$tablestr=$tablestr.'</td><td align="center">';
		$tablestr=$tablestr.($quantitylistarray[$i]->Extra);

		$tablestr=$tablestr.'</td><td align="center">';
		$tablestr=$tablestr.($quantitylistarray[$i]->Damage);

		$tablestr=$tablestr.'</td><td class="cost">&pound;';
		$tablestr=$tablestr.($quantitylistarray[$i]->Price);

		$tablestr=$tablestr.'</td><td class="cost">&pound;';
		$tablestr=$tablestr.($quantitylistarray[$i]->TotalAmount);

		$tablestr=$tablestr.'</td></tr>';

			

}

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
					<span style="font-weight: bold; font-size: 40pt; text-align: middle;">Delivery Note</span>
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

			<table class="items" width="100%" style="font-size: 9pt; border-collapse: collapse;" cellpadding="8">
				<thead>
				<tr>

					<td width="40%">Product Name</td>
					<td width="10%">Quantity</td>
					<td width="10%">Extra</td>
					<td width="10%">Damage</td>
					<td width="15%">Price</td>
					<td width="15%">Amount</td>

				</tr>
				</thead>


				<tbody>
				<!-- ITEMS HERE -->

				'.$tablestr.'
				<!-- END ITEMS HERE -->




				<tr>
				<td class="totals cost">TOTAL</td>
				<td class="totals cost">'.$QTYtotal.'</td>
				<td class="totals cost">'.$EXTRatotal.'</td>
				<td class="totals cost">'.$DMGtotal.'</td>
				<td class="totals cost"></td>
				<td class="totals cost">&pound;'.$AllTotal.'</td>
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
$mpdf->SetTitle("Liton Laundry - Invoice");
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