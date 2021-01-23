<?php

function addItem($itemName, $quantity, $itemPrice)
{
    $_SESSION["item"] = $itemName;
    $_SESSION["item"]["quantity"] = $quantity;
    $_SESSION["item"]["itemPrice"] = $itemPrice;
    $_SESSION["item"]["totalCost"] = $quantity * $itemPrice;
}

function removeItem($itemName)
{
    unset($_SESSION[$itemName]);
}

function reduceQuantity($itemName)
{
    $_SESSION["item"]["quantity"] -= 1;
    $_SESSION["item"]["totalCost"] = $_SESSION["item"]["quantity"] * $_SESSION["item"]["itemPrice"];
}
function increaseQuantity($itemName)
{
    $_SESSION["item"]["quantity"] += 1;
    $_SESSION["item"]["totalCost"] = $_SESSION["item"]["quantity"] * $_SESSION["item"]["itemPrice"];
}
