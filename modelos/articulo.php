<?php
require_once('modelo.php');

//modelo articulo
class Articulo extends Modelo
{
    protected $id;
    private $nombre_tabla;

    /*
    CONSTRUCTOR
    Descripcion: Conecta a la BD
    */
    public function __construct()
    {
        parent::__construct(); //conexion a la BD por clase padre
        $this->id = 'art_id';
        $this->nombre_tabla = 'articulo';
    }

    //Obtener todos los registros de la tabla categoria
    public function get_all()
    {
        $consulta = "SELECT * FROM $this->nombre_tabla";
        $resultado = $this->db->query($consulta); //realizando la consulta a la BD
        if (!$resultado) {
            echo "Error al listar los resultados de la tabla";
        } else {
            return $resultado->fetch_all(MYSQLI_ASSOC); // devuelve array asociativo: matriz : array bidimensional
            $resultado->close();
            $this->db->close();
        }
    }

    //Obtener 1 registro de tabla categoria cuyo ID se envia por parametro
    public function get($id)
    {
        $consulta = "SELECT * FROM $this->nombre_tabla where $this->id = " . $id;
        $resultado = $this->db->query($consulta); //realizando la consulta a la BD
        if (!$resultado) {
            echo "Error al obtener el elemento con ID";
        } else {
            return $resultado->fetch_assoc(); //array asociativo : una tupla o un registro
            $resultado->close();
            $this->db->close();
        }
    }

    //Guardar 1 registro en BD
    //$data['cat_nombre'] = "ALGORITMOS"//input
    //$data['cat_otro'] = "algo"//input
    public function store($data) //array
    {
        $consulta = "INSERT INTO $this->nombre_tabla (cat_nombre) VALUES ('" . $data['cat_nombre'] . "');";
        $resultado = $this->db->query($consulta); //realizando la consulta a la BD
        if (!$resultado) {
            echo "Error al registrar datos";
        } else {
            return $resultado;
            $resultado->close();
            $this->db->close();
        }
    }

    //Actualizar 1 registro en BD
    public function update($id, $data) //array
    {
        $consulta = "UPDATE $this->nombre_tabla SET cat_nombre = '" . $data['cat_nombre'] . "' WHERE $this->id = " . $id;
        $resultado = $this->db->query($consulta); //realizando la consulta a la BD
        if (!$resultado) {
            echo "Error al actualizar datos";
        } else {
            return $resultado;
            $resultado->close();
            $this->db->close();
        }
    }

    //borrar 1 registro en BD
    public function delete($id) //array
    {
        $consulta = "DELETE FROM $this->nombre_tabla WHERE $this->id = " . $id;
        $resultado = $this->db->query($consulta); //realizando la consulta a la BD
        if (!$resultado) {
            echo "Error al eliminar datos";
        } else {
            return $resultado;
            $resultado->close();
            $this->db->close();
        }
    }
}
