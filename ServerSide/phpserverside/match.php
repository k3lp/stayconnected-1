<?php

	#Setup variables
	$account = $_POST["Account"];
	#Connect to Database
	$con = mysql_connect("mysql11-int.cp.hostnet.nl","u30984_fhd","stayconnected", "db30984_stayc");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}

	#Select the test database
	mysql_select_db("db30984_stayc", $con);

	#Get the user match details from the database

	$match = mysql_query("SELECT * FROM matches WHERE accountName='$account'");

	#Catch any errors
	if (!$match) {
		echo 'Could not run query: ' . mysql_error();
		exit;
	}


	#Get the first row of the results
	$row = mysql_fetch_row($match);
	if($row)
    		echo $row[1];
	#Output
	#echo $row; 

?>
