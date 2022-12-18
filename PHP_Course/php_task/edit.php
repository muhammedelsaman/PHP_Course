<?php
// read json file
$id=$_GET['id'];
$data = file_get_contents('file.json');

//data from postman
$udateData = json_decode(file_get_contents('php://input'), TRUE);


// decode json to associative array
$json_arr = json_decode($data, true);

$isFound = false;


foreach ($json_arr as $key => $value)
{
    if ($value['document']['id'] == $id)
    {
        $isFound=true;
         $json_arr[$key]['document']['payload'] = $udateData['document']['payload'];
    }
}
if($isFound==false){
    http_response_code(404);
    echo json_encode(array('message'=>'record not found'));
die();
}

// encode array to json and save to file
file_put_contents('file.json', json_encode($json_arr));
//echo json_encode($element['document']);
?>