<pre>
<?php


/**
 * Restituisce una stringa numerica lunga n caratteri, i cui valori vanno da un valore minimo a uno massimo. Minimo, massimo e lunghezza sono defibili in questo ordine dall'utente. 
 */
function random_string($min, $max, $n)
{
   $StringNumber="";
    for ($i=0; $i <$n; $i++) { 
        $StringNumber.=random_int($min,$max);
    }
    return $StringNumber;
}

/**
 * Restituisce una combinazione casuale di mese/anno. L'anno può assuemre valori tra oggi e avanti di 10 anni.
 */
function random_Date()
{
    $month= mt_rand(1,12);
    $year=mt_rand(date("y"), date("y")+10);
   return $final_Date=$month . "/". $year;
   
}



class Product
{
    public $name;
    public $category;
    public $description;
    public $price;
    public $qty;

    function __construct(string $name, string $category, string $description, Float $price, Int $qty)
    {
        $this->name=$category;
        $this->category=$category;
        $this->description=$description;
        $this->price=$price;
        $this->qty=$qty;
    }
}

class User
{
    protected $name;
    protected $lname;

    function __construct(string $name, string $lname)
    {
        $this->name=$name;
        $this->lname=$lname;
    }
    public function getName()
    {
        return $this->name;
    }
    
    
}


class CreditCard extends User
{
    protected $AccountNumber;
    protected $ExpDate;
    protected $Bin;

    function __construct(string $name, string $lname, int $AccountNumber, string $ExpDate, int $Bin)
    {
        parent::__construct($name, $lname);
        $this->AccountNumber = $AccountNumber;
        $this->ExpDate=$ExpDate;
        $this->Bin=$Bin;
    }



}


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

//ISTANZE CreditCard
$cards=[
    new CreditCard('Andrea', 'Monti', random_string(0,9,16), random_Date(),random_string(0,9,3)),
    new CreditCard('Carmen', 'Galan',random_string(0,9,16), random_Date(),random_string(0,9,3)),
    new CreditCard('Alessandro', 'Rippa',random_string(0,9,16), random_Date(),random_string(0,9,3)),
    new CreditCard('Giulia', 'Di Miele',random_string(0,9,16), random_Date(),random_string(0,9,3))
];


var_dump($cards);




?>
</pre>