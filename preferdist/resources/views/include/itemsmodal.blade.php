

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
					        	<td><select type="text" class="form-control" id="CustomersId" name="CustomersId" >
	 
		     						 	<?php
		     						 		/*$customerinfo=$qu->customerinfo();
		     						 		echo $wrap1->optionwrap_value($customerinfo,"CustomerName","CustomersId");*/
		     						 	?>

		     						 	</select>
		     					</td>
					        </tr>

					        <tr>	
					        	<td><label class=""  for="ProductName">Product Name:</label></td>
					        	<td><select type="text" class="form-control" id="ProductName" name="ProductName" >
	 
		     					
		     						 	<?php
		     						 		/*$texinfo=$qu->texinfo();
		     						 		echo $wrap1->optionwrap($texinfo,"TaxCode");*/
		     						 	?>

		     						 	</select>
		     					</td>
					        </tr>
					        <tr>	
					        	<td><label class=""  for="Price">Price:</label></td>
					        	<td><input  type="text" class="form-control" id="Price" name="Price" ></td>
					        </tr>

					        <tr>	
					        	<td><label class=""  for="Active">Active:</label></td>
					        	<td><select type="text" class="form-control" id="Active" name="Active" >
	 
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
						        	<td><input  type="text" class="form-control" id="ItemCategoryName" name="ItemCategoryName" ></td>
						        	<td><button class="btn btn-primary" id="ItemCategorySave">Save</button></td>

					        	

					        </tr>

					        <tr>
					        	<!-- <div id="catagorylisttablediv"> -->

					        		<table id="catagorylisttable"  class="table table-striped table-bordered" cellspacing="0" width="100%" > 
				
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

					        <table id="itemlisttable"  class="table table-striped table-bordered" cellspacing="0" width="100%" > 
				
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

					<div class="row">
				<div class="col-sm-6">
	

					       		<div class="row"><div class="col-sm-6">

					       		<label class="ItemName"  for="ItemName">Item Name:</label>

								</div>
								<div class="col-sm-6">

								<input type="text" class="form-control ItemName" id="ItemName"  name="ItemName" placeholder="ItemName">

								</div></div>
	
								<!-- /////////////////////////////////////////////////// -->
					       		<div class="row"><div class="col-sm-6">

					       		<label class="AveragePrice"  for="AveragePrice">Avg Price:</label>

								</div>
								<div class="col-sm-6">

								<input type="number" class="form-control AveragePrice" id="AveragePrice"  name="AveragePrice" placeholder="AveragePrice">

								</div></div>
	
								<!-- /////////////////////////////////////////////////// -->
					       		<div class="row"><div class="col-sm-6">

					       			<label for="ItemUnitId">ItemUnitId:</label>


								</div>
								<div class="col-sm-6">

										<select type="text" class="form-control" id="ItemUnitId" name="ItemUnitId">
										</select>

								</div></div>
	
								<!-- /////////////////////////////////////////////////// -->
					       		<div class="row"><div class="col-sm-6">

					       			<label for="ItemCategoryId">ItemCategoryId:</label>

								</div>
								<div class="col-sm-6">

									<select type="text" class="form-control" id="ItemCategoryId" name="ItemCategoryId">
									</select>

								</div></div>


								<!-- //////////////////////////////////////////////////////// -->
								<div class="row"><div class="col-sm-6">

					       			<label for="ItemType">ItemType:</label>

								</div>
								<div class="col-sm-6">
									
									<select type="text" class="form-control" id="ItemType" name="ItemType">
			     						 		
			     						 			<option value="stock">stock</option>
			     						 			<option value="non-stock">non-stock</option>
			     					</select>

								</div></div>

								<!-- //////////////////////////////////////////////////////// -->
								<div class="row"><div class="col-sm-6">

					       			<label class="ItemNote"  for="ItemNote">ItemNote:</label>

								</div>
								<div class="col-sm-6">
									
									<textarea type="number" class="form-control ItemNote" id="ItemNote"  name="ItemNote" placeholder="ItemNote"></textarea>

								</div></div>

								<!-- //////////////////////////////////////////////////////// -->


			</div>
			<div class="col-sm-6">
	
					       		<div class="row"><div class="col-sm-6">

					       		<label class="InitialQty"  for="InitialQty">Initial Qty:</label>

								</div>
								<div class="col-sm-6">

								<input type="number" class="form-control InitialQty" id="InitialQty"  name="InitialQty" placeholder="InitialQty">

								</div></div>

								<!-- //////////////////////////////////////////////////////// -->


								<div class="row"><div class="col-sm-6">

					       		<label class="MinStock"  for="MinStock">MinStock:</label>

								</div>
								<div class="col-sm-6">

								<input type="number" class="form-control MinStock" id="MinStock"  name="MinStock" placeholder="MinStock">

								</div></div>

								<!-- //////////////////////////////////////////////////////// -->
								<div class="row"><div class="col-sm-6">

					       		<label class="MaxStock"  for="MaxStock">MaxStock:</label>

								</div>
								<div class="col-sm-6">

								<input type="number" class="form-control MaxStock" id="MaxStock"  name="MaxStock" placeholder="MaxStock">

								</div></div>



								<!-- /////////////////////////////////////////////////// -->
								<div class="row"><div class="col-sm-6">

					       		<label for="Active">Active:</label>

								</div>
								<div class="col-sm-6">
									<select type="text" class="form-control" id="Active" name="Active">
			     						 		
			     						 			<option value="yes">Yes</option>
			     						 			<option value="no">No</option>
			     					</select>

								</div></div>




			</div>
			</div>
		     					

					     

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
						        	<td><input  type="text" class="form-control" id="ItemUnit" name="ItemUnit" ></td>
						        	<td><button class="btn btn-primary" id="ItemUnitSave">Save</button></td>

					        	

					        </tr>

					        <tr>
					        	<!-- <div id="catagorylisttablediv"> -->

					        		<table id="ItemUnitlisttable"  class="table table-striped table-bordered" cellspacing="0" width="100%" > 
				
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


