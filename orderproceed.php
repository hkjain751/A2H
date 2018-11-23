
<?php
session_start();
if(isset($_SESSION['username']))
		  {
		  $user=$_SESSION['username'];
		  if(isset($_SESSION['order']))
		  	{
		 	 $order=$_SESSION['order'];
			 $item=$_SESSION['item'];
			 $amount=$_SESSION['amount'];
			 if(isset($_POST['pincode']))
		  		{
				 $address=$_POST['ad1'].$_POST['ad2'].$_POST['city'].$_POST['state'];
				 $pincode=$_POST['pincode'];
				 $name=$_POST['name'];
				 $mob=$_POST['mob'];
				 $email=$_POST['email'];
				 $con = mysqli_connect('localhost','root','','mytest')
 						or die('Error connecting to MySQL server.');
				$con1 = mysqli_connect('localhost',$user,$user,$user)
 						or die('Error connecting to MySQL server.');
				 $q="insert into orderrecord1 values( 0,'$user','$order',$item,$amount,'$name','$address',$pincode,'$mob','$email')";
 				 $result=mysqli_query($con,$q);
				 $num=mysqli_affected_rows($con);
				 if($num==1)
				 {
				 $q1="delete from cart";
				 $result=mysqli_query($con1,$q1);
				 echo "<center><b>Thanks For Place Order,Your Order Placed Sucessfully.....</b></center>";
				 }
				 else
				 {
				 echo "<center><b>Your Order Failed To Place,Try Again......</b></center>";
				 }
		  		}
			 else
		  		{
		  		header('location:order.php');
		  		}
		  	}
		  else
		  	{
		  	header('location:support.php');
		  	}
		  }
else
	{
	 header('location:login.php');
	}
?>
<html>
<title>ORDER ENDING</title>
<body>
<center>
<input type="button" value="Click Here" onClick="window.location.href='index.php'" />
</center>
</body>
</html>		  