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
                <h1 class="page-header">Novedades
                    <small>Verellen Hnos</small>
                </h1>
                <? include(dirname(__FILE__)."/common/breadcrums.php") ?>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <div class="fb-page" data-href="https://www.facebook.com/Verellenhnos" data-width="500" data-height="800" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/Verellenhnos"><a href="https://www.facebook.com/Verellenhnos">Verellen Hnos</a></blockquote></div></div>
            </div>
        </div>
        <!-- /.row -->

        <hr>

<? include(dirname(__FILE__)."/common/footer.php"); ?>