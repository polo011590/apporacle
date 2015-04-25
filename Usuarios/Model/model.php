<?php

class model {
    
    function InsertUsu($var1, $var2, $var3, $var4, $var5, $var6, $var7, $var8, $var9, $var10, $var11) {
        require_once '../../config.php';
        $puente = new config();
        $puente->Conectar_BD();
        $conn = $puente->Conectar_BD();
        $query = OCIParse($conn, "BEGIN inseru(:dato1, :dato2,:dato3, :dato4,:dato5,TO_DATE(:dato6,'YYYY-MM-DD'),:dato7, :dato8, :dato9,:dato10,:dato11); END;");
        OCIBindByName($query, ":dato1", $var1);
        OCIBindByName($query, ":dato2", $var2);
        OCIBindByName($query, ":dato3", $var3);
        OCIBindByName($query, ":dato4", $var4);
        OCIBindByName($query, ":dato5", $var5);
        OCIBindByName($query, ":dato6", $var6);
        OCIBindByName($query, ":dato7", $var7);
        OCIBindByName($query, ":dato8", $var8);
        OCIBindByName($query, ":dato9", $var9);
        OCIBindByName($query, ":dato10", $var10);
        OCIBindByName($query, ":dato11", $var11);


        OCIExecute($query, OCI_DEFAULT);
        OCICommit($conn);
        OCILogoff($conn);
        echo '<script>window.location.href="../../index.php";</script>';
    }
    
        function eliminarusuarios($var1) {    
        require_once '../../config.php';
        $puente = new config();
        $puente->Conectar_BD();
        $conn = $puente->Conectar_BD();
        $query = OCIParse($conn, "DELETE from USUARIOS where ID=(:dato1)");
	OCIBindByName($query, ":dato1", $var1);
	OCIExecute($query,OCI_DEFAULT);
	
	OCICommit($conn);
	OCILogoff($conn);
         echo '<script>window.location.href="../views/Listado.php";</script>';
        
    }
    
    
    
    
     function contarusuarios() {
        require_once '../../config.php';
        $puente = new config();
        $puente->Conectar_BD();
        $conn = $puente->Conectar_BD();
        $query = oci_parse($conn, 'SELECT * FROM canchas');
        oci_execute($query, OCI_DEFAULT);
        while (OCIFetch($query)) {}
        $contar=oci_num_rows($query);
        OCICommit($conn);
        $contar=oci_num_rows($query);
        return $contar;
        OCILogoff($conn);
    }
    
    
    

    function validasecio($var1,$var2){
        require_once '../../config.php';
        $puente=new config;
        $puente->Conectar_BD();
        $conn=$puente->Conectar_BD();
        $sql="select ID from usuarios where ID=:dato1 AND CONTRASENA=:dato2";
        $query = OCIParse($conn,$sql);
        oci_bind_by_name($query,":dato1",$var1);
        oci_bind_by_name($query,":dato2",$var2);
        oci_execute($query,OCI_DEFAULT);
        $c=0;
        while (oci_fetch($query)) {
           $c=$c+1;
        }
        return $c;
    }
            
    
    
    function GET_Nombre_usuario($cedula) {
        
        require_once '../../config.php';
        $puente = new config();
        $puente->Conectar_BD();
        $conn = $puente->Conectar_BD();
        $query = oci_parse($conn, "SELECT * FROM usuarios where ID=:dato1");
        OCIBindByName($query, ":dato1", $cedula);
        oci_execute($query);
        while (OCIFetch($query)) {
         echo '<h5 style="color:#fff">Hola,<strong> ' .ociresult($query, "NOMBRES"). '</strong>&nbsp;&nbsp;&nbsp;&nbsp;</h5>';
              
        }
        OCICommit($conn);
        OCILogoff($conn);
    }
    
    
    function Registrar_Cancha($var1,$var2, $var3, $var4,$var5) {
       
       require_once '../../config.php';
        $puente = new config();
        $puente->Conectar_BD();
        $conn = $puente->Conectar_BD();
        $query = OCIParse($conn, "BEGIN insercancha(:dato1, :dato2,:dato3,:dato4,:dato5); END;");
        OCIBindByName($query, ":dato1", $var1);
        OCIBindByName($query, ":dato2", $var2);
        OCIBindByName($query, ":dato3", $var3);
        OCIBindByName($query, ":dato4", $var4);
        OCIBindByName($query, ":dato5", $var5);
        OCIExecute($query, OCI_DEFAULT);
//        echo oci_num_rows($query);
        OCICommit($conn);
        OCILogoff($conn);
        echo 'Cancha Registrada Satisfactoriamente!';
        echo '<script>window.location.href="../../Canchas/views/Registro.php";</script>';
    }
    
      function IS_Administrator($cedula) {
     require_once '../../config.php';
        $puente = new config();
        $puente->Conectar_BD();
        $conn = $puente->Conectar_BD();
        $query = oci_parse($conn, "SELECT CEDULA FROM ADMINISTRADORes where cedula=:dato1");
        OCIBindByName($query, ":dato1", $cedula);
        oci_execute($query);
        $c=0;
        while (oci_fetch($query)) {
           $c=$c+1;
        }
        if ($c==0){
            return FALSE;  
        } 
        return TRUE;
        OCICommit($conn);
        OCILogoff($conn);
      }
      
         function Registrar_Administrador($cedula) {
        require_once '../../config.php';
        $puente = new config();
        $puente->Conectar_BD();
        $conn = $puente->Conectar_BD();
        $query = OCIParse($conn, "BEGIN inseradmin(:dato1); END;");
        OCIBindByName($query, ":dato1", $cedula);
         OCIExecute($query, OCI_DEFAULT);
//        echo oci_num_rows($query);
        OCICommit($conn);
        OCILogoff($conn);
        echo 'Admin registro Exito!';
    }

    function Get_Usuarios() {
         require_once'../../config.php';
        $puente = new config();
        $puente->Conectar_BD();
        $conn = $puente->Conectar_BD();
        $stid = oci_parse($conn, 'select ID,NOMBRES ,APELLIDOS from USUARIOS');
        oci_execute($stid);
     echo '<datalist id="usuarios">';
        while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) {
             echo '<option label="' . $row[1] . ''.$row[2].'" value="' . $row[0] . '">';
        }
        echo '</datalist>';

        oci_free_statement($stid);
        oci_close($conn);
    }

}
