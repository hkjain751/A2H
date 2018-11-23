<?php
//Step1
session_start();
?>
<html>
<title>Forget Password</title>
<body bgcolor="#6666CC">
<center>
<h1><strong>Password Recovery</strong></h1><br>
<form action="recover.php" method="post">
<label>Enter Your Username</label>
<input type="text" name="username" size="25" /><br /><br>
<input type="submit" value="Next" />
<input type="button" value="Back" onClick="window.location.href='login.php'" />
</form>
<br>
</center>
</body>
</html>