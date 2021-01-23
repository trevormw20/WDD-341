<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/web/week3/shopping-model.php';

session_start();


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
}


switch ($action) {

    case 'addItem':
        $itemName = filter_input(INPUT_POST, 'itemName', FILTER_SANITIZE_STRING);
        $quantity = filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_NUMBER_INT);
        $itemPrice = filter_input(INPUT_POST, 'itemPrice', FILTER_SANITIZE_NUMBER_INT);

    addItem($itemName, $quantity, $itemPrice);


        var_dump($_SESSION[$itemName]);
        include 'browseitems.php';
        break;

    case 'removeItem':

        break;

    case 'reduceQuantity':

        break;

    case 'increaseQuantity':
        break;

    default:
        include '../web/week3/browseitems.php';
        exit;
        break;
}



?>