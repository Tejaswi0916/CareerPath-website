<?php
$Sno = $_GET["Sno"];
$userid = $_GET["userid"];
$name = $_GET["name"];
$dob = $_GET["dob"];
$gender = $_GET["gender"];
$address = $_GET["address"];
$qualification = $_GET["qualification"];
$area_of_interest = $_GET["area_of_interest"];
echo $Sno."<br>";
echo $userid."<br>";
echo $name."<br>";
echo $dob."<br>";
echo $gender."<br>";
echo $address."<br>";
echo $qualification."<br>";
echo $area_of_interest."<br>";
$conn = mysqli_connect("localhost", "root", "", "swini")
or die('Error connecting to MySQL server.');

$query = "INSERT INTO application_form (`Sno` , `userid` , `name` , `dob` , `gender` , `qualification` , `area_of_interest`) VALUES ('$Sno', '$userid', '$name', '$dob', '$gender', '$qualification', '$area_of_interest');";


mysqli_query($conn, $query) or die(mysqli_error());

?>
