<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use DB;

use App\myclass\queryclass;

use App\myclass\wrapfuncclass;


class QueryController extends Controller
{
     

 	public 	$timezone="Asia/Dhaka";
 	//public 	$timezone="Europe/London";



     public function taxcodeoption(){

      	//$qu = new queryclass();
      	$wrap= new wrapfuncclass();
     
			

		$texinfo = DB::select('select * from tax');
		json_encode($texinfo);
		//return $wrap->w();
		$arrayName = array("TaxCode","Description");
		return $wrap->optionwrap_value_multi_display(json_encode($texinfo),$arrayName,"TaxId");
		//return $wrap->optionwrap_value(json_encode($texinfo),"TaxCode","TaxId");


     	//$msg = "This is a simple message.";
     	//return response()->json(array('msg'=> $msg), 200);
      
   } 

   public function nominaloption(){

      	//$qu = new queryclass();
      	$wrap= new wrapfuncclass();
     
			

		$Nominalinfo = DB::select('select * from nominal');
		json_encode($Nominalinfo);
		$arrayName = array("NominalCode","CodeDescription");
		return $wrap->optionwrap_value_multi_display(json_encode($Nominalinfo),$arrayName,"NominalId");


     	//$msg = "This is a simple message.";
     	//return response()->json(array('msg'=> $msg), 200);
      
   }



   public function suppliersoption(){

      	//$qu = new queryclass();
      	$wrap= new wrapfuncclass();
     

		$supplier = DB::table('supplier')
					->join('tax', 'supplier.TaxId', '=', 'tax.TaxId')
					->select('supplier.SupplierId','supplier.SupplierName', 'tax.*')
					//->select('SupplierId', 'SupplierName')
					->where('Active', 'yes')
					->get();




		return $wrap->optionwrap_value(json_encode($supplier),"SupplierName","SupplierId");


     	//$msg = "This is a simple message.";
     	//return response()->json(array('msg'=> $msg), 200);
      
   }
 public function itemsOption(){

      	//$qu = new queryclass();
      	$wrap= new wrapfuncclass();
     

		$item = DB::table('item')
					->select('ItemId', 'ItemName','ItemColor')
					->where('Active', 'yes')
					->get();

		$arrayName = array("ItemName","ItemColor");
		return $wrap->optionwrap_value_multi_display(json_encode($item),$arrayName ,"ItemId");


     	//$msg = "This is a simple message.";
     	//return response()->json(array('msg'=> $msg), 200);
      
   }
 public function customersOption(){


      	$wrap= new wrapfuncclass();
     

		$customers = DB::table('customers')
					->select('CustomersId', 'CustomerNumber','CustomerName')
					->where('Active', 'yes')
					->get();

		return $wrap->optionwrap_value(json_encode($customers),'CustomerName' ,"CustomersId");

      
   }

   public function customerslist(){

      	//$qu = new queryclass();
      	//$wrap= new wrapfuncclass();
     
			

		$customers = DB::select('select * from customers');
		return json_encode($customers);
		
      
   }



   public function customeradd(Request $request){

   		date_default_timezone_set($this->timezone);

      	//$qu = new queryclass();
      	//$wrap= new wrapfuncclass();
     
			

		//$customers = DB::select('select * from customers');
		//return json_encode($customers);



    	$formdatas = $_POST['formdatas'];
		    parse_str($formdatas);
		    //return $CustomersId;
		     	
		     	echo $CustomerName;
				echo $Address;
				echo $City;
				echo $PostCode;
				echo $ContactPerson;
				echo $PhoneNo;
				echo $Email;
				echo $DriverNo;
				echo $TaxCode;
				echo $NominalCode;
				echo $Creditlimit;
				echo $Active;


				$days="";

				if (isset($sat)) { echo $sat;$days=$days."1_";} 
				if (isset($sun)) { echo $sun;$days=$days."2_";} 
				if (isset($mon)) { echo $mon;$days=$days."3_";} 
				if (isset($tue)) { echo $tue;$days=$days."4_";} 
				if (isset($wed)) { echo $wed;$days=$days."5_";} 
				if (isset($thu)) { echo $thu;$days=$days."6_";} 
				if (isset($fri)) { echo $fri;$days=$days."7_";} 
			

				echo $Notes;

				echo $ItemizingFixedBilling;
			$insert_id=0;	

			if($CustomersId<=0){

				$insert_id=DB::table('customers')->insertGetId([
										'CustomerName'	=> "$CustomerName",
										'CustomerNumber'	=> "$CustomerNumber",
										'CompaniesId'	=> '1',
				    			    	 'Address'=> "$Address",
				    			    	 'City'=> "$City", 
				    			    	 'PostCode'=> "$PostCode", 
				    			    	 'ContactPerson'=> "$ContactPerson", 
				    			    	 'PhoneNo'=> "$PhoneNo", 
				    			    	 'Email'=> "$Email", 
				    			    	 'DriverNo'=> "$DriverNo", 
				    			    	 'Notes'=> "$Notes", 
				    			    	 'Active'=> "$Active", 
				    			    	 'Creditlimit'=> "$Creditlimit",
				    			    	 'TaxCode'=> "$TaxCode", 
				    			    	 'NominalCode'=> "$NominalCode", 
				    			    	 'ItemizingFixedBilling'=> "$ItemizingFixedBilling", 
				    			    	 'Invoicetype'=> "$Invoicetype", 
				    			    	 'HotTowelFree'=> "$HotTowelFree",
				    			    	 'Weekday'=>"$days",
				    			    	 'RegistrationDate'=>date("Y-m-d")
				    			    	 ]);



						DB::table('weekdaychange')->insertGetId([
										'CustomersId'	=> "$insert_id",
										'WeekDateUpdateString'	=> "$days",
										'WeekDateUpdateDate'	=> date("Y-m-d")
				    			    	 ]);





			}else{


	           $week_day_change_or_not= DB::table('customers')
					->select('*')
					->where('CustomersId', "$CustomersId")
					->get();


				DB::table('customers')
				            ->where('CustomersId', "$CustomersId")
				            ->update([
										'CustomerName'	=> "$CustomerName",
										'CustomerNumber'	=> "$CustomerNumber",
										'CompaniesId'	=> '1',
				    			    	 'Address'=> "$Address",
				    			    	 'City'=> "$City", 
				    			    	 'PostCode'=> "$PostCode", 
				    			    	 'ContactPerson'=> "$ContactPerson", 
				    			    	 'PhoneNo'=> "$PhoneNo", 
				    			    	 'Email'=> "$Email", 
				    			    	 'DriverNo'=> "$DriverNo", 
				    			    	 'Notes'=> "$Notes", 
				    			    	 'Active'=> "$Active", 
				    			    	 'Creditlimit'=> "$Creditlimit",
				    			    	 'TaxCode'=> "$TaxCode", 
				    			    	 'NominalCode'=> "$NominalCode", 
				    			    	 'ItemizingFixedBilling'=> "$ItemizingFixedBilling", 
				    			    	 'Invoicetype'=> "$Invoicetype", 
				    			    	 'HotTowelFree'=> "$HotTowelFree",
				    			    	 'Weekday'=>"$days"
				    			    	 ]);

				           $insert_id= $CustomersId;





							if(($week_day_change_or_not[0]->Weekday)!=$days){


									DB::table('weekdaychange')
										->where('CustomersId', "$CustomersId")
										->where('WeekDateUpdateDate', date("Y-m-d") )
										->delete();


						           	DB::table('weekdaychange')
						           	      ->insertGetId([
												'CustomersId'	=> "$CustomersId",
												'WeekDateUpdateString'	=> "$days",
												'WeekDateUpdateDate'	=> date("Y-m-d")
						    			    	 ]);


							}				



			}
			

	

				if (isset($IsStanding)) {	


					echo "<<<<<<<<>>>>>>>>>>>";
					echo $IsStanding;
					echo $StandingAmount;
					echo $StandingType;
					echo $StandingDay;



					
					DB::table('customers')
			            ->where('CustomersId', "$insert_id")
			            ->update([
			            	'IsStanding' => "$IsStanding",
			            	'StandingDay' => "$StandingDay",
			            	'StandingAmount' => "$StandingAmount",
			            	'StandingType' => "$StandingType"
			            	]);


					

				}

				

				if($ItemizingFixedBilling=='Itemizing'){

					
					

				}elseif ($ItemizingFixedBilling=='FixedBill') {
					
					echo $AmountFix;



					DB::table('customers')
			            ->where('CustomersId', "$insert_id")
			            ->update([
			            	'AmountFix' => "$AmountFix"
			            	]);

				}

				


			
			
			
			var_dump(($insert_id));

	
      
   }


   public function customerdelete(){

		$CustomersId = $_POST['CustomersId'];

		DB::table('weekdaychange')
			->where('CustomersId', "$CustomersId")
			->delete();

		DB::table('customers')
			->where('CustomersId', "$CustomersId")
			->delete();


		return json_encode($CustomersId);
		
      
   }




   public function catagorylist(){


		$itemcategory = DB::select('select * from itemcategory');
		return json_encode($itemcategory);
		
      
   }





   public function previous_delivery_note_bycustomerid(){

   				date_default_timezone_set($this->timezone);

   				$CustomersId = $_POST['CustomersId'];
   				$lastnumberofdays = $_POST['lastnumberofdays'];

   				$previous_deliverynotes;
   				$datedate;
   				if($lastnumberofdays<0){
					$previous_deliverynotes = DB::table('invoices')
												->select('*')
												->where('CustomersId', "$CustomersId")
												->get();

   				}else{

   					$untilllastdate = time() - ($lastnumberofdays * 24 * 60 * 60);

   					//$t=time();
					$datedate=date("Y-m-d",$untilllastdate);

					$previous_deliverynotes = DB::table('invoices')
												->select('*')
												->where('CustomersId', "$CustomersId")
												->where('InvoiceDate', '>',$datedate)
												->get();

   				}


				

		//return json_encode($datedate);
		return json_encode($previous_deliverynotes);
		
      
   }





   public function previous_delivery_note_modify_info_show(){

   			$InvoicesId = $_POST['InvoicesId'];
/*
			$productscheck = DB::table('products')
									->select('ItemId')
									->where('CustomersId', "$CustomerId")
									->where('ItemId', "$ItemId")
									->get();*/

			$customer_id = DB::table('invoices')
										->select('*')
										->where('InvoicesId', "$InvoicesId")
										->get();

			$customer_id =$customer_id[0]->CustomersId;




			$product_item = DB::table('products')
            ->select('*')
            ->where('products.CustomersId', "$customer_id")
            ->get();


            $result=[];

           // return json_encode($product_item);


            for ($i=0; $i <sizeof($product_item) ; $i++) { 

            	$arrayName = array(
            		'Quantity' =>0 , 
            		'Extra' =>0 , 
            		'Damage' =>0 , 
            		'itemTotal' =>0  
            		);

            	$Item_Id=$product_item[$i]->ItemId;
            	$Item_Price=$product_item[$i]->Price;

            	//return json_encode($Item_Price);


				$previous_deliverynotes_each_item = DB::table('invoicedetails')
			            ->select('*')
			            ->where('invoicedetails.InvoicesId', "$InvoicesId")
			            ->where('invoicedetails.ItemId', "$Item_Id")
			            ->get();

			    //return json_encode($previous_deliverynotes_each_item);
			    // return json_encode($arrayName);       

			    if(sizeof($previous_deliverynotes_each_item)>0){
			    	$arrayName["Quantity"]=$previous_deliverynotes_each_item[0]->Quantity;
			    	$arrayName["Extra"]=$previous_deliverynotes_each_item[0]->Extra;
			    	$arrayName["Damage"]=$previous_deliverynotes_each_item[0]->Damage;
			    	$arrayName["itemTotal"]=( (intval($arrayName["Quantity"]) + intval($arrayName["Extra"]) )*$Item_Price);

			    }

			   // return json_encode($arrayName);


			    $temp=array_merge((array)$arrayName,(array)$product_item[$i]);
			    //return json_encode($temp);

			    array_push($result, $temp);


            }

		/*	$previous_deliverynotes = DB::table('products')
            ->join('invoicedetails', 'products.ItemId', '=', 'invoicedetails.ItemId')
            ->select('products.*', 'invoicedetails.*')
            ->where('invoicedetails.InvoicesId', "$InvoicesId")
            ->get();
*/

				//raju

		//return json_encode($datedate);
		return json_encode($result);
		
      
   }





   public function addcatagory(){


	
 		$ItemCategory = $_POST['ItemCategory'];

		echo $ItemCategory;



		$insert_id=DB::table('itemcategory')
						->insertGetId([ 'ItemCategory'	=> "$ItemCategory" ]);


   }


   public function updatecatagorylist(){


	
			$ClmName = array(
	 				"ItemCategoryId",
	 				"ItemCategory",

 				  );



 			$ItemCategoryId = $_POST['ItemCategoryId'];
 			$column = $_POST['column'];
 			$value = $_POST['value'];

	

			DB::table('itemcategory')
	            ->where('ItemCategoryId', "$ItemCategoryId")
	            ->update([
	            	"$ClmName[$column]" => "$value"
	            	]);
   }


   public function deletecatagory(){



 			$ItemCategoryId = $_POST['ItemCategoryId'];

				
			DB::table('itemcategory')
				->where('ItemCategoryId', "$ItemCategoryId")
				->delete();

   }



   public function itemlist(){




		$item = DB::select('select * from item');
		return json_encode($item);

   }


   public function deleteitemlist(){

			$ItemId = $_POST['ItemId'];

				
			DB::table('item')
				->where('ItemId', "$ItemId")
				->delete();


   }

   public function addnewitem(){


 			$ItemId = $_POST['ItemId'];
 			$formdatas = $_POST['formdatas'];
		    parse_str($formdatas);


		    /* echo $ItemName;
		     echo $AveragePrice;
		     echo $ItemCategoryId;
		     echo $ItemUnitId;
		     echo $InitialQty;
		     echo $ItemType;
		     echo $ItemNote;
		     echo $Active ;
		     echo $MinStock;
		     echo $MaxStock;*/



			if ($ItemId>0) {

			/*	$sql = "UPDATE `item` SET `ItemName`='$ItemName',`AveragePrice`='$AveragePrice',`ItemCategoryId`='$ItemCategoryId',`ItemUnitId`='$ItemUnitId',`InitialQty`='$InitialQty',`ItemType`='$ItemType',`ItemNote`='$ItemNote',`Active`='$Active',`MinStock`='$MinStock',`MaxStock`='$MaxStock' WHERE ItemId='$ItemId'";
				*/
	

				DB::table('item')
		            ->where('ItemId', "$ItemId")
		            ->update([ 
							'ItemName'	=> "$ItemName", 
							'AveragePrice'	=> "$AveragePrice", 
							'ItemCategoryId'	=> "$ItemCategoryId", 
							'ItemUnitId'	=> "$ItemUnitId", 
							'InitialQty'	=> "$InitialQty", 
							'ItemType'	=> "$ItemType", 
							'ItemNote'	=> "$ItemNote", 
							'Active'	=> "$Active", 
							'MinStock'	=> "$MinStock", 
							'MaxStock'	=> "$MaxStock", 
							]);


			}else{
/*
				$sql = "INSERT INTO `item`(`ItemName`, `AveragePrice`, `ItemCategoryId`, `ItemUnitId`, `InitialQty`, `ItemType`, `ItemNote`, `Active` , `MinStock`, `MaxStock`) VALUES ('$ItemName','$AveragePrice','$ItemCategoryId','$ItemUnitId','$InitialQty','$ItemType','$ItemNote','$Active' ,'$MinStock','$MaxStock')";
					*/
				
					$insert_id=DB::table('item')
						->insertGetId([ 
							'ItemName'	=> "$ItemName", 
							'AveragePrice'	=> "$AveragePrice", 
							'ItemCategoryId'	=> "$ItemCategoryId", 
							'ItemUnitId'	=> "$ItemUnitId", 
							'InitialQty'	=> "$InitialQty", 
							'ItemType'	=> "$ItemType", 
							'ItemNote'	=> "$ItemNote", 
							'Active'	=> "$Active", 
							'MinStock'	=> "$MinStock", 
							'MaxStock'	=> "$MaxStock", 
							]);
			}

    	


   }





   public function itemunitlist(){

		$itemunit = DB::select('select * from itemunit');
		return json_encode($itemunit);

   }



   public function itemunitoption(){


      	$wrap= new wrapfuncclass();

		$itemunitinfo = DB::select('select * from itemunit');

		echo $wrap-> optionwrap_value(json_encode($itemunitinfo),"ItemUnit","ItemUnitId");

   }



   public function itemcategoryoption(){




      	$wrap= new wrapfuncclass();

		$itemcategoryinfo = DB::select('select * from itemcategory');

		echo $wrap-> optionwrap_value(json_encode($itemcategoryinfo),"ItemCategory","ItemCategoryId");



   }



   public function itemunitadd(){



			$ItemUnit = $_POST['ItemUnit'];

				
					$insert_id=DB::table('itemunit')
									->insertGetId([ 
										'ItemUnit'	=> "$ItemUnit"
										
										]);

   }



   public function updateitemunitlist(){


			$ClmName = array(
	 				"ItemUnitId",
	 				"ItemUnit",

 				  );



 			$ItemUnitId = $_POST['ItemUnitId'];
 			$column = $_POST['column'];
 			$value = $_POST['value'];



			DB::table('itemunit')
	            ->where('ItemUnitId', "$ItemUnitId")
	            ->update([ 
						"$ClmName[$column]"	=> "$value" 
						]);


   }



   public function itemunitdelete(){



		$ItemUnitId = $_POST['ItemUnitId'];

		DB::table('itemunit')
			->where('ItemUnitId', "$ItemUnitId")
			->delete();

   }




   public function supplierlisttable(){



			$supplier = DB::table('supplier')
            ->join('tax', 'supplier.TaxId', '=', 'tax.TaxId')
            ->join('nominal', 'supplier.NominalId', '=', 'nominal.NominalId')
            ->select('supplier.*', 'tax.*', 'nominal.*')
            ->get();

            return json_encode($supplier);

    	

   }





   public function deletesupplierlist(){



 		$SupplierId = $_POST['SupplierId'];



		DB::table('supplier')
			->where('SupplierId', "$SupplierId")
			->delete();
 	

   }




   public function addnewsupplier(){


 			$SupplierId = $_POST['SupplierId'];
 			$formdatas = $_POST['formdatas'];
		    parse_str($formdatas);


	/*		  echo $SupplierName;
			  echo $Address;
			  echo $City;
			  echo $Country;
			  echo $PostCode;
			  echo $ContactPerson;
			  echo $PhoneNo;
			  echo $FaxNumber;
			  echo $Email;
			  echo $Notes;
			  echo $Active;
			  echo $Creditlimit;
			  //echo $DueSettlement;
			  echo $TaxId;
			  echo $NominalId;
			  //echo $VatNo;
*/

			if ($SupplierId>0) {

/*				$sql = "UPDATE `supplier` SET   `SupplierName`='$SupplierName',`Address`='$Address',`City`='$City',`Country`='$Country',`PostCode`='$PostCode',`ContactPerson`='$ContactPerson',`PhoneNo`='$PhoneNo',`FaxNumber`='$FaxNumber',`Email`='$Email',`Notes`='$Notes',`Active`='$Active',`Creditlimit`='$Creditlimit',`TaxId`='$TaxId',`NominalId`='$NominalId',`VatNo`='$VatNo' WHERE SupplierId='$SupplierId'";*/



			DB::table('supplier')
	            ->where('SupplierId', "$SupplierId")
	            ->update([ 
							'CompanyId'	=> '1', 
							'SupplierName'	=> "$SupplierName", 
							'Address'	=> "$Address", 
							'City'	=> "$City", 
							'Country'	=> "$Country", 
							'PostCode'	=> "$PostCode", 
							'ContactPerson'	=> "$ContactPerson", 
							'PhoneNo'	=> "$PhoneNo", 
							'Email'	=> "$Email", 
							'Notes'	=> "$Notes", 
							'Active'	=> "$Active", 
							'Creditlimit'	=> "$Creditlimit", 
							'TaxId'	=> "$TaxId", 
							'NominalId'	=> "$NominalId", 
						
							]);
			}else{

/*				$sql = "INSERT INTO `supplier`( `CompanyId`, `SupplierName`, `Address`, `City`, `Country`, `PostCode`, `ContactPerson`, `PhoneNo`, `FaxNumber`, `Email`, `Notes`, `Active`, `Creditlimit`, `TaxId`, `NominalId`) VALUES ( '1', '$SupplierName', '$Address', '$City', '$Country', '$PostCode', '$ContactPerson', '$PhoneNo', '$FaxNumber', '$Email', '$Notes', '$Active', '$Creditlimit', '$TaxId', '$NominalId')";*/


				$insert_id=DB::table('supplier')
						->insertGetId([ 
							'CompanyId'	=> '1', 
							'SupplierName'	=> "$SupplierName", 
							'Address'	=> "$Address", 
							'City'	=> "$City", 
							'Country'	=> "$Country", 
							'PostCode'	=> "$PostCode", 
							'ContactPerson'	=> "$ContactPerson", 
							'PhoneNo'	=> "$PhoneNo", 
							'Email'	=> "$Email", 
							'Notes'	=> "$Notes", 
							'Active'	=> "$Active", 
							'Creditlimit'	=> "$Creditlimit", 
							'TaxId'	=> "$TaxId", 
							'NominalId'	=> "$NominalId", 
						
							]);
					

			}


   }





  public function nextpurchaseno(){



			$purchase = DB::table('purchase')->max('PurchaseId');
            

            return json_encode($purchase);

    	

   }


  public function addpurchaseobject()
  {


			$PurchaseId = $_POST['PurchaseId'];
 			$SupplierId = $_POST['SupplierId'];
 			$PurchaseDate = $_POST['PurchaseDate'];
 			$EstimateDeliveryDate = $_POST['EstimateDeliveryDate'];
 			$ShippingCost = $_POST['ShippingCost'];
 			$amountwithtax = $_POST['amountwithtax'];
 			$totalamount = $_POST['totalamount'];
 			$rate = $_POST['rate'];
 			$netamount = $_POST['netamount'];
 			$Delivered = $_POST['Delivered'];
 			$purchaseitemsarray = $_POST['purchaseitemsarray'];
 			$PurchaseDetailNote = $_POST['PurchaseDetailNote'];


		    	$purchase_id = DB::table('purchase')->max('PurchaseId');


		    	if(($purchase_id+1)==$PurchaseId){
		    		

					$insert_id=DB::table('purchase')
						->insertGetId([
						'PurchaseId'	=> "$PurchaseId", 
						'SupplierId'	=> "$SupplierId", 
						'CompaniesId'	=>  "1" , 
						'PurchaseDate'	=> "$PurchaseDate", 
						'DueAmount'		=> "$amountwithtax", 
						'TotalAmount'	=> "$amountwithtax", 
						'DueDate'		=> "$EstimateDeliveryDate", 
						'Note'			=> "$PurchaseDetailNote", 
						'ShippingCost'	=> "$ShippingCost", 
						'Status'		=> "$Delivered"

						
							]);



						$len=sizeof($purchaseitemsarray);


						for ($i=0; $i < $len; $i++) { 
							

						  $ItemId_=$purchaseitemsarray[$i]['ItemId'];
						  $SupplierId_=$purchaseitemsarray[$i]['SupplierId'];
						  $Qty_=$purchaseitemsarray[$i]['Qty'];
						  $PurchaseUnitPrice_=$purchaseitemsarray[$i]['PurchaseUnitPrice'];
						  $Discount_=$purchaseitemsarray[$i]['Discount'];
						  $ItemId_=$purchaseitemsarray[$i]['ItemId'];
						  $Amount_=$purchaseitemsarray[$i]['Amount'];
						  $Delivered_=$purchaseitemsarray[$i]['Delivered'];

						  DB::table('purchasedetails')
							->insert([
							'PurchaseId'			=> "$insert_id" ,
							'ItemId'				=> "$ItemId_",
							'SupplierId'			=> "$SupplierId_", 
							'TaxRate'				=> "$rate",
							'Qty'					=> "$Qty_",
							'PurchasePrice'			=> "$PurchaseUnitPrice_",
							'Amount'				=> "$Amount_",
							'PurchaseDate'			=> "$PurchaseDate",
							'EstimateDeliveryDate'	=> "$EstimateDeliveryDate",
							'Discount'				=> "$Discount_", 
							'Delivered'				=> "$Delivered_",
							'PurchaseDetailNote'	=> "$PurchaseDetailNote"
							]);
						}






					echo json_encode("notequal");


		    	}else{
		    		

		    		DB::table('purchase')
						->where('PurchaseId', "$PurchaseId")
						->update([
						'PurchaseId'	=> "$PurchaseId", 
						'SupplierId'	=> "$SupplierId", 
						'CompaniesId'	=>  "1" , 
						'PurchaseDate'	=> "$PurchaseDate", 
						'DueAmount'		=> "$amountwithtax", 
						'TotalAmount'	=> "$amountwithtax", 
						'DueDate'		=> "$EstimateDeliveryDate", 
						'Note'			=> "$PurchaseDetailNote", 
						'ShippingCost'	=> "$ShippingCost", 
						'Status'		=> "$Delivered"

						
							]);

						DB::table('purchasedetails')
							->where('PurchaseId', "$PurchaseId")
				            ->delete();


						$len=sizeof($purchaseitemsarray);

						for ($i=0; $i < $len; $i++) { 
							

						  $ItemId_=$purchaseitemsarray[$i]['ItemId'];
						  $SupplierId_=$purchaseitemsarray[$i]['SupplierId'];
						  $Qty_=$purchaseitemsarray[$i]['Qty'];
						  $PurchaseUnitPrice_=$purchaseitemsarray[$i]['PurchaseUnitPrice'];
						  $Discount_=$purchaseitemsarray[$i]['Discount'];
						  $ItemId_=$purchaseitemsarray[$i]['ItemId'];
						  $Amount_=$purchaseitemsarray[$i]['Amount'];
						  $Delivered_=$purchaseitemsarray[$i]['Delivered'];

						  $ActualDeliveryDate_=$purchaseitemsarray[$i]['ActualDeliveryDate'];

						  //return json_encode($ActualDeliveryDate_);

						  if($ActualDeliveryDate_==""){


							  DB::table('purchasedetails')
								->insert([
								'PurchaseId'			=> "$PurchaseId" ,
								'ItemId'				=> "$ItemId_",
								'SupplierId'			=> "$SupplierId_", 
								'TaxRate'				=> "$rate",
								'Qty'					=> "$Qty_",
								'PurchasePrice'			=> "$PurchaseUnitPrice_",
								'Amount'				=> "$Amount_",
								'PurchaseDate'			=> "$PurchaseDate",
								'EstimateDeliveryDate'	=> "$EstimateDeliveryDate",
								'Discount'				=> "$Discount_", 
								'Delivered'				=> "$Delivered_",
								'PurchaseDetailNote'	=> "$PurchaseDetailNote"
								
								]);


						  }else{

							  DB::table('purchasedetails')
								->insert([
								'PurchaseId'			=> "$PurchaseId" ,
								'ItemId'				=> "$ItemId_",
								'SupplierId'			=> "$SupplierId_", 
								'TaxRate'				=> "$rate",
								'Qty'					=> "$Qty_",
								'PurchasePrice'			=> "$PurchaseUnitPrice_",
								'Amount'				=> "$Amount_",
								'PurchaseDate'			=> "$PurchaseDate",
								'EstimateDeliveryDate'	=> "$EstimateDeliveryDate",
								'Discount'				=> "$Discount_", 
								'Delivered'				=> "$Delivered_",
								'PurchaseDetailNote'	=> "$PurchaseDetailNote",
								"ActualDeliveryDate"	=> "$ActualDeliveryDate_" 
								]);


						       }


						}




			        	echo json_encode("equal");


		    	}



    	

   }

   public function PurchaseIdsearch(){

   	 		$purchasesearchid = $_POST['purchasesearchid'];


			$purchase = DB::table('purchase')
				->select('purchase.*')
		        ->where('PurchaseId', "$purchasesearchid")
	            ->get();


			$purchasedetails = DB::table('purchasedetails')
				->join('item', 'item.ItemId', '=', 'purchasedetails.ItemId')
				->join('supplier', 'supplier.SupplierId', '=', 'purchasedetails.SupplierId')
				->select('purchasedetails.*','item.ItemName','item.ItemColor','supplier.SupplierName')
		        ->where('PurchaseId', "$purchasesearchid")
	            ->get();

            $arrayName = array('purchase' => $purchase, 'purchasedetails' => $purchasedetails );


            return json_encode($arrayName);

    	

   }


   public function UpdateActualdelivarydate(){

   	 		$ActualDeliveryDate = $_POST['ActualDeliveryDate'];
   	 		$Delivered = $_POST['Delivered'];
   	 		$PurchaseDetailsId = $_POST['PurchaseDetailsId'];

   	 		//return json_encode($ActualDeliveryDate);

   	 		if($ActualDeliveryDate==""){

				DB::table('purchasedetails')
		            ->where('PurchaseDetailsId', "$PurchaseDetailsId")
		            ->update([ 
		            	"ActualDeliveryDate"	=> NULL,
		            	"Delivered"	=> "$Delivered" 
							]);

		           // return json_encode("null");

   	 		}else{


				DB::table('purchasedetails')
		            ->where('PurchaseDetailsId', "$PurchaseDetailsId")
		            ->update([ 
							"ActualDeliveryDate"	=> "$ActualDeliveryDate" ,
							"Delivered"	=> "$Delivered" 
							]);

		           // return json_encode("not null");

   	 		}



            return json_encode("updated");

    	

   }



   public function productslist(){

   	 		$customeridd = $_POST['customeridd'];

   				$products = DB::table('products')
				->select('products.*')
				->where('CustomersId', "$customeridd")
				->get();

            return json_encode($products);

    	

   }


   public function productlistbycustomerid(){

   	 		$CustomersId = $_POST['CustomersId'];

   				$products = DB::table('products')
				->select('products.*')
				->where('CustomersId', "$CustomersId")
				->get();

            return json_encode($products);

    	

   }


   public function productlist_predelivery_bycustomerid(){

   	 		$CustomersId = "";
   	 		$mode = $_POST['mode'];
   	 		if($mode=="restart"){


	   	 		$customers = DB::table('customers')
						->select('CustomersId')
						->where('Active', 'yes')
						->get();

				$CustomersId=$customers[0]->CustomersId;


   	 		}else if($mode=="chosecust"){


   	 			$CustomersId = $_POST['CustomersId'];


   	 		}






			$result = [];

			



   			$products = DB::table('products')
				->select('products.*')
				->where('CustomersId', "$CustomersId")
				->get();


/*
			len_products=sizeof($products);

			for ($i=0; $i <sizeof($products) ; $i++) { 
				$ItemId=$products[$i]->ItemId;


				$arrayName1 = array(
					'ProductsId' 	=> $products[$i]->ProductsId,
					'ProductName'	=> $products[$i]->ProductName,
					'Price' 		=> $products[$i]->Price,
					'CustomersId' 	=> $products[$i]->CustomersId,
					'Active' 		=> $products[$i]->Active,
					'ItemId' 		=> $products[$i]->ItemId,

					'day1' 			=> 0,
					'quantity1' 	=> 0,
					'extra1' 		=> 0,
					'damage1' 		=> 0,

					'day2' 			=> 0,					
					'quantity2' 	=> 0,
					'extra2' 		=> 0,
					'damage2' 		=> 0,

					'day3' 			=> 0,					
					'quantity3' 	=> 0,
					'extra3' 		=> 0,
					'damage3' 		=> 0,
					 );


				array_push($result,$arrayName1);

			}		
*/
			

			for ($i=0; $i <sizeof($products) ; $i++) { 

				$ItemId=$products[$i]->ItemId;

				$predeliveryunitarray =[];
				$predeliveryunitarray = array(

					'day1' 			=> 0,
					'quantity1' 	=> 0,
					'extra1' 		=> 0,
					'damage1' 		=> 0,

					'day2' 			=> 0,					
					'quantity2' 	=> 0,
					'extra2' 		=> 0,
					'damage2' 		=> 0,

					'day3' 			=> 0,					
					'quantity3' 	=> 0,
					'extra3' 		=> 0,
					'damage3' 		=> 0
					 );

				$InvoicesIds = DB::table('invoices')
					->select('InvoicesId','InvoiceDate')
					->where('CustomersId', "$CustomersId")
					->orderBy('InvoiceDate', 'desc')
					->get();

					//$temparray=[];

				for ($ii=0; (($ii <sizeof($InvoicesIds)) && ($ii<3 )); $ii++) {


					$InvoicesId1=$InvoicesIds[$ii]->InvoicesId;
					$InvoiceDate=$InvoicesIds[$ii]->InvoiceDate;



					$invoicedetails = DB::table('invoicedetails')
						->select('InvoicesId','Quantity','Extra','Damage')
		                ->where('InvoicesId',"$InvoicesId1")
		                ->where('ItemId',"$ItemId")
		                ->get();


		                if(sizeof($invoicedetails)>0){

				           	$predeliveryunitarray["day".($ii+1)		]	=$InvoiceDate;
				           	$predeliveryunitarray["quantity".($ii+1)]	=$invoicedetails[0]->Quantity;
				           	$predeliveryunitarray["extra".($ii+1)	]	=$invoicedetails[0]->Extra;
				           	$predeliveryunitarray["damage".($ii+1)	]	=$invoicedetails[0]->Damage;

		                }





/*
		           	$day="day".($ii+1);
		           	$quantity="quantity".($ii+1);
					$extra="extra".($ii+1);
					$damage="damage".($ii+1);

		           	$arrayNamep = array(
		           		"$day" 			=>$InvoiceDate ,
		           		"$quantity" 	=>$invoicedetails[0]->Quantity ,
		           		"$extra" 		=>$invoicedetails[0]->Extra ,
		           		"$damage" 		=>$invoicedetails[0]->Damage 
		           		 );

		       
		           	$temparray = array_merge( (array)$temparray, (array)$arrayNamep );
*/
		           	//return json_encode($temparray);


				}////pre delivery loop end





			$p = array_merge( (array)$products[$i], (array)$predeliveryunitarray );




			array_push($result,$p);

			
			//return json_encode($result);

			}//items looop end

          
			return json_encode($result);
			//end :)

   }


   public function productstocklistbycustomerid(){

   	 		$CustomersId = $_POST['CustomersId'];

   	 		$productstocklistarray = [];

   				$ItemIds = DB::table('products')
				->select('ItemId')
				->where('CustomersId', "$CustomersId")
				->get();

				for ($i=0; $i <sizeof($ItemIds) ; $i++) { 
					$Itemid=$ItemIds[$i]->ItemId;

					$InitialQty = DB::table('item')
		                ->where('ItemId',"$Itemid")
		                ->sum('InitialQty');

					$Quantity = DB::table('invoicedetails')
		                ->where('ItemId',"$Itemid")
		                ->sum('Quantity');


					$Extra = DB::table('invoicedetails')
		                ->where('ItemId',"$Itemid")
		                ->sum('Extra');

		                
					$Damage = DB::table('invoicedetails')
		                ->where('ItemId',"$Itemid")
		                ->sum('Damage');



					$QuantityReturned = DB::table('invoicedetails')
		                ->where('ItemId',"$Itemid")
		                ->where('Flag',"yes")
		                ->sum('Quantity');


					$ExtraReturned = DB::table('invoicedetails')
		                ->where('ItemId',"$Itemid")
		                ->where('Flag',"yes")
		                ->sum('Extra');

		            
		                $arrayName = array(
		                	'ItemId' 			=>$Itemid ,
		                	'InitialQty' 		=>$InitialQty ,
		                	'Quantity' 			=>$Quantity ,
		                	'Extra' 			=>$Extra ,
		                	'Damage' 			=>$Damage ,
		                	'QuantityReturned' 	=>$QuantityReturned ,
		                	'ExtraReturned' 	=>$ExtraReturned 
		                	 );
		                array_push($productstocklistarray,$arrayName);

					//echo $Itemid.">>>".$InitialQty."->".$Quantity."+".$Extra." X ".$Damage."(".$QuantityReturned."".$ExtraReturned.")<< ";


				}



            return json_encode($productstocklistarray);

    	

   }


   public function deliverydaybycustomerid(){

   	 		$CustomersId = $_POST['CustomersId'];



   			$Weekday = DB::table('customers')
				->select('Weekday')
				->where('CustomersId', "$CustomersId")
				->get();



			return json_encode($Weekday);

    	

   }






   public function pendingdeliverynotebycustomerid(){

   			date_default_timezone_set($this->timezone);

   	 		$CustomersId = $_POST['CustomersId'];



			$InvoicesIds = DB::table('invoices')
					->select('InvoicesId','InvoiceDate')
					->where('CustomersId', "$CustomersId")
					->orderBy('InvoiceDate', 'desc')
					->get();

$DayIndexFixArray=array(  "", 6, 7, 1, 2, 3, 4, 5 );

//return json_encode( $DayIndexFixArray[1] );
//return json_encode($InvoicesIds);

			$lastpendingwork = DB::table('pendingwork')
					->select('PendingDate')
					->where('CustomersId', "$CustomersId")
					->orderBy('PendingDate', 'desc')
					->get();

//return json_encode($lastpendingwork);

			$Weekday = DB::table('customers')
				->select('Weekday','CustomerName','RegistrationDate')
				->where('CustomersId', "$CustomersId")
				->get();

//return json_encode($Weekday);



			$Weekdaystr=$Weekday[0]->Weekday;
			$CustomerName=$Weekday[0]->CustomerName;
			$RegistrationDate=$Weekday[0]->RegistrationDate;

//return json_encode($RegistrationDate);

			$weekdatechangeall = DB::table('weekdaychange')
						->select('*')
						->where('CustomersId', "$CustomersId")
						->orderBy('WeekDateUpdateDate', 'asc')
						->get();

//return json_encode($weekdatechangeall);
			$st="";
			$missingArray=[];

			$lenn=sizeof($weekdatechangeall);

			for ($j=0; $j <($lenn) ; $j++) { 
				

				$Weekdaystr=$weekdatechangeall[$j]->WeekDateUpdateString;

				$datestr_1=$weekdatechangeall[$j]->WeekDateUpdateDate;
//return json_encode($datestr_1);

				$datestr_2="";

				if( $j==($lenn-1) ){


					$datestr_2=date("Y-m-d");
//return json_encode($datestr_2);
				}else{

					$datestr_2=$weekdatechangeall[$j+1]->WeekDateUpdateDate;
//return json_encode($datestr_2);
				}
				


				$start_date_stamp_time=intval(strtotime($datestr_1));
				$last_date_stamp_time=intval(strtotime($datestr_2));

//return json_encode($start_date_stamp_time." ".$last_date_stamp_time);

		//return json_encode($datestr);
		//return json_encode($Weekdaystr);
		//return json_encode(  intval(strtotime($datestr)) );

			if( ($Weekdaystr!="" ) ){ // delevery day ase ki na?

				$deleverydaynumbers = explode("_", $Weekdaystr);

//return json_encode(sizeof($deleverydaynumbers));
//return json_encode(($deleverydaynumbers));



				//$datestr="2016-07-21";//sunday=0---satrday=6
				//$weeknumbr=intval(date("W", strtotime($datestr)));
				$weeknumbr_1=intval(date("W", strtotime($datestr_1)));
				$startinvoiceyear=intval(date("o", strtotime( $datestr_1 )) );


				$weeknumbr_2=intval(date("W", strtotime($datestr_2)));
				$lastinvoiceyear=intval(date("o", strtotime( $datestr_2 )) );


				$currentweeknumbr=intval(date("W"));
				//$currentweeknumbr=80;

//return json_encode($startinvoiceyear."  ".$lastinvoiceyear);
//return json_encode($weeknumbr_1."  ".$weeknumbr_2);

				$st=$st.$start_date_stamp_time."  << ";

				//for ($i=$weeknumbr_1 ; $i <=$weeknumbr_2 ; $i++) { //week to week 
				for ($i=intval($start_date_stamp_time) ; $i <=$last_date_stamp_time ; ) { //week to week 


							$week_th=	intval(date("W",$i    ) );
							$yyear=		intval(date("o", $i  ) );



					for ($ii=0 ; $ii < sizeof($deleverydaynumbers)-1 ; $ii++) { 

						
					//$st=$st."<<  ".$i;

//return json_encode($yyear);

						$week_th_str=""; //week value two degit hote hobe
						if($week_th<10){
							$week_th_str="0".$week_th;
						}else{
							$week_th_str=$week_th;
						}

//return json_encode( $yyear.'-W'.$week_th_str.'-'.'3   '.date('Y-m-d', strtotime( $yyear.'-W'.$week_th_str.'-'.'3' )) );


						$expected_delevery_date=date('Y-m-d', strtotime( $yyear . '-W' . $week_th_str . '-' . intval($DayIndexFixArray[ $deleverydaynumbers[$ii] ] ) ) );


						$expected_delevery_date_stamp_time=intval(strtotime($expected_delevery_date));

//return json_encode($expected_delevery_date."  ".$expected_delevery_date_stamp_time);

						$invoices_has_or_not = DB::table('invoices')
							->select('InvoicesId')
							->where('CustomersId', "$CustomersId")
							->where('InvoiceDate', "$expected_delevery_date")
							->get();


//return json_encode($invoices_has_or_not);
//return json_encode($expected_delevery_date);


							$st=$st."year: ".$yyear." week:".$week_th."expected date: ".$expected_delevery_date."  expect:".$expected_delevery_date_stamp_time."  start:".$start_date_stamp_time."                                " ;

						if( (sizeof($invoices_has_or_not)==0) && ( $expected_delevery_date_stamp_time >=$start_date_stamp_time ) && ( $expected_delevery_date_stamp_time <$last_date_stamp_time ) ){




							//$st=$st."<br>".json_encode($expected_delevery_date)."" ;


							//$st=$st." "."  year:".$yyear."  weekth:".$week_th."                                " ;
							//$st=$st."<<  ".$i."  year:".$yyear."  weekth:".$week_th." '".$expected_delevery_date_stamp_time."'  ".json_encode($expected_delevery_date)." "." >>>" ;
							$arrayName = array(
		                	'PendingDate' =>"$expected_delevery_date" 
		                	 );

							array_push($missingArray, $arrayName);


						}else {

							//$st=$st."((((((".$i."))))))";


						}




					}


					 //$i=$i+(86400*7)-1;
					 $i=$i+604799;

				}

//return json_encode($st);

				//return json_encode($missingdeliveryarray);
				//return json_encode($st);


			}else{

				//return json_encode("weekday nai orr previous invoice nai");

			}//$Weekdaystr!="" end





			}//week day change array (for loop)

return json_encode($missingArray);
return json_encode($st);




   }


   public function previousdeleverylistbycustomerid(){

   	 		$CustomersId = $_POST['CustomersId'];

   	 		
   	 		$previousdeleverylistarray=[];

   				$InvoicesIds = DB::table('invoices')
				->select('InvoicesId','InvoiceDate')
				->where('CustomersId', "$CustomersId")
				->get();


				for ($i=0; $i <sizeof($InvoicesIds) ; $i++) { 
					$InvoicesId=$InvoicesIds[$i]->InvoicesId;
					$InvoiceDate=$InvoicesIds[$i]->InvoiceDate;

					$invoicedetails = DB::table('invoicedetails')
						->select('InvoicesId','Quantity','Extra','Damage')
		                ->where('InvoicesId',"$InvoicesId")
		                ->get();

				

		            
		                $arrayName = array(
		                	'InvoicesId' 			=>$InvoicesId ,
		                	'InvoiceDate' 			=>$InvoiceDate ,
		                	'invoicedetails' 		=>$invoicedetails 
		                	 );
		                array_push($previousdeleverylistarray,$arrayName);


				}



            return json_encode($previousdeleverylistarray);

    	

   }


   public function delete_single_product(){

   	 		$ProductsId = $_POST['ProductsId'];


			DB::table('products')
				->where('ProductsId', "$ProductsId")
				->delete();

            return json_encode("done");

    	

   }


   public function customer_message_bycustomerid(){

   	 		$CustomersId = $_POST['CustomersId'];


			$result=DB::table('messages')
				    ->select('*')
					->where('CustomersId', "$CustomersId")
					->get();

            return json_encode($result);

    	

   }

   public function delivery_note_msg_save(){

   	 		$CustomersId 	= $_POST['CustomersId'];
   	 		$MessageDate 	= $_POST['MessageDate'];
   	 		$Message 		= $_POST['Message'];

			DB::table('messages')
						->insert([
							
								'MessageDate'	=> "$MessageDate",
								'Message'			=> "$Message",
								'CustomersId'	=> "$CustomersId",
								'CompaniesId'		=> "1"

		    			    	 ]);

	         return json_encode("ok");	



    	

   }


   public function customersProductsadd(){

   	 		$mode 			= $_POST['mode'];
   	 		$CustomerId 	= $_POST['CustomerId'];
   	 		$ItemId 		= $_POST['ItemId'];
   	 		$ProductName 	= $_POST['ProductsName'];
   	 		$ProductPrice 	= $_POST['ProductPrice'];
   	 		$Active 		= $_POST['Active'];


   	 		//return json_encode($mode);

		if($mode=="add"){
				$productscheck = DB::table('products')
							->select('ItemId')
							->where('CustomersId', "$CustomerId")
							->where('ItemId', "$ItemId")
							->get();

				$len=sizeof($productscheck );
				

		 		if($len>0){

		 	/*		DB::table('products')
							->where('CustomersId', "$CustomerId")
							->where('ItemId', "$ItemId")
				            ->update([
											'ProductName'	=> "$ProductName",
											'Price'			=> "$ProductPrice",
											'CustomersId'	=> "$CustomerId",
											'Active'		=> "$Active",
											'ItemId'		=> "$ItemId"
							
					    			    	 ]);*/


		 			return json_encode("alreadyexist");	

		 		}else{


				DB::table('products')
							->insert([
											'ProductName'	=> "$ProductName",
											'Price'			=> "$ProductPrice",
											'CustomersId'	=> "$CustomerId",
											'Active'		=> "$Active",
											'ItemId'		=> "$ItemId"
							
					    			    	 ]);

	            return json_encode("ok");	

		 		}

		}elseif ($mode=="modify") {

				DB::table('products')
								->where('CustomersId', "$CustomerId")
								->where('ItemId', "$ItemId")
					            ->update([
												'ProductName'	=> "$ProductName",
												'Price'			=> "$ProductPrice",
												'CustomersId'	=> "$CustomerId",
												'Active'		=> "$Active",
												'ItemId'		=> "$ItemId"
								
						    			    	 ]);
				return json_encode("modified");

		}
    	

   }




   public function delivery_note_save(){

   	 		$quantitylistarray = $_POST['quantitylistarray'];
   	 		$deliverynotedate = $_POST['deliverynotedate'];
   	 		$totalallamount = $_POST['totalallamount'];

   	 		/*CustomersId`, `CompaniesId`, `InvoiceDate`, `Notes`, `Status`, `TotalAmount`, `DueAmount`, `DueDate*/

   	 		$CustomersId=$quantitylistarray[0]["CustomersId"];
			$TotalAmount=$quantitylistarray[0]["TotalAmount"];

			$invoices_id=DB::table('invoices')
				->insertGetId([
								'CustomersId'	=> "$CustomersId",
								'CompaniesId'			=> "1",
								'InvoiceDate'	=> "$deliverynotedate",
								'Status'		=> "yes",
								'TotalAmount'	=> "$totalallamount",
								'DueAmount'		=> "$totalallamount"
				
						    	 ]);


			$len=sizeof($quantitylistarray);
			// return json_encode($quantitylistarray);


			for ($i=0; $i <$len ; $i++) { 



	   	 		$ProductsId=	$quantitylistarray[$i]["ProductsId"];
	   	 		$Price=			$quantitylistarray[$i]["Price"];
	   	 		$ItemId=		$quantitylistarray[$i]["ItemId"];
	   	 		$Quantity=		$quantitylistarray[$i]["Quantity"];
	   	 		$Extra=			$quantitylistarray[$i]["Extra"];
	   	 		$Damage=		$quantitylistarray[$i]["Damage"];
	   	 		$Discount=		$quantitylistarray[$i]["Discount"];
	   	 		$TotalAmount=	$quantitylistarray[$i]["TotalAmount"];

	   	 		$sumsum=$Quantity+$Extra+$Damage;
				//return json_encode($sumsum);
	   	 				//if($TotalAmount>0){
	   	 				if($sumsum>0){

							DB::table('invoicedetails')
								->insertGetId([
											'InvoicesId'	=> "$invoices_id",
											'ItemId'		=> "$ItemId",
											'ProductsId'	=> "$ProductsId",
											'Quantity'		=> "$Quantity",
											'Extra'			=> "$Extra",
											'Damage'		=> "$Damage",
											'PricePerUnit'	=> "$TotalAmount",
											'Flag'			=> "no"
											
											]);

								 echo json_encode("yyy  ");


	   	 				}



				}

			

            return json_encode($invoices_id);

    	

   }









   public function modify_previous_deliverynote_save(){

   	 		$InvoicesId = $_POST['InvoicesId'];
   	 		$TotalAmount_ = $_POST['totalamount'];
   	 		$PreviousDeliveryNoteDate = $_POST['PreviousDeliveryNoteDate'];
   	 		$P_D_N_array = $_POST['P_D_N_array'];


			//return json_encode($P_D_N_array);

   	 		/*CustomersId`, `CompaniesId`, `InvoiceDate`, `Notes`, `Status`, `TotalAmount`, `DueAmount`, `DueDate*/

   	 		//$CustomersId=$quantitylistarray[0]["CustomersId"];
			//$TotalAmount=$quantitylistarray[0]["TotalAmount"];


			/*$invoices_id=DB::table('invoices')
				->insertGetId([
								'CustomersId'	=> "$CustomersId",
								'CompaniesId'			=> "1",
								'InvoiceDate'	=> "$deliverynotedate",
								'Status'		=> "yes",
								'TotalAmount'		=> "$totalallamount",
								'DueAmount'		=> "$totalallamount"
				
						    	 ]);*/
			DB::table('invoices')
				->where('InvoicesId', "$InvoicesId")
				->update([
					'InvoiceDate'	=> "$PreviousDeliveryNoteDate",
					'TotalAmount'	=> "$TotalAmount_",
					'DueAmount'		=> "$TotalAmount_"
					]);


			$len=sizeof($P_D_N_array);

			


			DB::table('invoicedetails')
						->where('InvoicesId', "$InvoicesId")
						->delete();




			for ($i=0; $i <$len ; $i++) { 



	   	 		$ProductsId=$P_D_N_array[$i]["ProductsId"];
	   	 		$Price=$P_D_N_array[$i]["Price"];
	   	 		$ItemId=$P_D_N_array[$i]["ItemId"];
	   	 		$Quantity=$P_D_N_array[$i]["Quantity"];
	   	 		$Extra=$P_D_N_array[$i]["Extra"];
	   	 		$Damage=$P_D_N_array[$i]["Damage"];
	   	 		//$Discount=$P_D_N_array[$i]["Discount"];
	   	 		$TotalAmount=$P_D_N_array[$i]["TotalAmount"];



	   	 				if($TotalAmount>0){

	   	 					

							DB::table('invoicedetails')
								->insertGetId([
											'InvoicesId'	=> "$InvoicesId",
											'ItemId'		=> "$ItemId",
											'ProductsId'	=> "$ProductsId",
											'Quantity'		=> "$Quantity",
											'Extra'			=> "$Extra",
											'Damage'		=> "$Damage",
											'PricePerUnit'	=> "$TotalAmount",
											'Flag'			=> "no"
											
											]);

								//return json_encode($TotalAmount);

								 //echo json_encode("yyy  ");


	   	 				}



				}

			

            return json_encode("ok");
            return json_encode($InvoicesId);

    	

   }













   public function statement_by_customer_Genarate(){

   	 		$CustomersId = 					$_POST['customeridd'];
   	 		$statementbycustomerdateStart = $_POST['statementbycustomerdateStart'];
   	 		$statementbycustomerdateEnd = 	$_POST['statementbycustomerdateEnd'];

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
				            		$title."Extra"=>0, 
				            		$title."Damage"=>0, 
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
				           		$columnnames[$title."Extra"] 	=$Extra;
				           		$columnnames[$title."Damage"] 	=$Damage ;
				           		
	
								
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
				"title"=>	"TotalAmount(£)", 
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


    	 return json_encode($lastcombine);
    	 return json_encode($allinvoicedata);
    	 return json_encode($onePerticulerinvoice);
    	 return json_encode($lastcombine);
    	 return json_encode($columnnamesfinal);
    	 return json_encode($columnnames);
    	 return json_encode($result);
    	 return json_encode($invoices);

   }





   public function todaydeleverynoterequest(){

   		date_default_timezone_set($this->timezone);

   		//date_default_timezone_set('UTC');
   		$DayIndexFixArray=array(  "", 6, 7, 1, 2, 3, 4, 5 );
   		$DayIndexFixArrayReverse=array(  "", 3, 4, 5, 6, 7, 1, 2 );



   		$dat=date("Y-m-d");

   		//$dat=date("Y-m-d H:i:s");return json_encode($dat);

   		$weeknumbr=date("N");
   		$my_day_index=$DayIndexFixArrayReverse[$weeknumbr];


   		//$my_day_index=7;
		$customers = DB::table('customers')
					->select('CustomersId','CustomerName','CustomerNumber','AmountFix','Weekday')
					->where('Active', 'yes')
					->where('Weekday', 'like', '%'.$my_day_index.'%')
					->get();

return json_encode($customers);

      
   }




   public function newtaxlisttable(){



		$tax = DB::table('tax')
					->select('*')
					->get();

		return json_encode($tax);

      
   }




   public function addnewtax1(){

   		$TaxCode = 		$_POST['TaxCode'];
   		$Rate = 		$_POST['Rate'];
   		$Description =	$_POST['Description'];

       	$tax=DB::table('tax')
       	      ->insertGetId([
					'TaxCode'		=> "$TaxCode",
					'Rate'			=> "$Rate",
					'Description'	=> "$Description"
			    	 ]);


		return json_encode($tax);

      
   }




////////////////////////////////////////////


   public function updatenewtaxtable(){


	
			$ClmName = array(
	 				"TaxId",
	 				"TaxCode",
	 				"Rate",
	 				"Description"

 				  );




 			$TaxId = $_POST['TaxId'];
 			$column = $_POST['column'];
 			$value = $_POST['value'];

			//return json_encode($TaxId." ".$column." ".$value." ".$ClmName[$column]);

			DB::table('tax')
	            ->where('TaxId', "$TaxId")
	            ->update([
	            	"$ClmName[$column]" => "$value"
	            	]);

	        ///
   }


   public function deletenewtaxtable(){



 			$TaxId = $_POST['TaxId'];

				
			DB::table('tax')
				->where('TaxId', "$TaxId")
				->delete();

   }




   public function deliverynotepdfcustomerinforequest(){



 			$CustomersId = $_POST['CustomersId'];

				
			$customersinfo=DB::table('customers')
				->select('*')
				->where('CustomersId', "$CustomersId")
				->get();

			return json_encode($customersinfo);

   }




   public function Restore_Backup_Database(){



		$targetPath="";

		if ( 0 < $_FILES['file']['error'] ) {

			echo 'Error';
	    }
	    else {

			$basedir = base_path();
			$upload_dir = $basedir.'/public/uploads/';

			$sourcePath = $_FILES['file']['tmp_name'];       // Storing source path of the file in a variable


			$targetPath = $upload_dir."/".$_FILES['file']['name']; // Target path where file is to be stored





			move_uploaded_file($sourcePath,$targetPath) ; 
			//echo ( $targetPath."\n" );

			//return json_encode($sourcePath);

			$DB_USER= 		"root";
		    $DB_PASSWORD= 	"PS";
		    $DB_NAME= 		"databasename";
		    //$DB_HOST= 		DB_HOST;


			//mysql –u [username] –password=[password] [database name] < [dump file] [/code] 
			$command="mysql --user=$DB_USER --password=$DB_PASSWORD $DB_NAME< $targetPath";

			system($command);
			unlink($targetPath);

			echo "done";

	    }

	}













}
