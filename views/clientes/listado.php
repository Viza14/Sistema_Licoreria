<?php
require_once("../../parte_superior.php");
require_once("../../connection/conexion.php");

$sentencia = $bd->query("SELECT id as ID, concat(nombres, ' ', apellidos) as nc, cedula as c, telefono as t, direccion as d FROM clientes");
$resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<div style="margin: 5% 5%;">
    <table class="table table-bordered border-dark">
        <thead>
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Nombre Completo</th>
                <th scope="col">Cédula</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Dirección</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($resultado as $clientes) : ?>
                <tr>
                    <th scope="row"><?php echo $clientes->ID; ?></th>
                    <td><?php echo $clientes->nc; ?></td>
                    <td><?php echo $clientes->c; ?></td>
                    <td><?php echo $clientes->t; ?></td>
                    <td><?php echo $clientes->d; ?></td>
                    <td>

                        <div style="display: flex; gap: 4px;">
                            <!-- Enlace para modificar, pasa el ID del cliente -->
                            <a style="color: white; background-color: var(--green); padding: 5px 10px; text-decoration: none; border-radius: 4px;"
                                class="btn"
                                href="/licoreria/views/clientes/editarClientes.php?id=<?php echo $clientes->ID; ?>">Modificar</a>

                            <!-- Botón para eliminar con pantallazo de confirmación -->
                            <a style="color: white; background-color: rgb(255, 186, 0); padding: 5px 10px; text-decoration: none; border-radius: 4px;"
                                class="btn btn-danger"
                                href="javascript:void(0);"
                                onclick="confirmarEliminacion('<?php echo $clientes->ID; ?>')">Eliminar</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Script para pantallazo de confirmación -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmarEliminacion(id) {
        // Pantallazo con diseño personalizado
        Swal.fire({
            title: '¿Estás seguro de eliminar este cliente?',
            text: 'No podrás deshacer esta acción.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirigir al archivo PHP para eliminar el cliente
                window.location.href = `/licoreria/controller/eliminar/eliminarCliente.php?id=${id}`;
            }
        });
    }
</script>

<?php
require_once("../../parte_inferior.php");
?>