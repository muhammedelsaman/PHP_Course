<?php
// get data from file.json 
$datainfile = file_get_contents('file.json');

// convert data to array becuse use in php
$jsonData_arr = json_decode($datainfile, true);
$array = $jsonData_arr;
echo json_encode($array);
?>