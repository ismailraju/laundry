
jQuery(document).ready(function($) {





/////////////////////////////////new item catagory modal start/////////////////

$("#newItemCatagorymodal").on("shown.bs.modal",function (e) { 

		catagorylisttable.ajax.reload();  

	});

var catagorylisttable=$('#newItemCatagorymodal #catagorylisttable').DataTable( {

			

	        "ajax": {

	        	url:"catagorylisttable",
				type:'POST',
				dataType: "json",
				//dataType: "Array",
				"dataSrc": "",
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
	        //"processing": true,
        	//"serverSide": true,

	       	dom: 'fBrtil',
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

	        buttons:['copy', 'csv', 'excel', 'pdf', 'print'],

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


    $.ajax({
           type: "POST",
           url: "addcatagory",
           data: {"ItemCategory":ItemCategory}, // serializes the form's elements.
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
    	toastr.success('Successfully added \n');


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

	if(confirm("Are you sure?")){
	
		deletecatagorylisttable(data.ItemCategoryId);
	}

});


function updatecatagorylisttable(ItemCategoryId,column,value) {


    $.ajax({
           type: "POST",
           url: "updatecatagorylist",
           data: {
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

               toastr.success('Successfully updated \n');

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



    $.ajax({
           type: "POST",
           url: "deletecatagory",
           data: {
		           "ItemCategoryId":ItemCategoryId,

		           }, // serializes the form's elements.
           success: function(data)
           {
               //alert(data); // show response from the php script.
              // console.log(data); // show response from the php script.
               catagorylisttable.ajax.reload(null ,false); 
               toastr.success('Successfully deleted \n');
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

	        	url:"itemlist",
				type:'POST',
				dataType: "json",
				//dataType: "Array",
				"dataSrc": "",
				//data:{'action': 'itemlisttable'}
				//data:{'action': 'itemlisttabledynamic'}
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
	       // "processing": true,
        	//"serverSide": true,

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



    $.ajax({
           type: "POST",
           url: "deleteitemlist",
           data: {
           			"ItemId":ItemId,

		           }, // serializes the form's elements.
           success: function(data)
           {
           		toastr.success('Successfully deleted \n');

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
           url: "addnewitem",
           data: {"action": "addnewitem","formdatas":dataa,"ItemId":ItemId}, // serializes the form's elements.
           success: function(data)
           {
               //alert(data); // show response from the php script.

               toastr.success('Successfully added \n');
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

	        	url:"itemunitlist",
				type:'POST',
				dataType: "json",
				//dataType: "Array",
				"dataSrc": "",
				//data:{'action': 'itemunitlisttable'},
				//data:{'action': 'itemunitlisttabledynamic'},
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
	        //"processing": true,
        	//"serverSide": true,

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
	


    $.ajax({
           type: "POST",
           url: "itemunitadd",
           data: { "ItemUnit":ItemUnit}, // serializes the form's elements.
           success: function(data)
           {
               //alert(data); // show response from the php script.
               console.log(data); // show response from the php script.
               //catagorylisttable.ajax.reload(); 

       			$('#ItemUnitlisttable').DataTable().ajax.reload(function ( json ) {

       				 toastr.success('Successfully added \n');
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


    $.ajax({
           type: "POST",
           url: "updateitemunitlist",
           data: {
           			"ItemUnitId":ItemUnitId,
		           "column":column,
		           "value":value
		           }, // serializes the form's elements.
           success: function(data)
           {
               toastr.success('Successfully updated \n');
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
           url: "itemunitdelete",
           data: {"action": "deleteitemunitlisttable",
		           "ItemUnitId":ItemUnitId,

		           }, // serializes the form's elements.
           success: function(data)
           {
               toastr.success('Successfully deleted \n');
               ItemUnitlisttable.ajax.reload(null ,false); 

           }
         })
    .done(function(response){

    	

    });

} 



itemunitoption();
function itemunitoption(){



    $.ajax({
           type: "POST",
           url: 'itemunitoption',
           //data: {"action": "newcust",formdatas:dataa}, // serializes the form's elements.
           success: function(data)
           {
               //alert(JSON.stringify(data) ); // show response from the php script.
               //console.log(JSON.stringify(data) ); // show response from the php script.


               $("#ItemUnitId").html(data);
           }
         });


	


}


itemunitoption();
function itemunitoption(){



    $.ajax({
           type: "POST",
           url: 'itemunitoption',
           //data: {"action": "newcust",formdatas:dataa}, // serializes the form's elements.
           success: function(data)
           {
               //alert(JSON.stringify(data) ); // show response from the php script.
               //console.log(JSON.stringify(data) ); // show response from the php script.


               $("#ItemUnitId").html(data);
           }
         });


	


}



itemcategoryoption();
function itemcategoryoption(){



    $.ajax({
           type: "POST",
           url: 'itemcategoryoption',
          
           success: function(data)
           {
              // alert(JSON.stringify(data) ); // show response from the php script.
               //console.log(JSON.stringify(data) ); // show response from the php script.


               $("#ItemCategoryId").html(data);
           }
         });


	


}




/////////////////////////////////new item catagory modal end/////////////////



$('#NewItemmodal .modal-body').on('keydown', 'input,select,textarea', function(e) {

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








});//jquery ready end