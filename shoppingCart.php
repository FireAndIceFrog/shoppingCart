<?php
include_once("products.php");

class ShoppingCart {
    private $productList;

    function __construct()
    {
        $this->productList = [];
    }

    function AddProduct($name, $price = null) 
    {   
        if(array_key_exists($name,$this->productList))
        {
            $this->productList[$name]->addItem();
            if($price != null)
            {
                $this->productList[$name]->setPrice($price);
            }
            return;
        } 
        $this->productList = array_merge($this->productList, [$name => new Product($name,$price)]);
        print_r($this->productList);
    }

    function RemoveProduct($name, $quantity = 1)
    {
        if(array_key_exists($name, $this->productList) && $quantity > 0 && gettype($quantity) == "integer")
        {
            $currentQuant = $this->productList[$name]->getQuantity();
            $this->productList[$name]->setQuantity($currentQuant-$quantity);
            if($this->productList[$name]->getQuantity() <= 0)
            {
                unset($this->productList[$name]); 
            }
            return true;
        } 
        else if (!array_key_exists($name, $this->productList))
        {
            throw new InvalidArgumentException("This product does not exist: $name");
        } 
        else if ($quantity <= 0) 
        {
            throw new InvalidArgumentException("This quantity is not a positive integer: $quantity");
        }
        print_r($this->productList);
    }

    function listProducts(){
        ECHO <<<HTML
        <html>
            <table>
            <tr> 
                <td>Name</td> 
                <td>Price</td> 
                <td>Quantity</td> 
                <td>Total</td>
                <td>Add</td> 
                <td>Remove</td>
            </tr>
        HTML;
        foreach ($this->productList as $product) 
        {
            echo $product;
        }
        ECHO <<<HTML
                    
            <table>
        <html>
        HTML;

    }


}



?>