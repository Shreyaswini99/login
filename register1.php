<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="lawyer";
$conn=mysqli_connect($servername,$username,$password,$dbname) or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="SELECT * FROM $tbl_name";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
if(isset($_POST['Submit']))
{
$usn=$_POST['lawyerId'];
$name=$_POST['name'];
$sem=$_POST['specialization'];
$age=$_POST['address'];
$addr=$_POST['phoneNo'];
$dis=$_POST['district'];
$m=$_POST['password'];
$q="SELECT lawyerId FROM lawyer WHERE lawyerId='$usn'";
$cq=mysqli_query($conn,$q) or die(mysqli_error($conn));
$ret=mysqli_num_rows($cq);
if($ret==true)
{
echo"<center><h2 style='color:red'>LawyerID already exists</h2></center>";
}
else
{
$query="INSERT INTO lawyer VALUES('$usn','$name','$sem','$age','$addr','$dis','$m')";
mysqli_query($conn,$query) or die(mysqli_error($conn));
echo"<center><h2 style='color:green'>Details Saved!</h2></center>";
}
}
Mysqli_close($conn);
?>
<html>
<head>
<title>registration form</title>
</head>
<h1 ALIGN="CENTER">Registration form</h2>
<form action=""method="post">
<table border="0" align="center">
<body>
<tr>
<td><label for="id">Lawyer ID:</label></td>
<td><input id="id" maxlength="50" name="lawyerId" type="text"/></td>
</tr>
<tr>
<td><label for="name">NAME:</label></td>
<td><input id="name" maxlength="50" name="name" type="text" /></td>
</tr>
<tr>
<td><label for="sem">SPECIALIZATION:</label></td>
<td><input id="sem" maxlength="50" name="specialization" type="number_format" /></td>
</tr>
<tr>
<td><label for="age">ADDRESS:</label></td>
<td><input id="age" maxlength="50" name="address" type="number_format" /></td>
</tr>
<tr>
<td><label for="addr">PHONE NO:</label></td>
<td><input id="addr" maxlength="50" name="phoneNo" type="text" /></td>
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
<input type="reset" onClick="refresh()"></p></td>
<button><a id="back-btn" href="login1.php">back</a></button>
</tr>
</body>
</table>
</form>
</html>