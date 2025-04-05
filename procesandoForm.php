<?php

require 'templates/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $fecha = $_POST['fecha'];
    $asunto = $_POST['asunto'];
    $comentario = $_POST['comentario'];

    $sql = "INSERT INTO contactos (nombre, correo, fecha, asunto, comentario) VALUES (:nombre, :correo, :fecha, :asunto, :comentario)";
    $stmt = $pdo->prepare($sql);

    $stmt->execute(['nombre' => $nombre, 'correo' => $correo, 'fecha' => $fecha, 'asunto' => $asunto, 'comentario' => $comentario]);

    header("Location: contacto.php");
}

?>