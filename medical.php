<?php
session_start();
$_SESSION['mylink']="medical.php";
$con = mysqli_connect('localhost','root','','mytest')
 or die('Error connecting to MySQL server.');
 $q="select bookid,bookimg,booktitle,price from bookdatabase where bookid LIKE 'md%'";
 $result=mysqli_query($con,$q);
 $num=mysqli_num_rows($result);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #0099FF;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 18px;
  padding: 9px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.button1 {
  display: inline-block;
  border-radius: 5px;
  background-color: #e5e5e5;
  border: none;
  color: #000000;
  text-align: center;
  padding: 16px;
  width: 620px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
</style>
<title>BooksForYou | Medical Books</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="free css templates, web design, 2-column, html css" />
<meta name="description" content="Web Design is a 2-column website template (HTML/CSS) provided by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<!--////// CHOOSE ONE OF THE 3 PIROBOX STYLES  \\\\\\\-->
<link href="css_pirobox/white/style.css" media="screen" title="shadow" rel="stylesheet" type="text/css" />
<!--<link href="css_pirobox/white/style.css" media="screen" title="white" rel="stylesheet" type="text/css" />
<link href="css_pirobox/black/style.css" media="screen" title="black" rel="stylesheet" type="text/css" />-->
<!--////// END  \\\\\\\-->
<!--////// INCLUDE THE JS AND PIROBOX OPTION IN YOUR HEADER  \\\\\\\-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/piroBox.1_2.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$().piroBox({
			my_speed: 600, //animation speed
			bg_alpha: 0.5, //background opacity
			radius: 4, //caption rounded corner
			scrollImage : false, // true == image follows the page, false == image remains in the same open position
			pirobox_next : 'piro_next', // Nav buttons -> piro_next == inside piroBox , piro_next_out == outside piroBox
			pirobox_prev : 'piro_prev',// Nav buttons -> piro_prev == inside piroBox , piro_prev_out == outside piroBox
			close_all : '.piro_close',// add class .piro_overlay(with comma)if you want overlay click close piroBox
			slideShow : 'slideshow', // just delete slideshow between '' if you don't want it.
			slideSpeed : 4 //slideshow duration in seconds(3 to 6 Recommended)
	});
});
</script>
</head>
<body>
<div id="templatemo_body_wrapper">
<div id="templatemo_wrapper">

	<div id="tempaltemo_header">
    	<span id="header_icon"></span>
    	<div id="header_content">
        	<div id="site_title">
				<a href="#" target="_parent"><img src="bnlogo.jpg" alt="" height="160" width="800"/></a>            </div>
            
		  
		</div>
    </div> <!-- end of header -->
<!-- START PAGE SOURCE -->
<div class="main">
  <div class="main_resize">
    <div class="header">
      <div class="menu_nav">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="support.php">Cart</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li><a href="log.php">
		  <?php
		  if(!isset($_SESSION['username']))
		  {
		  echo "Login";
		  }
		  else
		  {
		  echo "Hello <b>".$_SESSION['username']."</b>";
		  }
		  ?>
		  </a></li>
        </ul>
        <div class="clr"></div>
      </div>
      
    </div>
    <div class="content">
      <div class="content_bg">
        <div class="mainbar">
          <div class="article">
            <h2><span>MEDICAL BOOKS :</span></h2>
            <div class="clr"></div>
            <p> <?php
			    if($num>=1)
				 {
				 $count=0;
				 
				 for($i=1;$i<=$num;$i++)
				 {
				   $row=mysqli_fetch_array($result);
				   
				   ?>
				   <form action="bookshower.php" method="post">
				   <button class="button1" style="vertical-align:middle" name="button" value="<?php echo $row['bookid']; ?>" >
				   <img src="
				   <?php
				   $id=$row['bookid'];
				   echo $row['bookimg'];
				   ?>
				   " id="$row['bookid']" name="image"  border="1" style="border-color:#000000" width="55" height="65" align="left"  />
				   <?php
				   echo "<h3><b>".$row['booktitle']."</b></h3>";
				   echo "<br>";
				   echo "Price : <b>".$row['price']."</b>";
				   ?>
				   </button>
				   <br />
				   </form>
				   <form action="cartadder.php" method="post">
				   <center><button class="button" style="vertical-align:middle" name="button1" value="<?php echo $id; ?>" onclick="window.location.href='cartadder.php'" style="width:120px; height:30px; background-color: #F5C810; border: #000000,thin; "><span>Add To Cart</span></button></center></form>
				   	<br /><hr />
				   <?php
				 }
 				 }
			    else
 				{
				 echo "No books are Available At this Time";
				 }
             ?></p>
            
          </div>
        </div>
        <div class="sidebar">
          <div class="gadget">
            <div class="search">
              <form method="get" id="search" action="searcher.php">
                <span>
                <input type="text" value="Search" name="search" id="s" onBlur="if(this.value=='')this.value='Search'" onFocus="if(this.value=='Search')this.value='' " />
                <input name="searchsubmit" type="image" src="images/search.gif" value="Go" id="searchsubmit" class="btn"  />
                </span>
              </form>
              <div class="clr"></div>
            </div>
            <div class="clr"></div>
          </div>
          <div class="gadget">
            <h2><span>Categories</span></h2>
            <div class="clr"></div>
            <ul class="sb_menu">
              <li><a href="novel.php">Novels</a></li>
              <li><a href="engg.php">Engg.Books</a></li>
              <li><a href="commerce.php">Commerce Books</a></li>
              <li class="active"><a href="medical.php">Medical Books</a></li>
              <li><a href="competative.php">Competative Exam Books</a></li>
              <li><a href="skills.php">Books for Skills</a></li>
              <li><a href="other.php">Other Books</a></li>
            </ul>
          </div>
          <div class="gadget">
            <h2><span>Book of Day</span></h2>
            <div class="clr"></div>
            <ul class="ex_menu">
              <li><a href="#"><img src="thewt.JPG" width="200" height="250" alt="" /><br>Author : Aravind Adiga<br>
Country : India<br>Language: English<br>Genre :Picaresque novel</a></li>
            </ul>
          </div>
          <div class="gadget">
            <h2 class="grey"><span>Wise Words</span></h2>
            <div class="clr"></div>
            <div class="testi">
              <p><span class="q"><img src="images/qoute_1.gif" width="20" height="15" alt="" /></span> We can let circumstances rule us, or we can take charge and rule our lives from within. <span class="q"><img src="images/qoute_2.gif" width="20" height="15" alt="" /></span></p>
              <p class="title"><strong>Earl Nightingale</strong></p>
            </div>
          </div>
        </div>
        <div class="clr"></div>
      </div>
    </div>
     <div class="fbg">
      <div class="col c1">
        <h2><span>Popular Books</span></h2>
        <a href="#"><img src="2.jpeg" width="58" height="58" alt="" /></a> <a href="#"><img src="3.jpeg" width="58" height="58" alt="" /></a> <a href="#"><img src="images/pic_3.jpg" width="58" height="58" alt="" /></a> <a href="#"><img src="4.jpeg" width="58" height="58" alt="" /></a> <a href="#"><img src="5.jpeg" width="58" height="58" alt="" /></a> <a href="#"><img src="6.jpeg" width="58" height="58" alt="" /></a> </div>
      <div class="col c2">
        <h2><span>Read</span></h2>
        <p>
          1. A Suitable Boy by Vikram Seth</br>
2.English,August: An Indian Story by Upamanyu Chatterjee</br>
3.The God of Small Things by Arundhati Roy</br>
4.The Inheritance of Loss by Kiran Desai</br>
5.Interpreter of Maladies by Jhumpa Lahiri.</br></p>
      </div>
      <div class="col c3">
        <h2><span>About</span></h2>
        <p>

BookForYou.com is country�s largest online bookstore where consumers can buy books online at best prices in India.

We not only have largest online books� collection by international publishers, but also offer our readers the largest Hindi online books� collection by reputed Indian publishers.
</p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">Copyright &copy; 2017 <a href="#">BooksForYou.com</a> - All Rights Reserved</p>
      <p class="rf"><a href="#">This Website Designed</a> by <a href="#">A2H Team</a></p>
      <div class="clr"></div>
    </div>
  </div>
</div>
<!-- END PAGE SOURCE -->
</body>
</html>
