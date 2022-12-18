<?php
// read file
$data = file_get_contents('file.json');

// decode json to array
$json_arr = json_decode($data, true);

foreach ($json_arr as $key => $value) {
    if ($value['document']['id'] == '1') {
        $json_arr[]['document']['id']['payload']['meta']['type'] = "cunning";
    }
}

// encode array to json and save to file
file_put_contents('file.json', json_encode($json_arr));
?>