<?php
require_once('../modelos/articulo.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $op = $_POST['operacion'];
    switch ($op) {
        case "store":
            //XSS Cross Site Scriptitng
            echo "<h1>Ejecutando instrucciones de STORE</h1>";
            $data['art_titulo'] = htmlspecialchars($_POST['art_titulo']);

            // $articulo = new Articulo();
            // $articulo->store($data);

            break;
        case "update":
            echo "<h1>Ejecutando instrucciones de UPDATE</h1>";
            break;
        case "delete":
            echo "<h1>Ejecutando instrucciones de DELETE</h1>";
            break;
        default:
            //header("HTTP/1.0 404 Not Found");
            echo "No existe esta operacion";
    }
} else {
    //header("HTTP/1.0 403 Forbidden");
    echo "Esta operacion no esta permitida";
}
