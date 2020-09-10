<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 

  <title>Register</title>


  <!-- Custom styles for this template-->
  <link href="css/admin.css" rel="stylesheet">
<script src="js/jquery-1.10.2.js"></script>
 <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.0.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>   
<script src="js/config.js"></script>
    <style>
        .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
        </style>
   <script>
function checkUsernameAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'username='+$("#username").val(),
type: "POST",
success:function(data){
$("#username-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){
}
});
}
</script>

<!--Javascript for check email availability-->
<script>
function checkEmailAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){

$("#email-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){
 event.preventDefault();
}
});
}
</script> 
</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          
          <div class="col-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form id="signin">
<div id ="result"></div>
                <div class="form-group row">
                    
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user"  name="firstname" id="validationCustom01" placeholder="First Name" required>
                      <div class="valid-feedback">
                          Looks good!
                      </div>
                  </div>

                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="lastname" id="validationCustom02" placeholder="Last Name" required>
                      <div class="valid-feedback">
                        Looks good!
                     </div>
                  </div>
                </div>
                  <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="username" id="validationCustom03" placeholder="Username" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>  
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="email" id="validationCustom04" placeholder="Email Address" required>
                   <div class="valid-feedback">
        Looks good!
      </div> 
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" name="password" id="validationServer05" placeholder="Password" required>
                     <div class="valid-feedback">
        Looks good!
      </div> 
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" name="repeat-password" id="validationServer06" placeholder="Repeat Password" required>
                     <div class="valid-feedback">
        Looks good!
      </div> 
                  </div>
                </div>
                <input type="submit" class="btn btn-primary form-control" name="register">

                <hr>
                <a href="home.php" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Register with Google
                </a>
                <a href="home.php" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                </a>
                  </fieldset>
              </form>
              <hr>

              <div class="text-center">
                <a class="small" href="forgot-password.php">Forgot Password?</a>
              </div>

              <div class="text-center">
                <a class="small" href="login.php">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  
    <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="js/login.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  
 
    
</body>

</html>
