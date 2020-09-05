$(document).ready(function() { 
$("#upload").submit(function(e){
		var formData = new FormData($(this)[0]);
  e.preventDefault();
  $.ajax({
    url: rootURL +'signup',
    type: "POST",
    data: formData,
    success: function (msg) {
      window.location = 'login.php';
    },
      error: function (msg) {
      document.getElementById("error").innerHTML = "Please fill the field";
    },
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
    success: function (msg) {
     window.location = 'home.php';
    },
       error: function (msg) {
      document.getElementById("error").innerHTML = "Please fill the field";
    },
    cache: false,
    contentType: false,
    processData: false
  });

});
});