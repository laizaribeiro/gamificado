<?php

    include "conexao.php";

	header("Content-type: text/html; charset=utf-8");
		
    $stmt = $pdo->prepare('INSERT INTO variavel (id, nome_variavel, valor_variavel) VALUES (:id,:nome_variavel,:valor_variavel)');
    $stmt->execute(array(
    ':id' => $_POST['codigo'],
    ':nome_variavel' => $_POST['nome_variavel'],
    ':valor_variavel' => $_POST['valor']
  ));


?>
