<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Quilla Sports - Login</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
        <link rel="stylesheet" href="css/miestilo.css">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/Action_submit.js"></script>
    </head>
    
    
    <body>
        
       
        <div id="capa_load">         
        </div>
        <div class="cont_login">
            <a href="logout.php" type="submit" style=" text-align:center; width: 14%; height: 20px;font-size: 20px;" class="btn btn-large btn-success"> Volver Menu</a><br>
            <div id="slogan">             
            </div>
          
            
            
             

            <form style="text-align: center" id="formlogin" action="process.php?c=1" method="post">


                <input type="number" required  style="width: 90%; height: 40px; font-size: 20px; text-align: center" name="usuario" placeholder="Usuario"/>
                <input type="password" required style="width: 90%; height: 40px; font-size: 20px; text-align: center" name="password" placeholder="Contrase&ntilde;a"/>
                <button type="submit" style="width: 90%; height: 40px;font-size: 20px;" class="btn btn-large btn-success"> Iniciar Sesi&oacute;n</button><br>
                <a href="../../Usuarios/views/Registro.php">¿No est&aacute; Registrado? Registrese</a>
                

            </form>

            <div id="result"></div>
        </div>

    </body>
</html>
