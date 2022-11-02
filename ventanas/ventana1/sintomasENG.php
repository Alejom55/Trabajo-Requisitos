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
    <h1 id="titulo">PERFORM SELF-ANAMNESIS</h1>
    <button type="button" onclick="PrimerColor()" id="colorDef">Default</button>
    
    <button type="button" onclick="SegundoColor()" id="color1">Tritanopía</button>
    <button type="button" onclick="TercerColor()" id="color2">Protanopia</button>
    <button type="button" onclick="CuartoColor()" id="color3">Deuteranopia</button>
</header>
<body class="body" id="bodySintomas">
    <div class="top">
        <a href="../../php/cerrar_sesion.php">Cerrar Sesion</a>
    </div>
    <div class="caja_trasera">
        <form class="contenido">
            <h3 id="sintoma1">Symptom #1</h3>
            <select id="dd1" class="sintomas">
                <option value="None">None</option>
                <option value="tos">Cough</option>
                <option value="fiebre">Fever</option>
                <option value="escalofrios">Shaking chills</option>
                <option value="dolor de cabeza">Headache</option>
                <option value="fatiga">Fatigue</option>
                <option value="congestion">Congestion</option>
                <option value="dolor de oido">Earache</option>
                <option value="nerviosismo">Nervousness</option>
                <option value="dificultad para dormir">Difficulty to sleep</option>
            </select>
            <h3>Symptom #2</h3>
            <select id="dd2" class="sintomas">
                <option value="None">None</option>
                <option value="tos">Cough</option>
                <option value="fiebre">Fever</option>
                <option value="escalofrios">Shaking chills</option>
                <option value="dolor de cabeza">Headache</option>
                <option value="fatiga">Fatigue</option>
                <option value="congestion">Congestion</option>
                <option value="dolor de oido">Earache</option>
                <option value="nerviosismo">Nervousness</option>
                <option value="dificultad para dormir">Difficulty to sleep</option>
            </select>
            <h3>Symptom #3</h3>
            <select id="dd3" class="sintomas">
                <option value="None">None</option>
                <option value="tos">Cough</option>
                <option value="fiebre">Fever</option>
                <option value="escalofrios">Shaking chills</option>
                <option value="dolor de cabeza">Headache</option>
                <option value="fatiga">Fatigue</option>
                <option value="congestion">Congestion</option>
                <option value="dolor de oido">Earache</option>
                <option value="nerviosismo">Nervousness</option>
                <option value="dificultad para dormir">Difficulty to sleep</option>
            </select>
            <h3>Symptom #4</h3>
            <select id="dd4" class="sintomas">
                <option value="None">None</option>
                <option value="tos">Cough</option>
                <option value="fiebre">Fever</option>
                <option value="escalofrios">Shaking chills</option>
                <option value="dolor de cabeza">Headache</option>
                <option value="fatiga">Fatigue</option>
                <option value="congestion">Congestion</option>
                <option value="dolor de oido">Earache</option>
                <option value="nerviosismo">Nervousness</option>
                <option value="dificultad para dormir">Difficulty to sleep</option>
            </select>
            <h3>Symptom #5</h3>
            <select id="dd5" class="sintomas">
                <option value="None">None</option>
                <option value="tos">Cough</option>
                <option value="fiebre">Fever</option>
                <option value="escalofrios">Shaking chills</option>
                <option value="dolor de cabeza">Headache</option>
                <option value="fatiga">Fatigue</option>
                <option value="congestion">Congestion</option>
                <option value="dolor de oido">Earache</option>
                <option value="nerviosismo">Nervousness</option>
                <option value="dificultad para dormir">Difficulty to sleep</option>
            </select>
            <input type="button"  id="enviar" onclick="promediar()" value="Calcular">    
            <label id="prueba" for="enviar"></label>
        </form>

    </div>
    <script src="../../assets/js/EnfermedadesESP.js"></script>
</body>
</html>