<?php
ini_set( "display_errors", 0);
session_start();
if(!session_is_registered(myusername)){
header("location:main_login.php");
}
?>
 

<!DOCTYPE html>
<html lang="en">
<head>

<title>CURIOUS CASE - GENIOS 13 - ONLINE SYMPOSIUM - IEEE MADRAS SECTION STUDENT NETWORK</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="" />
<link href="favi.ico" rel="shortcut icon" type="image/x-icon"/>
<!-- styles --><link href='http://fonts.googleapis.com/css?family=Exo' rel='stylesheet' type='text/css'>
<link href="assets/css/bootstrap.css" rel="stylesheet" />
<link href="assets/css/bootstrap-responsive.css" rel="stylesheet" />
<link href="assets/css/docs.css" rel="stylesheet" />
<link href="assets/css/prettyPhoto.css" rel="stylesheet" />
<link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet" />
<link href="assets/css/nivo-slider.css" rel="stylesheet" />
<link href="assets/css/style.css" rel="stylesheet" />
<link href="assets/color/success.css" rel="stylesheet" />
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<script src="assets/js/jquery-1.8.2.min.js"></script>
<script src="assets/js/jquery.easing.1.3.js"></script>
<script src="assets/js/google-code-prettify/prettify.js"></script>
<script src="assets/js/modernizr.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/jquery.elastislide.js"></script>
<script src="assets/js/jquery.flexslider.js"></script>
<script src="assets/js/jquery.tweet.js"></script>
<script src="assets/js/jquery.prettyPhoto.js"></script>
<script src="assets/js/application.js"></script>
<script src="assets/js/nivo/jquery.nivo.slider.js"></script>
<script src="assets/js/nivo/setting.js"></script>
<!-- Portfolio hover -->
<script src="assets/js/hover/jquery-hover-effect.js"></script>
<script src="assets/js/hover/setting.js"></script>
<script src="assets/js/custom.js"></script>

<style type="text/css">
#txt {
border:2px solid red;
font-family:verdana;
font-size:16pt;
font-weight:bold;
background: #FECFC7;
width:70px;
text-align:center;
color:#000000;
}
</style>
<!-- fav and touch icons -->
<link rel="shortcut icon" href="assets/ico/favicon.ico" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png" />
<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=619398168122780";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div class="container">
<img src="board.png">
	</div><br>


<div class="jumbotron masthead">
	<div class="container">
		<div class="row">
			<div class="span12">
			 <ul class="nav nav-tabs"> 
			  <li> 
			 <a href="../index.html">Home</a> </li> 
		  <li><a href="../register.php">Register</a></li>
			 <li><a href="../events.html">Events</a></li> 
			 <li><a href="../genios12.html">Genios'12</a></li> 
			 <li><a href="../sponsors.html">Sponsors</a></li> 
			 
				 <li><a href="../webinar.html"> Webinar</a></li> 
			 <li><a href="../contact.html">Contact</a></li> 
			</ul>
			 	
	
					
			
				
			</div>
		</div>
	</div>
</div><center><h1>Curious Case</h1></center>
<section id="maincontent">
<div class="container">



	<div class="row">
		<div class="span3">
			<aside>
			<a class="btn btn-large btn-block btn-success" href="index.html">Home</a>
			<a class="btn btn-large btn-block btn-primary" href="rules.html">Rules</a><br>
	


			 			 
		
			
			</aside>
		</div>
		<div class="span8">
		
			
			<center> 
			 <a href="director.php"><img src="gohunt.jpg" ></a>&nbsp;&nbsp;&nbsp;&nbsp;
			 </center>
		</div>
	</div>
</div>
</section>


<!-- Footer
 ================================================== -->
<footer class="footer">
<div class="container">
	<div class="row">
		<div class="span3">
			<div class="widget">
				
				<address>
				<strong>Contact us</strong><br />
				<a href="mailto:ieeegenios@gmail.com">ieeegenios@gmail.com</a>
				</address>
				
			</div>
		</div>
	
		<div class="span6">
			<div class="widget">
	<a class="twitter-timeline" href="https://twitter.com/IEEEGeniOS" data-widget-id="389629195749322752">Tweets by @IEEEGeniOS</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

    
			</div>
		</div>
		<div class="span3">
			<div class="widget">
			<h4>Follow Us</h4>
    			<a href="https://www.facebook.com/IEEEGeniOS" target="_blank"><img src="fb_1.png"></img></a><br>
				<a href="http://www.twitter.com/ieeegenios" target="_blank"><img src="twt_1.png"></img></a>
			
			</div>
		</div>
	</div>
</div>
<div class="verybottom">
	<div class="container">
		<div class="row">
			<div class="span6">
				<p>
					&copy; IEEE Madras Section Student Network
			</div>
			<div class="span6">
				<p class="pull-right">
					
				</p>
			</div>
		</div>
	</div>
</div>
</footer>
</body>
</html>
