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
  <script src="js/config.js"></script>
 <link href="css/styles.css" rel="stylesheet">
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
              <form id="register" name="forms">
                <div id ="result"></div>
                  <div id="loading">
                    <img id="loading-image" src="img/45.gif" alt="Loading..." />
                  </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" pattern="[a-zA-Z\s]+" name="firstname"  placeholder="First Name" required>
                   </div>
                    <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="lastname" placeholder="Last Name" required>
                  </div>
                </div>
                  <div class="form-group">
                  <input type="text" class="form-control form-control-user" id= "username" change="checkUsernameAvailability()"  pattern="^[a-zA-Z][a-zA-Z0-9-_.]{5,12}$" name="username" placeholder="Username" required>
                    <div id="username-availability"></div>  
                  </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="email" id="email" placeholder="Enter your email address" change="checkEmailAvailability()" class="input-xlarge" required>
                 <span id="email-availability-status" style="font-size:12px;"></span> 
                  </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" name="password"  placeholder="Password" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" name="repassword" change="password_valid()"   placeholder="Repeat Password" required>
                     <span id="passwords" style="font-size:12px;"></span>  
                  </div>
                </div>
                <input type="submit" class="btn btn-primary form-control" name="register">
<!--                  <hr>-->
<!--
                <a href="home.php" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Register with Google
                </a>
                <a href="home.php" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                </a>
-->
              </form>
<!--              <hr>-->
<!--
                <div class="text-center">
                <a class="small" href="forgot-password.php">Forgot Password?</a>
              </div>
-->

              <div class="text-center">
                <a class="small" href="login.php">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 </div>
  

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/login.js"></script>


  
 
    
</body>

</html>
