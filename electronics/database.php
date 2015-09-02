<?php
ini_set( "display_errors", 0);
ob_start();
$host="electronics123.db.10816090.hostedresource.com"; // Host name 
$username="electronics123"; // Mysql username 
$password="S!rikhs123"; // Mysql password 
$db_name="electronics123"; // Database name 
 // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
?>