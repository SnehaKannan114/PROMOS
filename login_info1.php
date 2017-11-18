<?php
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

$sql = "SELECT EMAIL,PASSWORD FROM teacher WHERE EMAIL='".$email."' AND PASSWORD='".$pass."'";


if ($rows=mysqli_query($conn, $sql)) {
    if(mysqli_num_rows($rows) !=0)
	{	echo "logged in";
		header( "Location:account1.html" );
		
	}
	else 
	{echo "<html><body><script>alert('Username or Password was incorrect!');</script></body></html>\n";//echo "invalid user name or password";
	//header( "Location:logreg2.html" );
	}
}	
 else {
	
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>