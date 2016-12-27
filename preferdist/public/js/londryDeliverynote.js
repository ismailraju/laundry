




jQuery(document).ready(function($) {


var percent=20;
var percentMin=20;
var percentMax=20;


function totalcountfromarray(){
	var sum=0;

quantitylistarray.filter(function(el) {

	    sum=sum+parseFloat(el.TotalAmount);
	});

return parseFloat(sum).toFixed(2);

}




			//$("#tabs-1").hide();
			$("#tabs-2").hide();
			$("#tabs-3").hide();
			$("#tabs-4").hide();
			$("#tabs-5").hide();
			$("#tabs-6").hide();



	//$('#tabs-1 #deliverynotetable thead tr:eq(0) th:eq(6)').text("jso");






//var deliverynotetable;
//tableconfigure();
//function tableconfigure(CustomersId){


 var deliverynotetable=$('#deliverynotetable').DataTable({

			
			
	        "ajax": {

	        	//url:"productlist_predelivery_bycustomerid",
	        	url:"productlist_predelivery_bycustomerid",
				type:'POST',
				dataType: "json",
				//dataType: "Array",
				"dataSrc": "",
				data:{

					"mode":"restart"
				},
				/*success:function(response){

					alert(JSON.stringify(response));
					console.log(JSON.stringify(response));
				},*/
			
				

	        },
	        "columns": [

	            
	            { "data": "ProductName"},
	            { "data": "Price",
	             "mRender": $.fn.dataTable.render.number( ',', '.', 2, '£' ) ,
	            			"searchable": false,
			    			"orderable": false	
			    },
	            { //quantity
	            	"mRender": function (data, type, row) { 
	            				return '';
	            			},
	            			
	            						    
	            			"searchable": false,
			    			"orderable": false	
			    },
	            { 	//extra
	            	"mRender": function (data, type, row) { 
	            				return '';
	            			},
	            			
	            				    
	            			"searchable": false,
			    			"orderable": false	
			    },

	            { 	//damage
	            	"mRender": function (data, type, row) { 
	            				return '';
	            			},
	            					    
	            			"searchable": false,
			    			"orderable": false
	        	},
	        
	            { 	//total
	            	"mRender": function (data, type, row) { 
	            				return '';
	            			},
	            					    
	            			"searchable": false,
			    			"orderable": false
			    },
	            
	            {	//previous_delivery_date_1	
	            	 "data": "quantity1",
	            	 "mRender": function (data, type, row) { 
	            	 			/*if((data==null)||(data==0)){

	            	 				return '';
	            	 			}else{
	            	 				return data;
	            	 			}*/

	            	 			return ((data==null)||(data==0))?'': data;
	            				
	            			},
	            			
	            			    
	            			"searchable": false,
			    			"orderable": false	
	        	},
	        	

	            {	//previous_delivery_extra_1	  
	            	 "data": "extra1",
	            	 "mRender": function (data, type, row) { 
	            	  			return ((data==null)||(data==0))?'': data;
	            	  		},
	            			
	            			  
	            			"searchable": false,
			    			"orderable": false	
	        	},
	        	

	            {	//previous_delivery_damage_1 
	            	 "data": "damage1",
	            	 "mRender": function (data, type, row) { 
	            	  			return ((data==null)||(data==0))?'': data;
	            	  		},
	            			
	            			   
	            			"searchable": false,
			    			"orderable": false	
	        	},
	        	
	            
	            {	//previous_delivery_date_2	  
	            	 "data": "quantity2",
	            	 "mRender": function (data, type, row) { 
	            	  			return ((data==null)||(data==0))?'': data;
	            	  		},
	            			
	            			  
	            			"searchable": false,
			    			"orderable": false	
	        	},
	        	

	            {	//previous_delivery_extra_2	 
	            	 "data": "extra2",
	            	 "mRender": function (data, type, row) { 
	            	  			return ((data==null)||(data==0))?'': data;
	            	  		},
	            			
	            			   
	            			"searchable": false,
			    			"orderable": false	
	        	},
	        	

	            {	//previous_delivery_damage_2  
	            	 "data": "damage2",
	            	 "mRender": function (data, type, row) { 
	            	  			return ((data==null)||(data==0))?'': data;
	            	  		},
	            			
	            			  
	            			"searchable": false,
			    			"orderable": false	
	        	},
	        	
	            
	            {	//previous_delivery_date_3	 
	            	 "data": "quantity3",
	            	 "mRender": function (data, type, row) { 
	            	  			return ((data==null)||(data==0))?'': data;
	            	  		},
	            			
	            			   
	            			"searchable": false,
			    			"orderable": false	
	        	},
	        	

	            {	//previous_delivery_extra_3	
	            	 "data": "extra3",
	            	 "mRender": function (data, type, row) { 
	            	  			return ((data==null)||(data==0))?'': data;
	            	  		},
	            			
	            			    
	            			"searchable": false,
			    			"orderable": false	
	        	},
	        	

	            {	//previous_delivery_damage_3 
	            	 "data": "damage3",
	            	 "mRender": function (data, type, row) { 
	            	  			return ((data==null)||(data==0))?'': data;
	            	  		},
	            			
	            			   
	            			"searchable": false,
			    			"orderable": false	
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

	        autoWidth: false,
	        //pagingType: "full_numbers",//first ,last boutton add hoy
	        rowId: 'CustomersId',
	        //"bPaginate": false,
	        //"bFilter": false,
	        //"bInfo": false
	         
			"headerCallback": function( thead, data, start, end, display ) {

					if(data.length>0){
						//alert(">>>>>>."+JSON.stringify(data[0].day1));


						var date = new Date(data[0].day1);
						var dateformated1 = $.datepicker.formatDate('dd/mm/yy', date);


						date = new Date(data[0].day2);
						var dateformated2 = $.datepicker.formatDate('dd/mm/yy', date);


						date = new Date(data[0].day3);
						var dateformated3 = $.datepicker.formatDate('dd/mm/yy', date);

						 $(thead).find('th').eq(6).html( dateformated1 );
						 $(thead).find('th').eq(9).html( dateformated2 );
						 $(thead).find('th').eq(12).html( dateformated3 );

					/*	 $(thead).find('th').eq(6).html( data[0].day1 );
						 $(thead).find('th').eq(9).html( data[0].day2 );
						 $(thead).find('th').eq(12).html( data[0].day3 );*/

					}	

			   


			  },
	        "footerCallback": function ( row, data, start, end, display ) {
	            var api = this.api(), data;
	 
	           
        	},


	        
	        "initComplete": function(settings, json) {

	        							//alert(JSON.stringify(json));
										//console.log(JSON.stringify(json));


							}

	    } );







deliverynotetable.on( 'select', function ( e, dt, type, indexes ) {
            var rowData = deliverynotetable.rows( indexes ).data().toArray();
            //alert(JSON.stringify( rowData ));
           // alert( rowData[0].ItemId );
            //alert(JSON.stringify( stock_count_show(rowData[0].ItemId)  ));

            var stkavailable=stock_count_show(rowData[0].ItemId);


			$("#tabs-1 #stkItemName").html(rowData[0].ProductName);
			$("#tabs-1 #stkItemNumber").html(stkavailable);

           // events.prepend( '<div><b>'+type+' selection</b> - '+JSON.stringify( rowData )+'</div>' );
        } )
 		.on( 'deselect', function ( e, dt, type, indexes ) {
            var rowData = deliverynotetable.rows( indexes ).data().toArray();
             //alert(JSON.stringify( rowData ));
            $("#tabs-1 #stkItemName").html("");
			$("#tabs-1 #stkItemNumber").html("");
           // events.prepend( '<div><b>'+type+' <i>de</i>selection</b> - '+JSON.stringify( rowData )+'</div>' );
        } );









//}
 

function stock_count_show(ItemId){

   el= productstocklistarray.filter(function(el) {
    	
	    if((parseInt(el.ItemId) == parseInt(ItemId))){


	    	return true;
	    	
	    }
	    else{
	    	return false;
	    
	    }
	});

   //alert(JSON.stringify(el));

   if(el.length>0){
		el=el[0];
		var staytocust= ((parseInt(el.Quantity)+parseInt(el.Extra))-(parseInt(el.QuantityReturned)+parseInt(el.ExtraReturned)));
		stock_available=parseInt(el.InitialQty)-parseInt(staytocust)-parseInt(el.Damage);
		return stock_available;

   }else{

   	return 0;

   }



}

customerlist();
function customerlist(){


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

				customeridd=parseInt($("#tabs-1 #customeroption option:selected").attr("value"));
				//tableconfigure(customeridd);

				$("#tabs-1 #customeroption").select2();
				$("#tabs-2 #previousdeliverycustomeroption").select2();
				$("#tabs-4 #statementbycustomercustomeroption").select2();

				}

		})
		.done(
			function( response ) {

			    console.log(">>done<<");

			    if(response!=""){

				    customeridd=parseInt($("#tabs-1 #customeroption option:selected").attr("value"));
				    //alert(JSON.stringify(response));
					//productlistbycustomerid(customeridd);
					productlistandpredeliveryallbycustomerid(customeridd);
					productstocklistbycustomerid(customeridd);
					deliverydaybycustomerid(customeridd);
					pendingdeliverynote(customeridd);
					message_modal(customeridd);

					//previousdeliverynotelisttableconfigure(customeridd);



			    }


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


var quantitylistarray=[];


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

				deliverynotetable.clear().draw();
				deliverynotetable.rows.add( response ).draw();
				quantitylistarray=[];
				for (var i = 0; i < response.length; i++) {


					

					quantitylistarray.push({
	              
	              
	              						ProductsId:response[i].ProductsId, 
	              						ProductName:response[i].ProductName, 
	              						Price:response[i].Price, 
	              						CustomersId:response[i].CustomersId,
	              						ItemId:response[i].ItemId,
	              						Quantity:0 ,
	              						Extra:0 ,
	              						Damage:0 ,
	              						Discount:0 ,
	              						TotalAmount:0 
	              						
	              
	              						});
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


}

function productlistandpredeliveryallbycustomerid(CustomersId){


	$.ajax({
		url:"productlist_predelivery_bycustomerid",
		type:'POST',
		dataType: "json",
		//dataType: "Array",
		data:{

			"CustomersId":CustomersId,
			"mode":"chosecust"
		},
		success:function(response) {
				//alert(JSON.stringify(response));
				//console.log(JSON.stringify(response));

				deliverynotetable.clear().draw();
				deliverynotetable.rows.add( response ).draw();
				quantitylistarray=[];
				for (var i = 0; i < response.length; i++) {


					

					quantitylistarray.push({
	              
	              
	              						ProductsId:response[i].ProductsId, 
	              						ProductName:response[i].ProductName, 
	              						Price:response[i].Price, 
	              						CustomersId:response[i].CustomersId,
	              						ItemId:response[i].ItemId,
	              						Quantity:0 ,
	              						Extra:0 ,
	              						Damage:0 ,
	              						Discount:0 ,
	              						TotalAmount:0 
	              						
	              
	              						});
				}



			}

		})
		.done(
			function( response ) {

			    console.log(">>done<<");

			   // alert(JSON.stringify(quantitylistarray));
			   $('#deliverynotetotal').text("0");
			   $("#tabs-1 #stkItemName").html("");
			   $("#tabs-1 #stkItemNumber").html("");
			   $("#tabs-1 #customeroption").prop("disabled", true );

			   
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

var productstocklistarray=[];

function productstocklistbycustomerid(CustomersId){


	$.ajax({
		url:"productstocklistbycustomerid",
		type:'POST',
		dataType: "json",
		//dataType: "Array",
		data:{

			"CustomersId":CustomersId
		},
		success:function(response) {
				//alert(JSON.stringify(response));

				/*deliverynotetable.clear().draw();
				deliverynotetable.rows.add( response ).draw();*/
				productstocklistarray=[];
				for (var i = 0; i < response.length; i++) {


					

					productstocklistarray.push({
	              
	              
	              						ItemId:response[i].ItemId, 
	              						InitialQty:response[i].InitialQty, 
	              						Quantity:response[i].Quantity, 
	              						Extra:response[i].Extra,
	              						Damage:response[i].Damage,
	              						QuantityReturned:response[i].QuantityReturned,
	              						ExtraReturned:response[i].ExtraReturned

	              					});
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


}



var previousdeleverylistarray=[];

function previousdeleverylistbycustomerid(CustomersId){


	$.ajax({
		url:"previousdeleverylistbycustomerid",
		type:'POST',
		dataType: "json",
		//dataType: "Array",
		data:{

			"CustomersId":CustomersId
		},
		success:function(response) {
				alert(JSON.stringify(response));
				console.log(JSON.stringify(response));

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


}



function pendingdeliverynote(CustomersId){


	$.ajax({
		url:"pendingdeliverynotebycustomerid",
		type:'POST',
		dataType: "json",
		//dataType: "Array",
		data:{

			"CustomersId":CustomersId
		},
		success:function(response) {
				//alert(JSON.stringify(response));

				//alert( $.format.date( Date.parse( "2016-08-11") , 'dd MMM yy' ));
				//alert(  $.datepicker.formatDate("dd M yy", new Date("2016-08-11"))   );

				console.log(JSON.stringify(response));
				//alert(JSON.stringify(response));


				var strr="Missing Delivery\n";

				for (var i = response.length-1; i >=0 ; i--) {
					
					strr=strr+""+$.datepicker.formatDate("dd-M-yy", new Date(  response[i].PendingDate  )) +"\n";
	

					
				}


				$("#tabs-1 #missingdeliverytextarea").text(strr);

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


}





function deliverydaybycustomerid(CustomersId){


	$.ajax({
		url:"deliverydaybycustomerid",
		type:'POST',
		dataType: "json",
		//dataType: "Array",
		data:{

			"CustomersId":CustomersId
		},
		success:function(response) {
				//alert(JSON.stringify(response));
				//console.log(JSON.stringify(response));

				if(response.length>0){

					str="";

					var Weekdayindexs=response[0].Weekday;

					if(Weekdayindexs!=""){
						var Weekdayindx = Weekdayindexs.split("_");
						weekdaynamearray=["","Sat","Sun","Mon","Tue","Wed","Thu","Fri"];
						//alert(response[0].Weekday +"  "+JSON.stringify(Weekdayindx));

						for (var i = 0; i < Weekdayindx.length-1; i++) {
							//alert(  weekdaynamearray[ parseInt(Weekdayindx[i]) ]  );
							str=str+" "+weekdaynamearray[ parseInt(Weekdayindx[i]) ];
							
						}

					}

					$("#tabs-1 #weekdaynames").html(str);


				}else{

					$("#tabs-1 #weekdaynames").html("");
				}

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





    $( "#tabs-1 #deliverynotemsgdate" ).datepicker({
    	buttonImageOnly: true,
    	dateFormat: 'yy-mm-dd',
    	onSelect: function(dateText){
    			
        	
            }
    });


$('#deliverynotemsgdate').datepicker( "setDate",new Date());


    $( "#tabs-1 #deliverynotedate" ).datepicker({
    	buttonImageOnly: true,
    	dateFormat: 'yy-mm-dd',
    	onSelect: function(dateText){
    			
        	
            }
    });

	$('#deliverynotedate').datepicker( "setDate",new Date());








/*dblclick*/
	$('#deliverynotetable').on( 'click', 'tbody td:nth-child(3),tbody td:nth-child(4),tbody td:nth-child(5)', function (e) {
	//$('#deliverynotetable').on( 'dblclick', 'tbody td:not(:first-child,:last-child)', function (e) {




    if(!$('#deliverynotetable').hasClass("editing")){
        $('#deliverynotetable').addClass("editing");
                console.log(this);
                
 				var data = deliverynotetable.row( $(this).parents('tr') ).data();
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

var clm_total=5;

$('#deliverynotetable tbody').on("change", ".changeLocation", function(){

	var data = deliverynotetable.row( $(this).parents('tr') ).data();
	//alert(JSON.stringify(data));
	console.log(JSON.stringify(data));
	//alert(JSON.stringify(data.quantity1));

	//alert(parseInt($(this).val()));

	if(isNaN(parseInt( $(this).val() ))){

		//alert("Give Correct Input!!");
		toastr.error("Give Correct Input!!");
		//$(this).parent("td").empty().text("");
		$(this).parent("td").removeClass("red").removeClass("green").empty().text("");
	    $('#deliverynotetable').removeClass("editing");

	}else{



    var val = parseInt($(this).val());
    var clm = parseInt($(this).attr("column"));
    var row = parseInt($(this).attr("row"));
    var ProductsId = parseInt($(this).attr("ProductsId"));


   // alert(ProductsId+" clm:"+clm+" row:"+row+" "+val);



    var total=0;
if(val>-1){
    if(clm==2){

    quantitylistarray=quantitylistarray.filter(function(el) {
    	
	    if((parseInt(el.ProductsId) == parseInt(data.ProductsId))){

	    	el.Quantity=val;


	    	total=parseFloat(((el.Quantity+el.Extra))*(el.Price)).toFixed(2);
	    	el.TotalAmount=total;
	    	
	    	return true;
	    }
	    else{
	    	
	    	return true;
	    }
	});

	$( "#deliverynotetable tbody tr:nth-child("+(row+1)+") td:nth-child("+(clm_total+1)+")" ).text( "£"+total );


	if (	parseFloat(val)	<=	parseFloat( ((data.quantity1)*percentMin)/100  )	) {
		//alert("min");
		
		$(this).parent("td").removeClass("green").addClass("red").empty().text(parseInt(val));

	}else if(	parseFloat(val)	>=	parseFloat( ( ((data.quantity1)*percentMax)/100 )+parseFloat(data.quantity1) )	) {
		//alert("max");
		
		$(this).parent("td").removeClass("red").addClass("green").empty().text(parseInt(val));
	}else{
		//alert("mid");
		$(this).parent("td").removeClass("red").removeClass("green").empty().text(parseInt(val));

	}

    $('#deliverynotetable').removeClass("editing");
    $('#deliverynotetotal').text(totalcountfromarray());

    }

    if(clm==3){

    quantitylistarray=quantitylistarray.filter(function(el) {

	    if((parseInt(el.ProductsId) == parseInt(data.ProductsId))){

	    	el.Extra=val;
	    	total=parseFloat(((el.Quantity+el.Extra))*(el.Price)).toFixed(2);
	    	el.TotalAmount=total;
	    	return true;
	    }
	    else{
	    	
	    	return true;
	    }
	});

	$( "#deliverynotetable tbody tr:nth-child("+(row+1)+") td:nth-child("+(clm_total+1)+")" ).text( "£"+total );




	$(this).parent("td").empty().text(parseInt(val));
    $('#deliverynotetable').removeClass("editing");
    $('#deliverynotetotal').text(totalcountfromarray());
    }


    if(clm==4){

    quantitylistarray=quantitylistarray.filter(function(el) {

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
    $('#deliverynotetable').removeClass("editing");
    $('#deliverynotetotal').text(totalcountfromarray());

}
    //$( "#deliverynotetable tbody tr:nth-child("+(row+1)+") td:nth-child("+(clm_total+1)+")" ).text( total );
    // alert('change');

    //updatecatagorylisttable(ItemCategoryId,clm,val);


  //  data.quantity1

    //$(this).parent("td").empty().text(parseInt(val));
   // $('#deliverynotetable').removeClass("editing");
   // $('#deliverynotetotal').text(totalcountfromarray());

}

});





$('#deliverynotetable tbody').on("keydown", ".changeLocation", function(e){
	if(e.keyCode == 13){
       // alert('keydown');
	if(isNaN(parseInt( $(this).val() ))){

		//alert("Give Correct Input!!");
		$(this).parent("td").empty().text("");
	    $('#deliverynotetable').removeClass("editing");

	}else{
	   
	    var val = $(this).val();
	    $(this).parent("td").empty().text(parseInt(val));
	    $('#deliverynotetable').removeClass("editing");
	}

     }
});


$('#deliverynotetable tbody').on("blur", ".changeLocation", function(e){
	if(isNaN(parseInt( $(this).val() ))){

		//alert("Give Correct Input!!");
		$(this).parent("td").empty().text("");
	    $('#deliverynotetable').removeClass("editing");

	}else{

	    var val = $(this).val();
	    $(this).parent("td").empty().text(parseInt(val));
	    $('#deliverynotetable').removeClass("editing");
	}
});








$(document).on("click", "#deliverynotesavebtn", function(){


		var deliverynotedate=$("#tabs-1 #deliverynotedate").datepicker( "getDate" );
		deliverynotedate=moment(deliverynotedate).format("YYYY-MM-DD");
		var totalallamount=totalcountfromarray();
		
		//alert(JSON.stringify(quantitylistarray));
		console.log(JSON.stringify(quantitylistarray));
		//alert(JSON.stringify(totalallamount));

		var sum=0;
		for (var i = quantitylistarray.length - 1; i >= 0; i--) {
			sum=sum+quantitylistarray[i].Quantity;
			sum=sum+quantitylistarray[i].Extra;
			sum=sum+quantitylistarray[i].Damage;
		}

//alert(JSON.stringify(quantitylistarray));
//alert(JSON.stringify(sum));
		//sum=-5;

		if(sum<=0){

			//alert("Give Input!!");
			toastr.error("Give Input!!");

		}else{

				$.ajax({
					url:"delivery_note_save",
					type:'POST',
					///dataType: "json",
					//dataType: "Array",
					data:{

						"quantitylistarray":quantitylistarray,
						"deliverynotedate":deliverynotedate,
						"totalallamount":totalallamount
					},
					success:function(response) {
							alert(JSON.stringify(response));


							toastr.success("Successfully added");

							}

					})
					.done(
						function( response ) {

						    console.log(">>done<<");
						    var invoiceID=response;

						    //alert(JSON.stringify(quantitylistarray));

						    customeridd=parseInt($("#tabs-1 #customeroption option:selected").attr("value"));
						    //deliverynotepdfcustomerinforequest();
						    deliverynotepdf(customeridd,invoiceID);
							//productlistbycustomerid(customeridd);
							productlistandpredeliveryallbycustomerid(customeridd);
							productstocklistbycustomerid(customeridd);
							deliverydaybycustomerid(customeridd);
							pendingdeliverynote(customeridd);
							//message_modal(customeridd);
							deliverynotemsgmodalupdate(customeridd);

							//$('#deliverynotetotal').text("0");


						   
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




/*	*/



});



$(document).on("click", "#deliverynoteselectbtn", function(){

	   
		customeridd=parseInt($("#tabs-1 #customeroption option:selected").attr("value"));

		//productlistbycustomerid(customeridd);
		productlistandpredeliveryallbycustomerid(customeridd);
		productstocklistbycustomerid(customeridd);
		deliverydaybycustomerid(customeridd);
		pendingdeliverynote(customeridd);
		//message_modal(customeridd);
		deliverynotemsgmodalupdate(customeridd);

		//$("#tabs-1 #customeroption").prop("disabled", true );
		//$('#tabs-1 #customeroption').select2("enable",false);

});



$(document).on("click", "#tabs-1  #createNewBtn", function(){


		$('#tabs-1 #customeroption').prop("disabled", false);
		//$('#tabs-1 #customeroption').select2("enable",true);

		deliverynotetable.clear().draw();
		$('#deliverynotetotal').text("0");

});



$(document).on("click", "#deliverynotemessagesbtn", function(){



customeridd=parseInt($("#tabs-1 #customeroption option:selected").attr("value"));
//deliverydaybycustomerid(customeridd);
//previousdeleverylistbycustomerid(customeridd);
//productlistandpredeliveryallbycustomerid(customeridd);

//pendingdeliverynote(customeridd);

$("#deliverynotemsgmodal").modal("show");
 deliverynotemsgmodalupdate(customeridd);


});



$(document).on("click", "#deliverynoteprintbtn", function(){

	   
	//alert(JSON.stringify(quantitylistarray));
	//console.log(JSON.stringify(quantitylistarray));	

//deliverynotepdfcustomerinforequest();

//CustomersId=parseInt($("#tabs-1 #customeroption option:selected").attr("value"));
//alert(JSON.stringify(CustomersId));
//deliverynotepdf(CustomersId);






});






function deliverynotepdfcustomerinforequest(){

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
				alert(JSON.stringify(response));
				deliverynotepdf(response);


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




function deliverynotepdf(CustomersId,InvoiceId){
	alert(JSON.stringify(CustomersId));
	alert(JSON.stringify(InvoiceId));

		var deliverynotedate=$("#tabs-1 #deliverynotedate").datepicker( "getDate" );
		deliverynotedate=moment(deliverynotedate).format("YYYY-MM-DD");
		var totalallamount=totalcountfromarray();
		
		//alert(JSON.stringify(quantitylistarray));
		//console.log(JSON.stringify(quantitylistarray));
		//alert(JSON.stringify(totalallamount));

		var sum=0;
		for (var i = quantitylistarray.length - 1; i >= 0; i--) {
			sum=sum+quantitylistarray[i].Quantity;
			sum=sum+quantitylistarray[i].Extra;
			sum=sum+quantitylistarray[i].Damage;
		}
		//alert(JSON.stringify(CustomersId));	
//return;
	 var mapForm = document.createElement("form");
	   // mapForm.target = "Map";
	   	mapForm.class = "deleteKorteHobe";
	   	mapForm.type = "hidden";
	    mapForm.target = "Map";
	    //mapForm.method = "GET"; // or "post" if appropriate
	    mapForm.method = "GET"; // or "post" if appropriate
	    mapForm.action = "deleverynotepdf";
	    //mapForm.action = "http://localhost/appointment/wp-content/plugins/first-plugin/mpdf/my.php";

	    /*var mapInput = document.createElement("input");
	    mapInput.type = "text";
	    mapInput.name = "quantitylistarray";
	    mapInput.value = JSON.stringify(quantitylistarray, null, 2);;
	    mapForm.appendChild(mapInput);
*/
	    var mapInput = document.createElement("input");
	    mapInput.type = "text";
	    mapInput.name = "CustomersId";
	    mapInput.value = CustomersId;
	    mapForm.appendChild(mapInput);

	    var mapInput = document.createElement("input");
	    mapInput.type = "text";
	    mapInput.name = "InvoiceId";
	    mapInput.value = InvoiceId;
	    mapForm.appendChild(mapInput);



	    mapInput = document.createElement("input");
	    mapInput.type = "text";
	    mapInput.name = "deliverynotedate";
	    mapInput.value = deliverynotedate;
	    mapForm.appendChild(mapInput);

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










////////////////////////////////////////message modal/////////////////////////////////////////////////////


$("#deliverynotemsgmodal").on("hidden.bs.modal",function (e) { 

		//$("#newcustomermodal").modal("show");
	    //$("#customerMastermodal").modal("show");

	});


$("#deliverynotemsgmodal").on("shown.bs.modal",function (e) { 

		deliverynotemsgtable.ajax.reload(); 
		$("#deliverynotemsgmodal #deliverynotemsgtextarea").attr("disabled",true); 

	});



var deliverynotemsgtable;
function message_modal(CustomersId){

 	deliverynotemsgtable=$('#deliverynotemsgmodal #deliverynotemsgtable').DataTable({

			
			
	        "ajax": {

	        	//url:"productlist_predelivery_bycustomerid",
	        	url:"customer_message_bycustomerid",
				type:'POST',
				dataType: "json",
				//dataType: "Array",
				"dataSrc": "",
				data:{

					"CustomersId":CustomersId
				},
			/*	success:function(response){

					alert(JSON.stringify(response));
					console.log(JSON.stringify(response));
				},*/
			
				

	        },
	        "columns": [

	            
	            { "data": "MessageDate"},
	            { "data": "Message",
	            			"searchable": false,
			    			"orderable": false	
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
	       // scrollX: 800,
	       // scrollY: 350,
	        //scrollCollapse: true,
	        //scroller: true,

	        autoWidth: true,
	        //pagingType: "full_numbers",//first ,last boutton add hoy
	        rowId: 'CustomersId',
	        //"bPaginate": false,
	        //"bFilter": false,
	        //"bInfo": false
	      

	        
	        "initComplete": function(settings, json) {

	        							//alert(JSON.stringify(json));
										//console.log(JSON.stringify(json));

										var flag=false;

										currentstamptime=parseInt((new Date()).getTime());

										for (var i = 0; i < json.length; i++) {

											var stamptime=new Date(  json[i].MessageDate +" 00:00:00" );
											stamptime=parseInt(stamptime.getTime());

											var next7day=parseInt(stamptime+ (7*86400000) ) ;

											
											//alert((stamptime/p)+"  "+(currentstamptime/p)+"  "+(next7day/p));
				//alert(	(new Date(stamptime))+"  "+(new Date(currentstamptime))+"  "+(new Date(next7day)) );
											//console.log((stamptime/p)+"  "+(currentstamptime/p)+"  "+(next7day/p));


											if( (stamptime<=currentstamptime ) && (currentstamptime <=next7day ) ){
												flag=true;
											}


											//alert(JSON.stringify(flag ));
										}


										if(flag){

											$("#deliverynotemsgmodal").modal("show");
										}



							}

	    } );






}



function deliverynotemsgmodalupdate(CustomersId){


$.ajax({
			url:"customer_message_bycustomerid",
			type:'POST',
			dataType: "json",
			//dataType: "Array",
			data:{

				"CustomersId":CustomersId
			},
			success:function(response) {
					//alert(JSON.stringify(response));
						json=response;


						var flag=false;

						currentstamptime=parseInt((new Date()).getTime());

						for (var i = 0; i < json.length; i++) {

							var stamptime=new Date(  json[i].MessageDate +" 00:00:00" );
							stamptime=parseInt(stamptime.getTime());

							var next7day=parseInt(stamptime+ (7*86400000) ) ;



							if( (stamptime<=currentstamptime ) && (currentstamptime <=next7day ) ){
								flag=true;
							}


						}


						if(flag){

							$("#deliverynotemsgmodal").modal("show");
						}



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


$("#deliverynotemsgmodal #deliverynotemsgnewmsgbtn").on("click","",function(){

	$("#deliverynotemsgmodal #deliverynotemsgtextarea").attr("disabled",false); 


});






$("#deliverynotemsgmodal #deliverynotemsgsavebtn").on("click","",function(){

	customeridd=parseInt($("#tabs-1 #customeroption option:selected").attr("value"));

	var deliverynotemsgdate=$("#deliverynotemsgmodal #deliverynotemsgdate").datepicker( "getDate" );
	deliverynotemsgdate=moment(deliverynotemsgdate).format("YYYY-MM-DD");

	var Message=$("#deliverynotemsgmodal #deliverynotemsgtextarea").val();

	//alert(customeridd+" "+deliverynotemsgdate+" "+Message);


		$.ajax({
			url:"delivery_note_msg_save",
			type:'POST',
			dataType: "json",
			//dataType: "Array",
			data:{

				"CustomersId":customeridd,
				"MessageDate":deliverynotemsgdate,
				"Message":Message
			},
			success:function(response) {
					//alert(JSON.stringify(response));

					if(response=="ok"){
						  toastr.success('Successfully added \n');
						  deliverynotemsgtable.ajax.reload();  

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









$('#deliverynotetable').on('keydown', 'input.changeLocation', function(e) {

	     // alert( e.keyCode);
	    var self = $(this)
	      , form = self.parents('form:eq(0)')
	      , focusable
	      , next
	      ;



	var rowCount = $('#deliverynotetable tbody tr').length;


     var present_clm= $(this).parent("td").index();
     var present_row = $(this).parent("td").parent("tr").index();


//alert( present_row+"   "+rowCount);

    //if(!$('#deliverynotetable').hasClass("editing")){



    if (e.which == 13||e.keyCode == 13||e.keyCode==40) { //down


	    var next_clm= present_clm;
	    var next_row =present_row+1;




        //$('#deliverynotetable').addClass("editing");
           if(next_row>rowCount-1){

	    }else{



			var data = deliverynotetable.row( $(this).parents('tr') ).data();

			var nextdata = deliverynotetable.row( $('#deliverynotetable tbody').find("tr:nth-child("+(next_row+1)+")"+" td:nth-child("+next_clm+")").parents('tr')  ).data();
			//alert( JSON.stringify(  nextdata  ));


	       	var nextLocation = $('#deliverynotetable tbody').find("tr:nth-child("+next_row+")"+" td:nth-child("+next_clm+")");
	         nextLocation = $('#deliverynotetable tbody tr').eq(next_row).find('td').eq(next_clm);

	        var nextLocationText = nextLocation.text();


	        nextLocation.empty().append($("<input>",{
	         		"type":"number",
	         		"min":0,
		            "id":"Location_" + nextdata.ProductsId, 
		            "class":"changeLocation inputsizecls",
		            "value":nextLocationText,
		            "row":next_row,
		            "column":next_clm,
		            "ProductsId":nextdata.ProductsId,
		            "Price":nextdata.Price,
		        }));




		   $(".changeLocation" ).focus();




	    }



/*        focusable = form.find('input,select,textarea').filter(':not(:disabled)');
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
        return false;*/



    }



    if (e.keyCode==38) {  //up



    	var next_clm= present_clm;
	    var next_row =present_row-1;

	    if(next_row<0){

	   }else{



			var data = deliverynotetable.row( $(this).parents('tr') ).data();

			var nextdata = deliverynotetable.row( $('#deliverynotetable tbody').find("tr:nth-child("+( next_row+1 )+")"+" td:nth-child("+next_clm+")").parents('tr')  ).data();
			//alert( JSON.stringify(  nextdata  ));


	       	var nextLocation = $('#deliverynotetable tbody').find("tr:nth-child("+next_row+")"+" td:nth-child("+next_clm+")");
	         nextLocation = $('#deliverynotetable tbody tr').eq(next_row).find('td').eq(next_clm);

	        var nextLocationText = nextLocation.text();


	        nextLocation.empty().append($("<input>",{
	         		"type":"number",
	         		"min":0,
		            "id":"Location_" + nextdata.ProductsId, 
		            "class":"changeLocation inputsizecls",
		            "value":nextLocationText,
		            "row":next_row,
		            "column":next_clm,
		            "ProductsId":nextdata.ProductsId,
		            "Price":nextdata.Price,
		        }));




		   $(".changeLocation" ).focus();




	    }



/*        focusable = form.find('input,select,textarea').filter(':not(:disabled)');
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
        return false;*/
    }


    if (e.keyCode==39) {  //right

  		var next_clm= present_clm+1;
	    var next_row =present_row;



	    if(next_clm>4){

	    }else{



			var data = deliverynotetable.row( $(this).parents('tr') ).data();

			var nextdata = deliverynotetable.row( $('#deliverynotetable tbody').find("tr:nth-child("+(next_row+1)+")"+" td:nth-child("+next_clm+")").parents('tr')  ).data();
			//alert( JSON.stringify(  nextdata  ));


	       	var nextLocation = $('#deliverynotetable tbody').find("tr:nth-child("+next_row+")"+" td:nth-child("+next_clm+")");
	         nextLocation = $('#deliverynotetable tbody tr').eq(next_row).find('td').eq(next_clm);

	        var nextLocationText = nextLocation.text();


	        nextLocation.empty().append($("<input>",{
	         		"type":"number",
	         		"min":0,
		            "id":"Location_" + nextdata.ProductsId, 
		            "class":"changeLocation inputsizecls",
		            "value":nextLocationText,
		            "row":next_row,
		            "column":next_clm,
		            "ProductsId":nextdata.ProductsId,
		            "Price":nextdata.Price,
		        }));




		   $(".changeLocation" ).focus();




	    }



    }


    if (e.keyCode==37) {  //left

		var next_clm= present_clm-1;
	    var next_row =present_row;




	    if(next_clm<2){

	    }else{



			var data = deliverynotetable.row( $(this).parents('tr') ).data();

			var nextdata = deliverynotetable.row( $('#deliverynotetable tbody').find("tr:nth-child("+(next_row+1)+")"+" td:nth-child("+next_clm+")").parents('tr')  ).data();
			//alert( JSON.stringify(  nextdata  ));


	       	var nextLocation = $('#deliverynotetable tbody').find("tr:nth-child("+next_row+")"+" td:nth-child("+next_clm+")");
	         nextLocation = $('#deliverynotetable tbody tr').eq(next_row).find('td').eq(next_clm);

	        var nextLocationText = nextLocation.text();


	        nextLocation.empty().append($("<input>",{
	         		"type":"number",
	         		"min":0,
		            "id":"Location_" + nextdata.ProductsId, 
		            "class":"changeLocation inputsizecls",
		            "value":nextLocationText,
		            "row":next_row,
		            "column":next_clm,
		            "ProductsId":nextdata.ProductsId,
		            "Price":nextdata.Price,
		        }));




		   $(".changeLocation" ).focus();




	    }


    }











});










});