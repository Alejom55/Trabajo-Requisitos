<?php
    session_start();

    if(!isset($_SESSION['cedula'])){
        header("location: ../../../english.php");
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
    <title>Flu</title>
</head>

<body id="body">
    <main>
        <header>
            <button type="button" onclick="PrimerColor()" id="colorDef">Default</button>
            <button type="button" onclick="SegundoColor()" id="color1">Tritanopía</button>
            <button type="button" onclick="TercerColor()" id="color2">Protanopia</button>
            <button type="button" onclick="CuartoColor()" id="color3">Deuteranopia</button>
            <a href="../../../php/cerrar_sesion_ENG.php" id="cerrar">Log out</a>
        </header>
    <div class="contenedor_todo">
        <div class="cuadrado_trasero">
            <div class="titulo">
                <h1>Flu</h1>
            </div>
            <div class="resumen">
                <h2>Summary</h2>
                <p>The flu affects the lungs, nose, and throat. Young children, older adults, pregnant women, and people with chronic illnesses or weak immune systems are most at risk. Symptoms include fever, chills, muscle aches, cough, congestion, runny nose, headache, and fatigue. The flu is mainly treated with rest and fluids so that the body can fight the infection on its own. Over-the-counter anti-inflammatory pain relievers can help with symptoms. An annual vaccine can prevent the flu and limit its complications.</p>
            </div>
            <div class="sintomas">
                <h2>Symptoms</h2>
                <ul>
                    <li>- Cough</li>
                    <li>- Fever</li>
                    <li>- Discomfort when digesting</li>
                    <li>- Shaking chills</li>
                    <li>- Headache</li>
                    <li>- Fatigue</li>
                    <li>- Congestion</li>
                </ul>
            </div>
            <div class="tratamientos">
                <h2>Treatments</h2>
                <p>The flu is mainly treated with rest and fluids so that the body can fight the infection on its own. Over-the-counter anti-inflammatory pain relievers can help with symptoms. An annual vaccine can prevent the flu and limit its complications.</p>
            </div>
            <div class="relacionados">
                <h2>Similar diseases</h2>
                <a href="./pharyngitis.php">Pharyngitis</a>
            </div>
            <button type="button" onclick="citaMedicaENG()" id="cita">schedule appointment</button>
        </div>
    </div>
    </main>
    <script src="../../../assets/js/plantillageneral.js"></script>
</body>
</html>