

<!-- Modal -->



		  <div class="modal fade" id="newtaxmodal" role="dialog">

			    <div class="modal-dialog modal-lg">
			    
			      <!-- Modal content-->
			      <div class="modal-content">

				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h5 class="modal-title">New Tax</h5>
				        </div>


				        <div class="modal-body">

					       

					        <table>

					        <!-- `ItemCategoryId`, `ItemCategory` -->
					        	
					        <tr>

						        	<td><label class=""  for="TaxCode">TaxCode*:</label></td>
						        	<td><input  type="text" class="form-control" id="TaxCode" name="TaxCode" ></td>

						        	<td><label class=""  for="Rate">TaxRate*:</label></td>
						        	<td><input  type="number" class="form-control" id="Rate" name="Rate" ></td>

						        	<td><label class=""  for="Description">Description:</label></td>
						        	<td><input  type="text" class="form-control" id="Description" name="Description" ></td>




						        	<td><button class="btn btn-primary" id="newtaxSave">Save</button></td>

					        	

					        </tr>

					        <tr>


					        		<table id="newtaxtable"  class="table table-striped table-bordered" cellspacing="0" width="100%" > 
				
								      <thead>

								            <tr>
			<!-- `TaxId`, `TaxCode`, `Rate`, `Description -->					                
												<th>TaxId</th>
								                <th>TaxCode</th>
								                <th>Rate</th>
								                <th>Description</th>
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


