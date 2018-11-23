<?php
session_start();
$username=$_SESSION['username'];
$security=$_POST['security'];
$newpass=$_POST['newpass'];
$confpass=$_POST['confpass'];
if($newpass==$confpass)
{
$con = mysqli_connect('localhost','root','','mytest')
 or die('Error connecting to MySQL server.');
$q="update register1 set password='$newpass' where username='$username'&& security='$security'";
$resp=mysqli_query($con,$q);
 $num=mysqli_affected_rows($con);
 if($num>=1)
 {
  $q1="update user set password='$newpass' where username='$username'";
  $result=mysqli_query($con,$q1);
  header('location:http://localhost/A2H/sucesschange.php');
  }
  else
  {
  header('location:http://localhost/A2H/failchange.php');
  }
}
else
{
header('location:http://localhost/A2H/change.php');
}
?>
