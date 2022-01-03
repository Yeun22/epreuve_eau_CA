<?php

//Gestion d'erreur

//Gestion des fonctions

$arr= [];

for($i=12; $i<1000;$i++){
	$nbr =strval($i);
	if($i <100 ) {
		$nbr="0$i";
	}
		if($nbr[0] != $nbr[1] && $nbr[1]!=$nbr[2] && $nbr[2]!=$nbr[0]){
		$arr[] =$i;

	}else{
		$arr[] = "$i";
	}

}


//Gestion des données

//Rendu

for($x=0;$x<count($arr);$x++){
	echo "$arr[$x] \n";
}
