

		  <div class="modal fade" id="productsMastermodal" role="dialog">

			    <div class="modal-dialog modal-lg">
			    
			      
			      <div class="modal-content">

				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h5 class="modal-title">products Master</h5>
				        </div>


				        <div class="modal-body">

				        	<div class="toolbars">
				        		<div class="container-fluid">
								<div class="row form-inline">
									<label for="CustomersName" class="">Customer Name:</label>
									<select type="text" class="form-control" id="CustomersName"  name="CustomersName">
								</select>
								</div>
								</div>
				        	</div>

					        <table id="productslisttable"  class="table table-striped table-bordered" cellspacing="0" width="100%" > 
				
								      <thead>

								            <tr>								            

								                <th>Id</th>
								                <th>Name</th>
								                <th>Price</th>
								                <th>CustomersId</th>
								                <th>Active</th>
								                <th>ItemId</th>
								                <th>Action</th>
								                

								               
								            </tr>


								        </thead>
								        <tfoot>
								            <tr>

								                <th>Id</th>
								                <th>Name</th>
								                <th>Price</th>
								                <th>CustomersId</th>
								                <th>Active</th>
								                <th>ItemId</th>
								                <th>Action</th>
								                
								               
								            </tr>
								        </tfoot>


							</table> 

				        </div>



				   

			      </div>
			      
			    </div>
		  </div>











<!-- Modal -->
		  <div class="modal fade" id="newproductsmodal" role="dialog">

			    <div class="modal-dialog">
			    
			      <!-- Modal content-->
			      <div class="modal-content">

				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h5 class="modal-title">New Products</h5>
				        </div>


				        <div class="modal-body">

					        <form role="form" id="productsform" >

					      

					          <div class="container-fluid">
					          	<div class="row" id="newproductstable">

					          	<div class="col-sm-12">
						          		<div class="row form-inline">
						          			<label for="CustomerName" class="plbl">CustomerName:</label>
											<input type="text" class="form-control" id="CustomerId"  name="CustomerId" placeholder="CustomerId">
											<select type="text" class="form-control" id="CustomerName"  name="CustomerName">
												
											</select>
						          		</div>
						          		<div class="row form-inline">
						          			<label for="ProductsName" class="plbl">Product Name:</label>

											<select type="text" class="form-control" id="ProductsName"  name="ProductsName">
											</select>

						          		</div>
						          		<div class="row form-inline">
						          			<label for="ProductPrice" class="plbl">Price:</label>
		
											<input type="number" min="0" class="form-control" id="ProductPrice"  name="ProductPrice" placeholder="ProductPrice">
											<span id="price_not_input_error" style="color:red;"></span>
						          		</div>

						          		<div class="row form-inline">
						          			<label for="Active" class="plbl">Active:</label>

											<select type="text" class="form-control" id="Active"  name="Active">
												<option value="yes">Yes</option>
												<option value="no">No</option>
											</select>

						          		</div>

					          	</div>
					          <!-- 	<div class="col-sm-2">
					          		<div class="row">
					          			<a class="btn btn-primary" id="productsSavebtn" >Save</a>
					          		</div>
					          		<div class="row">
					          			<a class="btn btn-primary" id="productsclose"  data-dismiss="modal">Close</a>
					          		</div>

					          	</div> -->
					          		
					          	</div>
					          </div>

					       

							</form>

				        </div> 



				        <div class="modal-footer">

				        	<div class="btn-group">
					          <button type="button" class="btn btn-primary" id="newproductSaveBtn">Save</button>
					          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        </div>


				        </div>

			      </div>
			      
			    </div>
		  </div>


