<?php

//Gestion d'erreur

//Gestion des fonctions


function combiUnique(){

$arrayFinal = [];
for ($i = 10; $i < 999; $i++) {
    $nbrSplit = [];
    $combiExist = false;
    if ($i < 100) {
        $nbr = "0$i";
    } else {
        $nbr = strval($i);
    }
    if ($nbr[0] != $nbr[1] && $nbr[0] != $nbr[2] && $nbr[1] != $nbr[2]) {
        if (count($arrayFinal) == 0) {
            $arrayFinal[] = $nbr;
        } else {
            $nbrSplit[] = $nbr[0];
            $nbrSplit[] = $nbr[1];
            $nbrSplit[] = $nbr[2];
            sort($nbrSplit);
            $nbrJoin = "$nbrSplit[0]$nbrSplit[1]$nbrSplit[2]";
            // echo "nbrJoin : $nbrJoin  <br /> nbr = $nbr <br />";

            for ($n = 0; $n < count($arrayFinal); $n++) {
                if ($arrayFinal[$n] == $nbrJoin) {
                    $combiExist = true;
                }
            }
            if ($combiExist == false) {
                $arrayFinal[] = $nbr;
            }
        }
    }
}
	return $arrayFinal;
}


//Gestion des données

//Rendu

$arrayfinal = combiUnique();
//Affichage
for ($n = 0; $n < count($arrayfinal); $n++) {
    echo "$arrayfinal[$n], ";
}
echo "\n";
