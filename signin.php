<!--
Author:	Gavin Trevino
URL:	http://ectweb.cs.depaul.edu/GTREVIN1/signin.php

Assignment #2:
Develop a simple PHP Web site that uses an if loop and while loop
-->

<!-- file: signin.php -->

<!DOCTYPE html>
<html>
<head>

  <title>MY COLLECTION: LOGIN</title>
  <link rel="stylesheet" type="text/css" href="mycollection.css">
</head>
<body>

<div>
  <h1>My Collection</h1>
  <h2>Login</h2>
 </div>
 <div>
  	<form action="login.php" method="POST">
	Enter Username: <input type="text" name="USERNAME" required><br><br>
	Enter Password: <input type="password" name="PASSWORD" required><br>
	<input type="submit" name="submit" value="Login">
	</form>
 </div>
  
  </body>
</html>
