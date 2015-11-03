<?php

$user_name = $_POST['user_name'];
$user_password=$_POST['user_password'];
 include("connection.php");

 $sql_check = mysql_query("SELECT * FROM `login` WHERE user_name = '".$user_name."' AND user_password = '".$user_password."' ") or die(mysql_error());

if(mysql_num_rows($sql_check))
{
	 while($result = mysql_fetch_array($sql_check))
		 {
session_start();
$_SESSION["user_name"] = $result["user_name"];
		header("location:students.php");	
		 }
}
else
{
//echo $error = "Email id & password does not match"; 
	 header("location:admin.php");
}?>

  