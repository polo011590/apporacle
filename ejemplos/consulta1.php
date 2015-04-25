<?php
	include ("conexion.php");
	
	$conn = oci_connect($user, $pass, $db);	
	if (!$conn){
		echo "Conexion es invalida" . var_dump ( OCIError() );
		die();
	}
 //Si el campo "username" está vacío
if (empty($_POST['cod'])) {
  echo "ingrese un codigo a buscar"; 
}  else {
$var1 = $_POST["cod"];        
$stid = oci_parse($conn, 'SELECT ejemplo(:dato1) AS mfrc FROM dual');
OCIBindByName($stid, ":dato1", $var1);
oci_execute($stid);

echo "<table border='1'>\n";
while (($fila = oci_fetch_array($stid, OCI_ASSOC))) {
    echo "<tr>\n";
    $rc = $fila['MFRC'];
    oci_execute($rc);  // el valor de la columna devuelta por la consulta es un ref cursor
    while (($fila_rc = oci_fetch_array($rc, OCI_ASSOC))) {   
        echo "    <td>" . $fila_rc['NM1_CLIENTE'] . "</td>\n";
        echo "    <td>" . $fila_rc['NM2_CLIENTE'] . "</td>\n";
    }
    oci_free_statement($rc);
    echo "</tr>\n";
}
echo "</table>\n";

oci_free_statement($stid);
oci_close($conn);
}
?>

<html>
	<head>
		<title>
			TUTORIAL
		</title>
	</head>
	<body>
            <form action="consulta1.php" method="POST">
			<input type="text" name="cod" size="40" value="ingrese cod"><br>
			<input type="submit" value="buscar">
           </form>   
            <a href="index.php">Menu</a>
		<br><br><br>		
		
	</body>
</html>