<html>
<head>
<link rel="stylesheet" style="text/css" href="register.css">
</head>
<body>
<div class="transparencyborder">
</div>
<div class="design">

<h1 align="center">Registration Form</h1>
<form name="registration" method="POST">

<table cellpadding="5" cellspacing="4" align="center">

<tr>
<td>Username: </td>
<td><input type="text" name="Username" maxlength="20" placeholder="Enter username"
class="round">
</tr>

<tr>
<td>Password: </td>
<td><input type="text" name="Password" maxlength="20" placeholder="Enter password"
class="round">
</tr>

</table>
<br><br>
<center><input type="submit" name="registerBtn" value="Register" class="roundtwo"></center>
</form>
</div>

<?php
$DBHost="localhost:3308";
$DBUser="root";
$DBPass="";
$DBName="db_registration";

$conn=mysqli_connect($DBHost, $DBUser, $DBPass, $DBName);

if(!$conn){
	die("Connection failed" . mysqli_error);

}

if(isset($_POST ['registerBtn'])!=""){
	$errzip="";

	if($_POST['Username']==""){
	echo"Username is required";
	}
	if($_POST['Password']==""){
	echo"Password is required";
	}
	else{
		$sql="INSERT into tbl_registration(`Username`, `Password`)
		values ('$_POST[Username]', '$_POST[Password]')";


	$result=mysqli_query($conn, $sql);
	}

}


?>
