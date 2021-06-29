<?php

class Product
{
   protected $name;
   protected $category;
   protected $description;
   protected $price;
   protected $qty;

    function __construct(string $name, string $category, string $description, Float $price, Int $qty)
    {
        $this->name=$category;
        $this->category=$category;
        $this->description=$description;
        $this->price=$price;
        $this->qty=$qty;
    }
}

?>