<?php

// to not show error in browser
//if (isset($_COOKIE['id'])) {
//	$var=$_COOKIE['id'];
//} else {
//	echo "cookie not set";
//}

error_reporting(E_ALL);
$val="my name is ahmed";
setcookie('id',$val,time() - (60*60*24*7));
$var=$_COOKIE['id'];
echo $var;
?>