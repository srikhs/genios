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
$minutes = 0; 
$seconds = 30; 
$time_limit = ($minutes * 60) + $seconds + 1; 
if(!isset($_SESSION["jos"])){$_SESSION["jos"] = mktime(date('G'),date('i'),date('s'),date('m'),date('d'),date('Y')) + $time_limit;} 
?>

<!DOCTYPE html>
<html lang="en">
<head>

<title>ELECTRICALS CONTEST - GENIOS 13 - ONLINE SYMPOSIUM - IEEE MADRAS SECTION STUDENT NETWORK</title>
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
</div><center><h1>Electricals Contest</h1></center>
<section id="maincontent">
<div class="container">

	<div class="row">
		<div class="span3">
		

			<aside>
			<a class="btn btn-large btn-block btn-success" href="main_login.php">Home</a>
			<a class="btn btn-large btn-block btn-primary" href="rules.html">Rules</a><br>
<center><input id="txt" readonly>
		
    <script type="text/javascript">

var ct = setInterval("calculate_time()",100);

function calculate_time()
{

 var end_time = "<?php echo $_SESSION["jos"]; ?>"; 
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
   
   document.peter.submit();
   
      }
  }   
 }  
  

</script></center>
	<br>
			 			 
		
			
			</aside>
		</div>	
		<div class="span8">

<form id="peter" name="peter" action="process.php" method="post">

	<div id="test" onmousedown='return false;' onselectstart='return false;'>		
			 
			<h4>1. Three resistance of 6 ohm each are connected as shown in Figure given below. The equivalent resistance between X1 and X2 is<br>
            <img src="images/image08.png"><br>
<input type="radio" id="1" name="1" value="1"> 2 ohm<br>
<input type="radio" id="1" name="1" value="2"> 4 ohm<br>
<input type="radio" id="1" name="1" value="3"> 8 ohm<br>
<input type="radio" id="1" name="1" value="4"> 12 ohm<br>
<hr>

2.  .For the circuit shown in the figure given below, the meter will read
<br> <img src="images/image10.png"><br>
<input type="radio" id="2" name="2" value="1"> 1 A<br>
<input type="radio" id="2" name="2" value="2"> 5 A<br>
<input type="radio" id="2" name="2" value="3"> 10 A<br>
<input type="radio" id="2" name="2" value="4"> 25 A<br>
<hr>

3. For the circuit shown in figure given below, the reading in the ammeter A w ill be <br>
<img src="images/image11.png"><br>

<input type="radio" id="3" name="3" value="1"> 2 A<br>
<input type="radio" id="3" name="3" value="2"> 0.5 A<br>
<input type="radio" id="3" name="3" value="3"> 0.4 A<br>
<input type="radio" id="3" name="3" value="4"> 0.2 A<br>
<hr>
4. We have three resistances of values 2 Ω, 3 Ω and 6 Ω. Which of the following combination will give an effective resistance of 4 Ω?
<br>
<input type="radio" id="4" name="4" value="1"> All the three resistances in parallel<br>
<input type="radio" id="4" name="4" value="2"> 2 Ω resistance in series with parallel combination of 3 Ω and 6 Ω resistance<br>
<input type="radio" id="4" name="4" value="3"> 3 Ω resistance in series with parallel combination of 2 Ω and 6 Ω resistance <br>
<input type="radio" id="4" name="4" value="4"> 6 Ω resistance in series with parallel combination of 2 Ω and 3 Ω resistance. <br>
<hr>
5. Current I in the figure is
<br><img src="images/image12.png"><br>
<input type="radio" id="5" name="5" value="1"> 1.5A<br>
<input type="radio" id="5" name="5" value="2"> 0.5A<br>
<input type="radio" id="5" name="5" value="3"> 3.5A<br>
<input type="radio" id="5" name="5" value="4"> 2.5A<br>
<hr>

6. 6..Twelve wires of same length and same cross-section are connected in the form of a cube as shown in figure below. If the resistance of each wire is R, then the effective resistance between P and Q will be <br>
<img src="images/image13.png"><br>
<input type="radio" id="6" name="6" value="1"> R <br>
<input type="radio" id="6" name="6" value="2"> 5 / 6 R  <br>
<input type="radio" id="6" name="6" value="3"> 3 / 4 R  <br>
<input type="radio" id="6" name="6" value="4"> 4 / 3 R <br>
<hr>
7. What is the current flowing through the load?<br>
<img src="images/image01.png"><br>
<input type="radio" id="7" name="7" value="1"> 6.62A <br>
<input type="radio" id="7" name="7" value="2"> 7mA<br>
<input type="radio" id="7" name="7" value="3"> 6.62mA<br>
<input type="radio" id="7" name="7" value="4"> 7mA<br>
<hr>
8.   Two inductors of values L1 and L2 are coupled by a mutual inductance M. By inter connection
of the two elements, one can obtain a maximum inductance of
<br>

<input type="radio" id="8" name="8" value="1"> L1+ L2 -M <br>
<input type="radio" id="8" name="8" value="2"> L1+ L2<br>
<input type="radio" id="8" name="8" value="3"> L1+ L2+M <br>
 <input type="radio" id="8" name="8" value="4"> L1+ L2+2M <br>

<hr><br></h4>
	
<h4>9. Which of the following bulbs will have the least resistance?
<br>
<input type="radio" id="9" name="9" value="1"> 220V, 60W <br>
<input type="radio" id="9" name="9" value="2"> 220V, 100W <br>
<input type="radio" id="9" name="9" value="3"> 115V, 60W<br>
<input type="radio" id="9" name="9" value="4"> 115V, 100W <br>
<hr><br></h4>
<h4>	
10.  In ac circuit, the ratio of kW/kVA is<br>
<input type="radio" id="10" name="10" value="1"> power factor<br>

<input type="radio" id="10" name="10" value="2"> form factor
<br>

<input type="radio" id="10" name="10" value="3"> load factor
<br>

<input type="radio" id="10" name="10" value="4"> diversity factor<br>
<hr>
11. In a three-phase system, when the loads are perfectly balanced, the neutral current is<br>
<input type="radio" id="11" name="11" value="1"> one-third of maximum  
<br>

<input type="radio" id="11" name="11" value="2"> one-third of maximum
<br>

<input type="radio" id="11" name="11" value="3"> two-thirds of maximum
 
<br>

<input type="radio" id="11" name="11" value="4"> zero<br>
<hr>

12.  In the following circuit by kirchoff’s law it is found that both the voltmeters U1 and U2 reads 0.4 V.
The 1 volt power supply is removed and the terminals are shorted . A magnetic coil is placed in the vicinity of the new circuit such that the rate of change of flux linked with the loop ABCD is 1 volt. Now the connected to the same point. What  are the  new voltmeter readings? <br>
<img src="images/image00.png"><br>
<input type="radio" id="12" name="12" value="1"> voltmeter U1 reads -0.6 V and U2 reads 0.6V 
<br>

<input type="radio" id="12" name="12" value="2"> voltmeter U1 reads 0.4 V and U2 reads -0.4 V
<br>

<input type="radio" id="12" name="12" value="3"> voltmeter U1 reads -0.6 V and U2 reads 0.4 V
<br>

<input type="radio" id="12" name="12" value="4"> voltmeter U1 reads -0.4 V and U2 reads 0.4 V<br>
<hr>
13. Which of the following filaments would draw the most current if they are made of the same material? (thick filaments have lower resistance than thin ones, and long filaments have higher resistance than short ones) <br>
<input type="radio" id="13" name="13" value="1"> a long, thin filament
<br>

<input type="radio" id="13" name="13" value="2"> a long, thick filament
<br>

<input type="radio" id="13" name="13" value="3"> a short, thick filament 
 
<br>

<input type="radio" id="13" name="13" value="4"> as short, thin filament <br>
<hr>
14. .Consider the electric circuit shown in the diagram at the right.
The reading on the voltmeter V is ...<br><img src="images/image03.png"><br>
<input type="radio" id="14" name="14" value="1"> 0 V
<br>

<input type="radio" id="14" name="14" value="2"> 2 V

<br>

<input type="radio" id="14" name="14" value="3"> 4 V
 
<br>

<input type="radio" id="14" name="14" value="4"> 6 V
 <br>
<hr>
15.  Two light bulbs P and Q are identical in all respects, except that P's filament is thicker
than Q's. If the same potential difference is applied to each, then … 
<br>
<input type="radio" id="15" name="15" value="1"> P will burn brighter because it has the greater resistance.
<br>

<input type="radio" id="15" name="15" value="2"> Q will burn brighter because it has the greater resistance

<br>

<input type="radio" id="15" name="15" value="3"> P will burn brighter because it has the lower resistance  
 
<br>

<input type="radio" id="15" name="15" value="4"> Q will burn brighter because it has the lower resistance.
 <br>
<hr>



16.  In the circuit shown the bulb marked 2R has twice the resistance of the bulb marked R. Compared with bulb 2R, the current in bulb R and its brightness compared to the other bulb, is …
<br><img src="images/image02.png"><br>
current in R &nbsp;&nbsp; brightness in 2R
<input type="radio" id="16" name="16" value="1"> larger &nbsp;&nbsp; brighter<br>
<input type="radio" id="16" name="16" value="2"> larger &nbsp;&nbsp; dimmer<br>
<input type="radio" id="16" name="16" value="3"> smaller &nbsp;&nbsp; brighter<br>
<input type="radio" id="16" name="16" value="4"> smaller &nbsp;&nbsp; dimmer<br>
<hr>

17.  Asha connected four identical light bulbs in a circuit as shown to the right. She observes that the brightness of bulb A varies if some of the switches are closed. In which case will bulb A burn brightest?
<br> <img src="images/image04.png"><br>
<input type="radio" id="17" name="17" value="1"> S1 closed with S2 and S3 open<br>
<input type="radio" id="17" name="17" value="2"> S1 and S2 closed with S3 open<br>
<input type="radio" id="17" name="17" value="3"> S1, S2 and S3 closed<br>
<input type="radio" id="17" name="17" value="4"> S1, S2 and S3 open<br>
<hr>

18. For the circuit shown in figure given below, the reading in the ammeter A w ill be <br>
<img src="images/image06.png"><br>

<input type="radio" id="18" name="18" value="1"> Both X and Y will burn brighter<br>
<input type="radio" id="18" name="18" value="2"> Both X and Y will burn less brightly<br>
<input type="radio" id="18" name="18" value="3"> X will burn brighter and Y will not burn<br>
<input type="radio" id="18" name="18" value="4"> Y will burn brighter and X will not burn<br>
<hr>
19. A 200 V electrical outlet is protected by a circuit breaker. The circuit breaker will cut out if the current drawn from the outlets exceeds 16 A. A 1000 W toaster and a 2000 W kettle can be connected to the outlet, either singly, or both in parallel using a double adapter. Which use of the appliances will trip the circuit breaker?
<br><img src="images/image06.png"><br>
<input type="radio" id="19" name="19" value="1"> the toaster used on its own<br>
<input type="radio" id="19" name="19" value="2"> the kettle used on its own<br>
<input type="radio" id="19" name="19" value="3"> the toaster and the kettle together <br>
<input type="radio" id="19" name="19" value="4"> none of the above <br>
<hr>
20. Two light bulbs are marked 230 V; 75 W and 230 V; 150 W. If the first bulb has a resistance R, then the resistance of the second is …
<br>


<input type="radio" id="20" name="20" value="1"> ¼ R<br>
<input type="radio" id="20" name="20" value="2"> ½ R<br>
<input type="radio" id="20" name="20" value="3"> 2 R<br>
<input type="radio" id="20" name="20" value="4"> 4 R<br>
<hr>

21. Two resistors of resistance 2R and 3R are connected in series with a battery, which has an emf of E and an internal resistance R. What is the potential difference across the resistor of resistance 2R?
<br><img src="images/image07.png"><br>
<input type="radio" id="21" name="21" value="1"> E/3 <br>
<input type="radio" id="21" name="21" value="2"> 2E/5  <br>
<input type="radio" id="21" name="21" value="3"> E/2  <br>
<input type="radio" id="21" name="21" value="4"> 2E <br>
<hr>
22. What is value of power factor (cosɸ) for a pure inductive load?
<br>
<input type="radio" id="22" name="22" value="1">  1 <br>
<input type="radio" id="22" name="22" value="2">  lagging power factor<br>
<input type="radio" id="22" name="22" value="3"> leading power factor<br>
<input type="radio" id="22" name="22" value="4"> 0<br>
<hr>
23.  Which loss occurs in the yoke of a DC machine ?
<br>

<input type="radio" id="23" name="23" value="1">  iron loss<br>
<input type="radio" id="23" name="23" value="2"> copper loss<br>
<input type="radio" id="23" name="23" value="3"> heat loss <br>
 <input type="radio" id="23" name="23" value="4"> no loss <br>

<hr><br></h4>
    
<h4>24. A hunting sound is produced in a synchronous motor when
<br>
<input type="radio" id="24" name="24" value="1">  load fluctuates<br>
<input type="radio" id="24" name="24" value="2"> supply frequency varies<br>
<input type="radio" id="24" name="24" value="3">  both (A) and (B) above<br>
<input type="radio" id="24" name="24" value="4"> none of the above. <br>
<hr><br></h4>
<h4>	
25.  Sometimes a reactor is connected in series with a transformer to<br>
<input type="radio" id="25" name="25" value="1">  improve regulation<br>

<input type="radio" id="25" name="25" value="2"> control fault current
<br>

<input type="radio" id="25" name="25" value="3">improve efficiency
<br>

<input type="radio" id="25" name="25" value="4">  improve power factor<br>
<hr>
26. A ACSR conductor has central core of steel surrounded by a bunch of aluminium wires. In such conductors<br>
<input type="radio" id="26" name="26" value="1">Current flows through aluminium conductors only
  
<br>

<input type="radio" id="26" name="26" value="2"> Current flows through steel wire only
<br>

<input type="radio" id="26" name="26" value="3"> Current flows through both steel as well as aluminium conductors
 
<br>

<input type="radio" id="26" name="26" value="4"> Majority of current flows through aluminium and negligible amount flows through steel.<br>
<hr>

27.   An induction motor of 10 HP at 750 rpm has efficiency of 83%. An induction motor of 100 HP at 750 rpm can be expected to have an efficiency of
<br>
<input type="radio" id="27" name="27" value="1"> 81%
<br>

<input type="radio" id="27" name="27" value="2">  83%
<br>

<input type="radio" id="27" name="27" value="3"> 90%
<br>

<input type="radio" id="27" name="27" value="4">  99.9%<br>
<hr>
28.  If VA-VB=6V,  then VC-VD is
<br><img src="images/image09.png"><br>
<input type="radio" id="28" name="28" value="1"> -5V
<br>

<input type="radio" id="28" name="28" value="2"> 2V
<br>

<input type="radio" id="28" name="28" value="3"> 3V
 
<br>

<input type="radio" id="28" name="28" value="4"> 6V <br>
<hr>
29.he effect of increasing the length of the air gap in an induction motor will increase<br>
<input type="radio" id="29" name="29" value="1"> power factor
<br>

<input type="radio" id="29" name="29" value="2"> speed

<br>

<input type="radio" id="29" name="29" value="3"> magnetising current
 
<br>

<input type="radio" id="29" name="29" value="4"> air-gap flux
 <br>
<hr>
30.  the difference between the synchronous speed and the actual speed of an induction motor is known as 
<br>
<input type="radio" id="30" name="30" value="1">  Regulation
<br>

<input type="radio" id="30" name="30" value="2">  back lash
<br>

<input type="radio" id="30" name="30" value="3"> slip 
 
<br>

<input type="radio" id="30" name="30" value="4"> lag
 <br>
<hr>
<strong><h4>Refer to Figure given below for answering the following questions</h4></strong>
<br><img src="images/image14.png"><br>
Five resistances are connected as shown and the combination is connected to a 40 V supply.<br>
31.Voltage between point P and Q will be<br>
<input type="radio" id="31" name="31" value="1"> 40 V
<br>

<input type="radio" id="31" name="31" value="2"> 22.5 V

<br>

<input type="radio" id="31" name="31" value="3"> 20 V
 
<br>

<input type="radio" id="31" name="31" value="4"> 17.5 V
 <br>
<hr>
32.  The current in 4 ohm resistor will be
<br>
<input type="radio" id="32" name="32" value="1">   2.1 A
<br>

<input type="radio" id="32" name="32" value="2">   2.7 A
<br>

<input type="radio" id="32" name="32" value="3"> 3.0 A 
 
<br>

<input type="radio" id="32" name="32" value="4"> 3.5 A
 <br>
<hr>
33. Least current will flow through<br>
<input type="radio" id="33" name="33" value="1">25 ohm resistor
<br>

<input type="radio" id="33" name="33" value="2"> 18 ohm resistor

<br>

<input type="radio" id="33" name="33" value="3"> 10 ohm resistor
 
<br>

<input type="radio" id="33" name="33" value="4">  5 ohm resistor
 <br>
<hr>
34. How much voltage needs to be dropped across resistor R1 in order to make voltage VAB equal to zero and How much resistance must R1 possess in order to drop that amount of voltage? 
<br><img src="images/image15.png"><br>
<input type="radio" id="34" name="34" value="1">  20V,9kΩ
<br>

<input type="radio" id="34" name="34" value="2">  9V,20Ω
<br>

<input type="radio" id="34" name="34" value="3"> 2V,20kΩ
 
<br>

<input type="radio" id="34" name="34" value="4"> 9V,20kΩ

 <br>
<hr>
35. A thermistor is a special resistor that dramatically changes resistance with changes in temperature. Consider the circuit shown below, with two identical thermistors: 
<br><img src="images/image16.png"><br>
The "+to" label in each one shows that they both have positive α coefficients. 
What will the voltmeter register when both thermistors are at equal temperature and when left one is hotter than the right thermistor?<br>

<input type="radio" id="35" name="35" value="1">  Positive voltage & Zero voltage.
<br>

<input type="radio" id="35" name="35" value="2">  Zero voltage & Negative voltage
<br>

<input type="radio" id="35" name="35" value="3"> Negative voltage & Positive voltage
 
<br>

<input type="radio" id="35" name="35" value="4"> Zero voltage & Positive voltage

 <br>
<hr>36. .Determine what a digital voltmeter (DVM) would indicate if connected between the following points in this circuit: 
<br><img src="images/image17.png"><br>
•Red lead on A, black lead on H<br>
•Red lead on C, black lead on G<br>
•Red lead on F, black lead on B<br>
•Red lead on F, black lead on A<br>
<input type="radio" id="36" name="36" value="1">  +12V,0V,0V,-6V
<br>

<input type="radio" id="36" name="36" value="2">  -6V,0V,+12V,0V
<br>

<input type="radio" id="36" name="36" value="3"> -12V,0V,0V,+6V
 
<br>

<input type="radio" id="36" name="36" value="4"> 0V,0V,+12V,-6V

 <br>
<hr>

</h4>
</div>
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

