<?php
session_start();
if(isset($_SESSION['mylink']))
{
$link=$_SESSION['mylink'];
}
else
{
header("location:index.php");
}
?>
<html>
<title>Item Not Available</title>
<body bgcolor="#0033FF" style="color:#FFFFFF;">
<center>
<h3>Your Added Item Is Not Available At This Time</h3>
<h4>Please Check Some Time Later</h4><br />
<input type="submit" value="Click Here" onclick="window.location.href='<?php echo $link; ?>'" />
</center>
</body>
</html>