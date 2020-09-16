<?php
error_reporting(0);
ini_set('display_errors', 1);
require 'Slim/Slim.php';
require 'config.php';

\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();
$app->post('/login','login'); /* User login */
$app->post('/register','register'); /* User Signup  */
$app->post('/username','username');
$app->post('/email','email');
$app->run();
function login(){
  
    session_start();
     $db = getDB();
			$username = $_REQUEST['username'];
			$password = md5($_POST['password']);
			$sql = "SELECT * FROM `users` WHERE (username=:username or email=:username) AND password=:password ";
			$query = $db->prepare($sql);
			$query->bindValue(":username", $username, PDO::PARAM_STR);
            $query->bindValue(":password", $password, PDO::PARAM_STR);
            $query->execute();
			$row = $query->rowCount();
			$fetch = $query->fetch();
			if($row > 0) {
                
				$_SESSION['user'] = $fetch['user_id'];
			echo json_encode(array('status' => 'success','message'=> 'Logged in Successfully','color'=>'green'));
                 
			} else{
               echo json_encode(array('status' => 'error','message'=> 'Please register','color'=>'red')); 
				
			}
 
		}


function register(){
  	try{
       
                $db = getDB();
				$firstname=$_POST['firstname']; 
     $lastname=$_POST['lastname'];    
$username=$_POST['username']; 
$email=$_POST['email']; 

$password=md5($_POST['password']);

// Query for validation of username and email-id
$ret="SELECT * FROM users where (username=:username ||  email=:email)";
$queryt = $db -> prepare($ret);
$queryt->bindParam(':email',$email,PDO::PARAM_STR);
$queryt->bindParam(':username',$username,PDO::PARAM_STR);
$queryt -> execute();
$results = $queryt -> fetchAll(PDO::FETCH_OBJ);
if($queryt -> rowCount() == 0)
{
// Query for Insertion
$sql="INSERT INTO users(firstname,lastname,username,email,password) VALUES(:firstname,:lastname,:username,:email,:password)";
$query = $db->prepare($sql);
// Binding Post Values
$query->bindParam(':firstname',$firstname,PDO::PARAM_STR);
$query->bindParam(':lastname',$lastname,PDO::PARAM_STR);    
$query->bindParam(':username',$username,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $db->lastInsertId();
if($lastInsertId)
{

        echo json_encode(array('status' => 'success','message'=> 'Registered Successfully','color'=>'green'));
}
else 
{
    echo json_encode(array('status' => 'error','message'=> 'Something went wrong.Please try again','color'=>'red'));

                     }
}
 else
{
 echo json_encode(array('status' => 'error','message'=> 'Username or Email-id already exist. Please try again','color'=>'red'));   
}
			         
    }
    catch(PDOException $e){
				echo $e->getMessage();
			}
	
			
		}
		
function username() {
    $db = getDB();
            $username = $_POST['username'];
   
			$sql = "SELECT username FROM users WHERE username=:username ";
			
			$stmt = $db->prepare($sql);
            $stmt->bindParam("username", $username,PDO::PARAM_STR);
            $stmt->execute();
            $mainCount=$stmt->rowCount();
          
            if($mainCount==0)
{
   
echo json_encode(array('status' => 'success','message'=> 'Username available for Registration.','color'=>'green'));
} else{	

                echo json_encode(array('status' => 'error','message'=> 'Username already exists.','color'=>'red'));
}
}

// Code for checking email availabilty
function email() {
    $db = getDB();
$email= $_POST["email"];
$sql ="SELECT email FROM  users WHERE email=:email";
$query= $db -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
           echo json_encode(array('status' => 'error','message'=> 'Email-id already exists.','color'=>'green'));

} 
    else{
        echo json_encode(array('status' => 'success','message'=> 'Email-id available for Registration..','color'=>'red'));

}
}




    ?>
