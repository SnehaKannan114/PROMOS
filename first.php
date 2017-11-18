
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Login</title>
		<link rel = "stylesheet" type = "text/css"  href = "index.css" />
		<link rel = "stylesheet" type = "text/css"  href = "extra.css" />
	</head>

	<body>
	<script type = "text/javascript" src="home.js"></script>
		<div id="header">
			<div class="topnav" id="myTopnav">
				<div class="links">
					<a href="#about">About Us</a>				
					<a href="#forum">Features</a>
					<a href="./home1.html">Home</a>
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
			<form action="first.php" method="get" >
				
					<input type="submit" class="button loginButton" name="login" value="login">
					<input type="submit" class="button loginButton" name="register" value="register">
				
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
		
	</body>
</html>
<?php

    if(isset($_GET['login'])) {
        onFunc();
    }
    if(isset($_GET['register'])) {
        offFunc();
    }
function onFunc(){
       header("Location:login.php");
  exit();
    }
    function offFunc(){
       header("Location:register.php");
    }
    
?>
