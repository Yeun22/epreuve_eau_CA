<?php

//Les fonctions :
function findNbrPremier($nbr) {
	for($i=2; $i<=intval(sqrt($nbr)); $i++){
		if($nbr%$i ==0) {
			return findNbrPremier($nbr+1);
		}
	}
	return $nbr;
}
function arrEmpty($arr) {
	if(count($arr) <= 1 && count($arr)>=2){
		return "error";
	}
}
function isNotInteger($argument){
	if(!is_numeric($argument)  || (intval($argument) - $argument) !== 0){
		return true;
	}
}
function isNegatif($argument){
	if($argument<1){
		return true;
	}
}
//Step One: Gestion d'erreur
/*
Cas un peu particulier : le tableau $argv commence à 1 pour les params supplémentaires
donc on fais comme si un seul paramètre faisait un tableau vide.
*/
$erreur = arrEmpty($argv);
if ($erreur === "error"){
	echo "Error: Il n'y a pas le bon nombre d'arguments dans cette fonction \n" ;
	return;
}
if(isNotInteger($argv[1])){ echo " Error: Il faut un nombre entier \n"; return;}
if(isNegatif($argv[1])) {echo "Error: il faut un nombre positif \n";return;}


//Step two : Parsing (analyse)


//Step three : Résolution 
$nbrPremier = findNbrPremier($argv[1]);

//Step Four : Affichage
echo "Le premier nombre premier après $argv[1]  est $nbrPremier ! \n";
