<?php

class Car
{
    protected $manufacturer;
    protected $model;
    protected $price;
    function __construct(string $manufacturer, string $model, float $price)
    {
        $this->manufacturer=$manufacturer;
        $this->model=$model;
        $this->price=$price;

    }

    public function getMan()
    {
        return $this->manufacturer;
    }
    public function getModel()
    {
        return $this->model;
    }
    public function getPrice()
    {
        $number=$this->price;
      return number_format($number, 2, ',', "'");
    }
}






?>