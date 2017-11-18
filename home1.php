<?php
echo '<!DOCTYPE html>
<html lang = "en-US">
	<head>
		<meta charset = "UTF-8">
		<title>Home</title>
		<link rel = "stylesheet" type = "text/css"  href = "home.css" />

	</head>
	<body>
		<div id="header">
			<div class="topnav" id="myTopnav">
				<div class="links">
					<a href="#about">About</a>				
					<a href="#forum">Forum</a>
					<a href="#dashboard">Dashboard</a>
					<a href="./home1.html">Home</a>
					
				</div>
				<div class="drop" id="main">
					<a href="#" class="icon" onclick="openSideNav()">&#9776;</a>
				</div> 
				<a href="./profile.html">
					<img src="./img/circle.png" alt = "Profile"/>
				</a>
				
			</div>

			<div id="mySidenav" class="sidenav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeSideNav()">&times;</a>
				<img src="./img/circle.png" alt = "Profile"/>
				<p>Sneha Kannan</p>
				<a href="./profile.html">Profile</a>
				<a href="#">Notifications</a>
				<a href="#">My Projects</a>
				<a href="#">Progress</a>
			</div>
		</div>
		<div id="content">
			<div class="projectTitle">
				<p>
					Project Management System
				</p>
			</div>
		</div>
		<div class="footer">
			<p id="copyright">
				&#169Copyrights BMS College of Engineering
			</p>
			<p id="dept">
				Dept. of ISE
			</p>
		</div>
		<script type = "text/javascript" src="home.js"></script>
	</body>
</html>';
?>