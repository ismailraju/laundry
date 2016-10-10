

<?php

use App\myclass\queryclass;
use App\myclass\wrapfuncclass;

$qu = new queryclass();
$wrap1 = new wrapfuncclass();
 ?>



<!-- Modal -->
		  <div class="modal fade" id="newcustomermodal" role="dialog">

			    <div class="modal-dialog modal-lg">
			    
			      <!-- Modal content-->
			      <div class="modal-content">

				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h5 class="modal-title">New Customer</h5>
				        </div>


				        <div class="modal-body">

					        <form role="form" id="customerform" >

					        <table ><tr>
					        <!-- /////////// -->
					          <td>

					        	<table id="newcustomertable">

					        	 <tr>
		     						 <td><label for="CustomerNumber">CustomerNumber:</label></td>
		     						 <td><input type="text" class="" id="CustomerNumber"  name="CustomerNumber" placeholder="CustomerNumber"></td>

		     						
		     					</tr>


					        	 <tr>
		     						 <td><label for="CustomerName">Customer Name:</label></td>
		     						 <td><input type="text" class="" id="CustomerName"  name="CustomerName" placeholder="Customer's Name"></td>

		     						
		     					</tr>


		   						 
					        	 <tr>
		     						 <td><label for="Address">Address:</label></td>
		     						 <td><input type="text" class="" id="Address" name="Address" placeholder="Address"></td>

		     					
		     					</tr>



								<tr>
		     						 <td><label for="City">City:</label></td>
		     						 <td><input type="text" class="" id="City"  name="City" placeholder="City"></td>

		     					
		     					</tr>




								<tr>
		     						 <td><label for="PostCode">PostCode:</label></td>
		     						 <td><input type="text" class="" id="PostCode" name="PostCode" placeholder="PostCode"></td>
		     				
		     					</tr>



								<tr>
		     						 <td><label for="ContactPerson">ContactPerson:</label></td>
		     						 <td><input type="text" class="" id="ContactPerson" name="ContactPerson" placeholder="ContactPerson"></td>

		     					
		     					</tr>

								<tr>
		     						 <td><label for="PhoneNo">PhoneNo:</label></td>
		     						 <td><input type="tel" class="" id="PhoneNo" name="PhoneNo" placeholder="PhoneNo"></td>
		     					
		     					</tr>



		   						<tr>
		     						 <td><label for="Email">Email:</label></td>
		     						 <td><input type="text" class="" id="Email" name="Email" placeholder="Email"></td>

		     				
		     					</tr>


		   						<tr>
		     						<!-- <td><label for="VatNo">VatNo:</label></td>
		     						 <td><select type="text" class="" id="VatNo" >
	 
		     					
		     						 	<?php

		     						 	/*$texinfo=$qu->texinfo();
		     						 	echo $wrap1->optionwrap($texinfo,"TaxCode");*/
		     						 	
		     						 	?>

		     						 	</select>
		     						 </td> -->


		     						 <td><label for="DriverNo">Driver No:</label></td>
		     						 <td><input type="text" class="" id="DriverNo" name="DriverNo" placeholder="Driver No"></td>
		     						 
		     					
		     					</tr>
		   						<tr>
		     						<td><label for="TaxCode">TaxCode:</label></td>
		     						 <td><select type="text" class="" id="TaxCode" name="TaxCode" >
	 
		     					
		     						 	<?php
		     						 	
											/*use App\myclass\queryclass;
											use App\myclass\wrapfuncclass;
		     						 		$texinfo=$qu->texinfo();
		     						 		echo $wrap1->optionwrap($texinfo,"TaxCode");*/
		     						 	?>

		     						 	</select>
		     						</td>



		     						 
		     					
		     					</tr>		   						
		     					<tr>
		     						 
	 								<td><label for="NominalCode">NominalCode:</label></td>
		     						 <td><input type="text" class="" id="NominalCode" name="NominalCode" placeholder="NominalCode"></td>

		     						 
		     					
		     					</tr>
		     					<tr>
		     						 
	 								 <td><label for="Creditlimit">Creditlimit:</label></td>
		     						 <td><input type="number" class="" id="Creditlimit" name="Creditlimit" placeholder="Creditlimit"></td>

		     						 
		     					
		     					</tr>
		     					<!-- <tr>
		     						 
	 																	 
 									<td><label for="DueSettlement">DueSettlement:</label></td>
		     						 <td><input type="text" class="" id="DueSettlement" placeholder="DueSettlement"></td>
		     					
		     					</tr>
 -->



		   						<tr>
		     						 <td><label for="Active">Active:</label></td>
		     						  <td><select type="text" class="" id="Active" name="Active" >
				     						  <option value="yes">Yes</option>
				     						  <option value="no">No</option>		     					
		     						 	</select>
		     						 </td>

		     				
		     					</tr>


		   						 

		   						 </table>

	   						  </td>

	   						  <td id="middleclm"></td>

	   						  <td>
								<fieldset>
								  <legend>Standing Order:</legend>
								  		<table id="standingtable"><tr>

									  	<td><label for="IsStanding">IsStanding:</label></td>
			     						 <td><input type="checkbox" class="" id="IsStanding" name="IsStanding" ></td>

			     						 <!-- </tr><tr> -->

			     						  <td><label for="StandingAmount">Amount:</label></td>
			     						 <td><input type="number" class="isstaindingcls" id="StandingAmount" name="StandingAmount" placeholder="StandingAmount"></td>
										 
										 </tr><tr>

										  <td><label for="StandingType">Type:</label></td>
			     						 <td><select type="text" class="isstaindingcls" id="StandingType" name="StandingType">


			     						 			<option value="weekly">Weekly</option>			     					<option value="fortnight">Fortnight</option>
			     						 			<option value="monthly">Monthly</option>
			     				

			     						 	</select>

			     						 </td>

			     						 <!-- </tr><tr> -->

										 <td><label for="StandingDay">Day:</label></td>
			     						 <td><input type="text" class="isstaindingcls" id="StandingDay" name="StandingDay" placeholder="StandingDay"></td>

			     						 </tr></table>
									 

								 </fieldset>


								 <fieldset>
								  <legend>invoice:</legend>
								  		<table id="invoicetable">
								  		<tr>
								  			<td><label for="FixedBill">Fixed Bill</label><input type="radio" id="FixedBill" class="radio" name="ItemizingFixedBilling" value="FixedBill" checked></td>
								  			<td><label for="Itemizing">Itemizing</label><input type="radio" id="Itemizing" class="radio" name="ItemizingFixedBilling" value="Itemizing"></td>
								  		</tr>								  		


								  		<tr>

										  	<td><label for="Invoicetype">Invoicetype:</label></td>
			     						 	<td><select type="text" class="" id="Invoicetype" name="Invoicetype">
			     						 		
			     						 			<option value="yearly">Yearly</option>
			     						 			<option value="monthly">Monthly</option>
			     						 			<option value="quaterly">Quaterly</option>
			     						 			<option value="weekly">Weekly</option>
			     				

			     						 	</select>

			     						 	</td>


			     						 <!-- </tr><tr> -->

		     						 		 <td><label class="AmountFixClass"  for="AmountFix">Amount:</label></td>
	     						 			<td><input type="number" class="AmountFixClass" id="AmountFix"  name="AmountFix" placeholder="AmountFix"></td>
										 
										 
			     						 </tr>

								  		<tr>
								  			<td><label for="HotTowelPay">HotTowelPay</label><input type="radio" id="HotTowelPay" class="radio" name="HotTowelFree" value="yes" checked></td>
								  			<td><label for="HotTowelFree">HotTowelFree</label><input type="radio" id="HotTowelFree" class="radio" name="HotTowelFree" value="no"></td>
								  		</tr>


			     						 </table>
									 

								 </fieldset>

								  <legend>Day:</legend>
								  		<table><tr>

		 										 <td><label for="sat">Sat:</label><input type="checkbox" name="sat" id="sat"></td>
		 										 <td class="gap"></td>
					     						 <td><label for="sun">Sun:</label><input type="checkbox" name="sun" id="sun"></td>
					     						 <td class="gap"></td>
					     						 <td><label for="mon">Mon:</label><input type="checkbox" name="mon" id="mon"></td>
					     						 <td class="gap"></td>	
					     						 <td><label for="tue">Tue:</label><input type="checkbox" name="tue" id="tue"></td>
					     						 <td class="gap"></td>
					     						 <!-- </tr><tr> -->
					     						 <td><label for="wed">Wed:</label><input type="checkbox" name="wed" id="wed"></td>
					     						 <td class="gap"></td>
					     						 <td><label for="thu">Thu:</label><input type="checkbox" name="thu" id="thu"></td>
					     						 <td class="gap"></td>
					     						 <td><label for="fri">Fri:</label><input type="checkbox" name="fri" id="fri"></td>
					     						 <td class="gap"></td>

					     						
										 
										 
			     						 </tr></table>
									 

								 </fieldset>
								  <legend>Details:</legend>

								  	<table id="detailstable"><tr>
								  											 
		     						 
		     						 <td><textarea type="text" class="" id="Notes"  name="Notes" placeholder="Notes"></textarea></td>

									 </tr></table>

								 </fieldset>

		   					  </td>

							</tr></table>

							</form>

				        </div>



				        <div class="modal-footer">

				        	<div class="btn-group">
					          <button type="button" class="btn btn-primary" id="customerSaveButton">Save</button>
					          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        </div>


				        </div>

			      </div>
			      
			    </div>
		  </div>





		  <div class="modal fade" id="customerMastermodal" role="dialog">

			    <div class="modal-dialog modal-lg">
			    
			      <!-- Modal content-->
			      <div class="modal-content">

				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h5 class="modal-title">Customer Master</h5>
				        </div>


				        <div class="modal-body">

					        <table id="customerlisttable"  class="display" cellspacing="0" width="100%" > 
				
								      <thead>
<!-- `customers`(``, `CompaniesId`, ``, ``, ``, ``, ``, ``, ``, `FaxNumber`, ``, ``, ``, ``, ``, `DueSettlement`, ``, ``, `VatNo`, ``, ``, ``, ``, ``, ``, ``, ``, ``) -->
								            <tr>
								                <th>CustomersId</th>
								                <th>CustomerNumber</th>
								                <th>CustomerName</th>
								                <th>Address</th>
								                <th>City</th>
								                <th>Country</th>
								                <th>PostCode</th>
								                <th>ContactPerson</th>
								                <th>PhoneNo</th>
								                <th>Email</th>
								                <th>DriverNo</th>
								                <th>Notes</th>
								                <th>Active</th>
								                <th>Creditlimit</th>
								                <th>TaxCode</th>
								                <th>NominalCode</th>
								                <th>ItemizingFixedBilling</th>
								                <th>Invoicetype</th>
								                <th>AmountFix</th>
								                <th>HotTowelFree</th>
								                <th>Weekday</th>
								                <th>IsStanding</th>
								                <th>StandingDay</th>
								                <th>StandingType</th>
								                <th>StandingAmount</th>
								                <th>Action</th>

								               
								            </tr>


								        </thead>
								        <!-- <tfoot>
								            <tr>
								                <th>ItemCategoryId</th>
								                <th>ItemCategory</th>
								                <th>Button</th>


								               
								            </tr>
								        </tfoot> -->


								</table> 

				        </div>



				        <!-- <div class="modal-footer">

				        	<div class="btn-group">
					          <button type="button" class="btn btn-primary" id="customerSaveButton">Save</button>
					          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        </div>


				        </div> -->

			      </div>
			      
			    </div>
		  </div>







<!-- Modal -->
		  <div class="modal fade" id="newproductmodal" role="dialog">

			    <div class="modal-dialog modal-lg">
			    
			      <!-- Modal content-->
			      <div class="modal-content">

				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h5 class="modal-title">New Product</h5>
				        </div>


				        <div class="modal-body">

					        <form role="form" id="customerform" >

					       
					       
					     

					        <table>
					        	
					        <tr>
					        	
					        	<td><label class=""  for="CustomersId">Customers Name:</label></td>
					        	<td><select type="text" class="" id="CustomersId" name="CustomersId" >
	 
		     						 	<?php
		     						 		$customerinfo=$qu->customerinfo();
		     						 		echo $wrap1->optionwrap_value($customerinfo,"CustomerName","CustomersId");
		     						 	?>

		     						 	</select>
		     					</td>
					        </tr>

					        <tr>	
					        	<td><label class=""  for="ProductName">Product Name:</label></td>
					        	<td><select type="text" class="" id="ProductName" name="ProductName" >
	 
		     					
		     						 	<?php
		     						 		/*$texinfo=$qu->texinfo();
		     						 		echo $wrap1->optionwrap($texinfo,"TaxCode");*/
		     						 	?>

		     						 	</select>
		     					</td>
					        </tr>
					        <tr>	
					        	<td><label class=""  for="Price">Price:</label></td>
					        	<td><input  type="text" class="" id="Price" name="Price" ></td>
					        </tr>

					        <tr>	
					        	<td><label class=""  for="Active">Active:</label></td>
					        	<td><select type="text" class="" id="Active" name="Active" >
	 
		     					<option value="yes">Yes</option>
		     					<option value="no">No</option>
		     						 	</select>
		     					</td>
					        </tr>
					        </table>


							</form>

				        </div>



				        <div class="modal-footer">

				        	<div class="btn-group">
					          <button type="button" class="btn btn-primary" id="customerSaveButton">Save</button>
					          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        </div>


				        </div>

			      </div>
			      
			    </div>
		  </div><!-- Modal -->






		  <div class="modal fade" id="newItemCatagorymodal" role="dialog">

			    <div class="modal-dialog modal-lg">
			    
			      <!-- Modal content-->
			      <div class="modal-content">

				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h5 class="modal-title">New Item Catagory</h5>
				        </div>


				        <div class="modal-body">

					       

					        <table>

					        <!-- `ItemCategoryId`, `ItemCategory` -->
					        	
					        <tr>

						        	<td><label class=""  for="ItemCategoryName">ItemCategory:</label></td>
						        	<td><input  type="text" class="" id="ItemCategoryName" name="ItemCategoryName" ></td>
						        	<td><button id="ItemCategorySave">Save</button></td>

					        	

					        </tr>

					        <tr>
					        	<!-- <div id="catagorylisttablediv"> -->

					        		<table id="catagorylisttable"  class="display" cellspacing="0" width="100%" > 
				
								      <thead>

								            <tr>
								                <th>ItemCategoryId</th>
								                <th>ItemCategory</th>
								                <th>Action</th>

								               
								            </tr>


								        </thead>
								        <!-- <tfoot>
								            <tr>
								                <th>ItemCategoryId</th>
								                <th>ItemCategory</th>
								                <th>Button</th>


								               
								            </tr>
								        </tfoot> -->


								</table> 






					        <!-- 	</div> -->
					        </tr>

					        </table>

					       

							

				        </div>



				        <!-- <div class="modal-footer">

				        	<div class="btn-group">
					          <button type="button" class="btn btn-primary" id="newItemCatagorySaveButton">Save</button>
					          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        </div>


				        </div> -->

			      </div>
			      
			    </div>
		  </div>



		  <div class="modal fade" id="itemMastermodal" role="dialog">

			    <div class="modal-dialog modal-lg">
			    
			      <!-- Modal content-->
			      <div class="modal-content">

				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h5 class="modal-title">Item Master</h5>
				        </div>


				        <div class="modal-body">

					        <table id="itemlisttable"  class="display" cellspacing="0" width="100%" > 
				
								      <thead>

								            <tr>
								                <th>Id</th>
								                <th>Name</th>
								                <th>AvgPrice</th>
								                <th>CategoryId</th>
								                <th>UnitId</th>
								                <th>InitialQty</th>
								                <th>Note</th>
								                <th>Active</th>
								                <th>Type</th>
								                <th>MinStock</th>
								                <th>MaxStock</th>
								                <th>Action</th>

								               
								            </tr>


								        </thead>
								        <!-- <tfoot>
								            <tr>
								                <th>ItemCategoryId</th>
								                <th>ItemCategory</th>
								                <th>Button</th>


								               
								            </tr>
								        </tfoot> -->


								</table> 

				        </div>



				        <!-- <div class="modal-footer">

				        	<div class="btn-group">
					          <button type="button" class="btn btn-primary" id="customerSaveButton">Save</button>
					          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        </div>


				        </div> -->

			      </div>
			      
			    </div>
		  </div>





		  <div class="modal fade" id="NewItemmodal" role="dialog">

			    <div class="modal-dialog modal-lg">
			    
			      <!-- Modal content-->
			      <div class="modal-content">

				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h5 class="modal-title">Add New Item</h5>
				        </div>


				        <div class="modal-body">

					        <form role="form" id="newitemform" >

					        <!-- <table><tr><td> -->

					       		<table>
					       		<tr>




		     					<td><label class="ItemName"  for="ItemName">Item Name:</label></td>
	     						<td><input type="text" class="ItemName" id="ItemName"  name="ItemName" placeholder="ItemName"></td>



		     					<td><label class="InitialQty"  for="InitialQty">Initial Qty:</label></td>
	     						<td><input type="number" class="InitialQty" id="InitialQty"  name="InitialQty" placeholder="InitialQty"></td>




					       		</tr><tr>




		     					<td><label class="AveragePrice"  for="AveragePrice">Avg Price:</label></td>
	     						<td><input type="number" class="AveragePrice" id="AveragePrice"  name="AveragePrice" placeholder="AveragePrice"></td>




		     					<td><label class="MinStock"  for="MinStock">MinStock:</label></td>
	     						<td><input type="number" class="MinStock" id="MinStock"  name="MinStock" placeholder="MinStock"></td>



					       		</tr><tr>



								<td><label for="ItemUnitId">ItemUnitId:</label></td>
			     				<td><select type="text" class="" id="ItemUnitId" name="ItemUnitId">
			     						 		


			     						<?php
		     						 		$itemunitinfo=$qu->itemunitinfo();
		     						 		echo $wrap1-> optionwrap_value($itemunitinfo,"ItemUnit","ItemUnitId");
		     						 	?>
			     				

			     					</select>

			     				</td>


			     				

		     					<td><label class="MaxStock"  for="MaxStock">MaxStock:</label></td>
	     						<td><input type="number" class="MaxStock" id="MaxStock"  name="MaxStock" placeholder="MaxStock"></td>


										 



					       		</tr><tr>



								<td><label for="ItemCategoryId">ItemCategoryId:</label></td>
			     				<td><select type="text" class="" id="ItemCategoryId" name="ItemCategoryId">
			     						 		
			     			

			     						<?php
		     						 		$itemcategoryinfo=$qu->itemcategoryinfo();
		     						 		echo $wrap1-> optionwrap_value($itemcategoryinfo,"ItemCategory","ItemCategoryId");
		     						 	?>
			     			

			     					</select>

			     				</td>

								<td><label for="Active">Active:</label></td>
			     				<td><select type="text" class="" id="Active" name="Active">
			     						 		
			     						 			<option value="yes">Yes</option>
			     						 			<option value="no">No</option>
			     						 	

			     					</select>

			     				</td>


			     				

		     					



					       		</tr><tr>



								<td><label for="ItemType">ItemType:</label></td>
			     				<td><select type="text" class="" id="ItemType" name="ItemType">
			     						 		
			     						 			<option value="stock">stock</option>
			     						 			<option value="non-stock">non-stock</option>
			     						 			

			     					</select>

			     				</td>



			     				

		     					



					       		</tr><tr>
					       			
										<td><label class="ItemNote"  for="ItemNote">ItemNote:</label></td>
		     							<td><textarea type="number" class="ItemNote" id="ItemNote"  name="ItemNote" placeholder="ItemNote"></textarea></td>

					       		</tr>
					       		</table>
					       	
					       			

		     					

					     

							</form>

				        </div>



				        <div class="modal-footer">

				        	<div class="btn-group">
					          <button type="button" class="btn btn-primary" id="NewItemSaveButton">Save</button>
					          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        </div>


				        </div>

			      </div>
			      
			    </div>
		  </div>




		  <div class="modal fade" id="newItemUnitmodal" role="dialog">

			    <div class="modal-dialog modal-lg">
			    
			      <!-- Modal content-->
			      <div class="modal-content">

				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h5 class="modal-title">New Item Unit</h5>
				        </div>


				        <div class="modal-body">

					       

					        <table>

					        
					        	
					        <tr>

						        	<td><label class=""  for="ItemUnit">Item Unit:</label></td>
						        	<td><input  type="text" class="" id="ItemUnit" name="ItemUnit" ></td>
						        	<td><button id="ItemUnitSave">Save</button></td>

					        	

					        </tr>

					        <tr>
					        	<!-- <div id="catagorylisttablediv"> -->

					        		<table id="ItemUnitlisttable"  class="display" cellspacing="0" width="100%" > 
				
								      <thead>

								            <tr>
								                <th>ItemUnitId</th>
								                <th>ItemUnit</th>
								                <th>Action</th>

								               
								            </tr>


								        </thead>
								        <!-- <tfoot>
								            <tr>
								                <th>ItemCategoryId</th>
								                <th>ItemCategory</th>
								                <th>Button</th>


								               
								            </tr>
								        </tfoot> -->


								</table> 






					        <!-- 	</div> -->
					        </tr>

					        </table>

					       

							

				        </div>



				        <!-- <div class="modal-footer">

				        	<div class="btn-group">
					          <button type="button" class="btn btn-primary" id="newItemCatagorySaveButton">Save</button>
					          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        </div>


				        </div> -->

			      </div>
			      
			    </div>
		  </div>




		  <div class="modal fade" id="newsuppliermodal" role="dialog">

			    <div class="modal-dialog modal-lg">
			    
			      <!-- Modal content-->
			      <div class="modal-content">

				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h5 class="modal-title">New Product</h5>
				        </div>


				        <div class="modal-body">

					        <form role="form" id="newsupplierform" >

					       	<div class="container-fluid">
					       		<div class="row">
					       			

					       		<div class="col-sm-6">

					       			<div class="container-fluid">

					       			
						       		<div class="row">

						       		<div class="container-fluid"><div class="row"><div class="col-sm-4">
					       			
					       			<span style="color:red;"><label class="SupplierName"  for="SupplierName">SupplierName(*):</label></span>
					       			</div><div class="col-sm-8">

									<input type="text" class="SupplierName" id="SupplierName"  name="SupplierName" placeholder="SupplierName">
									</div>
									</div></div>


									</div>


						       		<div class="row">

						       		<div class="container-fluid"><div class="row"><div class="col-sm-4">
					       			<label class="Address"  for="Address">Address:</label>

					       			</div><div class="col-sm-8">

									<input type="text" class="Address" id="Address"  name="Address" placeholder="Address">
									</div>
									</div></div>
									
									</div>

						       		<div class="row">

						       		<div class="container-fluid"><div class="row"><div class="col-sm-4">

					       			<label class="City"  for="City">City:</label>

					       			</div><div class="col-sm-8">

									<input type="text" class="City" id="City"  name="City" placeholder="City">
									</div>
									</div></div>
									
									</div>

						       		<div class="row">

						       		<div class="container-fluid"><div class="row"><div class="col-sm-4">

					       			<label class="Country"  for="Country">Country:</label>

					       			</div><div class="col-sm-8">

									<input type="text" class="Country" id="Country"  name="Country" placeholder="Country">
									</div>
									</div></div>
									
									</div>

						       		<div class="row">

						       		<div class="container-fluid"><div class="row"><div class="col-sm-4">

					       			<label class="PostCode"  for="PostCode">PostCode:</label>

					       			</div><div class="col-sm-8">

									<input type="text" class="PostCode" id="PostCode"  name="PostCode" placeholder="PostCode">
									</div>
									</div></div>

									</div>




						       		<div class="row">

						       		<div class="container-fluid"><div class="row"><div class="col-sm-4">

					       			<label class="ContactPerson"  for="ContactPerson">ContactPerson:</label>

					       			</div><div class="col-sm-8">

									<input type="text" class="ContactPerson" id="ContactPerson"  name="ContactPerson" placeholder="ContactPerson">
									</div>
									</div></div>

									</div>


									

						       		<div class="row">

						       		<div class="container-fluid"><div class="row"><div class="col-sm-4">

					       			<label class="PhoneNo"  for="PhoneNo">PhoneNo:</label>

					       			</div><div class="col-sm-8">

									<input type="text" class="PhoneNo" id="PhoneNo"  name="PhoneNo" placeholder="PhoneNo">
									</div>
									</div></div>

									</div>



									

						       		<div class="row">

						       		<div class="container-fluid"><div class="row"><div class="col-sm-4">

					       			<label class="FaxNumber"  for="FaxNumber">FaxNumber:</label>

					       			</div><div class="col-sm-8">

									<input type="text" class="FaxNumber" id="FaxNumber"  name="FaxNumber" placeholder="FaxNumber">
									</div>
									</div></div>

									</div>





						       		<div class="row">

						       		<div class="container-fluid"><div class="row"><div class="col-sm-4">

					       			<label class="Email"  for="Email">Email:</label>

					       			</div><div class="col-sm-8">

									<input type="text" class="Email" id="Email"  name="Email" placeholder="Email">
									</div>
									</div></div>

									</div>



									</div>

					       		</div>
					       		<div class="col-sm-6">

					       		<div class="containar-fluid">




						       	<div class="row">

						       		<div class="container-fluid"><div class="row"><div class="col-sm-4">

					       			<label class="VatNo"  for="VatNo">VatNo:</label>

					       			</div><div class="col-sm-8">

									<input type="text" class="VatNo" id="VatNo"  name="VatNo" placeholder="VatNo">
									</div>
									</div></div>

									</div>


									

						       		<div class="row">

						       		<div class="container-fluid"><div class="row"><div class="col-sm-4">

					       			<span style="color:red;"><label class="TaxId"  for="TaxId">TaxCode(*):</label></span>

					       			</div><div class="col-sm-8">

									<!-- <input type="text" class="TaxId" id="TaxId"  name="TaxId" placeholder="TaxId"> -->

									<select type="text" class="" id="TaxId" name="TaxId" >
	 
		     					
		     						 	<?php
		     						 	$arrayName = array("TaxCode","Description");
		     						 		$texinfo=$qu->texinfo();
		     						 		echo $wrap1->optionwrap_value_multi_display($texinfo,$arrayName,"TaxId");
		     						 	?>

		     						 	</select>
									</div>
									</div></div>

									</div>



									

						       		<div class="row">

						       		<div class="container-fluid"><div class="row"><div class="col-sm-4">

					       			<span style="color:red;"><label class="NominalId"  for="NominalId">NominalCode(*):</label></span>

					       			</div><div class="col-sm-8">

								

									<select type="text" class="" id="NominalId" name="NominalId" >
	 
		     					
		     						 	<?php

		     						 	$displayarray= array("NominalCode","CodeDescription");

		     						 	//echo  sizeof($displayarray);
		     						 	//echo  $displayarray[0];
		     						 		$nominalinfo=$qu->nominalinfo();
		     						 		echo $wrap1->optionwrap_value_multi_display($nominalinfo,$displayarray,"NominalId");
		     						 	?>

		     						 	</select>
									</div>
									</div></div>

									</div>





						       		<div class="row">

						       		<div class="container-fluid"><div class="row"><div class="col-sm-4">

					       			<span style="color:red;"><label class="Creditlimit"  for="Creditlimit">Creditlimit(*):</label></span>

					       			</div><div class="col-sm-8">

									<input type="text" class="Creditlimit" id="Creditlimit"  name="Creditlimit" placeholder="Creditlimit">
									</div>
									</div></div>

									</div>



						       		<div class="row">

						       		<div class="container-fluid"><div class="row"><div class="col-sm-4">

					       			<span style="color:red;"><label class="Active"  for="Active">Active:</label></span>

					       			</div><div class="col-sm-8">
					       			<select class="Active" id="Active"  name="Active" >
					       				<option value="yes">Yes</option>
					       				<option value="no">No</option>

					       			</select>
									<!-- <input type="text" class="Active" id="Active"  name="Active" placeholder="Active"> -->
									</div>
									</div></div>

									</div>





						       		<div class="row">

						       		<div class="container-fluid"><div class="row"><div class="col-sm-4">

					       			<label class="Notes"  for="Notes">Notes:</label>

					       			</div><div class="col-sm-8">

									<textarea type="text" class="Notes" id="Notes"  name="Notes" placeholder="Notes"></textarea> 
									</div>
									</div></div>

									</div>




					       		</div>

					       		</div>

					       		</div>

					       	</div>



							</form>

				        </div>



				        <div class="modal-footer">

				        	<div class="btn-group">
					          <button type="button" class="btn btn-primary" id="NewSupplierSaveButton">Save</button>
					          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        </div>


				        </div>

			      </div>
			      
			    </div>
		  </div>






//////////////////////////////////////supplier master modal start//////////////


		  <div class="modal fade" id="supplierMastermodal" role="dialog">

			    <div class="modal-dialog modal-lg">
			    
			      <!-- Modal content-->
			      <div class="modal-content">

				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h5 class="modal-title">Supplier Master</h5>
				        </div>


				        <div class="modal-body">

					        <table id="supplierlisttable"  class="display" cellspacing="0" width="100%" > 
				
								      <thead>

								            <tr>
								                <th>SupplierId</th>
								                <th>SupplierName</th>
								                <th>Address</th>
								                <th>City</th>
								                <th>Country</th>
								                <th>PostCode</th>
								                <th>ContactPerson</th>
								                <th>PhoneNo</th>
								                <th>FaxNumber</th>
								                <th>Email</th>
								                <th>Notes</th>
								                <th>Active</th>
								                <th>Creditlimit</th>
								                <th>TaxId</th>
								                <th>TaxCode</th>
								                <th>TaxDescription</th>
								                <th>NominalId</th>
								                <th>NominalCode</th>
								                <th>ACTION</th>

								               
								            </tr>


								        </thead>
								        <tfoot>
								            <tr>
								                <th>SupplierId</th>
								                <th>SupplierName</th>
								                <th>Address</th>
								                <th>City</th>
								                <th>Country</th>
								                <th>PostCode</th>
								                <th>ContactPerson</th>
								                <th>PhoneNo</th>
								                <th>FaxNumber</th>
								                <th>Email</th>
								                <th>Notes</th>
								                <th>Active</th>
								                <th>Creditlimit</th>
								                <th>TaxId</th>
								                <th>TaxCode</th>
								                <th>TaxDescription</th>
								                <th>NominalId</th>
								                <th>NominalCode</th>
								                <th>ACTION</th>


								               
								            </tr>
								        </tfoot>


								</table> 

				        </div>



				        <!-- <div class="modal-footer">

				        	<div class="btn-group">
					          <button type="button" class="btn btn-primary" id="supplierSaveButton">Save</button>
					          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        </div>


				        </div> -->

			      </div>
			      
			    </div>
		  </div>













///////////////////////////////////////////////////end////////////////////////

<!--PurchaseDetailsId`, `PurchaseId`, ``, ``, `TaxId`, ``, ``, ``, ``, ``, ``, `PurchaseDetailNote`, `` -->

		  <div class="modal fade" id="newpurchasemastermodal" role="dialog">

			    <div class="modal-dialog modal-lg">
			    
			      <!-- Modal content-->
			      <div class="modal-content">

				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h5 class="modal-title">New Purchase Master</h5>
				        </div>


				        <div class="modal-body">

					        <form role="form" id="purchasemasterform" >

					       

					        <div class="container-fluid">
					        	<div class="row">
					        		<div class="col-sm-3">
					        		<!-- <div class="container-fluid"> -->
					        		<div class="row">
					        			<div class="col-sm-4">
					        				<label class="SupplierId"  for="SupplierId">SupplierId:</label>

					        			</div>
					        			<div class="col-sm-8">
					        				
											<select class="SupplierId" id="SupplierId"  name="SupplierId" >
					       						

					       							<?php
		     						 				$supplierinfo=$qu->supplierinfo();
		     						 				echo $wrap1-> optionwrap_value($supplierinfo,"SupplierName","SupplierId");
		     						 				?>
			     				

					       					</select>
					        			</div>
					        		</div>
					        		<!-- </div> -->
					        			
					        			
					        		</div>
					        		



					        		
					        		<div class="col-sm-4">
					        		<!-- <div class="container-fluid"> -->
					        		<div class="row">
					        			<div class="col-sm-4">
					        				<label class="PurchaseDate"  for="PurchaseDate">PurchaseDate:</label>

					        			</div>
					        			<div class="col-sm-8">
					        				
											<input type="text" class="PurchaseDate" id="PurchaseDate"  name="PurchaseDate" />
					       						
					        			</div>
					        		</div>
					        		<!-- </div> -->
					        			
					        			
					        		</div>


									<div class="col-sm-5">
					        		<!-- <div class="container-fluid"> -->
					        		<div class="row">
					        			<div class="col-sm-4">
					        				<label class="EstimateDeliveryDate"  for="EstimateDeliveryDate">Est.DeliveryDate:</label>

					        			</div>
					        			<div class="col-sm-8">
					        				
											<input type="text" class="EstimateDeliveryDate" id="EstimateDeliveryDate"  name="EstimateDeliveryDate" />
					       						
					        			</div>
					        		</div>
					        		<!-- </div> -->
					        			
					        			
					        		</div>




					        	</div>





					        	<div class="row">
					        		
					        	<div class="col-sm-2">
					        		<!-- <div class="container-fluid"> -->
					        			<div class="row">
					        				
					        				<label class="ItemId"  for="ItemId">Item:</label>
					        			</div>
					        			<div class="row">
					        				<select class="ItemId" id="ItemId"  name="ItemId" >
					       						

					       							<?php
		     						 				$iteminfo=$qu->iteminfo();
		     						 				echo $wrap1-> optionwrap_value($iteminfo,"ItemName","ItemId");
		     						 				?>
			     				

					       					</select>

					        			</div>
					        		<!-- </div> -->

					        	</div>


								<div class="col-sm-1">
					        		<!-- <div class="container-fluid"> -->
					        			<div class="row">
					        				

					        				<label class=""  for="Qty">Qty:</label>
					        			</div>
					        			<div class="row">
					        				<input type="number" class="Qty" id="Qty"  name="Qty" width="20px" />
					       						



					        			</div>
					        		<!-- </div> -->

					        	</div>


								<div class="col-sm-2">
					        		<!-- <div class="container-fluid"> -->
					        			<div class="row">
					        				
					        				<label class="PurchasePrice"  for="PurchasePrice">PurchasePrice:</label>
					        			</div>
					        			<div class="row">
					        				<input type="number" class="PurchasePrice" id="PurchasePrice"  name="PurchasePrice" />
					       						



					        			</div>
					        		<!-- </div> -->

					        	</div>



								<div class="col-sm-1">
					        		<!-- <div class="container-fluid"> -->
					        			<div class="row">
					        				
					        				<label class="Discount"  for="Discount">Discount:</label>
					        			</div>
					        			<div class="row">
					        				<input type="number" class="Discount" id="Discount"  name="Discount" />
					       						



					        			</div>
					        		<!-- </div> -->

					        	</div>


								<div class="col-sm-1">
					        		<!-- <div class="container-fluid"> -->
					        			<div class="row">
					        				
					        				<label class="Amount"  for="Amount">Amount:</label>
					        			</div>
					        			<div class="row">
					        				<input type="number" class="Amount" id="Amount"  name="Amount" />
					        			</div>
					        		<!-- </div> -->

					        	</div>


								<div class="col-sm-1">
					        		<!-- <div class="container-fluid"> -->
					        			<div class="row">
					        				
					        				<label class="Delivered"  for="Delivered">Delivered:</label>
					        			</div>
					        			<div class="row">
					        				<input type="checkbox" class="Delivered" id="Delivered"  name="Delivered" />
					        			</div>
					        		<!-- </div> -->

					        	</div>



								<div class="col-sm-2">
					        		<!-- <div class="container-fluid"> -->
					        			<div class="row">
					        				
					        				<label class="ActualDeliveryDate"  for="ActualDeliveryDate">ActualDeliveryDate:</label>
					        			</div>
					        			<div class="row">
					        				<input type="text" class="ActualDeliveryDate" id="ActualDeliveryDate"  name="ActualDeliveryDate" />
					        			</div>
					        		<!-- </div> -->

					        	</div>


								<div class="col-sm-1">
					        		<!-- <div class="container-fluid"> -->
					        			<div class="row">
					        				
					        				
					        			</div>
					        			<div class="row">
					        				<button  class="Add" id="Add"  name="Add">Add</button>
					        			</div>
					        		<!-- </div> -->

					        	</div>





					        </div>

					        <div class="row">
					        	
					        <table id="parchaselisttable"  class="display" cellspacing="0" width="100%" > 
				<!-- PurchaseDetailsId`, `PurchaseId`, ``, ``, `TaxId`, ``, ``, `PurchaseDate`, `EstimateDeliveryDate`, ``, ``, `PurchaseDetailNote`, ` -->
								      <thead>

								            <tr>
								                <th>ItemId</th>
								                <th>SupplierId</th>
								                <th>Qty</th>
								                <th>PurchasePrice</th>
								                <th>Discount</th>
								               <!--  <th>Amount</th> -->
								                <th>Delivered</th>
								                <th>ActualDeliveryDate</th>
								                <th>Action</th>
								                

								               
								            </tr>


								        </thead>
								       <!--  <tfoot>
								            <tr>
								

								               
								            </tr>
								        </tfoot> -->


								</table> 


					        </div>

    						<div class="row">
					        	
					       		<!-- <div class="container-fluid"> -->
					       			<div class="row">
					       				
					       				<div class="col-sm-2">
					       					<label class="totalamount" id="totalamount">total amount:<span id="total_abount">0</span></label>

					       				</div>					       				
					       				<div class="col-sm-2">
					       					<label class="VAT" id="VAT">VAT(%):<span id="VATVALUE">0</span></label>

					       				</div>					       				
					       				<div class="col-sm-5">
					       					

										  <!-- <div class="container-fluid"> -->
						        			<div class="row">

						        				<div class="col-sm-6">
						        				<label  for="ShippingCost">ShippingCost:</label>
						        				</div>

						        				<div class="col-sm-6">
						        				<input type="number" class="ShippingCost" id="ShippingCost"  name="ShippingCost" />
						        				</div>

						        			</div>
					        			  <!-- </div> -->



					       				</div>					       				
					       				<div class="col-sm-2">
					       					<label class="netamount" id="netamount">Net amount:<span id="netamount">0</span></label>

					       				</div>
					       			</div>
					       		<!-- </div> -->

					        </div>


							</form>

				        </div>



				        <div class="modal-footer">

				        	<div class="btn-group">
					          <button type="button" class="btn btn-primary" id="customerSaveButton">Save</button>
					          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        </div>


				        </div>

			      </div>
			      
			    </div>
		  </div>








