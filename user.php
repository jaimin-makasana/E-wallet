<?php
session_start();	
include 'dbconn-dd.php';
$email = $_SESSION['semail'];
$password = $_SESSION['spassword'];

$sql = "SELECT * FROM customer WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);

if(!$row=mysqli_fetch_assoc($result)){
  header ("Location: error.html");
}
else{
 header ("Location: userpage.php");
}

?>