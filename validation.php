<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$con = mysqli_connect('localhost','root','','mytest')
 or die('Error connecting to MySQL server.');
 $q="Select * from user where username='$username' && password='$password'";
 $result=mysqli_query($con,$q);
 $num=mysqli_num_rows($result);
 if($num==1)
 {
 $_SESSION['username']=$username;
 if(isset($_SESSION['mylink']))
 {
  $link = $_SESSION['mylink'];
  header("location:$link");
 }
 else
 {
  header('location:index.php');
 }
 }
 else
 {
 header('location:logininvalid.php');
 }
 
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>validation</title>
</head>


</html>
