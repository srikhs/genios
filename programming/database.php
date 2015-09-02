<?php
ini_set( "display_errors", 0);
ob_start();
$host="b2bprog.db.10816090.hostedresource.com"; // Host name 
$username="b2bprog"; // Mysql username 
$password="S!rikhs123"; // Mysql password 
$db_name="b2bprog"; // Database name 
 // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
?>