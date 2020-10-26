
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
                              <img src="img/imc.jpg" class="d-block w-100" alt="...">
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

                $peso = 0;
                $altura = 0;
                $altura2 = 0;
                $imc = 0;
                
                ?>

                    <?php if (isset($_POST["calcular"])): ?>
                    <?php        

                        $peso = $_POST["peso"];
                        $altura = $_POST["altura"];

                        $altura2 = $altura * $altura;
                        $imc = round ( $peso / $altura2 , 1);
                        
                    ?>
                    <?php endif ?>

                    <?php if (isset($_POST["borrar"])): ?>

                    <?php         

                        $peso = $_POST["peso"];
                        $altura = $_POST["altura"];

                        $resultado = 0;
                        $altura = 0;
                        $peso = 0;
                    ?>

                    <?php endif ?>

                    <form action ="punto2.php" method ="POST">

                    <div class = "container">  
                    <div class="row justify-content-center">
                        <div class="col-auto my-1 ">
                        <button type="submit" class="btn btn-outline-success margenbotoncalcu" name="calcular">Calcular</button>
                        </div>

                        <div class="row justify-content-center">
                        <div class="col-auto my-1 ">
                        <button type="submit" class="btn btn-outline-dark margenbotoncalcu" name="borrar">Borrar</button>
                        </div>
                    </div>
                    </div>

                    <div class="form-row justify-content-center cartillas2">
                        <div class="col-5 justify-content-center">
                        <label for="exampleInputEmail1">Peso en Kilos</label>
                        <input type="text" class="form-control text-center" placeholder="altura" name="peso" value="<?php echo($peso)?>">
                        </div>
                        <div class="col-5 justify-content-center">
                        <label for="exampleInputEmail1">Altura en metros</label>
                        <input type="text" class="form-control text-center " placeholder="peso" name="altura" value="<?php echo($altura)?>">
                        </div>
                        <div class="col-2 justify-content-center">
                        <label for="exampleInputEmail1">Resultado</label>
                        <input type="text" class="form-control resultadoimc text-center" placeholder="resultado" name="resultado" value="<?php echo($imc)?>">
                        </div>
                         </div>
                        </div>
                        </div>
                        </div>

                        <div class = "container">
                            <div class = "row justify-content-center text-center ">
                            <div class ="col-12">

                                <?php if ($imc > 1 && $imc < 18.5):  ?>

                                    <h3 class = "textoimc text-primary"><?php echo("Peso insufiente")?></h3>
                                    <p class = "text-primary">Come 5 porciones de frutas y verduras por día. </p>
                                    <p>Las frutas y verduras son mucho más que simplemente vitaminas y minerales. También están llenas de fibra, lo cual significa que te llenarán. Y cuando te llenas con frutas y verduras, tienes menos probabilidades de comer demás.</p>
                                    <p class = "text-primary">No te saltees el desayuno.</p>
                                    <p> El desayuno pone en marcha tu metabolismo, para que queme calorías desde el principio, y te da energía para hacer más cosas durante el día. Las personas que se saltean el desayuno suelen estar tan hambrientas que más tarde comen más. Entonces, ingieren más calorías de las que habrían ingerido si hubiesen desayunado. De hecho, las personas que se saltean el desayuno suelen tener un IMC superior al de las personas que desayunan.</p>

                                <?php elseif ($imc >= 18.5 && $imc < 24.9):?>

                                    <h3 class = "textoimc text-success"><?php echo("Peso normal")?></h3>
                                    <p>Estas en tu peso mas saludable pero no olvides realizar actividad fisica con frecuencia, 30  minutos al dia seria un buen comienzo y recuerda mantener tu dieta con un consumo regulado de grasas... ¡sigue asi!</p>
            
                                <?php  elseif ($imc >= 25 && $imc < 26.9): ?>

                                    <h3 class = "textoimc text-warning"><?php echo("Sobrepeso tipo 1")?></h3>
                                    <p class = "text-warning">¡Cuidado!</p>
                                    <p>Llevar una dieta sana y equilibrada, junto con la práctica regular de ejercicio físico, son claves para la prevención de la obesidad.</p>

                                <?php  elseif ($imc > 27 && $imc < 29.9): ?>

                                    <h3 class = "textoimc text-warning"><?php echo("Sobre peso tipo 2")?></h3>
                                    <p class = "text-warning">¡Es hora de actuar!</p>
                                    <p>Es muy importante tener una dieta sana y equilibrada. La alimentación debe aportar al cuerpo una cantidad mínima de energía para que funcione normalmente. Las dietas extremas son perjudiciales para la salud y no son una buena solución porque el peso perdido se recupera e incluso aumenta.</p>
                                    <p>Un tratamiento para conseguir el peso apropiado combina actividad física con una dieta saludable y la modificación de las costumbres diarias, ya que perder kilos pasa por transformar nuestro modo de vida y comportamiento. Podemos lograr adelgazar gracias a tratamientos muy avanzados y que no requieren cirugía.</p>

                                <?php elseif ($imc > 30 && $imc <= 34.9): ?>

                                    <h3 class = "textoimc text-danger"><?php echo("Obesidad tipo 1")?></h3>
                                    <p class ="text-danger">Limitar el consumo de alimentos que sean ricos en azúcares y grasas.</p>
                                    <p>Puedes comprobarlo mirando la etiqueta de los productos que comes. Por ejemplo, algunos cereales son ricos en fibra, pero también en azúcares.</p>
                                    <p class ="text-danger">Realizar actividad física frecuente.</p>
                                    <p>unos 60 minutos por día para los jóvenes y 150 minutos semanales para los adultos. En el caso de que haya un alto grado de obesidad, se recomienda comenzar por caminar 30 minutos al día a paso ligero. </p>
                                    <p class ="text-danger">Comer varias veces al día fruta y verdura.</p>
                                    <p>así como legumbres, cereales integrales y frutos secos.</p>
                                    <p class ="text-danger">Deja de fumar, si lo haces</p>
                                    <p>Fumar está asociado con muchas enfermedades, pero también con el aumento de peso. A largo plazo será muy beneficioso para la salud.</p>


                                <?php elseif ($imc > 35 && $imc < 39.9): ?>

                                    <h3 class = "textoimc text-danger"><?php echo("Obesidad tipo 2")?></h3>
                                    <p class ="text-danger">Aumento del gasto calórico</p>
                                    <ul class="list-group list-group-flush body">
                                        <li class="list-group-item texto bg-transparent"><i class="fas fa-heartbeat"></i>En lo que se refiere a la actividad física es aconsejable aumentarla con gestos como subir escaleras, ir caminando para realizar algunas actividades diarias, siempre que sea posible. Dejar el coche siempre que se pueda</li>
                                        <li class="list-group-item texto bg-transparent"><i class="fas fa-heartbeat"></i>Es aconsejable realizar algún tipo de ejercicio varias veces por semana.</li>
                                        <li class="list-group-item texto bg-transparent"><i class="fas fa-heartbeat"></i>Este ejercicio no tendría que exceder  nuestras posibilidades: por ejemplo correr conlleva ciertos riesgos para personas mayores sin embargo andar es un magnífico ejercicio para todo tipo de personas.</li>
                                        <li class="list-group-item texto bg-transparent"><i class="fas fa-heartbeat"></i>Se recomienda que el ejercicio sea de tipo aeróbico porque ayuda a quemar grasa, Pero también hacer algún tipo de ejercicio anaeróbico de forma menos intensa que pueda favorecer el mantenimiento de la masa magra.</li>
                                    </ul>

                                    <p class ="text-danger">Alimentación</p>
                                    <ul class="list-group list-group-flush body">
                                        <li class="list-group-item texto bg-transparent"><i class="fas fa-heartbeat"></i>Se recomienda tomar todos los días tres raciones de fruta, dos de verduras,  tres de lácteos mejor desnatados y las raciones de hidratos de carbono, proteínas y grasa ajustadas a las necesidades personales.  En esta página puede calcular las raciones que necesita y la información sobre los distintos  tipos de alimentos</li>
                                        <li class="list-group-item texto bg-transparent"><i class="fas fa-heartbeat"></i>Elegir alimentos de baja densidad energética: frutas con mucha agua, pescado, verduras… en esta página encontrara información</li>
                                        <li class="list-group-item texto bg-transparent"><i class="fas fa-heartbeat"></i>Hacer varias comidas al día. Se recomiendan cinco</li>
                                        <li class="list-group-item texto bg-transparent"><i class="fas fa-heartbeat"></i>Aumentar el consumo de fibra dietética y elegir alimentos integrales como pan, pasta, harinas…sin refinar</li>
                                     </ul>
                                    <p class ="text-danger textoimc">El ejercicio físico ¡regular! es una buena inversión en salud!</p>

                                <?php    elseif ($imc > 40 && $imc < 49.9): ?>

                                    <h3 class = "textoimc text-danger"><?php echo("Obesidad tipo 3")?></h3>
                                    <p class = "text-danger">Pequeños cambios, grandes resultados</p>
                                    <ul class="list-group list-group-flush body">
                                        <li class="list-group-item texto bg-transparent"><i class="fas fa-heartbeat"></i>Introducir abundantes frutas y verduras crudas o cocidas (al menos cinco unidades al día), lácteos desnatados, cereales integrales.</li>
                                        <li class="list-group-item texto bg-transparent"><i class="fas fa-heartbeat"></i>Seleccionar cortes magros de carnes y pescados. Cocinarlos con procedimientos bajos en grasa (al horno, a la plancha, al vapor, papillote, etc.).</li>
                                        <li class="list-group-item texto bg-transparent"><i class="fas fa-heartbeat"></i>Vigilar las cantidades e intentar disminuir poco a poco el consumo de sal y alcohol.</li>
                                        <li class="list-group-item texto bg-transparent"><i class="fas fa-heartbeat"></i>Beber al menos entre 1,5 y 2 litros de agua diarios.</li>
                                        <li class="list-group-item texto bg-transparent"><i class="fas fa-heartbeat"></i>Hacer un desayuno completo, planificar con antelación los menús y distribuir las comidas en al menos cinco ingestas para evitar caer en el picoteo.</li>
                                    </ul>
                                    <br>
                                    <p class="text-black-50">Sin embargo, si limitamos los cambios a la alimentación nos será más difícil alcanzar el objetivo. Es imprescindible acompañar estas modificaciones de la dieta con un aumento gradual en la actividad física diaria. No se trata de convertirse en un atleta de la noche a la mañana, ni tampoco de hacer una actividad extenuante que seamos incapaces de mantener a lo largo del tiempo. Al contrario, hemos de decantarnos por una actividad que podamos incluir fácilmente en nuestra rutina, de manera que aseguraremos su cumplimiento diario. Por ejemplo, ir andando al trabajo, a clase o al mercado; bajar del metro o el autobús unas paradas antes y caminar el resto del trayecto; aparcar el coche más lejos de lo habitual; reemplazar el ascensor por las escaleras; salir a pasear; montar en bicicleta, etc.</p>

                                <?php elseif ($imc > 50): ?>  

                                    <h3 class = "textoimc text-danger"><?php echo("Obesidad tipo 4")?></h3>
                                    <p class = " text-danger">¡Toma soluciones radicales!</p>
                                    <p>Este es el momento de recurrir a ayudas medicas como cirugias, esto comlementara tu ciclo de ejercicio y dieta, recuerda que la obesidad desencadena enfermedades como:</p>
                                    <ul class="list-group list-group-flush body">
                                        <li class="list-group-item texto bg-transparent"><i class="fas fa-heartbeat"></i>Enfermedad coronaria</li>
                                        <li class="list-group-item texto bg-transparent"><i class="fas fa-heartbeat"></i>Diabetes tipo 2</li>
                                        <li class="list-group-item texto bg-transparent"><i class="fas fa-heartbeat"></i>Hipertensión (presión arterial alta)</li>
                                        <li class="list-group-item texto bg-transparent"><i class="fas fa-heartbeat"></i>Enfermedad del hígado y de la vesícula</li>
                                        <li class="list-group-item texto bg-transparent"><i class="fas fa-heartbeat"></i>Artrosis (la degeneración del cartílago y el hueso subyacente de una articulación)</li>
                                    </ul>
                                <?php endif?>
                            </div>
                        </div>
                        </div>
                    </form>
                    </div>
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


