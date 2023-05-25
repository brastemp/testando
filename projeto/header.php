<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Banco Genérico</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="contato.php">Contato</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="service.php">Serviços</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="info.php">Quem somos</a>
        </li>
      </ul>
      
      <?php
        session_start();
        $username = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : '';

        if (!empty($username)) {
        echo '<span class="navbar-text">Bem-vindo, ' . htmlspecialchars($username) . '</span>';
        echo '<a href="logout.php" class="btn btn-outline-light ml-2">Logout</a>';
        } else {
        echo '
            <form class="form-inline" action="login.php" method="POST">
            <input class="form-control form-control-sm mr-2" type="text" name="usuario" placeholder="Usuário">
            <input class="form-control form-control-sm mr-2" type="password" name="senha" placeholder="Senha">
            <button class="btn btn-outline-light" type="submit">Login</button>
            </form>
        ';
        }
        ?>
    </div>
  </nav>
  </head>