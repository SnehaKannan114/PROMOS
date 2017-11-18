<!DOCTYPE html>
<html lang = "en-US">
	<head>
		<meta charset = "UTF-8">
		<title>Login</title>
		<link rel = "stylesheet" type = "text/css"  href = "index.css" />
		<link rel = "stylesheet" type = "text/css"  href = "extra.css" />
	</head>

	<body>
		<div id="header">
			<div class="topnav" id="myTopnav">
				<div class="links">
					<a href="#about">About Us</a>				
					<a href="#forum">Features</a>
					<a href="./home.html">Home</a>
				</div>
			
				<div>
					<div class="drop" id="main">
						<a href="#" class="icon" onclick="openSideNav()">&#9776;</a>
					</div> 
				</div>
			</div>		
		</div>

		<div id="content">
			<div class="loginTitle">
				<p>
					Project Management System
				</p>
			</div>
			<p>Join us now to get started on your projects!</p>
			<form method="get" action="./home1.html">
				<p id="buttonLinks">
					<button class="button loginButton">Login</button>
					<button class="button loginButton">Sign Up</button>
				</p>
			</form>	
			
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
</html>
