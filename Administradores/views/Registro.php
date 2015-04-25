<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro de Administradores</title>
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
            <div id="logo_load">

                <img src="img/loader.GIF"/>
                <p>Procesando...</p>
            </div>

        </div>
        <div style="width: 90%; margin: 0px auto; margin-top: 30px;">
            <fieldset>
                <legend style="color: #339900;">Registro de Administradores</legend>
                <form   id="formreg" action="process.php?c=1" method="post">
                    <?php
                    include_once '../../Usuarios/Model/model.php';
                    $model = new model();
                    $model->Get_Usuarios();
                    ?>
                    <label>C&eacute;dula: </label>
                    <input list="usuarios" required autocomplete="off" style="width: 100%;" type="text" name="cedula">
                    
                    <button type="submit" style="width: 100%;" class="btn btn-success"><i class="icon-ok"> </i> Registrar</button>

                </form>
            </fieldset>
            <div id="result"></div>
            <button class="btn btn-success" onclick="javascript:history.go(-1);">Atr&aacute;s</button>
        </div>

    </body>
</html>
