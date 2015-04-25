 <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once '../../Usuarios/Model/model.php';
$model = new model();
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Quilla Sports - P&aacute;gina Principal</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
        <link rel="stylesheet" href="css/miestilo.css">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/Action_submit.js"></script>
    </head>
    <body>

        <div style="width: 100%; margin: 0px auto; margin-top: 30px;">
            <a style="width:90%; height: 20px; " href="../../Login_usuario/views/logout.php" class="btn btn-small btn-primary">Cerrar Sesi&oacute;n</a>
            <table border="0">

                <tbody>
                    <tr>
                        <td>
                            <?php
                            $model->GET_Nombre_usuario($_SESSION["id"]);
                            ?>
                        </td>



                    </tr>
                </tbody>
            </table>


            <table border="0">

                <tbody>
                    <tr>
                        <td> <img src="img/villa_fondo.png"></td>
                        <td>
                            <div style="border: 2px #333 solid;" class="form-actions">


                                <?php
                                if ($model->IS_Administrator($_SESSION["id"])) {
                                    ?>
                                    <a style="font-size: 12px;" class="btn btn-primary" href="../../Arbitros/views/Registro.php">&Aacute;rbitros</a><br><br>
                                    <a style="font-size: 12px;" class="btn btn-success" href="../../Canchas/views/Registro.php">Canchas</a><br><br>
                                    <a style="font-size: 12px;" class="btn btn-primary" href="../../Detalle_Cancha/views/Registro.php">Precios</a><br><br>
                                    <a style="font-size: 12px;" class="btn btn-success" href="../../Usuarios/views/Registro.php">Usuarios</a><br><br>
                                    <a style="font-size: 12px;" class="btn btn-primary" href="../../Administradores/views/Registro.php">Administradores</a><br><br>
                                    <a style="font-size: 12px;" class="btn btn-success" href="../../../Reservas/views/Listado.php">Reservass</a>
                                    <?php
                                } else {
                                    ?>
                                    <a style="font-size: 12px;" class="btn btn-large" href="../../Reservas/views/Registro.php"><i class="icon-shopping-cart"></i> Reservas</a><br><br>
                                    <?php
                                }
                                ?>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>


            <div id="result"></div>
        </div>

    </body>
</html>
