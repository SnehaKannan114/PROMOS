

<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "promas";
$to=$_POST['selected'];
//echo $to;
$email=$_SESSION['username'];
$message =$_POST['comment'];



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if($to == "1")
{
$sql2 = "SELECT TEAMID FROM student1 WHERE EMAIL='".$email."'";
$result2=mysqli_query($conn, $sql2);
$teamid = mysqli_fetch_array($result2,MYSQLI_ASSOC);
$sql3 = "SELECT EMAIL FROM student1 WHERE TEAMID='".$teamid['TEAMID']."' AND EMAIL !='".$email."'";
$result3=mysqli_query($conn, $sql3);
$emails = mysqli_fetch_array($result3,MYSQLI_ASSOC);
$a=mysqli_num_rows($result3);
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
}
if($to == "2")
{
$sql1 = "SELECT GUIDEID FROM student1 WHERE EMAIL='".$email."'";
$result1=mysqli_query($conn, $sql1);
$guideid = mysqli_fetch_array($result1,MYSQLI_ASSOC);
echo $guideid['GUIDEID'];
$sql4 = "SELECT EMAIL FROM teacher WHERE GUIDEID='".$guideid['GUIDEID']."'";
$result4=mysqli_query($conn, $sql4);
$emails = mysqli_fetch_array($result4,MYSQLI_ASSOC);
$to1="somebody@example.com, somebodyelse@example.com";
$subject = "HTML email";
//echo $emails;
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: n.s.sushmitha11@gmail.com' . "\r\n";

$headers .= 'Cc:'.$emails['EMAIL'] . "\r\n";
//echo $headers;
if(mail($to1,$subject,$message,$headers))
echo "sent";
else echo "not sent";
}
	




mysqli_close($conn);

?>