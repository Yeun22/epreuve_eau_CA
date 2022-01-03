<?php

function combi2nombres(){

$arrayFinal = [];
for ($i = 0; $i <= 99; $i++) {
    for ($j = 0; $j <= 99; $j++) {
        $combiExist = false;
        if ($i < 10 && $j < 10) {
            $nbr = "0$i 0$j";
        } elseif ($i < 10 && $j > 9) {
            $nbr = "0$i $j";
        } elseif ($i > 9 && $j < 10) {
            $nbr = "$i 0$j";
        } else {
            $nbr = "$i $j";
        }


        if ($i != $j) {

            $nbrExplode = explode(' ', $nbr);

            $nbrPermut = "$nbrExplode[1] $nbrExplode[0]";


            for ($n = 0; $n < count($arrayFinal); $n++) {
                if (strval($arrayFinal[$n]) == strval($nbrPermut)) {
                    $combiExist = true;
                }
            }
            if ($combiExist === false) {
                $arrayFinal[] = $nbr;
            }
        }
    }
}
return $arrayFinal;
}

//Affichage et Traitement

$arrayToEcho = combi2nombres();

for ($n = 0; $n < count($arrayToEcho); $n++) {
    echo "$arrayToEcho[$n], ";
}    
echo "\n";
