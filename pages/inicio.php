<?php
require_once('../components/public_head.php');
require_once('../components/public_top_menu.php');
?>
<!-- INICIO DE PRINCIPAL -->
<div class="banner">
    <div>
        <h1>
            Web designer
        </h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti delectus, corporis facilis ipsam quod mollitia
            architecto vitae quaerat voluptatem nemo facere deserunt veritatis dolores accusantium quo ullam rerum sit
            similique!
        </p>
    </div>
    <div></div>
    <div>
        <h1 class="heading-developer">
            &lt;Web developer&gt;
            <!-- muestra en la pagina: <Web developer> -->
        </h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti delectus, corporis facilis ipsam quod mollitia
            architecto vitae quaerat voluptatem nemo facere deserunt veritatis dolores accusantium quo ullam rerum sit
            similique!
        </p>
    </div>
</div>
<div class="contenedor_proyectos">
    <h1>
        <i class="fas fa-hammer"></i>
        Mis ultimos trabajos
    </h1>
    <div class="ultimos_trabajos">
        <div class="work_item">
            <img src="<?= APP_URL ?>assets/img/web_ejemplo.jpg" alt="Texto alternativo">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro magnam, pariatur at consequatur, odio qui est officia consectetur repudiandae dignissimos harum aspernatur, unde minima rerum obcaecati eum architecto quod? Officia?
            </p>
            <a class="btn btn_oscuro" href="#">
                <i class="fas fa-eye"></i>
                ver proyecto
            </a>
        </div>
        <div class="work_item">
            <img src="<?= APP_URL ?>assets/img/web_ejemplo.jpg" alt="Texto alternativo">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro magnam, pariatur at consequatur, odio qui est
                officia consectetur repudiandae dignissimos harum aspernatur, unde minima rerum obcaecati eum architecto quod?
                Officia?
            </p>
            <a class="btn btn_oscuro" href="#">
                <i class="fas fa-eye"></i>
                ver proyecto
            </a>
        </div>
        <div class="work_item">
            <img src="<?= APP_URL ?>assets/img/web_ejemplo.jpg" alt="Texto alternativo">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro magnam, pariatur at consequatur, odio qui est
                officia consectetur repudiandae dignissimos harum aspernatur, unde minima rerum obcaecati eum architecto quod?
                Officia?
            </p>
            <a class="btn btn_oscuro" href="#">
                <i class="fas fa-eye"></i>
                ver proyecto
            </a>
        </div>
    </div>
</div>
<!-- FIN PRINCIPAL -->

<?php
require_once('../components/public_footer.php');
?>