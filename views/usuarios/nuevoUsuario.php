<?php

require_once("../../parte_superior.php");



?>




<div class="container col-10" style="margin: 10% auto;">
    <div class="row justify-content-center">
        <div style="text-align: center;">
            <label style="font-size: 32px;" for="">Registro de Usuario</label>
        </div>
        <div class="col-sm-14">

            <form id="registro" class="form-horizontal" method="POST" action="/licoreria/controller/agregar/agregarUsuario.php">
                <fieldset>


                    <!-- Form Name -->


                    <!-- Text input-->
                    <div style="margin-top: 40px;" class="form-group">
                        <label style=" color: var(--dark); font-size: larger; " class="col-md-4 control-label" for="user">Nombre de Usuario</label>
                        <div class="col-xl-12">
                            <input autocomplete="off" id="user" name="user" type="text" placeholder="coloque un nombre de usuario" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Select Basic -->
                    <div class="form-group">
                        <label style="font-size: larger; color: var(--dark); " class="col-md-4 control-label" for="password" autocomplete="off">Contraseña</label>
                        <div class="col-md-12">
                            <input autocomplete="off" id="password" name="password" type="password" placeholder="coloque una contraseña" class="form-control input-md" required="">


                        </div>
                    </div>

                    <div class="form-group">
                        <label style=" color: var(--dark); " class="h5 col-md-4 control-label" for="cargo">Cargo</label>
                        <div class="col-md-12">
                            <select id="cargo" name="cargo" class="form-control">
                                <option value="Empleado">Empleado</option>

                                <option class="form" value="Administrador">Admistrador</option>




                            </select>
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <label style="font-size: larger; color: var(--dark); " class="col-md-4 control-label" for="precio" autocomplete="off">Precio</label>
                        <div class="col-md-12">
                            <input autocomplete="off" id="precio" name="precio" type="text" placeholder="coloque la cantidad en numeros" class="form-control input-md" required="">


                        </div>
                    </div> -->



                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="aceptar"></label>
                        <div class="col text-center ">
                            <button style="color: white;  background-color: var(--green);" type="submit" id="aceptar" name="aceptar" class="col-sm-12 btn ">Aceptar</button>
                        </div>
                    </div>

                </fieldset>
            </form>








        </div>



    </div>




</div>









<?php
require_once("../../parte_inferior.php");

?>