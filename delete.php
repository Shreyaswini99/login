<?php 
session_start(); 
$servername = "localhost";
$username = "";
 $password = "";
 $dbname = "test";

 $tbl_name="lawyer";
 $conn = mysqli_connect($servername, $username, $password, $dbname) or die(Mysqli_error()); 
 $select_db=mysqli_select_db($conn ,$dbname)or die(mysqli_error($conn)); 
 $sql = "SELECT * FROM $tbl_name";
 $result = mysqli_query($conn, $sql) or
 die(mysqli_error($connection));
 if(isset($_POST['Submit']))
 {
$usn = $_POST['lawyerId'];
 $sel="select * from lawyer where lawyerId='$usn'"; 
 $cq = mysqli_query($conn,$sel) or die(mysqli_error($conn));
 $ret = mysqli_num_rows($cq); 
 if($ret == false) 
 {	 
echo "<center><h2 style='color:red'>lawyerId Does not exists</h2></center>"; 
 }
 else
 {

$sel="delete from lawyer where lawyerId='$usn'";
 $cq = mysqli_query($conn,$sel) or die(mysqli_error($conn));
 echo "<center><h2 style='color:red'>Lawyer details deleted</h2></center>"; 
 }
 }
Mysqli_close($conn); 
?>
<html> 
<head> 
<body style="background-color:dark blue"> 
<title>registration form</title> 
</head>
 <form action="" method="post">
 <table border="0" align="center"> 
 <tbody> 

<tr>
 <td><label for="id">Enter lawyerId to be deleted: </label></td> 
 <td><input id="id" maxlength="50" name="lawyerId" type="text" /></td>
 </tr> 
 <tr> 
 <td align="right"><input name="Submit" type="Submit" value="Delete"/>&nbsp;
 <input type="reset" onClick="refresh()"></p></td> 
 </tr>
 </tbody>
 </table>
 </form>
 </html>
 
