<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  #mySidenav a {
  position:CENTER;
  left: -80px;
  transition: 0.3s;
  padding: 20px;
  width: 100px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
  left: 0;
}

#about {
  top: 80px;
  background-color: #4CAF50;
}

#blog {
  top: 140px;
  background-color: #2196F3;
}

#projects {
  top: 200px;
  background-color: #f44336;
}

#contact {
  top: 260px;
  background-color: #555
}

body {
  
  background-image:url('lawfirm.jpg');
		background-repeat:no-repeat;
		background-size:contain;
		background-position:center;
		background-attachment:fixed;
	}

.navbar {
  overflow: hidden;
  background-color: blue;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: VIOLET;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: RIGHT;
  overflow:HIDDEN;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: yellow;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: green;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color:white;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display:block;
  text-align:left;
}

.dropdown-content a:hover {
  background-color: blue;
}

.dropdown:hover .dropdown-content {
  display:block;
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
      <a href="update3.php">CLIENT</a>
      
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

     <div class="dropdown">
      <button class="dropbtn">DELETE
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a href="delete.php">LAWYER</a>
    <a href="delete1.php">CLIENT</a>

      </div>
      </div>
    

<div id="mySidenav" class="sidenav">

   <a href="main.php" id="blog">HOME</a>
  <a href="about.php" id="about">ABOUT</a>
  <a href="Services.php" id="projects">SERVICES</a>
  <a href="#" id="contact">CONTACT</a>
  <a href="main.php" id="logout">LOGOUT</a>
</div>


</body>
</html>
