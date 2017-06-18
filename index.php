<?php
header("X-XSS-Protection: 1"); // useless but still using..maybe will work
date_default_timezone_set("America/New_York");
function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}
$user_ip = getUserIP();

if($_POST)
{
	$title = $_POST['postTitle'];
	$content = $_POST['postContent'];
	$filename = $_POST['postFilename'];
	$fname = $filename;
	$filename = 'pastes/' . $filename . '.html';
	$refresh = "Refresh:0; url=" . $filename;
	$date = date("Y.m.d");
	$time = date("h:i:sa");
	
	if(strlen($title) > 100)
	{
		echo "<script>alert('Max 100 Characters Allowed!');</script>";
	}
	else if(strlen($title) <= 100)
	{
		$content = nl2br($content);
		$content = filter_var($content, FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_SANITIZE_ENCODED);
		$title = filter_var($title, FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_SANITIZE_ENCODED);
		$fname = filter_var($fname, FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_SANITIZE_ENCODED);
		$link = 'http://openpaste.000webhostapp.com/' . $filename;
		$handle = fopen($filename, "a");
		fwrite($handle, "<html><head><title>" . $fname . "</title><link rel='stylesheet' href='style.css'></head><body><h1>" . $title . "</h1>" . "<h2>Your File Link: " . $link . "</h2><p>" . $content . "</p><br>" . "DATE: " . $date . "<br>TIME: " . $time . "<br></body></html>");
		fclose($handle);
			
		$f = fopen("ip.txt", "a");
		fwrite($f, $user_ip . "\n");
		fclose($f);
		header($refresh);
	}
}

?>

<html>
<head>
<title>OpenPaste</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="overlay.css">
<style>
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
}
form{
	margin-top: 30px;
}
form input{
	width: 50%;
	text-align:center;
	border:none;
	border-radius: 10px;
	padding: 2px;
	margin-top: 5px;
}
form textarea{
	width: 50%;
	margin-top: 10px;
	border: none;
	border-radius: 10px;
	padding: 2px;
	height: 50%;
}
form button{
	border: none;
	background-color: lime;
	color: black;
	padding: 5px 25px;
	margin-top: 5px;
}
form button:hover{
	background-color: royalblue;
	color: white;
	cursor: pointer;
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
<center>
<form action="" method="POST">
<input type="text" name="postTitle" placeholder="Your Title"><br>
<textarea rows="" cols="" name="postContent" placeholder="Your Paste.."></textarea><br>
<input type="text" name="postFilename" placeholder="Enter Filename"><br>
<button type="submit" name="submit" value="Submit">Create Post</button>
</form>
</center>
</div>

</div>
</body>
</html>