
jQuery(document).ready(function($) {





function db_backup_command_btn(){


	 var mapForm = document.createElement("form");
	   // mapForm.target = "Map";
	   	mapForm.type = "hidden";
	    mapForm.target = "Map";
	    mapForm.method = "GET"; // or "post" if appropriate
	    mapForm.action = "dbbackup";
	    //mapForm.action = "http://localhost/appointment/wp-content/plugins/first-plugin/mpdf/my.php";

	    /*var mapInput = document.createElement("input");
	    mapInput.type = "text";
	    mapInput.name = "quantitylistarray";
	    mapInput.value = JSON.stringify(quantitylistarray, null, 2);;
	    mapForm.appendChild(mapInput);*/

	 

////////////////////////////////////////////////////////////////////

		document.body.appendChild(mapForm);

		    map = window.open("", "Map", "status=0,title=0,height=600,width=800,scrollbars=1", '_blank');

		if (map) {
		    mapForm.submit();
		} else {
		    alert('You must allow popups for this map to work.');
		}

}





$(document).on("click","#db_backup_command_btn",function(){


	//alert("click diyeci");
	db_backup_command_btn();



});






$('#sqlinputfile').on('change',function(){


	file = this.files[0];
	var imagefile = file.type;
	var match= ["application/sql"];
	//alert(file+" "+imagefile+" ");

	if(  !( (  imagefile==match[0])  ) )  
	{
		toastr.error('Choose SQL file\n');
		$('#sqlinputfile').attr({ value: '' }); 
		return false;
	}
	else
	{
		
	}


});


$(document).on("click","#restoreDatabaseBtn",function(){


		    if($('#sqlinputfile').get(0).files.length==0){

		    		toastr.error('Select a SQL file\n');
		    }else{

					var file_data = $('#sqlinputfile').prop('files')[0];   
				    var form_data = new FormData();                  
				    form_data.append('file', file_data);

		 

				    //alert(form_data);    

				    //form_data.append('action', 'my_action_Restore_Backup_Databasedfew');




					$.ajax({
						url:"Restore_Backup_Database",
						type:'POST',
						dataType: 'text',  // what to expect back from the PHP script, if anything
		                cache: false,
		                contentType: false,
		                processData: false,
		                data: form_data, 
						
						success:function(response) {
							console.log(response);
							alert(response);

							if(response=="done"){

								toastr.success('Successfully Restore Database\n');

							}
							if(response=="Error"){

								toastr.error('Fail to Restore Database\n');

							}

								

						}

					})
					.done(function(response){


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




});
		















});//jquery ready end