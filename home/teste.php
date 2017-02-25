<?php

  include("../conectarBD.php");

  if (isset($_POST) && !empty($_POST)) {
    //criando variaveis vindas do post
    foreach ($_POST as $key => $value) {
      $$key = $value;
    }

    $BuscaFuncionario = $conexao_pdo->prepare("SELECT * FROM funcionarios WHERE setor LIKE '%$setor%'");
    $BuscaFuncionario->execute();
    $resultado = $BuscaFuncionario->fetchAll();
    $cont = $BuscaFuncionario->rowCount();

    if($cont >= 1) {
      echo json_encode($resultado);
    }
    else {
      echo 0;
    }
  }
  else {
    echo 'sem dados post';
  }
?>