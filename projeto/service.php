<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!--Aluno: Felipe da Silva Gomes
        Matricula: 202204215748-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Felipe da Silva Gomes">
    <title>Banco BV FALSO</title>
    <?php include("header.php");?>
</head>

<?php
session_start();


if (!isset($_SESSION['usuario'])) {
  ECHO "<br><br>";
  echo "VOCÊ PRECISA ESTAR LOGADO PARA VISUALIZAR ESSE CONTEUDO.";
  exit();
}

?>

<h1>ola admin você esta vendo isso</h1>