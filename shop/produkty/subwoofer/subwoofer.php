<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>AudiVodoo</title>
    <?php
          session_start();
            if(isset($_POST["n_subs"])){
                if(!isset( $_SESSION["n_subs"])){
                    $_SESSION["n_subs"] = 0;
                }
                $_SESSION["n_subs"] += (int)($_POST["n_subs"]);
            }

    ?>
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-1">Sklep AudioVodoo</h1>
          <p class="lead">Najlepsze produkty za najwyższą cenę.</p>
        </div>
      </div>


      <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="../../index.php">AudioVodoo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../../index.php">Strona Główna</a>
              </li>
            </ul>
            <ul class="navbar-nav me-e mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="../../login.php">Logowanie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../register.php">Rejestracja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../cart.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path> </svg></a>
                </li>
            </ul>
          </div>
        </div>
      </nav>

      
      <div class="container bootstrap snippets bootdey">
        <div class="row">
            <div class="col-sm-6 push-bit">
                <div class="row push-bit">
                    <div class="col-xs-6">
                        <img src="subwoofer.png" alt="" class="img-responsive" width="100%"/>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 push-bit">
                <div class="clearfix">
                    <div class="pull-right">
                        <span class="h2"><strong>1300 zł</strong></span>
                    </div>
                    <span class="h4">
                        <strong class="text-success">Subwoofer SW-5</strong><br />
                        <small>Dostępnych: </small><small id="stan">15</small>
                    </span>
                </div>
                <hr />
                <p>
                    Membrany głośników niskotonowych wykonane w technologii IMG (Injection Molded Graphite) są wyjątkowo lekkie, a jednocześnie niezwykle sztywne - umożliwiając przez to niespotykanie szybką odpowiedź w zakresie niskich częstotliwości przy minimalnym zniekształceniu.
                </p>
                <p>
                    Wbudowany wzmacniacz cyfrowy zapewnia odpowiednią moc w połączeniu z wysoką wydajnością i wierną reprodukcją dźwięku. Gwarantuje to najwyższą wydajność dla maksymalnej mocy akustycznej i szczegółowości.
                </p>
                <hr />
                <form method="post" action="subwoofer.php">
                    <div class="form-group">
                        <label>Ilość:</label>
                        <input type="number" placeholder="1" max="15" min="1" class="form-control" name="n_subs">
                        <input type="submit" class="btn btn-info" value="Dodaj do koszyka">
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>