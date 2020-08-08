<?php
include "db_connectp.php";
$tnamex=$_POST["msearch"];
$tnames=[];
$taddrs=[];
$timgs=[];
$sql0="SELECT tname, taddr, timg FROM tracks WHERE tname like '%". $tnamex . "%' ";
$result=$conn->query($sql0);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
	array_push($tnames,$row["tname"]);
	array_push($taddrs,$row["taddr"]);
	array_push($timgs,$row["timg"]);
    }
}else
{$y=1;}
$conn->close();
?>
<html>
<head>
<title>SoundFlow</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="projectstyle.css">
</head>
<body>
<div id="jquery_jplayer_1" class="cp-jplayer"></div>
<div class="header" id="myHeader">
<ul id="ul1">
<li class="sth"></li><li class="sth"></li><li class="sth"></li><li class="sth"></li><li class="sth"></li><li class="sth"></li><li class="sth"></li><li class="sth"></li>
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
</ul></div>
<div style="background-color:#ffffff; margin:75px 325px 0px 325px;top:150px;min-height:100%;opacity:95%;">
<h1 align="center" style="font-family:sans-serif;opacity:100%;">Welcome to SoundFlow, the home to your favourite music.</h1>
<h2 align="center" style="font-family:sans-serif;color:grey;opacity:100%;">Pick your prefered music from our wide array of choices.</h2>
<hr>
<h3 align="left"style="font-family:sans-serif;opacity:100%;">Search Results:</h3>
<?php
$l=count($tnames);
$i=0;
while($i<$l){
echo '
<div style="background-color:#0f0f0f">
<div class="wrapper">
<div class="container"id="sel1"style="background-color:#0f0f0f;" onclick="playsel()">
  <img src="';echo $timgs[$i];echo '"  alt="Avatar" id="image" style="margin:10px 10px 10px 10px;">
  <audio id="audio" src="';echo $taddrs[$i];echo '" >';echo $tnames[$i];echo '</audio>
   <a href="#" class="icon" title="Play">
  <div id="overlay" style="margin:10px 10px 10px 10px;"><span id="icon1"></span>
  </a></div>
</div>
<div class="wtext"><br><br><br><a id="wt1">';echo $tnames[$i];echo'</a></div>
</div>
</div><br>';
$i=$i+1;}
?>
</div>
<ul class="playmusic" id="ul2" style="opacity:100%;">
<li class="sth2"></li><li class="sth2"></li><li class="sth2"></li><li class="sth2"></li><li class="sth2"></li><li class="sth2"></li><li class="sth2"></li>
<li class="sth2">Previous</li>
<li class="sth2" id="pp1"onclick="play()"style="font-size:25px;top:0px;"><span id="icon2"></span></li>
<li class="sth2"onclick="nexts()">Next</li>
<li class="sth2"onclick="repeats()">Repeat</li>
<li class="sth2"><div onclick="setdur()"><input type="range"name="adur"id="adur"min="1"max="300"value="0"style="width:500px;"></div></li>
<li class="sth2" id="dur">0:00</li>
<li class="sth2" id="aname"><b>Not playing anything</b></li>
<li class="sth2" id="vol">Volume</li>
<li class="sth2" id="volu" onclick="volumedown()"><span class="fa fa-volume-down"></span></li>
<li class="sth2" id="vol"><div class="slidecontainer" onclick="setvol()" >
   <input type="range" name="volv"id="volv"min="1" max="100" value="0">
<li class="sth2" id="vold" onclick="volumeup()"><span class="fa fa-volume-up"></span></li>
</div></li>
</ul>
</div>
<script>
var ct=getElementById("icon1").id;
function nexts(){
ct=ct+1;
alert(ct);
}
var audios=1;
var audioe;
function playsel()
{
	audioe=this.audio;
	play();
}
document.getElementById('icon1').className="fa fa-play-circle";
document.getElementById('icon2').className="fa fa-play-circle";
var k=document.getElementById('icon1').className;
var r=0;
var i;
  function play(){
  var i=document.getElementById("audio").innerHTML;
  document.getElementById("aname").innerHTML="<b>"+i+"</b>";
  r=r+1;
  document.getElementById("dur").innerHTML=(audioe.duration/60).toFixed(0)+":"+(((audioe.duration/60).toFixed(2)-(audioe.duration/60).toFixed(0))*100);
  audioe.ontimeupdate=function(){  document.getElementById('adur').value=(audioe.currentTime*300)/audioe.duration;
  var ad=document.getElementById('adur');
  ad.style.background = 'linear-gradient(to right, grey 0%, grey ' + ad.value/3 + '%, #fff ' + ad.value/3 + '%, white 100%)'
  if((audioe.currentTime-audioe.duration==0))
  {
  document.getElementById("wt1").innerHTML=i;
	   document.getElementById('icon1').className="fa fa-play-circle";
	   document.getElementById('icon2').className="fa fa-play-circle";
	   var k=document.getElementById('icon1').className;
  }
  }
  if(audioe.paused){
	   document.getElementById("wt1").innerHTML=i+" - Now playing";
	   document.getElementById('icon1').className="fa fa-pause-circle";
	   document.getElementById('icon2').className="fa fa-pause-circle";
	   var k=document.getElementById('icon1').className;
       audioe.play();
	   }
	   else{
	   document.getElementById("wt1").innerHTML=i+" - Now paused";
	   document.getElementById('icon1').className="fa fa-play-circle";
	   document.getElementById('icon2').className="fa fa-play-circle";
	   var k=document.getElementById('icon1').className;
       audioe.pause();
                 }
				 }
	function volumeup() {
	audioe.volume=audioe.volume+0.1;
	document.getElementById("volv").value=audioe.volume*100;
	}
	function volumedown() {
	audioe.volume=audioe.volume-0.1;
	document.getElementById("volv").value=audioe.volume*100;
	}
	function setvol()
	{
	var x=document.getElementById("volv").value;
	audioe.volume=x/100;
	}
	function setdur()
	{
	var d=document.getElementById('adur').value;
	audioe.currentTime=(audioe.duration*d)/300;
	}
	document.getElementById("adur").value.onupdate = function(){
  this.style.background = 'linear-gradient(to right, grey 0%, grey ' + this.value/3 + '%, #fff ' + this.value/3 + '%, white 100%)'
};
function repeats(){
audioe.currentTime=0;
}
function alertme(){
alert("You have been alerted");
}
   </script>
</body>
</html>
