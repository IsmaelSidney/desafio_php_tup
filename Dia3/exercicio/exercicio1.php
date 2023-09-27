<?php

echo("Olá cliente insira seu nome!\n");

$cliente = fgets(STDIN);

echo("Qual produto gostaria de adquirir?\n");

$produto = fgets(STDIN);
echo "Insira o valor do Produto $produto";
$valor = fgets(STDIN);
echo "Qual a quantidade?\n";

$qtd = fgets(STDIN);

$total = $qtd * $valor ;
echo "O Valor total a pagar é R$ $total reais\n";

echo "Digite o valor que vai pagar\n";
$pagamento = fgets(STDIN);

if( $pagamento > $total){
    $troco =   $pagamento - $total;
    echo "$cliente está aqui o seu troco: $troco\n";

}
if( $pagamento < $total){
    $restante = $total - $pagamento;
    echo "$cliente está faltando: $restante\n"; 
}
if( $pagamento == $total){
    echo "$cliente tudo certo por aqui\n";
}

