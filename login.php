<!--
Author:	Gavin Trevino
URL:	http://ectweb.cs.depaul.edu/GTREVIN1/signin.php

Assignment #2:
Develop a simple PHP Web site that uses two of the following statements: 
if else, switch, while loop, if loop.
-->

<!-- file: login.php -->

<html>
<head>
  <title>MY COLLECTION: INVALID LOGIN</title>
  <link rel="stylesheet" type="text/css" href="mycollection.css">
</head>
<body>

<div>
<table align="center">
	<tr>
		<th><button class="button" type="button" onclick="window.location='http://ectweb.cs.depaul.edu/GTREVIN1/signin.php'">Back</button></th>
	</tr>
</table>
</div>

<?php

	//$EMAIL=filter_input(INPUT_POST, "EMAIL");
	$USERNAME=filter_input(INPUT_POST, "USERNAME");
	$PASSWORD=filter_input(INPUT_POST, "PASSWORD");
	
	$conn = new COM("ADODB.Connection") or die("Cannot start ADO");
	$connString = "Provider=Microsoft.Jet.OLEDB.4.0;Data Source=e:\\ectserver\\gtrevin1\\Database\USERS.mdb";
	
	$conn->Open($connString);
	
	$sql="SELECT * FROM USERS WHERE USERNAME='".$USERNAME."' and '".$PASSWORD."'";
	$result=$conn->Execute($sql);
	
if(!$result->EOF){
		//header("Location: mycollection.php?user=$USERNAME");
		header("Location: splash.php?user=$USERNAME");
}		
else
	print "Invalid Login Attempt. Please try again.";

?>
</body>
</html>
