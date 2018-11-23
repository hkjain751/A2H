<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BooksForYou | Order </title>
</head>
<body bgcolor="#6600CC" text="#FFFFFF" >
<center>
<form action="orderproceed.php" method="post">
<h2>Enter Shipping Details For Place Order</h2>
<table><tr>
<td><label>Name</label></td>
<td><input type="text" name="name" /></td></tr>
<tr>
<td><label>Address Line1</label></td>
<td><input type="text"  name="ad1" /></td>
</tr>
<tr>
<td><label>Address Line2</label></td>
<td><input type="text"  name="ad2" /></td>
</tr>
<tr>
<td><label>City</label></td>
<td><input type="text"  name="city" /></td>
</tr>
<tr>
<td><label>State</label></td>
<td><input type="text"  name="state" /></td>
</tr>
<tr>
<td><label>Pincode</label></td>
<td><input type="text"  name="pincode" /></td>
</tr>
<tr>
<td><label>Mobile No.</label></td>
<td><input type="text"  name="mob" /></td>
</tr>
<tr>
<td><label>E-mail</label></td>
<td><input type="text"  name="email" /></td>
</tr>
<tr></tr>
<tr>
<td><label>Payment Mode</label></td>
<td>
<input type="checkbox" value="Cash On Delivery" />Cash On Delivery<br />
<input type="checkbox" value="Other" />Other
</td>
</tr>
</table>
<input type="submit" value="Place Order" />
</form>
</center>
</body>
</html>
