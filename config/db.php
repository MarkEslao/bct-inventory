<?php 

$con = mysql_connect("localhost","root","kintoz2016");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("distribution", $con);