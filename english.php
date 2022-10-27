<?php
    session_start();
    if(isset($_SESSION['cedula'])){
        header("location: ventanas/ventana_1/mono.php");
    };
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Login and Register - Vida</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
<link rel = "stylesheet" href="assets/css/style.css">
</head>
<body id="bodyIngles">
    
    <main>
        <header>
            <form action="index.php" class="inline">
                <button id="eng" class="float-left submit-button" >Spanish</button>
            </form>
            <button onclick="" id="def">Default</button>
            <button onclick="" id="color1">Tritanopia</button>
            <button onclick="" id="color2">Protanopia</button>
            <button onclick="" id="color3">Deuteranopia</button>
        </header>

        <div class="contenedor__todo">

            <div class="caja__trasera">
                <div class="caja__trasera_login">
                    <h3>Already registered?</h3>
                    <p>Login for getting into the page</p>
                    <button onclick="limpiar()" id="btn__iniciar_sesion">Login</button>
                </div>
                <div class="caja__trasera_register">
                    <h3> Don't have an account?</h3>
                    <p>Register before loging in</p>
                    <button onclick="limpiar()" id="btn__registrarse">Register</button>
                </div>

            </div>

            <!-- Formulario del login y el registro -->
            <div class="contenedor__login_register"> 

                <!-- Formulario login -->
                <form action="php/login_usuario_be.php" method="POST" class="formualrio__login">

                    <h2>VIDA</h2>
                    <h2>Login</h2>
                    <input type="text" id="login_correo" placeholder="E-mail" name="login_correo" required>
                    <input type="password" id="login_contrasena" placeholder="Password" name="login_contrasena" required>
                    <button>Sign in</button>

                </form>

                <!-- Formulario registro -->
                <form action="php/registro_usuario_be.php" method="POST" class="formualrio__register">

                    <h2>VIDA</h2>
                    <h2>Register</h2>
                    <input type="text" id="nombre_completo" placeholder="Full name" name="nombre_completo" required>
                    <input type="text" id="correo" placeholder="E-mail" name="correo" required>
                    <input type="text" id="cedula" placeholder="ID" name="cedula" required>
                    <input type="password" id="contrasena" placeholder="Password" name="contrasena" required>
                    <input type="password" id="confirmar_contrasena" placeholder="Confirm Password" name="confirmar_contrasena" required     >
                    <button>Register</button>

                </form>
            </div>
        </div>
    </main>
    <script src="assets/js/script.js"></script>
</body>
</html>