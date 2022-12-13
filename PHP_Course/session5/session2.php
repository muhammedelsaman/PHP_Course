<?php
session_start();

// delete session 
//session_destroy();

print_r($_SESSION);

// to know session found or not
if(isset($_SESSION['name'])){
	
}

// delete session
unset($_SESSION['name']);
//echo $_SESSION['name'];