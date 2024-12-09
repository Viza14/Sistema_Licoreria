<!-- <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="/licoreria/css/style.css">
</head>

<body class="cuerpo">
    <div class="login-container">
        <h2 class="textoP">Iniciar Sesión</h2>
        <form action="/login" method="POST">
            <div class="input-group">
                <label class="texto" for="username">Usuario</label>
                <input class="caja" type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label class="texto" for="password">Contraseña</label>
                <input class="caja" type="password" id="password" name="password" required>
            </div>
            <button class="boton_enviar" type="submit">Entrar</button>
        </form>
    </div>
</body>

</html> -->



<!-- separacion -->




<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión - Licorería</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/licoreria/css/style.css">
</head>

<body class="">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div style="background-color: var(--purple);" class="card-header text-center">
                        <!-- <img src="logo.png" alt="Logo Licorería" class="img-fluid" style="max-width: 150px;"> -->
                        <h3>Iniciar Sesión</h3>
                    </div>
                    <div class="card-body">
                        <form action="/licoreria/controller/buscar/buscarUser.php" method="POST">
                            <div class="form-group">
                                <label for="username">Usuario</label>
                                <input type="text" id="username" name="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" id="password" name="password" class="form-control" required>
                            </div>
                            <button style="color: white;  background-color: var(--purple);" type="submit" class="btn  btn-block">Aceptar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>