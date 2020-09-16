$(document).ready(function() { 
    
$("#register").submit(function(e){
		var formData = new FormData($(this)[0]);
        $("#loading").show();
        e.preventDefault();
  $.ajax({
        url: rootURL +'register',
        type: "POST",
        data: formData,
        dataType : 'json', 
        success: function(data){
             setTimeout(function(){
            $("#loading").hide();
        }, 1000);
             $('#result').html(data.message);   
             $("#result").css("color", data.color); 
         },
        error:function(){
             setTimeout(function(){
            $("#loading").hide();
        }, 1000);
            $("#result").html('Already registered');
           $("#result").css("color", data.color);
      } ,  
      cache: false,
     contentType: false,
      processData: false
  });

});
$("#login").submit(function(e){
		var formData = new FormData($(this)[0]);
        $("#loading").show();
        e.preventDefault();
  $.ajax({
    url: rootURL +'login',
    type: "POST",
    data: formData,
    dataType : 'json', 
    success: function(data){
        setTimeout(function(){
            $("#loading").hide();
        }, 1000);
            $('#result').html(data.message);   
             $("#result").css("color", data.color);  
         //window.location.href = "home.php";
      },
    error:function(){
           setTimeout(function(){
            $("#loading").hide();
        }, 1000);
          $("#result").html('Check your username/password');
          $("#result").css("color", data.color);
      } ,  
    cache: false,
    contentType: false,
    processData: false
  });

});
});
 
function checkUsernameAvailability() {
     $("#loading").show();
    jQuery.ajax({
        url: rootURL +'username',
        data:'username='+$("#username").val(),
        type: "POST",
        dataType : 'json', 
    success:function(data){
        setTimeout(function(){
            $("#loading").hide();
        }, 1000);
        $("#username-availability").html(data.message);
        $("#username-availability").css("color", data.color);
        
        },
        error:function (){
             setTimeout(function(){
            $("#loading").hide();
        }, 1000);
        $("#username-availability").html(data.message);  
        $("#username-availability").css("color", data.color);
}
});
}



function checkEmailAvailability() {
     $("#loading").show();
       jQuery.ajax({
       url: rootURL +'email',
       data:'email='+$("#email").val(),
       type: "POST",
       dataType : 'json', 
    success:function(data){
         setTimeout(function(){
            $("#loading").hide();
            
        }, 1000);
        $("#email-availability-status").html(data.message);
        $("#email-availability").css("color", data.color);
    },
    error:function (){
         setTimeout(function(){
            $("#loading").hide();
        }, 1000);
         $("#email-availability-status").html(data.message);
        $("#email-availability").css("color", data.color);
    }
    });
}
    function password_valid()
    {
         $("#loading").show();
    var a = document.forms.password.value;
    var b = document.forms.repassword.value;
	if (a==b)
	 {
          setTimeout(function(){
            $("#loading").hide();
        }, 1000);
        document.getElementById("passwords").innerHTML = "matching"; 
		document.getElementById("passwords").style.color="green";
		
		 return false;
		 }
	else
		{		
            setTimeout(function(){
            $("#loading").hide();
        }, 1000);
		document.getElementById("passwords").innerHTML ="not matching";
	   document.getElementById("passwords").style.color="red";
		
		return false;
        }
}
