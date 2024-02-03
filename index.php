<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="public/assets/css/index.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="../../src/img/logo.png" alt="">
            </div>
            <div class="busca">
                <input type="text" name="pesquisa">
                <label for="pesquisa">Busca</label>
            </div>
            <div class="userLogin">
                <a href="">
                    <i class="bi bi-person-circle"></i>
                </a>
            </div>
        </div>
    </header>

    <?php 
      $url = EXPLODE("/", $_SERVER['REQUEST_URI']);
      if ($url[2] == "") {
         include('app/pages/home/home.php');
      } else {
        
      }
    ?>

</body>

<footer>
    <div class="container">
        <ul>
            <li>
                <a href="">link</a>
            </li>
            <li>
                <a href="">link</a>
            </li>
            <li>
                <a href="">link</a>
            </li>
            <li>
                <a href="">link</a>
            </li>
            <li>
                <a href="">link</a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="">link</a>
            </li>
            <li>
                <a href="">link</a>
            </li>
            <li>
                <a href="">link</a>
            </li>
            <li>
                <a href="">link</a>
            </li>
            <li>
                <a href="">link</a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="">link</a>
            </li>
            <li>
                <a href="">link</a>
            </li>
            <li>
                <a href="">link</a>
            </li>
            <li>
                <a href="">link</a>
            </li>
            <li>
                <a href="">link</a>
            </li>
        </ul>
    </div>
</footer>

</html>