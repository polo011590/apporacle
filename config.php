<?php

class config{
    /* public $servidor = "mysql2.000webhost.com";
      public $bd = "a5583291_sport";
      public $user = "a5583291_sport";
      public $pass = "sport123"; */

    public $user = 'system';
    public $pass = '123';
    public $db = 'xe';

    public function __construct() {
        $this->Conectar_BD();
    }

    public function Conectar_BD() {

        $conexion=OCILogon($this->user, $this->pass, $this->db);

        if (!$conexion) {
            echo "Conexion es invalida" . var_dump(OCIError());
            die();
        }  else {
        }
        return $conexion; 
}
 


        }