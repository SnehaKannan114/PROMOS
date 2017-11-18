<?php



$hostname="localhost";
	$username="root";
	$password="";
	$dbname="promas";
	$dbconnected=mysqli_connect($hostname, $username, $password);
	$dbselected=mysqli_select_db($dbconnected, $dbname);
	$dbsuccess=true;
	if($dbconnected)
	{
		if(!$dbselected)
		{	
			echo "connection failed";
			$dbsuccess=false;
		}
	}
	else
	{
		echo "connection failed";
		$dbsuccess=false;
	}
	if($dbsuccess)
	{
		echo "connection success";
		$createtab = "CREATE TABLE teacher ( 
		NAME VARCHAR(40) NOT NULL,
		GUIDEID VARCHAR(10) PRIMARY KEY,
		EMAIL VARCHAR(30) NOT NULL,
		DEPT VARCHAR(30) NOT NULL,
		PHONE INT NOT NULL,
		PASSWORD VARCHAR(15) NOT NULL,
		USERNAME VARCHAR(25) NOT NULL
		)";
		echo "creating";
		if(mysqli_query($dbconnected, $createtab))
		{
			echo "  Create Table teacher - Successful";
			
		}
		else "no table created";
		
		
		
		
	
	}
	else "failed";
?>