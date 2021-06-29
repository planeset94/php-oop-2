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
        $this->name=$name;
        $this->category=$category;
        $this->description=$description;
        $this->price=$price;
        $this->qty=$qty;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDesc()
    {
        return $this->description;
    }

    public function getNormalPrice()
    {
        return $this->price;
    }
    public function setPrice($save)
    {
        $this->price= $this->price * (1-($save/100));
        return $this->price;
    }


}





?>