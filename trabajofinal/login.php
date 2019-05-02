<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Holtwood+One+SC|Montserrat|Rubik" rel="stylesheet">
    <link rel="stylesheet" href="styles/stylesHome.css">
    <link rel="stylesheet" href="styles/stylesForms.css">
</head>

<body>
    <?php include("menu.php"); ?>
    <div class="container fondo">
        <div class="row justify-content-center h-100">
            <div class="col-10 col-sm-7">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Bienvenido!</h4>
                        <form action="database/databaseLogin.php" method="POST">
                            <div class="form-group">
                                <label for="nombre">Usuario</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su nombre o correo electrónico" autofocus="autofocus" value="<?php if(isset($_COOKIE['usuario'])){ echo $_COOKIE['usuario'];}; ?>">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Ingrese su contraseña">
                                <div class="form-check mt-3">
                            <input type="checkbox" class="form-check-input" name="recordarme" id="recordarme">
                            <label class="form-check-label" for="recordarme">Recordarme</label>
                        </div>
                            </div>
                            <button class="mb-2 done" type="submit">Log In</button>
                        </form>
                        <a href="registration.php" id="registro">
                            Registrarme!
                        </a>

                    
                        <a href="" id="olvido">
                            Olvido Su contraseña?</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
                if (isset($_GET['msj'])) {
               
                    echo '<div class="row">
                        <div class="col">
                        <div class="alert alert-danger" role="alert">
                        <strong>Usuario o pass incorrectos!</strong>
                       </div>';
                };
                if (isset($_GET['failSession'])) {
               
                    echo '<div class="row">
                        <div class="col">
                        <div class="alert alert-danger" role="alert">
                        <strong>Loguearse Pls!</strong>
                       </div>';
                };
                ?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>