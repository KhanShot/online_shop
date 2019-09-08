
$(document).ready(function(){

		
	$("#select").change(function(){
		if( ($(this).val() == 'АО') || ($(this).val() == 'ИП')|| ($(this).val() == 'ТОО')){
			$("#ishide").removeClass("hide");
			$("#inphide").attr("required","true");
		}else{
			$("#ishide").addClass("hide");
			$("#inphide").removeAttr("required","");
		}
	});

	$("#formCheckPassword").validate({
		alert('as11111');
		error: function(label) {
		     $(this).addClass("error");
		     $('#submit').css('background-color', 'red');
		   },
		  errorPlacement: function(error, element) {
            // Don't show error
      },
       rules: {
           password: { 
             required: true,
                minlength: 6,
                maxlength: 10,

           } , 

               cfmpassword: { 
                equalTo: "#password",
                 minlength: 6,
                 maxlength: 10
           }


       },
	   

	});
	if($("#checkbox").val() == 'on'){
		$('#submit').css('background-color', '#FF6F64');
	}
	$("#checkbox").change(function(){
		if($("#checkbox").prop('checked') == false){
		    $("#submit").attr("type","button");
		    $('#submit').css('background-color', '#FF6F64');

		}
		else{
			$("#submit").attr("type","submit");	
			$('#submit').css('background-color', '#80E8A4');
		}
	});

	


});

