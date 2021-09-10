<?php
//error_reporting(0);
$Sno = $_POST['Sno'];
$name = $_POST['name'];
$passwd = md5($_POST['password']);

echo $Sno."<br>";
echo $name."<br>";

$con = mysqli_connect('localhost','root','','swini')
 or die('Error connecting to MySQL server.');
 
$query = "INSERT INTO `login_form` (`Sno`,`name`, `password`)
			values ('$Sno', '$name', '$passwd')";



?>

