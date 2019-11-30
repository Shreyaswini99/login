<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="client";
$conn=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_error());
$select_db=mysqli_select_db($conn,$dbname) or die (mysqli_error($conn));
$usn=$_POST['clientId'];
$pwd=$_POST['password'];
if(isset($_POST['update']))
    {
        
        $usn=$_POST['clientId'];
        $name=$_POST['name'];
        $age=$_POST['address'];
        $addr=$_POST['phoneNo']; 
        $dob=$_POST['district'];
        $pwd=$_POST['password'];
       
        $res2="UPDATE $tbl_name set name='$name',address='$age',phoneNo='$addr',district='$dob',password='$pwd' where clientId='$usn'";
        $result=mysqli_query($conn,$res2) or die (mysqli_error($conn));
        
    }
?>

<?php
$usn=$_POST['clientId'];
$pwd=$_POST['password'];
$res1="select * from $tbl_name where clientId='$usn' and password='$pwd'";
$result1=mysqli_query($conn,$res1) or die (mysqli_error($conn));
$cn=mysqli_num_rows($result1);
if($cn==false)
    {
        echo"<center><h2 style='color:red'>ACCESS DENIED</h2></center>";
    }
else
    {
        while($row=mysqli_fetch_array($result1))
        {
            $usn=$row['clientId'];
            $name=$row['name'];
            $age=$row['address'];
            $addr=$row['phoneNo'];
            $dob=$row['district'];
            $pwd=$row['password'];
        }
      
?>
<html>
    <head>
        <title>Edit details</title>
        <style>
#back-btn{
	color:inherit;
	text-decoration: none;
}
body{
    background-image:url("3.jpg");
		background-repeat:no-repeat;
		background-size:cover;
		background-position:center;
		background-attachment:fixed;
	}
</style>
    </head>
    <body>
        <br/><br/>
        <form name="form1" method="post" action="">
            <table border="0">
                <tr>
                    <td>CLIENTID</td>
                    <td><input type="uniqid" name="clientId" value="<?php echo $usn;?>" ></td>
                </tr>
                <tr>
                    <td>NAME</td>
                    <td><input type ="text" name="name" value="<?php echo $name;?>" ></td>
                </tr>
                <tr>
                    <td>ADDRESS</td>
                    <td><input type ="text" name="address" value="<?php echo $age;?>" ></td>
                </tr>
                <tr>
                    <td>PHONE NO</td>
                    <td><input type ="text" name="phoneNo" value="<?php echo $addr;?>" ></td>
                </tr>

                <tr>
                    <td>DISTRICT</td>
                    <td><input type ="text" name="district" value="<?php echo $dob;?>" ></td>
                </tr>
                <tr>
                    <td>PASSWORD</td>
                    <td><input type ="text" name="password" value="<?php echo $pwd;?>" ></td>
                </tr>
                
                <tr>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
            <button><a id="back-btn" href="menupage.php">back</a></button>
        </form>
    </body>
</html>
<?php
 }?>
