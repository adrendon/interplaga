<footer>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 nopadding"><!-- Cols -->
        <div class="blockPower"><!-- Bloque Power -->
                  <a class="googlePlus" href="#" title="Extintores Bellido">
                    <img src="<?php bloginfo('template_directory'); ?>/img/footer/iconGoogle.jpg" alt="Extintores Bellido" title="Extintores Bellido">
                  </a>
                  <span class="powered">Powered by <a href="#" target="_blank"><span class="txtRed">paginasAmarillas</span></a></span>
            </div><!-- /Bloque Power -->
    </div><!-- /Cols -->
      <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 nopadding"><!-- Cols -->
        <div class="blockBodyContent"><!-- Bloque contenedor -->
          <div class="blokDireccion"><!-- Dirección -->
              <p><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("direccion") ) ; ?><p>
          </div><!-- /Dirección -->
          <div class="blockAvisos"><!-- Avisos-->
              <?php  wp_nav_menu( array('menu' => 'menu-legales' )); ?>
          </div><!-- /Avisos-->
          <div class="Colors"><!-- Colores -->
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div><!-- /Colores -->
        </div><!-- Bloque contenedor -->
      </div><!-- /Cols -->
</footer>
    <!-- </div> --><!-- /Row -->
    </div><!-- /Wrapper -->
  </div><!-- /Container -->
<?php wp_footer();
if(!is_front_page()){ ?>
  <script type="text/javascript">
    window.onload = function() {
       if (typeof(jQuery('.copy')[0]) != "undefined") {
           jQuery('html, body').stop().animate({scrollTop: jQuery('.copy').offset().top}, 1500);
       } else{
           jQuery('html, body').stop().animate({scrollTop: jQuery('.copy').offset().top}, 1500);
       }
        jQuery('.titleCatalogue').prependTo(jQuery('.titleCatalogue').parent());
    };
  </script>
<?php } ?>
  <script>
      jQuery(function(){
        if (window.innerWidth >= 240 && window.innerWidth <= 767) {
          jQuery('.blockBodyContent').eq(0).parent().prependTo(jQuery('.blockContainerLeft').parent().parent());
        }
      })
  </script>
</body>
</html>