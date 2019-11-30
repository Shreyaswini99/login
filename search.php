<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search</title>
</head>
<style>
  #search{
    float:left;
    width:250px;
    height:180px;
    background-color:white;
    box-shadow: 5px 10px 18px #888888;
    margin-top: 200px;
    margin-left: 30px;
  }
</style>
<body style="background-image: url('1.jpg');background-repeat: no-repeat;  
background-size: cover">
    <h1 style="text-align: center; color:white">ONLINE LAWYER</h1>
    <nav></nav>
    <form action="" method="POST" id="search" >
      <br>
        <input type="search" name="key" placeholder="Enter the district" 
            style="width:150px;height:35px;margin-left:15px;"><br><br>
        <button type="submit" class="btn btn-primary" name="s_submit" value="district" 
        style="width:80px;height:30px;margin-left:15px; margin-bottom:5px">Search<br>
    

      </form> <br><br> 
</body>
</html>

<?php
session_start();
$server_name = "localhost";
$username = "";
$password = "";
$dbname = "test";
$conn =  mysqli_connect($server_name, $username,$password,$dbname)or die(Mysqli_error());
$select_db = mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
if(isset($_POST['s_submit']) && isset($_POST['key']))
{
   $key=$_POST['key'];
    $q="SELECT name,phoneNo FROM lawyer WHERE district='$key'";
    $result_tuples = $conn->query($q);
    if(!$result_tuples){
        echo "Could not connect... ";
    }
    $ret=mysqli_num_rows($result_tuples);
    if($ret>0)
    {
        while($row = mysqli_fetch_assoc($result_tuples)) {
         echo  "<center><h4 style='color:black'>:Name : " . $row['name'].
          "&nbsp &nbsp Phone Number : " . $row["phoneNo"];
           } }
    else{
      echo "<center><h3 style='color:black'>Could not fetch records for given ID...</h3></center>";
    }
}
Mysqli_close($conn);
?>