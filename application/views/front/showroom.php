<?
include(dirname(__FILE__)."/common/header.php");
include(dirname(__FILE__)."/common/nav.php");
?>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Showroom
                    <small>CAPILLA DEL SEÑOR</small>
                </h1>
                <? include(dirname(__FILE__)."/common/breadcrums.php"); ?>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                <!-- Embedded Google Map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2143.076687683778!2d-59.05606269999998!3d-34.3906409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bb7ee0500fe25d%3A0x1486de0f7034bab6!2sRN8%2C+Buenos+Aires!5e1!3m2!1ses!2sar!4v1435168327462" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Detalles de Contacto</h3>
                <p>
                    Km 70.300<br>RN 8, Buenos Aires, Argentina<br>
                    <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Ver Instrucciones para llegar</button>
                    <!-- Modal -->
                    <div id="myModal" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Instrucciones para llegar</h4>
                          </div>
                          <div class="modal-body">
                            <p>
                                <img src="<?= base_url(); ?>assets_fe/images/showroom/mapa.gif" class="img-responsive" />
                            </p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                          </div>
                        </div>

                      </div>
                    </div>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">Tel</abbr>: (02323) 471637</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">Email</abbr>: <a href="mailto:info@verellen.com">info@verellen.com</a>
                </p>
                <p>
                    <i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>: Lunes a Viernes:<br>de 8:00 HS a 12:00 HS y 14:00 HS a 18:00 HS
                </p>
                <p>
                    <i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>: Sábados y Domingos: 1/11 al 31/3<br>de 10:00 HS a 13:00 HS y 16:00 HS a 19:00 HS
                </p>
                <p>
                    <i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>: Sábados y Domingos: 1/4 al 31/10<br>de 10:00 HS a 13:00 HS y 15:00 HS a 18:00 HS
                </p>
                <p>
                    <i class="fa fa-calendar"></i> 
                    EL SHOWROOM PERMANECERÁ CERRADO EL DÍA DE LA MADRE/PADRE Y LOS FERIADOS INAMOVIBLES O TRASLADABLES <a href="http://servicios.lanacion.com.ar/feriados/2015" target="_blank">DETALLADOS</a>.
                </p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="<?= $this->configuration_model->url_facebook?>"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <hr>
<? include(dirname(__FILE__)."/common/footer.php"); ?>