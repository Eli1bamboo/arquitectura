    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" href="http://www.verellen.com/">
                    <img src="<?= base_url(); ?>assets_fe/images/logo.png" class="img-responsive">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="<?= base_url()?>home">Inicio</a>
                    </li>
                    <li class="">
                        <a href="<?= base_url()?>showroom">Showroom</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Obras Realizadas<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?= base_url()?>todas">Ver Todas</a>
                            </li>
                            <li>
                                <a href="<?= base_url()?>portfolio/anvers">Viviendas Anvers</a>
                            </li>
                            <li>
                                <a href="<?= base_url()?>portfolio/campo">Viviendas Campo</a>
                            </li>
                            <li>
                                <a href="<?= base_url()?>portfolio/encargado">Viviendas Encargado</a>
                            </li>
                            <li>
                                <a href="<?= base_url()?>portfolio/galpones">Galpones</a>
                            </li>
                            <li>
                                <a href="<?= base_url()?>portfolio/boxes">Boxes</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="<?= base_url()?>marcas">Primeras Marcas</a>
                    </li>
                    <li class="">
                        <a href="<?= base_url()?>prensa">Prensa</a>
                    </li>
                    <li class="">
                        <a href="<?= base_url()?>novedades">Novedades</a>
                    </li>
                    <li class="">
                        <a href="<?= base_url()?>contacto">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>