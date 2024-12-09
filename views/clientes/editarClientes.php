<?php
require_once("../../parte_superior.php");
require_once("../../connection/conexion.php");

// Verificar que el ID del cliente se haya pasado como parámetro
if (isset($_GET['id'])) {
    $id_cliente = $_GET['id'];

    // Consultar los datos actuales del cliente
    $sentencia = $bd->prepare("SELECT * FROM clientes WHERE id = ?");
    $sentencia->execute([$id_cliente]);
    $cliente = $sentencia->fetch(PDO::FETCH_ASSOC);

    if (!$cliente) {
        echo "Cliente no encontrado.";
        exit;
    }
} else {
    echo "ID de cliente no especificado.";
    exit;
}
?>

<div class="container mt-5">
    <h2 class="text-center">Editar Cliente</h2>
    
    <form action="/licoreria/controller/editar/editarCliente.php?id=<?php echo $cliente['id']; ?>" method="POST">
        <div class="mb-3">
            <label for="nombres" class="form-label">Nombres</label>
            <input type="text" class="form-control" name="nombres" value="<?php echo $cliente['nombres']; ?>" required>
        </div>

        <div class="mb-3">
            <label for="apellidos" class="form-label">Apellidos</label>
            <input type="text" class="form-control" name="apellidos" value="<?php echo $cliente['apellidos']; ?>" required>
        </div>

        <div class="mb-3">
            <label for="cedula" class="form-label">Cédula</label>
            <input type="text" class="form-control" name="cedula" value="<?php echo $cliente['cedula']; ?>" required>
        </div>

        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" class="form-control" name="telefono" value="<?php echo $cliente['telefono']; ?>" required>
        </div>

        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" class="form-control" name="direccion" value="<?php echo $cliente['direccion']; ?>" required>
        </div>

        <button type="submit" class="btn btn-success w-100">Actualizar Cliente</button>

    </form>
</div>

<?php
require_once("../../parte_inferior.php");
?>
