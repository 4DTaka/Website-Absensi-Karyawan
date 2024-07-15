<?php 
session_start();
$_SESSION['session_ecode'] = "";
$_SESSION['session_epassword'] = "";
session_destroy();

$cookie_name = "cookie_ecode";
$cookie_value = "";
$time = time() - (60 * 60);
setcookie($cookie_name,$cookie_value,$time,"/");

$cookie_name = "cookie_epassword";
$cookie_value = "";
$time = time() - (60 * 60);
setcookie($cookie_name,$cookie_value,$time,"/");

header("location:loginuser.php");