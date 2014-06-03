<?php

/************************
 * 
 * Find a pythagorean triplet such that
 * a < b < c and a^2 + b^2 = c^2 and a + b + c = 1000
 * 
 ***********************/
  
  //Use fibonaccis method to calculate triples
  //Where a is an odd number
  
  $sum = 1;
  for ($i = 3; $i < 333; $i += 2)
  {
  	if (intval(sqrt($i)) == sqrt($i))
	{
		$a = sqrt($i);
		$b = sqrt($sum);
		$c = sqrt($sum + $i);
		for ($j = 1; $j < 100; $j++)
 		{
 			$d = $a * $j;
			$e = $b * $j;
			$f = $c * $j;
			if ($d + $e + $f == 100)
			{
				echo ($d * 10)*($e * 10)*($f * 10);
				die;
			}
			elseif ($d + $e + $f == 1000)
			{
				echo ($d * $e * $f);
				die;
			}
			elseif ($d + $e + $f > 1000)
			{
				break;
			}
 		}
	}
	$sum += $i;
  }
  
  //If fibonacci was unsuccessful, we know a has to be an even number
  
  for ($a = 2; $a < 333; $a += 2)
  {
  	for ($b = $a + 1; $b < 500; $b++)
	{
		//Ensure the sum is 1000
		$c = 1000 - $a - $b;
		//Check if it is a pythag triple
		if ($a * $a + $b * $b == $c * $c)
		{
			echo ($a * $b * $c);
			die;
		}
	}
  }
  
 
?>