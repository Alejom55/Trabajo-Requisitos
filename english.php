<?php
    session_start();
    if(isset($_SESSION['cedula'])){
        header("location: ventanas/ventana1/sintomas.php");
    };
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0">
    <title>Login y Registro - Vida</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
    <link rel = "stylesheet" href="assets/css/styleEspannol.css">
    <link rel = "stylesheet" href="assets/css/prueba.css">
</head>

<body id="bodyEspannol" class="changeBG">
    
    <main>
        <header>
            <form action="index.php" class="inline">
                <button id="eng" class="float-left submit-button">Español</button>
            </form>
            <button type="button" onclick="PrimerColor()" id="colorDef">Default</button>
            <button type="button" onclick="SegundoColor()" id="color1">Tritanopía</button>
            <button type="button" onclick="TercerColor()" id="color2">Protanopia</button>
            <button type="button" onclick="CuartoColor()" id="color3">Deuteranopia</button>
        </header>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera_login">
                    <h3>Already registered?</h3>
                    <p>Login for getting into the page</p>
                    <button onclick="limpiar()" id="btn__iniciar_sesion"onclick="limpiar()">Login</button>
                </div>
                <div class="caja__trasera_register">
                    <h3>Don't have an account?</h3>
                    <p>Register before loging in</p>
                    <button onclick="limpiar()" id="btn__registrarse">Register</button>
                </div>
            </div>
            <!-- Formulario del login y el registro -->
            <div class="contenedor__login_register"> 
                <!-- Formulario login -->
                <form action="php/login_usuario_be_ENG.php" method="POST" class="formualrio__login">
                    <h2>VIDA</h2>
                    <h2>Login</h2>
                    <input type="text" id="login_correo" placeholder="E-mail" name="login_correo" required>
                    <input type="password" id="login_contrasena" placeholder="Password" name="login_contrasena" required>
                    <button>Sign in</button>
                </form>
                <!-- Formulario registro -->
                <form action="php/registro_usuario_be_ENG.php" method="POST" class="formualrio__register">
                    <h2>VIDA</h2>
                    <h2>Register</h2>
                    <input type="text" id="nombre_completo" placeholder="Full name" name="nombre_completo" required pattern="[a-zA-Z ]{2,254}" title="No se permiten numeros" required>
                    <input type="email" id="correo" placeholder="E-mail" name="correo" pattern=".+@gmail\.com|.+@outlook\.com|.+@hotmail\.com|.+@yahoo\.com" required>
                    <input type="text" id="cedula" placeholder="ID" name="cedula" class="validanumericos" minlength="8" maxlength="10" required >
                    <input type="password" id="contrasena" placeholder="Password" name="contrasena" required minlength="8" maxlength="15" required>
                    <input type="password" id="confirmar_contrasena" placeholder="Confirm Password" name="confirmar_contrasena"required minlength="8" maxlength="15" required >
                    <button>Register</button>
                </form>
            </div>
        </div>
    </main>

    <script src="assets/js/script.js"></script>
</body>
</html>