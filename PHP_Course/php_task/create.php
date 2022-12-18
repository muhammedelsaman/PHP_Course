<?php
// read json file
// get data from file.json
$datainfile = file_get_contents('file.json');

// convert data to array becuse use in php
$jsonData_arr = json_decode($datainfile, true);

//data from postman
$createData = json_decode(file_get_contents('php://input'), TRUE);

// to know found data ot not
$foundData = $jsonData_arr;
if($foundData == null) {
	$jsonData_arr[] = array('document'=>array('id'=> '1','payload'=>$createData['document']['payload'],'createAt'=>date("Y-m-d H:i:s")));
}else{
	$jsonData_arr[] = array('document'=>array('id'=> end($jsonData_arr)['document']['id']+1,'payload'=>$createData['document']['payload'],'createAt'=>date("Y-m-d H:i:s")));
}

// encode to json and save to file.json
file_put_contents('file.json', json_encode($jsonData_arr));

// use end to show last record in file json 
echo json_encode(end($jsonData_arr));

?>