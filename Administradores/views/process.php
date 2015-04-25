<?php

require_once '../../Usuarios/Model/model.php';
$model = new model();
$op = $_GET["c"];
if ($op == 1) {


    $cedula = $_POST["cedula"];
    $model->Registrar_Administrador($cedula);
}

