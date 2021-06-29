<?php
class Premium extends User
{
    protected $reg_Date;
    protected $discount;

    function __construct(string $name, string $lname, string $reg_Date, bool $discount)
    {
        parent::__construct( $name,  $lname,);
        $this->reg_Date=$reg_Date;
        $this->discount=$discount;
    }

    public function getDiscount()
    {
        return $this-> discount;
    }


}
?>