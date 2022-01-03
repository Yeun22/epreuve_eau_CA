<?php

function findMinimumDiff(array $arr)
{
    //On tri le tableau pour pouvoir comparer les index deux a deux
    sort($arr);

    for ($i = 1; $i < count($arr); $i++) {
        //On recupère i et i-1 comme le tableau est trié i > i+1
        // on soustrait l'un a l'autre
        $result = $arr[$i] - $arr[$i - 1];

        //on stock dans min si min plus grand que nouveau resultat 
        if ((isset($min) && $min > $result) || !isset($min)) {
            $min = $result;
        }
    }
    //on retourne min
    return $min;
}

array_shift($argv);

$minimum = findMinimumDiff($argv);

echo "La différence minimum entre deux index est $minimum \n";
