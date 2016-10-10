
jQuery(document).ready(function($) {


var customeridd=1;
customerlist();
itemOptionlist();

function customerlist(){


	$.ajax({
		url:"customersOption",
		type:'POST',
		//dataType: "json",
		//dataType: "Array",
		//data:data,
		success:function(response) {
				//alert(JSON.stringify(response));
				$("#productsMastermodal #CustomersName").html(response);
				$("#newproductsmodal #CustomerName").html(response);


				}

		})
		.done(
			function( response ) {

			    console.log(">>done<<");

			    customeridd=parseInt($("#productsMastermodal #CustomersName option:selected").attr("value"));
				productlistbycustomerid(customeridd);

		})
	  
	  	.fail(
	  			function( xhr, status, errorThrown ) {
				    alert( "Sorry, there was a problem!" );
				    console.log( "Error: " + errorThrown );
				    console.log( "Status: " + status );
				    console.dir( xhr );
		})
	  
	  	.always(
	  			function( xhr, status ) {
	  				console.log(">>always<<");
	  	
		});


}


$(document).on("change","#CustomersName",function(){

	customeridd=parseInt($("#productsMastermodal #CustomersName option:selected").attr("value"));
	productlistbycustomerid(customeridd);

});

function productlistbycustomerid(CustomersId){


	$.ajax({
		url:"productlistbycustomerid",
		type:'POST',
		dataType: "json",
		//dataType: "Array",
		data:{

			"CustomersId":CustomersId
		},
		success:function(response) {
				//alert(JSON.stringify(response));

				productslisttable.clear().draw();
				productslisttable.rows.add( response ).draw();



				}

		})
		.done(
			function( response ) {

			    console.log(">>done<<");

			   
		})
	  
	  	.fail(
	  			function( xhr, status, errorThrown ) {
				    alert( "Sorry, there was a problem!" );
				    console.log( "Error: " + errorThrown );
				    console.log( "Status: " + status );
				    console.dir( xhr );
		})
	  
	  	.always(
	  			function( xhr, status ) {
	  				console.log(">>always<<");
	  	
		});


}



function itemOptionlist(){


	$.ajax({
		url:"itemsOption",
		type:'POST',
		//dataType: "json",
		//dataType: "Array",
		//data:data,
		success:function(response) {

				$("#newproductsmodal #ProductsName").html(response);


				}

		})
		.done(
			function( response1 ) {

			    console.log(">>done<<");
	
		})
	  
	  	.fail(
	  			function( xhr, status, errorThrown ) {
				    alert( "Sorry, there was a problem!" );
				    console.log( "Error: " + errorThrown );
				    console.log( "Status: " + status );
				    console.dir( xhr );
		})
	  
	  	.always(
	  			function( xhr, status ) {
	  				console.log(">>always<<");
	  	
		});


}



$("#newproductsmodal").on("hidden.bs.modal",function (e) { 

	    $("#newproductsmodal").modal("hide");
        $("#productsMastermodal").modal("show");

	});

$("#newproductsmodal").on("show.bs.modal",function (e) { 

		$("#newproductsmodal #CustomerName").attr("disabled",true);
		$("#newproductsmodal #CustomerId").attr("disabled",true);
		

		//$("#newproductsmodal #CustomerId").val($("#newproductsmodal #CustomerName").val());

		//itemOptionlist()

	});

$("#productsMastermodal").on("show.bs.modal",function (e) { 

	customeridd=parseInt($("#productsMastermodal #CustomersName option:selected").attr("value"));
	productlistbycustomerid(customeridd); 

	});

var productslisttable=$('#productsMastermodal #productslisttable').DataTable( {

			

	        "ajax": {

	        	url:"productslist",
				type:'POST',
				dataType: "json",
				//dataType: "Array",
				"dataSrc": "",
				data:{'customeridd': customeridd},				
			/*	success:function(response){

					alert(JSON.stringify(response));
					console.log(JSON.stringify(response));
				},*/


	        },
	        "columns": [

	            
	            { "data": "ProductsId"},
	            { "data": "ProductName"},
	            { "data": "Price"},
	            { "data": "CustomersId"},
	            { "data": "Active"},
	            { "data": "ItemId"},
	            {"mRender": function (data, type, row) { 
	            	return '<div class="btn-group btn-group-xs" role="group" aria-label="...">'+
		            			
		            			'<button class="delete_product btn btn-primary btn-xs" '+' value='+ row.id+ '>'+'Delete' + '</button>'+
	            			'</div>';
	            			},			    
	            			"searchable": false,
			    			"orderable": false	
	        	}
	        	

	           
	        ],
	        //"processing": true,
        	//"serverSide": true,

	       	dom: 'fBrtilp',
	       	orderCellsTop: true,
	       	order: [[ 0, "desc" ]],//dateways sort
	       	lengthMenu : [[10, 25, 50, -1], [10, 25, 50, "All"]],//row number show
	        select: true,

	        deferRender:true,
	        scrollX: 800,
	        scrollY: 300,
	        //scrollCollapse: true,
	        scroller: true,

	        autoWidth: true,

	        rowId: 'ProductsId',

	         buttons: [
            	{
                text: 'Add Product',
                action: function ( e, dt, node, config ) {


	                	/*	$("#newproductsmodal .modal-header h5").text("Add new product");
		                    $("#newproductsmodal").attr("CustomersId",-1);
		                     $("#newproductsmodal #CustomersId").val('-1');


	                
	                     $("#newcustomermodal #CustomerNumber").val("");
	       */
	       					$("#newproductsmodal").attr("mode","add");
	       					$("#newproductsmodal .modal-header h5").text("Add new product");

							$("#newproductsmodal #CustomerId").val($("#productsMastermodal #CustomersName").val());
							$("#newproductsmodal #CustomerName").val($("#productsMastermodal #CustomersName").val());
                			
							$("#newproductsmodal #CustomerName").attr("disabled",true);
							$("#newproductsmodal #CustomerId").attr("disabled",true);
							$("#newproductsmodal #ProductsName").attr("disabled",false);

                			$("#newproductsmodal").modal("show");
                			$("#productsMastermodal").modal("hide");

	                 		
                    
						}
                },
                {
                text: 'Modify Product',
                action: function ( e, dt, node, config ) {


					if(productslisttable.rows('.selected').data().length >0){

							var data=productslisttable.rows('.selected').data()[0];
	                		//alert(JSON.stringify(data));

	                		$("#newproductsmodal").attr("mode","modify");

	                		$("#newproductsmodal .modal-header h5").text("Modify added product");

							$("#newproductsmodal #CustomerId").val($("#productsMastermodal #CustomersName").val());
							$("#newproductsmodal #CustomerName").val($("#productsMastermodal #CustomersName").val());
                			

							$("#newproductsmodal #ProductsName").attr("disabled",true);

							$("#newproductsmodal #ProductsName option[value='"+data.ItemId+"']").attr("selected",true);
							$("#newproductsmodal #ProductPrice").val(data.Price);
							$("#newproductsmodal #Active").val(data.Active);


                			$("#newproductsmodal").modal("show");
                			$("#productsMastermodal").modal("hide");

					}else{

	                 	alert("Select a Row");
	                }
                		


                		}
                }, 'csv', 'print'//, 'pdf','copy', 'excel',
           
        	],


	        "footerCallback": function ( row, data, start, end, display ) {
	            var api = this.api(), data;
	 
	           
        					},

	        
	        "initComplete": function(settings, json) {






							}

	    } );



$(document).on("click","#newproductSaveBtn",function(){

	$("#newproductsmodal #price_not_input_error").text("");

	var mode=$("#newproductsmodal").attr("mode");


	var CustomerId=$("#newproductsmodal #CustomerId").val();
	var ItemId=$("#newproductsmodal #ProductsName").val();

	var ProductsName=$("#newproductsmodal #ProductsName option[value='"+ItemId+"']").attr("itemname");
	var itemcolor=$("#newproductsmodal #ProductsName option[value='"+ItemId+"']").attr("itemcolor");

	if (itemcolor!="") {ProductsName=ProductsName+"-"+itemcolor;}

	var ProductPrice=$("#newproductsmodal #ProductPrice").val();
	var Active=$("#newproductsmodal #Active").val();


	if(ProductPrice==""){
	
	$("#newproductsmodal #price_not_input_error").text("Input Price!!");
		return;
	}


	//alert(CustomerId+" "+ItemId+" "+ProductsName+" "+ProductPrice+" "+Active);

	$.ajax({
		url:"customersProductsadd",
		type:'POST',
		dataType: "json",
		//dataType: "Array",
		data:{

			"mode":mode,
			"CustomerId":CustomerId,
			"ItemId":ItemId,
			"ProductsName":ProductsName,
			"ProductPrice":ProductPrice,
			"Active":Active

		},
		success:function(response) {
				//alert(JSON.stringify(response));
				//$("#productsMastermodal #CustomersName").html(response);
				//$("#newproductsmodal #CustomerName").html(response);

				if(response=="alreadyexist"){

					 toastr.error('This Product Already Exist \n');

				}else if (response=="ok") {

					 toastr.success('Successfully added\n');
					 //$("#newproductsmodal").modal("hide");
					
				}else if (response=="modified") {

					 toastr.success('Successfully modified\n');
					 //$("#newproductsmodal").modal("hide");
					
				}
			}

		})
		.done(
			function( response1 ) {

			    console.log(">>done<<");
	
		})
	  
	  	.fail(
	  			function( xhr, status, errorThrown ) {
				    alert( "Sorry, there was a problem!" );
				    console.log( "Error: " + errorThrown );
				    console.log( "Status: " + status );
				    console.dir( xhr );
		})
	  
	  	.always(
	  			function( xhr, status ) {
	  				console.log(">>always<<");
	  	
		});




});



$(document).on("click",".delete_product",function(){


	var data = productslisttable.row( $(this).parents('tr') ).data();

	//alert(JSON.stringify(data));
	
	$.ajax({
		url:"delete_single_product",
		type:'POST',
		dataType: "json",
		//dataType: "Array",
		data:{

			"ProductsId":data.ProductsId,


		},
		success:function(response) {
				//alert(JSON.stringify(response));


				if(response=="done"){

					toastr.success('Successfully deleted \n');

					customeridd=parseInt($("#productsMastermodal #CustomersName option:selected").attr("value"));
					productlistbycustomerid(customeridd); 

				}else {

					toastr.error('Deletion failed \n');
					
				}
			}

		})
		.done(
			function( response1 ) {

			    console.log(">>done<<");
	
		})
	  
	  	.fail(
	  			function( xhr, status, errorThrown ) {
				    alert( "Sorry, there was a problem!" );
				    console.log( "Error: " + errorThrown );
				    console.log( "Status: " + status );
				    console.dir( xhr );
		})
	  
	  	.always(
	  			function( xhr, status ) {
	  				console.log(">>always<<");
	  	
		});




});



});//jquery ready end