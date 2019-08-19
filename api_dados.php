<?php

		include "conexao.php";

		header("Content-type: text/html; charset=utf-8");

        $stmt = $pdo->prepare('INSERT INTO dados_gerais (id, nome, n_sessao, terapeuta, prototipo, pais) VALUES (:id,:nome, :n_sessao,:terapeuta,:prototipo,:pais)');
        $stmt->execute(array(
          ':id' => $_POST['codigo'],
          ':nome' => $_POST['nome'],
          ':n_sessao' => $_POST['n_sessao'],
          ':terapeuta' => $_POST['terapeuta'],
          ':prototipo' => "Prototipo B (Gamificado)",
          ':pais' => "Brasil"
        ));


?>
