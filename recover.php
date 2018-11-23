<?php
//Step1
session_start();
$username=$_POST['username'];
$con = mysqli_connect('localhost','root','','mytest')
 or die('Error connecting to MySQL server.');
 $q="select * from register1 where username='$username'";
 $result=mysqli_query($con,$q);
 $num=mysqli_num_rows($result);
 if($num==1)
 {
 $_SESSION['username']=$username;
  header('location:change.php');
 }
 else
 {
 header('location:forget.php');
 echo "invalid username<br>Please Enter Valid username";
 }
 
?>