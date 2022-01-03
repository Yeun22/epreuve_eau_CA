<?php

function my_bubble_sort_with_ascii(array $arr){

do {
    $swippe = false;
    for ($i = 0; $i < (count($arr) - 1); $i++) {
        if (ord($arr[$i]) > ord($arr[$i + 1])) {
            $temp = $arr[$i + 1];
            $arr[$i + 1] = $arr[$i];
            $arr[$i] = $temp;
            $swippe = true;
        }
    }
} while ($swippe);
return $arr;
}

array_shift($argv);
$arrayFinal = my_bubble_sort_with_ascii($argv);


echo "Votre Tableau trié en ordre ASCII \n";
for($n=0; $n<count($arrayFinal); $n++){
	echo "$arrayFinal[$n], ";
}

echo  "\n";
