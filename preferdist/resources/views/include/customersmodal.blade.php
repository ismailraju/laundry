

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

					      

					          <div class="container-fluid">
					          	<div class="row" id="newcustomertable">
					          		<div class="col-sm-6">


					          		<input id="CustomersId" value="-1"  name="CustomersId" style="display:block;">
					          			

					          			
						          		<div class="row form-inline">
						          			<label for="CustomerName" class="lbl">Customer Name:</label>
											<input type="text" class=" form-control" id="CustomerName"  name="CustomerName" placeholder="Customer's Name">
						          		</div>					          			
						          		<div class="row form-inline">
						          			<label for="Address" class="lbl">Address:</label>
											<input type="text" class=" form-control" id="Address" name="Address" placeholder="Address">
						          		</div>
					          			
						          		<div class="row form-inline">
						          			<label for="City" class="lbl">City:</label>
											<input type="text" class=" form-control" id="City"  name="City" placeholder="City">
						          		</div>

					          			
						          		<div class="row form-inline">
						          			<label for="PostCode" class="lbl">PostCode:</label>
											<input type="text" class=" form-control" id="PostCode" name="PostCode" placeholder="PostCode">
						          		</div>

					          			
						          		<div class="row form-inline">
						          			<label for="ContactPerson" class="lbl">ContactPerson:</label>
											<input type="text" class=" form-control" id="ContactPerson" name="ContactPerson" placeholder="ContactPerson">
						          		</div>
			
						          		<div class="row form-inline">
						          			<label for="PhoneNo" class="lbl">PhoneNo:</label>
											<input type="tel" class=" form-control" id="PhoneNo" name="PhoneNo" placeholder="PhoneNo">
						          		</div>
						          		<div class="row form-inline">
						          			<label for="Email" class="lbl">Email:</label>
											<input type="text" class=" form-control" id="Email" name="Email" placeholder="Email">
						          		</div>
						          		<div class="row form-inline">
						          			<label for="DriverNo" class="lbl">Driver No:</label>
											<input type="text" class=" form-control" id="DriverNo" name="DriverNo" placeholder="Driver No">
						          		</div>
						          		<div class="row form-inline">
						          			<label for="TaxCode" class="lbl">TaxCode:</label>
											<select type="text" class=" form-control" id="TaxCode" name="TaxCode" >
	 
		     					

		     						 		</select>
						          		</div>

						          		<div class="row form-inline">
						          			<label for="NominalCode" class="lbl">NominalCode:</label>
											


											<select type="text" class=" form-control" id="NominalCode" name="NominalCode" >
	 
											</select>
						          		</div>

						          		<div class="row form-inline">
						          			<label for="Creditlimit" class="lbl">Creditlimit:</label>
											<input type="number" class=" form-control" id="Creditlimit" name="Creditlimit" placeholder="Creditlimit">
						          		</div>

						          		<div class="row form-inline">
						          			<label for="Active" class="lbl">Active:</label>
											<select type="text" class=" form-control" id="Active" name="Active" >
				     						  <option value="yes">Yes</option>
				     						  <option value="no">No</option>		     					
		     						 		</select>
						          		</div>

						          		<div class="row form-inline">
						          			<label for="CustomerNumber" class="lbl">CustomerNumber:</label>
											<input type="text" class="form-control" id="CustomerNumber"  name="CustomerNumber" placeholder="CustomerNumber">
						          		</div>


						          		<div class="row">
						          			
						          		</div>

					          		</div>


					          		<div class="col-sm-6">


					          			<fieldset class="scheduler-border">
								  		<legend>Standing Order:</legend>
					          			<div id="standingtable">
						          		<div class="row  form-inline">

						          			<div class="clm-sm-3 form-inline" style="width:200px;float:left;">
							          			<label for="IsStanding" class="lbl1">IsStanding:</label>
												<input type="checkbox" class="form-control" id="IsStanding" name="IsStanding" >
											</div>
						          			<div class="clm-sm-3 form-inline" style="width:200px;float:left;">
							          			<label for="StandingAmount" class="lbl1">Amount:</label>
												<input type="number" class="isstaindingcls form-control" id="StandingAmount" name="StandingAmount" placeholder="StandingAmount">
											</div>
						          		</div>


						          		<div class="row  form-inline">
						          			<div class="clm-sm-3 form-inline"  style="width:200px;float:left;">
												<label for="StandingType" class="lbl1">Type:</label>
												<select type="text" class="isstaindingcls form-control" id="StandingType" name="StandingType">


			     						 			<option value="weekly">Weekly</option>			     <option value="fortnight">Fortnight</option>
			     						 			<option value="monthly">Monthly</option>
				     							</select>

											</div>
						          			<div class="clm-sm-3 form-inline" style="width:200px;float:left;">
							          			<label for="StandingDay" class="lbl1">Day:</label>
												<input type="text" class="isstaindingcls form-control" id="StandingDay" name="StandingDay" placeholder="StandingDay">

											</div>
						          		</div>
						          		</div>
						          		</fieldset>


						          		<fieldset  class="scheduler-border">
								  		<legend>Invoice:</legend>
						          		<div id="invoicetable">
						          		<div class="row form-inline ItemizingFixedBillingdiv">
						          			<div class="col-sm-3 form-inline">
						          				<label for="FixedBill">Fixed Bill</label><input type="radio" id="FixedBill" class="radio form-control" name="ItemizingFixedBilling" value="FixedBill" checked>

						          			</div>
						          			<div class="col-sm-3 form-inline">
						          				<label for="Itemizing">Itemizing</label><input type="radio" id="Itemizing" class="radio form-control" name="ItemizingFixedBilling" value="Itemizing">

						          			</div>

						          		</div>

						          		<div class="row  form-inline">
						          			<div class="col-sm-3 form-inline"  style="width:200px;float:left;">
						          				<label for="Invoicetype">Invoicetype:</label>
												<select type="text" class=" form-control" id="Invoicetype" name="Invoicetype">
			     						 		
			     						 			<option value="yearly">Yearly</option>
			     						 			<option value="monthly">Monthly</option>
			     						 			<option value="quaterly">Quaterly</option>
			     						 			<option value="weekly">Weekly</option>
			     								</select>
						          			</div>
						          			<div class="col-sm-3 form-inline"  style="width:200px;float:left;">
						          				<label class="AmountFixClass"  for="AmountFix">Amount:</label>
												<input type="number" class="AmountFixClass form-control" id="AmountFix"  name="AmountFix" placeholder="AmountFix">

						          			</div>

						          		</div>
		          		
						          		<div class="row form-inline">
						          			<div class="col-sm-6 form-inline">
						          				<label for="HotTowelPay">HotTowelPay</label><input type="radio" id="HotTowelPay" class="radio" name="HotTowelFree" value="yes" checked>
						          			</div>
						          			<div class="col-sm-6 form-inline">
						          				
						          				<label for="HotTowelFree">HotTowelFree</label><input type="radio" id="HotTowelFree" class="radio" name="HotTowelFree" value="no">
						          			</div>

						          		</div>
						          		</div>
						          		</fieldset>


						          		<fieldset  class="scheduler-border">
								 		<legend>Day:</legend>
						          		<div class="row  form-inline">
						          			
						          			<div class="col-sm-1">
						          				<label for="sat">Sat:</label><input class="dayradio" type="checkbox" name="sat" id="sat" index="1">
						          			</div>
						          			<div class="col-sm-1">
						          				<label for="sun">Sun:</label><input class="dayradio" type="checkbox" name="sun" id="sun" index="2">
						          			</div>
						          			<div class="col-sm-1">
						          				<label for="mon">Mon:</label><input class="dayradio" type="checkbox" name="mon" id="mon" index="3">
						          			</div>
						          			<div class="col-sm-1">
						          				<label for="tue">Tue:</label><input class="dayradio" type="checkbox" name="tue" id="tue" index="4">
						          			</div>
						          			<div class="col-sm-1">
						          				<label for="wed">Wed:</label><input class="dayradio" type="checkbox" name="wed" id="wed" index="5">
						          			</div>
						          			<div class="col-sm-1">
						          				<label for="thu">Thu:</label><input class="dayradio" type="checkbox" name="thu" id="thu" index="6">
						          			</div>
						          			<div class="col-sm-1">
						          				<label for="fri">Fri:</label><input class="dayradio" type="checkbox" name="fri" id="fri" index="7">
						          			</div>
						          			<div class="col-sm-3">
						          				<a class="btn btn-primary" id="ApplyEveryOtherDay">EveryOther Day</a>
						          			</div>
						          		</div>
						          		</fieldset>

						          		<div class="row" id="detailstable">
						          		<label for="fri">Details:</label>
						          			<textarea type="text" class=" form-control" id="Notes"  name="Notes" placeholder="Notes"></textarea>
						          		</div>



					          		</div>
					          	</div>
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





		  <div class="modal fade" id="customerMastermodal" role="dialog">

			    <div class="modal-dialog modal-lg">
			    
			      <!-- Modal content-->
			      <div class="modal-content">

				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h5 class="modal-title">Customer Master</h5>
				        </div>


				        <div class="modal-body">

					        <table id="customerlisttable"  class="table table-striped table-bordered" cellspacing="0" width="100%" > 
				
								      <thead>

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
								        <tfoot>
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
								        </tfoot>


								</table> 

				        </div>



				        

			      </div>
			      
			    </div>
		  </div>



