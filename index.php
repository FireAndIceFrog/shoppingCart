<script src = "functions.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> 



<?php
include("shoppingCart.php");
include("ShopList.php");

session_start();
$products = [
    [ "name" => "Sledgehammer", "price" => 125.75 ],
    [ "name" => "Axe", "price" => 190.50 ],
    [ "name" => "Bandsaw", "price" => 562.131 ],
    [ "name" => "Chisel", "price" => 12.9 ],
    [ "name" => "Hacksaw", "price" => 18.45 ],
];
if(!isset($_SESSION["cart"]) )
{
    $_SESSION["cart"] = new shoppingCart();
}

if (!isset($_SESSION["StartCart"]))
{
    $_SESSION["StartCart"] = new ShopList($products);
}
echo '<h1>Available Items</h1>';
$_SESSION["StartCart"]->listProducts();
echo '<h1>Your Shopping Cart</h1>';
$_SESSION["cart"]->listProducts()


?>