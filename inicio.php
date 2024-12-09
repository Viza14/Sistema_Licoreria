<?php require_once("parte_superior.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php


if (!isset($_SESSION['username'])) {

?>

    <script>
        Swal.fire({
            icon: "error",
            title: "usuario no autorizado",
            text: "",
            showConfirmButton: true,

        }).then((result) => {
            if (result.isConfirmed) {
                location.href = "/licoreria/index.php";
            }


        });
    </script>

<?php

} else {





?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>

        <div class="headder  " style="display: 
flex; justify-content: center; align-items: center;">
            <h1 style="margin: 5% 5%; color: var(--dark);">Sistema de control de ventas de licores</h1>

        </div>

        <div style="display: 
flex; justify-content: center; align-items: center;" class="gif">
            <img src="/licoreria/img/botella2.png" alt="">



        </div>

    </body>

    </html>







<?php
    require_once("parte_inferior.php");
}
?>