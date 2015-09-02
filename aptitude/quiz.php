<?php
ini_set( "display_errors", 0);
session_start();
if(!session_is_registered(myusername)){
header("location:main_login.php");
}
?>

<?php include 'database.php'; 
?>
<?php
session_start();
$minutes = 45; 
$seconds = 0; 
$time_limit = ($minutes * 60) + $seconds + 1; 
if(!isset($_SESSION["start_time2"])){$_SESSION["start_time2"] = mktime(date('G'),date('i'),date('s'),date('m'),date('d'),date('Y')) + $time_limit;} 
?>

<!DOCTYPE html>
<html lang="en">
<head>

<title>APTITUDE CONTEST - GENIOS 13 - ONLINE SYMPOSIUM - IEEE MADRAS SECTION STUDENT NETWORK</title>
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
</div><center><h1>Aptitude Contest</h1></center>
<section id="maincontent">
<div class="container">

	<div class="row">
		<div class="span3">
		

			<aside>
			<a class="btn btn-large btn-block btn-success" href="main_login.php">Home</a>
			<a class="btn btn-large btn-block btn-primary" href="rules.html">Rules</a><br>
<center><input id="txt" readonly>
			<script>
var ct = setInterval("calculate_time()",100); 
function calculate_time()
{

 var end_time = "<?php echo $_SESSION["start_time2"]; ?>"; 
 var dt = new Date(); 
 var time_stamp = dt.getTime()/1000; 
 var total_time = end_time - Math.round(time_stamp); 
 var mins = Math.floor(total_time / 60); 
 var secs = total_time - (mins * 60); 
 if(secs < 10){secs = "0" + secs;}
 document.getElementById("txt").value = mins + ":" + secs; 
 if(mins <= 0)
 {
  if(secs <= 0 || mins < 0)
  {
   clearInterval(ct);
   document.getElementById("txt").value = "0:00";
   document.test5.submit();
   
   }
  }
 }
</script></center>
	<br>
			 			 
		
			
			</aside>
		</div>	
		<div class="span8">

<form id="test5" action="process.php" method="post">

	<div id="test" onmousedown='return false;' onselectstart='return false;'>		
			 
			<h4>1.In Kerala water lilies grow extremely rapidly in the ponds. If the 

growth enlarged so much that each day it covered a surface double 

that which it filled the day before, so that at the end of the 20th

entirely covered the pond,in which it grew,how long would it take for 

two water lilies of the same size at the outset and at the same rate of 

growth to cover the same pond?<br>
<input type="radio" id="1" name="1" value="1"> 18 days<br>
<input type="radio" id="1" name="1" value="2"> 19 days<br>
<input type="radio" id="1" name="1" value="3"> 20 days<br>
<input type="radio" id="1" name="1" value="4"> 21 days<br>
<input type="radio" id="1" name="1" value="5"> None of these<br>
<hr>

2. How much is 1/7+2/(7)^2+1/(7)^3+2/(7)^4+1/(7)^5+2/(7)^6+1/(7)^7

infinity?<br>
<input type="radio" id="2" name="2" value="1"> 5/8<br>
<input type="radio" id="2" name="2" value="2"> 3/16<br>
<input type="radio" id="2" name="2" value="3"> 1/77<br>
<input type="radio" id="2" name="2" value="4"> None of these<br>
<hr>

3. Rancho dropped a ping pong ball from a height of 8ft. and it 

bounces back each time to a height which is one-half of the height of 

the last bounce. How far approximately will the ball have travelled 

when it comes to rest?<br>

<input type="radio" id="3" name="3" value="1"> 64 ft<br>
<input type="radio" id="3" name="3" value="2"> 16 ft<br>
<input type="radio" id="3" name="3" value="3"> 24 ft<br>
<input type="radio" id="3" name="3" value="4"> None of these<br>
<hr>
4. “REMUS LUPIN passed one sixth of his life in childhood,one-
twelfth in youth,and one seventh more as a bachelor;five years after 

his marriage a son was born named Ted Tonks who died four years before his father at half his final age.”

How old was Remus Lupin?<br>
<input type="radio" id="4" name="4" value="1"> 100<br>
<input type="radio" id="4" name="4" value="2"> 75<br>
<input type="radio" id="4" name="4" value="3"> 84<br>
<input type="radio" id="4" name="4" value="4"> 57<br>
<hr>
5. We have an angle of 1(1/2)&deg; 

. How big will it look through a glass that magnifies things three times? <br>
<input type="radio" id="5" name="5" value="1"> 4<br>
<input type="radio" id="5" name="5" value="2"> 9/2<br>
<input type="radio" id="5" name="5" value="3"> 6<br>
<input type="radio" id="5" name="5" value="4"> None of these<br>
<hr>

6. A regular hexahedron is a<br>
<input type="radio" id="6" name="6" value="1"> Rectangle<br>
<input type="radio" id="6" name="6" value="2"> Cube <br>
<input type="radio" id="6" name="6" value="3"> Hexagon <br>
<input type="radio" id="6" name="6" value="4"> Tetrahedron<br>
<hr>
7. A fraction has the denominator greater than its numerator by 6. 

But if we add 8 to the denominator, the value of the fraction would 

become 1/3. What is the fraction?<br>
<input type="radio" id="7" name="7" value="1"> 1/3<br>
<input type="radio" id="7" name="7" value="2"> 7/13<br>
<input type="radio" id="7" name="7" value="3"> 13/8<br>
<input type="radio" id="7" name="7" value="4"> None of these<br>
<hr>
8. Supposing I have 5 billion rupees and I gave away a 500Rs. Note 

every minute, how long would it take me (APPROXIMATELY)to give 

away all the money I have?<br></div>	
</h4>

<input type="hidden" id="8" name="8"  value="8"><input name="8" type="text" id="8" ><hr><br>
	<div id="test" onmousedown='return false;' onselectstart='return false;'>	
<h4>9. Hermoine appeared for her arithmetic exam in which she 

had 100 problems to solve.Her score was 85 though some 

of the questions went wrong. Her score was calculatedby 

subtracting two times the number of wrong answers from the number of correct answers. Can you guess how many problems 

she could solve easily?<br></div></h4>
<input type="hidden" id="9" name="9"  value="9"><input name="9" type="text" id="9" ><hr><br>
	<h4><div id="test" onmousedown='return false;' onselectstart='return false;'>	
10. While upstream Marco and Polo can row a boat in eight and 

four-sevenths minutes. But if there was no stream they could row 

in seven minutes less than it takes them to drift down the stream.

How long it would take them to row down the stream?<br>
<input type="radio" id="10" name="10" value="1">  3(9/17) minutes<br>

<input type="radio" id="10" name="10" value="2">  7(3/7)minutes<br>

<input type="radio" id="10" name="10" value="3">  5(1/4)minutes<br>

<input type="radio" id="10" name="10" value="4">  None of these<br></div>
</h4>
<hr>


<h4>

11. A box contains 12 toffees of three different flavours eclairs, 

caramel and milk-4 each. If Ron had to close his eyes and pick 

them at random, how many toffees must he take out to be sure 

that there are atleast two of one flavour among the toffees he 

picked out?<br>
<input type="radio" id="11" name="11" value="1"> 4  
<br>

<input type="radio" id="11" name="11" value="2"> 5
<br>

<input type="radio" id="11" name="11" value="3"> 6
 
<br>

<input type="radio" id="11" name="11" value="4"> 7<br>
<hr>

12. 2. Two trains a Rajdhani Express and a Shatabdi Express are 

running in the same direction on parallel railway tracks. The 

Rajdhani Express takes three times as long to pass the goods 

train - even when they are going in opposite directions. If the 

train run at uniform speeds, how many times faster than the 

Shatabdi Express is the Rajdhani Express moving?<br>
<input type="radio" id="12" name="12" value="1"> Thrice 
<br>

<input type="radio" id="12" name="12" value="2"> Twice
<br>

<input type="radio" id="12" name="12" value="3"> 4 times
<br>

<input type="radio" id="12" name="12" value="4"> None of these<br>
<hr>
13. In Wimbledon tournament 18 men participated in singles. If a player is eliminated as soon as he loses a match, how many matches are required  to determine the winner?

<br>
<input type="radio" id="13" name="13" value="1">18
<br>

<input type="radio" id="13" name="13" value="2">17
<br>

<input type="radio" id="13" name="13" value="3">16
 
<br>

<input type="radio" id="13" name="13" value="4"> None of these<br>
<hr>
14. A number is greater than the aggregate of its third, tenth and the twefth parts by 58? Which one of the below is it?
<br>
<input type="radio" id="14" name="14" value="1"> 100
<br>

<input type="radio" id="14" name="14" value="2"> 120

<br>

<input type="radio" id="14" name="14" value="3"> 50
 
<br>

<input type="radio" id="14" name="14" value="4"> 60
 <br>
<hr>
15.  There is an even number which when multiplied by 3,then increased by three-fourths of the product, divided by 7,diminished by 52,the square root found, addition of 8,division by 10 gives the number 2? Can you find it?
<br></h4>
<input type="hidden" id="15" name="15"  value="15"><input name="15" type="text" id="15" ><br><hr>
  	


<h4>
16. A two digit number in which the second digit is smaller than its first digit by 4, and the number was divided by the digits’ sum, the quotient would be 7. Can you find it?<br>
<input type="hidden" id="16" name="16"  value="16"><input name="16" type="text" id="16" ><hr><br>
<hr>

17.  Largest number that can be written using the following Roman numerals X C V I L using them only once<br>
<input type="hidden" id="17" name="17"  value="17"><input name="17" type="text" id="17" ><hr><br>


18. In the Malfoy family each daughter has the same number of brothers as she has sisters and each son has twice as many sisters as he has brothers.
Can you guess the number of sons and daughters in the Malfoy family?(answer must be in the format of number of sons and daughters without spaces between them)<br>
<input type="hidden" id="18" name="18"  value="18"><input name="18" type="text" id="18" ><hr><br>
19.Sachin has a glass of Pepsi and a glass of Coca cola and each glass contains the same amount. If he takes  ounces of Pepsi and mixes it with Coca cola and again takes 2 ounces of this mixture and puts in back in Pepsi?What do you think the resulting mixture will be?
<br>
<input type="radio" id="19" name="19" value="1"> It will have more Pepsi than Coca Cola<br>
<input type="radio" id="19" name="19" value="2"> It will have more Coca cola than Pepsi<br>
<input type="radio" id="19" name="19" value="3"> Will contain equal amounts of both <br>
<input type="radio" id="19" name="19" value="4"> none of the above <br>
<hr>
20. Bhuvan wanted to plant some trees so that each was equidistant from every other tree. What will be the largest number he could plant?

<br>


<input type="radio" id="20" name="20" value="1"> 3<br>
<input type="radio" id="20" name="20" value="2"> 4<br>
<input type="radio" id="20" name="20" value="3"> 6<br>
<input type="radio" id="20" name="20" value="4"> 5<br>
<hr>

21.A rectangular sheet of tinfoil has dimensions 32cm by 20cm. Equal squares are cut out at each of the corners. Find the maximum volume of a wooden box which can be lined by bending the tinfoil to cover the base and sides of the box?
<br>
<input type="radio" id="21" name="21" value="1"> 1024 <br>
<input type="radio" id="21" name="21" value="2"> 1152  <br>
<input type="radio" id="21" name="21" value="3"> 512  <br>
<input type="radio" id="21" name="21" value="4"> None of these<br>
<hr>
22. Two creepers one grape and another money plant are both climbing up around a cylindrical tree trunk. The grape twists clockwise and the money plant twists anti-clockwise and both start at the same point from ground. Before they reach the 1st  branch on the tree the grape has made 5 complete twists and the money plant 3 twists. Not counting the bottom the and top, how many times do they cross?

<br>
<input type="radio" id="22" name="22" value="1">  5 <br>
<input type="radio" id="22" name="22" value="2"> 6<br>
<input type="radio" id="22" name="22" value="3"> 7<br>
<input type="radio" id="22" name="22" value="4"> 8<br>
<hr>
23.  Ritik has a box. Two dimensions of the box are 4” and 3”. Find the third dimension of the box so that the space diagonal of the box is an integer.
<br>

<input type="radio" id="23" name="23" value="1">  5”<br>
<input type="radio" id="23" name="23" value="2"> 10”<br>
<input type="radio" id="23" name="23" value="3"> 12”<br>
 <input type="radio" id="23" name="23" value="4"> none of these <br>

<hr><br>
    
<h4>24.A man wants to reach his window which is 40ft above the ground. The distance from the foot of the ladder to the wall is 9ft.how long you think will be the ladder?

<br>
<input type="radio" id="24" name="24" value="1">  41ft<br>
<input type="radio" id="24" name="24" value="2"> 42ft<br>
<input type="radio" id="24" name="24" value="3">  50ft<br>
<input type="radio" id="24" name="24" value="4"> none of the above. <br>
<hr><br></h4>
<h4>    
25.  In Delhi there are total 25 metro railway stations. At each of the 25 stations you can get ticket for any of the other 24 stations. How many different kinds of tickets do you think the booking clerk has to keep?
<br>
<input type="radio" id="25" name="25" value="1">  100<br>

<input type="radio" id="25" name="25" value="2"> 300
<br>

<input type="radio" id="25" name="25" value="3"> 600
<br>

<input type="radio" id="25" name="25" value="4">  49<br>
<hr>
26. A 5ft long staff casts a shadow 2ft long. What will be the height of a steeple whose shadow at the same time is 120ft long?
<br>
<input type="radio" id="26" name="26" value="1"> 200ft
  
<br>

<input type="radio" id="26" name="26" value="2"> 150ft
<br>

<input type="radio" id="26" name="26" value="3"> 180ft
 
<br>

<input type="radio" id="26" name="26" value="4"> 160ft<br>
<hr>

27.   Sachin’s age is 4 times his son Arjun’s age. And in 30 years Arjun’s age will be half of Sachin’s age. How old are Sachin Arjun now?

<br>
<input type="radio" id="27" name="27" value="1"> 60 and 15
<br>

<input type="radio" id="27" name="27" value="2">  80 and 20
<br>

<input type="radio" id="27" name="27" value="3"> 40 and 10
<br>

<input type="radio" id="27" name="27" value="4"> None of these<br>
<hr>
28. If one-fifth of a hive of bees flew to rose, one-third flew to tulip, three times the difference of these two numbers flew to orchid. And one bee continued to fly about, attracted by the fragnance of jasmine what was the total number of bees?
<br>
<input type="radio" id="28" name="28" value="1"> 12
<br>

<input type="radio" id="28" name="28" value="2"> 15
<br>

<input type="radio" id="28" name="28" value="3"> 18
 
<br>

<input type="radio" id="28" name="28" value="4"> 21 <br>
<hr>
29.Niasa decided to drive through the country. The first day she did only 7 miles. One the last day she did 51 miles, increasing her journey 4 mils each day. How many day did she travel?<br>
<input type="hidden" id="29" name="29"  value="29"><input name="29" type="text" id="29" ><hr><br>


30.  How far did she travel?
<input type="hidden" id="30" name="30"  value="30"><input name="30" type="text" id="30" ><br>
<hr>
		<!--Value Number--> <input type="hidden" name="name" value="<?php echo $name ?>" />
         

<input id="sub" class="btn btn-large btn-success" name="submit" type="submit" />
         
              
              </form>
	
</div>

			
	

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

