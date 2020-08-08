<html>
<head>
<title>Registration</title>
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
<?php include "db_connectp.php";
$name=$_POST['uname'];
$email=$_POST['email'];
$pwd=$_POST['pword'];
$sql = "INSERT INTO users (uname, email, pwd)
VALUES ('$name', '$email', '$pwd')";
if ($conn->query($sql) === TRUE) {
	include "projrs.html";
} else {
    include "projruns.html";
}
$conn->close();
?>
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