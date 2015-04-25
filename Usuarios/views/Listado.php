 <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Listado de Usuarios</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
    </head>
    <body>
        
        


        <div style="width: 90%; margin: 0px auto; margin-top: 30px;">
            <?php
            require_once '../Model/model.php';
            $model = new model();
            require_once '../../config.php';
            $puente = new config();
            $conn = $puente->Conectar_BD();
            $query = oci_parse($conn, 'SELECT * FROM usuarios');
            if (!$query) {
                $e = oci_error($conn);
                trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
            }  ?>
            
            <table class="table table-striped" style="border: solid 2px #003bb3" >
                <thead>
                    <tr>
                        <th>Numeros</th>
                        <th>Cedula</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Borar</th>


                    </tr>
                </thead>
                <tbody>
                    <?php
                    oci_execute($query, OCI_DEFAULT);
                    echo oci_num_rows($query);
                    $c = 0;
                    while (($row = oci_fetch_array($query, OCI_BOTH)) != false) {
                        $c = $c + 1;
                        ?>
                        <tr>
                            <td><?php echo $c; ?></td>
                            <td><?php echo $row["0"]; ?></td>
                            <td><?php echo ociresult($query, "NOMBRES"); ?></td>
                            <td><?php echo ociresult($query, "APELLIDOS"); ?></td>
                             
                            <td class="span1">
                                <a class="btn btn-danger btn-mini" href="process.php?c=2&eli=<?php echo $row["0"];  ?> ">Borrar</a>
                            </td>

                        </tr>
                    <?php
                    }
                 echo oci_num_rows($query);
                    OCICommit($conn);
                    OCILogoff($conn);
                    oci_free_statement($query);
                    ?>
                </tbody>
            </table>
            
            
            <button class="btn btn-success"><a href="Registro.php">Atr&aacute;s</a></button>
        </div>

    </body>
</html>