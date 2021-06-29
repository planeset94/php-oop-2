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
    public function getName()
    {
        return $this->name;
    }
    
    
}

class Premium extends User
{
    protected $reg_Date;
    protected $available_Coupon;

    function __construct(string $name, string $lname, string $reg_Date, int $available_Coupon)
    {
        parent::__construct( $name,  $lname,);
        $this->reg_Date=$reg_Date;
        $this->available_Coupon=$available_Coupon;
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

?>