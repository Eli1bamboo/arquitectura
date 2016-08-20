<?
include(dirname(__FILE__)."/common/header.php");
include(dirname(__FILE__)."/common/nav.php");
?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
        <?
            if(is_array($slider)){
                $i = 0;
                foreach($slider as $slide){
                    if ($i ==0) {
                        ?>
                            <li data-target="#myCarousel" data-slide-to="<?= $i?>" class="active"></li>
                        <?
                    } else{
                        ?>
                            <li data-target="#myCarousel" data-slide-to="<?= $i?>"></li>
                        <?
                    }
                    $i++;
                }
            }
        ?>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <?
                if(is_array($slider)){
                    $i = 0;
                    foreach($slider as $slide){
                        if ($i == 0) {
                            ?>
                                <div class="item active">
                            <?
                        } else {
                            ?>
                                <div class="item">
                            <?
                        }
                        ?>
                            <div class="fill" style="background-image:url('<?= $slide->main_image?>');"></div>
                                <div class="carousel-caption">
                                    <h2><?= $slide->title?></h2>
                                    <p><?= $slide->description?></p>
                                    <?
                                        if ($slider->slide_url == false) {
                                            
                                        } else{
                                            ?>
                                                <a href="<?= $slide->slide_url?>">Ver Más</a>
                                            <?
                                        }
                                    ?>
                                </div>
                            </div>
                        <?
                        $i++;
                    }
                }
            ?>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-8">
                <h1 class="page-header">
                    Verellen Hnos. historia
                </h1>
                <p>
                    Continuando con la trayectoria y el estilo que marco nuestro padre, Santiago Verellen, que recién llegado de Bélgica a nuestro país hace más de 5 décadas, se dedicó primero, comercializando y luego fundando su propia empresa (a cubrir con un sistema industrializado de construcción en hormigón vibrado premoldeado), la demanda generada en aquella época por el sector agrícolo-ganadero. Yendo campo por campo, ofrecía las virtudes del sistema para ser empleado en galpones, casa de encargado, tinglados de ordeñe, boxes, etc...
                    <br>
                    <br>
                    <div id="demo" class="collapse out">
                        Con el correr de los años, traslada sus oficinas a Capital Federal, donde hoy sus hijos dirigimos Verellen Hnos. Arquitectura ® (marca registrada), con la misma convicción de trabajo y empeño.
                        <br>
                        <br>
                        Hoy, nuestra empresa, se especializa en diseño y ejecución de construcciones sistema llave en mano, en cualquier punto de país. Seguimos con los productos de construcción industrializada totalmente aggiornados y con el fiel Estilo Campo, pero lo más novedoso, es el sistema de casas Estilo ANVERS (nombre de la ciudad belga y de la empresa tabacalera que fundó nuestro bisabuelo, Teófilo Verellen, en 1868 y que aún hoy sigue fabricando exclusivos cigarros), totalmente en construcción tradicional con triple pared (30 cm. de espesor), orientado al público que busca instalar su casa en una chacra de fin de semana, en un campo o su vivienda permanente dentro de cualquier planta urbana, a un costo accesible y en plazos muy cortos. Contamos con un equipo de cinco diseñadores, que se reúnen previamente con el potencial cliente para escuchar sus necesidades y entregar en unos días su anteproyecto personalizado y único.
                        <br>
                        <br>
                        Nuestra firma, también es considerada líder en la ejecución de piletas de natación en hormigón armado tradicional.
                        <br>
                        Desde el año 1996, en nuestro Showroom emplazado en un predio de (6) seis hectáreas en el Pdo. de Capilla del Señor, se pueden visitar desde una vivienda para encargado, boxes, galpones hasta una casa principal de 200 metros de superficie totalmente ambientada por nuestro diseñador <a href="http://www.matiasverellen.com.ar/" target="_blank">Lic. Matías Verellen</a>.
                        <br>
                        <br>
                        Ofrecemos además nuestro departamento de paisajismo, dirigido por profesionales que colaboran, junto a nosotros como la <a href="https://www.facebook.com/paisajismo.marianaalghisi" target="_blank">paisajista Mariana Alghisi</a>, el objetivo es poder entregar casas llave en mano y con un diseño paisajístico incorporado, o contratar los servicios de la profesional en forma independiente".
                        <br>
                        <br>
                        Gracias por elegirnos.
                        <br>
                        <br>
                        <img src="<?php echo base_url(); ?>assets_fe/images/home/firmas.gif" class="img-responsive">
                        <br>
                        Arq. Pablo Verellen &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lic. Mauricio Verellen
                        <br>
                        <br>
                    </div>
                    <a class="btn btn-info" data-toggle="collapse" data-target="#demo">Leer más</a>
                </p>
            </div>
            <div class="col-lg-4">
                <h1 class="page-header">Últimas novedades</h1>
                <div class="fb-page" data-href="https://www.facebook.com/Verellenhnos" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/Verellenhnos"><a href="https://www.facebook.com/Verellenhnos">Verellen Hnos</a></blockquote></div></div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Algunas de nuestras obras realizadas</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="<?= base_url()?>portfolio/anvers">
                    <img class="img-responsive img-portfolio img-hover" src="<?= base_url(); ?>assets_fe/images/home/obra1.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="<?= base_url()?>portfolio/campo">
                    <img class="img-responsive img-portfolio img-hover" src="<?= base_url(); ?>assets_fe/images/home/obra2.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="<?= base_url()?>portfolio/galpones">
                    <img class="img-responsive img-portfolio img-hover" src="<?= base_url(); ?>assets_fe/images/home/obra3.jpg" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

<? include(dirname(__FILE__)."/common/footer.php"); ?>