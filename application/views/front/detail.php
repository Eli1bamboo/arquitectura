<?
include(dirname(__FILE__)."/common/header.php");
include(dirname(__FILE__)."/common/nav.php");
?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Viviendas
                    <small><?= $this->portfolio_model->category?></small>
                </h1>
                <? include(dirname(__FILE__)."/common/breadcrums.php") ?>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <?
                            if(is_array($this->portfolio_model->galleries['image_gallery']))
                            {
                                $i = 0;
                                foreach($this->portfolio_model->galleries['image_gallery'] as $image_url)
                                {
                                    if ($i == 0) {
                                        ?>
                                            <li data-target="#carousel-example-generic" data-slide-to="<?= $i?>" class="active"></li>
                                        <?
                                    } else {
                                            ?>
                                                <li data-target="#carousel-example-generic" data-slide-to="<?= $i?>"></li>
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
                            if(is_array($this->portfolio_model->galleries['image_gallery']))
                            {
                                $i = 0;
                                foreach($this->portfolio_model->galleries['image_gallery'] as $image_url)
                                {
                                    if ($i == 0) {
                                        ?>
                                            <div class="item active">
                                                <img class="img-responsive" src="<?= $image_url?>" alt="">
                                            </div>
                                        <?
                                    } else {
                                            ?>
                                                <div class="item">
                                                    <img class="img-responsive" src="<?= $image_url?>" alt="">
                                                </div>
                                            <?
                                    }
                                $i++;
                                }
                            }
                        ?>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>

            <div class="col-md-12">
                <?
                    hola($this->portfolio_model->file_managers);
                ?>
                <h3><?= $this->portfolio_model->name?></h3>
                <p><?= $this->portfolio_model->description?></p>
            </div>

        </div>
        <!-- /.row -->

        <hr>

<? include(dirname(__FILE__)."/common/footer.php"); ?>
