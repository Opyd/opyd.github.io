<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>AudiVodoo</title>
    <style>
        input, textarea{
            margin-bottom: 5px;
        }
    </style>
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

      <br>
      <div class="container bootstrap snippets bootdey">
        <div class="row">
            <div class="col-sm-6 push-bit">
                <div class="row push-bit">
                    <div class="col-xs-6">
                        <a href="https://placeholder.com"><img src="https://via.placeholder.com/350"></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 push-bit">
                <div class="clearfix">
                    <div class="pull-right">
                        <span class="h2"><strong>Cena</strong></span>
                    </div>
                    <span class="h4">
                        <strong class="text-success">Przykładowy produkt</strong><br />
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
                <form>
                    <div class="form-group">
                        <label>Ilość:</label>
                        <input type="number" placeholder="1" max="15" min="1" class="form-control"><button type="submit" class="btn btn-info">Dodaj do koszyka</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <hr />
    
    <div class="container">
        <h1 style="margin-bottom: 5vw;">Edycja produktu</h1>
        <div class="row">
        <div class="col-md-3">
            <h2>Dodaj zdjęcie / zdjęcia</h2>
            <div class="mb-3">
              <input class="form-control" type="file" id="formFileMultiple" multiple>
            </div>
    </div>
    <div class="col-md-6">
        <div class="contact-form">
            <div class="form-group">
              <div class="col-sm-10 mb-3">    
                      
                <input type="text" class="form-control" id="pname" placeholder="Nazwa produktu" name="pname" required>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-10 mb-3"">          
                <input type="number" class="form-control" id="pq" placeholder="Wprowadź ilość sztuk" name="pq" required>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-10 mb-3"">
                <input type="number" class="form-control" id="email" placeholder="Wprowadź cenę" name="pprize" required>
              </div>
            </div>
            <div class="form-group">
                <div class="form-group">
                    <div class="col-sm-10 mb-3"">
                      <select class="form-control" id="pcategory" required>
                          <option>Wzmacniacze</option>
                          <option>Głośniki</option>
                          <option>Podstawki</option>
                      </select>
                    </div>
                  </div>
              <div class="col-sm-10 mb-3">
                <textarea class="form-control" rows="5" id="Opis" required placeholder="Wprowadź opis"></textarea>
              </div>
            </div>

        </div>
    </div>
    <div class="col-md-3 text-center">
        <h2>Opcje</h2>
        <div class="row">
            <div class="col-md-6">
                <button class="btn btn-primary mt-4 signup">Zapisz dane</button>
        
            </div>
            <div class="col-md-6">
                <button class="btn btn-danger mt-4">Usuń produkt</button>
        
            </div>
            
        </div>
        
</div>
</div>
</div>
</body>
</html>