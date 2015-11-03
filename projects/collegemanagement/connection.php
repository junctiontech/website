<?php

$servername = 'localhost';
$dbusername = 'root';
$dbpassword = 'bitnami';
$dbname = 'college_management';
$con = mysql_connect($servername,$dbusername,$dbpassword);
if(!$con)
{
  die('Could not Connected'.mysql_errors());
  
}
mysql_select_db($dbname,$con);

?>