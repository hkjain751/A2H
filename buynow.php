<?php
session_start();
if(isset($_SESSION['username']))
{ 
$link=$_SESSION['mylink'];
   $user=$_SESSION['username'];
   if(isset($_POST['buynow']))
      {
		$id=$_POST['buynow'];
		$con = mysqli_connect('localhost','root','','mytest')
		 or die('Error connecting to MySQL server.');
		 $con1 = mysqli_connect('localhost',$user,$user,$user)
		 or die('Error connecting to MySQL server.');
 		$fs="select * from bookdatabase where bookid='$id'";
 		$fresult=mysqli_query($con,$fs);
 		$fnum=mysqli_num_rows($fresult);
 		if($fnum==1)
 		 {
		 	$row=mysqli_fetch_array($fresult);
 			$bookimg=$row['bookimg'];
			$bookid=$row['bookid'];
			$booktitle=$row['booktitle'];
			$price=$row['price'];
			$stock=$row['stock'];
			$q="update bookdatabase set stock=$stock-1 where bookid='$bookid'";
 			$result=mysqli_query($con,$q);
 			$num=mysqli_num_rows($result);
			$q1="insert into cart values('$bookimg','$bookid','$booktitle','$price')";
 			$result1=mysqli_query($con1,$q1);
 			$num1=mysqli_num_rows($result1);
			header("location:support.php");
		 }
		else
		{
		header("location:support.php");
		}
	}
	else
	{
		header("location:index.php");
	}
   }
   else
	{
	header("location:$link");
	}
	

?>