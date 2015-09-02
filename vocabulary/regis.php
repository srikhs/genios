<!DOCTYPE html>
<html lang="en">
<head>

<title>REGISTRATION - GENIOS 13 - ONLINE SYMPOSIUM - IEEE MADRAS SECTION STUDENT NETWORK</title>
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


<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>

<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />

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
<script>
function validateForm()
{
var x=document.forms["form1"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
}
</script>

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
			 <a href="index.html">Home</a> </li> 
	<li class="active"><a href="register.php">Register</a></li>
			 <li><a href="events.html">Events</a></li>  
			 <li> <a href="genios12.html">Genios'12</a></li> 
			  <li><a href="sponsors.html">Sponsors</a></li> 
			
			 <li><a href="webinar.html">Webinar</a></li> 
			 <li><a href="contact.html">Contact</a></li> 
		  <li>  <a color="blue" href="#" 
  onclick="
    window.open(
      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 
      'facebook-share-dialog', 
      'width=626,height=436'); 
    return false;">
  <img src="share.png" width="100" height="30">
</a></li> 
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
							<h2><span class="text-success">Registration</span> </h2>
							<div class="tag_list">
                        
							
											    <center>
	<h4>Please Enter your Details! </h4>
  	 <form name="form1" method="post" action="register_new.php" >
       <span id="sprytextfield2">
<label for="display_name">Name<span>*</span> (As in IEEE Membership card)</label>
<input type="text" name="display_name" id="display_name" placeholder="Your Name" />
<span class="textfieldRequiredMsg">A value is required.</span></span><br />
<span id="sprytextfield1">
<label for="email">Email id<span>*</span></label>
<input type="text" name="email" id="email" placeholder="Your Email ID" />
<span class="textfieldRequiredMsg">A value is required.</span></span><br />
<span id="sprypassword1">
<label for="password">Password<span>*</span></label>
<input type="password" name="password" id="password" placeholder="Desired Password"/>
<span class="passwordRequiredMsg">A value is required.</span></span><br />
<span id="spryconfirm1">
<label for="cpassword">Confirm Password<span>*</span></label>
<input type="password" name="cpassword" id="cpassword" placeholder="Type your password again"/>
<span class="confirmRequiredMsg">A value is required.</span><span class="confirmInvalidMsg">The values don't match.</span></span><br />


<span id="sprytextfield6">
<label for="display_name">IEEE Membership Number<span>*</span></label>
<input type="text" name="display_no" id="display_no" placeholder="Your IEEE Membership Number"/>
<span class="textfieldRequiredMsg">A value is required.</span></span><br />

<label for="college">Phone Number<span></span></label>
<input type="text" name="pno" id="pno" placeholder="Your Phone Number" /><br>
<span id="sprytextfield7">
<label for="college">Year<span>*</span></label>
<input type="text" name="year" id="year" placeholder="Year[1/2/3/4/Professional Member]" />
<span class="textfieldRequiredMsg">A value is required.</span></span><br />
<span id="sprytextfield4">
<label for="college">Student Branch/Professional Member<span>*</span></label>
<input type="text" name="college" id="college" placeholder="College Name/Professional Member" />
<span class="textfieldRequiredMsg">A value is required.</span></span><br />
<span id="sprytextfield5">
<label for="section">IEEE Section<span>*</span></label>
<input type="text" name="section_name" id="section_name" placeholder="Your IEEE Section Name" />
<span class="textfieldRequiredMsg">A value is required.</span></span><br />

<span id="sprytextfield9">
<label for="college">Country<span>*</span></label>
<input type="text" name="country" id="country" placeholder="Your Country" />
<span class="textfieldRequiredMsg">A value is required.</span></span><br />
<span id="sprytextfield8">
<label for="college">Region<span>*</span></label>

<select name="region" id="region" placeholder="Your College Name" >
<option value="R1">Region 1 (Northeastern USA)</option>
<option value="R2">Region 2 (Eastern USA)</option>
<option value="R3">Region 3 (Southeastern USA)</option>
<option value="R4">Region 4 (Central USA)</option>
<option value="R5">Region 5 (Southwestern USA)</option>
<option value="R6">Region 6 (Western USA)</option>
<option value="R7">Region 7 (Canada)</option>
<option value="R8">Region 8 (Europe, Middle East and Africa)</option>
<option value="R9">Region 9 (Latin America)</option>
<option value="R10">Region 10 (Asia and Pacific)</option>
</select>
<span class="textfieldRequiredMsg">A value is required.</span></span><br />



<input class="btn btn-large btn-success" name="submit" type="submit" />

</form>
						
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
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "password");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8");
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9");
var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytextfield10");
</script>
</footer>
</body>
</html>
