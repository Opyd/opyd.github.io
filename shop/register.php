<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AudioVodoo</title>
    <style>
        .form-input{
            margin-bottom: 10px;
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
                    <a class="nav-link" aria-current="page" href="index.html">Strona Główna</a>
                  </li>
                </ul>
                <ul class="navbar-nav me-e mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Logowanie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="register.php">Rejestracja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path> </svg></a>
                    </li>
                </ul>
              </div>
            </div>
          </nav>

          <div class="container mt-5 mb-5">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-md-6">
                    <div class="card px-5 py-5"> <span class="circle"><i class="fa fa-check"></i></span>
                        <form method="post" action="">
                            <div class="form-input">
                                <i class="fa fa-envelope">Data urodzenia</i>
                                <input type="date" class="form-control"  name="d_ur" required>
                            </div>
                        <div class="form-input"> <i class="fa fa-envelope">Adres email:</i> 
                            <input type="email" class="form-control" name="email" required> 
                        </div>
                        <div class="form-input"> 
                            <i class="fa fa-user">Nazwa użytkownika</i> <input type="text" class="form-control" name="login" required> 
                        </div>
                        <div class="form-input"> <i class="fa fa-lock">Hasło</i> 
                            <input type="password" class="form-control" name="password" required> 
                        </div>
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" required> <label class="form-check-label" for="flexCheckChecked"> Zgadzam się z <a target="_blank" class="text-decoration-none" href="regulamin.txt">regulaminem</a> </label> </div> 
                        <button type="submit" class="btn btn-primary mt-4 signup">Załóż konto</button>
                        <?php
                        $con = mysqli_connect("localhost","root","","psw");
                        if(isset($_POST['login'])){
                            $login = $_POST['login'];
                            $password = md5($_POST['password']);
                            $email = $_POST['email'];
                            $d_ur = $_POST['d_ur'];
                            $query = "INSERT INTO `users`(`email`, `username`, `password`, `birth_d`) VALUES ('$email','$login','$password','$d_ur')";
                            $result = mysqli_query($con,$query);
                            if($result){
                            echo "<div style='text-align:center;'>
                                <h3>Pomyślnie założyłeś konto</h3>";
                            }
                        }
                        ?>
                    </form>
                        <div class="text-center mt-4"> <span>Masz już konto?</span> <a href="login.php" class="text-decoration-none">Logowanie</a> </div>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>