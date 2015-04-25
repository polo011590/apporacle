<?php
	include ("conexion.php");
	
	$conn = OCILogon($user, $pass, $db);
	
	if (!$conn){
		echo "Conexion es invalida" . var_dump ( OCIError() );
		die();
	}
	
	$var1 = $_POST["user"];
	
	$query = OCIParse($conn, "DELETE from CLIENTE where COD_CLIENTE=(:dato1)");
	OCIBindByName($query, ":dato1", $var1);
	OCIExecute($query,OCI_DEFAULT);
	
	OCICommit($conn);
	OCILogoff($conn);
        
         header('Location:consulta.php');
?>
