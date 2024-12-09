<?php
require_once("../../parte_superior.php");
require_once("../../connection/conexion.php");

// Consultar los productos en la base de datos
$sentencia = $bd->query("SELECT id as ID, descripcion as d, cantidad as c, precio as p FROM producto");
$resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<div style="margin: 5% 5%;">
    <table class="table table-bordered border-dark">
        <thead>
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Nombre de Producto</th>
                <th scope="col">Cantidad en Stock</th>
                <th scope="col">Precio Unitario</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($resultado as $productos) : ?>
                <tr>
                    <th scope="row"><?php echo $productos->ID; ?></th>
                    <td><?php echo $productos->d; ?></td>
                    <td><?php echo $productos->c; ?></td>
                    <td><?php echo $productos->p; ?></td>
                    <td>
                        <div style="display: flex; gap: 4px;">
                            <!-- Enlace para editar el producto -->
                            <a style="color: white; background-color: var(--green);" class="btn"
                                href="/licoreria/views/productos/editarProducto.php?id=<?php echo $productos->ID; ?>">Modificar</a>

                            <!-- Botón para eliminar con confirmación -->
                            <a style="color: white; background-color:rgb(255, 186, 0);" href="javascript:void(0);"
                                class="btn btn-danger"
                                onclick="confirmarEliminacionProducto('<?php echo $productos->ID; ?>')">Eliminar</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Script para la confirmación con SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmarEliminacionProducto(id) {
        Swal.fire({
            title: '¿Estás seguro de eliminar este producto?',
            text: 'Esta acción no se puede deshacer.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirigir al archivo para eliminar el producto
                window.location.href = `/licoreria/controller/eliminar/eliminarProducto.php?id=${id}`;
            }
        });
    }
</script>

<?php
require_once("../../parte_inferior.php");
?>