<div class="row">

	<div class="col-sm-1">
		<div class="row"><!-- <a class="btn btn-primary">Create</a> --></div>

		<div class="row" id="weekdaynamesdiv"><span id="weekdaynames"></span></div>	

	</div>


	<div class="col-sm-2">
		<div class="row">
			<select id="customeroption" class="form-control"></select>

		</div>
		<div class="row form-inline">
			<label id="">DeliveryNoteDate:</label>
			<input id="deliverynotedate" class="form-control"/>
		</div>	

		<div class="row" id="deliverynotetotaldiv">Total: £<span id="deliverynotetotal">0</span></div>	
	</div>


	<div class="col-sm-1">
		<div class="row">
				<a class="btn btn-primary ssp_btn" id="deliverynoteselectbtn">Select</a>

		</div>
		<div class="row">
				<a class="btn btn-primary ssp_btn"  id="deliverynotesavebtn">Save</a>

		</div>
		<div class="row">
				<a class="btn btn-primary ssp_btn" id="deliverynoteprintbtn">Print</a>

		</div>		
	</div>

	<div class="col-sm-1">
		<div class="row">
				<a class="btn btn-primary" id="deliverynotemessagesbtn">Messages</a>

		</div>
		<div class="row" id="stockinfodiv">
		
				<div class="row"><label id=""><!-- Stock on hand --></label></div>	
				<div class="row"><span id="stkItemName"></span></div>	
				<div class="row"><span id="stkItemNumber"></span></div>	

		</div>		
	</div>

	<div class="col-sm-2">
		<textarea id="missingdeliverytextarea" class="form-control"></textarea>	
	</div>

	<div class="col-sm-2">
		<textarea id="missingpaymenttextarea" class="form-control"></textarea>	
	</div>


	<div class="col-sm-1">
		<div class="row">Balance: <span id="balance">200</span></div>		
	</div>


</div>


<div class="row">
	
	<!-- <table id="deliverynotetable"  class="display cell-border" cellspacing="0" width="100%" >  -->
	<table id="deliverynotetable"  class="table table-striped table-bordered" cellspacing="0" width="100%" > 
		
      	<thead>

            <tr>
                <th>P_Name</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Extra</th>
                <th>Dam</th>
                <th>Total</th>

                <th>Date1</th>
                <th>Ex1</th>
                <th>Dam1</th>

                <th>Date2</th>
                <th>Ex2</th>
                <th>Dam2</th>

                <th>Date3</th>
                <th>Ex3</th>
                <th>Dam3</th><!-- 
                <th>Date1</th>
                <th>Extra1</th>
                <th>Damage1</th>

                <th>Date2</th>
                <th>Extra2</th>
                <th>Damage2</th>

                <th>Date3</th>
                <th>Extra3</th>
                <th>Damage3</th> -->
        	</tr>
		</thead>

        <!-- <tfoot>
            <tr>
                <th>ProductName</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Extra</th>
                <th>Total</th>
            </tr>
        </tfoot> -->


	</table> 
</div>










		  <div class="modal fade" id="deliverynotemsgmodal" role="dialog">

			    <div class="modal-dialog modal-lg">
			    
			      <!-- Modal content-->
			      <div class="modal-content">

				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h5 class="modal-title">Messages(show 7 days)</h5>
				        </div>


				        <div class="modal-body">


				        <div class="row">
				        	<div class="col-sm-6 form-inline">
				        		<label for="deliverynotemsgdate">Date:</label>
				        		<input id="deliverynotemsgdate" class="form-control"/>
			
				        	</div>			
				        	<div class="col-sm-3">
				        		
				        	</div>			
				        	<div class="col-sm-3">
				        		
				        		<a class="btn btn-primary" id="deliverynotemsgnewmsgbtn">  New Message</a>
				        	</div>			
				        </div>


				        

				        <div class="row">
				        	<div class="col-sm-12">
				        		<label for="deliverynotemsgdate">Message:</label>
				        		<textarea id="deliverynotemsgtextarea"  class="form-control"></textarea>
				        		
			
				        	</div>		
				        </div>




   						<div class="row">
				        	<div class="col-sm-3">
				        		
			
				        	</div>			
				        	<div class="col-sm-3">
				        		
				        	</div>			
				        	<div class="col-sm-6">
				        		
				        		<a class="btn btn-primary"  id="deliverynotemsgsavebtn"  >Save</a>
				        		<a class="btn btn-primary"  data-dismiss="modal">Close</a>
				        	</div>			
				        </div>


				        <div class="row">

					        <table id="deliverynotemsgtable"  class="display" cellspacing="0" width="100%" > 
				
								      <thead>

								            <tr>
								                <th>Date</th>
								                <th>Message</th>

								               
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

