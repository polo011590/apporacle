<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro de Usuarios</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
        <link rel="stylesheet" href="css/miestilo.css">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/Action_submit.js"></script>
        <script type="text/javascript">

</script>
    </head>
    <body>
       
        <div id="capa_load">
            <div id="logo_load">

                <img src="img/loader.GIF"/>
                <p>Procesando...</p>
            </div>

        </div>
        <div style="width: 90%; margin: 0px auto; margin-top: 30px;">
            <?php
//            require_once '../Model/model.php';
//            $model = new model();
//            session_start();
//            if (isset($_SESSION["id"])) {
//                if ($model->IS_Administrator($_SESSION["id"])) {
//                    ?>
<!--                    <a class="btn-link" href="Listado.php">Listado de Usuarios</a>-->
                    <?php
//                }
//            }
            ?>
           <a class="btn-link" href="Listado.php">Listado de Usuarios</a>
            <fieldset>
                <legend style="color: #339900;">Registro de Usuario</legend>
                <form id="formreg" action="process.php?c=1" method="post">
                    <label>C&eacute;dula: </label><input required style="width: 100%;" type="number" name="cedula">
                    <label>Nombres: </label><input required style="width: 100%;" type="text" name="nombres">
                    <label>Apellidos: </label><input required style="width: 100%;" type="text" name="apellidos">
                    <label>E-mail: </label><input required style="width: 100%;" type="email" name="email">
                    <label>Sexo: </label>
                    <select name="sexo" style="width: 100%;" >
                        <option>Masculino</option>
                        <option>Femenino</option>
                    </select>
                    <label>Fecha de Nacimiento: </label><input required style="width: 100%;" type="date" name="fecha_nac">
                    <label>Direcci&oacute;n: </label><input required style="width: 100%;" type="text" name="direccion">
                    <label>Tel&eacute;fono: </label><input pattern="[0-9]{1,7}" style="width: 100%;" type="tel" name="telefono">
                    <label>Celular: </label><input required pattern="[0-9]{1,10}" style="width: 100%;" type="number" name="celular">
                    <label>Profesi&oacute;n: </label><input required style="width: 100%;" type="text" name="profesion">
                    <label>Contrase&ntilde;a: </label><input required style="width: 100%;" type="password" name="contrasena">
                    <button type="submit"  style="width: 100%;" class="btn btn-success"><i class="icon-ok"> </i> Registrar</button>

                </form>
            </fieldset>
            <div id="result"></div>
            <button style="width: 100%;" class="btn btn-success" onclick="javascript:history.go(-1);">Atr&aacute;s</button>
        </div>

    </body>
</html>
