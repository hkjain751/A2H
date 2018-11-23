<?php
session_start();
if(isset($_SESSION['username']))
{
$username=$_SESSION['username'];
if(isset($_SESSION['mylink']))
 {
    $link=$_SESSION['mylink'];
   if(isset($_POST['button1']))
      {
		$id=$_POST['button1'];
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
 			$bookimg=$row['bookimg'];
			$bookid=$row['bookid'];
			$booktitle=$row['booktitle'];
			$price=$row['price'];
			$stock=$row['stock'];
			if($stock>0)
			{
			$q1="insert into cart values('$bookimg','$bookid','$booktitle','$price')";
 			$result1=mysqli_query($con1,$q1);
 			$num1=mysqli_num_rows($result1);
			$q="update bookdatabase set stock=$stock-1 where bookid='$bookid'";
 			$result=mysqli_query($con,$q);
 			$num=mysqli_num_rows($result);
			header("location:$link");
			}
			else
			{
			header("location:notavail.php");
			}
		 }
		else
		{
		header("location:$link");
		}
	}
	else
	{
		header("location:$link");
	}
}
else
{
header('location:index.php');
}
}
else
{
header('location:login.php');
}
?>