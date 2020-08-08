<html>
<head>
<title>Login</title>
<style>
html, body{
    height: 100%;
    margin: 0px;
    }
body {
 background-image:url('logo.jpg'); 
 margin:0;
 background-repeat:no-repeat;
 background-size:100% 100%;
 height: 100%;
    margin: 0px;
}
#ul1 {
  list-style-type: none;
  margin:0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  width:100%;
}
#ul2 {
  list-style-type: none;
  margin: 0;
  padding: 0;
  position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: red;
   color: white;
   text-align: center;
  overflow: hidden;
  background-color:white;
  width:100%;
  border-top:2px solid black;
  text-color:black;
}

li {
  float: left;
}

li a, .dropbtn {
font-family:sans-serif;
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
.sth {
font-family:sans-serif;
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
#sthl {
font-family:sans-serif;
  display: inline-block;
  color: white;
  text-align: center;
  padding: 4px 4px;
  text-decoration: none;
}
li a:hover, .dropdown:hover .dropbtn {
font-family:sans-serif;
  background-color: red;
}

li.dropdown {
font-family:sans-serif;
  display: inline-block;
}

.dropdown-content {
font-family:sans-serif;
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
font-family:sans-serif;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
.header {
z-index:999;
font-family:sans-serif;
  background: #555;
  color: #f1f1f1;
}

.sticky {
font-family:sans-serif;
  position: fixed;
  top: 0;
  width: 100%
}

.sticky + .content {
font-family:sans-serif;
  padding-top: 102px;
}

</style>
</head>
<body>
<?php include "db_connectp.php" ?>
<div class="header" id="myHeader">
<ul id="ul1">
<li class="sth"></li>
<li class="sth"></li>
<li class="sth"></li>
<li class="sth"></li>
<li class="sth"></li>
<li class="sth"></li>
<li class="sth"></li>
<li class="sth"></li>
<li id="sthl"><img src="logo.jpg"width=60px height=40px></li>
<li class="sth"></li>
  <li><a href="project.php">Home</a></li>
  <li><a href="#news">Recent</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Genres</a>
    <div class="dropdown-content">
      <a href="#">Rock</a>
      <a href="#">Hip Hop</a>
      <a href="#">Classic</a>
		<a href="#">Classic</a>
		<a href="#">Country</a>
		<a href="#">EDM</a>
	</div>
	</li>
	<li>
	<form style="color:black;padding:12px 16px;text-decoration:none;display:block;text-align:left;" action="msearched.php"method="post">
	<input type="text"name="msearch"placeholder="Search"style="width:30em;border-radius:5px;">
	</form>
	</li>
  </li>
  <li><a href="projectlogin.php">Login</a></li>
  <li><a href="projecthelp.html">Help</a></li>
  </div>
<div style="background-color:#ffffff; margin:0px 325px 0px 325px;top:0;min-height:100%;opacity:95%;">
<h1 align="center" style="font-family:sans-serif;opacity:100%;">Welcome to SoundFlow, the home to your favourite music.</h1>
<h2 align="center" style="font-family:sans-serif;color:grey;opacity:100%;">Login to gain access to a wide choice of tracks.</h2>
<form style="text-align:center;font-size:24;"action="verifyproj.php"method="post">
Username:<br>
<input type="text" name="uname"placeholder="Enter your username"><br><br>
Password:<br>
<input type="password" name="pword"placeholder="Enter your password"><br><br>
<input type="submit"name="submit"placeholder="Submit"value="Submit"style="width:8em;font-size:18;">
</form><br><br><br>
<a href="projectreg.php"style="text-align:center;align:center;margin:0px 0px 0px 475px;">Do not have an account? Click here to register!</a><br><br>
<h3 align="center" style="font-family:sans-serif;opacity:100%;">In the meantime, have a sneak peek of our vast library!</h3>
</div>
<script>
window.onscroll = function() {myFunction()};
var header = document.getElementById("myHeader");
var sticky = header.offsetTop;
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
} 
</script>
</body>
</html>