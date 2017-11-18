<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "promas";
$name=$_POST['fname'];
$name.=$_POST['lname'];
$usn=$_POST['usn'];
$email=$_POST['mail'];
$dept=$_POST['dept'];
$phone=$_POST['phone'];
$psw=$_POST['psw'];
$pass=$_POST['psw-repeat'];

$teamid=$_POST['teamid'];
$guideid=$_POST['guideid'];

$username1=$_POST['username'];


if($psw == $pass)
{
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO student1 VALUES ('$name', '$usn', '$email', '$dept', '$phone', '$pass', '$username1', '$teamid', '$guideid')";

if (mysqli_query($conn, $sql)) {
    echo "<html><body><script>if(!alert('REGISTERED SUCCESSFULLY!')) document.location = 'first.html';</script></body></html>\n";//echo "invalid user name or password";
	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{
	echo"Oops! Password did not match! Try again.";
}
?>