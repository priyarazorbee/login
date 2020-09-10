$(document).ready(function() { 
    
$("#signin").submit(function(e){
		var formData = new FormData($(this)[0]);

  e.preventDefault();
  $.ajax({
    url: rootURL +'signup',
    type: "POST",
    data: formData,
     dataType : 'json', 
    success: function(data){
       
            $('#result').html(data.status +':' + data.message);   
            $("#result").addClass('msg_notice');
            $("#result").fadeIn(1500);           
      },
      error:function(){
          $("#result").html('There was an error updating the settings');
          $("#result").addClass('msg_error');
          $("#result").fadeIn(1500);
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
            $("#result").addClass('msg_notice');
            $("#result").fadeIn(1500);           
      },
      error:function(){
          $("#result").html('There was an error updating the settings');
          $("#result").addClass('msg_error');
          $("#result").fadeIn(1500);
      } ,  
    cache: false,
    contentType: false,
    processData: false
  });

});
});