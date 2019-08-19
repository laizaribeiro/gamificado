<?php

  include "conexao.php";
  
  header("Content-type: text/html; charset=utf-8");
  
  $stmt = $pdo->prepare('INSERT INTO clique (id, clique, horario_clique) VALUES(:id,:clique,:horario_clique)');
  $stmt->execute(array(
  ':id' => $_POST['codigoAluno'],
  ':clique' => $_POST['nomeVariavel'],
  ':horario_clique' => $_POST['instante']
));


?>
