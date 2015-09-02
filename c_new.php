<?php
ini_set( "display_errors", 0);
ob_start();
$host="genios13.db.10816090.hostedresource.com"; // Host name 
$username="genios13"; // Mysql username 
$password="S!rikhs123"; // Mysql password 
$db_name="genios13"; // Database name 
$tbl_name="contact"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Define $myusername and $mypassword 
$cname=$_POST['cname']; 
$cmail=$_POST['cmail']; 
$cnumber=$_POST['cnumber'];
$cdetail=$_POST['cdetail'];
//$myemail=$_POST['email'];




$add="INSERT INTO $tbl_name(cname, cmail, cnumber, cdetail) values('$cname','$cmail','$cnumber','$cdetail');";
mysql_query($add);



session_register("cname");
session_register("cmail"); 
session_register("cnumber");
session_register("cdetail");

header("location:contact.html");
ob_end_flush();
?>