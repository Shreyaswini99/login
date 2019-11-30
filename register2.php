<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="client";
$conn=mysqli_connect($servername,$username,$password,$dbname) or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="SELECT * FROM $tbl_name";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
if(isset($_POST['Submit']))
{
    $usn=$_POST['clientId'];
    $name=$_POST['name'];
    $sem=$_POST['address'];
    $age=$_POST['phoneNo'];
    $dis=$_POST['district'];
    $m=$_POST['password'];
$q="SELECT clientId FROM client WHERE clientId='$usn'";
$cq=mysqli_query($conn,$q) or die(mysqli_error($conn));
$ret=mysqli_num_rows($cq);
if($ret==true)
{
echo"<center><h2 style='color:red'>ClientID already exists</h2></center>";
}
else
{
$query="INSERT INTO client VALUES('$usn','$name','$sem','$age','$dis','$m')";
mysqli_query($conn,$query) or die(mysqli_error($conn));
echo"<center><h2 style='color:green'>Details Saved!</h2></center>";
}
}
Mysqli_close($conn);
?>
<html>
<head>
<style>
<title>registration form</title>
#back-btn{
	color:inherit;
	text-decoration: none;
}
</style>
</head>
<h1 ALIGN="CENTER">Registration form</h1>
<form action=""method="post">
<table border="0" align="center">
<body>
<tr>
<td><label for="id">Client ID:</label></td>
<td><input id="id" maxlength="50" name="clientId" type="text"/></td>
</tr>
<tr>
<td><label for="name"> NAME:</label></td>
<td><input id="name" maxlength="50" name="name" type="text" /></td>
</tr>
<tr>
<td><label for="sem">ADDRESS:</label></td>
<td><input id="sem" maxlength="50" name="address" type="number_format" /></td>
</tr>
<tr>
<td><label for="age">PHONE NO:</label></td>
<td><input id="age" maxlength="50" name="phoneNo" type="number_format" /></td>
</tr>
<tr>
<td><label for="dis">DISTRICT:</label></td>
<td><input id="dis" maxlength="50" name="district" type="text" /></td>
</tr>
<tr>
<td><label for="dis">PASSWORD:</label></td>
<td><input id="dis" maxlength="50" name="password" type="text" /></td>
</tr>
<tr>
<td align="right"><input name="Submit" type="Submit" value="Add"/>&nbsp;
<input type="reset" onClick="refresh()"></td>
<button><a id="back-btn" href="login2.php">back</a></button>
</tr>
</body>
</table>
</form>
</html>