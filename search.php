<!-- file: search.php -->

<html>
<head>
  <title>MY COLLECTION: REPORT RESULTS</title>
  <link rel="stylesheet" type="text/css" href="mycollection.css">
</head>
<body>

<ul class="nav">
		<li><button class="center" type="button" onclick="window.location='http://ectweb.cs.depaul.edu/GTREVIN1/searchcomic.php'">Back</button></li>
</ul>
<?php

	$NAME=filter_input(INPUT_POST, "NAME");
	//$ISSUE_NUMBER=filter_input(INPUT_POST, "ISSUE_NUMBER");
	//$PRINTING=filter_input(INPUT_POST, "PRINTING");
	//$MONTH=filter_input(INPUT_POST, "MONTH");
	$YEAR=filter_input(INPUT_POST, "YEAR");
	//$WRITER_FNAME=filter_input(INPUT_POST, "WRITER_FNAME");
	//$WRITER_LNAME=filter_input(INPUT_POST, "WRITER_LNAME");
	//$NOTES=filter_input(INPUT_POST, "NOTES");
	
	$conn = new COM("ADODB.Connection") or die("Cannot start ADO");
	$connString = "Provider=Microsoft.Jet.OLEDB.4.0;Data Source=e:\\ectserver\\gtrevin1\\Database\COMIC_BOOKS.mdb";
	
	$conn->Open($connString);
	
	//If name is searched
	$result = $conn->Execute("SELECT * FROM COMIC_BOOKS WHERE NAME='".$NAME."'"); // AND ISSUE_NUMBER='".$ISSUE_NUMBER."' AND PRINTING='".$PRINTING."'";
	$rsall = $conn->Execute("SELECT * FROM COMIC_BOOKS");

	
while(!$result->EOF){

?>
<div align="left">
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
print " ";
print "$fv2&nbsp";
print " ";
print "$fv3&nbsp";
print " ";
print "$fv4&nbsp";
print " ";
print "$fv5&nbsp";
print " ";
print "$fv6&nbsp";
print " ";
print "$fv7&nbsp";


$result->MoveNext();
}

$result->Close();


?>
</div>
</body>
</html>