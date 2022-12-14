<?php
include_once 'config.php';
$q="select * from demo";
$reuslt=$db->query($q);
print_r($reuslt);
echo "<br />";

while($row=$reuslt->fetch_object()){
	echo "id: ".$row->id."<br/>";
	echo "name: ".$row->name."<br/>";
	echo "email: ".$row->email."<br/>";
	echo '<br />';
}

