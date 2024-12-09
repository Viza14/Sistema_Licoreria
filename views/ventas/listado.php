<?php
require_once("../../parte_superior.php");
require_once("../../connection/conexion.php");


$sentencia = $bd->query("SELECT v.id as ID, concat(c.nombres,' ' ,c.apellidos) as nc,v.fecha as f,v.monto_total as m, u.user as u FROM ventas v JOIN clientes c on c.id=v.id_cliente JOIN usuarios u on u.id=v.id_usuario ");
$resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);




?>
<div style="margin: 5% 5%;">
    <table class="table table-bordered border-dark">
        <thead>
            <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Nombre del cliente</th>
                <th scope="col">fecha</th>
                <th scope="col">Monto total</th>
                <th scope="col">Usuario que la genero</th>
            </tr>
        </thead>
        <tbody>




            <?php foreach ($resultado as $ventas) : ?>
                <tr>
                    <th scope="row"><?php echo $ventas->ID; ?></th>
                    <td><?php echo $ventas->nc; ?></td>
                    <td><?php echo $ventas->f; ?></td>
                    <td><?php echo $ventas->m; ?></td>
                    <td><?php echo $ventas->u; ?></td>


                </tr>
            <?php endforeach; ?>



        </tbody>
    </table>

</div>

<?php
require_once("../../parte_inferior.php");

?>