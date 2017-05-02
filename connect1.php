<?php
$servername="localhost";
$user="root";
$pass="";
$db="eshop";
if(!@mysql_connect($servername,$user,$pass) || !@mysql_select_db($db) )
die ("Connection error");
else
//echo "connected";
 
?>