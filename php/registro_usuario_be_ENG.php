<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $cedula = $_POST['cedula'];
    $contrasena = $_POST['contrasena'];
    $confirmar_contrasena = $_POST['confirmar_contrasena'];

    $query = "INSERT INTO usuarios(nombre_completo, correo, cedula, contrasena, confirmar_contrasena)
              VALUES('$nombre_completo', '$correo', '$cedula','$contrasena','$confirmar_contrasena')";
        


    //verificar que las contraseñas coinciden

    if($contrasena != $confirmar_contrasena){
        echo '
            <script>
                alert("Passwords do not match");
                window.location = "../english.php";
            </script>
        ';
        mysqli_close($conexion);
        exit();
    }


    //verificar que el correo no se repita en la base de datos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' ");
    
    if (mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert("This email is already registered");
                window.location = "../english.php";
            </script>

        ';
        mysqli_close($conexion);
        exit();
        
    };

    //verificar que la cedula no se repita en la base de datos
    $verificar_cedula = mysqli_query($conexion, "SELECT * FROM usuarios WHERE cedula = '$cedula' ");
    
    if (mysqli_num_rows($verificar_cedula) > 0){
        echo '  
            <script>
                alert("This ID is already registered");
                window.location = "../english.php";
            </script>
        ';
        mysqli_close($conexion);
        exit();
        
    };

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        header("location: ../english.php");
    };



    mysqli_close($conexion);
?>