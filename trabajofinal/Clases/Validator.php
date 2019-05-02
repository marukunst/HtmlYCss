<?php 

    class Validator{
      public $nombreValidado=false;
      public $mailValidado=false;
      public $passwordValidado=false;
      public $passwordRepeatValidado=false;
      public $imagenValidado=false;

        public function validarNombre($nombre){
            if(preg_match('/^[a-zA-Z0-9]{4,10}$/',$nombre))
            {
                setcookie('nombreValidado',$nombre,time()+60,'/');
                 $this->nombreValidado=true;
                
            }else{
                $this->nombreValidado=false;
                
            }
        }
        public function validarMail($mail){
            if(filter_var($mail,FILTER_VALIDATE_EMAIL)){
                
                setcookie('mailValidado',$mail,time()+60,'/');
                 $this->mailValidado=true;
                 
            }else{
                $this->mailValidado=false;
              
            }
        }
        public function validarPassword($password){
            if(preg_match('/^[a-zA-Z0-9]{8}/',$password))
            {
                
                $this->passwordValidado=true;
            }else{
                $this->passwordValidado=false;
           
            }
        }
        public function validarRepeatPassword($password,$repeatPassword){
            if($password==$repeatPassword){
               
                 $this->passwordRepeatValidado=true;
            }else{
                $this->passwordRepeatValidado=false;
              
            }
        }
        public function validarImagen($imagen)
            {
                if($imagen){
                    if($imagen['error']===UPLOAD_ERR_OK){
                       
                         $this->imagenValidado=true;
                }else{
                    $this->imagenValidado=false;
                }
            }
            }
     
        public function loguear($nombre,$mail,$password,$imagen)
            {
                if($this->nombreValidado && $this->mailValidado && $this->passwordValidado && $this->passwordRepeatValidado && $this->imagenValidado)
                {
                    //creacion de session/
                    session_start();
                    $_SESSION['nombre']=$nombre;
                    $_SESSION['mail']=$mail;
                   
                    /*hash de pass*/
                    $passwordEncode=password_hash($password,PASSWORD_DEFAULT);
                    
                    //upload de foto/
                            $foto=$imagen['name'];
                            $ext=pathinfo($foto,PATHINFO_EXTENSION);
                            $destino=$_SESSION['mail'].'.'.$ext;

                            $origen=$imagen['tmp_name'];
                            
                            move_uploaded_file($origen,$destino);
                            $_SESSION['foto']=$destino;
                    //subida a base de datos/

                    $data=[
                        "nombre"=>$_SESSION['nombre'],
                        "password"=>$passwordEncode,
                        "mail"=>$_SESSION['mail'],
                        "imagen"=>$_SESSION['foto']
                    ];

                    $dataJson=json_encode($data);
                    $archivo="baseDeDatos.json";
                    file_put_contents($archivo,$dataJson);
                    header('Location:../home.php');
                }
                else
                {
                    header('Location:../registration.php?nombre='.$this->nombreValidado.'&mail='.$this->mailValidado.'&password='.$this->passwordValidado.'&passwordRepeat='.$this->passwordRepeatValidado.'&foto='.$this->imagenValidado.'');
                }
            }
    }