<?php


//var_dump($_GET['route']);
//if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
//$data=print_r((array) json_decode(file_get_contents('php://input'), TRUE));
//var_dump($data);

$route=$_GET['route'];

// to move between routes
switch($route){
    case 'create':
        include_once('create.php');
        break;
    case 'view':
        include_once('view.php');
        break;
    case 'edit':
        include_once('edit.php');
        break;
    case 'delete':
        include_once('delete.php');
        break;
    case 'list':
        include_once('list.php');
        break;
    default:
        include_once 'list.php';
}

//}

?>