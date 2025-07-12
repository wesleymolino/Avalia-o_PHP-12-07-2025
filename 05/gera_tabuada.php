<?php
$numero_tabuada = $_POST['numero_tabuada'];
$i = 1;
do {
    echo "$numero_tabuada x $i = " . ($numero_tabuada * $i) . "<br>";
    $i++;
} while ($i <= 10);
?>