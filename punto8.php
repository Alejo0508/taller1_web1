
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <title>Punto 8</title>
</head>
<body class ="body">

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
                <div class="col-10">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                              <img src="img\futbol.jpg" class="d-block w-100" alt="...">
                          </div>
                         </div>
                      </div>

                </div>
            </div>
        </div>

</header>
    
<main>

<div class = "container">
    <div class = "row justify-content-center cartillas2">
        <div class = "col-10">

        <div class="alert alert-success" role="alert">
        <h4 class="alert-heading textofechajugador">Ingresa la fecha de nacimiento del jugador</h4>
        </div>

        <?php 
                    
             $fecha = 0;
            $resultadoedad = 0;
                    
        ?>

                
        <?php if (isset($_POST["calcular"])): ?>

        <?php

        $fecha = $_POST["fecha"];
        $edad;
        $nacimiento;

        function calcularEdad($nacimiento)
        {
            $edad = (2020 - $nacimiento);
            return $edad;
        }

        $resultadoedad = calcularEdad($fecha);

        ?>
        <?php endif ?>

        <?php if (isset($_POST["borrar"])): ?>

            <?php 
                
                $fecha = 0;
                $resultadoedad = 0;             

                ?>

        <?php endif ?>    

      <form action ="punto8.php" method ="POST">
            <div class="form-row align-items-center textoimc">
                <div class="col-sm-4 my-1">
                <label for="exampleInputEmail1" class="text-dark">Fecha de nacimiento</label>
                <input type="text" class="form-control" id="inlineFormInputName" name ="fecha" value = "<?php echo($fecha)?>">
                </div>
                         


                <div class="col-sm-4 my-1">
                <label for="exampleInputEmail1" class="text-dark">Edad</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-futbol"></i></div>
                    </div>
                    <input type="text" class="form-control" id="inlineFormInputGroupUsername" name = "edad" value="<?php echo($resultadoedad)?>">
                </div>
                </div>
                <div class="col-auto my-1">
                <button type="submit" class="btn btn btn-success botonedad" name = "calcular">Calcular</button>
                </div>
                <div class="col-auto my-1">
                <button type="submit" class="btn btn btn-warning botonedad2" name = "borrar">Borrar</button>
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
<script src="https://kit.fontawesome.com/e4f0235d6c.js" crossorigin="anonymous"></script>
</body>
</html>



