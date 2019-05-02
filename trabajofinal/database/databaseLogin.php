<?php
    $data=file_get_contents("baseDeDatos.json");
    $dataDecode=json_decode($data,true);
    
    if(($_POST['nombre']==$dataDecode['nombre'] || $_POST['nombre']==$dataDecode['mail']) && password_verify($_POST['password'],$dataDecode['password'])){
        session_start();
        $_SESSION['nombre']=$dataDecode['nombre'];
        $_SESSION['mail']=$dataDecode['mail'];
        $_SESSION['recordarme']=$_POST['recordarme'];
        $_SESSION['foto']=$dataDecode['imagen'];
        header("Location:../home.php");
    }else{
        header("Location:../login.php?msj");
    }
    

?>