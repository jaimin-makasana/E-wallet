<?php
include 'dbconn-dd.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$cno = $_POST['cno'];
$ano = $_POST['ano'];
$email = $_POST['email'];
$password = $_POST['password'];


$sql = "INSERT INTO customer (fname, lname, cno, ano, email, password)
VALUES ('$fname', '$lname', '$cno', '$ano', '$email', '$password')";
$result = mysqli_query($conn , $sql);

header("Location: login1.html");
?>
