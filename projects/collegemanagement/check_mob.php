<?php


if(isSet($_POST['user_mobile']))
{
$user_mobile = $_POST['user_mobile'];
 include("connection.php");

$sql_check = mysql_query("select user_mobile from user where user_mobile='".$user_mobile."'") or die(mysql_error());

if(mysql_num_rows($sql_check))
{
echo '<font color="red">The Mobile Number <STRONG>'.$user_mobile.'</STRONG> is already in use.</font>';
}
else
{
echo 'OK';
}

}

?>