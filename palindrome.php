<?php

//function to test a string to see if its a palindrome
function test_pal($string)
{
$string = strtolower(preg_replace('/[^A-Za-z0-9_]/', '', $string));
$reverse = strrev($string);
	if($string == $reverse)
	{
		return true;
	}
	else
	{
		return false;
	}
}

echo "Would you like to test a palindrome? Y/N: ";

do
{
$input = trim(strtoupper(fgets(STDIN)));

	if($input == 'Y')
	{
		echo "Great! Enter in your string to test: ";
		$string = fgets(STDIN);
		var_dump(test_pal($string)) . PHP_EOL;
		echo "Would you like to test another? ";
	}
}
while ($input !== 'N');

echo 'See you next time!' . PHP_EOL;
