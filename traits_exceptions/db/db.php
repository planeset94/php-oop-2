<?php
require(__DIR__ . '/../class/sport.php');


$sport=[
        new SportCar('Alfa', '4C',30000, 200, 2000, 230, 900),
        new SportCar('Alfa', '8C',60000, 350, 3200, 280, 1200),
        new SportCar('Ferrari', '488 PistaSpider',300000, 600, 6000, 390, 1500),
        new SportCar('Lamborghini', 'miura',300000, 500, 7000, 400, 1450)
];


try {
    
    echo $sport[0]-> setVisitors(dieci,20);
} catch (Exception $e) {
    echo "Exception: " . $e->getMessage();
}

?>