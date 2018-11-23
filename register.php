<?php
session_start();
if($_POST['first']){
$first=$_POST['first'];
$last=$_POST['last'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$mob=$_POST['mob'];
$username=$_POST['username'];
$password=$_POST['password'];
$security=$_POST['security'];
$con = mysqli_connect('localhost','root','','mytest')
 or die('Error connecting to MySQL server.');
$q="insert into register1 values('$first','$last','$dob','$email','$mob','$username','$password','$security')";
 $result1=mysqli_query($con,$q);
 $num1=mysqli_affected_rows($result1);
 $q1="insert into user values('$username','$password')";
 $result=mysqli_query($con,$q1);
 $num=mysqli_affected_rows($result);
 $q2="create user '$username'@'localhost' identified by '$username'";
 $result2=mysqli_query($con,$q2);
 $q3="GRANT select,delete,update,create,insert ON *.* TO '$username'@'localhost'";
 $result3=mysqli_query($con,$q3);
 $con1= mysqli_connect('localhost',$username,$username)
 or die('Error connecting to MySQL server.');
 $q4="create database $username";
 $result4=mysqli_query($con1,$q4);
 $con2= mysqli_connect('localhost',$username,$username,$username)
 or die('Error connecting to MySQL server.');
 $q5="create table cart(bookimg varchar(100) not null,bookid varchar(6) not null,booktitle varchar(50) not null,price float(8,2) not null)";
 $result5=mysqli_query($con2,$q5);
 
 
 if($result1 && $result5)
 {
 header('location:thankreg.php');
 }
 else
 {
 header('location:errorreg.php');
 }
 mysqli_close($con);
 }
 else
 {
 header("location:signup.php");
 }
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Register</title>
</head>

<body>
</body>
</html>
