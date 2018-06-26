<!-- file: search.php -->

<html>
<body>
<?php

	$NAME=filter_input(INPUT_POST, "NAME");
	//$ISSUE_NUMBER=filter_input(INPUT_POST, "ISSUE_NUMBER");
	//$PRINTING=filter_input(INPUT_POST, "PRINTING");
	//$MONTH=filter_input(INPUT_POST, "MONTH");
	//$YEAR=filter_input(INPUT_POST, "YEAR");
	//$WRITER_FNAME=filter_input(INPUT_POST, "WRITER_FNAME");
	//$WRITER_LNAME=filter_input(INPUT_POST, "WRITER_LNAME");
	//$NOTES=filter_input(INPUT_POST, "NOTES");
	
	$conn = new COM("ADODB.Connection") or die("Cannot start ADO");
	$connString = "Provider=Microsoft.Jet.OLEDB.4.0;Data Source=e:\\ectserver\\gtrevin1\\Database\COMIC_BOOKS.mdb";
	
	$conn->Open($connString);
	
	
	$result = $conn->Execute("SELECT * FROM COMIC_BOOKS WHERE NAME='".$NAME."'"); // AND ISSUE_NUMBER='".$ISSUE_NUMBER."' AND PRINTING='".$PRINTING."'";
	//$result=$conn->Execute($sql);
	
while(!$result->EOF){
		//header("Location: mycollection.php");
		
		
//else
	//print "Invalid Login Attempt. Please try again.";

?>
<div>
<?php
//$NAME
$fv1=$result->Fields("NAME"); 
//$ISSUE_NUMBER
$fv2=$result->Fields("ISSUE_NUMBER"); 
//$PRINTING
$fv3=$result->Fields("PRINTING"); 
//$MONTH
$fv4=$result->Fields("MONTH"); 
//$YEAR
$fv5=$result->Fields("YEAR");
//$WRITER_FNAME
$fv6=$result->Fields("WRITER_FNAME");
//$WRITER_LNAME
$fv7=$result->Fields("WRITER_LNAME");


print "$fv1&nbsp";
print "$fv2&nbsp";
print "$fv3&nbsp";
print "$fv4&nbsp";
print "$fv5&nbsp";
print "$fv6&nbsp";
print "$fv7&nbsp";


$result->MoveNext();
}

$result->Close();


?>
</div>
</body>
</html>