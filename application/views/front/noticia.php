<?
include(dirname(__FILE__)."/common/header.php");
include(dirname(__FILE__)."/common/nav.php");
?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Prensa
                    <small>Verellen Hnos</small>
                </h1>
                <? include(dirname(__FILE__)."/common/breadcrums.php") ?>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12">
                <P>
                    <h3><?= $this->prensa_model->name?></h3>
                    <br>
                    <small><?= $this->prensa_model->publisher?></small>
                </p>
                <p>
                    <img class="img-responsive" src="<?= $this->prensa_model->main_image?>">
                </p>
            </div>
        </div>
        <!-- /.row -->

        <hr>

<? include(dirname(__FILE__)."/common/footer.php"); ?>