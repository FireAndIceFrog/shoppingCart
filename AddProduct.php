<?php
include("shoppingCart.php");
session_start();

$name = $_POST["name"];
$price = floatval($_POST["price"]);

if(isset($_SESSION["cart"]))
{
    $_SESSION["cart"]->AddProduct($name, $price);
} 
else 
{
    $_SESSION["cart"] = new shoppingCart();
    $_SESSION["cart"]->AddProduct($name, $price);
}

header("Location: index.php");
?>

