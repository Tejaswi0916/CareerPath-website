<?php
$Sno = $_POST["Sno"];
$userid = $_POST["userid"];
$name = $_POST["name"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$address = $_POST["address"];
$qualification = $_POST["qualification"];
$area_of_interest = $_POST["area_of_interest"];
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
$fname = $_FILES['inputfile']['name'];
$fsize = $_FILES['inputfile']['size'];
$ftype = $_FILES['inputfile']['type'];
$tmp = $_FILES['inputfile']['tmp_name'];
$targetpath = "upload/".$fname;

move_uploaded_file($tmp,$targetpath);


mysqli_query($conn, $query) or die(mysqli_error());

?>
