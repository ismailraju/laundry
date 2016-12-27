<script type="text/javascript">



/////////////////////////////////new supplier  modal end/////////////////


$(document).on( "click","#newsuppliermodal  #NewSupplierSaveButton",function() {
	alert($("#newsupplierform").serialize());
	console.log($("#newsupplierform").serialize());



	
    var url = "receiver.php"; // the script where you handle the form input.
    var dataa= $("#newsupplierform").serialize();


				
	var SupplierId=$("#newsuppliermodal").attr("SupplierId");

    $.ajax({
           type: "POST",
           url: url,
           data: {"action": "addnewsupplier","formdatas":dataa,"SupplierId":SupplierId}, // serializes the form's elements.
           success: function(data)
           {
               alert(data); // show response from the php script.
           }
         });



});



$("#newsuppliermodal").on("shown.bs.modal",function (e) { 

		
		$("#supplierMastermodal").modal("hide");
 

	});


$("#newsuppliermodal").on("hidden.bs.modal",function (e) { 

		
        $("#supplierMastermodal").modal("show");     


	});

///////////////////////////supplier master modal start//////////////////////////////////////


$("#supplierMastermodal").on("shown.bs.modal",function (e) { 

		supplierlisttable.ajax.reload();  

	});

var supplierlisttable=$('#supplierMastermodal #supplierlisttable').DataTable( {

			

	        "ajax": {

	        	url:"receiver.php",
				type:'POST',
				dataType: "json",
				//dataType: "Array",
				"dataSrc": "",
				data:{'action': 'supplierlisttable'},
				//data:{'action': 'supplierlisttabledynamic'},
				/*success:function(response){

					alert(response);
				},
			*/
				

	        },
	        "columns": [

	            
	            { "data": "SupplierId"},
	            { "data": "SupplierName"},
	            { "data": "Address"},
	            { "data": "City"},
	            { "data": "Country"},
	            { "data": "PostCode"},
	            { "data": "ContactPerson"},
	            { "data": "PhoneNo"},
	            { "data": "FaxNumber"},
	            { "data": "Email"},
	            { "data": "Notes"},
	            { "data": "Active"},
	            { "data": "Creditlimit"},
	            { "data": "TaxId","visible": false,"searchable": false},
	            { "data": "TaxCode"},
	            { "data": "Description"},
	            { "data": "NominalId","visible": false,"searchable": false},
	            { "data": "NominalCode"},

	           
	           /* { "data": "duration", 

	              "render": function ( data, type, full, meta ) {
							      return type === 'display'? data/60:data;
						    }
	        	},
	        
	            */{"mRender": function (data, type, row) { 
	            	return '<div class="btn-group btn-group-xs" role="group" aria-label="...">'+
		            			
		            			'<button class="delete_supplier btn btn-primary btn-xs" '+' value='+ row.id+ '>'+'Delete' + '</button>'+
	            			'</div>';
	            			},			    
	            			"searchable": false,
			    			"orderable": false	
	        	}
	        	/*,{"mRender":function (data, type, row) { 
							return '<div class="" role="" >'+
				            			'<input type="checkbox" class="checkboxsingle" id="">'+
				            			
			            			'</div>';
			            		},
			    "searchable": false,
			    "orderable": false

	            }*/
	           
	        ],
	        //"processing": true,
        	//"serverSide": true,

	       	dom: 'fBrtil',
	       	orderCellsTop: true,
	       	//order: [[ 0, "desc" ]],//dateways sort
	       	//lengthMenu : [[10, 25, 50, -1], [10, 25, 50, "All"]],//row number show
	        select: true,

	        deferRender:true,
	        scrollX: 800,
	        scrollY: 400,
	        //scrollCollapse: true,
	        scroller: true,

	        autoWidth: true,
	        //pagingType: "full_numbers",//first ,last boutton add hoy
	        rowId: 'SupplierId',
	        //"bPaginate": false,
	        //"bFilter": false,
	        //"bInfo": false
	         buttons: [
            	{
                text: 'Add Supplier',
                action: function ( e, dt, node, config ) {


	                		$("#newsuppliermodal .modal-header h5").text("Add new Supplier");
		                    $("#newsuppliermodal").attr("SupplierId",-1);



		                     $("#newsuppliermodal #SupplierName").val("");
		                     $("#newsuppliermodal #Address").val("");
		                     $("#newsuppliermodal #City").val("");
		                     $("#newsuppliermodal #Country").val("");
		                     $("#newsuppliermodal #PostCode").val("");
		                     $("#newsuppliermodal #ContactPerson").val("");
		                     $("#newsuppliermodal #PhoneNo").val("");
		                     $("#newsuppliermodal #FaxNumber").val("");
		                     $("#newsuppliermodal #Email").val("");
		                     $("#newsuppliermodal #Notes").val("");
		                     $("#newsuppliermodal #Active").val("yes");
		                     $("#newsuppliermodal #Creditlimit").val("");
		                     //$("#newsuppliermodal #TaxId").val("");
		                     //$("#newsuppliermodal #NominalCode").val("");



                			$("#newsuppliermodal").modal("show");
                			$("#supplierMastermodal").modal("hide");

	                 		
                    
						}
                },
                {
                text: 'Modify Supplier',
                action: function ( e, dt, node, config ) {

                	if(supplierlisttable.rows('.selected').data().length >0){

		                 var data=supplierlisttable.rows('.selected').data()[0];
		                 //catagorylisttable.row( $(this).parents('tr') ).data();
	                     //alert( itemlisttable1.rows('.selected').data().length +' row(s) selected' );
	                     //alert( itemlisttable1.rows('.selected').data()+' row(s) selected' );
	                     //alert( data.ItemName);
	                     console.log( data);


	                     $("#newsuppliermodal .modal-header h5").text("Modify Supplier");
	                     $("#newsuppliermodal").attr("SupplierId",data.SupplierId);



	                     $("#newsuppliermodal #SupplierName").val(data.SupplierName);
	                     $("#newsuppliermodal #Address").val(data.Address);
	                     $("#newsuppliermodal #City").val(data.City);
	                     $("#newsuppliermodal #Country").val(data.Country);
	                     $("#newsuppliermodal #PostCode").val(data.PostCode);
	                     $("#newsuppliermodal #ContactPerson").val(data.ContactPerson);
	                     $("#newsuppliermodal #PhoneNo").val(data.PhoneNo);
	                     $("#newsuppliermodal #FaxNumber").val(data.FaxNumber);
	                     $("#newsuppliermodal #Email").val(data.Email);
	                     $("#newsuppliermodal #Notes").val(data.Notes);
	                     $("#newsuppliermodal #Active").val(data.Active);
	                     $("#newsuppliermodal #Creditlimit").val(data.Creditlimit);
	                     $("#newsuppliermodal #TaxId").val(data.TaxId);
	                     $("#newsuppliermodal #NominalCode").val(data.NominalCode);
	                     //$("#newsuppliermodal #SupplierName").val(data.SupplierName);



	                     $("#newsuppliermodal").modal("show");
	                     $("#supplierMastermodal").modal("hide");

	                 }else{
	                 	alert("Select a Row");
	                 }

                		}
                }, 'csv', 'print'//, 'pdf','copy', 'excel',
           
        	],


	        "footerCallback": function ( row, data, start, end, display ) {
	            var api = this.api(), data;
	 
	           

	           // $(api.column( button_col_no ).footer()).hide();
	           // $(api.column( check_col_no ).footer()).hide();
	           // $(api.column( duration_col_no ).footer()).hide();
        	},
        	
	        //language: {
			            //"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/German.json"
			//       },
	        
	        "initComplete": function(settings, json) {

	        				


							}

	    } );


    // Setup - add a text input to each footer cell
    $('#supplierlisttable tfoot tr th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" class="supplier_search" placeholder="Search '+title+'" />' );

    } );

    // Apply the search footer
    supplierlisttable.columns().every( function () {
        var that = this;

 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
            console.log(this);
        } );
    } );


$('#supplierlisttable tbody').on("click", ".delete_supplier", function(e){

	var data = supplierlisttable.row( $(this).parents('tr') ).data();

	if(confirm("Are you sure?")){
		deletesupplierlisttable(data.SupplierId);
	}
});


function deletesupplierlisttable(SupplierId) {


    var url = "receiver.php"; // the script where you handle the form input.


    $.ajax({
           type: "POST",
           url: url,
           data: {"action": "deletesupplierlisttable",
		           "SupplierId":SupplierId,

		           }, // serializes the form's elements.
           success: function(data)
           {
               //alert(data); // show response from the php script.
               console.log(data); // show response from the php script.
               supplierlisttable.ajax.reload(null ,false); 

           }
         })
    .done(function(response){

    	

    });

} 

//////////////////////////////newpurchasemastermodal////////////////////////////////



    $( "#EstimateDeliveryDate,#PurchaseDate,#ActualDeliveryDate" ).datepicker({
    	buttonImageOnly: true,
    	dateFormat: 'yy-mm-dd',
    	onSelect: function(dateText){
    			
        	
            }
    });








</script>
