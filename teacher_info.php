<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "promas";
$name=$_POST['fname'];
$name.=$_POST['lname'];

$email=$_POST['mail'];
$dept=$_POST['dept'];
$phone=$_POST['phone'];
$psw=$_POST['psw'];
$pass=$_POST['psw-repeat'];


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

$sql = "INSERT INTO teacher VALUES ('$name', '$guideid', '$email', '$dept', '$phone', '$pass', '$username1')";

if (mysqli_query($conn, $sql)) {
    header( "Location:registered_s.html" );
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else{
	echo "Oops! Password did not match! Try again.";
}
?>