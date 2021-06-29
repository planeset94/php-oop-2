<?php


// Importo le funzioni
require('../../common/functions/functions.php');
//Importo la classe Product
require('../../common/classes/product.php');
//Importo la classe User e sottoclassi
require('../../common/classes/user.php');
require('../../common/classes/premium.php');
require('../../common/classes/card.php');

//ISTANZE PRODOTTO

$products=[
    new Product ('Tastiera mk850', 'hardware', 'Tastiera bluethoot', 130.3,10),
    new Product('SAP HANA', 'software', 'software gestionale',5000.9, 100),
    new Product('Macbook air', 'hardware','computer portatile leggero', 1600.2,200),
    new Product('Proiettore Canon', 'hardware', 'videoproiettore portatile', 600.99,90),
    new Product('Stampade laser', 'hardware', 'periferica esterna di output', 900.1,400),
    new Product('Monitor Lenovo','hardware', 'periferica di output', 303.45, 2000),
    new Product('Panda A4.5', 'software', 'software Antivirus', 240.99, 2000)
];


//ISTANZE UTENTI
$clients=[
    new User('Andrea', 'Monti'),
    new User('Carmen', 'Galan'),
    new User('Alessandro', 'Rippa'),
    new User('Giulia', 'Di Miele')
];

    //ISTANZE UTENTI PREMIUM 
    $diamond_users=[
        new Premium('Cecilia', 'Lazzati', randomDate('01-01-2000',date('d-m-Y')), true),
        new Premium('Lucia', 'Gonzaga', randomDate('01-01-2000',date('d-m-Y')), false),
        new Premium('Marco', 'Zanotti', randomDate('01-01-2000',date('d-m-Y')), false),

    ];


    //ISTANZE CreditCard
    $cards=[
        new CreditCard('Andrea', 'Monti', random_string(0,9,16), random_Date(),random_string(0,9,3)),
        new CreditCard('Carmen', 'Galan',random_string(0,9,16), random_Date(),random_string(0,9,3)),
        new CreditCard('Alessandro', 'Rippa',random_string(0,9,16), random_Date(),random_string(0,9,3)),
        new CreditCard('Giulia', 'Di Miele',random_string(0,9,16), random_Date(),random_string(0,9,3)),
        new CreditCard('Cecilia', 'Lazzati', random_string(0,9,16), random_Date(),random_string(0,9,3)),
        new CreditCard('Lucia', 'Gonzaga',random_string(0,9,16), random_Date(),random_string(0,9,3)),
        new CreditCard('Marco', 'Zanotti', random_string(0,9,16), random_Date(),random_string(0,9,3))
    ];


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($products as $product) : ?>
    <h1><?=$product->getName() ?></h1>
    <p><?=$product->getDesc() ?></p>
    <p>Normal Price:<?=' '. $product->getNormalPrice() ?></p>

    <?php if($diamond_users[2]->getDiscount()) : ?>
    <p>Price Discounted<?=' '. $product->setPrice(50) ?></p>
    <?php endif ; ?>
    <?php endforeach;?>

</body>

</html>