<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        
        <title>Registro de Canchas</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
        <link rel="stylesheet" href="css/miestilo.css">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/Action_submit.js"></script>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
 $(document).ready(function() {
 	 $("#responsecontainer").load("Listado.php");
   var refreshId = setInterval(function() {
      $("#responsecontainer").load('Listado.php?randval='+ Math.random());
   }, 2000);
   $.ajaxSetup({ cache: false });
});
</script>
    </head>
    <body>
        

            <iframe   src="Listado.php" frameborder="0" ></iframe>
<!--        <a href="Registro.php?v=1">Siguiente</a>-->
        
        <div id="capa_load">
            <div id="logo_load">

                <img src="img/loader.GIF"/>
                <p>Procesando....</p>
            </div>

        </div>
        <div style="width: 90%; margin: 0px auto; margin-top: 30px;">
            <fieldset>
                <legend style="color: #339900;text-align:  center">Registro de Canchas</legend>
                <form id="formreg" action="process.php?c=1" method="post">

                    <label>Nombre: </label><input required autocomplete="off" style="width: 100%;" type="text" name="nombres">
                    <label>Direcci&oacute;n: </label><input autocomplete="off" required style="width: 100%;" type="text" name="direccion">
                    <label>E-mail: </label><input required autocomplete="off" style="width: 100%;" type="email" name="email">
                    <button type="submit" style="width: 100%;" class="btn btn-success"><i class="icon-ok"> </i> Registrar</button>

                </form>
            </fieldset>
            <div id="result"></div>
            <button class="btn btn-success" onclick="javascript:history.go(-1);">Atr&aacute;s</button>
        </div>

    </body>
</html>
