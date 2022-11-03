<?php
    session_start();

    if(!isset($_SESSION['cedula'])){
        header("location: ../../../index.php");
        session_destroy();
        die();
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
    <link rel = "stylesheet" href="../../../assets/css/ventana2/plantillageneral.css">
    <title>Gripa</title>
</head>

<body id="body">
    <main>
        <header>
            <button type="button" onclick="PrimerColor()" id="colorDef">Por defecto</button>
            <button type="button" onclick="SegundoColor()" id="color1">Tritanopía</button>
            <button type="button" onclick="TercerColor()" id="color2">Protanopia</button>
            <button type="button" onclick="CuartoColor()" id="color3">Deuteranopia</button>
            <a href="../../../php/cerrar_sesion.php" id="cerrar">Cerrar Sesion</a>
        </header>
    <div class="contenedor_todo">
        <div class="cuadrado_trasero">
            <div class="titulo">
                <h1>Gripa</h1>
            </div>
            <div class="resumen">
                <h2>Resumen</h2>
                <p>La gripe afecta a los pulmones, la nariz y la garganta. Los niños pequeños, los adultos de edad avanzada, las mujeres embarazadas y las personas con enfermedades crónicas o un sistema inmunológico débil corren mayor riesgo. Los síntomas incluyen fiebre, escalofríos, dolores musculares, tos, congestión, secreción nasal, dolor de cabeza y fatiga.  La gripe se trata principalmente con descanso y líquidos para que el cuerpo pueda combatir la infección por sí solo. Los analgésicos antiinflamatorios de venta libre pueden ayudar con los síntomas. Una vacuna anual puede prevenir la gripe y limitar sus complicaciones.</p>
            </div>
            <div class="sintomas">
                <h2>Sintomas</h2>
                <ul>
                    <li>- Tos</li>
                    <li>- Fiebre</li>
                    <li>- Escalofrios</li>
                    <li>- Dolor de cabeza</li>
                    <li>- Fatiga</li>
                    <li>- Congestion</li>
                </ul>
            </div>
            <div class="tratamientos">
                <h2>Tratamientos</h2>
                <p>La gripe se trata principalmente con descanso y líquidos para que el cuerpo pueda combatir la infección por sí solo. Los analgésicos antiinflamatorios de venta libre pueden ayudar con los síntomas. Una vacuna anual puede prevenir la gripe y limitar sus complicaciones.</p>
            </div>
            <div class="relacionados">
                <h2>Enfermedades similares</h2>
                <a href="./faringitis.html">Faringitis</a>
            </div>
            
            
        </div>
    </div>
    </main>
    <script src="../../../assets/js/plantillageneral.js"></script>
</body>
</html>