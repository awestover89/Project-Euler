<?php

/********************
 * 
 * Find the difference between the sum 
 * of the squares of the first one 
 * hundred natural numbers and the 
 * square of the sum.
 * 
 *******************/

$sumSquares = 0;
$sum = 0;

for ($i = 1; $i <= 100; $i++)
{
	$sum += $i;
	$sumSquares += $i * $i;
}

echo ($sum * $sum) - $sumSquares;