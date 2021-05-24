<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>AudioVoodo</title>
    <style>
.tales {
  width: 100%;
}
.carousel-inner{
  width:100vw;
  max-height: 200px;
  margin-bottom: 1vw;
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
          <a class="navbar-brand" href="index.php">AudioVodoo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Strona Główna</a>
              </li>
            </ul>
            <ul class="navbar-nav me-e mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Logowanie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Rejestracja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                      <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path> </svg> Koszyk</a>
                </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="media/baner/banner.png" class="d-block w-100" alt="banner">
          </div>
          <div class="carousel-item">
            <img src="media/baner/banner.png" class="d-block w-100" alt="banner">
          </div>
          <div class="carousel-item">
            <img src="media/baner/banner.png" class="d-block w-100" alt="banner">
          </div>
        </div>
      </div>
      <div class="container">
        <h1>Spis produktów <span class="badge bg-secondary">3</span></h1>
      <div class="row">
        <div class="card" style="width: 40vh;margin: 10px;">
            <img src="media/produkty/glosniki.png" class="card-img-top" alt="Głośniki">
            <div class="card-body">
              <h5 class="card-title">ELAC Debut 2.0 B6.2 (walnut)</h5>
              <p class="card-text">Świetne granie, ale tylko jeśli masz potężny zasilacz. </p>
             
            </div>
            <div class="card-footer text-center">
                <a href="produkty/glosniki/glosniki.php" class="btn btn-primary">Karta produktu</a>
            </div>
          </div>
          <div class="card" style="width: 40vh;margin: 10px;">
            <img src="media/produkty/podstawka.png" class="card-img-top" alt="Podstawka do głośników">
            <div class="card-body">
              <h5 class="card-title">Majik 109 stand</h5>
              <p class="card-text">Kolumny głośnikowe idealne do postawienia na półkę lub meble. Podstawki z magnezu likwidują wibracje i szkodliwe fale 5G!!!</p>
            </div>
            <div class="card-footer text-center">
                <a href="produkty/stand/podstawka.php" class="btn btn-primary">Karta produktu</a>
            </div>
          </div>
          <div class="card" style="width: 40vh;margin: 10px;">
            <img src="media/produkty/subwoofer.png" class="card-img-top" alt="Subwoofer">
            <div class="card-body">
              <h5 class="card-title">Subwoofer SW-5</h5>
              <p class="card-text">Subwoofer typu głośny. Budzi sąsiadów.</p>
            </div>
            <div class="card-footer text-center">
                <a href="produkty/subwoofer/subwoofer.php" class="btn btn-primary">Karta produktu</a>
            </div>
          </div>
          
      </div>
    </div>
</body>
</php>