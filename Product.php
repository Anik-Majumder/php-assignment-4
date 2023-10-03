<?php

class Product
{
    public $id, $name, $price;

    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    private function getFormattedPrice()
    {
        $formatedPrice = sprintf("%0.2f", $this->price);
        $FormatedPriceToString = (string) $formatedPrice;
        return $FormatedPriceToString;
    }


    public function showDetails()
    {
        echo "Product Details: \n";
        echo "ID: $this->id \n";
        echo "Name: $this->name \n";
        echo "Price: " . $this->getFormattedPrice();
    }

}

$product = new Product(1, 'T-shirt', 19.99111);
$product->showDetails();

?>