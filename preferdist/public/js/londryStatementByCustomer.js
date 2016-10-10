
jQuery(document).ready(function($) {

	
	
    $( "#tabs-4 #statementbycustomerdateStart,#tabs-4 #statementbycustomerdateEnd" ).datepicker({
    	buttonImageOnly: true,
    	dateFormat: 'yy-mm-dd',
    	onSelect: function(dateText){
    			
        	
            }
    });


	$('#tabs-4 #statementbycustomerdateStart').datepicker( "setDate",new Date());
	$('#tabs-4 #statementbycustomerdateEnd').datepicker( "setDate",new Date());







	var dataObject = eval({
		   "data":[
		      {
		         "Index": 4,
		         "Name": "Bob",
		         "Age": 7,
		         "Image": "None"
		      },
		      {
		         "Index": 2,
		         "Name": "Timmy",
		         "Age": 4,
		         "Image": "None"
		      },
		      {
		         
		         "Name": "Heather",
		         "Age": 55,
		         "Image": "<img height='85' width='85' src='image.jpg'/>",
		         "Index": 3
		      },
		      {
		         "Index": 5,
		         "Name": "Sally",
		         "Age": 22,
		         "Image": "None"
		      }
		   ],
		    "columns": [
		        { "title": "Index", "data" : "Index" },
		        { "title": "Name",  "data": "Name" },
		        { "title": "Age", "data": "Age" },
		        { "title": "Image", "data": "Image" }
		    ]
		});
//var dataObject = eval('[{"COLUMNS":[{ "title": "NAME"}, { "title": "COUNTY"}],"DATA":[["John Doe","Fresno"],["Billy","Fresno"],["Tom","Kern"],["King Smith","Kings"]]}]');
    var columns = [];
   // $('#statementbycustomertable').dataTable(dataObject);



//var statementbycustomertable = $('#statementbycustomertable').DataTable(dataObject);
//$('#statementbycustomertable').empty();

$(document).on("click", "#statementbycustomerGenarateBtn", function(){


		var statementbycustomerdateStart=$("#tabs-4 #statementbycustomerdateStart").datepicker( "getDate" );
		statementbycustomerdateStart=moment(statementbycustomerdateStart).format("YYYY-MM-DD");


		var statementbycustomerdateEnd=$("#tabs-4 #statementbycustomerdateEnd").datepicker( "getDate" );
		statementbycustomerdateEnd=moment(statementbycustomerdateEnd).format("YYYY-MM-DD");




		var customeridd=parseInt($("#tabs-4 #statementbycustomercustomeroption option:selected").attr("value"));
		
		//alert(customeridd+" "+statementbycustomerdateStart+" "+statementbycustomerdateEnd);

	$.ajax({
		url:"statement_by_customer_Genarate",
		type:'POST',
		dataType: "json",
		//dataType: "Array",
		data:{

			"customeridd"					:customeridd,
			"statementbycustomerdateStart"	:statementbycustomerdateStart,
			"statementbycustomerdateEnd"	:statementbycustomerdateEnd
		},
		success:function(response) {

				console.log(JSON.stringify(response));
				//alert(JSON.stringify(response));

					statementbycustomertable = $('#statementbycustomertable').DataTable(dataObject);
				    statementbycustomertable.destroy();

				    $('#statementbycustomertable').empty();

				    statementbycustomertable=$('#statementbycustomertable').dataTable(response[0]);

				    

				}

		})
		.done(
			function( response ) {

			    console.log(">>done<<");

			    //alert(JSON.stringify(quantitylistarray));

			   
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









$(document).on("click", "#statementbycustomerPrintBtn", function(){



	
//alert( $( "#tabs-4 #statementbycustomertable" ).html() );
//console.log( $( "#tabs-4 #statementbycustomertable" ).html() );

    var $row = $(this).closest("tr");    // Find the row
    var $text = $row.find(".nr").text(); // Find the text
    
    // Let's test it out
    alert($text);

});












});//end jQuery(document).ready(function($) {