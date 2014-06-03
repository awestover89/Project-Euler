<?php

/***************************
* Problem 1
*
* If we list all the natural numbers below 10 
* that are multiples of 3 or 5, we get 3, 5, 6 and 9. 
* The sum of these multiples is 23.
*
* Find the sum of all the multiples of 3 or 5 below 1000.
*
***************************/

function find_multiples($max)
{
    $multiples = array();
    for ($i = 0; $i < $max; $i++)
    {
        if ($i % 3 == 0 || $i % 5 == 0)
	    $multiples[] = $i; 
    }
return $multiples;
}

echo array_sum(find_multiples(1000));
?>
