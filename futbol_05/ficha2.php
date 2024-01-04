<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/ficha2.css">
</head>



<body>
    <form method="POST"> <!-- El método POST se utiliza para enviar datos de un formulario a una base de datos -->
        <header class="content_header"> <!-- Esta es la barra de navegación en mi ficha2.php, -->
            <div class="logo">
                <a href="#">
                    <img alt="Casa del Libro" width="138" height="28" src="./assets/img/LaLiga.jpg" class="logo"
                        data-v-ecd2bb84="">
                </a>
            </div>
            <div class="buscador_texto">
                <input type="text" id="buscador" name="Nombre" placeholder="Busca por Nombre">
            </div>

            <div class="buscador_texto">
                <input type="text" id="buscador2" name="Apellido" placeholder="Busca por Apellido">
            </div>

            <div class="buscador_lupa">
                <button type="submit" name="buscar" id="lupa">
                    <i class="fa-solid fa-magnifying-glass" style="color: #fff"></i>
                </button>
            </div>
            
        </header>
    </form>

    <div class="head"></div>
    <?php
                include ('EnvioDatos.php'); /* Este es el comando que sirve para pasar mis datos a mi base de datos */

                $inc = include("con_db.php"); /* Lo almaceno en la variable $inc */

                if($inc){

                $consulta= "SELECT*FROM jugador;"; /* Una consulta a mi tabla 'jugador' dentro de mi base de datos */

                $resultado = mysqli_query($conex, $consulta); /* Almaceno la conex y la consulta en la variable $resultado */

            
                    if($resultado){/* Si se produce la conexion que se ejecute el if */
                        while($row = $resultado->fetch_array()){ /* Mientras entre en el if, que se almacene los datos en las columnas   */
                            $nombre= $row['Nombre'];
                            $apellido = $row['Apellidos'];
                            $domicilio = $row['Domicilio'];
                            $edad = $row['Edad'];
                            $img = $row['img'];
                            $equipo = $row ['Equipo'];
                            $nombre_del_equipo = $row['Nombre_Del_Equipo'];

                            $camiseta = $row['Camiseta'];
                            $calcetines = $row['Calcetines'];
                            $botas = $row['Botas'];
                            $pantalón = $row['Pantalon'];

                            $grupo_Sanguíneo = $row['Grupo_Sanguineo'];
                            $lesiones = $row['Lesiones'];
                            $dolencias = $row['Dolencias'];

                            $precisiónPases = $row['Precision_Pases'];
                            $controlCuerpo = $row['Control_Cuerpo'];
                            $concienciaciónEspacial = $row['Concienciacion_Espacial'];
                            $conocimientoTáctico = $row['Conocimiento_Tactico'];
                            $evaluación_Riesgos = $row['Evaluacion_Riesgos'];
                            $equilibrioCoordinación = $row['Equilibrio_Coordinacion'];
                            $fuerzaResistencia = $row['Fuerza_Resistencia'];

                                  }
                    }

                    if(isset($_POST['buscar'])) { /* Este if sirve para el buscador */
                        $bucarNombre= $_POST['Nombre'];
                        $bucarApellido= $_POST['Apellido'];

                        $consulta = "SELECT * FROM jugador WHERE Nombre = '$bucarNombre' OR Apellidos = '$bucarApellido'"; /* La consulta para que al escribir al jugador en la barra se produzca la búsqueda */

                        $resultado= mysqli_query($conex, $consulta);

                        while($row = $resultado->fetch_array()){
                            $nombre= $row['Nombre'];
                            $apellido = $row['Apellidos'];
                            $domicilio = $row['Domicilio'];
                            $edad = $row['Edad'];
                            $img = $row['img'];
                            $equipo = $row ['Equipo'];
                            $nombre_del_equipo = $row['Nombre_Del_Equipo'];

                            $camiseta = $row['Camiseta'];
                            $calcetines = $row['Calcetines'];
                            $botas = $row['Botas'];
                            $pantalón = $row['Pantalon'];

                            $grupo_Sanguíneo = $row['Grupo_Sanguineo'];
                            $lesiones = $row['Lesiones'];
                            $dolencias = $row['Dolencias'];

                            $precisiónPases = $row['Precision_Pases'];
                            $controlCuerpo = $row['Control_Cuerpo'];
                            $concienciaciónEspacial = $row['Concienciacion_Espacial'];
                            $conocimientoTáctico = $row['Conocimiento_Tactico'];
                            $evaluación_Riesgos = $row['Evaluacion_Riesgos'];
                            $equilibrioCoordinación = $row['Equilibrio_Coordinacion'];
                            $fuerzaResistencia = $row['Fuerza_Resistencia'];
                                  }
                    }
                }

            ?>
    <section class="contenido">

        <div class="box-container"> <!-- Este es el container principal donde van albergadas las cajas donde irán los datos -->
            <div class="box"> <!-- cajas donde irán almacenadas los datos -->
                <div class="caja-imagen">

                    <img id="imagen" src="assets/img/<?php echo $img;?>" alt="Imagen jugador" width="250px" height="350px">
                    
                </div>
                <div class="caja-vestimenta">
                    <li>Camisetas: <progress value="<?php echo $camiseta; ?>" min="1" max="2"></progress></li>
                    <li>Calcetines: <progress value="<?php echo $calcetines; ?>" min="1" max="2"></progress></li>
                    <li>Botas: <progress value="<?php echo $botas; ?>" min="1" max="2"></progress></li>
                    <li>Pantalón: <progress value="<?php echo $pantalón; ?>" min="1" max="2"></progress></li>
                </div>
            </div>

            <div class="linea"></div> <!-- Linea horizontal para dividir  -->

            <div class="box">
                <h3>Nombre:
                    <?php echo $nombre?>
                </h3>
                <h3>Apellidos:
                    <?php echo $apellido?>
                </h3>
                <h3>Domicilio:
                    <?php echo $domicilio?>
                </h3>
                <h3>Edad:
                    <?php echo $edad?>
                </h3>
                <h3>Equipo:
                    <?php echo $equipo?>
                </h3>
            </div>

            <div class="linea"></div>

            <div class="box">
                <h3>Grupo Sanguíneo:
                    <?php echo $grupo_Sanguíneo?>
                </h3>
                <h3>Lesiones:
                    <?php echo $lesiones?>
                </h3>
                <h3>Dolencias:
                    <?php echo $dolencias?>
                </h3>
            </div>

            <div class="linea"></div>

            <div class="box">
                <div class="caja-habilidades">
                    <li>Precision de pases: <progress value="<?php echo $precisiónPases; ?>" min="0" max="5"></progress>
                    </li>
                    <li>Control del cuerpo: <progress value="<?php echo  $controlCuerpo; ?>" min="0" max="5"></progress>
                    </li>
                    <li>Concienciación Espacial: <progress value="<?php echo  $concienciaciónEspacial; ?>" min="0"
                            max="5"></progress></li>
                    <li>Conocimiento táctico: <progress value="<?php echo  $conocimientoTáctico; ?>" min="0"
                            max="5"></progress></li>
                    <li>Evaluación de riesgos: <progress value="<?php echo  $evaluación_Riesgos; ?>" min="0"
                            max="5"></progress></li>
                    <li>Equilibrio y coordinación: <progress value="<?php echo  $equilibrioCoordinación; ?>" min="0"
                            max="5"></progress></li>
                    <li>Fuerza y resistencia: <progress value="<?php echo  $fuerzaResistencia; ?>" min="0"
                            max="5"></progress></li>
                </div>

                <div class="boton-container">
                    <a href="Formulario.php" class="boton">Formulario</a>
                </div>

            </div>
        </div>
    </section>

</body>

</html>