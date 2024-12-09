<?php

require_once("../../parte_superior.php");
require_once("../../connection/conexion.php");

$sentencia = $bd->query("SELECT id as IM,descripcion as dm,cantidad as c,precio as p FROM producto");
$todo = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>


<div class="container">
    <table class="table table-bordered border-secondary">
        <thead>
            <tr>
                <th scope="col">SUBTOTAL</th>
                <th scope="col">IVA</th>
                <th scope="col">TOTAL</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">0</th>
                <th scope="row">0</th>
                <th scope="row">0</th>
            </tr>




            <!--  <?php foreach ($resultado as $productos) : ?>
                <tr>
                    <th scope="row"><?php echo $productos->ID; ?></th>
                    <td><?php echo $productos->d; ?></td>
                    <td><?php echo $productos->c; ?></td>
                    <td><?php echo $productos->p; ?></td>

                    <td>
                        <a style="color: white;  background-color: var(--green);" class="btn " href="">Modificar</a>




                        <a class="btn btn-danger" href="">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?> -->



        </tbody>
    </table>
</div>

<div class="contenedor">
    <div id="loginbox" class="form-bottom">

        <div class="panel">
            <div class="panel-heading" style="background-color: var(--primary); height: 40px;">
                <div class="panel-title text-center" style="color: white;">Detalles de compra</div>
            </div>
            <div style="border: 1px solid var(--primary); background-color: white; " class="panel-body">
                <form method="POST" id="registro" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="cargo">Producto</label>
                        <div class="col-md-13">
                            <select id="cargo" name="cargo" class="form-control">
                                <?php foreach ($todo as $datos) {  ?>
                                    <option value="<?php echo $datos->IM  ?>">
                                        <?php echo $datos->dm ?>
                                    </option>
                                <?php  } ?>
                            </select>
                        </div>
                    </div>
                    <label class="col-md-4 control-label" for="cargo">Cantidad</label>

                    <div style="" class="input-group col-sm-12">

                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="text" class="form-control" name="password" placeholder="Coloque la cantidad que desea">
                    </div>

                    <div style="" class="form-group ">
                        <div class="col  text-center">
                            <button id="aceptar" name="aceptar" class="btn btn-primary">Agregar</button>
                        </div>
                    </div>
                </form>
                <table class="table table-borderless border-dark">
                    <thead>
                        <tr>
                            <th scope="col">Codigo</th>
                            <th scope="col">Nombre de producto</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Precio Unitario</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                        </tr>
                        <!--  <th></th>
                        <th></th>
                        <tr>
                            <td>2</td>
                            <td>Anis cartujo</td>
                            <td>1</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                Pepsi cola 2L
                            </td>

                            <td>2</td>
                            <td>2.5</td>
                        </tr>

                        </tr>

 -->


                        <!-- 
                <?php foreach ($resultado as $productos) : ?>
                    <tr>
                        <th scope="row"><?php echo $productos->ID; ?></th>
                        <td><?php echo $productos->d; ?></td>
                        <td><?php echo $productos->c; ?></td>
                        <td><?php echo $productos->p; ?></td>

                        <td>
                            <a style="color: white;  background-color: var(--green);" class="btn " href="">Modificar</a>




                            <a class="btn btn-danger" href="">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
 -->


                    </tbody>
                </table>

            </div>
        </div>



    </div>
    <div id="loginbox" class="form">
        <div class="panel">
            <div class="panel-heading" style="background-color: var(--green); height: 40px;">
                <div class="panel-title text-center" style="color: white;">Datos Generales</div>
            </div>
            <div style="border: 1px solid var(--green); background-color: white; padding-top:30px" class="panel-body">
                <form method="POST" id="registro" class="form-horizontal" role="form">
                    <div style="margin-bottom: 25px" class="col-sm-12 input-group">
                        <label style="font-size: x-large;" class=" col-md-4 control-label" for="cargo">Cedula</label>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control input-md" name="username" placeholder="Numero de cedula">
                    </div>


                    <div class="form-group">
                        <div class="col  text-center">
                            <button style="width: 380px;" id="aceptar" name="aceptar" class="btn btn-warning">Buscar</button>
                        </div>
                    </div>

                    <div style="margin-bottom: 25px; margin-top: 25px;" class="col-sm-12 input-group">
                        <label style="font-size: x-large;" class=" col-md-4 control-label" for="cargo">Cliente</label>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control input-md" name="username" placeholder="" readonly>
                    </div>
                    <div class="form-group">
                        <div class="col  text-center">
                            <button style="width: 380px; color: white; background-color: var(--green);" id="aceptar" name="aceptar" class="btn btn">Facturar</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

</div>












<?php
require_once("../../parte_inferior.php")

?>