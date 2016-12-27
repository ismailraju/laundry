
jQuery(document).ready(function($) {





/////////////////////////////////today deleverynote  modal start/////////////////

$("#todaydeleverynotemodal").on("shown.bs.modal",function (e) { 

	var date = new Date();
	var todaydate=$.datepicker.formatDate('dd/mm/yy', date);

	var weekdays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
	var weekday = weekdays[date.getDay()];


	$('#todaydeleverynotemodal .modal-header h5').html("Today DeleveryNote "+todaydate+" "+weekday);

		todaydeleverynotetable.ajax.reload();  

	});

var todaydeleverynotetable=$('#todaydeleverynotemodal #todaydeleverynotetable').DataTable( {

			

	        "ajax": {

	        	url:"todaydeleverynoterequest",
				type:'POST',
				dataType: "json",
				//dataType: "Array",
				"dataSrc": "",
				/*success:function(response){

					alert(response);
				},
			*/
				

	        },
	        "columns": [

	            
	            { "data": "CustomerNumber"},
	            { "data": "CustomerName"},
	            { "data": "AmountFix",
	             "mRender": $.fn.dataTable.render.number( ',', '.', 2, '£' )
	         	},
	        
	        
	    /*        {"mRender": function (data, type, row) { 
	            	return '<div class="btn-group btn-group-xs" role="group" aria-label="...">'+
		            			
		            			'<button class="delete_catagory btn btn-primary btn-xs" '+' value='+ row.id+ '>'+'Delete' + '</button>'+
	            			'</div>';
	            			},			    
	            			"searchable": false,
			    			"orderable": false	
	        	}*/
	       
	           
	        ],

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

	        rowId: 'CustomersId',


	        buttons:['copy', 'csv', 'excel', 'pdf', 'print'],

	        "footerCallback": function ( row, data, start, end, display ) {
	            var api = this.api(), data;
	 
	     	},
	        "initComplete": function(settings, json) {

	        				


							}

	    } );




$(document).on( "click","#todaydeleverynotemodal  #tesstss",function() {

	//alert( "clickdici" );

    $.ajax({
           type: "POST",
           dataType: "json",
           //url: "newtaxlisttable",
           url: "todaydeleverynoterequest",
           data: {}, // serializes the form's elements.
           success: function(data)
           {
               alert( JSON.stringify(data) ); // show response from the php script.
               console.log( data ); // show response from the php script.

               //catagorylisttable.ajax.reload(); 
/*
       			$('#catagorylisttable').DataTable().ajax.reload(function ( json ) {


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

 

    });

        




});






});//jquery ready end