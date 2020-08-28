<?php
error_reporting(0);
ini_set('display_errors', 1);
require 'Slim/Slim.php';
require 'config.php';

\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();
$app->post('/login','login'); /* User login */
$app->post('/signup','signup'); /* User Signup  */
$app->run();
function login(){
  
    session_start();
     $db = getDB();
			$username = $_REQUEST['username'];
			$password = $_POST['password'];
			$sql = "SELECT * FROM `users` WHERE (username=:username or email=:username) AND password=:password ";
			$query = $db->prepare($sql);
			$query->bindValue(":username", $username, PDO::PARAM_STR);
$query->bindValue(":password", $password, PDO::PARAM_STR);
$query->execute();
			$row = $query->rowCount();
			$fetch = $query->fetch();
			if($row > 0) {
                
				$_SESSION['user'] = $fetch['user_id'];
				header('location:http://localhost/event-management/simha/home.php');
                 
			} else{
				echo "
                
				<script>alert('Invalid username or password')</script>
				<script>window.location = 'login.php'</script>
				";
			}
 
		}


function signup(){
  	try{
                $db = getDB();
				$firstname = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$username = $_POST['username'];
                $email = $_POST['email'];
//				$enc_password = hash('sha256', $_POST['password']);
//            $password= $enc_password;
                $password = $_POST['password'];
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "INSERT INTO `users` VALUES ('', '$firstname', '$lastname', '$username','$email', '$password')";
				$db->exec($sql);
        $db = null;
			header('location:login.php');
			}catch(PDOException $e){
				echo $e->getMessage();
			}
	
			
		}
		





    ?>
