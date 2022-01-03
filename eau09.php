<?php

function allNumbers($nbrMin,$nbrMax)
{
	if($nbrMin>=$nbrMax){
		echo "Le nombre minimum doit être plus petit que le maximum hé patate ! \n" ;
	}

	for($i=$nbrMin; $i<$nbrMax; $i++)
	{
		echo "$i \n";
	}
}

function isNumericAndInteger($arg)
{
	if(!is_numeric($arg) || (intval($arg)-$arg)!==0 ){
		return false;
	}
return true;
}

//special cause for an array with first argument doesn't count)
function twoArguments($arr){
	if(count($arr) != 3){
		return false;
	}
return true;
}
//Gestion d'erreur
if(!isNumericAndInteger($argv[1])){echo "Premier argument mauvais (nbr minimum demandé) \n"; return;}
if(!isNumericAndInteger($argv[2])){echo "Deuxieme argument mal foutu \n"; return;}
if(!twoArguments($argv)){echo "Il doit y avoir deux arguments a ce script \n"; return;}

//Affichage: 

allNumbers($argv[1],$argv[2]);
