<?php

include("con_db.php");

if (isset($_POST['registro'])){

    if (
        strlen($_POST['Nombre']) >= 1 &&
        strlen($_POST['Apellidos']) >= 1 &&
        strlen($_POST['Domicilio']) >= 1 &&
        strlen($_POST['Edad']) >= 1 &&
        strlen($_POST['Equipo']) >= 1 &&
        strlen($_POST['Nombre_Del_Equipo']) >= 1 &&
        strlen($_POST['Camiseta']) >= 1 &&
        strlen($_POST['Calcetines']) >= 1 &&
        strlen($_POST['Botas']) >= 1 &&
        strlen($_POST['Pantalon']) >= 1 &&
        strlen($_POST['Grupo_Sanguineo']) >= 1 &&
        strlen($_POST['Lesiones']) >= 1 &&
        strlen($_POST['Dolencias']) >= 1 &&
        strlen($_POST['Precision_Pases']) >= 1 &&
        strlen($_POST['Control_Cuerpo']) >= 1 &&
        strlen($_POST['Concienciacion_Espacial']) >= 1 &&
        strlen($_POST['Conocimiento_Tactico']) >= 1 &&
        strlen($_POST['Evaluacion_Riesgos']) >= 1 &&
        strlen($_POST['Equilibrio_Coordinacion']) >= 1 &&
        strlen($_POST['Fuerza_Resistencia']) >= 1
    ) {
      
        $nombre = trim($_POST['Nombre']);
        $apellido = trim($_POST['Apellidos']);
        $domicilio = trim($_POST['Domicilio']);
        $edad = trim($_POST['Edad']);
        $img = $_FILES['img']['name'];
        $equipo = trim($_POST['Equipo']);
        $nombreEquipo= trim($_POST['Nombre_Del_Equipo']);

        $camiseta = trim($_POST['Camiseta']);
        $calcetines = trim($_POST['Calcetines']);
        $botas = trim($_POST['Botas']);
        $pantalón = trim($_POST['Pantalon']);

        $grupoSanguineo = trim($_POST['Grupo_Sanguineo']);
        $lesiones = trim($_POST['Lesiones']);
        $dolencias = trim($_POST['Dolencias']);
        
        $precisiónPases = trim($_POST['Precision_Pases']);
        $controlCuerpo = trim($_POST['Control_Cuerpo']);
        $concienciaciónEspacial = trim($_POST['Concienciacion_Espacial']);
        $conocimientoTáctico = trim($_POST['Conocimiento_Tactico']);
        $evaluaciónRiesgos = trim($_POST['Evaluacion_Riesgos']);
        $equilibrioCoordinación = trim($_POST['Equilibrio_Coordinacion']);
        $fuerzaResistencia = trim($_POST['Fuerza_Resistencia']);
    
        $ruta="F:/GDAW2/01_DesarrolloWeb_Server/xampp/htdocs/gdaw/futbol_05/assets/img/". $img;
        move_uploaded_file($_FILES['img']['tmp_name'], $ruta);
        

        $consulta = "INSERT INTO jugador(Nombre, Apellidos, Domicilio, Edad, img, Equipo, Nombre_Del_Equipo, Camiseta, Calcetines,
          Botas, Pantalon, Grupo_Sanguineo, Lesiones, Dolencias, Precision_Pases, Control_Cuerpo, Concienciacion_Espacial, Conocimiento_Tactico,
          Evaluacion_Riesgos, Equilibrio_Coordinacion, Fuerza_Resistencia) VALUES ('$nombre','$apellido','$domicilio', '$edad', '$img', 
          '$equipo', '$nombreEquipo', '$camiseta', '$calcetines', '$botas', '$pantalón', '$grupoSanguineo', '$lesiones', '$dolencias',
          '$precisiónPases', '$controlCuerpo', '$concienciaciónEspacial', '$conocimientoTáctico', '$evaluaciónRiesgos', 
          '$equilibrioCoordinación', '$fuerzaResistencia')";
    
        $resultado = mysqli_query($conex, $consulta);

        
     
    }
    else {
        echo("ERROR");
    }
}
    


    ?>