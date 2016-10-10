<div class="row">


	
	<div class="form-inline">

		<div class="col-sm-8">

			<select id="previousdeliverycustomeroption" class="form-control"></select>
			<label id="">Past:</label>
			<select id="pastdaynumber" class="form-control">
				<option value="7">7</option>
				<option value="30">30</option>
				<option value="60">60</option>
				<option value="90">90</option>
				<option value="120">120</option>
				<option value="-1">All</option>
			</select>
			<label id="">Days</label>
			<a class="btn btn-primary" id="previousdeliverynoteselectbtn">Select</a>
			<a class="btn btn-primary" id="previousdeliverynoterefreshbtn">Refresh</a>
		</div>	
		<div class="col-sm-4">


			<input id="deliverynotenumberinput" class="form-control"/>
			<a class="btn btn-primary" id="previousdeliverynotepdfbtn" >Print</a>
			<a class="btn btn-primary" id="previousdeliverynotemodifybtn">Modify</a>

		</div>	

	</div>	


</div>

<div class="row">


<table id="previousdeliverynotetable"  class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%" > 
		
      	<thead>

            <tr>
                <th>DeliveryNote No.</th>
                <th>Date</th>
                <th>Net</th>
                
        	</tr>
		</thead>

        <!-- <tfoot>
            <tr>
            	<th>DeliveryNote No.</th>
                <th>Date</th>
                <th>Net</th>
            </tr>
        </tfoot> -->


	</table> 

</div>










		  <div class="modal fade" id="modifypreviousdeliverynotemodal" role="dialog">

			    <div class="modal-dialog modal-lg">
			    
			      <!-- Modal content-->
			      <div class="modal-content">

				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h5 class="modal-title">Modify Previous Delivery Note</h5>
				        </div>


				        <div class="modal-body">



							<label for="PreviousDeliveryNoteDate" id="">Delivery Note Date:</label>
							<input id="PreviousDeliveryNoteDate" class="">

							<a class="btn btn-primary" id="PreviousDeliveryNoteSaveBtn">Save</a>
							<a class="btn btn-primary" data-dismiss="modal">Close</a>



							<div class="">
								
								<label>Total:<span style="color:red;" > £<span style="color:red;" id="PreviousDeliveryNoteTotal">100</span></span></label>
							</div>

					        <table id="modifypreviousdeliverynotetable"  class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%" > 
				
								      <thead>

								            <tr>
								                <th>ProductName</th>
								                <th>Price</th>
								                <th>Quantity</th>
								                <th>Extra</th>
								                <th>Damage</th>
								                <th>Total</th>
								       

								               
								            </tr>


								        </thead>
								<!--         <tfoot>
								            <tr>
								                <th>CustomersId</th>
								    


								               
								            </tr>
								        </tfoot> -->


								</table> 

				        </div>



				        

			      </div>
			      
			    </div>
		  </div>



