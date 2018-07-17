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

  <title>Join the Fun!</title>
  <link rel="stylesheet" type="text/css" href="mycollection.css">
</head>
<body>

<div>
  <h1>Sign Up!</h1>
  <form action="welcome.php" method="GET">
  First Name: <input type="text" name="FirstName" required>
  <br><br>
  Last Name: <input type="text" name="LastName" required>
  <br><br>
  E-mail: <input type="text" name="Email" required>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>
  </body>
</html>
