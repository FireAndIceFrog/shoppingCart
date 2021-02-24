<?php
class Product{
    private $price;
    private $name;
    private $quantity;
    
    function __construct($name, $price)
    {
        $this->setPrice($price);
        $this->setName($name);
        $this->quantity = 1;
    }

    function setPrice($price)
    {   
        if (gettype($price) != "double" && gettype($price) != "integer" )
        {
            throw new InvalidArgumentException("Price must be a number!");
        }
        $this->price = $price;
    }
    
    function setName($name)
    {
        if(gettype($name) != "string") 
        {
            throw new InvalidArgumentException("Product Name must be a string");
        } 
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

    function getPrice()
    {
        return $this->price;
    }

    function getQuantity()
    {
        return $this->quantity;
    }

    function addItem()
    {
        ++$this->quantity;
    }

    function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
    
    function __toString(){
        $name = $this->getName();
        
        $price = number_format((float)$this->getPrice(), 2, '.', '');
        $quant = $this->getQuantity();
        $total = number_format((float)$quant*$price, 2, '.', '');
        return <<<HTML
            <tr> 
                <td>$name</td> 
                <td>$price</td> 
                <td>$quant</td> 
                <td>$$total</td> 
                <td> 
                    <button onclick = 'AddProduct(`$name`, `$price`)'>Add Product</button> 
                </td> 
                <td> 
                    <button onclick = 'RemoveProduct(`$name`, `1`)'>Remove Product</button> 
                </td> 
                
            </tr>
        HTML;
    }

}


?>