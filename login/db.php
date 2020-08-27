<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/


$con = mysqli_connect("localhost","event","Events@123","login");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>