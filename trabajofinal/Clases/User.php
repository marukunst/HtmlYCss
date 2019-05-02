<?php 

    class User{
        private $nombre;
        private $mail;
        private $password;
        private $imagen;

            public function __construct($nombre,$mail,$password,$imagen)
            {
                $this->nombre=$nombre;
                $this->mail=$mail;
                $this->password=$password;
                $this->imagen=$imagen;
            }
            public function getNombre()
            {
                return $this->nombre;
            }
            public function getMail()
            {
                return $this->mail;
            }
            public function getPassword()
            {
                return $this->password;
            }
            public function getImagen()
            {
                return $this->imagen;
            }
    }