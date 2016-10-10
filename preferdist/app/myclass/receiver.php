<?php 

include 'include/queryclassadmin.php';
include 'include/wrapfuncclass.php';
include 'include/ssp.class.php';

$q = new queryclass();
$wrap = new wrapfuncclass();

ini_set( 'html_errors' , 0 );




			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "londrydatabase";




switch ($_POST['action']) {


	case 'test1':
	    //echo "successfull";


		$texinfo=$q->texinfo();

		echo $wrap->optionwrap($texinfo,"TaxCode");
		//var_dump($wrap->option("sdf"));
		//$k=$qq->customerinfo();
		//echo $k;
		//echo 'ghfg';
    break;


    case 'customerlisttabledynamic':


    	/*// Create connection
			//$conn = new mysqli($servername, $username, $password, $dbname);
			$conn = new mysqli("localhost", "root", "","londrydatabase");
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			

			$sql = "SELECT * FROM `itemcategory` WHERE 1";
				
			$result = $conn->query($sql);

			//var_dump($sql);
			$ans=array();

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        //echo "id: " . $row["CustomersId"]. "<br>";

			        array_push($ans, $row);

			    }
			} else {
			    echo "0 results";
			}

			echo json_encode($ans);*/

			// DB table to use
			$table ="customers";
			//$table ='wp_ab_coupons';
			 
			// Table's primary key
			$primaryKey = 'CustomersId';
			 
			// Array of database columns which should be read and sent back to DataTables.
			// The `db` parameter represents the column name in the database, while the `dt`
			// parameter represents the DataTables column identifier. In this case object
			// parameter names

			
			$columns = array(
			    array( 'db' => 'CustomersId', 			'dt' => 'CustomersId' ),
			    array( 'db' => 'CustomerNumber', 			'dt' => 'CustomerNumber' ),
			    array( 'db' => 'CustomerName', 			'dt' => 'CustomerName' ),
			    array( 'db' => 'Address', 			'dt' => 'Address' ),
			    array( 'db' => 'City', 			'dt' => 'City' ),
			    array( 'db' => 'Country', 			'dt' => 'Country' ),
			    array( 'db' => 'PostCode', 			'dt' => 'PostCode' ),
			    array( 'db' => 'ContactPerson', 			'dt' => 'ContactPerson' ),
			    array( 'db' => 'PhoneNo', 			'dt' => 'PhoneNo' ),
			    array( 'db' => 'Email', 			'dt' => 'Email' ),
			    array( 'db' => 'DriverNo', 			'dt' => 'DriverNo' ),
			    array( 'db' => 'Notes', 			'dt' => 'Notes' ),
			    array( 'db' => 'Active', 			'dt' => 'Active' ),
			    array( 'db' => 'Creditlimit', 			'dt' => 'Creditlimit' ),
			    array( 'db' => 'TaxCode', 			'dt' => 'TaxCode' ),
			    array( 'db' => 'NominalCode', 			'dt' => 'NominalCode' ),
			    array( 'db' => 'ItemizingFixedBilling',  		'dt' => 'ItemizingFixedBilling' ),
			    array( 'db' => 'Invoicetype',  		'dt' => 'Invoicetype' ),
			    array( 'db' => 'AmountFix',  		'dt' => 'AmountFix' ),
			    array( 'db' => 'HotTowelFree',  		'dt' => 'HotTowelFree' ),
			    array( 'db' => 'Weekday',  		'dt' => 'Weekday' ),
			    array( 'db' => 'IsStanding',  		'dt' => 'IsStanding' ),
			    array( 'db' => 'StandingDay',  		'dt' => 'StandingDay' ),
			    array( 'db' => 'StandingAmount',  		'dt' => 'StandingAmount' ),
			    array( 'db' => 'StandingType',  		'dt' => 'StandingType' ),


			);
			 
			// SQL server connection information
			$sql_details = array(
			    'user' => 'root',
			    'pass' => '',
			    'db'   => 'londrydatabase',
			    'host' => 'localhost'
			);
			 
			 
			/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
			 * If you just want to use the basic configuration for DataTables with PHP
			 * server-side, there is no need to edit below this line.
			 */
			 
			//require( 'ssp.class.php' );
			 
			echo json_encode(
			    SSP::simple( $_POST, $sql_details, $table, $primaryKey, $columns )
			    //SSP::simple( $_POST, $wpdb, $table, $primaryKey, $columns )
			);

			//var_dump($ans);
    	break;


    case 'newcust':
    	$formdatas = $_POST['formdatas'];
		     parse_str($formdatas);

		     	
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
				


			// Create connection
			//$conn = new mysqli($servername, $username, $password, $dbname);
			$conn = new mysqli("localhost", "root", "","londrydatabase");
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			echo $Invoicetype;

			$sql = "INSERT INTO `customers`( `CompaniesId`, `CustomerName`, `Address`, `City`, `PostCode`, `ContactPerson`, `PhoneNo`, `Email`, `DriverNo`, `Notes`, `Active`, `Creditlimit` ,`NominalCode`, `ItemizingFixedBilling`, `Invoicetype` , `HotTowelFree`, `Weekday`) VALUES (1,'$CustomerName','$Address','$City','$PostCode','$ContactPerson','$PhoneNo','$Email','$DriverNo','$Notes','$Active','$Creditlimit','$NominalCode','$ItemizingFixedBilling','$Invoicetype','$HotTowelFree','$days')";
				
			$result = $conn->query($sql);


			//$sql = "SELECT LAST_INSERT_ID()";
			//$insert_id = $conn->query($sql);
			//$insert_id =mysql_insert_id();
			$insert_id =  $conn->insert_id;

/*			$sql = "SELECT * FROM customers WHERE 1;";


			$result=$conn->query($sql);
			//var_dump($sql);
			$ans=array();

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        //echo "id: " . $row["CustomersId"]. "<br>";

			        array_push($ans, $row);

			    }
			} else {
			    echo "0 results";
			}

			echo json_encode($ans);*/





				if (isset($IsStanding)) {	


					echo "<<<<<<<<>>>>>>>>>>>";
					echo $IsStanding;
					echo $StandingAmount;
					echo $StandingType;
					echo $StandingDay;



					$sql = "UPDATE `customers` SET `IsStanding` = '$IsStanding',`StandingDay`=$StandingDay,`StandingAmount`=$StandingAmount,`StandingType`='$StandingType' WHERE `customers`.`CustomersId` = $insert_id";
				
					$result = $conn->query($sql);


					var_dump($result);

				}

				

				if($ItemizingFixedBilling=='Itemizing'){

					
					//echo $AmountFix;

				}elseif ($ItemizingFixedBilling=='FixedBill') {
					
					echo $AmountFix;


					$sql = "UPDATE `customers` SET `AmountFix` = '$AmountFix'   WHERE CustomersId='$insert_id'";
				
					$result = $conn->query($sql);

				}

				





			/*$sql = "INSERT INTO `customers`( `CompaniesId`, `CustomerName`, `Address`, `City`, `PostCode`, `ContactPerson`, `PhoneNo`, `Email`, `DriverNo`, `Notes`, `Active`, `Creditlimit` , `TaxCode`, `NominalCode`, `ItemizingFixedBilling`, `Invoicetype`, `AmountFix`, `HotTowelFree`, `Weekday`, `IsStanding`, `StandingDay`, `StandingAmount`, `StandingType`) VALUES ('1','$CustomerName','$Address','$City','$PostCode','$ContactPerson','$PhoneNo','$Email','$DriverNo','$Notes','$Active','$Creditlimit','$TaxCode','$NominalCode','$ItemizingFixedBilling','$Invoicetype','$AmountFix','$HotTowelFree','$days','$IsStanding','$StandingDay','$StandingAmount','$StandingType')";
				
			$result = $conn->query($sql);*/

			
			
			$conn->close();

			var_dump(($insert_id));













    break;

    //case 'catagorylisttable':
    case 'catagorylisttable':


    	// Create connection
			//$conn = new mysqli($servername, $username, $password, $dbname);
			$conn = new mysqli("localhost", "root", "","londrydatabase");
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			

			$sql = "SELECT * FROM `itemcategory` WHERE 1";
				
			$result = $conn->query($sql);

			//var_dump($sql);
			$ans=array();

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        //echo "id: " . $row["CustomersId"]. "<br>";

			        array_push($ans, $row);

			    }
			} else {
			    echo "0 results";
			}

			echo json_encode($ans);

			//var_dump($ans);
    	break;
//case 'catagorylisttable':
    case 'catagorylisttabledynamic':


    	/*// Create connection
			//$conn = new mysqli($servername, $username, $password, $dbname);
			$conn = new mysqli("localhost", "root", "","londrydatabase");
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			

			$sql = "SELECT * FROM `itemcategory` WHERE 1";
				
			$result = $conn->query($sql);

			//var_dump($sql);
			$ans=array();

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        //echo "id: " . $row["CustomersId"]. "<br>";

			        array_push($ans, $row);

			    }
			} else {
			    echo "0 results";
			}

			echo json_encode($ans);*/

			// DB table to use
			$table ="itemcategory";
			//$table ='wp_ab_coupons';
			 
			// Table's primary key
			$primaryKey = 'ItemCategoryId';
			 
			// Array of database columns which should be read and sent back to DataTables.
			// The `db` parameter represents the column name in the database, while the `dt`
			// parameter represents the DataTables column identifier. In this case object
			// parameter names

			
			$columns = array(
			    array( 'db' => 'ItemCategoryId', 			'dt' => 'ItemCategoryId' ),
			    array( 'db' => 'ItemCategory',  		'dt' => 'ItemCategory' ),


			);
			 
			// SQL server connection information
			$sql_details = array(
			    'user' => 'root',
			    'pass' => '',
			    'db'   => 'londrydatabase',
			    'host' => 'localhost'
			);
			 
			 
			/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
			 * If you just want to use the basic configuration for DataTables with PHP
			 * server-side, there is no need to edit below this line.
			 */
			 
			//require( 'ssp.class.php' );
			 
			echo json_encode(
			    SSP::simple( $_POST, $sql_details, $table, $primaryKey, $columns )
			    //SSP::simple( $_POST, $wpdb, $table, $primaryKey, $columns )
			);

			//var_dump($ans);
    	break;

 case 'newcatagory':


 			$ItemCategory = $_POST['ItemCategory'];

		     echo $ItemCategory;

			// Create connection
			//$conn = new mysqli($servername, $username, $password, $dbname);
			$conn = new mysqli("localhost", "root", "","londrydatabase");
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 



			$sql = "INSERT INTO `itemcategory`( `ItemCategory`) VALUES ('$ItemCategory')";
				
			$result = $conn->query($sql);
			//var_dump($result);

    	
    	break;

 		case 'updatecatagorylisttable':



 			$ClmName = array(
	 				"ItemCategoryId",
	 				"ItemCategory",

 				  );



 			$ItemCategoryId = $_POST['ItemCategoryId'];
 			$column = $_POST['column'];
 			$value = $_POST['value'];

		     echo $ItemCategoryId;
		     echo $column;
		     echo $value;

			// Create connection
			//$conn = new mysqli($servername, $username, $password, $dbname);
			$conn = new mysqli("localhost", "root", "","londrydatabase");
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 



			$sql = "UPDATE  `itemcategory` SET $ClmName[$column] = '$value'   WHERE ItemCategoryId='$ItemCategoryId'";
				
			$result = $conn->query($sql);
			//var_dump($result);

    	
    	break;
		
		case 'deletecatagorylisttable':





 			$ItemCategoryId = $_POST['ItemCategoryId'];


		     echo $ItemCategoryId;


			// Create connection
			//$conn = new mysqli($servername, $username, $password, $dbname);
			$conn = new mysqli("localhost", "root", "","londrydatabase");
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 



			$sql = "DELETE FROM `itemcategory`   WHERE ItemCategoryId='$ItemCategoryId'";
				
			$result = $conn->query($sql);
			//var_dump($result);

    	
    	break;


//////////////////////item catagory modal end.//////////////////


    	case 'test':
    	case 'itemlisttabledynamic':

// Create connection
			/*//$conn = new mysqli($servername, $username, $password, $dbname);
			$conn = new mysqli("localhost", "root", "","londrydatabase");
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			

			$sql = "SELECT * FROM `item` WHERE 1";
				
			$result = $conn->query($sql);

			//var_dump($sql);
			$ans=array();

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        //echo "id: " . $row["CustomersId"]. "<br>";

			        array_push($ans, $row);

			    }
			} else {
			    echo "0 results";
			}

			echo json_encode($ans);*/
    	

			// DB table to use
			$table ="item";
			//echo $table;
			 
			// Table's primary key
			$primaryKey = 'ItemId';
			 
			// Array of database columns which should be read and sent back to DataTables.
			// The `db` parameter represents the column name in the database, while the `dt`
			// parameter represents the DataTables column identifier. In this case object
			// parameter names

			
			$columns = array(
			    array( 'db' => 'ItemId', 			'dt' => 'ItemId' ),
			    array( 'db' => 'ItemName',  		'dt' => 'ItemName' ),
			    array( 'db' => 'AveragePrice',  		'dt' => 'AveragePrice' ),
			    array( 'db' => 'ItemCategoryId',  		'dt' => 'ItemCategoryId' ),
			    array( 'db' => 'ItemUnitId',  		'dt' => 'ItemUnitId' ),
			    array( 'db' => 'InitialQty',  		'dt' => 'InitialQty' ),
			    array( 'db' => 'ItemNote',  		'dt' => 'ItemNote' ),
			    array( 'db' => 'Active',  		'dt' => 'Active' ),
			    array( 'db' => 'ItemType',  		'dt' => 'ItemType' ),
			    array( 'db' => 'MinStock',  		'dt' => 'MinStock' ),
			    array( 'db' => 'MaxStock',  		'dt' => 'MaxStock' ),


			);
			 
			// SQL server connection information
			$sql_details = array(
			    'user' => 'root',
			    'pass' => '',
			    'db'   => 'londrydatabase',
			    'host' => 'localhost'
			);
			 
			 
			/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
			 * If you just want to use the basic configuration for DataTables with PHP
			 * server-side, there is no need to edit below this line.
			 */
			 
			//require( 'ssp.class.php' );
			 
			echo json_encode(
			    SSP::simple( $_POST, $sql_details, $table, $primaryKey, $columns )
			    //SSP::simple( $_POST, $wpdb, $table, $primaryKey, $columns )
			);

			//var_dump($ans);
    	break;


    	//case 'test':
    	case 'itemlisttable':


    	// Create connection
			//$conn = new mysqli($servername, $username, $password, $dbname);
			$conn = new mysqli("localhost", "root", "","londrydatabase");
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			

			$sql = "SELECT * FROM `item` WHERE 1";
				
			$result = $conn->query($sql);

			//var_dump($sql);
			$ans=array();

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        //echo "id: " . $row["CustomersId"]. "<br>";

			        array_push($ans, $row);

			    }
			} else {
			   // echo "0 results";
			}

			echo json_encode($ans);

			//var_dump($ans);
    	break;

    	
 		case 'itemunitlisttabledynamic':


    	
			// DB table to use
			$table ="itemunit";
			//$table ='wp_ab_coupons';
			 
			// Table's primary key
			$primaryKey = 'ItemUnitId';
			 
			// Array of database columns which should be read and sent back to DataTables.
			// The `db` parameter represents the column name in the database, while the `dt`
			// parameter represents the DataTables column identifier. In this case object
			// parameter names

			
			$columns = array(
			    array( 'db' => 'ItemUnitId', 			'dt' => 'ItemUnitId' ),
			    array( 'db' => 'ItemUnit',  		'dt' => 'ItemUnit' ),


			);
			 
			// SQL server connection information
			$sql_details = array(
			    'user' => 'root',
			    'pass' => '',
			    'db'   => 'londrydatabase',
			    'host' => 'localhost'
			);
			 
			 
			/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
			 * If you just want to use the basic configuration for DataTables with PHP
			 * server-side, there is no need to edit below this line.
			 */
			 
			//require( 'ssp.class.php' );
			 
			echo json_encode(
			    SSP::simple( $_POST, $sql_details, $table, $primaryKey, $columns )
			    //SSP::simple( $_POST, $wpdb, $table, $primaryKey, $columns )
			);

			//var_dump($ans);
    	break;
		case 'addnewitem':


 			$ItemId = $_POST['ItemId'];
 			$formdatas = $_POST['formdatas'];
		     parse_str($formdatas);


		     echo $ItemName;
		     echo $AveragePrice;
		     echo $ItemCategoryId;
		     echo $ItemUnitId;
		     echo $InitialQty;
		     echo $ItemType;
		     echo $ItemNote;
		     echo $Active ;
		     echo $MinStock;
		     echo $MaxStock;

			// Create connection
			//$conn = new mysqli($servername, $username, $password, $dbname);
			$conn = new mysqli("localhost", "root", "","londrydatabase");
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 



			if ($ItemId>0) {

				$sql = "UPDATE `item` SET `ItemName`='$ItemName',`AveragePrice`='$AveragePrice',`ItemCategoryId`='$ItemCategoryId',`ItemUnitId`='$ItemUnitId',`InitialQty`='$InitialQty',`ItemType`='$ItemType',`ItemNote`='$ItemNote',`Active`='$Active',`MinStock`='$MinStock',`MaxStock`='$MaxStock' WHERE ItemId='$ItemId'";
				
				$result = $conn->query($sql);
			}else{

				$sql = "INSERT INTO `item`(`ItemName`, `AveragePrice`, `ItemCategoryId`, `ItemUnitId`, `InitialQty`, `ItemType`, `ItemNote`, `Active` , `MinStock`, `MaxStock`) VALUES ('$ItemName','$AveragePrice','$ItemCategoryId','$ItemUnitId','$InitialQty','$ItemType','$ItemNote','$Active' ,'$MinStock','$MaxStock')";
					
				$result = $conn->query($sql);
				var_dump($result);
			}

    	
    	break;

    	
		case 'deleteitemlisttable':





 			$ItemId = $_POST['ItemId'];


		     echo $ItemId;


			// Create connection
			//$conn = new mysqli($servername, $username, $password, $dbname);
			$conn = new mysqli("localhost", "root", "","londrydatabase");
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 



			$sql = "DELETE FROM `item`   WHERE ItemId='$ItemId'";
				
			$result = $conn->query($sql);
			//var_dump($result);

    	
    	break;

 		case 'itemunitlisttable':


    	// Create connection
			//$conn = new mysqli($servername, $username, $password, $dbname);
			$conn = new mysqli("localhost", "root", "","londrydatabase");
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			

			$sql = "SELECT * FROM `itemunit` WHERE 1";
				
			$result = $conn->query($sql);

			//var_dump($sql);
			$ans=array();

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        //echo "id: " . $row["CustomersId"]. "<br>";

			        array_push($ans, $row);

			    }
			} else {
			    //echo "0 results";
			}

			echo json_encode($ans);

			//var_dump($ans);
    	break;

 case 'newitemunit':


 			$ItemUnit = $_POST['ItemUnit'];

		     echo $ItemUnit;

			// Create connection
			//$conn = new mysqli($servername, $username, $password, $dbname);
			$conn = new mysqli("localhost", "root", "","londrydatabase");
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 



			$sql = "INSERT INTO `itemunit`( `ItemUnit`) VALUES ('$ItemUnit')";
				
			$result = $conn->query($sql);
			//var_dump($result);

    	
    	break;


    	case 'updateitemunitlisttable':



 			$ClmName = array(
	 				"ItemUnitId",
	 				"ItemUnit",

 				  );



 			$ItemUnitId = $_POST['ItemUnitId'];
 			$column = $_POST['column'];
 			$value = $_POST['value'];

		     echo $ItemUnitId;
		     echo $column;
		     echo $value;

			// Create connection
			//$conn = new mysqli($servername, $username, $password, $dbname);
			$conn = new mysqli("localhost", "root", "","londrydatabase");
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 



			$sql = "UPDATE  `itemunit` SET $ClmName[$column] = '$value'   WHERE ItemUnitId='$ItemUnitId'";
				
			$result = $conn->query($sql);
			//var_dump($result);

    	
    	break;

    	case 'deleteitemunitlisttable':





 			$ItemUnitId = $_POST['ItemUnitId'];


		     echo $ItemUnitId;


			// Create connection
			//$conn = new mysqli($servername, $username, $password, $dbname);
			$conn = new mysqli("localhost", "root", "","londrydatabase");
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 



			$sql = "DELETE FROM `itemunit`   WHERE ItemUnitId='$ItemUnitId'";
				
			$result = $conn->query($sql);
			//var_dump($result);

    	
    	break;

    	case 'addnewsupplier':


 			$SupplierId = $_POST['SupplierId'];
 			$formdatas = $_POST['formdatas'];
		    parse_str($formdatas);


			  echo $SupplierName;
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


			// Create connection
			//$conn = new mysqli($servername, $username, $password, $dbname);
			$conn = new mysqli("localhost", "root", "","londrydatabase");
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 



			if ($SupplierId>0) {

				$sql = "UPDATE `supplier` SET   `SupplierName`='$SupplierName',`Address`='$Address',`City`='$City',`Country`='$Country',`PostCode`='$PostCode',`ContactPerson`='$ContactPerson',`PhoneNo`='$PhoneNo',`FaxNumber`='$FaxNumber',`Email`='$Email',`Notes`='$Notes',`Active`='$Active',`Creditlimit`='$Creditlimit',`TaxId`='$TaxId',`NominalId`='$NominalId',`VatNo`='$VatNo' WHERE SupplierId='$SupplierId'";
				
				$result = $conn->query($sql);
			}else{

				$sql = "INSERT INTO `supplier`( `CompanyId`, `SupplierName`, `Address`, `City`, `Country`, `PostCode`, `ContactPerson`, `PhoneNo`, `FaxNumber`, `Email`, `Notes`, `Active`, `Creditlimit`, `TaxId`, `NominalId`) VALUES ( '1', '$SupplierName', '$Address', '$City', '$Country', '$PostCode', '$ContactPerson', '$PhoneNo', '$FaxNumber', '$Email', '$Notes', '$Active', '$Creditlimit', '$TaxId', '$NominalId')";
					
				$result = $conn->query($sql);
				var_dump($result);
			}

    	
    	break;


    	case 'supplierlisttable':



    		// Create connection
			//$conn = new mysqli($servername, $username, $password, $dbname);
			$conn = new mysqli("localhost", "root", "","londrydatabase");
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			

			$sql = "SELECT * FROM `supplier` AS s JOIN `tax` AS t JOIN `nominal` AS n ON  s.TaxId=t.TaxId AND s.NominalId=n.NominalId";
				
			$result = $conn->query($sql);

			//var_dump($sql);
			$ans=array();

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        //echo "id: " . $row["CustomersId"]. "<br>";

			        array_push($ans, $row);

			    }
			} else {
			   // echo "0 results";
			}

			echo json_encode($ans);


    	

    	break;

		case 'supplierlisttabledynamic':


    	
			// DB table to use
			$table ="supplier";
			//$table ='wp_ab_coupons';
			 
			// Table's primary key
			$primaryKey = 'SupplierId';
			 
			// Array of database columns which should be read and sent back to DataTables.
			// The `db` parameter represents the column name in the database, while the `dt`
			// parameter represents the DataTables column identifier. In this case object
			// parameter names

			
			$columns = array(
			    array( 'db' => 'SupplierId', 			'dt' => 'SupplierId' ),
			    array( 'db' => 'SupplierName',  		'dt' => 'SupplierName' ),
			    array( 'db' => 'Address',  				'dt' => 'Address' ),
			    array( 'db' => 'City',  				'dt' => 'City' ),
			    array( 'db' => 'Country',  				'dt' => 'Country' ),
			    array( 'db' => 'PostCode',  			'dt' => 'PostCode' ),
			    array( 'db' => 'ContactPerson',  		'dt' => 'ContactPerson' ),
			    array( 'db' => 'PhoneNo',  				'dt' => 'PhoneNo' ),
			    array( 'db' => 'FaxNumber',  			'dt' => 'FaxNumber' ),
			    array( 'db' => 'Email',  				'dt' => 'Email' ),
			    array( 'db' => 'Notes',  				'dt' => 'Notes' ),
			    array( 'db' => 'Active',  				'dt' => 'Active' ),
			    array( 'db' => 'Creditlimit',  			'dt' => 'Creditlimit' ),
			    array( 'db' => 'TaxId',  				'dt' => 'TaxId' ),
			    array( 'db' => 'NominalIdNominalId',  			'dt' => 'NominalIdNominalId' ),


			);
			 
			// SQL server connection information
			$sql_details = array(
			    'user' => 'root',
			    'pass' => '',
			    'db'   => 'londrydatabase',
			    'host' => 'localhost'
			);
			 
			 
			/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
			 * If you just want to use the basic configuration for DataTables with PHP
			 * server-side, there is no need to edit below this line.
			 */
			 
			//require( 'ssp.class.php' );
			 
			echo json_encode(
			    SSP::simple( $_POST, $sql_details, $table, $primaryKey, $columns )
			    //SSP::simple( $_POST, $wpdb, $table, $primaryKey, $columns )
			);

			//var_dump($ans);
    	break;


    	case 'deletesupplierlisttable':





 			$SupplierId = $_POST['SupplierId'];


		     echo $SupplierId;


			// Create connection
			//$conn = new mysqli($servername, $username, $password, $dbname);
			$conn = new mysqli("localhost", "root", "","londrydatabase");
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 



			$sql = "DELETE FROM `supplier`   WHERE SupplierId='$SupplierId'";
				
			$result = $conn->query($sql);
			//var_dump($result);

    	
    	break;

		

	}

//

?>