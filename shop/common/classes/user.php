<?php



class User
{
    protected $name;
    protected $lname;

    function __construct(string $name, string $lname)
    {
        $this->name=$name;
        $this->lname=$lname;
    }


    public function insertCreditCard(CreditCard $cards)
    {
        return "Pagamento Processato";
    }




    public function getName()
    {
        return $this->name;
    }
    
    
}



?>