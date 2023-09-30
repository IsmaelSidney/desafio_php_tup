<?php

// function saudacao($nome) {
//     return "Olá, $nome!";
// }

// echo saudacao("João"); // Saída: Olá, João!

// echo  adicao(5, 3); // rodando antes da criação da função


// função com paramentro e retorno
function adicao($a, $b) {
    return $a + $b;
}

// $resultado = adicao(5, 3); // $a recebe 5, $b recebe 3
// echo $resultado; // Saída: 8

// Função com valores padrão

function saudacao($nome = "Visitante") {
    echo "Olá, $nome!\n";
}

// Chamando a função sem fornecer um argumento
// saudacao(); // Saída: Olá, Visitante

// // Chamando a função com um argumento
// saudacao("Maria"); // Saída: Olá, Maria


// Varios paramentros
// function somar(...$numeros) {
//     $total = 0;
//     foreach ($numeros as $numero) {
//         $total += $numero;
//     }
//     return $total."\n";
// }

// $resultado1 = somar(1, 2, 3, 4, 5);
// $resultado2 = somar(10, 20);

// echo $resultado1; // Saída: 15 (soma de 1 + 2 + 3 + 4 + 5)
// echo $resultado2; // Saída: 30 (soma de 10 + 20)

// funções de tipos definidos

function somar(int $a, int $b): int {
    return $a + $b ;
}

// $resultado = somar(5, 3);
// echo $resultado."\n"; // Saída: 8

//Erro - argumentos não são inteiros
$resultado = somar("oi", "3");
echo $resultado."\n"; // 
