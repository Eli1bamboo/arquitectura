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

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contacto
                </h1>
                <? include(dirname(__FILE__)."/common/breadcrums.php"); ?>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row" id="contact-container">
            <div class="col-xs-12 col-sm-8">
                <h3>Escribanos:</h3>
                <form id="contact-form" class="ajax_form" action="./home/validate_contact_form/contact" method="post" enctype="multipart/form-data">
                <fieldset>
                    <?
                    $this->admin_forms->label_in_input = false;
                    foreach($page_fields['contact'] as $field => $attr)
                    {

                            echo '<div class="form_field contact" id="'.$field.'_box">';
                            echo $this->admin_forms->input_block($field,$attr);
                            echo '<div class="clearfix"></div>';
                            echo '<div id="contact_error_'.$field.'" class="contact_msg_error" style="display:none; color: #dd2222; margin:10px"></div>';
                            echo '<div class="clearfix"></div>';
                            echo '</div>';
                    }?>
                    <div class="col-md-12">
                        <div class="pull-right">
                            <input name="submit" type="submit" class="btn btn-primary" value="Enviar" />
                        </div>
                    </div>
                </fieldset>
                </form>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="fb-page" data-href="https://www.facebook.com/Verellenhnos" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/Verellenhnos"><a href="https://www.facebook.com/Verellenhnos">Verellen Hnos</a></blockquote></div></div>
            </div>
        </div>
        <!-- /.row -->

        <hr>

<? include(dirname(__FILE__)."/common/footer.php"); ?>