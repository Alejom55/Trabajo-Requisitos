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
    <title>Faringitis</title>
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
                <h1>Faringitis</h1>
            </div>
            <div class="resumen">
                <h2>Resumen</h2>
                <p>La faringitis, o dolor de garganta, es la molestia, el dolor o la carraspera en la garganta que a menudo hace que se presente dolor al tragar.</p>
            </div>
            <div class="sintomas">
                <h2>Sintomas</h2>
                <ul>
                    <li>- Dolor de garganta</li>
                    <li>- Molestia al digerir</li>
                    <li>- Fiebre</li>
                </ul>
            </div>
            <div class="tratamientos">
                <h2>Tratamientos</h2>
                <p>El tratamiento se ocupa del alivio sintomático. La recuperación tarda aproximadamente dos semanas. Es posible evitar la enfermedad con la vacuna triple viral.</p>
            </div>
            <div class="relacionados">
                <h2>Enfermedades similares</h2>
                <a href="./gripa.php">Gripa</a>
            </div>
            <button type="button" onclick="citaMedicaESP()" id="cita">Programar cita</button>
        </div>
    </div>
    </main>
    <script src="../../../assets/js/plantillageneral.js"></script>
</body>
</html>