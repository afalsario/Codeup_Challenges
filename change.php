<?php

echo "Enter in a dollar amount: ";

$amount = trim(fgets(STDIN));

$quarters = floor($amount / .25);

$amount = $amount - $quarters * .25;

$dimes = floor($amount / .10);

$amount = $amount - $dimes * .10;

$nickels = floor($amount / .05);

$amount = $amount - $nickels * .05;

$pennies = round($amount / .01);

echo "Quarters: " . $quarters .PHP_EOL;
echo "Dimes: " . $dimes . PHP_EOL;
echo "Nickels: " . $nickels . PHP_EOL;
echo "Pennies: " . $pennies . PHP_EOL;
