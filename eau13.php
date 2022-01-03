<?php


function my_select_sort(array $arr)
{
    for ($i = 1; $i < count($arr); $i++) {
        //On sauve la valeur actuelle
        $currentItem = $arr[$i];
        //On définit l'index à gauche
        $indexLeft = $i - 1;
        //Tant que il y a un nombre a gauche et que l'item qu'on a est plus petit que ce nombre
        while ($indexLeft >= 0 && $currentItem < $arr[$indexLeft]) {
            //Alors Le nombre à droite du nombre comparé devient le nombre de gauche (on décale le nombre de gauche d'une place)
            $arr[$indexLeft + 1] = $arr[$indexLeft];
            //On décrémente indexLeft pour regardé le nombre de gauche d'après
            $indexLeft--;
        }
        //Si le nombre de gauche est + petit que le nombre actuel
        //Alors la place actuelle est celle de gauche +1 et doit être = a la valeur du début.
        $arr[$indexLeft + 1] = $currentItem;
    }

    return $arr;
}


array_shift($argv);
$responseArray = my_select_sort($argv);

//Affichage : 
for ($i = 0; $i < count($responseArray); $i++) {
    echo "$responseArray[$i] ";
}
echo "\n";
