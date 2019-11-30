 <?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="client";
$conn=mysqli_connect($servername,$username,$password,$dbname)or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="SELECT * FROM $tbl_name";


$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
if(isset($_POST['Submit']))
{
	$usn=$_POST['clientId'];
	$name=$_POST['name'];
    $s=$_POST['address'];
	$qy=$_POST['phoneNo'];
	$q1=$_POST['addr'];
	$q2=$_POST['passw'];
	$query="INSERT INTO client VALUES('$usn','$name','$s','$qy','$q1','$q2')";
	mysqli_query($conn,$query)or die(mysqli_error($conn));
	echo"<center><h2 style='color:green'>Details saved!</h2></center>";
}
Mysqli_close($conn);
?>
<html>
<head>
<style>
body
	{
		background-image:url('10.jpg');
		background-repeat:no-repeat;
		background-size:contain;
		background-position:center;
		background-attachment:fixed;
	}
</style>
</head>
<body>
<form action="" method="POST">
<table style="border:0;align:center">
<tr>
<td><label for="id">Client ID:</label></td>
<td><input id="item_id" maxlength="50" name="clientId" type="text"></td>
</tr>
<tr>
<td><label for="name">NAME:</label></td>
<td><input id="type"maxlength="50" name="name" type="text"/></td>
</tr>
<tr>
<td><label for="sem">ADDRESS</label></td>
<td><input id="name" maxlength="50" name="address" type="text"/></td>
</tr>
<tr>
<td><label for="sem">PHONE NO:</label></td>
<td><input id="name" maxlength="50" name="phoneNo" type="number_format"/></td>
</tr>
<tr>
<td><label for="sem">DISTRICT:</label></td>
<td><input id="name1" maxlength="50" name="addr" type="text"/></td>
</tr>
<tr>
<td><label for="sem">PASSWORD:</label></td>
<td><input id="name1" maxlength="50" name="passw" type="text"/></td>
</tr>
<tr>
<td style="align:right"><input name="Submit" type="Submit" value="Add"/>&nbsp;<input type="reset" onClick="refresh()"></p></td>
</tr>
</body>
</table>
</form>
</html>






