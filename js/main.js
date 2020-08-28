



$(document).ready(function() { 


$("#upload").submit(function(e){
		var formData = new FormData($(this)[0]);
    debugger;
    console.log('hi');
e.preventDefault();
  $.ajax({
    url: rootURL +'signup',
    type: "POST",
    data: formData,
    success: function (msg) {
      alert(msg)
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
    cache: false,
    contentType: false,
    processData: false
  });

});
});