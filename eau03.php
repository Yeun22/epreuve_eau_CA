<?php

//Les fonctions :
function fibonacci($index) {
	$values = [0,1];
	if($index>1) {
	//Dans ce cas on peuple la suite de la suite
		for($i=2; $i<=$index; $i++){
			$values[] = $values[$i-1]+$values[$i-2];
		}
		return $values[$index-1];
	}else{
		return $values[$index-1];
	}	
	
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
$nbr= fibonacci($argv[1]);

//Step Four : Affichage
echo "Le $argv[1] ème nombre de la suite de Fibonacci est $nbr ! \n";
