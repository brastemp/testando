<?php
session_start();
// Obtenha o nome de usuário e a senha fornecidos pelo usuário (você pode adaptar esse código de acordo com a sua implementação)
$username = $_POST['usuario'];
$password = $_POST['senha'];

// Realize a verificação de login no banco de dados
// Substitua 'seu_host', 'seu_usuario', 'sua_senha' e 'seu_banco_de_dados' pelas informações do seu banco de dados
$mysqli = new mysqli('localhost', 'root', '1234567', 'login');

if ($mysqli->connect_error) {
  die('Erro na conexão: ' . $mysqli->connect_error);
}

// Consulta SQL para verificar o nome de usuário e a senha na tabela 'users'
$query = "SELECT * FROM users WHERE user = '$username' AND senha = '$password'";
$result = $mysqli->query($query);

if ($result->num_rows > 0) {
  // Login bem-sucedido
  $_SESSION['usuario'] = $username;
  header('Location: index.php');
} else {
  // Login inválido
  echo 'Nome de usuário ou senha inválidos';
}

// Feche a conexão com o banco de dados
$mysqli->close();
?>
