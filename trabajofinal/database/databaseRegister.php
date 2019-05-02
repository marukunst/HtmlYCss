<?php
require_once('../Clases/User.php');
require_once('../Clases/Validator.php');

$usuario=new User($_POST['nombre'],$_POST['mail'],$_POST['password'],$_FILES['foto']);
$validator=new Validator;
$validator->validarNombre($usuario->getNombre());
$validator->validarMail($usuario->getMail());
$validator->validarPassword($usuario->getPassword());
$validator->validarRepeatPassword($usuario->getPassword(),$_POST['repeatPassword']);
$validator->validarImagen($usuario->getImagen());
$validator->loguear($usuario->getNombre(),$usuario->getMail(),$usuario->getPassword(),$usuario->getImagen());









// forma estructural
// session_start();
 
// if(preg_match('/^[a-zA-Z0-9]{4,10}$/' ,$_POST['nombre'])){
//     $_SESSION['nombre']=$_POST['nombre'];
//     if(preg_match('/^[a-zA-Z0-9]{8}/',$_POST['password'])){
//         $password=$_POST['password'];
//         if($password==$_POST['repeatPassword']){
//             $passwordEncode=password_hash($password,PASSWORD_DEFAULT);

//                 if(filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL)){
//                     $_SESSION['mail']=$_POST['mail'];

//                     if(isset($_FILES['foto'])){

//                         if($_FILES['foto']['error']===UPLOAD_ERR_OK){

//                             $foto=$_FILES['foto']['name'];
//                             $ext=pathinfo($foto,PATHINFO_EXTENSION);
//                             $destino=$_SESSION['mail'].'.'.$ext;

//                             $origen=$_FILES['foto']['tmp_name'];
                            
//                             move_uploaded_file($origen,$destino);
//                             $_SESSION['foto']=$destino;
//                     $data=[
//                         "nombre"=>$_SESSION['nombre'],
//                         "password"=>$passwordEncode,
//                         "mail"=>$_SESSION['mail'],
//                         "imagen"=>$_SESSION['foto']
//                     ];

//                     $dataJson=json_encode($data);
//                     $archivo="baseDeDatos.json";
//                     file_put_contents($archivo,$dataJson);
//                     header('Location:../home.php');
//                          }else{
//                              header('Location:../registration.php?foto');
//                          }

//                     }else{
//                         header('Location:../registration.php?foto');
//                     };
//                 }else{
//                     header('Location:../registration.php?mail');
//                 }
//         }else{
//             header('Location:../registration.php?nomatch');
//         }
//     }else{
//         header('Location:../registration.php?password');
//     }
// }else{
//     header('Location:../registration.php?nombre');
// }
?> 