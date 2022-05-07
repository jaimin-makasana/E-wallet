<?php
session_start();
include 'dbconn-dd.php';
$email = $_SESSION['semail'];
$password = $_SESSION['spassword'];
$add=$_POST['add'];

$sql = "SELECT * FROM customer WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result)) {
    $balance= $row['balance'];       
}

$new=$add+$balance;

$sql = "UPDATE `customer` SET `balance` = '$new' WHERE `customer`.`email` = '$email';";
$result = mysqli_query($conn , $sql);

$query = "INSERT INTO `history` (`date`, `addb`) VALUES (CURRENT_TIMESTAMP, '$add')";
$sql = mysqli_query($conn,$query);

header("Location: userpage.php");

?>