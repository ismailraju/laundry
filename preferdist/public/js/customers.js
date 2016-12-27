
jQuery(document).ready(function($) {




toastr.options = {
					  "closeButton": true,
					  "debug": false,
					  "newestOnTop": false,
					  "progressBar": true,
					  "positionClass": "toast-top-right",
					  "preventDuplicates": false,
					  "onclick": null,
					  "showDuration": "200",
					  "hideDuration": "500",
					  "timeOut": "5000",
					  "extendedTimeOut": "1000",
					  "showEasing": "swing",
					  "hideEasing": "linear",
					  "showMethod": "fadeIn",
					  "hideMethod": "fadeOut"
					};


    // Setup - add a text input to each footer cell
    $('#customerlisttable tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" class="form-control customer_search" placeholder="'+title+'" />' );

    } );


    $( "#StandingDay" ).datepicker({
    	buttonImageOnly: true,
    	dateFormat: 'dd',
    	onSelect: function(dateText){
    			
        	
            }
    });

    $("#CustomersId").hide();



$("#newcustomermodal").on("hidden.bs.modal",function (e) { 

		//$("#newcustomermodal").modal("show");
	    $("#customerMastermodal").modal("show");

	});


$("#customerMastermodal").on("shown.bs.modal",function (e) { 

		customerlisttable.ajax.reload();  

	});

var customerlisttable=$('#customerMastermodal #customerlisttable').DataTable( {

			

	        "ajax": {

	        	url:"customerslist",
				type:'GET',
				dataType: "json",
				//dataType: "Array",
				"dataSrc": "",
				//data:{'action': 'itemunitlisttable'},
				//data:{'action': 'customerlisttabledynamic'},
				/*success:function(response){

					alert(JSON.stringify(response));
					console.log(JSON.stringify(response));
				},*/
			
				

	        },
	        "columns": [

	            
	            { "data": "CustomersId"},
	            { "data": "CustomerNumber"},
	            { "data": "CustomerName"},
	            { "data": "Address"},
	            { "data": "City"},
	            { "data": "Country"},
	            { "data": "PostCode"},
	            { "data": "ContactPerson"},
	            { "data": "PhoneNo"},
	            { "data": "Email"},
	            { "data": "DriverNo"},
	            { "data": "Notes"},
	            { "data": "Active"},
	            { "data": "Creditlimit"},
	            { "data": "TaxCode"},
	            { "data": "NominalCode"},
	            { "data": "ItemizingFixedBilling"},
	            { "data": "Invoicetype"},
	            { "data": "AmountFix"},
	            { "data": "HotTowelFree"},
	            { "data": "Weekday"},
	            { "data": "IsStanding"},
	            { "data": "StandingDay"},
	            { "data": "StandingAmount"},
	            { "data": "StandingType"},
	            { "data": "RegistrationDate"},
	           /* { "data": "duration", 

	              "render": function ( data, type, full, meta ) {
							      return type === 'display'? data/60:data;
						    }
	        	},
	        
	            */{"mRender": function (data, type, row) { 
	            	return '<div class="btn-group btn-group-xs" role="group" aria-label="...">'+
		            			
		            			'<button class="delete_customer btn btn-primary btn-xs" '+' value='+ row.id+ '>'+'Delete' + '</button>'+
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

	        //autoWidth: true,
	        //pagingType: "full_numbers",//first ,last boutton add hoy
	        rowId: 'CustomersId',
	        //"bPaginate": false,
	        //"bFilter": false,
	        //"bInfo": false
	         buttons: [
            	{
                text: 'Add Customer',
                action: function ( e, dt, node, config ) {


	                		$("#newcustomermodal .modal-header h5").text("Add new Customer");
		                    $("#newcustomermodal").attr("CustomersId",-1);
		                     $("#newcustomermodal #CustomersId").val('-1');



		                
	                     $("#newcustomermodal #CustomerNumber").val("");
	                     $("#newcustomermodal #CustomerName").val("");
	                     $("#newcustomermodal #Address").val("");
	                     $("#newcustomermodal #City").val("");
	                     $("#newcustomermodal #Country").val("");
	                     $("#newcustomermodal #PostCode").val("");
	                     $("#newcustomermodal #ContactPerson").val("");
	                     $("#newcustomermodal #PhoneNo").val("");
	                     $("#newcustomermodal #Email").val("");
	                     $("#newcustomermodal #DriverNo").val("");
	                     $("#newcustomermodal #Notes").val("");
	                     $("#newcustomermodal #Active").val("yes");
	                     $("#newcustomermodal #Creditlimit").val("");
	                     //$("#newcustomermodal #TaxCode").val();
	                     //$("#newcustomermodal #NominalCode").val();
	                     $("#newcustomermodal #ItemizingFixedBilling").val();
	                     $("#newcustomermodal #Invoicetype").val();
	                     $("#newcustomermodal #AmountFix").val("");
	                     $("#newcustomermodal #HotTowelFree").val();
	                     $("#newcustomermodal #Weekday").val();
	                     $("#newcustomermodal #IsStanding").val();
	                     $("#newcustomermodal #StandingDay").val();
	                     $("#newcustomermodal #StandingAmount").val("");
	                     $("#newcustomermodal #StandingType").val();		                    



                			$("#newcustomermodal").modal("show");
                			$("#customerMastermodal").modal("hide");

	                 		
                    
						}
                },
                {
                text: 'Modify Customer',
                action: function ( e, dt, node, config ) {

                	if(customerlisttable.rows('.selected').data().length >0){

		                 var data=customerlisttable.rows('.selected').data()[0];
		                 //catagorylisttable.row( $(this).parents('tr') ).data();
	                     //alert( itemlisttable1.rows('.selected').data().length +' row(s) selected' );
	                     //alert( itemlisttable1.rows('.selected').data()+' row(s) selected' );
	                     //alert( data.ItemName);
	                     //console.log( data);


	                     $("#newcustomermodal .modal-header h5").text("Modify Customer");
	                     $("#newcustomermodal").attr("CustomersId",data.CustomersId);


	                     


	                     $("#newcustomermodal #CustomersId").val(data.CustomersId);
	                     $("#newcustomermodal #CustomerNumber").val(data.CustomerNumber);
	                     $("#newcustomermodal #CustomerName").val(data.CustomerName);
	                     $("#newcustomermodal #Address").val(data.Address);
	                     $("#newcustomermodal #City").val(data.City);
	                     $("#newcustomermodal #Country").val(data.Country);
	                     $("#newcustomermodal #PostCode").val(data.PostCode);
	                     $("#newcustomermodal #ContactPerson").val(data.ContactPerson);
	                     $("#newcustomermodal #PhoneNo").val(data.PhoneNo);
	                     $("#newcustomermodal #Email").val(data.Email);
	                     $("#newcustomermodal #DriverNo").val(data.DriverNo);
	                     $("#newcustomermodal #Notes").val(data.Notes);
	                     $("#newcustomermodal #Active").val(data.Active);
	                     $("#newcustomermodal #Creditlimit").val(data.Creditlimit);
	                     $("#newcustomermodal #TaxCode").val(data.TaxCode);
	                     $("#newcustomermodal #NominalCode").val(data.NominalCode);

	                     
	                     $("#newcustomermodal #"+data.ItemizingFixedBilling).attr('checked',false);
	                     $("#newcustomermodal #"+data.ItemizingFixedBilling).click();

	                     $("#newcustomermodal #AmountFix").val(data.AmountFix);
	                     if(data.ItemizingFixedBilling=='Itemizing'){
	                     	$("#newcustomermodal #AmountFix").val("");
	                     }

	                     if(data.HotTowelFree=='yes'){
	                     	//alert("HotTowelFree");

		                     //$("#newcustomermodal #HotTowelFree").attr('checked','checked');
		                     $("#newcustomermodal #HotTowelFree").attr('checked',false);
		                     $("#newcustomermodal #HotTowelFree").click();
	                     }else if (data.HotTowelFree=='no') {

	                     	//alert("HotTowelPay");

		                     //$("#newcustomermodal #HotTowelPay").attr('checked','checked');
		                     $("#newcustomermodal #HotTowelPay").attr('checked',false);
		                     $("#newcustomermodal #HotTowelPay").click();
	                     }


	                     

	                     $("#newcustomermodal #Invoicetype").val(data.Invoicetype);

	                     str=data.Weekday;
	                     var res = str.split("_");
	                     //alert(JSON.stringify(res));

	                     dayy=[" ","sat","sun","mon","tue","wed","thu","fri"];
	                     $(".dayradio").attr('checked',false);
	                     for (var i = 0; i < res.length-1; i++) {
	                     	//alert("dayy[res[i]] "+res[i]+" "+dayy[parseInt(res[i])]);

	                     	$("#newcustomermodal #"+dayy[parseInt(res[i])]).click();
	                     }
	                     //$("#newcustomermodal #Weekday").val(data.Weekday);


	                     //$("#newcustomermodal #IsStanding").val(data.IsStanding);
	                     if(data.IsStanding=='on'){

	                     	 $("#newcustomermodal #IsStanding").attr('checked',false);
	                     	 $("#newcustomermodal #IsStanding").click();
	                     	 $("#newcustomermodal #StandingDay").val(data.StandingDay);
		                     $("#newcustomermodal #StandingAmount").val(data.StandingAmount);
		                     $("#newcustomermodal #StandingType").val(data.StandingType);

	                     }else{

	                     	 $("#newcustomermodal #StandingDay").val("");
		                     $("#newcustomermodal #StandingAmount").val("");
	                     }



	           			$("#newcustomermodal #Notes").val(data.Notes);
	                    

	                     $("#newcustomermodal").modal("show");
	                     $("#customerMastermodal").modal("hide");

	                 }else{
	                 	alert("Select a Row");
	                 }

                		}
                }, 'csv', 'print'//, 'pdf','copy', 'excel',
           
        	],


	        "footerCallback": function ( row, data, start, end, display ) {
	            var api = this.api(), data;
	 
	           
        	},
        	
	        //language: {
			            //"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/German.json"
			//       },
	        
	        "initComplete": function(settings, json) {

	        				

	        			//alert("compliteeeeeeeeeeeeeeee");


							}

	    } );






    // Apply the search footer
    customerlisttable.columns().every( function () {
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



$( "#newcustomermodal .isstaindingcls" ).prop( "disabled", true );

$(document).on( "change","#standingtable  input[type=checkbox]",function() {

	//alert($(this).prop( "checked" ));

	if($(this).prop( "checked" )){
		
		
		//$( "#newcustomermodal .isstaindingcls" ).show();
		$( "#newcustomermodal .isstaindingcls" ).prop( "disabled", false );
	}else {

		
		//$( "#newcustomermodal .isstaindingcls" ).hide();
		$( "#newcustomermodal .isstaindingcls" ).prop( "disabled", true );

	}


});

$(document).on( "click","#newcustomermodal  input[type=radio]",function() {

	if($(this).val()=="Itemizing"){
		//$( "#newcustomermodal .AmountFixClass" ).hide();
		$( "#newcustomermodal .AmountFixClass" ).prop( "disabled", true );

	}else if($(this).val()=="FixedBill"){
		//$( "#newcustomermodal .AmountFixClass" ).show();
		$( "#newcustomermodal .AmountFixClass" ).prop( "disabled", false );

	}


});



$(document).on( "click","#newcustomermodal  #customerSaveButton",function() {

    
    var dataa= $("#customerform").serialize();
				
	//dataa.append("action", "test");

    $.ajax({
           type: "POST",
           url: "customeradd",
           data: {'formdatas':dataa}, // serializes the form's elements.
           success: function(data)
           {
               //alert(JSON.stringify(data)); // show response from the php script.
               toastr.success('Successfully updated \n');
               $("#newcustomermodal").modal("hide");
               refresh_Customer_option();
           }
         });

        

   // e.preventDefault(); // avoid to execute the actual submit of the form.
//});




});



$(document).on("click","#customerMastermodal .delete_customer",function(){

	var data = customerlisttable.row( $(this).parents('tr') ).data();
	//alert(JSON.stringify(data));
	var CustomersId=parseInt(data.CustomersId);
	
	//alert(CustomersId);
	if(confirm("Are you sure?")){

		deletecustomer(data.CustomersId,data.CustomerName);

	}

});



$(document).on("click","#newcustomermodal .scheduler-border #ApplyEveryOtherDay",function(){


   var sel = $('.dayradio[type=checkbox]:checked').map(function(_, el) {
        return $(el).attr("index");
    }).get();

   if (sel.length) {

   	 //alert(JSON.stringify(sel[sel.length-1]));
    //alert(JSON.stringify(sel.length));

   		for (var i = parseInt(sel[sel.length-1]); i <=7; i++) {

   			//alert(i);
   			$(".dayradio[index='"+i+"']").prop('checked', true);

   			i=i+1;

   		}



   } 
   else {

   		//alert("select a day");
   		toastr.error( 'Select first Day!!');
   }



});





function deletecustomer(CustomersId,CustomerName) {



	var data  = {
		//'action': 'delete_customer',
		'CustomersId':CustomersId
	};

//alert(JSON.stringify(CustomersId));
//alert(JSON.stringify(CustomerName));

	$.ajax({
		url:"delete_customer",
		type:'POST',
		//dataType: "json",
		//dataType: "Array",
		data:data,
		success:function(response) {


				toastr.success(CustomerName+' Successfully deleted \n');
				customerlisttable.ajax.reload();  


				}

		})
		.done(
			function( response ) {

			   // console.log(">>done<<");


			    refresh_Customer_option();
				
			}
	  	)
	  
	  	.fail(
	  			function( xhr, status, errorThrown ) {
				    alert( "Sorry, there was a problem!" );
				    console.log( "Error: " + errorThrown );
				    console.log( "Status: " + status );
				    console.dir( xhr );
				  }
	  	)
	  
	  	.always(
	  			function( xhr, status ) {
	  				console.log(">>always<<");
	  				//customerListDBFunction_AD();
				    //alert( "The request is complete!" );





				  }
	  	);

}







taxCodeOption();
function taxCodeOption(){



    $.ajax({
           type: "POST",
           url: 'taxcodeoption',
           //data: {"action": "newcust",formdatas:dataa}, // serializes the form's elements.
           success: function(data)
           {
               //alert(JSON.stringify(data) ); // show response from the php script.
               //console.log(JSON.stringify(data) ); // show response from the php script.


               $("#newcustomermodal #TaxCode").html(data);
           }
         });


	


}

	nominaloption();
	function nominaloption(){



	    $.ajax({
	           type: "POST",
	           url: 'nominaloption',
	           //data: {"action": "newcust",formdatas:dataa}, // serializes the form's elements.
	           success: function(data)
	           {
	               //alert(JSON.stringify(data) ); // show response from the php script.
	               //console.log(JSON.stringify(data) ); // show response from the php script.


	               $("#NominalCode").html(data);
	           }
	         });


		


	}



/*

$('#newcustomermodal input').on("keypress", function(e) {
            
            if (e.keyCode == 13) {
                
                var inputs = $(this).parents("#newcustomermodal").eq(0).find(":input");
                var idx = inputs.index(this);

                alert(JSON.stringify(inputs));
                console.log(JSON.stringify(inputs));

                alert(JSON.stringify(idx));
                console.log(JSON.stringify(idx));

                if (idx == inputs.length - 1) {
                    inputs[0].select()
                } else {
                    inputs[idx + 1].focus(); //  handles submit buttons
                   // inputs[idx + 1].select();
                }
                return false;
            }
        });
*/


$('#newcustomermodal').on('keydown', 'input,select,textarea', function(e) {

	        //alert( e.keyCode);
    var self = $(this)
      , form = self.parents('form:eq(0)')
      , focusable
      , next
      ;
    if (e.keyCode == 13||e.keyCode==40) {
        focusable = form.find('input,select,textarea').filter(':not(:disabled)');


        next = focusable.eq(focusable.index(this)+1);


        //alert( JSON.stringify(focusable));
        console.log( JSON.stringify(focusable));


        //alert( JSON.stringify(next));
        console.log( JSON.stringify(next));


        if (next.length) {
            next.focus();
        } else {
           //form.submit();
        }
        return false;
    }



    if (e.keyCode==38) {
        focusable = form.find('input,select,textarea').filter(':not(:disabled)');


        previous = focusable.eq(focusable.index(this)-1);


        //alert( JSON.stringify(focusable));
        console.log( JSON.stringify(focusable));


        //alert( JSON.stringify(next));
        console.log( JSON.stringify(previous));


        if (previous.length) {
            previous.focus();
        } else {
           //form.submit();
        }
        return false;
    }











});











function refresh_Customer_option(){


	$.ajax({
		url:"customersOption",
		type:'POST',
		//dataType: "json",
		//dataType: "Array",
		//data:data,
		success:function(response) {
				//alert(JSON.stringify(response));
				$("#tabs-1 #customeroption").html(response);
				$("#tabs-2 #previousdeliverycustomeroption").html(response);
				$("#tabs-4 #statementbycustomercustomeroption").html(response);
				$("#productsMastermodal #CustomersName").html(response);

				//customeridd=parseInt($("#tabs-1 #customeroption option:selected").attr("value"));
				//tableconfigure(customeridd);

				// $("#tabs-1 #customeroption").select2();
				// $("#tabs-2 #previousdeliverycustomeroption").select2();
				// $("#tabs-4 #statementbycustomercustomeroption").select2();

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














/*$('#newcustomermodal').on('keydown', 'input, select, textarea', function(e) {
  if(event.keyCode==13) {
    event.keyCode = 9;

    $(this).nextAll('input,select,textarea').first().focus();
  }
});

*/

/*$(":input").on("keydown", function(event) {
    if (event.which === 13 && !$(this).is("textarea, :button, :submit")) {
        event.stopPropagation();
        event.preventDefault();
        
        $(this)
            .nextAll(":input:not(:disabled, [readonly='readonly'])")
            .first()
            .focus();
    }
});
*/





});//jquery ready end