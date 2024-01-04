<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO JUGADORES</title>
    <link rel="stylesheet" href="./assets/css/formulario.css">
</head>

<body>

    <h1>FORMULARIO JUGADOR</h1>

    <div class="contenedor-box">
        <div class="box">
            <div class="nav">
                <h2>DATOS PERSONALES</h2>
            </div>
            <form method="POST" action="ficha2.php" enctype="multipart/form-data"> <!-- Formulario con el metodo POST Para que envie los datos a la base de datos -->
                <p><label>Nombre: <input type="text" name="Nombre" maxlength="60" placeholder="Nombre"></label></p>
                <p><label>Apellidos: <input type="text" name="Apellidos" maxlength="60" placeholder="Apellidos"></label>
                </p>
                <p><label>Domicilio: <input type="text" name="Domicilio" maxlength="60" placeholder="Domicilio"></label>
                </p>
                <p><label>Edad: <input type="number" name="Edad"></label></p>
                <label for="img"></label>
                <input type="file" name="img" placeholder="Foto" required>
                <fieldset>
                    <legend>Equipo:</legend>
                    <div class="genero">
                        <label for="Masculino" class="genero">Masculino</label>
                        <input type="radio" id="masculino" value="masculino" name="Equipo" checked>
                    </div>
                    <div class="genero">
                        <label for="Femenino" class="genero">Femenino</label>
                        <input type="radio" id="femenino" value="Femenino" name="Equipo">
                    </div>
                </fieldset>


                <p><label>Nombre del equipo:<input type="text" name="Nombre_Del_Equipo" maxlength="60"
                            placeholder="Nombre del equipo"></label></p>

        </div>

        <div class="vl"></div> <!-- Linea de seperacion entre las 'box' -->

        <div class="box">
            <div class="nav">
                <h2>EQUIPACIÓN</h2>
            </div>

            <p><label>Camisetas: <input type="number" name="Camiseta" min="0" max="2"></label></p>
            <p><label>Calcetines: <input type="number" name="Calcetines" min="0" max="2"></label></p>
            <p><label>Botas: <input type="number" name="Botas" min="0" max="2"></label></p>
            <p><label>Pantalón: <input type="number" name="Pantalon" min="0" max="2"></label></p>

        </div>

        <div class="vl"></div>

        <div class="box">
            <div class="nav">
                <h2>DATOS MÉDICOS</h2>
            </div>
            <p><label>Grupo Sanguíneo: <input type="text" name="Grupo_Sanguineo" maxlength="60"
                        placeholder="Grupo Sanguineo"></label></p>
            <p><label>Lesiones: <input type="text" name="Lesiones" maxlength="60" placeholder="Lesiones"></label>
            </p>
            <p><label>Dolencias: <input type="text" name="Dolencias" maxlength="60" placeholder="Dolencias"></label>
            </p>

        </div>

        <div class="vl"></div>

        <div class="box">
            <div class="nav">
                <h2>HABILIDADES</h2>
            </div>
            <p><label>Precisión de pases: <input type="number" name="Precision_Pases" min="0" max="5"></label>
            </p>
            <p><label>Control del cuerpo: <input type="number" name="Control_Cuerpo" min="0" max="5"></label>
            </p>
            <p><label>Concienciación espacial: <input type="number" name="Concienciacion_Espacial" min="0"
                        max="5"></label></p>
            <p><label>Conocimiento táctico : <input type="number" name="Conocimiento_Tactico" min="0" max="5"></label>
            </p>
            <p><label>Evaluación de riesgos: <input type="number" name="Evaluacion_Riesgos" min="0" max="5"></label></p>
            <p><label>Equilibrio y coordinación: <input type="number" name="Equilibrio_Coordinacion" min="0"
                        max="5"></label></p>
            <p><label>Fuerza y resistencia: <input type="number" name="Fuerza_Resistencia" min="0" max="5"></label></p>
            <p><input type="submit" name="registro" value="Enviar"></p>
            <p><input type="reset" value="Limpiar Formulario"></p>


        </div>
        </form>
    </div>
    <div class="boton-container"> <!-- Botón que redirecciona al archivo 'ficha2.php' -->
        <a href="ficha2.php" class="boton">FICHA</a>
    </div>


    </div>

    

</body>



</html>