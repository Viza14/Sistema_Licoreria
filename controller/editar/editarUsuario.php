<?php
require_once("../../connection/conexion.php");

if (isset($_POST['id']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['rol'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $rol = $_POST['rol'];

    // Actualizar los datos del usuario
    $sentencia = $bd->prepare("UPDATE usuarios SET username = ?, email = ?, rol = ? WHERE id = ?");
    $resultado = $sentencia->execute([$username, $email, $rol, $id]);

    if ($resultado) {
        header("Location: /licoreria/views/usuarios/gestionarUsuarios.php?mensaje=usuarioActualizado");
    } else {
        header("Location: /licoreria/views/usuarios/editarUsuarios.php?id=$id&mensaje=error");
    }
} else {
    header("Location: /licoreria/views/usuarios/gestionarUsuarios.php?mensaje=error");
}
