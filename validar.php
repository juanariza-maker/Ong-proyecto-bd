<?php 
    $usuario    = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    session_start();
     $_SESSION['usuario']=$usuario;
    include 'conexion.php';
    $consulta   = "SELECT * FROM usuarios where usuario='$usuario' AND contrasena='$contrasena' ";
    $enviar = mysqli_query($con,$consulta);
    $filas = mysqli_num_rows($enviar);
    if($filas>0){
        header("location:home.php");
    }
    else{
        include("index.html"); 
    }
?>