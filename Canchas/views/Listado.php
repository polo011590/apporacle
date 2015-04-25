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
            if (empty($_GET["V"])){}else{$var1 = $_GET["v"];}
            require_once '../../config.php';
            $puente = new config();
            $conn = $puente->Conectar_BD();
            $query = oci_parse($conn, 'SELECT * FROM canchas ');
//            OCIBindByName($query, ":dato1", $var1);
            if (!$query) {
                $e = oci_error($conn);
                trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
            }
            ?>

            <table class="table table-striped" style="border: solid 2px #003bb3" >
                <thead>
                    <tr>
                        <th>Numeros</th>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Direccion</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    oci_execute($query, OCI_DEFAULT);
                    $c = 0;
                     while (($row = oci_fetch_array($query, OCI_BOTH)) != false) {
                       $c = $c + 1;
                        ?>
                        <tr>
                            <td><?php echo $c; ?></td>
                            <td><?php echo $row["0"] ?></td>
                            <td><?php echo ociresult($query, "NOMBRE"); ?></td>
                            <td><?php echo ociresult($query, "DIRECCION"); ?></td>
                        </tr>
                        <?php
                    }
                    OCICommit($conn);
                    OCILogoff($conn);
                    oci_free_statement($query);
                    ?>
                </tbody>
            </table>

           
        </div>
      
    </body>
</html>