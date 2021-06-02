<?php
$nombre = $_POST ['nombre'];
$apellido = $_POST ['Apellido'];
$telefono = $_POST ['telefono'];
$edad = $_POST ['edad'];
$fechaDeNacimiento = $_POST ['fechaDeNacimiento'];
$email = $_POST ['email'];

function insertarEnBD($nombre,$apellido,$telefono,$edad, $fechaDeNacimiento,$email){
    $conexion = New mysqli("127.0.0.1","root","1111","parcial1DB");
    $mysqli = "INSERT INTO persona (nombre,apellido,telefono,edad, fechaDeNacimiento,email) 
               VALUES ('nombre','apellido','telefono','edad','fechaDeNacimiento','email')"; 
    $conexion -> query($mysqli);
    $conexion -> close();          
}



