<?php

session_start();

//laptops controller
require_once 'laptop-model.php';
require_once 'dbConnect.php';

$db = get_db();


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
}

//sestion variables and how to access them.
setcookie('firstname', $clientFirstname, strtotime('+1 year'), '/');
$clientFirstname;

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

    case 'laptopDetails':
        $nav = displayNavigation();
        $laptops = laptopsData($db);
        $laptopId = filter_input(INPUT_GET, 'laptopId', FILTER_SANITIZE_STRING);
        $laptopId--;
        $laptopDetails = laptopDetails($laptopId, $laptops);
        include 'laptopDetails.php';
        exit;
        break;

    case 'addpref':
        $prefLaptops = preferedLaptopsData($db);
        $prefId = sizeof($prefLaptops);
        $prefId ++;
        $likeText = filter_input(INPUT_POST, 'likeText');
        $dislikeText = filter_input(INPUT_POST, 'dislikeText');
        $laptopId = filter_input(INPUT_POST, 'laptopId');
        $userId = 1;
        addPreferedLaptop($prefId, $likeText, $dislikeText, $laptopId, $userId);
        //include 'index.php';
        break;


    case 'deletepref':
        break;

        case 'displayPref':
            $nav = displayNavigation();
            $laptops = laptopsData($db);
            $prefLaptops = preferedLaptopsData($db);
            $displayPrefered = displayPreferedLaptops($prefLaptops, $laptops);
            include 'prefered.php';
            exit;
            break;

    default:
        $nav = displayNavigation();
        $laptops = laptopsData($db);
        $laptopDisplay = laptopsDisplay($laptops);
        include 'displayLaptops.php';
        exit;
        break;
}
