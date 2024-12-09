<?php
require_once("../../parte_superior.php");


?>



<div class="container col-10" style="margin: 10% auto;">
    <div class="row justify-content-center">
        <div style="text-align: center;">
            <label style="font-size: 32px;" for="">Registro de producto</label>
        </div>
        <div class="col-sm-14">

            <form id="registro" class="form-horizontal" method="POST" action="/licoreria/controller/agregar/agregarProductos.php">
                <fieldset>


                    <!-- Form Name -->


                    <!-- Text input-->
                    <div style="margin-top: 40px;" class="form-group">
                        <label style=" color: var(--dark); font-size: larger; " class="col-md-4 control-label" for="producto">Nombre de producto</label>
                        <div class="col-xl-12">
                            <input autocomplete="off" id="producto" name="producto" type="text" placeholder="coloque el nombre del producto" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Select Basic -->
                    <div class="form-group">
                        <label style="font-size: larger; color: var(--dark); " class="col-md-4 control-label" for="cantidad" autocomplete="off">Cantidad</label>
                        <div class="col-md-12">
                            <input autocomplete="off" id="cantidad" name="cantidad" type="text" placeholder="coloque la cantidad en numeros" class="form-control input-md" required="">


                        </div>
                    </div>
                    <div class="form-group">
                        <label style="font-size: larger; color: var(--dark); " class="col-md-4 control-label" for="precio" autocomplete="off">Precio</label>
                        <div class="col-md-12">
                            <input autocomplete="off" id="precio" name="precio" type="text" placeholder="coloque la cantidad en numeros" class="form-control input-md" required="">


                        </div>
                    </div>



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