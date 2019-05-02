<!doctype html>
<html lang="en">

<head>
    <?php
    session_start();
    if(!isset($_SESSION['nombre'])){
        header('Location:login.php?failSession');
    }
    if(isset($_SESSION['recordarme'])){
        setcookie('usuario',$_SESSION['nombre'],time()+60);
    }

    ?>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/stylesHome.css">
    <link href="https://fonts.googleapis.com/css?family=Holtwood+One+SC|Montserrat|Rubik" rel="stylesheet">
</head>

<body>
    <?php include("menu.php"); ?>
    <div class="container">
        <div class="row text-center">
            <div class="col-12 mt-5">
                <h1>EL JUEGO DE LA HISTORIA</h1>
            </div>
            <div id=modulo class="col col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-5">
                <h4>CLASE Nª1: LA REVOLUCIÓN INDUSTRIAL</h4>
                <p><img src="images/open-book.png" alt=""></p>
            </div>
            <div class="col col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-5">
            <p class="contenido">La Primera Revolución Industrial en Gran Bretaña: Por qué logró reunir más rápido que los demás países europeos el mayor número de aquellas condiciones favorables al crecimiento</p>
            </div>
            <div id=modulo class="col col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-5">
                <h4>  CLASE Nª2: LAS TRANSFORMACIONES SOCIALES</h4>
                <p><img src="images/loss.png" alt=""></p>
            </div>
            <div class="col col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-5">
            <p class="contenido">Las transformaciones sociales de la Revolución Industrial en Gran Bretaña. Los resultados humanos de la Revolución Industrial, 1750 – 1850.</p>
              </div>
            <div id=modulo class="col col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-5">
                <h4>  CLASE Nª3: LA DIFUSIÓN DE LA INDUSTRIALIZACIÓN</h4>
                <p><img src="images/money.png" alt=""></p>
            </div>
            <div class="col col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-5">
            <p class="contenido">La difusión de la industrialización y la emergencia de las economías capitalistas (1815 – 1870).</p>
            </div>
            <div id=modulo class="col col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-5">
                <h4>  CLASE Nª4: LA SEGUNDA REVOLUCIÓN INDUSTRIAL</h4>
                <p><img src="images/auction.png" alt=""></p>
            </div>
            <div class="col col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-5">
            <p class="contenido">La segunda industrialización en el marco de la primera globalización (1870 – 1913).</p>
            </div>
            <div id=modulo class="col col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-5">
                <h4>  CLASE Nª5: LA TRANSFORMACIONES EN LA ORGANIZACIÓN</h4>
                <p><img src="images/auction.png" alt=""></p>
            </div>
            <div class="col col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-5">
            <p class="contenido">Las transformaciones en la organización del trabajo, de la producción y de la empresa, entre el siglo XIX y el siglo XX.</p>
            </div>









        </div>
        <!-- <div class="row" id="about"> <h2>ABOUT</h2> </div> -->
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
