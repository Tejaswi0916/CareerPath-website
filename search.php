<html>
<head>
<title> career path </title>
<link href="style.css" rel="stylesheet">
</head>
<body bgcolor="#6699ff">


<br>
<h1 style="text-align:center; font-size:100px">
<i><b>
swini career path
</i></b>
</h1>

<br>
<br>
<br> <center>
<?php
$conn = mysqli_connect("localhost", "root", "", "swini")
or die('Error connecting to MySQL server.');

$keywords = $_GET['searchbox'];
$query = "SELECT * FROM `application_form` WHERE
					`name` LIKE '%$keywords'" ;					

$results = mysqli_query($conn, $query) or die("Error");

echo "<table style=width:30% border=1 px>
		<tr>
		<th> Sno </th>
		<th> userid </th>
		<th> name </th>
		</tr>
		
		";
		
while($row=$results->fetch_assoc()){{
	echo " <tr> <td><i>".$row['Sno']."</i></td>
	<td><i>".$row['userid']."</i></td>
	<td><i>".$row['name']."</i></td></tr>";
}
	echo "</table>";
		

	
	
}
	




?>