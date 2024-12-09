<?php
require_once("../../parte_superior.php");
require_once("../../connection/conexion.php");

// Obtener el producto a editar
$id_producto = $_GET['id'];
$sentencia = $bd->prepare("SELECT * FROM producto WHERE id = ?");
$sentencia->execute([$id_producto]);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);

if (!$producto) {
    echo "<script>alert('Producto no encontrado'); location.href='/licoreria/views/productos/listado.php';</script>";
    exit();
}
?>

<div class="container mt-5">
    <h2 class="text-center">Editar Producto</h2>
    <form action="/licoreria/controller/editar/editarProducto.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $producto->id; ?>">
        <div class="form-group">
            <label for="descripcion">Nombre del Producto</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control" 
                   value="<?php echo $producto->descripcion; ?>" required>
        </div>
        <div class="form-group">
            <label for="cantidad">Cantidad</label>
            <input type="number" name="cantidad" id="cantidad" class="form-control" 
                   value="<?php echo $producto->cantidad; ?>" required>
        </div>
        <div class="form-group">
            <label for="precio">Precio Unitario</label>
            <input type="text" name="precio" id="precio" class="form-control" 
                   value="<?php echo $producto->precio; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Actualizar Producto</button>
    </form>
</div>

<?php
require_once("../../parte_inferior.php");
?>
