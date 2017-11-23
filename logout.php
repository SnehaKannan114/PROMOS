<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "promas";

if(isset($_GET['logout']))
{
	session_start();
unset($_SESSION['username']);
session_destroy();
echo 'you ahve been logged out';

header("Location: first.html");
exit;
}