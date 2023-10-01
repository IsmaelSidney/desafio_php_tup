


<?php

// Inicializa o array de produtos
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
            echo "Quantidade insuficiente em estoque!\n";
        }
    } else {
        echo "Produto não encontrado!\n";
    }
}

// Função para listar todos os produtos
function listarProdutos() {
    global $produtos;
    echo "=================================\n";
    echo "id  nome    descricao  quantidade\n";
    echo "=================================\n";
    foreach ($produtos as $codigo => $produto) {
        echo "$codigo   {$produto['nome']}   {$produto['descricao']}   {$produto['quantidade']}\n";
    }
    echo "=================================\n";
}

// Menu principal
while (true) {
    echo "Menu:\n";
    echo "1. Cadastrar Produto\n";
    echo "2. Realizar Saída de Estoque\n";
    echo "3. Listar Produtos\n";
    echo "4. Sair\n";
    echo "Escolha uma opção: ";

    $opcao = readline();

    switch ($opcao) {
        case 1:
            echo "Digite o código do produto: ";
            $codigo = readline();
            echo "Digite o nome do produto: ";
            $nome = readline();
            echo "Digite a descrição do produto: ";
            $descricao = readline();
            echo "Digite a quantidade em estoque: ";
            $quantidade = readline();
            cadastrarProduto($codigo, $nome, $descricao, $quantidade);
            echo "Produto cadastrado com sucesso!\n";
            break;
        case 2:
            echo "Digite o código do produto: ";
            $codigo = readline();
            echo "Digite a quantidade de saída: ";
            $quantidadeSaida = readline();
            realizarSaidaEstoque($codigo, $quantidadeSaida);
            break;
        case 3:
            listarProdutos();
            break;
        case 4:
            echo "Saindo do programa...\n";
            exit;
        default:
            echo "Opção inválida!\n";
    }
}

?>
