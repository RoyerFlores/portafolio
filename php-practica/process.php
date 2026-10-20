<?php
$name = $_POST["nombre"];
$email = $_POST["correo"];
$tel = $_POST["telefono"];
$message = $_POST["mensaje"];

echo "Nombre: " . $name . "<br>Correo: " . $email . "<br>Teléfono: " . $tel . "<br>Mensaje: " . $message;
?>