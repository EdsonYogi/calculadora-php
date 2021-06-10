<?php
  $valor01 = $_GET["valor01"] != "" ? $_GET["valor01"] : 0;
  $valor02 = $_GET["valor02"] != "" ? $_GET["valor02"] : 0;
  $operador = $_GET["operador"] != "" ? $_GET["operador"] : 0;

  switch ($operador) {
    case 1:
      $resultado = $valor01 + $valor02;
      echo "<h1>Resultado: $valor01 + $valor02 = $resultado</h1>";
      break;
    case 2:
      $resultado = $valor01 - $valor02;
      echo "<h1>Resultado: $valor01 - $valor02 = $resultado</h1>";
      break;
    case 3:
      $resultado = $valor01 / $valor02;
      echo "<h1>Resultado: $valor01 / $valor02 = $resultado</h1>";
      break;
    case 4:
      $resultado = $valor01 * $valor02;
      echo "<h1>Resultado: $valor01 * $valor02 = $resultado</h1>";
      break;
  default:
      echo "Operado inválido";
      break;
  }
?>