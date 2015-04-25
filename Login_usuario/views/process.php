
   <?php

   require_once '../../Usuarios/Model/model.php';
   $model = new model();
   $op = $_GET["c"];
   session_start();
   if ($op == 1) {

       $usuario = $_POST["usuario"];
       $password = $_POST["password"];
       $fun=$model->validasecio($usuario,$password);
       if ($fun==1) {
           $_SESSION["id"] = $usuario;

           header('Location:../../Principal/views/Home.php');
       } else{
           
          echo '<script> alert("Datos incorrectos");window.location.href="../../index.php";</script>';

       }
   }

