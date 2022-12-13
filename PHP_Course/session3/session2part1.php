<?php
//array
//$var=array(1,3,5,8,"ahmed",true,12.5,array("a","b","c"));

//echo sort($var);

//echo "<pre>";

//print_r($var2);
//echo "</pre>";


/*$var2=array(1,3,5,8,"ahmed",true,12.5);
	//for ($var=1; $var <=100 ; $var++) { 
	//echo "{$var} <br />";
	//}

	foreach ($var2 as $var5) 
	{
		//echo "this array value".$var5."<br />";
	}	

$var6=array('name'=>'Mohammed yossef','mobile'=>'01008141216');
	foreach ($var6 as $key=>$value) 
	{
		echo $key." : ".$value."<br />";
	}*/


	// if ***
	$a=6;
	$b=8;
	if ($a > $b) {
		echo "a larger than b";
	} elseif ($a==$b) {
		echo "a is equal b";
	} else {
		echo "a is smaller than b";
	}

    echo "<br />";


    // anther way to if
    if($a > $b) echo "a sss";

    echo "<br />";

    ($a > $b) ? $a=4 : $a=20;
    echo $a ;

    echo "<br /><br />";

$a=40;
    while ($a<=50) {
    	echo "a is equal".$a."<br />";
    	$a++;
    }

    echo "<br />";

$b=30;
do {
	echo "b is equal <br />";
} while ($b>40);