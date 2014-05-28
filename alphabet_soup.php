<?php
$str = "hello world";

function alphabet_soup($str)
{
	$new_words = '';
	$words = explode(" ", $str);
	foreach ($words as $word)
	{
		$word = explode(' ', $word);
		$letters = str_split($word[0]);

		sort($letters);

		$new = implode('', $letters);
		$new_words .= $new . " ";
	}
return $new_words;
}

print_r(alphabet_soup($str));






