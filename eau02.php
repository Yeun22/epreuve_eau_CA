<?php

//Les fonctions :
function inverseArray($arr) {
	for ($i=count($arr)-1 ; $i>0; $i--){
		echo "$arr[$i] \n";
	}
}
function arrEmpty($arr) {
	if(count($arr) == 1){
		return "error";
	}
}
//Step One: Gestion d'erreur
/*
Cas un peu particulier : le tableau $argv commence à 1 pour les params supplémentaires
donc on fais comme si un seul paramètre faisait un tableau vide.
*/
$erreur = arrEmpty($argv);
if ($erreur === "error"){
	echo "Error: Il n'y a pas assez d'arguments dans cette fonction \n" ;
}
//Step two : Parsing (analyse)


//Step three : Résolution 

inverseArray($argv);

//Step Four : Affichage
