<script type="text/javascript">


$("#customerMastermodal").on("shown.bs.modal",function (e) { 

		customerlisttable.ajax.reload();  

	});

var customerlisttable=$('#customerMastermodal #customerlisttable').DataTable( {

			

	        "ajax": {

	        	url:"receiver.php",
				type:'POST',
				//dataType: "json",
				//dataType: "Array",
				//"dataSrc": "",
				//data:{'action': 'itemunitlisttable'},
				data:{'action': 'customerlisttabledynamic'},
				/*success:function(response){

					alert(response);
				},
			*/
				

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
	           /* { "data": "duration", 

	              "render": function ( data, type, full, meta ) {
							      return type === 'display'? data/60:data;
						    }
	        	},
	        
	            */{"mRender": function (data, type, row) { 
	            	return '<div class="btn-group btn-group-xs" role="group" aria-label="...">'+
		            			
		            			'<button class="delete_Item_Unit btn btn-primary btn-xs" '+' value='+ row.id+ '>'+'Delete' + '</button>'+
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
	        "processing": true,
        	"serverSide": true,

	       	dom: 'fBrtil',
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



		                     $("#newcustomermodal #SupplierName").val("");
		                    



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
	                     console.log( data);


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
	                     $("#newcustomermodal #ItemizingFixedBilling").val(data.ItemizingFixedBilling);
	                     $("#newcustomermodal #Invoicetype").val(data.Invoicetype);
	                     $("#newcustomermodal #AmountFix").val(data.AmountFix);
	                     $("#newcustomermodal #HotTowelFree").val(data.HotTowelFree);
	                     $("#newcustomermodal #Weekday").val(data.Weekday);
	                     $("#newcustomermodal #IsStanding").val(data.IsStanding);
	                     $("#newcustomermodal #StandingDay").val(data.StandingDay);
	                     $("#newcustomermodal #StandingAmount").val(data.StandingAmount);
	                     $("#newcustomermodal #StandingType").val(data.StandingType);
	           
	                    

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

	        				


							}

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
	alert($("#customerform").serialize());
	console.log($("#customerform").serialize());

// this is the id of the form
//$("#customerform").submit(function(e) {

	
    var url = "receiver.php"; // the script where you handle the form input.
    var dataa= $("#customerform").serialize();
				
	//dataa.append("action", "test");

    $.ajax({
           type: "POST",
           url: url,
           data: {"action": "newcust",formdatas:dataa}, // serializes the form's elements.
           success: function(data)
           {
               alert(data); // show response from the php script.
           }
         });

        

   // e.preventDefault(); // avoid to execute the actual submit of the form.
//});




});




/*

var CustomerName=$( "#newcustomermodal #CustomerName" ).val();
var Address=$( "#newcustomermodal #Address" ).val();
var City=$( "#newcustomermodal #City" ).val();
var PostCode=$( "#newcustomermodal #PostCode" ).val();
var ContactPerson=$( "#newcustomermodal #ContactPerson" ).val();

var PhoneNo=$( "#newcustomermodal #PhoneNo" ).val();

var Email=$( "#newcustomermodal #Email" ).val();
var DriverNo=$( "#newcustomermodal #DriverNo" ).val();
var TaxCode=$( "#newcustomermodal #TaxCode" ).val();
var NominalCode=$( "#newcustomermodal #NominalCode" ).val();
var Creditlimit=$( "#newcustomermodal #Creditlimit" ).val();
var Active=$( "#newcustActiveomermodal #Active" ).val();



var IsStanding=$( "#newcustActiveomermodal #IsStanding" ).val();

var StandingAmount=$( "#newcustActiveomermodal #StandingAmount" ).val();
var StandingType=$( "#newcustActiveomermodal #StandingType" ).val();



var StandingDay=$( "#newcustActiveomermodal #StandingDay" ).val();

var optradio=$( "#newcustActiveomermodal #optradio" ).val();



var Invoicetype=$( "#newcustActiveomermodal #Invoicetype" ).val();
var AmountFix=$( "#newcustActiveomermodal #AmountFix" ).val();



var checkbox=$( "#newcustActiveomermodal #checkbox" ).val();



var Notes=$( "#newcustActiveomermodal #Notes" ).val();

*/



/////////////////////////////////new item catagory modal start/////////////////

$("#newItemCatagorymodal").on("shown.bs.modal",function (e) { 

		catagorylisttable.ajax.reload();  

	});

var catagorylisttable=$('#newItemCatagorymodal #catagorylisttable').DataTable( {

			

	        "ajax": {

	        	url:"receiver.php",
				type:'POST',
				//dataType: "json",
				//dataType: "Array",
				//"dataSrc": "",
				//data:{'action': 'catagorylisttable'},
				data:{'action': 'catagorylisttabledynamic'},
				/*success:function(response){

					alert(response);
				},
			*/
				

	        },
	        "columns": [

	            
	            { "data": "ItemCategoryId"},
	            { "data": "ItemCategory"},
	           
	           /* { "data": "duration", 

	              "render": function ( data, type, full, meta ) {
							      return type === 'display'? data/60:data;
						    }
	        	},
	        
	            */{"mRender": function (data, type, row) { 
	            	return '<div class="btn-group btn-group-xs" role="group" aria-label="...">'+
		            			
		            			'<button class="delete_catagory btn btn-primary btn-xs" '+' value='+ row.id+ '>'+'Delete' + '</button>'+
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
	        "processing": true,
        	"serverSide": true,

	       	dom: 'frtil',
	       	orderCellsTop: true,
	       	order: [[ 0, "desc" ]],//dateways sort
	       	lengthMenu : [[10, 25, 50, -1], [10, 25, 50, "All"]],//row number show
	        select: true,

	        deferRender:true,
	        scrollY: 300,
	        //scrollCollapse: true,
	        scroller: true,

	        autoWidth: true,
	        //pagingType: "full_numbers",//first ,last boutton add hoy
	        rowId: 'ItemCategoryId',
	        //"bPaginate": false,
	        //"bFilter": false,
	        //"bInfo": false

	        "footerCallback": function ( row, data, start, end, display ) {
	            var api = this.api(), data;
	 
	           /* // Remove the formatting to get integer data for summation
	            var intVal = function ( i ) {
	                return typeof i === 'string' ?
	                    i.replace(/[\$,]/g, '')*1 :
	                    typeof i === 'number' ?
	                        i : 0;
	            };
	 
	            // Total over all pages
	            total = api
	                .column( duration_col_no )
	                .data()
	                .reduce( function (a, b) {
	                    return intVal(a) + intVal(b);
	                }, 0 );
	 
	            // Total over this page
	            pageTotal = api
	                .column( duration_col_no , { page: 'current'} )
	                .data()
	                .reduce( function (a, b) {
	                    return intVal(a) + intVal(b);
	                }, 0 );
	 
	            // Update footer
	            $( api.column( duration_col_no  ).footer() ).html(
	                ''+pageTotal/60 +'min ('+ total/60 +'min)'
	            );
*/

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




$(document).on( "click","#newItemCatagorymodal  #ItemCategorySave",function() {
	//alert($("#ItemCategoryform").serialize());
	//console.log($("#ItemCategoryform").serialize());


	var ItemCategory=$("#ItemCategoryName").val();
	
    var url = "receiver.php"; // the script where you handle the form input.
    //var dataa= $("#ItemCategoryform").serialize();
				


    $.ajax({
           type: "POST",
           url: url,
           data: {"action": "newcatagory","ItemCategory":ItemCategory}, // serializes the form's elements.
           success: function(data)
           {
               //alert(data); // show response from the php script.
               console.log(data); // show response from the php script.
               //catagorylisttable.ajax.reload(); 

       			$('#catagorylisttable').DataTable().ajax.reload(function ( json ) {


					//table.rows( '.selected' ).nodes().to$().removeClass( 'selected' );
					catagorylisttable.order( [ 0, 'desc' ] ).draw();

					var indx=catagorylisttable.data().count()-1;
					console.log("table index>>: : ",indx);

				   	catagorylisttable.rows(indx).nodes().to$().addClass('selected' );

				} ,
				false); 
           }
         })
    .done(function(response){

    	$("#ItemCategoryName").val("");


    });

        




});



//$('#catagorylisttable').on( 'click', 'tbody td:not(:first-child)', function (e) {
//$('#catagorylisttable').on( 'click', 'tbody td', function (e) {
$('#catagorylisttable').on( 'dblclick', 'tbody td:not(:first-child,:last-child)', function (e) {
                //editor.inline( this, { submitOnBlur: true } );



//$(this).on("change", "input", function(){
    //var val = $(this).val();
    //$(this).parent("td").empty().text(val);
    //$('#catagorylisttable').removeClass("editing");
//});

/*$('#catagorylisttable tbody editing').each(function(index){

		var val = $(this).val();
	    $(this).parent("td").empty().text(val);
	    $('#catagorylisttable').removeClass("editing");

});*/


    if(!$('#catagorylisttable').hasClass("editing")){
        $('#catagorylisttable').addClass("editing");
                console.log(this);
                
 				var data = catagorylisttable.row( $(this).parents('tr') ).data();
                console.log(data.ItemCategoryId+" "+data.ItemCategory);

                var col = $(this).parent().children().index($(this));
  				var roww = $(this).parent().parent().children().index($(this).parent());
  				console.log('Row: ' + roww + ', Column: ' + col);

                var row1 = this.parentElement;
                console.log("row: "+row1);

		        var $row1 = $(row1);
		        var thisLocation = $row1.find("td:nth-child("+(col+1)+")");
		        var thisLocationText = thisLocation.text();

		        console.log(thisLocation);
		        //alert(thisLocationText);

					/*http://jsfiddle.net/annoyingmouse/qd4w6a5o/*/

		        // thisLocation.empty().append("<input value='"+thisLocationText+"'/>");
		         thisLocation.empty().append($("<input/>",{
			            "id":"Location_" + data.ItemCategoryId, 
			            "class":"changeLocation",
			            "value":thisLocationText,
			            "column":col,
			            "ItemCategoryId":data.ItemCategoryId,
			        }));


			        $("#Location_" + data.ItemCategoryId).focus();


			}

    } );



$('#catagorylisttable tbody').on("change", ".changeLocation", function(){
    var val = $(this).val();
    var clm = $(this).attr("column");
    var ItemCategoryId = $(this).attr("ItemCategoryId");
    //alert(ItemCategoryId+" "+clm+" "+val);
    // alert('change');

    updatecatagorylisttable(ItemCategoryId,clm,val);
    $(this).parent("td").empty().text(val);
    $('#catagorylisttable').removeClass("editing");
});



$('#catagorylisttable tbody').on("keydown", ".changeLocation", function(e){
	if(e.keyCode == 13){
       // alert('keydown');
	   
	    var val = $(this).val();
	    $(this).parent("td").empty().text(val);
	    $('#catagorylisttable').removeClass("editing");

     }
});

$('#catagorylisttable tbody').on("blur", ".changeLocation", function(e){

	   
	    var val = $(this).val();
	    $(this).parent("td").empty().text(val);
	    $('#catagorylisttable').removeClass("editing");

});

$('#catagorylisttable tbody').on("click", ".delete_catagory", function(e){

	var data = catagorylisttable.row( $(this).parents('tr') ).data();
    //alert(data.ItemCategoryId+" "+data.ItemCategory);
	
	deletecatagorylisttable(data.ItemCategoryId);
});


function updatecatagorylisttable(ItemCategoryId,column,value) {


    var url = "receiver.php"; // the script where you handle the form input.


    $.ajax({
           type: "POST",
           url: url,
           data: {"action": "updatecatagorylisttable",
		           "ItemCategoryId":ItemCategoryId,
		           "column":column,
		           "value":value
		           }, // serializes the form's elements.
           success: function(data)
           {
               //alert(data); // show response from the php script.
               console.log(data); // show response from the php script.
               catagorylisttable.ajax.reload(null ,false); 
               catagorylisttable.rows().nodes().to$(ItemCategoryId).addClass('selected' );

       		/*	$('#catagorylisttable').DataTable().ajax.reload(function ( json ) {


					//table.rows( '.selected' ).nodes().to$().removeClass( 'selected' );
					catagorylisttable.order( [ 0, 'desc' ] ).draw();

					var indx=catagorylisttable.data().count()-1;
					console.log("table index>>: : ",indx);

				   	catagorylisttable.rows(indx).nodes().to$().addClass('selected' );

				} ,
				false);*/ 
           }
         })
    .done(function(response){

    	catagorylisttable.rows().nodes().to$(ItemCategoryId).addClass('selected' );

    });

        




}
function deletecatagorylisttable(ItemCategoryId) {


    var url = "receiver.php"; // the script where you handle the form input.


    $.ajax({
           type: "POST",
           url: url,
           data: {"action": "deletecatagorylisttable",
		           "ItemCategoryId":ItemCategoryId,

		           }, // serializes the form's elements.
           success: function(data)
           {
               //alert(data); // show response from the php script.
               console.log(data); // show response from the php script.
               catagorylisttable.ajax.reload(null ,false); 

           }
         })
    .done(function(response){

    	

    });

} 

/////////////////////////////////new item catagory modal end/////////////////


$("#itemMastermodal").on("shown.bs.modal",function (e) { 

		itemlisttable1.ajax.reload();  

	});


$("#NewItemmodal").on("hidden.bs.modal",function (e) { 

		
        $("#itemMastermodal").modal("show");

	});


var itemlisttable1=$('#itemMastermodal #itemlisttable').DataTable( {

			

	        "ajax": {

	        	url:"receiver.php",
				type:'POST',
				//dataType: "json",
				//dataType: "Array",
				//"dataSrc": "",
				//data:{'action': 'itemlisttable'}
				data:{'action': 'itemlisttabledynamic'}
				/*,success:function(response){

					alert(response);
				},*/
			
				

	        },
	        "columns": [

	            
	            { "data": "ItemId"},
	            { "data": "ItemName"},
	            { "data": "AveragePrice"},
	            { "data": "ItemCategoryId"},
	            { "data": "ItemUnitId"},
	            { "data": "InitialQty"},
	            { "data": "ItemNote"},
	            { "data": "Active"},
	            { "data": "ItemType"},
	            { "data": "MinStock"},
	            { "data": "MaxStock"},
	            {"mRender": function (data, type, row) { 
	            	return '<div class="btn-group btn-group-xs" role="group" aria-label="...">'+
		            			
		            			'<button class="delete_item btn btn-primary btn-xs" '+' value='+ row.id+ '>'+'Delete' + '</button>'+
	            			'</div>';
	            			},			    
	            			"searchable": false,
			    			"orderable": false	
	        	}
	           
	         
	           
	        ],
	        "processing": true,
        	"serverSide": true,

	       	dom: 'fBrtil',
	       	orderCellsTop: true,
	       	//order: [[ 0, "desc" ]],//dateways sort
	       	//lengthMenu : [[10, 25, 50, -1], [10, 25, 50, "All"]],//row number show
	        select: true,

	        deferRender:true,
	        scrollX: 800,
	        scrollY: 300,
	        //scrollCollapse: true,
	        scroller: true,

	        autoWidth: true,
	        //pagingType: "full_numbers",//first ,last boutton add hoy
	        rowId: 'ItemId',
	        //"bPaginate": false,
	        //"bFilter": false,
	        //"bInfo": false,
	         buttons: [
            	{
                text: 'Add Item',
                action: function ( e, dt, node, config ) {


	                		$("#NewItemmodal .modal-header h5").text("Add new Item");
		                    

		                     $("#NewItemmodal #ItemName").val("");
		                     $("#NewItemmodal #AveragePrice").val("");

		                     //$("#NewItemmodal #ItemCategoryId").val(data.ItemCategoryId);
		                     //$("#NewItemmodal #ItemUnitId").val(data.ItemUnitId);

		                     $("#NewItemmodal #InitialQty").val("0");
		                     $("#NewItemmodal #ItemNote").val("");

		                     $("#NewItemmodal #Active").val("yes");

		                     //$("#NewItemmodal #ItemType").val(data.ItemType);
		                     $("#NewItemmodal #MinStock").val("0");
		                     $("#NewItemmodal #MaxStock").val("0");

                			$("#NewItemmodal").attr("ItemId",-1);


                			$("#NewItemmodal").modal("show");
                			$("#itemMastermodal").modal("hide");

	                 		
                    
						}
                },
                {
                text: 'Modify Item',
                action: function ( e, dt, node, config ) {

                	if(itemlisttable1.rows('.selected').data().length >0){

		                 var data=itemlisttable1.rows('.selected').data()[0];
		                 //catagorylisttable.row( $(this).parents('tr') ).data();
	                     //alert( itemlisttable1.rows('.selected').data().length +' row(s) selected' );
	                     //alert( itemlisttable1.rows('.selected').data()+' row(s) selected' );
	                     //alert( data.ItemName);
	                     console.log( data);


	                     $("#NewItemmodal .modal-header h5").text("modify Item");
	                     $("#NewItemmodal").attr("ItemId",data.ItemId);

	                     $("#NewItemmodal #ItemName").val(data.ItemName);
	                     $("#NewItemmodal #AveragePrice").val(data.AveragePrice);

	                     $("#NewItemmodal #ItemCategoryId").val(data.ItemCategoryId);
	                     $("#NewItemmodal #ItemUnitId").val(data.ItemUnitId);

	                     $("#NewItemmodal #InitialQty").val(data.InitialQty);
	                     $("#NewItemmodal #ItemNote").val(data.ItemNote);

	                     $("#NewItemmodal #Active").val(data.Active);

	                     $("#NewItemmodal #ItemType").val(data.ItemType);
	                     $("#NewItemmodal #MinStock").val(data.MinStock);
	                     $("#NewItemmodal #MaxStock").val(data.MaxStock);


	                     $("#NewItemmodal").modal("show");
	                     $("#itemMastermodal").modal("hide");

	                 }else{
	                 	alert("Select a Row");
	                 }

                		}
                }
           
        	],


	        "footerCallback": function ( row, data, start, end, display ) {
	            var api = this.api(), data;
	 
	           },
	        
	        "initComplete": function(settings, json) {

	        				


							}

	    } );





$('#itemMastermodal tbody').on("click", ".delete_item", function(e){

	var data = itemlisttable1.row( $(this).parents('tr') ).data();

	if(confirm("Are you sure?")){
		deleteitemlisttable(data.ItemId);
	}
});


function deleteitemlisttable(ItemId) {


    var url = "receiver.php"; // the script where you handle the form input.


    $.ajax({
           type: "POST",
           url: url,
           data: {"action": "deleteitemlisttable",
		           "ItemId":ItemId,

		           }, // serializes the form's elements.
           success: function(data)
           {
               //alert(data); // show response from the php script.
               console.log(data); // show response from the php script.
               itemlisttable1.ajax.reload(null ,false); 

           }
         })
    .done(function(response){

    	

    });

} 



///////////////////////////NewItemmodal    start////////////////////////////////



$(document).on( "click","#NewItemmodal  #NewItemSaveButton",function() {

	
	//alert($("#newitemform").serialize());
	//console.log($("#newitemform").serialize());

	alert($("#NewItemmodal").attr("ItemId"));
	var ItemId=$("#NewItemmodal").attr("ItemId");
	
    var url = "receiver.php"; // the script where you handle the form input.
    var dataa= $("#newitemform").serialize();
				


    $.ajax({
           type: "POST",
           url: url,
           data: {"action": "addnewitem","formdatas":dataa,"ItemId":ItemId}, // serializes the form's elements.
           success: function(data)
           {
               //alert(data); // show response from the php script.

               
               $("#itemMastermodal").modal("show");
               $("#NewItemmodal").modal("hide");
           }
         });
	


});

/////////////////////////////new item modal end//////////////////////////////////



/////////////////////////////////new new Item Unit modal modal start/////////////////

$("#newItemUnitmodal").on("shown.bs.modal",function (e) { 

		ItemUnitlisttable.ajax.reload();  

	});

var ItemUnitlisttable=$('#newItemUnitmodal #ItemUnitlisttable').DataTable( {

			

	        "ajax": {

	        	url:"receiver.php",
				type:'POST',
				//dataType: "json",
				//dataType: "Array",
				//"dataSrc": "",
				//data:{'action': 'itemunitlisttable'},
				data:{'action': 'itemunitlisttabledynamic'},
				/*success:function(response){

					alert(response);
				},
			*/
				

	        },
	        "columns": [

	            
	            { "data": "ItemUnitId"},
	            { "data": "ItemUnit"},
	           
	           /* { "data": "duration", 

	              "render": function ( data, type, full, meta ) {
							      return type === 'display'? data/60:data;
						    }
	        	},
	        
	            */{"mRender": function (data, type, row) { 
	            	return '<div class="btn-group btn-group-xs" role="group" aria-label="...">'+
		            			
		            			'<button class="delete_Item_Unit btn btn-primary btn-xs" '+' value='+ row.id+ '>'+'Delete' + '</button>'+
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
	        "processing": true,
        	"serverSide": true,

	       	dom: 'frtil',
	       	orderCellsTop: true,
	       	order: [[ 0, "desc" ]],//dateways sort
	       	lengthMenu : [[10, 25, 50, -1], [10, 25, 50, "All"]],//row number show
	        select: true,

	        deferRender:true,
	        scrollY: 300,
	        //scrollCollapse: true,
	        scroller: true,

	        autoWidth: true,
	        //pagingType: "full_numbers",//first ,last boutton add hoy
	        rowId: 'ItemUnitId',
	        //"bPaginate": false,
	        //"bFilter": false,
	        //"bInfo": false

	        "footerCallback": function ( row, data, start, end, display ) {
	            var api = this.api(), data;
	 
	           
        	},
        	
	        //language: {
			            //"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/German.json"
			//       },
	        
	        "initComplete": function(settings, json) {

	        				


							}

	    } );




$(document).on( "click","#newItemUnitmodal  #ItemUnitSave",function() {
	

	var ItemUnit=$("#ItemUnit").val();
	
    var url = "receiver.php"; // the script where you handle the form input.

				


    $.ajax({
           type: "POST",
           url: url,
           data: {"action": "newitemunit","ItemUnit":ItemUnit}, // serializes the form's elements.
           success: function(data)
           {
               //alert(data); // show response from the php script.
               console.log(data); // show response from the php script.
               //catagorylisttable.ajax.reload(); 

       			$('#ItemUnitlisttable').DataTable().ajax.reload(function ( json ) {


					//table.rows( '.selected' ).nodes().to$().removeClass( 'selected' );
					ItemUnitlisttable.order( [ 0, 'desc' ] ).draw();

					var indx=ItemUnitlisttable.data().count()-1;
					console.log("table index>>: : ",indx);

				   	ItemUnitlisttable.rows(indx).nodes().to$().addClass('selected' );

				} ,
				false); 
           }
         })
    .done(function(response){

    	$("#ItemUnit").val("");


    });

        




});



$('#ItemUnitlisttable').on( 'dblclick', 'tbody td:not(:first-child,:last-child)', function (e) {

    if(!$('#ItemUnitlisttable').hasClass("editing")){
        $('#ItemUnitlisttable').addClass("editing");
                console.log(this);
                
 				var data = ItemUnitlisttable.row( $(this).parents('tr') ).data();
                console.log(data.ItemUnitId+" "+data.ItemUnit);

                var col = $(this).parent().children().index($(this));
  				var roww = $(this).parent().parent().children().index($(this).parent());
  				console.log('Row: ' + roww + ', Column: ' + col);

                var row1 = this.parentElement;
                console.log("row: "+row1);

		        var $row1 = $(row1);
		        var thisLocation = $row1.find("td:nth-child("+(col+1)+")");
		        var thisLocationText = thisLocation.text();

		        console.log(thisLocation);
		        //alert(thisLocationText);

					/*http://jsfiddle.net/annoyingmouse/qd4w6a5o/*/

		        // thisLocation.empty().append("<input value='"+thisLocationText+"'/>");
		         thisLocation.empty().append($("<input/>",{
			            "id":"Location_" + data.ItemUnitId, 
			            "class":"changeLocation",
			            "value":thisLocationText,
			            "column":col,
			            "ItemUnitId":data.ItemUnitId,
			        }));


			        $("#Location_" + data.ItemUnitId).focus();


			}

    } );



$('#ItemUnitlisttable tbody').on("change", ".changeLocation", function(){
    var val = $(this).val();
    var clm = $(this).attr("column");
    var ItemUnitId = $(this).attr("ItemUnitId");
    //alert(ItemCategoryId+" "+clm+" "+val);
    // alert('change');

    updateitemunitlisttable(ItemUnitId,clm,val);
    $(this).parent("td").empty().text(val);
    $('#ItemUnitlisttable').removeClass("editing");
});



$('#ItemUnitlisttable tbody').on("keydown", ".changeLocation", function(e){
	if(e.keyCode == 13){
       // alert('keydown');
	   
	    var val = $(this).val();
	    $(this).parent("td").empty().text(val);
	    $('#ItemUnitlisttable').removeClass("editing");

     }
});

$('#ItemUnitlisttable tbody').on("blur", ".changeLocation", function(e){

	   
	    var val = $(this).val();
	    $(this).parent("td").empty().text(val);
	    $('#ItemUnitlisttable').removeClass("editing");

});

$('#ItemUnitlisttable tbody').on("click", ".delete_Item_Unit", function(e){

	var data = ItemUnitlisttable.row( $(this).parents('tr') ).data();
    //alert(data.ItemCategoryId+" "+data.ItemCategory);
	
	deleteitemunitlisttable(data.ItemUnitId);
});


function updateitemunitlisttable(ItemUnitId,column,value) {

	//alert(ItemUnitId+" "+column+" "+value);
    var url = "receiver.php"; // the script where you handle the form input.


    $.ajax({
           type: "POST",
           url: url,
           data: {"action": "updateitemunitlisttable",
		           "ItemUnitId":ItemUnitId,
		           "column":column,
		           "value":value
		           }, // serializes the form's elements.
           success: function(data)
           {
               //alert(data); // show response from the php script.
               console.log(data); // show response from the php script.
               ItemUnitlisttable.ajax.reload(null ,false); 
               ItemUnitlisttable.rows().nodes().to$(ItemUnitId).addClass('selected' );

           }
         })
    .done(function(response){

    	ItemUnitlisttable.rows().nodes().to$(ItemUnitId).addClass('selected' );

    });

        




}
function deleteitemunitlisttable(ItemUnitId) {


    var url = "receiver.php"; // the script where you handle the form input.


    $.ajax({
           type: "POST",
           url: url,
           data: {"action": "deleteitemunitlisttable",
		           "ItemUnitId":ItemUnitId,

		           }, // serializes the form's elements.
           success: function(data)
           {
               //alert(data); // show response from the php script.
               console.log(data); // show response from the php script.
               ItemUnitlisttable.ajax.reload(null ,false); 

           }
         })
    .done(function(response){

    	

    });

} 

/////////////////////////////////new item catagory modal end/////////////////

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
