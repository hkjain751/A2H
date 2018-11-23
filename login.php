<?php
//Step1
session_start();
?>
<html>
<body>
<meta charset="utf-8">
<title>BooksForYou-Login</title>
<style type="text/css">
body {
background-color: #6600CC;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 16px;
line-height: 1.5em;
}
a { text-decoration: none;
}
h1 { font-size: 1em; }
h1, p {
margin-bottom: 10px;
}
strong {
font-weight: bold;
}
.uppercase { text-transform: uppercase; }

/* ---------- LOGIN ---------- */
#login {
margin: 50px auto;
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
width: 300px;
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


</style>
</head>
<body>
<div id="login">


<center>
<form action="validation.php" method="post">
<fieldset>
<br>
<img src="butt.png" width="325" height="75">
<br>
<br>
<p><input type="text" name="username" required value="Username" onBlur="if(this.value=='')this.value='Username'" onFocus="if(this.value=='Username')this.value='' " ></p>
<p><input type="password" name="password" required value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' "></p>
<p><a href="forget.php" style="color:#FFFFFF">Forgot Password...?</a></p>
<p><input type="submit" value="Login"></p>
<p><input type="button" value="Signup" onClick="window.location.href='signup.php'"></p>
<p><input type="button" value="Back" onClick="window.location.href='index.php'"></p>
</fieldset>

</form>
</center>
</body>
</html>
