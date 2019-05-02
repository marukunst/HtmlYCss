
<?php
 if(isset($_GET['nombre']) && $_GET['nombre']!=1)
 {
    echo '<style type="text/css">
   
    input[name="nombre"]:focus{
        border-color: red;
        box-shadow: 0 1px 1px red inset, 0 0 8px red;
        outline: 0 none;
        }
  
</style>';
 }
 if(isset($_GET['password']) && $_GET['password']!=1)
 {
    echo '<style type="text/css">
   
    input[name="password"]:focus{
        border-color: red;
        box-shadow: 0 1px 1px red inset, 0 0 8px red;
        outline: 0 none;
        }
  
</style>';
 }
 if(isset($_GET['mail']) && $_GET['mail']!=1)
 {
    echo '<style type="text/css">
   
    input[name="mail"]:focus{
        border-color: red;
        box-shadow: 0 1px 1px red inset, 0 0 8px red;
        outline: 0 none;
        }
  
</style>';
 }
 if(isset($_GET['passwordRepeat']) && $_GET['passwordRepeat']!=1)
 {
    echo '<style type="text/css">
   
    input[name="repeatPassword"]:focus{
        border-color: red;
        box-shadow: 0 1px 1px red inset, 0 0 8px red;
        outline: 0 none;
        }
  
</style>';
 }
?> 