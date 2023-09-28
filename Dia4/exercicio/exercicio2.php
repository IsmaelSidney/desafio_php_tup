<?php

while(true){
    system("clear");
    echo "============== [Menu] ==============\n\n";

    echo "Escolha uma das opções abaixo:\n";
    echo "1 - Cadastrar Aluno\n";
    echo "2 - Alterar Aluno\n";
    echo "3 - Excluir Aluno\n";
    echo "4 - Mostrar todos os alunos\n";
    echo "5 Sair \n\n";

    echo "Entre com a opção: ";

    $opcao = fgets(STDIN);
    system("clear");
    switch($opcao){
        case 1:
            echo "Opção Cadastrar Aluno\n";
            break;
        case 2:
            echo "Opção Alterar Aluno\n";
            break;
        case 3:
            echo "Opção Excluir Aluno\n";
            break;
        case 4:
            echo "Opção Mostrar todos os Alunos\n";
            break;
        case 5:
            echo "Opção Sair\n";
            exit();
        default:
            echo "Opção invalida.";
        }
        sleep(5);
}