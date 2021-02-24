<?php
include("shoppingCart.php");
session_start();

$name = $_POST["name"];
$quantity = intval($_POST["quantity"]);

if(isset($_SESSION["cart"]))
{
    $_SESSION["cart"]->RemoveProduct($name, $quantity);
} 

header("Location: index.php");
?>