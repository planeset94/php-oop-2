<?php

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
?>