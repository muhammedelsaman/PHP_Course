<?php

// get id 
$id=$_GET['id'];

// data from file.json
$datainfile = file_get_contents('file.json');

// convert data to array becuse use in php
$jsonData_arr = json_decode($datainfile, true);
$array = $jsonData_arr;

// search into array
foreach ( $array as $element ) {
	if ( $id == $element['document']['id']) {
		echo json_encode($element['document']);
		die();
        }
    }
    http_response_code(404);
    echo json_encode(array('message'=>'record not found'));
    die();
?>