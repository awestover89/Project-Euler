<?php

//$knownLinks = array();
$maxLink = 0;
$maxLinkStarter = 1;

for ($i = 1; $i < 1000000; $i++)
{
	$newValue = $i;
	$linkLength = 1;
	
	while ($newValue != 1)
	{
		/*
		 * 
		 * Here I wanted to keep a list of known values, so when I reached a known link
		 * I could just skip over the rest of the algorithm. Unfortunately, PHP ran
		 * out of memory storing all these link values, and brute forcing
		 * proved to be the faster solution.
		 * 
		 * /
		/*if (isset($knownLinks[$newValue]))
		{
			$linkLength += $knownLinks[$newValue];
			break;
		}*/
		if ($newValue % 2 == 0)
		{
			$newValue /= 2;
		}
		else {
			$newValue = $newValue * 3 + 1;
		}
		$linkLength++;
	}
	//$knownLinks[$i] = $linkLength;
	if ($linkLength >= $maxLink)
	{
		$maxLink = $linkLength;
		$maxLinkStarter = $i;
	}
}

echo $maxLinkStarter;

?>
