<!-- file: searchcomic.php -->

<!DOCTYPE html>
<html>
<head>
  <title>MY COLLECTION: ADD COMIC</title>
  <link rel="stylesheet" type="text/css" href="mycollection.css">
</head>
<body>
<h1>My Collection</h1>
<h2>Search Collection</h2>

<ul class="nav">
    <li><button type="button" onclick="window.location='http://ectweb.cs.depaul.edu/GTREVIN1/mycollection.php'">Home</button></li>
    <li><button type="button" onclick="window.location='http://ectweb.cs.depaul.edu/GTREVIN1/addcomic.php'">Add</button><li>
	<li><button type="button" onclick="window.location='http://ectweb.cs.depaul.edu/GTREVIN1/removecomic.php'">Remove</button></li>
	<li><button type="button" onclick="window.location='http://ectweb.cs.depaul.edu/GTREVIN1/searchcomic.php'">Search</button></li>
	</ul>

 <div class="center">
  	<form action="search.php" method="POST">
	Title: <input type="text" name="NAME"><br><br>
	<input type="submit" name="submit" value="Search">
	</form>
	<br>
	<br>
	<img src="images/question_mark.jpg" alt="question_mark"/>
 </div>
  </body>
</html>
