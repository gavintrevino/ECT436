<!-- file: login.php -->

<html>
<body>
<?php

	$EMAIL=filter_input(INPUT_POST, "EMAIL");
	$PASSWORD=filter_input(INPUT_POST, "PASSWORD");
	
	$conn = new COM("ADODB.Connection") or die("Cannot start ADO");
	$connString = "Provider=Microsoft.Jet.OLEDB.4.0;Data Source=e:\\ectserver\\gtrevin1\\Database\LOGIN.mdb";
	
	$conn->Open($connString);
	
	$sql="SELECT * FROM LOGIN WHERE EMAIL='".$EMAIL."' and '".$PASSWORD."'";
	$result=$conn->Execute($sql);
	
if(!$result->EOF){
		header("Location: mycollection.php");
}		
else
	print "Invalid Login Attempt. Please try again.";

?>
</body>
</html>