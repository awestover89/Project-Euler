#!/usr/bin/perl
use strict;
use warnings;

my $sum = 0;
my $lastFib = 1;
for (my $num = 1; $num < 4000000; $num += 0)
{
    if ($num % 2 == 0)
    {
        $sum += $num;
    }
    my $temp = $lastFib;
    $lastFib = $num;
    $num += $temp;
}
print $sum;
