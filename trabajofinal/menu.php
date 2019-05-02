<nav class="navbar navbar-expand-sm navbar-dark fixed-top">
    <a class="navbar-brand" href="home.php">
        <img class="logo" src="images/logo.png" alt=""></a>
    <button class="navbar-toggler d-sm-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto faq">
            <li class="nav-item">
                <a class="nav-link" href="FAQ.php">FAQ</a>
            </li>
        </ul>
        <ul class="navbar-nav loginRegister">
            <?php
           
            if(isset($_SESSION['foto']))
            {
                echo '<img class="profile" src="database/'.$_SESSION['foto'].'" alt="">';
            }
            if(isset($_SESSION['nombre'])){
                echo ' 
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bienvenido '.$_SESSION['nombre'].'</a>
            <div class="dropdown-menu dropItem" aria-labelledby="dropdownId">
                <a class="dropdown-item" href="#">Perfil</a>
                <a class="dropdown-item" href="database/LogOut.php">Cerrar Session</a>
            </div>
        </li>';
            }else{
                echo '<li class="nav-item">
                <a class="nav-link" href="login.php">LogIn!</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="registration.php">Register!</a>
            </li>';
            };
        
            ?>
        </ul>
    </div>
</nav>
