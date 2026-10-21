
<?php
echo "<h1>Pedido recibido en Salteñeria El Horno</h1>";

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$pedido = $_POST["pedido"];

echo "Nombre: " . $nombre . "<br>";
echo "Correo: " . $correo . "<br>";
echo "Pedido: " . $pedido . "<br>";

$productos = [
    "Saltena de pollo - Bs 6",
    "Docena de saltenas - Bs 65",
    "Refresco de mocochinchi - Bs 5"
];

echo "<h2>Carta de la salteneria</h2>";

foreach ($productos as $producto) {
    echo $producto . "<br>";
}

echo "<p>Te atiende TU NOMBRE COMPLETO</p>";
?>
