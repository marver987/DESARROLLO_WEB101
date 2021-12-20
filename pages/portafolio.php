<?php
require_once('../components/public_head.php');
require_once('../components/public_top_menu.php');
?>

<!-- INICIO PORTAFOLIO -->

<div class="item_portafolio cols_2_1">
    <div>
        <img class="imagen_portafolio" src="<?= APP_URL ?>assets/img/Screenshot.jpg" alt="Titulo imagen">
    </div>
    <div class="descripcion_proyecto">
        <div>
            <h1>Titulo del Proyecto</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo magni odit, unde corporis eligendi adipisci libero labore reiciendis nostrum temporibus. Sunt magni cupiditate, veniam exercitationem in alias sequi recusandae pariatur!
            </p>
        </div>
    </div>
</div>
<div class="item_portafolio cols_1_2 bg_negro">
    <div class="descripcion_proyecto">
        <div>
            <h1>Titulo del Proyecto</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo magni odit, unde corporis eligendi
                adipisci libero labore reiciendis nostrum temporibus. Sunt magni cupiditate, veniam exercitationem in
                alias sequi recusandae pariatur!
            </p>
        </div>
    </div>
    <div>
        <img class="imagen_portafolio" src="<?= APP_URL ?>assets/img/Screenshot.jpg" alt="Titulo imagen">
    </div>
</div>
<div class="item_portafolio cols_2_1">
    <div>
        <img class="imagen_portafolio" src="<?= APP_URL ?>assets/img/Screenshot.jpg" alt="Titulo imagen">
    </div>
    <div class="descripcion_proyecto">
        <div>
            <h1>Titulo del Proyecto</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo magni odit, unde corporis eligendi
                adipisci libero labore reiciendis nostrum temporibus. Sunt magni cupiditate, veniam exercitationem in
                alias sequi recusandae pariatur!
            </p>
        </div>
    </div>
</div>

<!-- FIN PORTAFOLIO -->
<?php
require_once('../components/public_footer.php');
?>