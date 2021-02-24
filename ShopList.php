<?php
include_once("products.php");

class ShopList {
    private $productList;

    function __construct($products)
    {
        $this->productList = $products;
    }

    function listProducts(){
        ECHO <<<HTML
        <html>
            <table>
            <tr> 
                <td>Name</td> 
                <td>Price</td> 
                <td>Add</td> 
            </tr>
        HTML;
        foreach ($this->productList as $product) 
        {
            $name = $product["name"];
        
            $price = $product["price"];
            echo <<<HTML
                <tr> 
                    <td>$name</td> 
                    <td>$price</td> 
                    <td> 
                        <button onclick = 'AddProduct(`$name`, `$price`)'>Add Product</button> 
                    </td> 
                </tr>
            HTML;
        }
        ECHO <<<HTML
                    
            <table>
        <html>
        HTML;

    }


}



?>