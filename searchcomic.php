<!DOCTYPE html>
<html>
<head>
  <title>MY COLLECTION: ADD COMIC</title>
  <link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
<h1>My Collection</h1>
<h2>Search Collection</h2>
<div>
<table>
  <tr>
    <th><button type="button" onclick="window.location='http://ectweb.cs.depaul.edu/GTREVIN1/Database/index.php'">Home</button></th>
    <th><button type="button" onclick="window.location='http://ectweb.cs.depaul.edu/GTREVIN1/Database/signup.php'">Sign Up</button></th>
  </tr>
</table>
</div>
 <div>
  	<form action="searchcomic.php" method="GET">
	Name: <input type="text" name="NAME" required><br><br>
<!--	Issue Number: <input type="ISSUE_NUMBER" name="ISSUE_NUMBER" required><br>
	Printing: <input type="text" name="PRINTING" required><br><br>
	Month: <input type="text" name="MONTH" required><br>
	Year: <input type="text" name="YEAR" required><br><br>
	Writer First Name: <input type="text" name="WRITER_FNAME" required><br>
	Writer Last Name: <input type="text" name="WRITER_LNAME" required><br><br>
	Notes: <input type="text" name="NOTES" required><br> -->
	<input type="submit" name="submit" value="Search">
	
	</form>
 </div>
  </body>
</html>
