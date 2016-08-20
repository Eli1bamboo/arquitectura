
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-6">
                    <h3>Verellen Arquitectura</h3>
                    <ul>
                      <li>
                        Dirección: <?= $this->configuration_model->address?>
                      </li>
                      <li>
                        Tel: <?= $this->configuration_model->telephone?>
                      </li>
                      <li>
                        Email: <?= $this->configuration_model->email?>
                      </li> 
                      <li>
                        <p>
                          <a href="#" data-toggle="modal" data-target="#afipModal">
                            <img src="<?= base_url()?>assets_fe/images/afip.jpg" width="30px"/>
                          </a>
                        <!-- Modal -->
                          <div id="afipModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                            <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Data fiscal AFIP</h4>
                                </div>
                                <div class="modal-body">
                                  <img src="<?= base_url(); ?>assets_fe/images/afip.jpg" class="img-responsive" style="margin: 0 auto;"/>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                </div>
                              </div>

                            </div>
                          </div>
                        </p>
                      </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <h3>Verellen Showroom</h3>
                    <ul>
                      <li>
                        Dirección: Km 70.300 RN 8, Buenos Aires, Argentina
                      </li>
                      <li>
                        Tel: (02323) 471637
                      </li>
                      <li>
                        Email: info@verellen.com
                      </li> 
                    </ul>
                </div>
                <div class="col-lg-12">
                  <p>Copyright &copy; <a href="http://www.eliasturrin.com.ar">Elias Dev. 2015</a></p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?= base_url(); ?>assets_fe/js/jquery.js"></script>
    <script src="<?= base_url(); ?>assets_common/js/jquery.form.js"></script>
    <script>
      $('#contact-form').ajaxForm({
      // dataType identifies the expected content type of the server response
        dataType:  'json',
        // success identifies the function to invoke when the server response
        // has been received
        success:   validate_ajax_form
      });

      function validate_ajax_form(data) {

        $('.contact_msg_error').fadeOut();

        if(!data.valid)
        {
          $.each(data.errors, function(key, value) {

            if(value)
              $('#contact_error_' + key ).html( value ).fadeIn();
          });
        }
        else
        {
          $('#contact-container').hide().html('<div class="alert alert-success">Gracias por contactarte con Nosotros!</div>').fadeIn();
        }
      };
    </script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url(); ?>assets_fe/js/bootstrap.min.js"></script>

</body>

</html>