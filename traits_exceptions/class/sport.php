<?php
require(__DIR__.'/car.php');
require(__DIR__.'/../traits/traits.php');


class SportCar extends Car
{
    use fakeVisits;
    use breveDesc;
    protected $horsepower;
    protected $engine;
    protected $maxSpeed;
    protected $weight;

    function __construct(string $manufacturer, string $model, string $price, float $horsepower, float $engine, float $maxSpeed, float $weight )
    {
        parent::__construct($manufacturer, $model, $price);
        $this->horsepower=$horsepower;
        $this->engine=$engine;
        $this->maxSpeed=$maxSpeed;
        $this->weight=$weight;
    }

    public function bollo()
    {
        if($this->engine > 3000 ){
            return "Questa vettura paga il super bollo";
        }
    }

    public function getHorsePower()
    {
        return $this->horsepower;
    }
    public function getWeight()
    {
        return $this->weight;
    }


}








?>