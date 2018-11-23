<?php
session_start();
if(isset($_SESSION['username']))
{
$username=$_SESSION['username'];
}
else
{
header('location:login.php');
}
?>
<html><title>Logout</title>
<body bgcolor="#0000FF" style="color: #CCCCCC;">
<center>
<br>
<br>
<form action="logoutcomp.php" style="border:thin; border-color:#FFFFFF; ">
<h1>Hello <?php echo $username; ?></h1>
<input type="button" value="logout" onClick="window.location.href='logoutcomp.php'" />
</form>
</center>
</body>
</html>