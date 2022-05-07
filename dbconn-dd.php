<?php

$conn = mysqli_connect('localhost', 'root', '', 'ewallet');

if(!$conn){
 die('Connection Failed: ' . mysqli_connect_error());
}
#echo "Database 'dd' Connected Successfully.<br>";

