<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <title>Punto 9</title>
</head>
<body class = "body">

<header>
<nav class="navbar navbar-light bg-info">
        <a class="navbar-brand" href="index.html">
            <img src="img/kisspng-computer-icons-computer-programming-user-interface-browser-icon-5b336e98cc44f8.2093230815300973048367.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            Inicio
        </a>
        </nav>
</header>

<main>

<br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                              <img src="img/futbol3.jpg" class="d-block w-100" alt="...">
                          </div>
                         </div>
                      </div>
                </div>
            </div>
        </div>

        <div class = "container">
        <div class = "row justify-content-center text-center cartillas1">
        <div class = "col-5">

        <?php 
        
        $estatura = 0;
        $resultado = 0;

        ?>

       <?php if (isset($_POST["calcular"])): ?>

              <?php 

                $estatura = $_POST["estatura"];

                if ($estatura < 1.70)
                {
                    $resultado = "Biotipo bajo";
                }
                elseif ($estatura >= 1.70 && $estatura < 1.80)
                {
                    $resultado = "Biotipo promedio";
                }
                elseif ($estatura >= 1.80)
                {
                    $resultado = "Biotipo superior";
                }
                ?>

        <?php endif ?>

                <?php if(isset($_POST["borrar"])): ?>

                    <?php

                        $estatura = 0;
                        $resultado = 0;

                    ?>

                <?php endif ?>

            <form action ="punto9.php" method ="POST">
                <div class="form-group mb-2">
                    <label for="staticEmail2" class="sr-only">Estatura</label>
                    <input type="text" readonly class="form-control-plaintext textofechajugador text-danger" id="staticEmail2" value="Estatura en metros">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label for="inputPassword2" class="sr-only"></label>
                    <input type="text" class="form-control" id="inputPassword2" placeholder="Estatura" name = "estatura" value="<?php echo($estatura)?>">
                </div>
                <div class="form-group mb-2">
                    <label for="staticEmail2" class="sr-only">resultado</label>
                    <input type="text" readonly class="form-control-plaintext textofechajugador text-danger" id="staticEmail2" value="resultado" name = "resultado">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label for="inputPassword2" class="sr-only"></label>
                    <input type="text" class="form-control" id="inputPassword2" placeholder="resultado" value="<?php echo($resultado)?>">
                </div>
                <button type="submit" class="btn btn-outline-danger mb-2 botonedad" name = "calcular">Calcular</button>
                <button type="submit" class="btn btn-outline-secondary mb-2 botonedad" name = "Borrar">Borrar</button>
            </form>
        </div>
        </div>
        </div>



</main>

<footer>

</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/e4f0235d6c.js" crossorigin="anonymous"></script>    
</body>
</html>



