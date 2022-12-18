<?php
// read json file
$id=$_GET['id'];
$data = file_get_contents('file.json');

// decode json to associative array
$json_arr = json_decode($data, true);

// get array index to delete
$arr_index = array();
$isFound=false;
foreach ($json_arr as $key => $value)
{
    if ($value['document']['id'] == $id)
    {
        $isFound=true;
        $arr_index[] = $key;
        echo json_encode(array('message'=>'record is deleted'));
    }
}

// when not found record
if($isFound==false){
    http_response_code(404);
    echo json_encode(array('message'=>'record not found'));
die();
}

// delete data
foreach ($arr_index as $i)
{
    unset($json_arr[$i]);
}

// rebase array
$json_arr = array_values($json_arr);

// encode array to json and save to file
file_put_contents('file.json', json_encode($json_arr));
?>