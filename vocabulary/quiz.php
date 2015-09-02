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
if(!isset($_SESSION["start_time37"])){$_SESSION["start_time37"] = mktime(date('G'),date('i'),date('s'),date('m'),date('d'),date('Y')) + $time_limit;} 
?>

<!DOCTYPE html>
<html lang="en">
<head>

<title>VOCABULARY CONTEST - GENIOS 13 - ONLINE SYMPOSIUM - IEEE MADRAS SECTION STUDENT NETWORK</title>
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
</div><center><h1>Vocabulary Contest</h1></center>
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

 var end_time = "<?php echo $_SESSION["start_time37"]; ?>"; 
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
document.test5.submit(); window.location.href = "process.php";
   }
  }   
 }  
  

</script></center>
	<br>
			 			 
		
			
			</aside>
		</div>	
		<div class="span8">

<form id="test5" action="process.php" method="post">

	
    		 
<h4>1.He looked at his watch quickly. 
<br>
<input type="radio" id="1" name="1" value="1"> searched 
<br>
<input type="radio" id="1" name="1" value="2"> reached
<br>
<input type="radio" id="1" name="1" value="3"> glanced 
<br>
<input type="radio" id="1" name="1" value="4"> sobbed
<br>
<hr>

2.The robbers looked through the whole house for money.
<br><br>
<input type="radio" id="2" name="2" value="1"> searched 
<br>
<input type="radio" id="2" name="2" value="2"> glanced 
<br>
<input type="radio" id="2" name="2" value="3"> hunted
<br>
<input type="radio" id="2" name="2" value="4"> sobbed 
<br>
<hr>

3.When she got her test back, she was so disappointed that she threw it away.
<br>
<br>

<input type="radio" id="3" name="3" value="1">searched 
<br>
<input type="radio" id="3" name="3" value="2">poured
<br>
<input type="radio" id="3" name="3" value="3">roared 
<br>
<input type="radio" id="3" name="3" value="4">raced 
<br>
<hr>



4.The waiter put Kuala Beer into my glass.
<br>
<input type="radio" id="4" name="4" value="1"> filled
<br>
<input type="radio" id="4" name="4" value="2"> poured
<br>
<input type="radio" id="4" name="4" value="3"> reached
<br>
<input type="radio" id="4" name="4" value="4"> threw
<br>
<hr>

5.When her dog died, she cried very hard for half an hour.
<br><br>
<input type="radio" id="5" name="5" value="1">yelled
<br>
<input type="radio" id="5" name="5" value="2">screamed 
<br>
<input type="radio" id="5" name="5" value="3">sobbed
<br>
<input type="radio" id="5" name="5" value="4">raced
<br>
<hr>

6.It was foggy and I watched my friend move out of sight into the distance as he walked away.
<br>
<br>
<input type="radio" id="6" name="6" value="1">toss
  <br>
<input type="radio" id="6" name="6" value="2">   throw
<br>
<input type="radio" id="6" name="6" value="3">   disappear
<br>
<input type="radio" id="6" name="6" value="4">  pour
<br>
<hr>


7.Would you like some more to eat. No thank you. I've had more than enough already.
<br>
<br>
<input type="radio" id="7" name="7" value="1">amount
<br>
<input type="radio" id="7" name="7" value="2">race
<br>
<input type="radio" id="7" name="7" value="3">pour
<br>
<input type="radio" id="7" name="7" value="4">plenty
<br>
<hr>
      
      
8.This road turns a lot.

<br>
<input type="radio" id="8" name="8" value="1">races
<br>
<input type="radio" id="8" name="8" value="2">roars
<br>
<input type="radio" id="8" name="8" value="3">admits
<br>
<input type="radio" id="8" name="8" value="4">bends
<br>
<hr><br></h4>
<h4>

9.Please do this now!
<br>
<input type="radio" id="9" name="9" value="1">immediately
<br>
<input type="radio" id="9" name="9" value="2">later
<br>
<input type="radio" id="9" name="9" value="3">sooner
<br>
<input type="radio" id="9" name="9" value="4">whenever
<br>
<hr><br></h4>
<h4>	

10.Someone who is not strong is _______ .
<br>
<input type="radio" id="10" name="10" value="1"> muscular
<br>

<input type="radio" id="10" name="10" value="2"> weak
<br>

<input type="radio" id="10" name="10" value="3"> pale
<br>

<input type="radio" id="10" name="10" value="4"> raced
<br>
<hr>

11.When your face does not have much colour, it is ___ .
<br>
<input type="radio" id="11" name="11" value="1">  pale

<br>

<input type="radio" id="11" name="11" value="2"> excited

<br>
<input type="radio" id="11" name="11" value="3"> calm
<br>
<input type="radio" id="11" name="11" value="4"> seek
<br>
<hr>

12.	Another word for quiet is ___ .
<br>
<br>
<input type="radio" id="12" name="12" value="1"> excited
<br>

<input type="radio" id="12" name="12" value="2"> adventure
<br>

<input type="radio" id="12" name="12" value="3"> pale
<br>

<input type="radio" id="12" name="12" value="4"> calm
<br>
<hr>
13.A story from the past is called 

<br>
<input type="radio" id="13" name="13" value="1"> account
<br>

<input type="radio" id="13" name="13" value="2">article
<br>

<input type="radio" id="13" name="13" value="3">exciting
<br>

<input type="radio" id="13" name="13" value="4">myth 
<br>
<hr>


14.On a clear night, the moon ______ so brightly that you can see your shadow.
<br><br>
<input type="radio" id="14" name="14" value="1"> pours
<br>

<input type="radio" id="14" name="14" value="2"> shines
<br>

<input type="radio" id="14" name="14" value="3"> excites
<br>

<input type="radio" id="14" name="14" value="4"> looks
<br>
<hr>
      
      
15. 15.	A box for keeping valuable things is called a ______ .
<br>
<input type="radio" id="15" name="15" value="1"> valuable Box
<br>
<input type="radio" id="15" name="15" value="2"> lock Box
<br>
<input type="radio" id="15" name="15" value="3"> Blackbox
<br>
<input type="radio" id="15" name="15" value="4"> safe
<br>
<hr>


16.To stick a poster to a wall is the same as to ___ up a poster.

<br><br>
<input type="radio" id="16" name="16" value="1"> shoot<br>
<input type="radio" id="16" name="16" value="2"> put<br>
<input type="radio" id="16" name="16" value="3"> pin<br>
<input type="radio" id="16" name="16" value="4"> fit<br>
<hr>


17.To go from sitting to standing is the same as to ___ up.
<br><br>
<input type="radio" id="17" name="17" value="1"> shoot<br>
<input type="radio" id="17" name="17" value="2"> speak<br>
<input type="radio" id="17" name="17" value="3"> stand<br>
<input type="radio" id="17" name="17" value="4"> grow<br>
<hr>

18.To go from being a child to being an adult is the same as to ___ up.
<br><br>
<input type="radio" id="18" name="18" value="1"> heal<br>
<input type="radio" id="18" name="18" value="2"> Grow<br>
<input type="radio" id="18" name="18" value="3"> hurry<br>
<input type="radio" id="18" name="18" value="4"> junk values<br>
<input type="radio" id="18" name="18" value="4"> kick<br>
<hr>
      
19.To ask someone to talk loudly so that you can hear them is the same as to ___ up.
<br><br>
<input type="radio" id="19" name="19" value="1"> talk<br>
<input type="radio" id="19" name="19" value="2"> ask<br>
<input type="radio" id="19" name="19" value="3"> speak<br>
<input type="radio" id="19" name="19" value="3"> shout<br>
<hr>

20.To rush so that you aren't late is the same as to ___ up.
<br>
<input type="radio" id="20" name="20" value="1"> Hurry
<br>
<input type="radio" id="20" name="20" value="2"> Fill<br>
<input type="radio" id="20" name="20" value="3">Cheer<br>
<input type="radio" id="20" name="20" value="4"> Shout<br>
<hr>


21.Chris told us to hand in our term paper next Monday<br>
<input type="radio" id="21" name="21" value="1">to write our paper by hand<br>
<input type="radio" id="21" name="21" value="2">to submit<br>
<input type="radio" id="21" name="21" value="3">to correct<br>
<input type="radio" id="21" name="21" value="4">to proof-read<br>
<hr>


22.Professor Wilson is a wonderful teacher but there are too many assignments in his course.
<br>
<input type="radio" id="22" name="22" value="1">His marks are always low<br>
<input type="radio" id="22" name="22" value="2">There are too many books to read<br>
<input type="radio" id="22" name="22" value="3">He often gives homework<br>
<input type="radio" id="22" name="22" value="4">There are too many students in his course<br>
<hr>


23.Since I wanted to buy the new course catalog, I had to put in an order through the store manager.
<br>
<input type="radio" id="23" name="23" value="1">The store-manager didn't want to buy it.<br>
<input type="radio" id="23" name="23" value="2">The course catalog was out of print.<br>



<input type="radio" id="23" name="23" value="3">I had to ask for it to be bought for me.<br>
<input type="radio" id="23" name="23" value="4">
The computer was out of order.<br>
<hr><br></h4>    
<h4>

24.Did you know it's down to three of us for the job in the library?
<br>
<input type="radio" id="24" name="24" value="1">The three of us will be working in the library.<br>
<input type="radio" id="24" name="24" value="2">There are only three applicants left.<br>
<input type="radio" id="24" name="24" value="3">The library only hires three students.<br>
<input type="radio" id="24" name="24" value="4">At least three students will be retained.<br>
<hr><br></h4>
<h4>	


25.I'll really have to hit the books this weekend.
<br>
<hr>
<br>
<input type="radio" id="25" name="25" value="1">I have to tidy my room.<br>
<input type="radio" id="25" name="25" value="2">There is a book fair this weekend.<br>
<input type="radio" id="25" name="25" value="3">My books need a cover.<br>
<input type="radio" id="25" name="25" value="4">I have to study.<br>
<hr><br></h4>
<h4>


26.To major in astrophysics you need an extra math course.
<br>

<input type="radio" id="26" name="26" value="1">To get higher grades in astrophysics<br>

<input type="radio" id="26" name="26" value="2"> To specialize in astrophysics<br>

<input type="radio" id="26" name="26" value="3"> To finish your astrophysics paper<br>

<input type="radio" id="26" name="26" value="4"> To better understand the astrophysics course<br>
<hr>


27.Did you know Mark was a sophomore?<br>
<input type="radio" id="27" name="27" value="1"> Mark is a second-year student.<br>
<input type="radio" id="27" name="27" value="2"> Mark majors in philosophy.<br>
<input type="radio" id="27" name="27" value="3"> Mark has a special grant.<br>
<input type="radio" id="27" name="27" value="4">Mark's parents are both university professors.<br><hr>

28.I haven't completed all the prerequisites for this course.<br>

<input type="radio" id="28" name="28" value="1">I still have to fill in some papers.
<br>

<input type="radio" id="28" name="28" value="2">I have to finish some assignments.
<br>

<input type="radio" id="28" name="28" value="3">I haven't done enough research.
 
<br>

<input type="radio" id="28" name="28" value="4"> I have to do some other courses first.
<br>
<hr>


29.This year I will need to find off-campus housing.<br>
<br>
<input type="radio" id="29" name="29" value="1">I will live on the campus.
<br>

<input type="radio" id="29" name="29" value="2">I will buy a house next to the campus.
<br>

<input type="radio" id="29" name="29" value="3">I will live outside the campus.
 
<br>

<input type="radio" id="29" name="29" value="4"> The campus will provide a house for me.
 <br>
<hr>



30.Alice, if I were you, I'd skip the meeting.
<br>
<input type="radio" id="30" name="30" value="1">Alice should prepare for the meeting.
<br>
<input type="radio" id="30" name="30" value="2">Alice should put the meeting on her agenda.
<br>
<input type="radio" id="30" name="30" value="3">The meeting is going to be cancelled. 
<br>
<input type="radio" id="30" name="30" value="4">Alice shouldn't bother to go to the meeting.
<br>
<hr>

</h4>

		<!--Value Number--> <input type="hidden" name="name" value="<?php echo $name ?>" />
         

<input id="mysubmit" class="btn btn-large btn-success" name="mysubmit" type="submit" />
         
              
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

