<?php get_header(); ?>
<section class="copy">
  <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 nopadding"><!-- Cols -->
    <div class="blockContainerLeft"><!-- Bloque Contenedor left -->
      <div class="blockBuscador"><!-- Bloque Buscador -->
        <?php get_search_form(); ?>
      </div><!-- /Bloque Buscador -->
      <div class="blockDestacadoLeft"><!-- Bloque Destacado -->
        <?php if($post->ID == 59) :?>
          <?php else: ?>
            <p><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("frase-destacada") ) : ?><?php endif; ?></p>
        <?php endif; ?>
      </div><!-- /Bloque Destacado -->
        <?php if($post->ID == 27 || $post->ID == 29 || $post->ID == 31 || $post->ID == 33 || $post->ID == 35 || $post->ID == 37 || $post->ID == 39 || $post->ID == 41 || $post->ID == 43 || $post->ID == 45 || $post->ID == 47 || $post->ID == 49 || $post->ID == 51 || $post->ID == 53 || $post->ID == 55 || $post->ID == 57):
        ?>
          <nav class="menuCatalogo">
            <?php wp_nav_menu(array('menu' => 'menu-catalogo')); ?>
          </nav>
        <?php endif; ?>
        <?php if($post->ID == 59) :?>
          <article class="mapa"><!-- Mapa-->
            <?php $the_query = new WP_Query('p=243');
                while ($the_query->have_posts()) {
                $the_query->the_post();
                echo '<span class="titleMapa">'.$post->post_title.'</span>'; ?>
                <div class="descriptionMapa"><!-- Texto Mapa-->
                    <?php the_content(); } ?>
                </div><!-- /Texto Mapa-->
                <div class="iframeMapa"><!-- Texto Mapa-->
                  <?php global $post;
                        $thisPost = $post -> ID; if  (get_post_meta($thisPost, mapa, true) !=null)
                        { echo (get_post_meta($thisPost, mapa, true)); }
                        else { the_title(); }
                  ?>
                </div><!-- /Texto Mapa-->
          </article><!-- /Mapa-->
          <article class="mapa"><!-- Mapa-->
            <?php $the_query = new WP_Query('p=248');
                while ($the_query->have_posts()) {
                $the_query->the_post();
                echo '<span class="titleMapa">'.$post->post_title.'</span>'; ?>
                <div class="descriptionMapa"><!-- Texto Mapa-->
                    <?php the_content(); } ?>
                </div><!-- /Texto Mapa-->
                <div class="iframeMapa"><!-- Texto Mapa-->
                  <?php global $post;
                        $thisPost = $post -> ID; if  (get_post_meta($thisPost, mapa, true) !=null)
                        { echo (get_post_meta($thisPost, mapa, true)); }
                        else { the_title(); }
                  ?>
                </div><!-- /Texto Mapa-->
          </article><!-- /Mapa-->
        <?php endif; ?>
      <?php if(is_front_page()){ ?>
        <aside class="blockArboles"><!-- Bloque Arboles -->
          <?php
              $the_query = new WP_Query('p=231');
              while ($the_query->have_posts()) {
                  $the_query->the_post();
                  echo '<span class="icon-extintor bgTxRed"><a href="'. home_url() .'/'. $post->post_name .'" title="'.$post->post_title.'" >'.$post->post_title.'</a></span>'; ?>
          <div class="contentArboles"><!-- Content Arboles -->
            <?php the_content(); } ?>
          </div><!-- /Content Arboles -->
        </aside><!-- /Bloque Arboles -->
        <aside class="blockArboles"><!-- Bloque Arboles -->
          <?php
              $the_query = new WP_Query('p=234');
              while ($the_query->have_posts()) {
              $the_query->the_post();
              echo '<span class="icon-extintor bgTxRed"><a href="'. home_url() .'/'. $post->post_name .'" title="'.$post->post_title.'" >'.$post->post_title.'</a></span>'; ?>
          <div class="contentArboles"><!-- Content Arboles -->
            <?php the_content(); } ?>
          </div><!-- /Content Arboles -->
        </aside><!-- /Bloque Arboles -->
      <?php }
      if($post->ID == 61 || $post->ID == 63 || $post->ID == 65 || $post->ID == 67 || $post->ID == 69 || $post->ID == 71): ?>
      <div class="menuCategories"><!-- Bloque Menú Arboles -->
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("menu-categorias") ) :
        endif; ?>
      </div><!-- /Bloque Menú Arboles -->
      <?php endif; ?>
      <?php if(!is_front_page()){ ?>
      <div class="blockImageLeft"><!-- Bloque Imágen Left -->
        <?php $thumbnail_id    = get_post_thumbnail_id($post->ID);
              $thumbnail_image = get_post($thumbnail_id);
              $title = $thumbnail_image->post_title;
          the_post_thumbnail( '', array( 'title'=>$title) );
        ?>
      </div><!-- /Bloque Imágen Left -->
      <?php } ?>
    </div><!-- /Bloque Contenedor Left -->
  </div><!-- /Cols -->
  <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 nopadding"><!-- Cols -->
    <div class="blockBodyContent"><!-- Bloque contenedor -->
      <?php the_post(); ?>
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
          <h2><?php the_title();?></h2>
          <div class="blockBody"><!-- Bloque Copy -->
            <?php if($post->ID == 27 || $post->ID == 29 || $post->ID == 31 || $post->ID == 33 || $post->ID == 35 || $post->ID == 37 || $post->ID == 39 || $post->ID == 41 || $post->ID == 43 || $post->ID == 45 || $post->ID == 47 || $post->ID == 49 || $post->ID == 51 || $post->ID == 53 || $post->ID == 55 || $post->ID == 57 || $post->ID == 61 || $post->ID == 63 || $post->ID == 65 || $post->ID == 67 || $post->ID == 69 || $post->ID == 71 || $post->ID == 73 || $post->ID == 75 || $post->ID == 77): ?>
              <div class="contentBodyfull"><!-- Body Copy -->
                  <?php the_content(); ?>
              </div><!-- /Body Copy -->
                <?php else: ?>
              <div class="contentBody"><!-- Body Copy -->
                <?php the_content(); ?>
              </div><!-- /Body Copy -->
              <article class="blockBodyDestacado"><!-- Destacado Body -->
                <p><?php $thisPost = $post->ID; if(get_post_meta($thisPost, destacadoPage, true) !=null) { echo (get_post_meta($thisPost, destacadoPage, true));} else { the_title();} ?></p>
              </article><!-- /Destacado Body -->
              <?php if($post->ID == 59) :?>
              <div class="formContact"><!-- Formulario -->
                <?php echo do_shortcode("[contact-form-7 id='156' title='Formulario de contacto']"); ?>
              </div><!-- /Formulario -->
              <?php endif ?>
          </div><!-- /Bloque Copy -->
            <?php endif; ?>
          <div class="imgContainer"><!-- Bloque Imagen -->
             <hr>
              <span class="lineHr"></span>
              <hr>
              <?php if(is_front_page()){
                if ( has_post_thumbnail() ) { the_post_thumbnail( '', array('alt' => ''.get_post_meta( $post -> ID, changeH1, true).'', 'title' => ''.get_post_meta( $post -> ID, changeH1, true).'' )); }
              } ?>
          </div><!-- /Bloque Imagen -->
        </div><!--/ Content -->
      </div><!-- /Cols -->
    </div><!-- /Bloque contenedor -->
  </div><!-- /Cols -->
</section>
<?php get_footer(); ?>