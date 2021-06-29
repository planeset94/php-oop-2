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


/**
 * Method to generate random date between a fixed date and now. 
 * @param $sStartDate
 * @param $sEndDate
 * @param string $sFormat
 * @return bool|string
 */
function randomDate($sStartDate, $sEndDate, $sFormat = 'd-m-Y')
{
    // Convert the supplied date to timestamp
    $fMin = strtotime($sStartDate);
    $fMax = strtotime($sEndDate);

    // Generate a random number from the start and end dates
    $fVal = mt_rand($fMin, $fMax);

    // Convert back to the specified date format
    return date($sFormat, $fVal);
}


?>