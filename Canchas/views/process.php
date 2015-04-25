<?php
require_once '../../Usuarios/Model/model.php';
$model = new model();
$op = $_GET["c"];
if ($op == 1) {
    $id=$model->contarusuarios()+1;
    $nombre = $_POST["nombres"];
    $correo = $_POST["email"];
    $direccion = $_POST["direccion"];
    $estado='0';
    $model->Registrar_Cancha($id,$nombre, $direccion, $correo,$estado);
    $id="";
}

?>