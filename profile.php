<?php
session_start();
include 'dbconn-dd.php';
$email = $_SESSION['semail'];
$password = $_SESSION['spassword'];

$sql = "SELECT * FROM customer WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result)) {
    $fname= $row['fname'];
    $lname= $row['lname'];
    $cno= $row['cno'];
    $ano= $row['ano'];       
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>userlogin</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<div class="header">
  <h1>MY WALLET</h1>
</div>
<div align="right" style="padding: 10px">
<div class="sidebar">
  <a href="userpage.php"><i class="fa fa-fw fa-home"></i> Dashboard</a>
  <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
  <a href="recharge.html"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> Recharge</a>
  <a href="history.php"><i class="fa fa-history" aria-hidden="true"></i> History</a>
  <a href="index.html"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
</div>
<body style="background-color: #E4E4E4">
<p>
	<center style="font-size: 50px;">WELCOME</center>
	<br>
	<br>
	<div class="box">
		<div class="imgcontainer">
    <img src="icon.png" alt="Avatar" class="avatar"></div>
	</div>
	<br><br>
	<center style="font-size: 20px">
	<table>
		<tr>
			<td>Name</td>
			<td>:</td>
			<td><?php echo $fname." ".$lname;
			?>
			</td>
		</tr>
		<tr></tr><tr></tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><?php echo $email;
			?>
			</td>
		</tr>
		<tr></tr><tr></tr>
		<tr>
			<td>Contact Number</td>
			<td>:</td>
			<td><?php echo $cno;
			?>
			</td>
		</tr>
		<tr></tr><tr></tr>
		<tr>
			<td>Aadhar Number</td>
			<td>:</td>
			<td><?php echo $ano;
			?>
			</td>
		</tr>
	</table>
	</center>
</p>		
</body>
</html>