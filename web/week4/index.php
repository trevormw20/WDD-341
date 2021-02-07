<?php
//laptops controller
require_once 'laptop-model.php';
require_once 'dbConnect.php';

$db = get_db();


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
}


switch ($action) {


    case 'filter':
        $maker = filter_input(INPUT_POST, 'maker');
        $ram = filter_input(INPUT_POST, 'ram');
        $cpu = filter_input(INPUT_POST, 'cpu');
        $gpu = filter_input(INPUT_POST, 'gpu');
        $storage = filter_input(INPUT_POST, 'storage');
        $screen = filter_input(INPUT_POST, 'screen');

        $filerSelected = [$maker, $ram, $cpu, $gpu, $storage, $screen];


        $laptops = filterLaptops($filerSelected, $db);
        $laptopDisplay = laptopsDisplay($laptops);
        include 'displayLaptops.php';
        exit;
        break;

    default:
 
        $laptops = laptopsData($db);
        $laptopDisplay = laptopsDisplay($laptops);
        include 'displayLaptops.php';
        exit;
        break;
}

