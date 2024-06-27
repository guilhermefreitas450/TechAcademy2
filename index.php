<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEVELUP</title>
     <link  href="https://fontawesome.com/">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Jersey+25+Charted&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style.scss">
    <link rel="shortcut icon" href="imagens/logo.jpg">
</head>
<body>
    <header class="header">
    <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="home">
        <img src="imagens/logo.jpg" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="membros">membros</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="contato">contato</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            catalogo
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="galactic">galactic</a></li>
            <li><a class="dropdown-item" href="dungeons">dungeons</a></li>
            <li><a class="dropdown-item" href="flappy">flappyBurnes</a></li>
            <li><a class="dropdown-item" href="swamp">swamp</a></li>
          </ul>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
</header>
<main>
<?php

if (isset($_GET["param"])) {
    $param = $_GET["param"];
    $p = explode("/", $param);

}

$paginas = $p[0] ?? "home";
$jogo = $p[1] ?? "dungeons";

if ($paginas == "jogo") {
    $paginas = "jogo/{$jogo}.php";
} else {
    $paginas = "paginas/{$paginas}.php";
}

if (file_exists($paginas)){
    include $paginas;
} else{
    include "paginas/404.php";
}
?>
</main>
<footer class="footer">
    <p>desenvolvido por guiherme</p>
  
</footer>
</body>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/fslightbox.js"></script>
</html>