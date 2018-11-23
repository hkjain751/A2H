<?php
//Step1
session_start();
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>BooksForYou-Signup</title>
<style type="text/css">
body {
background-color:#6600CC;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 16px;
line-height: 1.5em;
}
a { text-decoration: none; }
h1 { font-size: 1em; }
h1, p {
margin-bottom: 6px;
}
select {
background-color: #e5e5e5;
margin-bottom: 6px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 14px;
height: 50px;
outline: none;
padding: 0px 12px;
width: 354px;
-webkit-appearance:none;
}
strong {
font-weight: bold;
}
.uppercase { text-transform: uppercase; }

/* ---------- LOGIN ---------- */
#login {
margin: 35px auto;
width: 300px;
}
form fieldset input[type="text"], input[type="password"] {
background-color: #e5e5e5;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 14px;
height: 50px;
outline: none;
padding: 0px 12px;
width: 330px;
-webkit-appearance:none;
}
form fieldset input[type="submit"], input[type="button"] {
background-color: #008dde;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #f4f4f4;
cursor: pointer;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
height: 35px;
text-transform: uppercase;
width: 300px;
-webkit-appearance:none;
}
form fieldset a {
color: #5a5656;
font-size: 10px;
}
form fieldset input[type="date"] {
background-color: #e5e5e5;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 14px;
height: 50px;
outline: none;
padding: 0px 12px;
width: 330px;
-webkit-appearance:none;
}


</style>
</head>
<body>
<div id="login">
<form action="register.php" method="post">
<fieldset>
<center>
<br>
<img src="cr2.jpg" border="3" width="380" height="75"><br><br>
<p><input type="text" name="first" required value="First Name" onBlur="if(this.value=='')this.value='First Name'" onFocus="if(this.value=='First Name')this.value='' "></p>
<p><input type="text" name="last" required value="Last Name" onBlur="if(this.value=='')this.value='Last Name'" onFocus="if(this.value=='Last Name')this.value='' "></p>
<p><div class="blurBg-false" ><div class="element-date"><input class="large" type="date" name="dob" required="required" placeholder="DOB"/></div></div></p>
<p><input type="text" name="email" required value="E-mail" onBlur="if(this.value=='')this.value='E-mail'" onFocus="if(this.value=='E-mail')this.value='' "></p>
<p><input type="text" name="mob" required value="Mobile No." onBlur="if(this.value=='')this.value='Mobile No.'" onFocus="if(this.value=='Mobile No.')this.value='' "></p>
<p><input type="text" name="username" required value="Username" onBlur="if(this.value=='')this.value='Username'" onFocus="if(this.value=='Username')this.value='' "></p>
<p><input type="password" name="password" required value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' "> </p>
<p><select>
  <option value="Q">Select Security Question</option>
  <option value="Q1">What is Your Favorite Color?</option>
  <option value="Q2">What is Your Favorite Animal?</option>
  <option value="Q3">What is Your Favorite Friend Name?</option>
  <option value="Q4">What is Your Other favorite thing Name?</option>
</select></p>
<p><input type="text" name="security" required value="SecurityKey" onBlur="if(this.value=='')this.value='SecurityKey'" onFocus="if(this.value=='SecurityKey')this.value='' "></p>

<p><input type="submit" value="REGISTER" onClick="window.location.href='register.php'"></p>
<p><input type="button" value="LOGIN" onClick="window.location.href='login.php'"></p>
<p><input type="button" value="BACK" onClick="window.location.href='index.php'"></p>
</center>
</fieldset>
</form>
</body>
</html>
 
