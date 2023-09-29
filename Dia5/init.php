<?php

$variavel = 1;
$variavel_array1 = array(1,"um");

$variavel_array2 = [1,"um"];

// echo $variavel_array1[0]."\n";
// echo $variavel_array1[1]."\n";

$array_associativo = array(
    "nome" => "ismael",
    "idade" => 38
);
$array_associativo["peso"] = 20;


// echo $array_associativo["nome"]."\n";
// echo $array_associativo["idade"]."\n";
echo $array_associativo["peso"]."\n";

$matriz = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

// echo $matriz[1][2]; // Saída: 6

$frutas = array("Maçã", "Banana", "Pêra", "Uva", "Laranja");

// foreach ($frutas as $fruta) {
//     echo $fruta . "\n";
// }

// echo "===============\n";
// $numero_de_frutas = count($frutas);

// for ($i = 0; $i < $numero_de_frutas; $i++) {
//     echo $frutas[$i] ."\n";
// }

// $i = 0;
// echo "===============\n";
// while ($i < $numero_de_frutas) {
//     echo $frutas[$i] . "\n";
//     $i++;
// }