<!--
Author:	Gavin Trevino
URL:	http://ectweb.cs.depaul.edu/GTREVIN1/signup.php

Assignment #1:
Develop a simple PHP Web site that allows a user to enter some 
information in a HTML form and responds to the user’s input.
-->

<!-- file: signup.php -->

<!DOCTYPE html>
<html>
<head>

  <title>MY COLLECTION: LOGIN</title>
  <link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>

<div>
  <h1>My Collection</h1>
  <h2>Login</h2>
 </div>
 <div>
  	<form action="login.php" method="POST">
	Enter Email: <input type="text" name="EMAIL" required><br><br>
	Enter Password: <input type="password" name="PASSWORD" required><br>
	<input type="submit" name="submit" value="Login">
	</form>
 </div>
  
<!--  <form action="welcome.php" method="GET">
  First Name: <input type="text" name="FirstName" required>
  <br><br>
  Last Name: <input type="text" name="LastName" required>
  <br><br>
  E-mail: <input type="text" name="Email" required>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>
-->


  </body>
</html>
