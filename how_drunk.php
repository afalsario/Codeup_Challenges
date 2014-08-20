<?php

$r = '';

echo 'How much do you weigh?: ';

$weight = trim(fgets(STDIN));

echo 'Enter your sex: (M) or (F): ';

$sex = trim(strtoupper(fgets(STDIN)));

if($sex == 'M'){

    $r = 0.73;
}
elseif ($sex == 'F')
{
    $r = 0.66;
}

echo 'Hours spent drinking: ';

$hours = trim(fgets(STDIN));


echo 'Bottles of Beer: ';

$beer = trim(fgets(STDIN));

$boz = $beer * 0.60;

echo 'Glasses of Wine: ';

$wine = trim(fgets(STDIN));

$woz = $wine * 0.65;

echo 'Shots of Tequila: ';

$shots = trim(fgets(STDIN));

$toz = $shots * 0.7;

$lqoz = $boz + $woz + $toz;

$bac = ($lqoz * 5.14/$weight * $r) - .015 * $hours;

if($bac <= 0.05){
    echo "C'mon! Are you serious? Get back to the bar!";
}
elseif ($bac >= 0.05 && $bac <= 0.08){
    echo "Getting there dude...";
}


echo round($bac, 4);
