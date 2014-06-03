<?php

/*****************
*
* Sum the even-valued fibonacci numbers 
* less than or equal to 4 million
*
*****************/

function evenFibonacci($max)
{
    $evenFibs = array();
    $lastFib = 1;
    for ($i = 1; $i <= $max; $i += 0)
    {
        if ($i % 2 == 0)
            $evenFibs[] = $i;
        $temp = $i;
        $i = $temp + $lastFib;
        $lastFib = $temp;
    }
    return $evenFibs;
}

print array_sum(evenFibonacci(4000000));
