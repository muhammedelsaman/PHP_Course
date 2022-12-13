<?php
// switch
/*$b="home";
switch ($b) {
	case 'home':
		echo "this is home page <br />";
		break;
	case 6:
		echo "b equal 6 <br />";
		break;
	default:
		echo "dd";
		break;
}*/
///////////////////////////////////

// function
/*function kareem($aa=0,$bb=0){
	$var3=$aa+$bb;
	echo $var3;
}
kareem(5,6);
echo "<br />";
kareem(3,4);
echo "<br />";
kareem(40,8);
echo "<br />";
kareem(7,3);
echo "<br />";
kareem(2,4);


$b="my name is  ahmed";
function kareem($a=''){
	echo str_ireplace("ahmed", "***", $a); 
}
kareem($b);


echo "<br />";

$c=10;
function asd($c){
	global $c;
	$c=20;
	echo $c;
}
asd($c);
echo $c;*/
//////////////////////////////////////

/// to get data from another file
include_once ('file1.php');
echo $a+$b;