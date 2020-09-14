$(document).ready(function() { 
    
$("#register").submit(function(e){
		var formData = new FormData($(this)[0]);
        e.preventDefault();
  $.ajax({
        url: rootURL +'register',
        type: "POST",
        data: formData,
        dataType : 'json', 
        success: function(data){
       
            $('#result').html(data.status +':' + data.message);   
                       
        },
        error:function(){
            $("#result").html('Already registered');
           
      } ,  
      cache: false,
     contentType: false,
      processData: false
  });

});
$("#login").submit(function(e){
		var formData = new FormData($(this)[0]);
        e.preventDefault();
  $.ajax({
    url: rootURL +'login',
    type: "POST",
    data: formData,
    dataType : 'json', 
    success: function(data){
       
            $('#result').html(data.status +':' + data.message);   
                    
      },
      error:function(){
          $("#result").html('Check your username/password');
          
      } ,  
    cache: false,
    contentType: false,
    processData: false
  });

});
});
 
function checkUsernameAvailability() {
    jQuery.ajax({
        url: rootURL +'username',
        data:'username='+$("#username").val(),
        type: "POST",
        dataType : 'json', 
    success:function(data){
        $("#username-availability-status").html(data.message);
        },
        error:function (){
        $("#username-availability-status").html(data.message);  
}
});
}



function checkEmailAvailability() {
       jQuery.ajax({
       url: rootURL +'email',
       data:'email='+$("#email").val(),
       type: "POST",
       dataType : 'json', 
    success:function(data){
        $("#email-availability-status").html(data.message);
    },
    error:function (){
         $("#email-availability-status").html(data.message);
    }
    });
}
    function password_valid()
    {
    var a = document.forms.password.value;
    var b = document.forms.repassword.value;
	if (a==b)
	 {
        document.getElementById("passwords").innerHTML = "matching" 
		document.getElementById("passwords").style.color="green"
		
		 return false;
		 }
	else
		{		 
		document.getElementById("passwords").innerHTML ="not matching";
	   document.getElementById("passwords").style.color="red";
		
		return false;
        }
}
