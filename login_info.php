<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "promas";

$email=$_POST['uname'];
$pass=$_POST['psw'];



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT EMAIL,PASSWORD FROM student1 WHERE EMAIL='".$email."' AND PASSWORD='".$pass."'";


if ($rows=mysqli_query($conn, $sql)) {
    if(mysqli_num_rows($rows) !=0)
	{	
	 $_SESSION["username"] = $email;
    $_SESSION["logged"] = true;
		header( "Location:http://localhost/myprojects/working_php_code_promas/account.php" );
		exit;
	}
	else 
	{
		 $_SESSION["logged"] = false;
		 
		 echo "<html><body><script>if(!alert('Username or Password was incorrect!')) document.location = 'logreg2.html';</script></body></html>\n";//echo "invalid user name or password";
	//header( "Location:logreg2.html" );
	}	
} else {
	
   // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>