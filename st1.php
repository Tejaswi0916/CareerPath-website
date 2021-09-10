<html>
<head>
APPLICATION FORM
</head>
<body>
<form action="get1.php" method="post" enctype="multipart/form-data">
<h1 style="fontsize:60px;">MAKE UR PROFILE</h1>
<table border="0px" style="margin-left:20px;width=400px;background-color:49b072">
<tr><td>Sno</td>
<td><input type="text" name="Sno"</td></tr>
<tr><td>userid</td>
<td><input type="text" name="userid"></td></tr>
<tr>
<td>
name
</td>
<td>
<input type="text" name="name">
</td>
</tr>
<tr><td>dob</td>
<td>
<input type="text" name="dob"></td></tr>
</table>
<table border="0px" style="margin-left:50px;background-color:#8D34FF; padding:5px;">
<tr>
<td>
gender<br>
<input type="radio"name="gender"value="female">female<br>
<input type="radio"name="gender"value="male">male<br>
<input type="radio"name="gender"value="transgender">others<br>
</tr>
</td>
</table>
<p style="margin-left:20px;color:red">address</p>
<textarea name="address"></textarea><br>
<p style="margin-left:20px;color:red">qualification</p>
<p style="margin-left:20px;color:green">
<input type="radio"name="qualification"value="btech">B.E<br>
<input type="radio"name="qualification"value="msc">M.SC<br>
<input type="radio"name="qualification"value="bsc">B.SC<br>
</p>
<br>
<p style="margin-left:20px;color:red">area_of_interest</p>
<textarea name="area_of_interest"></textarea><br>
<tr><td> Upload Required Document(s): </td>
 <td> 
 <input type="file" name="inputfile" required>
</tr>

<input style="margin-left:20px;color:red" type="submit" name="b1" value="submit">
</body>
</html>