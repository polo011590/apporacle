<html>
	<head>
		<title>
			Conexion PHP - ORACLE
		</title>
	</head>
	<body>
            <div>
		<form action="ingreso.php?c=1" method="POST">
                        <label>cedula</label>
			<input type="int" name="cedula" size="40"><br>
                        <label>primer nombre</label>
                        <input type="text" name="pn1" size="40"><br>
                        <label>segundo nombre</label>
                        <input type="text" name="pn2" size="40"><br>
                        <label>primer apellido</label>
                        <input type="text" name="pa1" size="40"><br>
                        <label>segundo apellido</label>
                        <input type="text" name="pa2" size="40"><br>
                        <label for="date1">fecha</label>
                        <input type="date" name="fecha"  placeholder="2005-12-30" required="true" /><br>
                        <label>numer hijos</label>
                        <input type="number" name="hijos" size="40"><br>
                        <label>sexo</label>
                        <input type="text" name="sexo" size="40" placeholder="m/f"><br>
			<input type="submit" value="Enviar">
		</form>
                </div>
		<br><br><br>		
		
		<a href="consulta.php">CONSULTA USUARIOS 1</a>
                <a href="consulta1.php">CONSULTA USUARIOS 2</a>
                <h1> prueba</h1>
                 <div>
		<form action="ingreso.php?c=2" method="POST">
                        <label>cedula</label>
                        <input type="number" name="cedula" size="40"><br>
                        <label> nombre</label>
                        <input type="text" name="nombre" size="40"><br>
                        <label>apellido</label>
                        <input type="text" name="apellido" size="40"><br>
                        <label>correo</label>
                        <input type="text" name="correo" size="40"><br>
                         <label>fecha</label>
                        <input type="text" name="fecha" size="40"><br>
                        <label>telefono</label>
                        <input type="number" name="telefono" size="40"><br>
                        <label >celular</label>
                        <input type="number" name="celular"  /><br>
                        <label>direccion</label>
                        <input type="text" name="direccion" size="40"><br>
                        <label>profesion</label>
                        <input type="text" name="profesion" size="40"><br>
                        <label>sexo</label>
                        <input type="text" name="sexo" size="40" ><br>
			<input type="submit" value="Enviar">
		</form>
                </div>
		
	</body>
</html>