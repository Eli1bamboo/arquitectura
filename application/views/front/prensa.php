<?
include(dirname(__FILE__)."/common/header.php");
include(dirname(__FILE__)."/common/nav.php");
?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Prensa
                    <small>Verellen Hnos</small>
                </h1>
                <? include(dirname(__FILE__)."/common/breadcrums.php"); ?>
            </div>
        </div>
        <!-- /.row -->
        <?
            if(is_array($news)){
                foreach ($news as $new) {
        ?>
                    <!-- News Row -->
                    <div class="row <?= $new->category?>">
                        <div class="col-md-1 text-center">
                            <p> 
                                <?
                                    if($new->category == "video"){
                                ?>
                                        <i class="fa fa-film fa-4x"></i>
                                <? 
                                    }else {
                                ?>    
                                        <i class="fa fa-file-text fa-4x"></i>
                                <?
                                    }
                                ?>
                            </p>
                            <p><?= $new->date_release?></p>
                        </div>
                        <div class="col-md-5">
                            <?
                                if($new->category == "video"){
                            ?>
                                    <iframe width="100%" height="300" src="<?= $new->youtube_url?>" frameborder="0" allowfullscreen></iframe>
                            <? 
                                }else {
                            ?>    
                                    <a href="<?= base_url()?>noticia/<?= $new->get_id()?>/<?= urlencode($new->name)?>">
                                        <img class="img-responsive img-hover" src="<?= $new->mini_image?>" alt="">
                                    </a>
                            <?
                                }
                            ?>
                        </div>
                        <div class="col-md-6">
                            <?
                                if($new->category == "video"){
                            ?>
                                    <h3>
                                        <?= $new->name?>
                                    </h3>
                            <? 
                                }else {
                            ?>    
                                    <h3>
                                        <a href="<?= base_url()?>noticia/<?= $new->get_id()?>/<?= urlencode($new->name)?>">
                                            <?= $new->name?>
                                        </a>
                                    </h3>
                            <?
                                }
                            ?>
                            <p>
                                <?= $new->publisher?>
                            </p>
                            <?
                                if($new->category == "video"){

                                }else {
                            ?>    
                                    <a class="btn btn-primary" href="<?= base_url()?>noticia/<?= $new->get_id()?>/<?= urlencode($new->name)?>">Ver Nota <i class="fa fa-angle-right"></i></a>
                            <?
                                }
                            ?>
                        </div>
                    </div>
                    <!-- /.row -->

                    <hr>
        <?
                }
            }
        ?>

        <!-- Pager -->
        <div class="row">
            <ul class="pager">
                <li class="previous"><a href="#">&larr; Older</a>
                </li>
                <li class="next"><a href="#">Newer &rarr;</a>
                </li>
            </ul>
        </div>
        <!-- /.row -->

        <hr>

<? include(dirname(__FILE__)."/common/footer.php"); ?>