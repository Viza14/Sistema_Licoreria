<?php
require_once("../../parte_superior.php");
require_once("../../connection/conexion.php");

$id = $_GET['id'];

// Obtener los datos del usuario a modificar
$sentencia = $bd->prepare("SELECT id, user, password, cargo, estatus FROM usuarios WHERE id = ?");
$sentencia->execute([$id]);
$usuario = $sentencia->fetch(PDO::FETCH_OBJ);

if (!$usuario) {
    echo "Error: Usuario no encontrado.";
    exit;
}
?>

<div class="container mt-5">
    <h2 class="text-center">Editar Usuario</h2>
    <form action="/licoreria/controller/editar/editarUsuario.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $usuario->id; ?>">
        <div class="form-group">
            <label for="user">Usuario</label>
            <input type="text" id="user" name="user" class="form-control" value="<?php echo $usuario->user; ?>" required>
        </div>
        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" class="form-control" value="<?php echo $usuario->password; ?>" required>
        </div>
        <div class="form-group">
            <label for="cargo">Cargo</label>
            <input type="text" id="cargo" name="cargo" class="form-control" value="<?php echo $usuario->cargo; ?>" required>
        </div>
        <div class="form-group">
            <label for="estatus">Estado</label>
            <input type="text" id="estatus" name="estatus" class="form-control" value="<?php echo $usuario->estatus; ?>" required>
        </div>
        <button type="submit" class="btn btn-success w-100">Actualizar Usuario</button>
    </form>
</div>

<?php
require_once("../../parte_inferior.php");
?>
