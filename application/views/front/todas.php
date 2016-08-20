<?
include(dirname(__FILE__)."/common/header.php");
include(dirname(__FILE__)."/common/nav.php");
?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Obras
                    <small>REALIZADAS</small>
                </h1>
                <? include(dirname(__FILE__)."/common/breadcrums.php"); ?>
            </div>
        </div>
        <!-- /.row -->

        <!-- Project One -->
        <div class="row">
            <div class="col-md-7">
                <a href="<?= base_url(); ?>portfolio/anvers">
                    <img class="img-responsive img-hover" src="<?= base_url(); ?>assets_fe/images/portfolio/todas/anvers.jpg" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Viviendas</h3>
                <h4>ANVERS</h4>
                <p>
                    Amplias galerías, doble pared de mampostería tradicional con molduras en aberturas y cargas en mojinetes, logrando 30 cm de espesor en paredes, como la tradicional casa de campo.
                </p>
                <a class="btn btn-primary" href="<?= base_url(); ?>portfolio/anvers">Ver Obras</i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Two -->
        <div class="row">
            <div class="col-md-7">
                <a href="<?= base_url(); ?>portfolio/campo">
                    <img class="img-responsive img-hover" src="<?= base_url(); ?>assets_fe/images/portfolio/todas/campo.jpg" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Viviendas</h3>
                <h4>CAMPO</h4>
                <p>
                    Detalle de galería apaisadas, apoyados en postes rústicos de madera dura, fachadas exteriores con cargas en mojinetes interiores en mampostería logrando excelente aislación.
                </p>
                <a class="btn btn-primary" href="<?= base_url(); ?>portfolio/campo">Ver Obras</i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Three -->
        <div class="row">
            <div class="col-md-7">
                <a href="<?= base_url(); ?>portfolio/encargado">
                    <img class="img-responsive img-hover" src="<?= base_url(); ?>assets_fe/images/portfolio/todas/encargado.jpg" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Viviendas</h3>
                <h4>ENCARGADO</h4>
                <p>
                    Pensado para brindar los espacios necesarios e indispensables para la función a cumplir. La opción de vivienda con galpón adosado es ideal para unificar áreas de servicios.
                </p>
                <a class="btn btn-primary" href="<?= base_url(); ?>portfolio/encargado">Ver Obras</i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Four -->
        <div class="row">

            <div class="col-md-7">
                <a href="<?= base_url(); ?>portfolio/galpones">
                    <img class="img-responsive img-hover" src="<?= base_url(); ?>assets_fe/images/portfolio/todas/galpones.jpg" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>GALPONES</h3>
                <h4></h4>
                <p>
                    Techos a 1 o 2 aguas con amplias galerías, o la opción de boxes internos en galpón con pasillo central. En ambos casos opción de puertas de madera dobles o simples.
                </p>
                <a class="btn btn-primary" href="<?= base_url(); ?>portfolio/galpones">Ver Obras</i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Five -->
        <div class="row">
            <div class="col-md-7">
                <a href="<?= base_url(); ?>portfolio/boxes">
                    <img class="img-responsive img-hover" src="<?= base_url(); ?>assets_fe/images/portfolio/todas/boxes.jpg" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>BOXES</h3>
                <h4></h4>
                <p>
                    Boxes y boxes internos para galpón con pasillo central.
                </p>
                <a class="btn btn-primary" href="<?= base_url(); ?>portfolio/boxes">Ver Obras</i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>
        
<? include(dirname(__FILE__)."/common/footer.php"); ?>