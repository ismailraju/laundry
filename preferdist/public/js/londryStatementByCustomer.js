
jQuery(document).ready(function($) {

	var statementbycustomertable;
	
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
		         "Image": "<img height='85' width='85' src=''/>",
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

    var columns = [];



$(document).on("click", "#Statment_By_Customer,#statementbycustomerGenarateBtn", function(){


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
				// if ( ! $.fn.DataTable.isDataTable( statementbycustomertable ) ) {
				//   	//statementbycustomertable = $('#statementbycustomertable').DataTable({});
				//   	//statementbycustomertable.destroy();
				//   	alert("not exist");

				// }else{
				// 	statementbycustomertable.destroy();
				// 	alert("exist");

				// }

					window.statementbycustomertable = $('#statementbycustomertable').DataTable(dataObject);
				   	window.statementbycustomertable.destroy();

				    // $('#statementbycustomertable').empty();

				    // statementbycustomertable=$('#statementbycustomertable').dataTable(response[0]);

				    statementbycustomertable = undefined;
				    delete window.statementbycustomertable;

				}

		})
		.done(
			function( response ) {

			    console.log(">>done<<");

			    //alert(JSON.stringify(quantitylistarray));
			    $('#tabs-4 #statementbycustomercustomeroption').prop("disabled", true);

			    $('#statementbycustomertable').empty();

			    window.statementbycustomertable=$('#statementbycustomertable').dataTable(response[0]);

			     window.tablealldata=response[0];
			   
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








$(document).on("click", "#tabs-4  #statementbycustomerCreateNewBtn", function(){


		$('#tabs-4 #statementbycustomercustomeroption').prop("disabled", false);

		//$('#statementbycustomertable').clear().draw();
		//statementbycustomertable.clear().draw();
		//$('#deliverynotenumberinput').val("");
		$('#tabs-4  #statementbycustomertable').empty();

});






$(document).on("click", "#statementbycustomerPrintBtn", function(){


		var statementbycustomerdateStart=$("#tabs-4 #statementbycustomerdateStart").datepicker( "getDate" );
		statementbycustomerdateStart=moment(statementbycustomerdateStart).format("YYYY-MM-DD");


		var statementbycustomerdateEnd=$("#tabs-4 #statementbycustomerdateEnd").datepicker( "getDate" );
		statementbycustomerdateEnd=moment(statementbycustomerdateEnd).format("YYYY-MM-DD");




		var customeridd=parseInt($("#tabs-4 #statementbycustomercustomeroption option:selected").attr("value"));
		
		//alert(customeridd+" "+statementbycustomerdateStart+" "+statementbycustomerdateEnd);

		statementByCustomerpdf_(customeridd, statementbycustomerdateStart, statementbycustomerdateEnd);

		// $.ajax({
		// 	url:"statement_by_customer_Genarate",
		// 	type:'POST',
		// 	dataType: "json",
		// 	//dataType: "Array",
		// 	data:{

		// 		"customeridd"					:customeridd,
		// 		"statementbycustomerdateStart"	:statementbycustomerdateStart,
		// 		"statementbycustomerdateEnd"	:statementbycustomerdateEnd
		// 	},
		// 	success:function(response) {

		// 			//console.log(JSON.stringify(response));
		// 			//alert(JSON.stringify(response));

		// 			statementByCustomerpdfcustomerinforequest( response[0] );

		// 			}

		// })
		// .done(
		// 	function( response ) {

		// 	    console.log(">>done<<");


			    
		// })
	  
	 //  	.fail(
	 //  			function( xhr, status, errorThrown ) {
		// 		    alert( "Sorry, there was a problem!" );
		// 		    console.log( "Error: " + errorThrown );
		// 		    console.log( "Status: " + status );
		// 		    console.dir( xhr );
		// })
	  
	 //  	.always(
	 //  			function( xhr, status ) {
	 //  				console.log(">>always<<");
	  	
		// });



     //alert( JSON.stringify(window.tablealldata));

});








function statementByCustomerpdfcustomerinforequest( invoiceslistarray ){

	
	var CustomersId=parseInt($("#tabs-4 #statementbycustomercustomeroption option:selected").attr("value"));


	$.ajax({
		url:"deliverynotepdfcustomerinforequest",
		type:'POST',
		dataType: "json",
		//dataType: "Array",
		data:{

			"CustomersId":CustomersId
		},
		success:function(response) {
				//alert(JSON.stringify(response));
				statementByCustomerpdf_(invoiceslistarray, response);


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



function statementByCustomerpdf_(customeridd, statementbycustomerdateStart, statementbycustomerdateEnd){


	 //alert('statementByCustomerpdf_()');
	 //alert(JSON.stringify(invoiceslistarray));
	 //alert(JSON.stringify(customersinfo));

		var mapForm = document.createElement("form");
	   // mapForm.target = "Map";
	    mapForm.style = "display:none;";
	    mapForm.target = "Map";
	    mapForm.method = "GET"; // or "post" if appropriate
	    mapForm.action = "statementByCustomerpdf";
	    //mapForm.action = "http://localhost/appointment/wp-content/plugins/first-plugin/mpdf/my.php";

	    var mapInput = document.createElement("input");
	    mapInput.type = "text";
	    mapInput.name = "customeridd";
	    mapInput.value = customeridd;
	    mapForm.appendChild(mapInput);

	    var mapInput = document.createElement("input");
	    mapInput.type = "text";
	    mapInput.name = "Start";
	    mapInput.value = statementbycustomerdateStart;
	    mapForm.appendChild(mapInput);
	    
	    var mapInput = document.createElement("input");
	    mapInput.type = "text";
	    mapInput.name = "End";
	    mapInput.value = statementbycustomerdateEnd;
	    mapForm.appendChild(mapInput);



	    // mapInput = document.createElement("input");
	    // mapInput.type = "text";
	    // mapInput.name = "deliverynotedate";
	    // mapInput.value = invoicedata.InvoiceDate;
	    // mapForm.appendChild(mapInput);

////////////////////////////////////////////////////////////////////

		document.body.appendChild(mapForm);

		    map = window.open("", "Map", "status=0,title=0,height=600,width=800,scrollbars=1", '_blank');

		if (map) {
		    mapForm.submit();
		    mapForm.remove();
		} else {
		    alert('You must allow popups for this map to work.');
		}



}




});//end jQuery(document).ready(function($) {