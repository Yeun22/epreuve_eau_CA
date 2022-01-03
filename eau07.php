<?php

function majmin(string $phrase)
{
    $newString = "";
    $maj=true;
    for ($i = 0; $i < strlen($phrase); $i++) {
        if ($phrase[$i] == " ") {
            $newString .= " ";
	    $maj=true;
        }
        if ($maj === true && $phrase[$i] !== " " ) {
             $newString .= strtoupper($phrase[$i]);
      	     $maj=false;
 	} else {
                $newString .= $phrase[$i];
        }
    }
    return $newString;
}

function isNumeric($arg){
	if(is_numeric($arg)){
		return true;
	}
}

//Gestion d'erreur : 
if(isNumeric($argv[1])){echo "Il faut une string absolument \n";return;}

//affichage: 

echo majmin($argv[1]) . "\n";


