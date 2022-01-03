<?php

//Les fonctions :
/**
* @param string $a : string to research
* @param string $b : string where we search $a
*/
function findStringInOtherOne($a, $b) {
$i=0;
$j=0;
do{
if($a[$i] == $b[$j]){
	if(strlen($a)>$i+1 && strlen($b)>$j+1 ){
		$i++;
		$j++;
	}else{
		$response =  "$a existe dans $b \n";
		return 	$response;
	}
}else{
	if(strlen($b)>$j+1){
		$j++;
	}else{
		return "$a n'existe pas dans $b \n";
	}
}

}while($i<=strlen($a));
	return "Une erreur est survenue \n";
}


function missingArguments($arr) {
	if(count($arr) < 2 && count($arr)>2){
		return true;
	}
}
function isNumeric($argument){
	if(is_numeric($argument)){
		return true;
	}
}
/*function isNegatif($argument){
	if($argument<1){
		return true;
	}
}*/

//Step One: Gestion d'erreur
/*
Cas un peu particulier : le tableau $argv commence à 1 pour les params supplémentaires
donc on fais comme si un seul paramètre faisait un tableau vide.
*/
if (missingArguments($argv)){echo "Error: Il n'y a pas le bon nombre d'arguments dans cette fonction \n" ; return;}
if(isNumeric($argv[1])){echo "Error: Il faut deux strings  pas de numeric \n"; return;}
//if(isNegatif($argv[1])) {echo "Error: il faut un nombre positif \n";return;}


//Step two : Parsing (analyse)


//Step three : Résolution 
$stringWhereSearch =$argv[1];
$stringToFind = $argv[2];

$resultat =  findStringInOtherOne($stringToFind,$stringWhereSearch);
//Step Four : Affichage
echo $resultat;
