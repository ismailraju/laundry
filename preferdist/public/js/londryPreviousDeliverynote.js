
jQuery(document).ready(function($) {

	previousdeliverynotelisttableconfigurefirsttime(1,-1);

	$("#PreviousDeliveryNote,#previousdeliverynoteselectbtn,#previousdeliverynoterefreshbtn").on("click","",function(){


 			customeridd=parseInt($("#tabs-2 #previousdeliverycustomeroption option:selected").attr("value"));
 			lastnumberofdays=parseInt($("#tabs-2 #pastdaynumber option:selected").attr("value"));
			previousdeliverynotelisttableconfigure(customeridd,lastnumberofdays);

	});

 	var previousdeliverynotetable;



function totalcountfrommodifyarray(){
	var sum=0;

	P_D_N_array.filter(function(el) {

	    sum=sum+parseFloat(el.TotalAmount);
	});

	return parseFloat(sum);

}




function previousdeliverynotelisttableconfigurefirsttime(CustomersId,lastnumberofdays){

 		previousdeliverynotetable=$('#previousdeliverynotetable').DataTable({

			
			
	        "ajax": {

	        	url:"previous_delivery_note_bycustomerid",
				type:'POST',
				dataType: "json",
				//dataType: "Array",
				"dataSrc": "",
				data:{

					"CustomersId":CustomersId,
					"lastnumberofdays":lastnumberofdays
				},/*
				success:function(response){

					alert(JSON.stringify(response));
					console.log(JSON.stringify(response));
				},*/
			
				

	        },
	        "columns": [

	            
	            { "data": "InvoicesId"
	        	},
	            { "data": "InvoiceDate"
			    },
	            { "data": "TotalAmount",
	             "mRender": $.fn.dataTable.render.number( ',', '.', 2, '£' ) 
			    }

	           
	        ],
	        //"processing": true,
        	//"serverSide": true,

	       	dom: 'rtlp',
	       	orderCellsTop: true,
	       	order: [[ 0, "desc" ]],//dateways sort
	       	lengthMenu : [[10, 25, 50, -1], [10, 25, 50, "All"]],//row number show
	        select: true,

	        deferRender:true,
	        scrollX: 800,
	        scrollY: 350,
	        //scrollCollapse: true,
	        scroller: true,

	        autoWidth: true,
	        //pagingType: "full_numbers",//first ,last boutton add hoy
	        rowId: 'InvoicesId',
	        //"bPaginate": false,
	        //"bFilter": false,
	        //"bInfo": false

	        "initComplete": function(settings, json) {

	        							//alert(JSON.stringify(json));
										//console.log(JSON.stringify(json));


							}

	    } );




}








function previousdeliverynotelisttableconfigure(CustomersId,lastnumberofdays){


$.ajax({
			url:"previous_delivery_note_bycustomerid",
			type:'POST',
			dataType: "json",
			//dataType: "Array",
			data:{

				"CustomersId":CustomersId,
				"lastnumberofdays":lastnumberofdays
			},
			success:function(response) {
					//alert(JSON.stringify(response));
						
						previousdeliverynotetable.clear().draw();
						previousdeliverynotetable.rows.add( response ).draw();
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



$("#modifypreviousdeliverynotemodal").on("shown.bs.modal",function (e) { 

		//deliverynotemsgtable.ajax.reload(); 
		//$("#deliverynotemsgmodal #deliverynotemsgtextarea").attr("disabled",true); 

		$('#modifypreviousdeliverynotetable').DataTable().order([0, 'asc']).draw();

	});

var P_D_N_array=[];

function previousdeliverynotemodifyinfoshow(InvoicesId ){
		//alert(JSON.stringify(InvoicesId));

		$.ajax({
			url:"previous_delivery_note_modify_info_show",
			type:'POST',
			dataType: "json",
			//dataType: "Array",
			data:{

				"InvoicesId":InvoicesId

			},
			success:function(response) {
					//alert(JSON.stringify(response));
					console.log	(JSON.stringify(response));
						
						modifypreviousdeliverynotetable.clear().draw();
						modifypreviousdeliverynotetable.rows.add( response ).draw();


						//P_D_N_array=response;
						P_D_N_array=[];


						for (var i = 0; i < response.length; i++) {


					

							P_D_N_array.push({
	              
	              
	              						ProductsId:response[i].ProductsId, 
	              						ProductName:response[i].ProductName, 
	              						Price:response[i].Price, 
	              						CustomersId:response[i].CustomersId,
	              						ItemId:response[i].ItemId,
	              						Quantity:response[i].Quantity,
	              						Extra:response[i].Extra,
	              						Damage:response[i].Damage,
	              						TotalAmount:response[i].itemTotal,
	              						
	              
	              						});
						}

						console.log("ekhane dekho"+JSON.stringify(P_D_N_array));
						alert(JSON.stringify(P_D_N_array));

						$( "#modifypreviousdeliverynotemodal #PreviousDeliveryNoteTotal").text(totalcountfrommodifyarray());
						


					}

			})
			.done(
				function( response ) {

				    console.log(">>done<<");

				    $("#modifypreviousdeliverynotemodal").modal("show");


				   
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



$('#previousdeliverynotetable').on( 'click', 'tbody td',function(){

 		var data = previousdeliverynotetable.row( $(this).parents('tr') ).data();
         console.log(JSON.stringify(data));

                //data[0].InvoicesId

    	$("#deliverynotenumberinput").val(data.InvoicesId);

});






$('#tabs-2 #previousdeliverynotemodifybtn').on( 'click', '',function(){

 	 var data=previousdeliverynotetable.rows('.selected').data()[0];

 	 if(data!=null){

		//alert("not null");


    $("#modifypreviousdeliverynotemodal #PreviousDeliveryNoteDate").val(data.InvoiceDate);
    $("#modifypreviousdeliverynotemodal").val(data.InvoicesId);
    
 	 previousdeliverynotemodifyinfoshow( data.InvoicesId);




 	 }else if (data==null) {

 	 	alert("Select a row");
 	 }


 	//alert(JSON.stringify(data));
 	//console.log(JSON.stringify(data));

 	//$("#tabs-2 #modifypreviousdeliverynotemodal").modal("show");



});












var modifypreviousdeliverynotetable=$('#tabs-2 #modifypreviousdeliverynotetable').DataTable({

			
			
	        "ajax": {

	        	url:"previous_delivery_note_modify_info_show",
				type:'POST',
				dataType: "json",
				//dataType: "Array",
				"dataSrc": "",
				data:{

					"InvoicesId":19
				},/*
				success:function(response){

					alert(JSON.stringify(response));
					console.log(JSON.stringify(response));
				},*/
			
				

	        },
	        "columns": [
	            
	            { "data": "ProductName"
	        	},
	            { "data": "Price",
	             "mRender": $.fn.dataTable.render.number( ',', '.', 2, '£' ) 

			    },
	            { "data": "Quantity",
	              "mRender": function (data, type, row) { 
	            				var temp=(data==0)? '':data;

	            				return temp;
	            			}
			    },
	            { "data": "Extra",
	              "mRender": function (data, type, row) { 
	            				var temp=(data==0)? '':data;

	            				return temp;
	            			}
			    },
	            { "data": "Damage",
	              "mRender": function (data, type, row) { 
	            				var temp=(data==0)? '':data;

	            				return temp;
	            			}
			    },
	            { "data": "itemTotal",

	            /* "mRender":function (data, type, row) { 
	            				var temp=(data==0)? '':data;
	            				//return $.fn.dataTable.render.number( ',', '.', 2, '£' ) ;
	            				return temp;
	            			},*/

	              "mRender":$.fn.dataTable.render.number( ',', '.', 2, '£' ) 
			    }

	           
	        ],
	        //"processing": true,
        	//"serverSide": true,

	       	dom: 'rtlp',
	       	orderCellsTop: true,
	       	order: [[ 0, "desc" ]],//dateways sort
	       	lengthMenu : [[10, 25, 50, -1], [10, 25, 50, "All"]],//row number show
	        select: true,

	        deferRender:true,
	        scrollX: 800,
	        scrollY: 350,
	        //scrollCollapse: true,
	        scroller: true,

	        autoWidth: true,
	        //pagingType: "full_numbers",//first ,last boutton add hoy
	        rowId: 'ItemId',
	        //"bPaginate": false,
	        //"bFilter": false,
	        //"bInfo": false

	        "initComplete": function(settings, json) {

	        							//alert(JSON.stringify(json));
										//console.log(JSON.stringify(json));


							}

	    } );














    $( "#modifypreviousdeliverynotemodal #PreviousDeliveryNoteDate" ).datepicker({
    	buttonImageOnly: true,
    	dateFormat: 'yy-mm-dd',
    	onSelect: function(dateText){
    			
        	
            }
    });


////////////////////////////////////////////////////////////////////////////////start




/*dblclick*/
	$('#modifypreviousdeliverynotetable').on( 'click', 'tbody td:nth-child(3),tbody td:nth-child(4),tbody td:nth-child(5)', function (e) {
	//$('#deliverynotetable').on( 'dblclick', 'tbody td:not(:first-child,:last-child)', function (e) {



    if(!$('#modifypreviousdeliverynotetable').hasClass("editing")){
        $('#modifypreviousdeliverynotetable').addClass("editing");
                console.log(this);
                
 				var data = modifypreviousdeliverynotetable.row( $(this).parents('tr') ).data();
                console.log(JSON.stringify(data));
                //alert(JSON.stringify(data));

                var col = $(this).parent().children().index($(this));
  				var roww = $(this).parent().parent().children().index($(this).parent());
  				console.log('Row: ' + roww + ', Column: ' + col);
  				//alert('Row: ' + roww + ', Column: ' + col);


                var row1 = this.parentElement;
                console.log("row: "+row1);

		        var $row1 = $(row1);
		        var thisLocation = $row1.find("td:nth-child("+(col+1)+")");
		        var thisLocationText = thisLocation.text();

		        console.log(thisLocation);


		         thisLocation.empty().append($("<input>",{
		         		"type":"number",
		         		"min":0,
			            "id":"Location_" + data.ProductsId, 
			            "class":"changeLocation inputsizecls",
			            "value":thisLocationText,
			            "row":roww,
			            "column":col,
			            "ProductsId":data.ProductsId,
			            "Price":data.Price,
			        }));



			     $("#Location_" + data.ProductsId).focus();


			}

    } );

var clm_total_amount=5;

$('#modifypreviousdeliverynotetable tbody').on("change", ".changeLocation", function(){

	var data = modifypreviousdeliverynotetable.row( $(this).parents('tr') ).data();
	//alert(JSON.stringify(data));
	console.log(JSON.stringify(data));
	//alert(JSON.stringify(data.quantity1));

	//alert(parseInt($(this).val()));

	if(isNaN(parseInt( $(this).val() ))){

		alert("Give Correct Input!!");
		$(this).parent("td").empty().text("");
	    $('#modifypreviousdeliverynotetable').removeClass("editing");

	}else{



    var val = parseInt($(this).val());
    var clm = parseInt($(this).attr("column"));
    var row = parseInt($(this).attr("row"));
    var ProductsId = parseInt($(this).attr("ProductsId"));


   // alert(ProductsId+" clm:"+clm+" row:"+row+" "+val);



    var total=0;

if(val){
    if(clm==2){

    P_D_N_array=P_D_N_array.filter(function(el) {
    	
	    if((parseInt(el.ProductsId) == parseInt(data.ProductsId))){

	    	el.Quantity=val;


	    	total=parseFloat(((el.Quantity+el.Extra))*(el.Price));
	    	el.TotalAmount=total;
	    	
	    	return true;
	    }
	    else{
	    	
	    	return true;
	    }
	});


	alert(JSON.stringify(P_D_N_array));


	$( "#modifypreviousdeliverynotetable tbody tr:nth-child("+(row+1)+") td:nth-child("+(clm_total_amount+1)+")" ).text( "£"+(total).toFixed(2) );
	//$( "#modifypreviousdeliverynotemodal #PreviousDeliveryNoteTotal").text( total );




    $('#modifypreviousdeliverynotetable').removeClass("editing");
    $( "#modifypreviousdeliverynotemodal #PreviousDeliveryNoteTotal").text(totalcountfrommodifyarray());

    }

    if(clm==3){

    P_D_N_array=P_D_N_array.filter(function(el) {

	    if((parseInt(el.ProductsId) == parseInt(data.ProductsId))){

	    	el.Extra=val;
	    	total=parseFloat(((el.Quantity+el.Extra))*(el.Price));
	    	el.TotalAmount=total;
	    	return true;
	    }
	    else{
	    	
	    	return true;
	    }
	});

	$( "#modifypreviousdeliverynotetable tbody tr:nth-child("+(row+1)+") td:nth-child("+(clm_total_amount+1)+")" ).text("£"+ (total).toFixed(2) );




	$(this).parent("td").empty().text(parseInt(val));
    $('#modifypreviousdeliverynotetable').removeClass("editing");
    $( "#modifypreviousdeliverynotemodal #PreviousDeliveryNoteTotal").text(totalcountfrommodifyarray());
    }


    if(clm==4){

    P_D_N_array=P_D_N_array.filter(function(el) {

	    if((parseInt(el.ProductsId) == parseInt(data.ProductsId))){

	    	el.Damage=val;
	    	return true;
	    }
	    else{
	    	
	    	return true;
	    }
	});


    }


    $(this).parent("td").empty().text(parseInt(val));
    $('#modifypreviousdeliverynotetable').removeClass("editing");
    $( "#modifypreviousdeliverynotemodal #PreviousDeliveryNoteTotal").text(totalcountfrommodifyarray());

}
    //$( "#deliverynotetable tbody tr:nth-child("+(row+1)+") td:nth-child("+(clm_total+1)+")" ).text( total );
    // alert('change');

    //updatecatagorylisttable(ItemCategoryId,clm,val);


  //  data.quantity1

    //$(this).parent("td").empty().text(parseInt(val));
   // $('#deliverynotetable').removeClass("editing");
   // $( "#modifypreviousdeliverynotemodal #PreviousDeliveryNoteTotal").text(totalcountfrommodifyarray());

}

});





$('#modifypreviousdeliverynotetable tbody').on("keydown", ".changeLocation", function(e){
	if(e.keyCode == 13){
       // alert('keydown');
	if(isNaN(parseInt( $(this).val() ))){

		//alert("Give Correct Input!!");
		$(this).parent("td").empty().text("");
	    $('#modifypreviousdeliverynotetable').removeClass("editing");

	}else{
	   
	    var val = $(this).val();
	    $(this).parent("td").empty().text(parseInt(val));
	    $('#modifypreviousdeliverynotetable').removeClass("editing");
	}

     }
});


$('#modifypreviousdeliverynotetable tbody').on("blur", ".changeLocation", function(e){
	if(isNaN(parseInt( $(this).val() ))){

		//alert("Give Correct Input!!");
		$(this).parent("td").empty().text("");
	    $('#modifypreviousdeliverynotetable').removeClass("editing");

	}else{

	    var val = $(this).val();
	    $(this).parent("td").empty().text(parseInt(val));
	    $('#modifypreviousdeliverynotetable').removeClass("editing");
	}
});




////////////////////////////////////////////////////////////////////////////////end



$("#modifypreviousdeliverynotemodal #PreviousDeliveryNoteSaveBtn").on("click","",function(){



	var InvoicesId=$("#modifypreviousdeliverynotemodal").val();
	


	var PreviousDeliveryNoteDate=$("#modifypreviousdeliverynotemodal #PreviousDeliveryNoteDate").datepicker( "getDate" );
	PreviousDeliveryNoteDate=moment(PreviousDeliveryNoteDate).format("YYYY-MM-DD");

	var totalamount=totalcountfrommodifyarray();



	alert(InvoicesId+" "+PreviousDeliveryNoteDate+" ");


		$.ajax({
			url:"modify_previous_deliverynote_save",
			type:'POST',
			dataType: "json",
			//dataType: "Array",
			data:{

				"InvoicesId":InvoicesId,
				"totalamount":totalamount,
				"PreviousDeliveryNoteDate":PreviousDeliveryNoteDate,
				"P_D_N_array":P_D_N_array

			},
			success:function(response) {
					alert(JSON.stringify(response));

					if(response=="ok"){
						  toastr.success('Successfully added \n');
						  previousdeliverynotetable.ajax.reload();  

					}


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







function previousdeliverynotepdfcustomerinforequest(invoicedata,itemsdata){

	CustomersId=parseInt($("#tabs-1 #customeroption option:selected").attr("value"));
	//CustomersId=25;
	//alert(JSON.stringify(CustomersId));


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
				previousdeliverynotepdf(invoicedata,itemsdata,response);


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




function previousdeliverynotepdf(invoicedata,itemsdata,customersinfo){

		var deliverynotedate=$("#tabs-1 #deliverynotedate").datepicker( "getDate" );
		deliverynotedate=moment(deliverynotedate).format("YYYY-MM-DD");
		
		
		//alert(JSON.stringify(invoicedata));
		console.log(JSON.stringify(invoicedata));

		//alert(JSON.stringify(itemsdata));
		console.log(JSON.stringify(itemsdata));

		//alert(JSON.stringify(customersinfo));
		console.log(JSON.stringify(customersinfo));


//return;
		//alert(JSON.stringify(totalallamount));


				
//return;
	 var mapForm = document.createElement("form");
	   // mapForm.target = "Map";
	    mapForm.style = "display:none;";
	    mapForm.target = "Map";
	    mapForm.method = "GET"; // or "post" if appropriate
	    mapForm.action = "deleverynotepdf";
	    //mapForm.action = "http://localhost/appointment/wp-content/plugins/first-plugin/mpdf/my.php";

	    var mapInput = document.createElement("input");
	    mapInput.type = "text";
	    mapInput.name = "quantitylistarray";
	    mapInput.value = JSON.stringify(itemsdata, null, 2);;
	    mapForm.appendChild(mapInput);

	    var mapInput = document.createElement("input");
	    mapInput.type = "text";
	    mapInput.name = "customersinfo";
	    mapInput.value = JSON.stringify(customersinfo, null, 2);;
	    mapForm.appendChild(mapInput);



	    mapInput = document.createElement("input");
	    mapInput.type = "text";
	    mapInput.name = "deliverynotedate";
	    mapInput.value = invoicedata.InvoiceDate;
	    mapForm.appendChild(mapInput);

////////////////////////////////////////////////////////////////////

		document.body.appendChild(mapForm);

		    map = window.open("", "Map", "status=0,title=0,height=600,width=800,scrollbars=1", '_blank');

		if (map) {
		    mapForm.submit();
		} else {
		    alert('You must allow popups for this map to work.');
		}

}





function previousdeliverynotepdfiteminfo(data ){
		
		InvoicesId=data.InvoicesId;
		InvoicesDate=data.InvoiceDate;
		//alert(JSON.stringify(InvoicesDate));
		//alert(JSON.stringify(data));

		$.ajax({
			url:"previous_delivery_note_modify_info_show",
			type:'POST',
			dataType: "json",
			//dataType: "Array",
			data:{

				"InvoicesId":InvoicesId

			},
			success:function(response) {
					//alert(JSON.stringify(response));
					console.log	(JSON.stringify(response));
						
						//modifypreviousdeliverynotetable.clear().draw();
						//modifypreviousdeliverynotetable.rows.add( response ).draw();


						//P_D_N_array=response;
						P_D_N_array=[];


						for (var i = 0; i < response.length; i++) {


					

							P_D_N_array.push({
	              
	              
	              						ProductsId:response[i].ProductsId, 
	              						ProductName:response[i].ProductName, 
	              						Price:response[i].Price, 
	              						CustomersId:response[i].CustomersId,
	              						ItemId:response[i].ItemId,
	              						Quantity:response[i].Quantity,
	              						Extra:response[i].Extra,
	              						Damage:response[i].Damage,
	              						TotalAmount:response[i].itemTotal,
	              						
	              
	              						});
						}

						//console.log("ekhane dekho"+JSON.stringify(P_D_N_array));
						//alert(JSON.stringify(P_D_N_array));

						//$( "#modifypreviousdeliverynotemodal #PreviousDeliveryNoteTotal").text(totalcountfrommodifyarray());
						
						previousdeliverynotepdfcustomerinforequest(data,P_D_N_array);

					}

			})
			.done(
				function( response ) {

				    console.log(">>done<<");

				    //$("#modifypreviousdeliverynotemodal").modal("show");


				   
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




$("#previousdeliverynotepdfbtn").on("click","",function(){

 		//var data = previousdeliverynotetable.row( $(this).parents('tr') ).data();
        //console.log(JSON.stringify(data));
//customeridd=parseInt($("#tabs-2 #previousdeliverycustomeroption option:selected").attr("value"));
  	 var data=previousdeliverynotetable.rows('.selected').data()[0];

 	 if(data!=null){

		//alert("not null");


    $("#modifypreviousdeliverynotemodal #PreviousDeliveryNoteDate").val(data.InvoiceDate);
    $("#modifypreviousdeliverynotemodal").val(data.InvoicesId);
    
 	 //previousdeliverynotemodifyinfoshow( data.InvoicesId);

 	 	//alert( JSON.stringify(data) );

 	 	previousdeliverynotepdfiteminfo(data);


 	 }else if (data==null) {

 	 	alert("Select a row");
 	 }
    //$("#modifypreviousdeliverynotemodal #PreviousDeliveryNoteDate").val(data.InvoiceDate);
    //$("#modifypreviousdeliverynotemodal").val(data.InvoicesId);




});





});//end jQuery(document).ready(function($) {