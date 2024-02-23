<?php
include("conexion.php");

if(isset($_POST['send'])) {
    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['message']) >= 1 
    ){
        $name = trin ($_POST['name']);
        $phone = trin ($_POST['phone']);
        $email = trin ($_POST['email']);
        $message = trin ($_POST['message']);
        $consulta = "INSERT INTO datos(nombre, telefono, email, mensaje) 
        VALUES ('$name', '$phone' , '$email', '$message') ";
        $resultado = mysqli_query($conex, $consulta);
    }
}

?>
