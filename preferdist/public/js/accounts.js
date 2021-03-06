
jQuery(document).ready(function($) {





/////////////////////////////////new tax modal start/////////////////

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

function refresh_Tax_option(){



    $.ajax({
           type: "POST",
           url: 'taxcodeoption',
           //data: {"action": "newcust",formdatas:dataa}, // serializes the form's elements.
           success: function(data)
           {
               //alert(JSON.stringify(data) ); // show response from the php script.
               //console.log(JSON.stringify(data) ); // show response from the php script.


               $("#newcustomermodal #TaxCode").html(data); 
               $("#newsuppliermodal #TaxId").html(data); 
           }
         });



}

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


				refresh_Tax_option();

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

    	refresh_Tax_option();
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

    	refresh_Tax_option();

    });

} 

/////////////////////////////////new tax modal end/////////////////
/////////////////////////////////new nominal modal start/////////////////




$("#newnominalmodal").on("shown.bs.modal",function (e) { 

		newnominaltable.ajax.reload();  

		$("#newnominalmodal #NominalCode").val("");
		$("#newnominalmodal #CodeDescription").val("");


	});

var newnominaltable=$('#newnominalmodal #newnominaltable').DataTable( {

			

	        "ajax": {

	        	url:"newnominallisttable",
				type:'POST',
				dataType: "json",
				//dataType: "Array",
				"dataSrc": ""
				//data:{'action': 'catagorylisttable'},
				
				
			
				

	        },
	        "columns": [

	            { "data": "NominalId"},
	            { "data": "NominalCode"},
	            { "data": "CodeDescription"},
	        
	            {"mRender": function (data, type, row) { 
	            	return '<div class="btn-group btn-group-xs" role="group" aria-label="...">'+
		            			
		            			'<button class="delete_nominal btn btn-primary btn-xs" '+' value='+ row.id+ '>'+'Delete' + '</button>'+
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


	function refresh_Nominal_option(){



	    $.ajax({
	           type: "POST",
	           url: 'nominaloption',
	           //data: {"action": "newcust",formdatas:dataa}, // serializes the form's elements.
	           success: function(data)
	           {


	               	$("#newcustomermodal #NominalCode").html(data); 
               		$("#newsuppliermodal #NominalId").html(data); 
	           }
	         });


		


	}


$(document).on( "click","#newnominalmodal #newNominalSave",function() {


	var NominalCode=	$("#newnominalmodal #NominalCode").val();
	var CodeDescription=$("#newnominalmodal #CodeDescription").val();


	//alert( NominalCode+" "+CodeDescription+" ");

	if( (NominalCode=="")|| (CodeDescription=="") ){
		toastr.error('Input required Input \n');

	}else{


			$.ajax({
		           type: "POST",
		           url: "addnewnominal",
		           data: {
		           		"NominalCode"		:NominalCode,
		           		"CodeDescription"	:CodeDescription
		           }, // serializes the form's elements.
		           success: function(data)
		           {
		               
		               console.log(data); // show response from the php script.
		           

		       			$('#newnominalmodal #newnominaltable').DataTable().ajax.reload(function ( json ) {

							newnominaltable.order( [ 0, 'desc' ] ).draw();

							var indx=newnominaltable.data().count()-1;
							console.log("table index>>: : ",indx);

						   	newnominaltable.rows(indx).nodes().to$().addClass('selected' );

						} ,
						false); 


						toastr.success('Successfully added \n');
		           }
		         })
		    .done(function(response){

		    	$("#newnominalmodal #NominalCode").val("");
				$("#newnominalmodal #CodeDescription").val("");

				refresh_Nominal_option();
		    });

	
	}//if end input empty check 


});




////////////



$('#newnominaltable').on( 'dblclick', 'tbody td:not(:first-child,:last-child)', function (e) {
              


    if(!$('#newnominaltable').hasClass("editing")){
        $('#newnominaltable').addClass("editing");
                console.log(this);
                
 				var data = newnominaltable.row( $(this).parents('tr') ).data();

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
			            "id":"Location_" + data.NominalId, 
			            "class":"changeLocation",
			            "value":thisLocationText,
			            "column":col,
			            "NominalId":data.NominalId,
			        }));


			        $("#Location_" + data.NominalId).focus();


			}

    } );





$('#newnominaltable tbody').on("change", ".changeLocation", function(){
    var val = $(this).val();
    var clm = $(this).attr("column");
    var NominalId = $(this).attr("NominalId");

    //alert(NominalId+" "+clm+" "+val);

    updatenewnominaltable(NominalId,clm,val);

    $(this).parent("td").empty().text(val);
    $('#newnominaltable').removeClass("editing");
});





$('#newnominaltable tbody').on("keydown", ".changeLocation", function(e){
	if(e.keyCode == 13){
       // alert('keydown');
	   
	    var val = $(this).val();
	    $(this).parent("td").empty().text(val);
	    $('#newnominaltable').removeClass("editing");

     }
});

$('#newnominaltable tbody').on("blur", ".changeLocation", function(e){

	   
	    var val = $(this).val();
	    $(this).parent("td").empty().text(val);
	    $('#newnominaltable').removeClass("editing");

});

$('#newnominaltable tbody').on("click", ".delete_nominal", function(e){

	var data = newnominaltable.row( $(this).parents('tr') ).data();

	if(confirm("Are you sure?")){
	
		deletenewnominaltable(data.NominalId);
	}

});



function updatenewnominaltable(NominalId,column,value) {

	    
    $.ajax({
           type: "POST",
           url: "updatenewnominaltable",
           data: {
           		   "NominalId":NominalId,
		           "column":column,
		           "value":value
		    }, // serializes the form's elements.
           success: function(data)
           {
               //alert(JSON.stringify(data) ); // show response from the php script.
               //console.log(data); // show response from the php script.
               newnominaltable.ajax.reload(null ,false); 
               newnominaltable.rows().nodes().to$(NominalId).addClass('selected' );

               toastr.success('Successfully updated \n');

    
           }
         })
    .done(function(response){


    	newnominaltable.rows().nodes().to$(NominalId).addClass('selected' );

		refresh_Nominal_option();
    });

        




}


/*newnominalmodal newnominaltable*/
/* NominalId`, `NominalCode`, `CodeDescription */



function deletenewnominaltable(NominalId) {



    $.ajax({
           type: "POST",
           url: "deletenewnominaltable",
           data: {
		           "NominalId":NominalId,

		           }, // serializes the form's elements.
           success: function(data)
           {
           	
               newnominaltable.ajax.reload(null ,false); 
               toastr.success('Successfully deleted \n');
           }
         })
    .done(function(response){

    		refresh_Nominal_option();

    });

} 


/////////////////////////////////new nominal modal end/////////////////







});//jquery ready end