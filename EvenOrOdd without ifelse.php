<?php

$evenOrOdd = ["0" => "Even", "1" => "Odd"];

/**
 * Check Even or Oddd
 * 
 * @param $number
 */
function evenOrOdd($number) 
{
    global $evenOrOdd;
    echo "Your number is ".$number." ".  $evenOrOdd[$number % 2];
}
evenOrOdd(20);
