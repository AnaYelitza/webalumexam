<?php
$contraseña = "E7LUwj1pjgM7Yd0bey4e";
$usuario = "postgres";
$nombreBaseDeDatos = "railway";
$rutaServidor = "postgresql://postgres:E7LUwj1pjgM7Yd0bey4e@containers.railway.app:7373/railway";
$puerto = "7373";

try{
    $base_de_datos = new PDO("pgsql: host = $rutaServidor;port=$puerto;dbname=$nombreBaseDeDatos", $usuario, $contraseña);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e){
    echo "Ocurrio un error con la base de datos: " . $e->getMessage();
}