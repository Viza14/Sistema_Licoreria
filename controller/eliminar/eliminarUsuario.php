<?php
require_once("../../connection/conexion.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Eliminar el usuario
    $sentencia = $bd->prepare("DELETE FROM usuarios WHERE id = ?");
    $resultado = $sentencia->execute([$id]);

    if ($resultado) {
        header("Location: /licoreria/views/usuarios/gestionarUsuarios.php?mensaje=usuarioEliminado");
    } else {
        header("Location: /licoreria/views/usuarios/gestionarUsuarios.php?mensaje=error");
    }
} else {
    header("Location: /licoreria/views/usuarios/gestionarUsuarios.php?mensaje=error");
}
