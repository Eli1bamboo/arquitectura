<?
include(dirname(__FILE__)."/common/header.php");
include(dirname(__FILE__)."/common/nav.php");
?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?= ucfirst($this->uri->segment(2))?></h1>
                <? include(dirname(__FILE__)."/common/breadcrums.php") ?>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <?
                if(is_array($obras['by_category'][$this->uri->segment(2)])){
                    foreach($obras['by_category'][$this->uri->segment(2)] as $obra){
                        
            ?>
            <div class="col-md-4 img-portfolio">
                <a href="<?= base_url()?>obra/<?= $obra->get_id()?>/<?= urlencode($obra->name)?>">
                    <img class="img-responsive img-hover" src="<?= $obra->main_image?>" alt="">
                </a>
                <h3>
                    <a href="<?= base_url()?>obra/<?= $obra->get_id()?>/<?= urlencode($obra->name)?>">
                        <?= $obra->name?>
                    </a>
                </h3>
            </div>
            <?
                }
            }
            ?>
        </div>
        <!-- /.row -->

        <hr>

<? include(dirname(__FILE__)."/common/footer.php"); ?>