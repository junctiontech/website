<?php

$user_fname=$_POST['user_fname'];
$user_lname=$_POST['user_lname'];
$user_mobile=$_POST['user_mobile'];
$user_email=$_POST['user_email'];
$user_password=$_POST['user_password'];
$user_course=$_POST['user_course'];

include("connection.php");
$qry="insert into user(user_fname,user_lname,user_mobile,user_email,user_password,user_course) value('".$user_fname."','".$user_lname."','".$user_mobile."','".$user_email."','".$user_password."','".$user_course."')";
$res=mysql_query($qry);


?>
<meta http-equiv="Refresh" content="1;URL=index.html" />
