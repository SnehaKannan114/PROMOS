<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "promas";


$email=$_SESSION['username'];
$message =$_POST['comment'];



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql1="SELECT GUIDEID FROM teacher WHERE EMAIL='".$email."'";
$result1=mysqli_query($conn, $sql1);
$guideid = mysqli_fetch_array($result1,MYSQLI_ASSOC);
$sql2 = "SELECT EMAIL FROM student1 WHERE GUIDEID='".$guideid['GUIDEID']."'";
$result2=mysqli_query($conn, $sql2);
$emails = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$a=mysqli_num_rows($result2);
$subject = "HTML email";
$message =$_POST['comment'];
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


$headers .= "From: n.s.sushmitha11@gmail.com" . "\r\n";
$count=0;
while($count<$a)
{$count +=1;
$too = "somebody@example.com, somebodyelse@example.com";

$headers .= 'Cc:'.$emails['EMAIL'] . "\r\n";//"Cc: '".$emails['EMAIL']."'" . "\r\n";
echo $headers;
if(mail($too,$subject,$message,$headers))
echo "sent";
else
	echo "not sent";
}






mysqli_close($conn);

?>