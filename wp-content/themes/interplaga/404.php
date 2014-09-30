<?php get_header(); ?>
<section class="copy">
  <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 nopadding"><!-- Cols -->
    <div class="blockContainerLeft"><!-- Bloque Contenedor left -->
      <div class="blockBuscador"><!-- Bloque Buscador -->
        <?php get_search_form(); ?>
      </div><!-- /Bloque Buscador -->
      <div class="blockDestacadoLeft"><!-- Bloque Destacado -->
        <p><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("frase-destacada") ) : ?><?php endif; ?></p>
      </div><!-- /Bloque Destacado -->
      <div class="blockImageLeft"><!-- Bloque Imágen Left -->
          <img src="<?php echo home_url(); ?>/wp-content/uploads/2014/08/extintores-bellido-404.jpg" alt="Material contra incendios - Extintores Bellido" title="Material contra incendios - Extintores Bellido">
      </div><!-- /Bloque Imágen Left -->
    </div><!-- /Bloque Contenedor Left -->
  </div><!-- /Cols -->
  <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 nopadding"><!-- Cols -->
    <div class="blockBodyContent"><!-- Bloque contenedor -->
      <div class="col-xs-6 col-sm-6 col-md-9 col-lg-9 nopadding"><!-- Cols -->
        <div class="blockBreadcrumbs"><!-- Bloque Breadcrumbs -->
          <?php if(function_exists('jBreadCrumbAink')) { echo jBreadCrumbAink(); } ?>
        </div><!-- /Bloque Breadcrumbs -->
      </div><!-- /Cols -->
      <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 nopadding"><!-- Cols -->
        <div class="blockRedes alignRight"><!-- /Bloque Redes -->
          <?php if( function_exists('ADDTOANY_SHARE_SAVE_KIT') ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
        </div><!-- /Bloque Redes -->
      </div><!-- /Cols -->
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopadding"><!-- Cols -->
        <div class="content"><!-- Content -->
          <hr><!-- Linea separadora -->
          <h2><?php printf( __( 'Resultados de la busqueda: %s', 'Extintores Bellido' ), '' . get_search_query() . '' ); ?></h2>
          <div class="blockBody"><!-- Bloque Copy -->
            <div class="contentBodyfull"><!-- Body Copy -->
              <p>La página solicitada puede no estar disponible, pudo haber cambiado de dirección (URL) o no existir.</p>
            <p>Disculpenos por las molestias.</p>
            <p>Con frecuencia es debido a algún error al escribir la dirección de la página (URL). Compruebela de nuevo para ver si es correcta</p>
            <p>Usted puede:</p>
            <ul>
                <li>Ir a nuestra <a href="<?php echo home_url(); ?>">página de inicio</a></li>
                <li>Utilizar las opciones del menú principal para ir a otra página.</li>
            </ul>
            </div><!-- /Body Copy -->
          </div><!-- /Bloque Copy -->
          <div class="imgContainer"><!-- Bloque Imagen -->
             <hr>
              <span class="lineHr"></span>
              <hr>
          </div><!-- /Bloque Imagen -->
        </div><!--/ Content -->
      </div><!-- /Cols -->
    </div><!-- /Bloque contenedor -->
  </div><!-- /Cols -->
</section>
<?php get_footer(); ?>