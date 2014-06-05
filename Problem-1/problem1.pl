#!/usr/bin/perl
use strict;
use warnings;

my $sum = 0;
for (my $num = 1; $num < 1000; $num++)
{
    if ($num % 3 == 0 || $num % 5 == 0)
    {
        $sum += $num;
    }
}
print $sum;

