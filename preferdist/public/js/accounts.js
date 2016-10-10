
jQuery(document).ready(function($) {





/////////////////////////////////new item catagory modal start/////////////////

$("#newtaxmodal").on("shown.bs.modal",function (e) { 

		newtaxtable.ajax.reload();  

		$("#newtaxmodal #TaxCode").val("");
		$("#newtaxmodal #Rate").val("");
		$("#newtaxmodal #Description").val("");



	});

var newtaxtable=$('#newtaxmodal #newtaxtable').DataTable( {

			

	        "ajax": {

	        	url:"newtaxlisttable",
				type:'POST',
				dataType: "json",
				//dataType: "Array",
				"dataSrc": ""
				//data:{'action': 'catagorylisttable'},
				
				
			
				

	        },
	        "columns": [

	            { "data": "TaxId"},
	            { "data": "TaxCode"},
	            { "data": "Rate"},
	            { "data": "Description"},
	        
	            {"mRender": function (data, type, row) { 
	            	return '<div class="btn-group btn-group-xs" role="group" aria-label="...">'+
		            			
		            			'<button class="delete_catagory btn btn-primary btn-xs" '+' value='+ row.id+ '>'+'Delete' + '</button>'+
	            			'</div>';
	            			},			    
	            			"searchable": false,
			    			"orderable": false	
	        	}
	           
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
	        rowId: 'TaxId',

	        buttons:['copy', 'csv', 'excel', 'pdf', 'print'],

	        "footerCallback": function ( row, data, start, end, display ) {
	            var api = this.api(), data;
	 
	          
        	},
        	

	        
	        "initComplete": function(settings, json) {

	        				


							}

	    } );



$(document).on( "click","#newtaxmodal #newtaxSave",function() {


	var TaxCode=	$("#newtaxmodal #TaxCode").val();
	var Rate=		$("#newtaxmodal #Rate").val();
	var Description=$("#newtaxmodal #Description").val();


	//alert( TaxCode+" "+Rate+" "+Description);

	if( (TaxCode=="")|| (Rate=="")|| (Description=="")  ){
		toastr.error('Input required Input \n');

	}else{




			$.ajax({
		           type: "POST",
		           url: "addnewtax1",
		           data: {
		           		"TaxCode"		:TaxCode,
		           		"Rate"			:Rate,
		           		"Description"	:Description
		           }, // serializes the form's elements.
		           success: function(data)
		           {
		               
		               console.log(data); // show response from the php script.
		           

		       			$('#newtaxmodal #newtaxtable').DataTable().ajax.reload(function ( json ) {


							//table.rows( '.selected' ).nodes().to$().removeClass( 'selected' );
							newtaxtable.order( [ 0, 'desc' ] ).draw();

							var indx=newtaxtable.data().count()-1;
							console.log("table index>>: : ",indx);

						   	newtaxtable.rows(indx).nodes().to$().addClass('selected' );

						} ,
						false); 


						toastr.success('Successfully added \n');
		           }
		         })
		    .done(function(response){

		    	$("#newtaxmodal #TaxCode").val("");
				$("#newtaxmodal #Rate").val("");
				$("#newtaxmodal #Description").val("");




		    });

		        





	}//if end input empty check 

    




});





$('#newtaxtable').on( 'dblclick', 'tbody td:not(:first-child,:last-child)', function (e) {
              






    if(!$('#newtaxtable').hasClass("editing")){
        $('#newtaxtable').addClass("editing");
                console.log(this);
                
 				var data = newtaxtable.row( $(this).parents('tr') ).data();

                //console.log(JSON.stringify(data));
                //alert( JSON.stringify(data) );


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

					//http://jsfiddle.net/annoyingmouse/qd4w6a5o/

		        // thisLocation.empty().append("<input value='"+thisLocationText+"'/>");
		         thisLocation.empty().append($("<input/>",{
			            "id":"Location_" + data.TaxId, 
			            "class":"changeLocation",
			            "value":thisLocationText,
			            "column":col,
			            "TaxId":data.TaxId,
			        }));


			        $("#Location_" + data.TaxId).focus();


			}

    } );








$('#newtaxtable tbody').on("change", ".changeLocation", function(){
    var val = $(this).val();
    var clm = $(this).attr("column");
    var TaxId = $(this).attr("TaxId");

    //alert(TaxId+" "+clm+" "+val);

    updatenewtaxtable(TaxId,clm,val);

    $(this).parent("td").empty().text(val);
    $('#newtaxtable').removeClass("editing");
});





$('#newtaxtable tbody').on("keydown", ".changeLocation", function(e){
	if(e.keyCode == 13){
       // alert('keydown');
	   
	    var val = $(this).val();
	    $(this).parent("td").empty().text(val);
	    $('#newtaxtable').removeClass("editing");

     }
});

$('#newtaxtable tbody').on("blur", ".changeLocation", function(e){

	   
	    var val = $(this).val();
	    $(this).parent("td").empty().text(val);
	    $('#newtaxtable').removeClass("editing");

});

$('#newtaxtable tbody').on("click", ".delete_catagory", function(e){

	var data = newtaxtable.row( $(this).parents('tr') ).data();

	if(confirm("Are you sure?")){
	
		deletenewtaxtable(data.TaxId);
	}

});



function updatenewtaxtable(TaxId,column,value) {


    $.ajax({
           type: "POST",
           url: "updatenewtaxtable",
           data: {
           		   "TaxId":TaxId,
		           "column":column,
		           "value":value
		    }, // serializes the form's elements.
           success: function(data)
           {
               //alert(JSON.stringify(data) ); // show response from the php script.
               //console.log(data); // show response from the php script.
               newtaxtable.ajax.reload(null ,false); 
               newtaxtable.rows().nodes().to$(TaxId).addClass('selected' );

               toastr.success('Successfully updated \n');

    
           }
         })
    .done(function(response){


    	newtaxtable.rows().nodes().to$(TaxId).addClass('selected' );


    });

        




}






function deletenewtaxtable(TaxId) {



    $.ajax({
           type: "POST",
           url: "deletenewtaxtable",
           data: {
		           "TaxId":TaxId,

		           }, // serializes the form's elements.
           success: function(data)
           {
               //alert(data); // show response from the php script.
              // console.log(data); // show response from the php script.
               newtaxtable.ajax.reload(null ,false); 
               toastr.success('Successfully deleted \n');
           }
         })
    .done(function(response){

    	

    });

} 

/////////////////////////////////new item catagory modal end/////////////////







});//jquery ready end