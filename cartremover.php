<?php
session_start();
 if(isset($_SESSION['username']))
 {
 $username=$_SESSION['username'];
   if(isset($_POST['remove']))
      {
		$id=$_POST['remove'];
		$con = mysqli_connect('localhost','root','','mytest')
		 or die('Error connecting to MySQL server.');
		$con1 = mysqli_connect('localhost',$username,$username,$username)
		 or die('Error connecting to MySQL server.');
 		$fs="select * from bookdatabase where bookid='$id'";
 		$fresult=mysqli_query($con,$fs);
 		$fnum=mysqli_num_rows($fresult);
 		if($fnum==1)
		{
		$row=mysqli_fetch_array($fresult);
		$stock=$row['stock'];
		$bookid=$row['bookid'];
		$q1="delete from cart where bookid='$id'";
 		$result1=mysqli_query($con1,$q1);
 		$num1=mysqli_affected_rows($con);
		$q="update bookdatabase set stock=$stock+$num1 where bookid='$bookid'";
 		$result=mysqli_query($con,$q);
 		$num=mysqli_affected_rows($con);
		header("location:support.php");
		}
		else
		{
		header("location:support.php");
		}
	}
	else
	{
		header("location:support.php");
	}
	}
	else
	{
	header("location:login.php");
	}