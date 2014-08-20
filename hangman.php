<?php

function randomWord(){
    $list = ['cat', 'dog', 'fish'];

    $randIndex = mt_rand(0, 2);

    $word = $list[$randIndex];

    return $word;

}

$word = strlen(randomWord());

echo "Would you like to play hangman?" . PHP_EOL;

$input = trim(strtoupper(fgets(STDIN)));

if($input == 'Y'){
    echo "Ok! The word I'm thinking of has " . $word . " letters." . PHP_EOL;

} else {
    echo "Alright. Maybe later." . PHP_EOL;
    exit(0);
}

?>
