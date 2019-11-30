 <?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="payment";
$conn=mysqli_connect($servername,$username,$password,$dbname)or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="SELECT * FROM $tbl_name";


$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
if(isset($_POST['Submit']))
{
	$usn=$_POST['paymentId'];
	$name=$_POST['clientId'];
    $s=$_POST['lawyerId'];
	$qy=$_POST['type'];
	$query="INSERT INTO payment VALUES('$usn','$name','$s','$qy')";
	mysqli_query($conn,$query)or die(mysqli_error($conn));
	echo"<center><h2 style='color:green'>Details saved!</h2></center>";
}
Mysqli_close($conn);
?>
<html>
<head>
</head>
<body style ="background-color:#E5E5E5;background-image: url('3.jpg');">
<form action="" method="POST">
<table style="border:0;align:center">
<body>
<tr>
<td><label for="id">Payment ID:</label></td>
<td><input id="item_id" maxlength="50" name="paymentId" type="text"></td>
</tr>
<tr>
<td><label for="name">Client ID:</label></td>
<td><input id="type"maxlength="50" name="clientId" type="text"/></td>
</tr>
<tr>
<td><label for="sem">Lawyer ID</label></td>
<td><input id="name" maxlength="50" name="lawyerId" type="number_format"/></td>
</tr>
<tr>
<td><label for="sem">AMOUNT:</label></td>
<td><input id="name" maxlength="50" name="type" type="number_format"/></td>
</tr>
<tr>
<td style="align:right"><input name="Submit" type="Submit" value="Add"/>&nbsp;<input type="reset" onClick="refresh()"></p></td>
</tr>
</body>
</table>
</form>
</html>






