<?php
		
		
	$hostname="localhost";
	$username="root";
	$password="";
	
	$dbconnected=mysqli_connect($hostname, $username, $password);
	
	$dbsuccess=true;
	if($dbconnected)
	{
		$dbsuccess=true;
	}
	else
	{
		echo "connection failed";
		$dbsuccess=false;
	}
	if($dbsuccess)
	{
		$dbname="promas";
		$create_sql="CREATE DATABASE ".$dbname;
		if(mysqli_query($dbconnected,$create_sql))
		{
			echo "CREATE DATABASE SUCCESSFUL";
			
		}
		else {
			echo "create database failed";
		}
	}
	?>