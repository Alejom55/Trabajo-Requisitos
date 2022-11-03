<?php
    session_start();

    if(!isset($_SESSION['cedula'])){
        header("location: ../../index.php");
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
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
    <link rel = "stylesheet" href="../../assets/css/ventana1/estilo.css"> 
    <title>Anamnesis</title>
</head>
<header>
    <h1 id="titulo">REALIZAR AUTO-ANAMNESIS</h1>
    <button type="button" onclick="PrimerColor()" id="colorDef">Por defecto</button>
    <button type="button" onclick="SegundoColor()" id="color1">Tritanopía</button>
    <button type="button" onclick="TercerColor()" id="color2">Protanopia</button>
    <button type="button" onclick="CuartoColor()" id="color3">Deuteranopia</button>
</header>
<body class="body" id="bodySintomas">
    <div class="top">
        <a href="../../php/cerrar_sesion.php" id="cerrar">Cerrar Sesion</a>
    </div>
    <div class="caja_trasera">
        <main>
            <form class="contenido">
                <h3 id="sintoma">Sintoma #1</h3>
                <select id="dd1" class="sintomas" required>
                    <option value="None">Ninguno</option>
                    <option value="tos">Tos</option>
                    <option value="fiebre">Fiebre</option>
                    <option value="escalofrios">Escalofrios</option>
                    <option value="dolor de cabeza">Dolor de cabeza</option>
                    <option value="fatiga">Fatiga</option>
                    <option value="congestion">Congestion</option>
                    <option value="dolor de oido">Dolor de oido</option>
                    <option value="nerviosismo">Nerviosismo</option>
                    <option value="dificultad para dormir">Dificultad para dormir</option>
                    <option value="glandulas salivales inflamadas">Glandulas salivales inflamadas</option>
                    <option value="perdida de apetito">Perdida de apetito</option>
                    <option value="dolor de garganta">Dolor de garganta</option>
                    <option value="molestia al digerir">Molestia al digerir</option>
                </select>
                <h3 id="sintoma">Sintoma #2</h3>
                <select id="dd2" class="sintomas">
                    <option value="None">Ninguno</option>
                    <option value="tos">Tos</option>
                    <option value="fiebre">Fiebre</option>
                    <option value="escalofrios">Escalofrios</option>
                    <option value="dolor de cabeza">Dolor de cabeza</option>
                    <option value="fatiga">Fatiga</option>
                    <option value="congestion">Congestion</option>
                    <option value="dolor de oido">Dolor de oido</option>
                    <option value="nerviosismo">Nerviosismo</option>
                    <option value="dificultad para dormir">Dificultad para dormir</option>
                    <option value="glandulas salivales inflamadas">Glandulas salivales inflamadas</option>
                    <option value="perdida de apetito">Perdida de apetito</option>
                    <option value="dolor de garganta">Dolor de garganta</option>
                    <option value="molestia al digerir">Molestia al digerir</option>
                </select>
                <h3 id="sintoma">Sintoma #3</h3>
                <select id="dd3" class="sintomas">
                    <option value="None">Ninguno</option>
                    <option value="tos">Tos</option>
                    <option value="fiebre">Fiebre</option>
                    <option value="escalofrios">Escalofrios</option>
                    <option value="dolor de cabeza">Dolor de cabeza</option>
                    <option value="fatiga">Fatiga</option>
                    <option value="congestion">Congestion</option>
                    <option value="dolor de oido">Dolor de oido</option>
                    <option value="nerviosismo">Nerviosismo</option>
                    <option value="dificultad para dormir">Dificultad para dormir</option>
                    <option value="glandulas salivales inflamadas">Glandulas salivales inflamadas</option>
                    <option value="perdida de apetito">Perdida de apetito</option>
                    <option value="dolor de garganta">Dolor de garganta</option>
                    <option value="molestia al digerir">Molestia al digerir</option>
                </select>
                <h3 id="sintoma">Sintoma #4</h3>
                <select id="dd4" class="sintomas">
                    <option value="None">Ninguno</option>
                    <option value="tos">Tos</option>
                    <option value="fiebre">Fiebre</option>
                    <option value="escalofrios">Escalofrios</option>
                    <option value="dolor de cabeza">Dolor de cabeza</option>
                    <option value="fatiga">Fatiga</option>
                    <option value="congestion">Congestion</option>
                    <option value="dolor de oido">Dolor de oido</option>
                    <option value="nerviosismo">Nerviosismo</option>
                    <option value="dificultad para dormir">Dificultad para dormir</option>
                    <option value="glandulas salivales inflamadas">Glandulas salivales inflamadas</option>
                    <option value="perdida de apetito">Perdida de apetito</option>
                    <option value="dolor de garganta">Dolor de garganta</option>
                    <option value="molestia al digerir">Molestia al digerir</option>
                </select>
                <h3 id="sintoma">Sintoma #5</h3>
                <select id="dd5" class="sintomas">
                    <option value="None">Ninguno</option>
                    <option value="tos">Tos</option>
                    <option value="fiebre">Fiebre</option>
                    <option value="escalofrios">Escalofrios</option>
                    <option value="dolor de cabeza">Dolor de cabeza</option>
                    <option value="fatiga">Fatiga</option>
                    <option value="congestion">Congestion</option>
                    <option value="dolor de oido">Dolor de oido</option>
                    <option value="nerviosismo">Nerviosismo</option>
                    <option value="dificultad para dormir">Dificultad para dormir</option>
                    <option value="glandulas salivales inflamadas">Glandulas salivales inflamadas</option>
                    <option value="perdida de apetito">Perdida de apetito</option>
                    <option value="dolor de garganta">Dolor de garganta</option>
                    <option value="molestia al digerir">Molestia al digerir</option>
                </select>
            </form>
        </main>
        <label id="prueba" for="enviar"></label>
        <input type="button"  id="enviar" onclick="promediar()" value="Calcular">
    </div>    
    <script src="../../assets/js/EnfermedadesENG.js"></script>
</body>
</html>