<?
include(dirname(__FILE__)."/common/header.php");
include(dirname(__FILE__)."/common/nav.php");
?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Trabajamos
                    <small>con primeras marcas</small>
                </h1>
                <? include(dirname(__FILE__)."/common/breadcrums.php") ?>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <?
                if(is_array($marcas)){
                    foreach($marcas as $marca){
            ?>
                        <div class="col-md-4 img-portfolio">
                            <a href="<?= $marca->marca_url?>">
                                <img class="img-responsive img-hover" src="<?= $marca->main_image?>" alt="<?= $marca->name?>">
                            </a>
                            <h3>
                                <a href="<?= $marca->marca_url?>">"<?= $marca->name?>"</a>
                            </h3>
                        </div>
            <?
                    }
                }
            ?>

        </div>
        <!-- /.row -->

        <hr>

<? include(dirname(__FILE__)."/common/footer.php") ?>