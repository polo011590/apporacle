 <?php

require_once '../Model/model.php';
$model = new model();
$op = $_GET["c"];
$eliusuario=$_GET["eli"];
if ($op == 1) {

        $var1 = $_POST["cedula"];
        $var2 = $_POST["contrasena"];
	$var3 = $_POST["nombres"];
        $var4 = $_POST["apellidos"];
	$var5 = $_POST["email"];
        $var6 = $_POST["fecha_nac"];
        $var7 = $_POST["celular"];
        $var8 = $_POST["telefono"];
	$var9 = $_POST["direccion"];
        $var10 =$_POST["profesion"];
        $var11 =$_POST["sexo"];
   
    
    $model->InsertUsu($var1, $var2, $var3, $var4, $var5, $var6, $var7, $var8, $var9, $var10, $var11);

    
}

if ($op==2) {
    $model->eliminarusuarios($eliusuario);
}


?>
