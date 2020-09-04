$(document).ready(function() { 
$("#signup").submit(function(e){
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
      alert('Please fill all fields');
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
     window.location = 'http://localhost/event-management/login/home.php';
    },
      error: function (msg) {
      alert('Usernae or password dont match');
    },
    cache: false,
    contentType: false,
    processData: false
  });

});
});