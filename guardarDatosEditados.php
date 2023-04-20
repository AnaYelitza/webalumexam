<?php

if (
    !isset($_POST["nombre"]) ||
    !isset($_POST["edad"]) ||
    !isset($_POST["id"])
){
    exit();
}

include_once "base_de_datos.php";
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$edad = $_POST["edad"];

$sentencia = $base_de_datos->prepare("UPDATE mascotas SET nombre = ?, edad = ? WHERE id = ?;");
$resultado = $sentencia->execute([$nombre, $edad, $id]);

if ($resultado === true){
    header("Location: listar.php");
} else {
    echo "Algo salio mal. Por favor verifica que la tabla exista, asi como el ID del usurio";
}

?>