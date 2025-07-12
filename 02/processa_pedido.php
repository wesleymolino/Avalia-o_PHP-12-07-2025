<?php
$precos = [
    'coxinha' => 6.00,
    'risole' => 5.50,
    'esfiha' => 7.00,
    'hamburguer_simples' => 15.00,
    'x_bacon' => 18.00,
    'x_tudo' => 22.00,
    'pizza_calabresa' => 10.00,
    'pizza_frango' => 11.00,
    'pizza_portuguesa' => 12.00,
    'refrigerante' => 8.00,
    'suco' => 7.50,
    'agua' => 4.00
];


$categorias = [
    'Salgados' => ['coxinha', 'risole', 'esfiha'],
    'Hambúrgueres' => ['hamburguer_simples', 'x_bacon', 'x_tudo'],
    'Pizzas' => ['pizza_calabresa', 'pizza_frango', 'pizza_portuguesa'],
    'Bebidas' => ['refrigerante', 'suco', 'agua']
];


$itens = [];
foreach ($precos as $item => $preco) {
    $quantidade = isset($_POST[$item]) ? (int)$_POST[$item] : 0;
    if ($quantidade > 0) {
        $itens[$item] = [
            'quantidade' => $quantidade,
            'preco' => $preco,
            'subtotal' => $quantidade * $preco
        ];
    }
}


$subtotais = [];
foreach ($categorias as $categoriaNome => $categoriaItens) {
    $subtotal = 0;
    foreach ($categoriaItens as $item) {
        if (isset($itens[$item])) {
            $subtotal += $itens[$item]['subtotal'];
        }
    }
    $subtotais[$categoriaNome] = $subtotal;
}


$total = array_sum($subtotais);

echo "<pre>Resumo do Pedido\n\n";
foreach ($categorias as $categoriaNome => $categoriaItens) {
    echo "$categoriaNome:\n";
    foreach ($categoriaItens as $item) {
        if (isset($itens[$item])) {
            $nome = ucfirst(str_replace(['_', 'pizza'], [' ', 'Pizza'], $item));
            $qtd = $itens[$item]['quantidade'];
            $preco = number_format($itens[$item]['preco'], 2, ',', '.');
            $sub = number_format($itens[$item]['subtotal'], 2, ',', '.');
            echo "- $nome: $qtd x R$ $preco = R$ $sub\n";
        }
    }
    $subcat = number_format($subtotais[$categoriaNome], 2, ',', '.');
    echo "Subtotal $categoriaNome: R$ $subcat\n\n";
}
$valorTotal = number_format($total, 2, ',', '.');
echo "Valor Total da Compra: R$ $valorTotal\n</pre>";