<?php

$Array_Proficionais = array();
$indice_array = 0;
while(true){
    system("clear");
    echo "============== [Cadastrar Proficionais] ==============\n\n";

    echo "Adicione os dados dos proficionais\n";
    echo "Insira o Nome:\n";
    $nome = fgets(STDIN);
    $proficional["Nome"] = $nome;
    echo "Insira o Cargo:\n";
    $cargo = fgets(STDIN);
    $proficional["Cargo"] =  $cargo;
    echo "Insira o Salário:\n";
    $salario = fgets(STDIN);
    $proficional["Salario"] =  $salario;
    $Array_Proficionais[$indice_array] = $proficional;
    
    echo "Digite 1 para Sair \n";
    echo "Digite 2 para Continuar \n\n";


    $opcao = fgets(STDIN);
    system("clear");
    if($opcao == 1){
        break;
    }else 
    $indice_array++;
    echo "-----Salvando dados----\n";
    sleep(2);
}

echo "Lista de Proficionais Criados\n\n";

foreach ($Array_Proficionais  as $proficional) {
    echo "--------------------------------\n";
    echo "Nome: {$proficional["Nome"]}";
    echo "Cargo: {$proficional["Cargo"]}";
    echo "Salário: {$proficional["Salario"]}";
    echo "--------------------------------\n";
}