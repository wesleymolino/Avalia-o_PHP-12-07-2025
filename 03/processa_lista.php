<?php

$lista_compras = array("Pão", "Leite", "Café");


if (isset($_POST['item_compra'])) {
    $novo_item = $_POST['item_compra'];
    $lista_compras[] = $novo_item;
}


echo "<ul>";
foreach ($lista_compras as $item) {
    echo "<li>$item</li>";
}
echo "</ul>";
?>