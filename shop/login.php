<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>AudioVodoo</title>
    <style>
        .form-input{
            margin-bottom: 10px;
        }
    </style>
    <?php

      $users = array("admin@admin.com","mod@mod.com","user@user.com");
      $flag = 0;
      if(!empty($_POST["email"]) && !empty($_POST["password"])){
        foreach($users as $usr){
          if($_POST["email"] == $usr && $_POST["password"] == "abc"){
            setcookie("email",$_POST["email"],time()+3600);
            setcookie("password",$_POST["password"],time()+3600);
            $logged = $usr;
            $flag = 1;
          }
        }
        if($flag == 0){
          $invalid = true;
        }
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
          <a class="navbar-brand" href="index.php">AudioVodoo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Strona Główna</a>
              </li>
            </ul>
            <ul class="navbar-nav me-e mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="login.php">Logowanie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Rejestracja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php
                    if(isset($_COOKIE["email"])){
                      echo $_COOKIE["email"];
                    }
                    ?></a>
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
                    <div class="form-input"> <i class="fa fa-envelope"></i> 
                        <input type="email" class="form-control" name="email" placeholder="Login" required> 
                    </div>

                    <div class="form-input"> <i class="fa fa-lock"></i> 
                        <input type="password" class="form-control" name="password" placeholder="Hasło"required> 
                    </div>
                    
                    <input type="submit" class="btn btn-primary mt-4 signup" value="Zaloguj się">
                </form>
                    <div class="text-center mt-4"> <span>Nie masz konta?</span> <a href="register.php" class="text-decoration-none">Rejestracja</a> </div>
                    <p id="error">
                    <?php
                  session_start();
                  $con = mysqli_connect("localhost","root","","psw");
                  if(isset($_POST['email'])){
                    $email = $_POST['email'];
                    $password = md5($_POST['password']);
                    $query = "SELECT * FROM `users` WHERE email='$email' and password='$password'";
                    $result = mysqli_query($con,$query) or die(mysql_error());
                    $rows = mysqli_num_rows($result);
                      if($rows==1){
                          $_SESSION['login_user'] = $email;
                          echo "<h1>Pomyślnie zalogowano!</hi><br /><h2>Witaj $email!</h2>";
                      }else{
                          echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
                      }
                    }
                 ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>