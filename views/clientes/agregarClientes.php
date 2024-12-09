<?php
require_once("../../parte_superior.php");


?>



<div class="container col-10" style="margin: 10% auto;">
    <div class="row justify-content-center">
        <div style="text-align: center;">
            <label style="font-size: 32px;" for="">Registro de Cliente</label>
        </div>
        <div class="col-sm-10">

            <form id="registro" class="form-horizontal" method="POST" action="/licoreria/controller/agregar/agregarCliente.php">
                <fieldset>

                    <div>

                    </div>


                    <!-- Form Name -->


                    <!-- Text input-->
                    <div style="margin-top: 40px;" class="form-group">
                        <label style=" color: var(--dark); font-size: larger; " class="col-md-4 control-label" for="nombres">Nombres</label>
                        <div class="col-xl-12">
                            <input autocomplete="off" id="nombres" name="nombres" type="text" placeholder="coloque los nombres" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Select Basic -->
                    <div class="form-group">
                        <label style="font-size: larger; color: var(--dark); " class="col-md-4 control-label" for="apellidos" autocomplete="off">Apellidos</label>
                        <div class="col-md-12">
                            <input autocomplete="off" id="apellidos" name="apellidos" type="text" placeholder="coloque los apellidos" class="form-control input-md" required="">


                        </div>
                    </div>
                    <div class="form-group">
                        <label style="font-size: larger; color: var(--dark); " class="col-md-4 control-label" for="cedula" autocomplete="off">Cedula</label>
                        <div class="col-md-12">
                            <input autocomplete="off" id="cedula" name="cedula" type="text" placeholder="coloque la cedula de identidad" class="form-control input-md" required="">


                        </div>
                    </div>
                    <div class="form-group">
                        <label style="font-size: larger; color: var(--dark); " class="col-md-4 control-label" for="telefono" autocomplete="off">Telefono</label>
                        <div class="col-md-12">
                            <input autocomplete="off" id="telefono" name="telefono" type="text" placeholder="coloque el numero telefonico" class="form-control input-md" required="">


                        </div>
                    </div>
                    <div class="form-group">
                        <label style="font-size: larger; color: var(--dark); " class="col-md-4 control-label" for="direccion" autocomplete="off">Direccion</label>
                        <div class="col-md-12">
                            <input autocomplete="off" id="direccion" name="direccion" type="text" placeholder="coloque una direccion corta" class="form-control input-md" required="">


                        </div>
                    </div>




                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="aceptar"></label>
                        <div class="col text-center ">
                            <button style="color: white;   background-color: var(--green);" type="submit" id="aceptar" name="aceptar" class="col-sm-12 btn ">Aceptar</button>
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