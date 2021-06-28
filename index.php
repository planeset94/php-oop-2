<pre>
<?php
// Importo le funzioni
require('common/functions.php');
//Importo le classi
require('common/classes.php');

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
        new Premium('Cecilia', 'Lazzati', randomDate('01-01-2000',date('d-m-Y')), 3),
        new Premium('Lucia', 'Gonzaga', randomDate('01-01-2000',date('d-m-Y')), 1),
        new Premium('Marco', 'Zanotti', randomDate('01-01-2000',date('d-m-Y')), 4),

    ];
    var_dump($diamond_users);

    //ISTANZE CreditCard
    $cards=[
        new CreditCard('Andrea', 'Monti', random_string(0,9,16), random_Date(),random_string(0,9,3)),
        new CreditCard('Carmen', 'Galan',random_string(0,9,16), random_Date(),random_string(0,9,3)),
        new CreditCard('Alessandro', 'Rippa',random_string(0,9,16), random_Date(),random_string(0,9,3)),
        new CreditCard('Giulia', 'Di Miele',random_string(0,9,16), random_Date(),random_string(0,9,3))
    ];







?>
</pre>