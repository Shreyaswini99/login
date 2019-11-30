<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="lawyer";
$conn=mysqli_connect($servername,$username,$password,$dbname)or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="SELECT * FROM $tbl_name";


$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
if(isset($_POST['Submit']))
{
	$usn=$_POST['lawyerId'];
	$name=$_POST['name'];
    $sem=$_POST['specialization'];
    $s=$_POST['address'];
	$qy=$_POST['phoneNo'];
	$dis=$_POST['district'];
	$pswd=$_POST['pass'];
	$query="INSERT INTO lawyer VALUES('$usn','$name','$sem','$s','$qy','$dis','$pswd')";
	mysqli_query($conn,$query)or die(mysqli_error($conn));
	echo"<center><h2 style='color:dark green'>Details saved!</h2></center>";
}
Mysqli_close($conn);
?>
<html>
<head>
<style>
body
	{
		background-image:url("1.jpg");
		background-repeat:no-repeat;
		background-size:cover;
		background-position:center;
		background-attachment:fixed;
	}
</style>
</head>
<body>
<form action="" method="POST">
<table style="border:0;align:center">
<tr>
<td><label for="id">Lawyer ID:</label></td>
<td><input id="item_id" maxlength="50" name="lawyerId" type="text"></td>
</tr><br><br>
<tr>
<td><label for="name">NAME:</label></td>
<td><input id="type"maxlength="50" name="name" type="text"/></td>
</tr><br><br>
<tr>
<td><label for="spe">SPECIALIZATION:</label></td>
<td><input id="name" maxlength="50" name="specialization" type="text"/></td>
</tr><br><br>
<tr>
<td><label for="add">ADDRESS</label></td>
<td><input id="name" maxlength="50" name="address" type="number_format"/></td>
</tr><br><br>
<tr>
<td><label for="pno">PHONE NO:</label></td>
<td><input id="name" maxlength="50" name="phoneNo" type="number_format"/></td>
</tr><br><br>
<tr>
<td><label for="dis">DISTRICT:</label></td>
<td><input id="name" maxlength="50" name="district" type="text"/></td>
</tr><br><br>
<tr>
<td><label for="dis">PASSWORD:</label></td>
<td><input id="name" maxlength="50" name="pass" type="text"/></td>
</tr><br><br>
<tr>
<td style="align:right"><input name="Submit" type="Submit" value="Add"/>&nbsp;<input type="reset" onClick="refresh()"></p></td>
</tr>
</body>
</table>
</form>
</html>






