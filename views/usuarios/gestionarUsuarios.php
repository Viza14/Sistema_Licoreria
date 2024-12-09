<?php
require_once("../../parte_superior.php");
require_once("../../connection/conexion.php");

$sentencia = $bd->query("SELECT id as ID, user as usuario, password as contraseña, cargo as cargo, estatus as estado FROM usuarios");
$resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<div style="margin: 5% 5%;">
    <table class="table table-bordered border-dark">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Usuario</th>
                <th scope="col">Contraseña</th>
                <th scope="col">Cargo</th>
                <th scope="col">Estado</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($resultado as $usuario) : ?>
                <tr>
                    <th scope="row"><?php echo $usuario->ID; ?></th>
                    <td><?php echo $usuario->usuario; ?></td>
                    <td><?php echo $usuario->contraseña; ?></td>
                    <td><?php echo $usuario->cargo; ?></td>
                    <td><?php echo $usuario->estado; ?></td>
                    <td>

                        <div style="display: flex; gap: 4px;">
                            <!-- Enlace para modificar, pasa el ID del usuario -->
                            <a style="color: white; background-color: var(--green);" class="btn"
                                href="/licoreria/views/usuarios/editarUsuarios.php?id=<?php echo $usuario->ID; ?>">Modificar</a>

                            <!-- Botón para eliminar con SweetAlert -->
                             <a style="color: white; background-color: rgb(255, 186, 0); padding: 5px 10px; text-decoration: none; border-radius: 4px;"
                                class="btn btn-danger"
                                onclick="confirmarEliminacion('<?php echo $usuario->ID; ?>')">Eliminar</a>
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
            title: '¿Estás seguro de eliminar este usuario?',
            text: 'No podrás deshacer esta acción.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirigir al archivo PHP para eliminar el usuario
                window.location.href = `/licoreria/controller/eliminar/eliminarUsuario.php?id=${id}`;
            }
        });
    }
</script>

<?php
require_once("../../parte_inferior.php");
?>