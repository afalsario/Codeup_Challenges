<?php
//function that will accept the string input by the user
function alphabet_soup($str)
{
	//variable with an empty string to store each word in the string
	$new_words = '';
	//variable will store the array created by exploding the string
	$words = explode(" ", $str);
	//foreach will isolate each word and split into individual letter arrays, sort regardless of case, and glue back into a string.
	foreach ($words as $word)
	{
		$word = explode(' ', $word);
		$letters = str_split($word[0]);
		natcasesort($letters);
		$new = implode('', $letters);
		$new_words .= $new . " ";
	}
	//will return the reordered string
return $new_words;
}

//say hello
echo "Hello! Do you want to see something cool? (Y)es or (N)o? ";

do
{
	//get user input
	$input = trim(strtoupper(fgets(STDIN)));
	//do something if yes
	if($input == 'Y')
	{
		echo "Let's play alphabet soup!\n";
		echo "Enter in anything you like: ";
		//gets a string from the user
		$str = fgets(STDIN);
		echo trim(alphabet_soup($str)) . PHP_EOL;
		echo "Do you want to do it again? ";
	}
}
while($input != 'N');

echo "Alright. Maybe some other time." . PHP_EOL;
		exit(0);






