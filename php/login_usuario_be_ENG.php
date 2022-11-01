<?php 
    session_start();

    include 'conexion_be.php';

    $correo = $_POST['login_correo'];
    $contrasena = $_POST['login_contrasena'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and contrasena='$contrasena' ");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['cedula'] = $correo;
        header("location: ../ventanas/ventana1/sintomasENG.php");
        exit;
    }else{
        echo'
            <script>
                alert("Wrong email or password");
                window.location = "../english.php";
            </script>
        ';
        exit;
    };



?>