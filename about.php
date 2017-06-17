<?php

?>

<html>
<head>
<title>OpenPaste | Contact</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="overlay.css">
<style>
body{
	font-size: 17px;
}
.nav{
	background-color: royalblue;
	padding: 2px;
	font-family: georgia, sans-serif, tahoma, arial;
	overflow: hidden;
	position: fixed;
    top: 0;
    width: 100%;
}

.nav font,a{
	font-size: 20px;
	text-decoration: none;
}
#icomenu{
	width: 30px;
	height: 30px;
	margin-left: 10px;
	margin-right: 10px;
	border: none;
	border-radius: 5px;
	opacity: 0.7;
}
#icomenu:hover{
	cursor: pointer;
	opacity: 1.0;
	box-shadow: 0px 0px 5px black;
}
.overlay-content a{
	color: #ffffff;
}
.overlay-content a:hover{
	color: yellow;
}
.main{
	margin-top: 30px;
}
.content{
	width: 100%;
	height: 100%;
	margin: 0;
	padding: 1em;
	background-color: firebrick;
	color: white;
}
</style>
<script type="text/javascript">
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}
</script>
</head>
<body>

<!-- NAVIGATION -->
<div id="myNav" class="overlay">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<div class="overlay-content">
		<a href="index.php">Home</a><br>
		<a href="https://github.com/NyanSniper101">Our Projects</a><br>
		<a href="about.php">About</a><br>
		<a href="contact.php">Contact</a><br>
	</div>
</div>
<div class="nav">
<img id="icomenu" src="img/menu.png" onclick="openNav();">
<a href="index.php"><font color="white">OpenPaste</font></a>
</div>

<!-- BODY -->
<div class="main">

<div class="content">
<div class="w3-panel w3-red w3-display-container">
  <span onclick="this.parentElement.style.display='none'"
  class="w3-button w3-red w3-large w3-display-topright">x</span>
  <h1>This Website</h1>
  <p>This website is yet another free-time creation of mine. I like to make simple and useful stuff. I made this website just for my needs but decided that other people might want to use it too. I made it because I don't trust website's like Pastebin or Ghostbin or any other bins anymore. I've another service which I personally use. The only difference is that, this website allows the users to choose thier filenames, but my personal service uses random strings to generate filenames automatically.<br>
  I will update this website to do the same in the near future because of the reason that giving options to the users is not the best option! That's because if another user has the same filename, the file which the first user created will be completely over-written. I know that I can give out a prompt to the user to choose another filename, but that is annoying for the user if there are many files.</p>
</div>
<div class="w3-panel w3-red w3-display-container">
  <span onclick="this.parentElement.style.display='none'"
  class="w3-button w3-red w3-large w3-display-topright">x</span>
  <h1>My other website</h1>
  <p>In this other website I write posts about programming, security and other noob stuff. Check it our <a href="http://cyberjokers.pe.hu/">Here</a></p>
</div>
<div class="w3-panel w3-red w3-display-container">
  <span onclick="this.parentElement.style.display='none'"
  class="w3-button w3-red w3-large w3-display-topright">x</span>
  <h1>SourceCode : OpenPaste</h1>
  <p>Since this website is dedicated for everyone out there, I would like to give out the source code for this website. The source code is there on GitHub for everyone to use. You may note that I've used very unconventional and bad logic to make this website(which I don't regret since I don't expect many people using this). So please don't judge :)</p>
  <a href="https://github.com/NyanSniper101">My Github Profile</a><br><br>
</div>
<p>
Thankyou for visiting this website. I hope you liked this one!
</p>
</div>

</div>
</body>
</html>