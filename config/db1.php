<?php 

// Database Connection

$host="localhost";
$uname="root";
$pass="kintoz2016";
$database = "distribution";

$connection=mysql_connect($host,$uname,$pass); 

echo mysql_error();

//or die("Database Connection Failed");
$selectdb=mysql_select_db($database) or die("Database could not be selected");	
$result=mysql_select_db($database)
or die("database cannot be selected <br>");