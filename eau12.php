<?php

function bubbleTri(array $arr)
{
    do {
        $swippe = false;
        for ($i = 0; $i < count($arr) - 1; $i++) {
            if ($arr[$i] > $arr[$i + 1]) {
                //On met a dans c
                $temporaire = $arr[$i + 1];
                //On donne a a la valeur de b 
                $arr[$i + 1] = $arr[$i];
                //On donne a b la valeur de a qui est dans c
                $arr[$i] = $temporaire;
                $swippe = true;
            }
        }
    } while ($swippe);
    return $arr;
}

//traitement:
array_shift($argv);
$responseArray = bubbleTri($argv);

//Affichage : 
for ($i = 0; $i < count($responseArray); $i++) {
    echo "$responseArray[$i] ";
}
echo "\n";
