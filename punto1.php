
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <title>Taller 1 de web 1</title>
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
                <div class="col-9">
                    
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                              <img src="img/calculadora.jpg" class="d-block w-100" alt="...">
                          </div>
                         </div>
                      </div>

                </div>
            </div>
        </div>


        <div class="container">
            <div class="row justify-content-around ">
                <div class="col-12">

                <?php 

                $resultado = 0;
                $numero1 = 0;
                $numero2 = 0;
                
                ?>

                <?php if (isset($_POST["suma"])): ?>
                    <?php     
                        $resultado = $_POST["resultado"];
                        $numero1 = $_POST["numero1"];
                        $numero2 = $_POST["numero2"];

                        $resultado = $numero1 + $numero2;
                    ?>
                    <?php endif ?>


                    <?php if (isset($_POST["resta"])): ?>
                    <?php
                        $resultado = $_POST["resultado"];
                        $numero1 = $_POST["numero1"];
                        $numero2 = $_POST["numero2"];

                        $resultado = $numero1 - $numero2;
                    ?>
                    <?php endif ?>


                    <?php if (isset($_POST["multiplicacion"])): ?>
                    <?php     
                        $resultado = $_POST["resultado"];
                        $numero1 = $_POST["numero1"];
                        $numero2 = $_POST["numero2"];

                        $resultado = $numero1 * $numero2;
                    ?>
                    <?php endif ?>


                    <?php if (isset($_POST["division"])): ?>
                    <?php     
                        $resultado = $_POST["resultado"];
                        $numero1 = $_POST["numero1"];
                        $numero2 = $_POST["numero2"];

                        $resultado = $numero1 / $numero2;
                    ?>
                    <?php endif ?>
                    

                    <?php if (isset($_POST["borrar"])): ?>
                    <?php                        
                        $resultado = $_POST["resultado"];
                        $numero1 = $_POST["numero1"];
                        $numero2 = $_POST["numero2"];

                        $resultado = 0;
                        $numero1 = 0;
                        $numero2 = 0;
                    ?>
                    <?php endif ?>

                    <form action ="punto1.php" method ="POST">

                    <div class="form-row cartillas1">
                        <div class="col-4">
                        <input type="text" class="form-control" placeholder="numero 1" name="numero1" value="<?php echo($numero1)?>">
                        </div>
                        <div class="col-4">
                        <input type="text" class="form-control" placeholder="numero 2" name="numero2" value="<?php echo($numero2)?>">
                        </div>
                        <div class="col-4">
                        <input type="text" class="form-control" placeholder="resultado" name="resultado" value="<?php echo($resultado)?>" >
                        </div>
                    </div>
                    
                    <div class="row justify-content-center">
                        <div class="col-auto my-1 ">
                        <button type="submit" class="btn btn-outline-secondary margenbotoncalcu" name="suma">suma</button>
                        </div>
                        <div class="col-auto my-1 ">
                        <button type="submit" class="btn btn-outline-success margenbotoncalcu" name="resta">Resta</button>
                        </div>
                        <div class="col-auto my-1">
                        <button type="submit" class="btn btn-outline-danger margenbotoncalcu" name="multiplicacion">Multiplicacion</button>
                        </div>
                        <div class="col-auto my-1 ">
                        <button type="submit" class="btn btn-outline-warning margenbotoncalcu" name="division">Division</button>
                        </div>
                        <div class="col-auto my-1 ">
                        <button type="submit" class="btn btn-outline-dark margenbotoncalcu" name="borrar">borrar</button>
                        </div>
                    </div>
                    </form>



                </div>
            </div>
        </div>



    </main>
    <footer>

    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
