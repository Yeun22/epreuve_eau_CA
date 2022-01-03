<?php

function onlynumber(string $phrase)
{
    for ($i = 0; $i < strlen($phrase); $i++) {
        if (!isNumeric($phrase[$i])) {
		return "Pas que des Numéros \n";
	}
    }
     return "Il y a que des numéros \n";

}

function isNumeric($arg){
	if(is_numeric($arg)){
		return true;
	}
}

//Gestion d'erreur : 
//if(isNumeric($argv[1])){echo "Il faut une string absolument \n";return;}

//affichage: 

echo onlynumber($argv[1]);


