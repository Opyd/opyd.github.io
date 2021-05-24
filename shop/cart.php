<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>AudioVodoo</title>
    <script>
    function resetujSesje(){
        
    }
    </script>
</head>
<body>
    <body>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-1">Sklep AudioVodoo</h1>
              <p class="lead">Najlepsze produkty za najwyższą cenę.</p>
            </div>
          </div>
          <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">AudioVodoo</a>
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
                        <a class="nav-link" href="login.php">Logowanie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Rejestracja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="cart.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path> </svg></a>
                    </li>
                </ul>
              </div>
            </div>
          </nav>
            <?php
                session_start();

                if(isset($_POST["u_subs"])){
                    $_SESSION["n_subs"] = (int)$_POST["u_subs"];
                }
                if(isset($_POST["u_stands"])){
                    $_SESSION["n_stands"] = (int)$_POST["u_stands"];
                }
                if(isset($_POST["u_speakers"])){
                    $_SESSION["n_speakers"] = (int)$_POST["u_speakers"];
                }



                if(isset($_SESSION["n_subs"])){
                    $n_subs = $_SESSION["n_subs"];
                }
                if(isset($_SESSION["n_stands"])){
                    $n_stands = $_SESSION["n_stands"];
                }
                if(isset($_SESSION["n_speakers"])){
                    $n_speakers = $_SESSION["n_speakers"];
                }

                
            ?>
          <div class="container mb-4">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col"> </th>
                                    <th scope="col">Produkt</th>
                                    <th scope="col" class="text-center">Ilość</th>
                                    <th scope="col" class="text-right">Cena</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                if(isset($n_subs) && $n_subs > 0){
                                    echo "                             <tr>
                                    <td><img src='produkty/subwoofer/subwoofer.png' style='width: 50px;' /> </td>
                                    <td>Subwoofer</td>
                                    <form method='post' target='cart.php'>
                                    <td><input class='form-control' type='number' min=0 name='u_subs' value=$n_subs /></td>
                                    <td class='text-right'>".($n_subs*1300)." zł</td>
                                    <td class='text-right'><button type='submit' class='btn btn-sm btn-success'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-counterclockwise' viewBox='0 0 16 16'>
                                    <path fill-rule='evenodd' d='M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z'/>
                                    <path d='M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z'/>
                                  </svg> </button> </td>
                                    </form>
                                </tr>";
                                }
                                if(isset($n_stands) && $n_stands > 0){
                                    echo "                             <tr>
                                    <td><img src='produkty/stand/podstawka.png' style='width: 50px;' /> </td>
                                    <td>Podstawka</td>
                                    <form method='post' target='cart.php'>
                                    <td><input class='form-control' type='number' min=0 name='u_stands' value=$n_stands /></td>
                                    <td class='text-right'>".($n_stands*120)." zł</td>
                                    <td class='text-right'><button type='submit' class='btn btn-sm btn-success'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-counterclockwise' viewBox='0 0 16 16'>
                                    <path fill-rule='evenodd' d='M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z'/>
                                    <path d='M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z'/>
                                  </svg> </button> </td>
                                    </form>
                                </tr>";
                                }
                                if(isset($n_speakers) && $n_speakers > 0){
                                    echo "                             <tr>
                                    <td><img src='produkty/glosniki/glosniki.png' style='width: 50px;' /> </td>
                                    <td>Glośniki</td>
                                    <form method='post' target='cart.php'>
                                    <td><input class='form-control' type='number' min=0 name='u_speakers' value=$n_speakers /></td>
                                    <td class='text-right'>".($n_speakers*779)." zł</td>
                                    <td class='text-right'><button type='submit' class='btn btn-sm btn-success'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-counterclockwise' viewBox='0 0 16 16'>
                                    <path fill-rule='evenodd' d='M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z'/>
                                    <path d='M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z'/>
                                  </svg> </button> </td>
                                    </form>
                                </tr>";
                                }
                                $suma = 0;
                                if(isset($n_speakers)){
                                    $suma += $n_speakers*779;
                                }
                                if(isset($n_stands)){
                                    $suma += $n_stands*120;
                                }
                                if(isset($n_subs)){
                                    $suma += $n_subs*1300;
                                }
                                
                                ?>
                                </tr>
                                
                                    <?php
                                    if($suma > 0){
                                        echo "
                                        <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Razem</td>
                                    <td class='text-right'>".$suma."</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Dostawa</td>
                                    <td class='text-right'>50 zł</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><strong>Razem z dostawą</strong></td>
                                    <td class='text-right'><strong>".($suma+50)."</strong></td>
                                </tr>
                                        ";
                                    }else{
                                        echo "
                                        <tr>
                                        <td colspan='5' style='text-align:center;'>Koszyk jest pusty</td>
                                        </tr>
                                        ";
                                    }
                                    ?>
                                    
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="row">
                        <div class="col-sm-6  col-md-6">
                            <a href="index.php"><button class="btn btn-block btn-light">Powrót do zakupów</button></a>
                        </div>
                        <div class="col-sm-6 col-md-6 text-right">
                            <button class="btn btn-lg btn-block btn-success text-uppercase">Do kasy</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          
</body>
</php>