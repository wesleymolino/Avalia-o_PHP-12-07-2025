<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $peso = $_POST['peso'];
  $altura = $_POST['altura'];
  $genero = $_POST['genero'];

  if($genero == 'masculino') {
    $imc = $peso / ($altura * $altura);
    if($imc < 20){
      $resultado = "Abaixo do peso";
    } 
        elseif($imc >=20 && $imc <= 24.9) {
      $resultado = "Normal";
    }
        elseif($imc >=25 && $imc <= 29.9) {
      $resultado = "Obesidade leve";
    }
         elseif($imc >=30 && $imc <= 39.9) {
      $resultado = "Obesidade Moderada";
    }
         else{
      $resultado = "Obesidade mórbida";
    }
        
  }
  elseif($genero == 'feminino') {
    $imc = $peso / ($altura * $altura);
    if($imc < 19){
      $resultado = "Abaixo do peso";
    } 
        elseif($imc >=19 && $imc <= 23.9) {
      $resultado = "Normal";
    }
        elseif($imc >=24 && $imc <= 28.9) {
      $resultado = "Obesidade leve";
    }
         elseif($imc >=29 && $imc <= 38.9) {
      $resultado = "Obesidade Moderada";
    }
         else{
      $resultado = "Obesidade mórbida";
    }
  }
  else {
    $resultado = "Por favor, selecione um gênero.";
  }

  
  echo "<h2>Seu IMC é: " . number_format($imc, 2) . "</h2>";
  echo "<p>Resultado: $resultado</p>";
}
?>