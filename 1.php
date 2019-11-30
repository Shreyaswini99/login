<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("4.jpg");
                height:100%;
                background-size:cover ;
}
.navbar {
  overflow: hidden;
  background-color: #333;
}
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
.dropdown {
  float: left;
  overflow: hidden;
}
.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
.dropdown-content a:hover {
  background-color: #ddd;
}
.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>
<div class="navbar">
  
  <div class="dropdown">
    <button class="dropbtn">INSERT
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="inserts.php">LAWYER</a>
      <a href="insert2.php">CLIENT</a>
      <a href="insert3.php">PAYMENT</a>
     </div>
     </div>

     <div class="dropdown">
      <button class="dropbtn">UPDATE
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="update.php">LAWYER</a>
      <a href="update2.php">CLIENT</a>
      <a href="update3.php">PAYMENT</a>
</div>
</div>

<div class="dropdown">
      <button class="dropbtn">SEARCH
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="search.php">CLIENT</a>

      </div>
      </div>
    

<div id="mySidenav" class="sidenav">
   <a href="menupage.php" id="blog">HOME</a>
  <a href="about.php" id="about">ABOUT</a>
  <a href="#" id="projects">SERVICES</a>
  <a href="#" id="contact">CONTACT</a>
</div>


</body>
</html>
