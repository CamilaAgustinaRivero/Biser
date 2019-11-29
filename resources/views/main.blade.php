<html lang="en" dir="ltr">
<!--<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/fontawesome/css/all.css">
  <link rel="stylesheet" href="css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="img/favicon.ico">

   hay que hacer un include o solucionarlo de otra forma-
</head>-->
  <header>
    <header class="head">
      <div class="divlogo">
        <a href="home.php"> <img class="logo" id="logoLargo" src="img/Biser logo transparent 2.png" alt="logo"> </a>
        <a href="home.php"> <img class="logo" id="logoCorto" src="img/Biser logo B transparent 2.png" alt="logo"> </a>
      </div>

      <nav class="navbar">
        <form class="form-inline">
          <input id="cuadro-info" class="form-control mr-sm-2" type="search" placeholder="¿Qué buscás?" aria-label="Search">
          <button class="btn" type="submit"><ion-icon class="lupa" name="search"></ion-icon></button>
        </form>
      </nav>

      <div class="carrito">
          <label for="carrito"><a href="carrito.php"><i class="fas fa-shopping-cart"></a></i></label>
      </div>

      <div class="hamb">
        <label for="hamb">
          <i class="fas fa-bars"></i>
        </label>

        <input type="checkbox" id="hamb">

        <div class="menu">
            <div class="menu-izq">
              <ul>
                <li><a class="home" href="home.php"><i class="fas fa-home"></i></a></li>
              </ul>
            </div>

            <div class="menu-der">
              <ul>
                <li>
                  <li><a href="perfil.php">Mi cuenta</a></li>
                  <form class="" action="logout.php" method="post">
                    <button type="submit" name="button">Salir</button>
                  </form>
                </li>
              </ul>
            </div>
            <div class="menu-izq">
              <ul>
                <li><a class="home" href="home.php"><i class="fas fa-home"></i></a></li>
              </ul>
            </div>

            <div class="menu-der">
              <ul>
                <li><a href="login.php">Ingresar</a></li>
                <li><a href="registro.php">Registrate</a></li>
              </ul>
            </div>
        </div>
      </div>
    </header>
  </header>
  <body>
    @yield('body')
  </body>
  <footer>

    <div class="divFoot"><a href="home.php">Home</a></div>
    |
    <div class="divFoot"><a href="faq.php">Preguntas Frecuentes</a></div>
    |
    <div class="divFoot"><a href="contacto.php">Contacto</a></div>

  </footer>
</html>
