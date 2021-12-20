<?php
require_once('categoria.php');

$cat = new Categoria(); //armamos el objeto 

//armar bien el array data
$data['cat_nombre'] = "Peliculas";

//$cat->store($data);

$categorias = $cat->get_all(); //array asociativo //array bidimensional

//          ejemplo array asociativo
// [0] = ['cat_id' : '1', 'cat_nombre': 'Algoritmos',]
// [1] = ['cat_id' : '2', 'cat_nombre': 'Introduccion a... ',]
// [2] = ['cat_id' : '3', 'cat_nombre': 'Peliculas',]

// foreach($categorias as $item){
//     echo $item['cat_id'];
// }

?>

<table>
    <tr>
        <th>ID</th>
        <th>NOMBRE CATEGORIA</th>
    </tr>
    <?php foreach ($categorias as $item) : ?>
        <tr>
            <td><?php echo $item['cat_id'] ?></td>
            <td><?= $item['cat_nombre'] ?></td>
            <td></td>
        </tr>
    <?php endforeach; ?>
</table>