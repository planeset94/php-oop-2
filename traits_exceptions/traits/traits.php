<?php

/**
 * Definisce un numero casuale di preferenze per una macchina. 
 */
trait fakeVisits
{

    public function setVisitors($min, $max)
    {
      if(!is_numeric($min)||!is_numeric($max)){
        throw new Exception('I valori inseriti non sono numeri', 104);

      }else{
        $message= "A " . rand($min, $max) . " persone piace questa vettura";
        return $message;
      }
      
    }

}


/**
 * Definisce il 
 */
trait breveDesc
{
   public function extend($a,$b)
   {
     return "$a " . "-". " $b"; 
   }

}





?>