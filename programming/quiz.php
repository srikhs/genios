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
if(!isset($_SESSION["start_time19"])){$_SESSION["start_time19"] = mktime(date('G'),date('i'),date('s'),date('m'),date('d'),date('Y')) + $time_limit;} 
?>

<!DOCTYPE html>
<html lang="en">
<head>

<title>PROGRAMMING CONTEST - GENIOS 13 - ONLINE SYMPOSIUM - IEEE MADRAS SECTION STUDENT NETWORK</title>
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
</div><center><h1>Programming Contest</h1></center>
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

 var end_time = "<?php echo $_SESSION["start_time19"]; ?>"; 
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

                  alert("Time is Up.Please Submit the Answer.");
                  document.test5.submit();
   window.location.href = "process.php";
   }
  }   
 }  
  

</script></center>
	<br>
			 			 
		
			
			</aside>
		</div>	
		<div class="span8">

<form id="test5" name="test5" action="process.php" method="post">

	<div id="test" onmousedown='return false;' onselectstart='return false;'>		
			 
			<h4>1.What is the output of insertion sort after the 6th iteration given the following sequence of numbers: 3 10 4 6 8 9 7 2 1 5 
<br>
            <br>
<input type="radio" id="1" name="1" value="1"> 3 4 6 8 10 9 7 2 1 5 
<br>
<input type="radio" id="1" name="1" value="2"> 3 4 6 7 8 9 10 2 1 5 
<br>
<input type="radio" id="1" name="1" value="3"> 3 4 10 6 8 9 7 2 1 5 
<br>
<input type="radio" id="1" name="1" value="4"> 3 4 6 8 9 10 7 2 1 5
<br>
<hr>

2. A technique that picks the next adjacent unvisited vertex until reaching a vertex that has no unvisited adjacent vertices is ________ 
<br><br>
<input type="radio" id="2" name="2" value="1"> Breadth-first search 
<br>
<input type="radio" id="2" name="2" value="2"> Depth-first search 
<br>
<input type="radio" id="2" name="2" value="3"> Adjacency matrix 
<br>
<input type="radio" id="2" name="2" value="4"> Adjacency list 
<br>
<hr>

3. code(graph G)   <br>
{ list L = empty   <br>
tree T = empty   <br>
choose a starting vertex x  <br>
search(x)   <br>
while(L is not full)   <br>
remove edge (v, w) from end of L   <br>
if w not yet visited  <br>
 {   <br>
add (v, w) to T   <br>
search(w)  <br>
 }  <br>
 }  <br>
search(vertex v)  <br>
{   <br>
visit v for each edge (v, w)  <br>
 add edge (v, w) to end of L   <br>
}   <br>
The code here can represent  <br>
<br>
<br>

<input type="radio" id="3" name="3" value="1"> Depth first search 
<br>
<input type="radio" id="3" name="3" value="2"> Breadth first search<br>
<input type="radio" id="3" name="3" value="3"> PrimÃ­s algo 
<br>
<input type="radio" id="3" name="3" value="4"> KruskalÃ­s algo 
<br>
<hr>
4.<pre>What is the output of the program?
int main()
{
const char *c1;
char const *c2;
char *const c3;
c1="a";
c2="b";
c3="c";
clrscr();
printf("%c,%c,%c",c1,c2,c3);
return 0;
}</pre>

<br>
<input type="radio" id="4" name="4" value="1"> empty screen<br>
<input type="radio" id="4" name="4" value="2"> error
<br>
<input type="radio" id="4" name="4" value="3"> a,b,c<br>
<input type="radio" id="4" name="4" value="4"> a,b,junk value
<br>
<hr>

5. What is the o/p in large memory model, small memory
model, medium memory model, huge memory model, tiny and
compact memory models?<br>
<pre>int main( )
{
int *p,a;
char *q,b;
clrscr();
printf("%d,%d,",sizeof(p),sizeof(q));
printf("%d,%d",sizeof(a),sizeof(b));
return 0;
}</pre>
(choices) Large <=> Small <=> Medium <=> Huge <=> Tiny <=>
Compact

<br><br>
<input type="radio" id="5" name="5" value="1"> 4,4,2,1 <=> 2,2,2,1 <=> 2,2,2,1 <=> 4,4,2,1 <=>
2,2,2,1 <=> 4,4,2,1
<br>
<input type="radio" id="5" name="5" value="2"> 4,4,4,2 <=> 2,2,2,1 <=> 4,4,2,1 <=> 4,4,4,2 <=>
1,1,1,1 <=> 2,2,2,1
<br>
<input type="radio" id="5" name="5" value="3"> 4,4,2,1 <=> 1,1,1,1 <=> 4,4,2,1 <=> 4,4,2,1 <=>
2,2,2,1 <=> 4,4,2,1
<br>
<input type="radio" id="5" name="5" value="4"> 4,4,2,1 <=> 2,2,2,1 <=> 2,2,2,1 <=> 4,4,2,1 <=>
1,1,1,1 <=> 2,2,2,1
<br>
<hr>

6.What is the output of the program?
<pre>int main()
{
int x,y,z;
clrscr();
//input 2,3
z=scanf("%d,%d",&x,&y);
printf("%d,%d,%d",x,y,z);
return 0;
}</pre>
<br>
<br>
<input type="radio" id="6" name="6" value="1"> 2,3,2
  <br>
<input type="radio" id="6" name="6" value="2">   2,3,3
<br>
<input type="radio" id="6" name="6" value="3">   2,3,1
<br>
<input type="radio" id="6" name="6" value="4">  error
<br>
<input type="radio" id="6" name="6" value="4">  none of the above
<br>
<hr>

7. What is the output of the program?
<pre>int main()
{
int x,y,n=-2;
clrscr();
//input 2,3
printf("%d,",scanf("%d,%d",&x,&y));
printf("%d,%d,",x,y);
printf("haiguys,");
printf("n=%*d",n,n);
return 0;
}</pre>
<br>
<br>
<input type="radio" id="7" name="7" value="1">2,2,3,haiguys,n=-2
<br>
<input type="radio" id="7" name="7" value="2">1,2,3,haiguys,n=2
<br>
<input type="radio" id="7" name="7" value="3">2,2,3,haiguys,n=2
<br>
<input type="radio" id="7" name="7" value="4">garbage value
<br>
<hr>
      
8.What is the output of the program?
<pre>int main()
{
char buf[10]="hai sweeties";
clrscr();
printf("%c,%c,%c",10[buf],*(buf+10),*(10+buf));
return 0;
}</pre><br>

<input type="radio" id="8" name="8" value="1">e,e,e
 <br>
<input type="radio" id="8" name="8" value="2"> garbage value
<br>
<input type="radio" id="8" name="8" value="3"> error
<br>
<input type="radio" id="8" name="8" value="4"> i,i,i
<br>

<hr><br></h4>
	
<h4>9. What is the output of the program?
<pre>int main()
{
int i= - - 5,j={1234},z;
clrscr();
printf("%d,%d,",i,j);
z=0x10+010+10;
printf("%d",z);
return 0;
}
</pre>
<br>
<input type="radio" id="9" name="9" value="1">5,1234,34
<br>
<input type="radio" id="9" name="9" value="2">5,1234,30
<br>
<input type="radio" id="9" name="9" value="3">5,1234,32
<br>
<input type="radio" id="9" name="9" value="4">5,1234,31
<br>
<hr><br></h4>
<h4>	

10.  What is the output of the program?
<pre>int main()
{
int add(void);
int y;
y=add( );
clrscr();
_AX=100;
printf("%d,%d,",y,_AX);
_AX=200;
printf("%d",_AX);
return 0;
}
int add(void)
{
printf("1234");
_AX=123;
}</pre>
<br>
<input type="radio" id="10" name="10" value="1"> 1234,100,200
<br>

<input type="radio" id="10" name="10" value="2"> 1234,garbage values
<br>

<input type="radio" id="10" name="10" value="3"> 123,100,200
<br>

<input type="radio" id="10" name="10" value="4"> 12344,100,200
<br>
<hr>

11.What is the output of the program?
<pre>#include <stdio.h>
void main()
{
int i,x,y,z;
clrscr();
for(i=1,y=0,y++;i>y;i++,y++)
{
y--
printf("Tech Guys");
}
getch();
}</pre>
<br>
<input type="radio" id="11" name="11" value="1">    Tech Guys

<br>

<input type="radio" id="11" name="11" value="2">  No Output

<br>

<input type="radio" id="11" name="11" value="3"> Tech GuysTech GuysTech GuysTech GuysTech Guys...
 
<br>

<input type="radio" id="11" name="11" value="4"> error

<br>
<hr>

12. What is the output of the program?
<pre>#include<stdio.h>
void main()
{
FILE *fp;
clrscr();
fp=fopen("thiru.out","w");
printf("\n%d",flushall());
getch();
}</pre>
<br>
<br>
<input type="radio" id="12" name="12" value="1"> 4
<br>

<input type="radio" id="12" name="12" value="2"> 5
<br>

<input type="radio" id="12" name="12" value="3"> 6
<br>

<input type="radio" id="12" name="12" value="4"> 7
<br>
<hr>
13. What is the output of the program?
<pre>int main()
{
int box, pack;
box=(6,7);
pack=6,7;
clrscr();
printf("%d,%d",box,pack);
return 0;
}</pre>
<br>
<input type="radio" id="13" name="13" value="1"> 6,7
<br>

<input type="radio" id="13" name="13" value="2"> 6,6
<br>

<input type="radio" id="13" name="13" value="3"> 7,6
<br>

<input type="radio" id="13" name="13" value="4"> 7,7 
<br>
<hr>
14.What is the output of the program?
<pre>int main()
{
int x,y,n=-2;
clrscr();
//input 2,3
printf("%d,",scanf("%d,%d",&x,&y));
printf("%d,%d,",x,y);
printf("haiguys,");
printf("n=%*d",n,n);
return 0;
}</pre>
<br><br>
<input type="radio" id="14" name="14" value="1"> 2,2,3,haiguys,n=-2
<br>

<input type="radio" id="14" name="14" value="2"> 1,2,3,haiguys,n=2
<br>

<input type="radio" id="14" name="14" value="3"> 2,2,3,haiguys,n=2
<br>

<input type="radio" id="14" name="14" value="4"> garbage value
<br>
<hr>
      
15. What is the output of the program?
<pre>int main()
{
char buf[10]="hai sweeties";
clrscr();
printf("%c,%c,%c",10[buf],*(buf+10),*(10+buf));
return 0;
}</pre>
<br>
<input type="radio" id="15" name="15" value="1"> e,e,e
<br>

<input type="radio" id="15" name="15" value="2"> garbage value

<br>

<input type="radio" id="15" name="15" value="3"> error
 
<br>

<input type="radio" id="15" name="15" value="4"> i,i,i
 <br>
<hr>



16. What is the output of the program?
<pre>#define add(a,b) (a##b)
int main()
{
clrscr();
printf("%d",add(50,99));
return 0;
}</pre>
<br><br>
<input type="radio" id="16" name="16" value="1"> 50,99<br>
<input type="radio" id="16" name="16" value="2"> 5099<br>
<input type="radio" id="16" name="16" value="3"> 9955<br>
<input type="radio" id="16" name="16" value="4"> error<br>
<hr>

17.What is the output of the program?
<pre>int main()
{
int x,y;
x=0;
clrscr();
y=~x;
printf("%x,%x",x,y);
return 0;
}</pre>
<br><br>
<input type="radio" id="17" name="17" value="1"> 0,1<br>
<input type="radio" id="17" name="17" value="2"> 0,0<br>
<input type="radio" id="17" name="17" value="3"> 0,ffff<br>
<input type="radio" id="17" name="17" value="4"> garbage values<br>
<hr>

18.What is the output of the program?
<pre>#define x 0
#define y '0'
#define z "0"
int main()
{
clrscr();
printf("%d,%d,%d", sizeof(x), sizeof(y),sizeof(z));
return 0;
}</pre>
<br><br>

<input type="radio" id="18" name="18" value="1"> 0,0,0<br>
<input type="radio" id="18" name="18" value="2"> 2,2,2<br>
<input type="radio" id="18" name="18" value="3"> 0,1,garbage value<br>
<input type="radio" id="18" name="18" value="4"> junk values<br>
<input type="radio" id="18" name="18" value="4"> error<br>
<hr>
      
19. What is the output of the program?
<pre># include<stdio.h>
# include<conio.h>
int main()
{
int x=10,y=20;
if(x&0x31)
printf("1");
else
printf("0");
return 0;
}</pre>
<br><br>
<input type="radio" id="19" name="19" value="1"> 0<br>
<input type="radio" id="19" name="19" value="2"> 1<br>
<input type="radio" id="19" name="19" value="3"> can't AND a CPU data
<br>
<hr>
20.What is the output of the program?
<pre># include<stdio.h>
# include<conio.h>
int main()
{
int main[]={1,2,-23,0x12,'d','r','a','j'};
clrscr();
printf("%d",main[1]);
return 0;
}</pre>
<br>
<input type="radio" id="20" name="20" value="1"> error: multiple declaration of main.
<br>
<input type="radio" id="20" name="20" value="2"> 1<br>
<input type="radio" id="20" name="20" value="3"> 2<br>
<input type="radio" id="20" name="20" value="4"> empty screen<br>
<hr>

21. What is the output of bubble sort after the 5th pass given the following sequence of numbers: 25 57 48 37 12 92 86 33 23 15<br>
<input type="radio" id="21" name="21" value="1">48 25 37 12 57 86 33 92 23 15 <br>
<input type="radio" id="21" name="21" value="2">25 48 37 12 57 86 33 23 15 92<br>
<input type="radio" id="21" name="21" value="3">12 25 33 23 15 37 48 57 86 92<br>
<input type="radio" id="21" name="21" value="4">25 12 37 33 23 15 48 57 86 92<br>
<hr>
22. Consider the program segment given below:
<pre> Int i,j,sum;
 for ( i=0 ; i < n; i++) 
{ 
for (j = 1,sum=a[0]; j < = i; j++) 
Sum+=a[j];
 printf(“ sum for sub-array through %d is %d”,i , sum);
 }</pre>
The running time of the above algo is
<br>
<input type="radio" id="22" name="22" value="1"> n.<br>
<input type="radio" id="22" name="22" value="2">n log n <br>
<input type="radio" id="22" name="22" value="3">log n<br>
<input type="radio" id="22" name="22" value="4">n2<br>
<hr>
23. What is the output of the program?
<pre># include<stdio.h>
# include<conio.h>
int main[]={1,2,-23,0x12,'d','r','a','j'};
int main()
{
printf("%d",main[1]);
return 0;
}</pre>
<br>

<input type="radio" id="23" name="23" value="1">1<br>
<input type="radio" id="23" name="23" value="2">error :multiple declaration for main<br>
<input type="radio" id="23" name="23" value="3">2<br>
 <input type="radio" id="23" name="23" value="4">empty screen<br>

<hr><br></h4>
    
<h4>
24.
<pre>main()

int i=5;

printf("%d%d%d%d%d%d",i++,i--,++i,--i,i);

}</pre>
<br>
<input type="radio" id="24" name="24" value="1">45445<br>
<input type="radio" id="24" name="24" value="2">45545<br>
<input type="radio" id="24" name="24" value="3">45454<br>
<input type="radio" id="24" name="24" value="4">44555<br>
<hr><br></h4>
<h4>	
25.<pre>#include

main()

{

int a[2][2][2] = { {10,2,3,4}, {5,6,7,8} };

int *p,*q;

p=&a[2][2][2];

*q=***a;

printf("%d----%d",*p,*q);</pre>
<br>
<hr>
<br>
<input type="radio" id="24" name="24" value="1">SomeGarbageValue---1<br>
<input type="radio" id="24" name="24" value="2">SomeGarbageValue---2<br>
<input type="radio" id="24" name="24" value="3">SomeGarbageValue---3<br>
<input type="radio" id="24" name="24" value="4">SomeGarbageValue---4<br>
<hr><br></h4>
<h4>
26. What is the output of the program?
<pre>main()
{
int x=5.3;
if(x--=4)
printf("A");
else if (++x=5)
printf("B");
else if(++x==7)
printf("C");
return 0;
}</pre><br>

<input type="radio" id="26" name="26" value="1">error: Lvalue required<br>

<input type="radio" id="26" name="26" value="2"> A<br>

<input type="radio" id="26" name="26" value="3"> B<br>

<input type="radio" id="26" name="26" value="4"> C<br>
<hr>

27.   main()
<pre>{
int a,b,c;
a=1; b=2; c=3;
a =+ +a;
b =- -b;
c =- +c;
clrscr();
printf("%d,%d,%d",a,b,c);
return 0;
}</pre><br>
<input type="radio" id="27" name="27" value="1"> 1,2,3<br>
<input type="radio" id="27" name="27" value="2"> 1,2,-3<br>
<input type="radio" id="27" name="27" value="3"> 2,1,-3<br>
<input type="radio" id="27" name="27" value="4">error<br><hr>

28.  What is the output of the program?
<pre>main( )
{
int c[20];
int a,b,i;
char d[10];
clrscr();
printf("\n%u,",&a);
printf("%u,",&b);
printf("%u,",&i);
printf("%u,",&c);
printf("%u",&d);
return 0;
}</pre>
Assume &a=65534
<br><img src="images/image09.png"><br>
<input type="radio" id="28" name="28" value="1">65524,65522,65520,65470,65510
<br>

<input type="radio" id="28" name="28" value="2"> 65524,65523,65521,65470,65510
<br>

<input type="radio" id="28" name="28" value="3"> 65524,65522,65520,65370,65410
 
<br>

<input type="radio" id="28" name="28" value="4"> 65524,65522,65520,65518,65516
<br>
<hr>
29.What is the output of the program?
<pre>void main( )
{
int a[2][2]={ 1,2,3,4};
int i,j,k;
clrscr();
for(j=0;j<2;j++)
for(k=0;k<2;k++)
printf("%d,%d,",k[a[j]],*(*(a+k)+j));
}</pre><br>
<input type="radio" id="29" name="29" value="1"> 1,1,3,3,2,2,3,4,
<br>

<input type="radio" id="29" name="29" value="2"> 1,1,2,3,3,2,4,4,

<br>

<input type="radio" id="29" name="29" value="3"> 1,2,2,2,3,3,4,4,
 
<br>

<input type="radio" id="29" name="29" value="4">1,1,2,3,3,2,4,1,
 <br>
<hr>
30.  What is the output of the program?
<pre>void main()
{
char c[10]="Dass";
clrscr();
printf("%d",printf("\n"));
printf(",%d",printf(",%s",c));
}</pre>
<br>
<input type="radio" id="30" name="30" value="1">  1,5,2,Dass
<br>

<input type="radio" id="30" name="30" value="2">  1,Dass,5
<br>

<input type="radio" id="30" name="30" value="3"> error 
 
<br>

<input type="radio" id="30" name="30" value="4"> garbage value
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

