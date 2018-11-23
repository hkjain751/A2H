<?php
session_start();
$username=$_SESSION['username'];
?>
<html>
<title>Change Password</title>
<body bgcolor="#663399">
<center>
<strong><h1>Change Your Password</h1></strong><br />
<form action="confirm.php" method="post">
<h2>Select Security Question</h2>
<select>
  <option value="Q1">What is Your Favorite Color?</option>
  <option value="Q2">What is Your Favorite Animal?</option>
  <option value="Q3">What is Your Favorite Friend Name?</option>
  <option value="Q4">What is Your Other favorite thing Name?</option>
</select>
<h2>Enter Security key</h2>
<input type="text" name="security" size="20" />
<br />
<h2>Enter New Password</h2>
<input type="password" name="newpass" size="20" />

<h2>Confirm Password</h2>
<input type="password" name="confpass" size="20" />

<br /><br>
<input type="submit" value="Change Password" />
<input type="button" value="Back" onClick="window.location.href='forget.php'" />
</form>

</center>
</body>
</html>
