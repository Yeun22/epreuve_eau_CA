<?php

function findIndex(array $arr, string $valueToFind)
{
    foreach ($arr as $key => $value) {
        if ($valueToFind === $value) {
            return $key;
        }
    }
    return -1;
}

$arrayDeBase = $argv;
array_shift($arrayDeBase);
$valueTofind = $arrayDeBase[count($arrayDeBase) - 1];

array_pop($arrayDeBase);
$index = findIndex($arrayDeBase, $valueTofind);

echo $index . "\n";
