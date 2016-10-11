



jQuery(document).ready(function($) {




$.ajaxSetup({
  headers: { 
   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
    } 
});





	$('ul.nav li.dropdown').hover(function() {
	  $(this).find('.dropdown-menu').show();
	 // $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
	}, function() {
	  $(this).find('.dropdown-menu').hide();
	  //$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
	});

	$("#tesst").on("click",function(){
		alert("test");

		 $.ajax({
               type:'POST',
               url:'getmsg',
               data:{"r":'r'},
               success:function(data){
                  alert(data);
               }
            });
	 $.ajax({
               type:'GET',
               url:'getmsg',
               data:'_token = <?php echo csrf_token() ?>',
               success:function(data){
                  alert(data);
               }
            });

		 $.get('basic_response',function(data){

 			alert(data);

		 });



	});


	$(document).on("click","#newcustomerbtn",function(){
		//alert("clik");

		$("#customerMastermodal").modal("show");
		//$("#newcustomermodal").modal("show");

	});
	$(document).on("click","#newproductbtn",function(){
		//alert("clik");

		$("#productsMastermodal").modal("show");

	});
	$(document).on("click","#newitemcatagorybtn",function(){
		//alert("clik");

		$("#newItemCatagorymodal").modal("show");

	});	
	$(document).on("click","#itemmasterbtn",function(){
		//alert("clik");

		$("#itemMastermodal").modal("show");

	});

	$(document).on("click","#newitemunitbtn",function(){
		//alert("clik");

		$("#newItemUnitmodal").modal("show");

	});
	$(document).on("click","#suppliermasterbtn",function(){
		//alert("clik");

		//$("#newsuppliermodal").modal("show");
		$("#supplierMastermodal").modal("show");

	});	
	$(document).on("click","#puschasemasterbtn",function(){
		//alert("clik");

		//$("#newsuppliermodal").modal("show");
		$("#newpurchasemastermodal").modal("show");

	});


	$(document).on("click","#todaydeleverynoteid",function(){
		
		
		$("#todaydeleverynotemodal").modal("show");

	});


	$(document).on("click","#taxmasterbtn",function(){
		
		
		$("#newtaxmodal").modal("show");

	});



	$(document).on("click","#dbbackupid",function(){
		
		
		$("#dbbackupmodal").modal("show");

	});


	$(document).on("click","#nominalmasterbtn",function(){
		
		
		$("#newnominalmodal").modal("show");

	});







/*$( function() {
    $( "#tabs" ).tabs();
  } );

*/

$(document).on("click","#leftitems a",function(){

	$("#leftitems a").removeClass("selectedicon");

	$(this).addClass("selectedicon");

	$(".tabcontant").hide();
	

	$($(this).attr("href")).show();

});

	

});