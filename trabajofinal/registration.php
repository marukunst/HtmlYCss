<!doctype html>
<html lang="en">

<head>
    <title>Registration</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Holtwood+One+SC|Montserrat|Rubik" rel="stylesheet">
    <link rel="stylesheet" href="styles/stylesHome.css">
    <link rel="stylesheet" href="styles/stylesForms.css">
    <?php 
include("errorsForm.php");
  ?>
</head>

<body>
    <?php include("menu.php"); ?>
    <div class="container fondo">
        <div class="row justify-content-center h-100">
            <div class="col-10 col-sm-7" >
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Registrate!</h4>
                        <form action="database/databaseRegister.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control <?php if(isset($_GET['nombre']) && $_GET['nombre']!=1){ echo 'border-danger';};?>" name="nombre" id="nombre" placeholder="Ingrese su nombre" <?php if(isset($_GET['nombre']) && $_GET['nombre']!=1){ echo "autofocus";};?> value="<?php if(isset($_COOKIE['nombreValidado'])){ echo $_COOKIE['nombreValidado'];} ?>">
                            </div>
                            <div class="form-group">
                                <label for="mail">Mail</label>
                                <input type="mail" class="form-control  <?php if(isset($_GET['mail']) && $_GET['mail']!=1){ echo 'border-danger';};?>" name="mail" id="mail" placeholder="Ingrese su correo electrónico" <?php if(isset($_GET['mail']) && $_GET['mail']!=1){ echo "autofocus";};?> value="<?php if(isset($_COOKIE['mailValidado'])){ echo $_COOKIE['mailValidado'];} ?>">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control <?php if(isset($_GET['password']) && $_GET['password']!=1){ echo 'border-danger';};?>" name="password" id="password" placeholder="Ingrese su contraseña" <?php if(isset($_GET['password'])  && $_GET['password']!=1){ echo "autofocus";}; ?>>
                            </div>
                            <div class="form-group">
                                <label for="repeatPassword">Repeat Password</label>
                                <input type="password" class="form-control <?php if(isset($_GET['passwordRepeat']) && $_GET['passwordRepeat']!=1 ){ echo 'border-danger';};?>" name="repeatPassword" id="repeatPassword" placeholder="Repite su contraseña" <?php if(isset($_GET['passwordRepeat']) && $_GET['passwordRepeat']!=1){ echo "autofocus";};?>>
                            </div>
                            Foto De Perfil:<input type="file" name="foto" id="foto">
                            <button class="mt-3 done" type="submit">Registrarme!</button>
                        </form>
                        <a href="login.php" id="login">
                            Log In!
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php
                if(isset($_GET['nombre']) && $_GET['nombre']!=1) {
               
                    echo '<div class="row">
                        <div class="col">
                        <div class="alert alert-danger" role="alert">
                        <strong>Usuario entre 4 a 10 caracteres</strong>
                       </div>';
                };
                if(isset($_GET['password']) && $_GET['password']!=1) {
                echo '<div class="row">
                    <div class="col">
                <div class="alert alert-danger" role="alert">
                    <strong>password minimo 8 caracteres</strong>
                </div>
                    </div>
                </div>';
            };
            if(isset($_GET['passwordRepeat']) && $_GET['passwordRepeat']!=1 ) {
                echo '<div class="row">
                    <div class="col">
                <div class="alert alert-danger" role="alert">
                    <strong>passwords no coinciden</strong>
                </div>
                    </div>
                </div>';
            };
            if(isset($_GET['mail']) && $_GET['mail']!=1) {
                echo '<div class="row">
                    <div class="col">
                <div class="alert alert-danger" role="alert">
                    <strong>Formato de mail invalido</strong>
                </div>
                    </div>
                </div>';
            };
            if (isset($_GET['foto']) && $_GET['foto']!=1) {
                echo '<div class="row">
                    <div class="col">
                <div class="alert alert-danger" role="alert">
                    <strong>Falta subir foto</strong>
                </div>
                    </div>
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