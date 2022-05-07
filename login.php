<?php
session_start();
include 'dbconn-dd.php';
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM customer WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);

if(!$row=mysqli_fetch_assoc($result)){
  header ("Location: error.html");
}

else{
	$_SESSION['semail'] = $email;
$_SESSION['spassword'] = $password;
 header ("Location: user.php");
}

?>
