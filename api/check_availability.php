<?php 
require "config.php";
// Code for checking username availabilty
if(!empty($_POST["username"])) {
    $db = getDB();
            $username = $_POST['username'];
   
			$sql = "SELECT username FROM users WHERE username=:username ";
			
			$stmt = $db->prepare($sql);
            $stmt->bindParam("username", $username,PDO::PARAM_STR);
            $stmt->execute();
            $mainCount=$stmt->rowCount();
          
            if($mainCount==0)
{
    echo "<span style='color:green'> Username available for Registration.</span>";

} else{	
echo "<span style='color:red'> Username already exists.</span>";
}
}

// Code for checking email availabilty
if(!empty($_POST["email"])) {
    $db = getDB();
$email= $_POST["email"];
$sql ="SELECT email FROM  users WHERE email=:email";
$query= $db -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
echo "<span style='color:red'>Email-id already exists.</span>";
} else{	
echo "<span style='color:green'>Email-id available for Registration.</span>";
}
}

?>
