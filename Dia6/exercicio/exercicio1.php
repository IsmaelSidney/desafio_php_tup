<?php

// Cores ANSI
function vermelha($texto){
    $cor_vermelha = "\033[31m";
    return $cor_vermelha . $texto . "\033[0m";
}
function verde($texto){
    $cor_verde = "\033[32m";
    return $cor_verde . $texto . "\033[0m";
}
function amarelo($texto){
    $cor_amarela = "\033[33m";
    return $cor_amarela . $texto . "\033[0m";
}
function azul($texto){
    $cor_azul = "\033[34m";
    return $cor_azul . $texto . "\033[0m";
}




$produtos = [];

// Função para cadastrar um produto
function cadastrarProduto($codigo, $nome, $descricao, $quantidade) {
    global $produtos;
    $produtos[$codigo] = [
        'nome' => $nome,
        'descricao' => $descricao,
        'quantidade' => $quantidade,
    ];
}

// Função para realizar uma saída de estoque
function realizarSaidaEstoque($codigo, $quantidadeSaida) {
    global $produtos;
    if (isset($produtos[$codigo])) {
        if ($produtos[$codigo]['quantidade'] >= $quantidadeSaida) {
            $produtos[$codigo]['quantidade'] -= $quantidadeSaida;
        } else {
            echo vermelha("Quantidade insuficiente em estoque!\n");
        }
    } else {
        echo vermelha("Produto não encontrado!\n");
    }
}

// Função para listar todos os produtos
function listarProdutos() {
    global $produtos;
    echo str_repeat("=",40)."\n";
    echo "id  nome    descricao  quantidade\n";
    echo str_repeat("=",40)."\n";
    foreach ($produtos as $codigo => $produto) {
        echo "$codigo   {$produto['nome']}        {$produto['descricao']}            {$produto['quantidade']}\n";
    }
    echo str_repeat("=",40)."\n";
}

// Menu principal
while (true) {
    echo str_repeat("=",11)." Menu ".str_repeat("=",11)."\n";
    echo verde("1. Cadastrar Produto\n");
    echo amarelo("2. Realizar Saída de Estoque\n");
    echo azul("3. Listar Produtos\n");
    echo vermelha("4. Sair\n");
    echo "Escolha uma opção: ";

    $opcao = readline();

    switch ($opcao) {
        case 1:
            echo verde("Digite o código do produto: ");
            $codigo = readline();
            echo verde("Digite o nome do produto: ");
            $nome = readline();
            echo verde("Digite a descrição do produto: ");
            $descricao = readline();
            echo verde("Digite a quantidade em estoque: ");
            $quantidade = readline();
            cadastrarProduto($codigo, $nome, $descricao, $quantidade);
            echo verde("Produto cadastrado com sucesso!\n");
            break;
        case 2:
            echo amarelo("Digite o código do produto: ");
            $codigo = readline();
            echo amarelo("Digite a quantidade de saída: ");
            $quantidadeSaida = readline();
            realizarSaidaEstoque($codigo, $quantidadeSaida);
            break;
        case 3:
            listarProdutos();
            break;
        case 4:
            echo azul("Saindo do programa...\n");
            exit;
        default:
            echo vermelha("Opção inválida!\n");
    }
}

?>
