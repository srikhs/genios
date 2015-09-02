<?php
ini_set( "display_errors", 0);
ob_start();
$host="curiouscase.db.10816090.hostedresource.com"; // Host name 
$username="curiouscase"; // Mysql username 
$password="S!rikhs123"; // Mysql password 
$db_name="curiouscase"; // Database name 
$tbl_name="members"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
?>
<!DOCTYPE html>
<html lang="en">
<head>

<title>GENIOS 13 - ONLINE SYMPOSIUM - IEEE MADRAS SECTION STUDENT NETWORK</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="" />
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
<!-- fav and touch icons -->
<link rel="shortcut icon" href="assets/ico/favicon.ico" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png" />
<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>
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
	<li class="active"><a href="../register.php">Register</a></li>
			 <li><a href="../events.html">Events</a></li>  
			 <li> <a href="../genios12.html">Genios'12</a></li> 
			  <li><a href="../sponsors.html">Sponsors</a></li> 
			
			 <li><a href="../webinar.html">Webinar</a></li> 
			 <li><a href="../contact.html">Contact</a></li> 
			</ul>
			 	
	
					
			
				
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="span12"> 
			<div class="tagline">
				<div class="row">
					<div class="span12">
					
						<div class="tagline_text">
							<h2><span class="text-success">Registration Error</span> </h2>
							<div class="tag_list">
								
											    <center>
						<?php
ini_set( "display_errors", 0);
ob_start();
$host="curiouscase.db.10816090.hostedresource.com"; // Host name 
$username="curiouscase"; // Mysql username 
$password="S!rikhs123"; // Mysql password 
$db_name="curiouscase"; // Database name 
$tbl_name="members"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Define $myusername and $mypassword 
$myusername=$_POST['email']; 
$mypassword=$_POST['password']; 
$dname=$_POST['display_name'];
$myyear=$_POST['year'];
$mycollege=$_POST['college'];
$section=$_POST['section_name'];
$numb=$_POST['display_no'];
$reg=$_POST['region'];
$coun=$_POST['country'];
$phone=$_POST['pno'];
//$myemail=$_POST['email'];

// To protect MySQL injection (more detail about MySQL injection)

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
echo "User name already Exists!! Please register with a new email id.";

}
else {
$add="INSERT INTO $tbl_name(username, password, dname, year, college, section, numb, reg, coun, phone) values('$myusername','$mypassword','$dname','$myyear','$mycollege','$section','$numb','$reg','$coun','$phone');";
mysql_query($add);

session_register("myusername");
session_register("mypassword"); 
session_register("dname");
session_register("myyear");
session_register("mycollege");
session_register("section");
session_register("numb");
session_register("reg");
session_register("coun");
session_register("phone");
header("location:main_login.php");
}
ob_end_flush();
?>
						<br>
						Follow us at our Facebook page<br>
						<a href="https://www.facebook.com/genios13" target="_blank"><img src="fb.png"><a href="https://www.facebook.com/genios13" target="_blank"></img></a>
			
				
						
  			</center>
  							
							</div>
						</div>
					</div>
					
					
				</div>
			</div>
			
			
			
		</div>
	</div>
</div>
<!-- end tagline -->

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
				<h4>Latest tweets</h4>
				<div class="twitter">
				</div>
				<script type="text/javascript">
						$(document).ready(function(){
						   //TWITTER
							$(".twitter").tweet({
								  join_text: "auto",
								  username: "srikhs",
								  avatar_size: 20,
								  count: 2,
								  auto_join_text_default: "we said,",
								  auto_join_text_ed: "we",
								  auto_join_text_ing: "we were",
								  auto_join_text_reply: "we replied",
								  auto_join_text_url: "we were checking out",
								  loading_text: "loading tweets..."
							});
						});
					</script>
			</div>
		</div>
		<div class="span3">
			<div class="widget">
				<h4>Follow Us</h4>
				<a href="https://www.facebook.com/genios13" target="_blank"><img src="fb_1.png"></img></a><br>
				<a href="http://www.twitter.com/ieeegenios13" target="_blank"><img src="twt_1.png"></img></a>
			
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