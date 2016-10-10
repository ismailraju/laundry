
jQuery(document).ready(function($) {


	//suppliersOption();


/////////////////////////////////new supplier  modal end/////////////////


$(document).on( "click","#newsuppliermodal  #NewSupplierSaveButton",function() {
	//alert($("#newsupplierform").serialize());
	//console.log($("#newsupplierform").serialize());


    var dataa= $("#newsupplierform").serialize();


				
	var SupplierId=$("#newsuppliermodal").attr("SupplierId");

    $.ajax({
           type: "POST",
           url: "addnewsupplier",
           data: {"action": "addnewsupplier","formdatas":dataa,"SupplierId":SupplierId}, // serializes the form's elements.
           success: function(data)
           {
           		if(SupplierId<0){
              	 	toastr.success('Successfully added \n');
           		}else{
           			toastr.success('Successfully modify \n');
           		}

               $("#newsuppliermodal").modal("hide"); 
           }
         });



});


// Setup - add a text input to each footer cell
$('#supplierlisttable tfoot tr th').each( function () {
    var title = $(this).text();
    $(this).html( '<input type="text" class="form-control supplier_search" placeholder="'+title+'" />' );

} );


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

	        	url:"supplierlisttable",
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
           url: "deletesupplierlist",
           data: {"action": "deletesupplierlisttable",
		           "SupplierId":SupplierId,

		           }, // serializes the form's elements.
           success: function(data)
           {
               
               toastr.success('Successfully deleted \n');
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






/////live count/////

$(document).on("change","#newpurchasemastermodal #Qty,#newpurchasemastermodal #PurchasePrice,#newpurchasemastermodal #Discount",function(){

	var Qty=$("#Qty").val();
	var PurchasePrice=$("#PurchasePrice").val();
	var Discount=$("#Discount").val();


	//alert("keyup"+Qty+PurchasePrice+Discount);

	if(Qty==""){$("#Qty").val(0);	}
	if(PurchasePrice==""){$("#PurchasePrice").val(0);	}
	if(Discount==""){$("#Discount").val(0);	}




	Qty= parseFloat($("#Qty").val());
	PurchasePrice= parseFloat($("#PurchasePrice").val());
	Discount= parseFloat($("#Discount").val());

	//alert("keyup afeter parsef"+Qty+PurchasePrice+Discount);

	var amount=(Qty*PurchasePrice)-Discount;
	$("#Amount").attr("value",amount);	

});




var purchaseitemsarray=[];


function totalamount(){
	
	var sum=0;

	for (var i = 0; i < purchaseitemsarray.length; i++) {
		sum=sum+purchaseitemsarray[i].Amount
	}

	//alert(purchaseitemsarray.length+" "+sum);
	return sum;

}
var indexx=0;
$(document).on("click","#newpurchasemastermodal #add",function(){

	indexx=indexx+1;

	//var dataa= $("#purchasemasterform").serialize();
	var SupplierId= $("#purchasemasterform #SupplierId").val();
	var SupplierName= $("#purchasemasterform #SupplierId option:selected").attr("suppliername");

	var ItemId= $("#purchasemasterform #ItemId").val();
	var ItemName= $("#purchasemasterform #ItemId option:selected").text();

	var Qty= $("#purchasemasterform #Qty").val();
	var PurchasePrice= $("#purchasemasterform #PurchasePrice").val();
	var Discount= $("#purchasemasterform #Discount").val();
	var Amount= $("#purchasemasterform #Amount").val();


// alert(SupplierId+SupplierName+ItemId+ItemName+Qty+PurchasePrice+Discount+Amount);
	//var PurchaseId=$("#PurchaseId").val();


		purchaseitemsarray.push({

			Id:indexx, 
			ItemId:ItemId, 
			ItemName:ItemName, 
			SupplierId:SupplierId,
			SupplierName:SupplierName,
			Qty:parseFloat(Qty) ,
			PurchaseUnitPrice:parseFloat(PurchasePrice),
			Discount:parseFloat(Discount),
			Amount:parseFloat(Amount),
			Delivered:"no",
			ActualDeliveryDate:"",
			Editable:"no"

			});
		//alert(JSON.stringify(purchaseitemsarray));
		console.log(JSON.stringify(purchaseitemsarray));
		//var r=JSON.parse(purchaseitemsarray);
		console.log(purchaseitemsarray);
		purchaselisttable.clear().draw();

		purchaselisttable.rows.add( purchaseitemsarray ).draw();
		//purchaselisttable.ajax.reload();


		var  totalamount_=totalamount();
		$("#purchasemasterform #total_amount").text(totalamount_);


		var ShippingCost=$("#purchasemasterform #ShippingCost").val();
		if(ShippingCost==""||ShippingCost==0){

			ShippingCost=0;

		}else{

			ShippingCost=parseFloat(ShippingCost);
		}
		var rate= parseFloat($("#purchasemasterform #SupplierId option:selected").attr("rate"));
		var netamount=totalamount_+((totalamount_*rate)/100)+ShippingCost;

		$("#purchasemasterform #netamount").text(netamount);


});


$(document).on("change","#newpurchasemastermodal #ShippingCost",function(){


		var  totalamount_=totalamount();
		//$("#purchasemasterform #total_amount").text(totalamount_);


		var ShippingCost=$("#purchasemasterform #ShippingCost").val();
		if(ShippingCost==""||ShippingCost==0){

			ShippingCost=0;

		}else{

			ShippingCost=parseFloat(ShippingCost);
		}


		var rate= parseFloat($("#purchasemasterform #SupplierId option:selected").attr("rate"));
		var netamount=totalamount_+((totalamount_*rate)/100)+ShippingCost;


		//alert(totalamount_+" "+ShippingCost+" "+rate+" "+ShippingCost+" "+netamount);
		$("#purchasemasterform #netamount").text(netamount);

});

$(document).on("click","#newpurchasemastermodal #purchaseitemsSaveBtn",function(){

	//var dataa= $("#purchasemasterform").serialize();

	var SupplierId= $("#purchasemasterform #SupplierId").val();
	var PurchaseDetailNote= $("#PurchaseDetailNote").val();

	//alert(PurchaseDetailNote);
	var PurchaseId=$("#newpurchasemastermodal #PurchaseId").val();

	var PurchaseDate=$("#newpurchasemastermodal #PurchaseDate").datepicker( "getDate" );
	PurchaseDate=moment(PurchaseDate).format("YYYY-MM-DD");

	var EstimateDeliveryDate=$("#newpurchasemastermodal #EstimateDeliveryDate").datepicker( "getDate" );
	EstimateDeliveryDate=moment(EstimateDeliveryDate).format("YYYY-MM-DD");

	var ShippingCost=$("#purchasemasterform #ShippingCost").val();
	if(ShippingCost==""||ShippingCost==0){

		ShippingCost=0;

	}else{

		ShippingCost=parseFloat(ShippingCost);
	}

	var  totalamount_=totalamount();

	var rate= parseFloat($("#purchasemasterform #SupplierId option:selected").attr("rate"));

	var amountwithtax=totalamount_+((totalamount_*rate)/100);
	var netamount=totalamount_+((totalamount_*rate)/100)+ShippingCost;


	//alert(PurchaseId+" "+PurchaseDate+" "+EstimateDeliveryDate+" "+ShippingCost+" "+totalamount_+" "+rate+" "+netamount);
	if(purchaseitemsarray.length>0){
		$.ajax({
	           type: "POST",
	           url: "addpurchaseobject",
	           dataType: "json",
			   dataSrc: "",
	           data: {
			           'PurchaseId':PurchaseId,
			           'SupplierId':SupplierId,
			           'PurchaseDate':PurchaseDate,
			           'EstimateDeliveryDate':EstimateDeliveryDate,
			           'ShippingCost':ShippingCost,
			           'amountwithtax':amountwithtax,
			           'totalamount':totalamount,
			           'rate':rate,
			           'netamount':netamount,
			           'Delivered':"no",
			           'purchaseitemsarray':purchaseitemsarray,
			           'PurchaseDetailNote':PurchaseDetailNote,
			           //'ActualDeliveryDate':ActualDeliveryDate,
	
			           }, // serializes the form's elements.
	           success: function(data)
	           {
	              // alert(JSON.stringify(data));
	            if(data=="equal"){
              	 	toastr.success('Successfully Updated \n');
           		}else if (data=="notequal") {
           			toastr.success('Successfully added \n');
           		}
           		else{
           			toastr.success('Successfully Not Updated \n');
           		}
	               
	            
	
	           }
	         })
	    .done(function(response){
	
	    	
	
	    });
	}else{
		alert("Take Atleast One Item");
	}
});


////////////

$("#newpurchasemastermodal").on("show.bs.modal",function (e) { 


		nextpurchaseno();
		suppliersOption();
		itemsOption();

	 	/*$("#newpurchasemastermodal #PurchaseIdsearch").val("");
	 	
	 	$("#newpurchasemastermodal #PurchaseDetailNote").val("");
	 	$("#newpurchasemastermodal #Qty").val("0");
	 	$("#newpurchasemastermodal #PurchasePrice").val("0");
	 	$("#newpurchasemastermodal #Discount").val("0");
	 	$("#newpurchasemastermodal #Amount").val("0");



		$("#newpurchasemastermodal #total_amount").text("0");
		$("#newpurchasemastermodal #VATVALUE").text("0");
		$("#newpurchasemastermodal #ShippingCost").val("0");
		$("#newpurchasemastermodal #netamount").text("0");*/


	});
$("#newpurchasemastermodal").on("shown.bs.modal",function (e) { 

		//purchaselisttable.ajax.reload();  
		//nextpurchaseno();
		$('#PurchaseDate').datepicker( "setDate",new Date());
		$('#EstimateDeliveryDate').datepicker( "setDate",new Date());
		$('#ShippingCost').val(0);

		$('#ActualDeliveryDate').attr("disabled",true);
		$('#Delivered').attr("disabled",true);

		purchaseitemsarray=[];
		purchaselisttable.clear().draw();
		purchaselisttable.rows.add( purchaseitemsarray ).draw();





	});

var purchaselisttable=$('#newpurchasemastermodal #purchaselisttable').DataTable({


			data: purchaseitemsarray,
		
		
			columns: [


	            { data: 'ItemName'},
	            { data: 'SupplierName'},
	            { data: 'Qty'},
	            { data: 'PurchaseUnitPrice'},
	            { data: 'Discount'},
	            { data: 'Amount'},
	            { data: 'Delivered',"render": function ( data, type, full, meta ) {
							      if(data=="no"){
							      	return '<input disabled  class="" type="checkbox" >';
							      }else if (data=="yes") {
							      	return '<input disabled class="" checked type="checkbox" >';
							      }
						    }},
				{ data: 'ActualDeliveryDate'},
	            {data:'Editable',"mRender": function (data, type, row) { 

	            		if(data=="yes"){
				            	return '<div class="btn-group btn-group-xs" role="group" aria-label="...">'+
					            			
					            			'<a class="delete_purchase_item btn btn-primary btn-xs" '+' value='+row.ItemId +'>'+'Delete' + '</a>'+
					            			'<a class="edit_purchase_item btn btn-primary btn-xs" '+' value='+row.ItemId +'>'+'Edit' + '</a>'+
				            			'</div>';
	            			}else if(data=="no"){
				            	return '<div class="btn-group btn-group-xs" role="group" aria-label="...">'+
					            			
					            			'<a class="delete_purchase_item btn btn-primary btn-xs" '+' value='+row.ItemId +'>'+'Delete' + '</a>'+
					            			
				            			'</div>';
	            			}


	            			},			    
	            			"searchable": false,
			    			"orderable": false	
	        	}
	          
	        	
	           
	        ],
	        dom: 'rtl',
	        select: true,

	        scrollX: 400,
	        scrollY: 200,

	        scroller: true

	    });






$(document).on("click",".delete_purchase_item",function(){

	var data = purchaselisttable.row( $(this).parents('tr') ).data();

	alert(JSON.stringify(data));
	alert(data.ItemName);
	console.log(JSON.stringify(data));

	var purchaseitemsarray1 = purchaseitemsarray.filter(function(el) {
	    return ((el.Id !== data.Id));
	});
	purchaseitemsarray=purchaseitemsarray1;

	alert(JSON.stringify(purchaseitemsarray));
	purchaselisttable.clear().draw();

	purchaselisttable.rows.add( purchaseitemsarray ).draw();


	var  totalamount_=totalamount();
	$("#purchasemasterform #total_amount").text(totalamount_);


	var ShippingCost=$("#purchasemasterform #ShippingCost").val();
	if(ShippingCost==""||ShippingCost==0){

		ShippingCost=0;

	}else{

		ShippingCost=parseFloat(ShippingCost);
	}


	var rate= parseFloat($("#purchasemasterform #SupplierId option:selected").attr("rate"));
	var netamount=totalamount_+((totalamount_*rate)/100)+ShippingCost;


	//alert(totalamount_+" "+ShippingCost+" "+rate+" "+ShippingCost+" "+netamount);
	$("#purchasemasterform #netamount").text(netamount);

});


var temp=0;

$(document).on("click",".edit_purchase_item",function(){

	var data = purchaselisttable.row( $(this).parents('tr') ).data();

	//alert(JSON.stringify(data));
	//alert(data.ItemName);
	//console.log(JSON.stringify(data));

	purchaselisttable.row( data.id )
    .nodes()
    .to$()
    .addClass( 'highlight' );

    temp=data;

	$("#newpurchasemastermodal #Update").css("display", "block");
	$("#newpurchasemastermodal #add").css("display", "none");


	$('#ActualDeliveryDate').attr("disabled",false);
	$('#Delivered').attr("disabled",false);

});



$(document).on("click","#newpurchasemastermodal #Update",function(){



	var ActualDeliveryDate="";

	if($("#newpurchasemastermodal #ActualDeliveryDate").val()!==""){

		ActualDeliveryDate=$("#newpurchasemastermodal #ActualDeliveryDate").datepicker( "getDate" );
		ActualDeliveryDate=moment(ActualDeliveryDate).format("YYYY-MM-DD");


	}else{

		ActualDeliveryDate="";
	}



	var Delivered=$('#newpurchasemastermodal #Delivered').is(':checked')
	if(Delivered==true){Delivered="yes";}
	else{Delivered="no";}


	//alert("delevar:"+Delivered);


	//alert(ActualDeliveryDate+" "+Delivered);

    $.ajax({
           type: "POST",
           dataType:"json",
           url: 'UpdateActualdelivarydate',
           data: {
	           	"ActualDeliveryDate": ActualDeliveryDate,
	           	"Delivered": Delivered,
	           	"PurchaseDetailsId": temp.Id,

           }, // serializes the form's elements.
           success: function(data)
           {
              // alert(JSON.stringify(data) ); // show response from the php script.
               //console.log(JSON.stringify(data) ); // show response from the php script.

               if(data=="updated"){
              	 	toastr.success('Successfully Updated \n');
           		}else{
           			toastr.success('Successfully Not Updated \n');
           		}


           }
    })
    .done(function(response){

    	var purchaseitemsarray1 = purchaseitemsarray.filter(function(el) {

    		if(el.Id == temp.Id){

    			el.ActualDeliveryDate=ActualDeliveryDate;
    			el.Delivered=Delivered;
    		}else{

    			//return ((el.Id !== temp.Id));
    		}
		    return true;
		});
		purchaseitemsarray=purchaseitemsarray1;

		purchaselisttable.clear().draw();
		purchaselisttable.rows.add( purchaseitemsarray ).draw();

			purchaselisttable.row( temp.id )
		    .nodes()
		    .to$()
		    .addClass( 'highlight' );

		$("#newpurchasemastermodal #Update").css("display", "none");
		$("#newpurchasemastermodal #add").css("display", "block");

		$('#ActualDeliveryDate').val("");
		$('#Delivered').attr("checked",false);


		$('#ActualDeliveryDate').attr("disabled",true);
		$('#Delivered').attr("disabled",true);


	});




});




$(document).on("change","#SupplierId",function(){

		var rate= $("#purchasemasterform #SupplierId option:selected").attr("rate");
		$("#purchasemasterform #VATVALUE").text(rate);

});




$(document).on("click","#PurchaseIdsearchbtn",function(){

		var purchasesearchid= $("#PurchaseIdsearch").val();

		//alert(purchasesearchid);


	    $.ajax({
	           type: "POST",
	           dataType:"json",
	           url: 'PurchaseIdsearch',
	           data: {"purchasesearchid": purchasesearchid}, // serializes the form's elements.
	           success: function(data)
	           {
	              //alert(JSON.stringify(data) ); // show response from the php script.
	              //console.log(JSON.stringify(data['purchase']) ); // show response from the php script.
	              //console.log(JSON.stringify(data['purchasedetails']) ); // show response from the php script.
	              var purchasearray=data['purchase'];
	              var purchasedetailsarray=data['purchasedetails'];

	              if(purchasearray.length>0){
	              	              

	              	              purchaseitemsarray=[];
	              	              for (var i = 0; i < purchasedetailsarray.length; i++) {
	              	              	//alert(JSON.stringify(purchasedetailsarray[i].PurchaseDetailsId) );
	              
	              	              	purchaseitemsarray.push({
	              
	              
	              						Id:purchasedetailsarray[i].PurchaseDetailsId, 
	              						ItemId:purchasedetailsarray[i].ItemId, 
	              						ItemName:purchasedetailsarray[i].ItemName, 
	              						SupplierId:purchasedetailsarray[i].SupplierId,
	              						SupplierName:purchasedetailsarray[i].SupplierName,
	              						Qty:parseFloat(purchasedetailsarray[i].Qty) ,
	              						PurchaseUnitPrice:parseFloat(purchasedetailsarray[i].PurchasePrice),
	              						Discount:parseFloat(purchasedetailsarray[i].Discount),
	              						Amount:parseFloat(purchasedetailsarray[i].Amount),
	              						Delivered:purchasedetailsarray[i].Delivered,
	              						ActualDeliveryDate:purchasedetailsarray[i].ActualDeliveryDate,
	              						Editable:"yes"
	              
	              						});
	              
	              	              	indexx=purchasedetailsarray[i].PurchaseDetailsId+1;
	              
	              
	              	              }
	              
	              	            purchaselisttable.clear().draw();
	              				purchaselisttable.rows.add( purchaseitemsarray ).draw();
	              
	              
	              //////////////////////
	              
	              			$("#newpurchasemastermodal #SupplierId option[value='"+purchasearray[0].SupplierId+"']").attr("selected","selected");
	              			$("#newpurchasemastermodal #PurchaseId").val(purchasearray[0].PurchaseId);
	              
	              
	              			$("#PurchaseDetailNote").val(purchasearray[0].Note);
	              
	              			
	              		
	              
	              			$("#newpurchasemastermodal #PurchaseDate").datepicker( "setDate" ,purchasearray[0].PurchaseDate);
	              			
	              
	              			$("#newpurchasemastermodal #EstimateDeliveryDate").datepicker( "setDate" ,purchasearray[0].DueDate);
	              			
	              			$("#purchasemasterform #ShippingCost").val(purchasearray[0].ShippingCost);
	              			var ShippingCost=purchasearray[0].ShippingCost;
	              			if(ShippingCost==""||ShippingCost==0){
	              
	              				ShippingCost=0;
	              
	              			}else{
	              
	              				ShippingCost=parseFloat(ShippingCost);
	              			}
	              
	              			var  totalamount_=totalamount();
	              			$("#purchasemasterform #total_amount").text(totalamount_);
	              
	              			var rate= parseFloat($("#purchasemasterform #SupplierId option[value='"+purchasearray[0].SupplierId+"']").attr("rate"));
	              
	              
	              			var amountwithtax=totalamount_+((totalamount_*rate)/100);
	              			var netamount=totalamount_+((totalamount_*rate)/100)+ShippingCost;
	              
	              			$("#purchasemasterform #netamount").text(netamount);
	              }else{

	              	alert("Purchase Number not found");
	              }
////////////////////////////////////////////////////


	               
	           }
	    })
	    .done(function(response){

    			

    	});






});






////
function nextpurchaseno(){



    $.ajax({
           type: "POST",
           url: 'nextpurchaseno',
           //data: {"action": "newcust",formdatas:dataa}, // serializes the form's elements.
           success: function(data)
           {
               //alert(JSON.stringify(data) ); // show response from the php script.
               //console.log(JSON.stringify(data) ); // show response from the php script.
               // alert(data.length);
               if(data=='null'){

               		//alert("null");
 					$("#newpurchasemastermodal #PurchaseId").val(1);
               }else{
 					$("#newpurchasemastermodal #PurchaseId").val(parseInt(data)+1);
					//alert("not null");
               }
              
           }
         });


	


}

taxCodeoption();
function taxCodeoption(){



    $.ajax({
           type: "POST",
           url: 'taxcodeoption',
           //data: {"action": "newcust",formdatas:dataa}, // serializes the form's elements.
           success: function(data)
           {
               //alert(JSON.stringify(data) ); // show response from the php script.
               //console.log(JSON.stringify(data) ); // show response from the php script.


               $("#newsuppliermodal #TaxId").html(data);
           }
         });


	


}

	nominalOption();
	function nominalOption(){



	    $.ajax({
	           type: "POST",
	           url: 'nominaloption',
	           //data: {"action": "newcust",formdatas:dataa}, // serializes the form's elements.
	           success: function(data)
	           {
	               //alert(JSON.stringify(data) ); // show response from the php script.
	               //console.log(JSON.stringify(data) ); // show response from the php script.


	               $("#newsuppliermodal #NominalId").html(data);
	           }
	         });


		


	}

	//suppliersOption();
	function suppliersOption(){



	    $.ajax({
	           type: "POST",
	           url: 'suppliersoption',
	           //data: {"action": "newcust",formdatas:dataa}, // serializes the form's elements.
	           success: function(data)
	           {
	               //alert(JSON.stringify(data) ); // show response from the php script.
	               //console.log(JSON.stringify(data) ); // show response from the php script.


	               $("#newpurchasemastermodal #SupplierId").html(data);
	           }
	    })
	    .done(function(response){

    			var rate= $("#purchasemasterform #SupplierId option:selected").attr("rate");
				$("#purchasemasterform #VATVALUE").text(rate);

    	});


		


	}

	itemsOption();
	function itemsOption(){



	    $.ajax({
	           type: "POST",
	           url: 'itemsOption',
	           //data: {"action": "newcust",formdatas:dataa}, // serializes the form's elements.
	           success: function(data)
	           {
	              // alert(JSON.stringify(data) ); // show response from the php script.
	               //console.log(JSON.stringify(data) ); // show response from the php script.


	               $("#newpurchasemastermodal #ItemId").html(data);
	           }
	         });


		


	}








$('#newsuppliermodal').on('keydown', 'input,select,textarea', function(e) {

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



$('#newpurchasemastermodal').on('keydown', 'input,select,textarea', function(e) {

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