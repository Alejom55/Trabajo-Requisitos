<?php
    session_start();

    if(!isset($_SESSION['cedula'])){
        header("location: index.php");
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
    <link rel = "stylesheet" href="../../assets/css/ventana1/estilo.css"> 
    <title>Anamnesis</title>
</head>
<header>
    <h1 id="titulo">REALIZAR AUTO-ANAMNESIS</h1>
    <button type="button" id="def">Default</button>
    <button type="button" id="color1">Tritanopía</button>
    <button type="button" id="color2">Protanopia</button>
    <button type="button" id="color3">Deuteranopia</button>
</header>
<body class="body">
    <div class="top">
        <a href="../../php/cerrar_sesion.php">Cerrar Sesion</a>
    </div>
    <div class="caja_trasera">
        <form class="contenido">
            <h3 id="sintoma1">Sintoma #1</h3>
            <select id="dd1" class="sintomas">
                <option value="None">Ninguno</option>
                <option value="tos">Tos</option>
                <option value="fiebre">Fiebre</option>
                <option value="escalofrios">Escalofrios</option>
                <option value="dolor_de_cabeza">Dolor de cabeza</option>
                <option value="fatiga">Fatiga</option>
                <option value="congestion">Congestion</option>
            </select>
            <h3>Sintoma #2</h3>
            <select id="dd2" class="sintomas">
                <option value="None">Ninguno</option>
                <option value="tos">Tos</option>
                <option value="fiebre">Fiebre</option>
                <option value="escalofrios">Escalofrios</option>
                <option value="dolor_de_cabeza">Dolor de cabeza</option>
                <option value="fatiga">Fatiga</option>
                <option value="congestion">Congestion</option>
            </select>
            <h3>Sintoma #3</h3>
            <select id="dd3" class="sintomas">
                <option value="None">Ninguno</option>
                <option value="tos">Tos</option>
                <option value="fiebre">Fiebre</option>
                <option value="escalofrios">Escalofrios</option>
                <option value="dolor_de_cabeza">Dolor de cabeza</option>
                <option value="fatiga">Fatiga</option>
                <option value="congestion">Congestion</option>
            </select>
            <h3>Sintoma #4</h3>
            <select id="dd4" class="sintomas">
                <option value="None">Ninguno</option>
                <option value="tos">Tos</option>
                <option value="fiebre">Fiebre</option>
                <option value="escalofrios">Escalofrios</option>
                <option value="dolor_de_cabeza">Dolor de cabeza</option>
                <option value="fatiga">Fatiga</option>
                <option value="congestion">Congestion</option>
            </select>
            <h3>Sintoma #5</h3>
            <select id="dd5" class="sintomas">
                <option value="None">Ninguno</option>
                <option value="tos">Tos</option>
                <option value="fiebre">Fiebre</option>
                <option value="escalofrios">Escalofrios</option>
                <option value="dolor_de_cabeza">Dolor de cabeza</option>
                <option value="fatiga">Fatiga</option>
                <option value="congestion">Congestion</option>
            </select>
            <input type="button"  id="enviar" onclick="promediar()" value="Calcular">    
            <label id="prueba" for="enviar"></label>
        </form>

    </div>
    <script src="/assets/js/EnfermedadesESP.js"></script>
</body>
</html>