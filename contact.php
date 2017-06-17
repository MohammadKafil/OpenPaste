<html>
<head>
<title>OpenPaste | Contact</title>
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
	background-color: whitesmoke;
}
form{
	font-size: 17px;
}
#textbox{
	width: 50%;
	padding: 5px;
	text-align: center;
	border: none;
	border-radius: 10px;
	background-color: black;
	color: lime;
}
textarea{
	width: 50%;
	padding: 5px;
	border: none;
	border-radius: 10px;
	background-color: black;
	color: lime;
}
#button{
	padding: 5px 25px;
	margin-top: 5px;
	background-color: royalblue;
	border: none;
	color: white;
	transition-property: background-color;
	transition-duration: 0.6s;
}
#button:hover{
	background-color: black;
	box-shadow: 5px 5px 5px red;
}
a{
	transition-property: color, text-shadow;
	transition-duration: 0.25s;
}
a:hover{
	text-shadow: 5px 5px 5px #333;
	color: red;
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
<p>Don't worry if there is any error message! I get the messages. It's just some small thing which I figured out but lazy to fix.</p>
<?php
error_reporting(0);
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
	<center>
    <form  action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">
    Your name:<br>
    <input id="textbox" name="name" type="text" value="" size="30" placeholder="Your Name" required/><br>
    Your email:<br>
    <input id="textbox" name="email" type="text" value="" size="30" placeholder="Your Email" required/><br>
	Subject/Reason:<br>
    <input id="textbox" name="subject" type="text" value="" size="30" placeholder="Reason To Contact" required/><br>
    Your message:<br>
    <textarea name="message" rows="7" cols="30" placeholder="Your Message" required></textarea><br>
    <input id="button" type="submit" value="Send Email"/>
    </form>
	</center>
    <?php
    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
	$subject=$_REQUEST['subject'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message=="")||($subject==""))
        {
		echo "All fields are required, please fill <a href=\"\">the form</a> again.";
	    }
    else{		
	    $from="From: $name<$email>\r\nReturn-path: $email";
		mail("bhaveshkaul97@outlook.com", $subject, $message, $from);
		echo "<script>alert('Email Sent!');</script>";
	    }
    }  
?>
<br><br>
<h2>Pls. Don't Spam</h2>
Since this is a platform for everyone, I don't expect email spam or other spams from this website. Even if it's spammed, it's not my loss because I don't earn or get anything out of this service. This is for everyone to use. The subdomain is free, the service is made by me using PHP, HTML and CSS. Everyone can learn it on <a href="https://www.w3schools.com/php/default.asp">Here(w3schools PHP link)</a>.<br>You can read more about this service and the thoughts over here: <a href="about.php">About Page</a><bR>
</div>

</div>
</body>
</html>
</html>