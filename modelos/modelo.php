<?php
require_once('config.php'); // require es para que el php muestre el error en caso de que exista

class Modelo
{
    protected $db;

    public function __construct()
    {
        $this->db = mysqli_connect(DB_HOST, DB_USUARIO, DB_PWD, DB_NOMBRE, DB_PUERTO);
        if ($this->db->connect_errno) {
            echo "Error de conexion a la Base de Datos";
        } else {
            echo "Conexion efectiva con la Base de Datos";
        }
    }
}

//$x = new Modelo();
