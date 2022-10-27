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
    <!-- <link rel = "stylesheet" href="../../assets/css/ventana1/estilo.css"> -->
    <title>monocuco</title>
    
</head>
<body>
    <div class="top">
        <a href="../../php/cerrar_sesion.php">Cerrar Sesion</a>
    </div>
    <div class="caja_trasera">
        <form class="contenido">
            <h3 id="sintoma1">Sintoma 1</h3>
            <select name="sintomas">
                <option value="None">Ninguno</option>
                <option value="tos">Tos</option>
                <option value="fiebre">Fiebre</option>
                <option value="escalofrios">Escalofrios</option>
                <option value="dolor_de_cabeza">Dolor de cabeza</option>
                <option value="fatiga">Fatiga</option>
                <option value="congestion">Congestion</option>
            </select>
            <h3>Sintoma 2</h3>
            <select name="sintomas">
                <option value="None">Ninguno</option>
                <option value="tos">Tos</option>
                <option value="fiebre">Fiebre</option>
                <option value="escalofrios">Escalofrios</option>
                <option value="dolor_de_cabeza">Dolor de cabeza</option>
                <option value="fatiga">Fatiga</option>
                <option value="congestion">Congestion</option>
            </select>
            <h3>Sintoma 3</h3>
            <select name="sintomas">
                <option value="None">Ninguno</option>
                <option value="tos">Tos</option>
                <option value="fiebre">Fiebre</option>
                <option value="escalofrios">Escalofrios</option>
                <option value="dolor_de_cabeza">Dolor de cabeza</option>
                <option value="fatiga">Fatiga</option>
                <option value="congestion">Congestion</option>
            </select>
            <h3>Sintoma 4</h3>
            <select name="sintomas">
                <option value="None">Ninguno</option>
                <option value="tos">Tos</option>
                <option value="fiebre">Fiebre</option>
                <option value="escalofrios">Escalofrios</option>
                <option value="dolor_de_cabeza">Dolor de cabeza</option>
                <option value="fatiga">Fatiga</option>
                <option value="congestion">Congestion</option>
            </select>
            <h3>Sintoma 5</h3>
            <select name="sintomas">
                <option value="None">Ninguno</option>
                <option value="tos">Tos</option>
                <option value="fiebre">Fiebre</option>
                <option value="escalofrios">Escalofrios</option>
                <option value="dolor_de_cabeza">Dolor de cabeza</option>
                <option value="fatiga">Fatiga</option>
                <option value="congestion">Congestion</option>
            </select>

        </form>

    </div>
    <script src="../../assets/js/EnfermedadesESP.js" type="module"></script>
</body>
</html>