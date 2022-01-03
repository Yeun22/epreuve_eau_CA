<?php

function majmin(string $phrase)
{
    $newString = "";
    $spacecount = 0;
    for ($i = 0; $i < strlen($phrase); $i++) {
        if ($phrase[$i] == " ") {
            $spacecount++;
            $newString .= " ";
        }
        if ($spacecount % 2 === 0) {
            if ($i % 2 !== 0) {
                $newString .= strtoupper($phrase[$i]);
            } else {
                $newString .= $phrase[$i];
            }
        } else {
            if ($i % 2 === 0) {
                $newString .= strtoupper($phrase[$i]);
            } else {
                $newString .= $phrase[$i];
            }
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


