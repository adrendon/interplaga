<?php get_header(); ?>

<section class="copy">
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 nopadding"><!-- Cols -->
        <div class="blockContainerLeft"><!-- Bloque Contenedor left -->
          <div class="blockBuscador"><!-- Bloque Buscador -->
            <?php get_search_form(); ?>
          </div><!-- /Bloque Buscador -->
          <div class="blockDestacadoLeft"><!-- Bloque Destacado -->
            <p><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("frase-destacada") ) : ?><?php endif; ?></p>
            <nav class="menuCatalogo">
              <?php wp_nav_menu(array('menu' => 'menu-catalogo')); ?>
            </nav>
          </div><!-- /Bloque Destacado -->
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
                                <?php wp_catalogue_breadcumb(); ?>
                                <h2><?php the_title();?></h2>
                                <div class="blockBody"><!-- Bloque Copy -->
            <div class="contentBodyfull"><!-- Body Copy -->
                            <div id="wpc-catalogue-wrapper">
                                <?php
                                global $post;
                                $terms1 = get_the_terms($post->id, 'wpccategories');

                                if ($terms1 != null || $term1 != null) {
                                    foreach ($terms1 as $term1) {
                                        $slug = $term1->slug;
                                        $term_id = $term1->term_id;
                                    }
                                }
                                global $wpdb;

                                $args = array(
                                    'orderby' => 'term_order',
                                    'order' => 'ASC',
                                    'hide_empty' => true,
                                );
                                $terms = get_terms('wpccategories', $args);
                                $count = count($terms);
                                echo '<div class="wpc-col-1">
                                    <div id="wpc-col-1">
                        <!--<div class="h2block"> <h2>Menú</h2> </div>-->
                        <!--<ul class="wpc-categories">-->';
                                if ($count > 0) {
                                    //echo '<li class="wpc-category"><a href="' . get_option('pagPrincipal') . '">Todos los servicios</a></li>';
                                    //echo '<li class="wpc-category"><a href="'. get_option('catalogue_page_url') .'">Todos los productos</a></li>';
                                    //echo '<li class="wpc-category"><a id="btn-all-productos-tres" href="#wpc-catalogue-wrapper">Todos los productos</a></li>';
                                    foreach ($terms as $term) {

                                        $slug1 = $term->slug;
                                        //$sql = $wpdb->query("SELECT description FROM wp_maquinaria_marcove_term_taxonomy INNER JOIN wp_maquinaria_marcove_terms ON wp_maquinaria_marcove_term_taxonomy.term_taxonomy_id = wp_maquinaria_marcove_terms.term_id\n WHERE wp_maquinaria_marcove_terms.slug = ".$slug1);
                                        //$sql = $wpdb->get_results("SELECT wp_term_taxonomy.description FROM wp_term_taxonomy INNER JOIN wp_terms ON wp_term_taxonomy.term_taxonomy_id = wp_terms.term_id WHERE wp_terms.slug = ".$slug1);
                                        $sql = $wpdb->get_results("SELECT $wpdb->term_taxonomy.description FROM $wpdb->term_taxonomy INNER JOIN $wpdb->terms ON $wpdb->term_taxonomy.term_taxonomy_id = $wpdb->terms.term_id WHERE $wpdb->terms.slug ='$slug1'");

                                        foreach ($sql as $descrip) {
                                            $des = $descrip->description;
                                        }
                                        if ($des == "1") {
                                            $tab = "padding-left:6px";
                                            $primario = " cls_primario";
                                        } else if ($des == "2") {
                                            $tab = "padding-left:36px";
                                            $primario = "";
                                        } else if ($des == "3") {
                                            $tab = "padding-left:56px";
                                            $primario = "";
                                        } else if ($des == "4") {
                                            $tab = "padding-left:76px";
                                            $primario = "";
                                        } else {
                                            //$class	=	'';
                                            $tab = "";
                                            $primario = "";
                                        }


                                        if ($term->slug == $slug) {
                                            $class = 'active-wpc-cat';
                                        } else {
                                            $class = '';
                                        }

                                        //buscar si hay una pagina si tiene un post_name igual al slug actual
                                        //if($guid_post = $wpdb->get_results("SELECT guid FROM $wpdb->posts where post_name = '$slug1' and post_type = 'page'") and ((strpos($post_content,'[wp-catalogue]')!==false) || (strpos($post_content,'[wp-catalogue-ctg slug=')!==false))){                     
                                        if ($guid_post = $wpdb->get_results("SELECT guid FROM $wpdb->posts where post_name = '$slug1' and post_type = 'page'")) {
                                            foreach ($guid_post as $guid) {
                                                $url = $guid->guid;
                                            }
                                        } else {
                                            $url = get_term_link($term->slug, 'wpccategories');
                                        }

                                        //echo '<li class="wpc-category ' . $class . $primario . '"><a style="' . $tab . '" href="' . $url . '">' . $term->name . '</a></li>';
                                        //echo '<li  class="wpc-category ' . $class . '"><a href="'.get_term_link($term->slug, 'wpccategories').'">'. $term->name .'</a></li>';
                                    }
                                } else {
                                    //echo '<li  class="wpc-category"><a href="#">Sin categoría</a></li>';
                                }
                                //echo '</ul>
                                  echo '</div></div>';
                                ?>
                                <!--/Left-menu-->
                                <!--col-2-->

                                <div id="wpc-col-2">
                                    <!--<section class="contcatalogo"><div class="h2block"> <h2>Catálogo de productos</h2> </div></section>-->
                                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                            <?php
                                            $img1 = get_post_meta($post->ID, 'product_img1', true);
                                            $img2 = get_post_meta($post->ID, 'product_img2', true);
                                            $img3 = get_post_meta($post->ID, 'product_img3', true);
                                            ?>	 
                                            <div id="wpc-product-gallery">
                                                <?php
                                                if (get_option('image_height')) {
                                                    $img_height = get_option('image_height');
                                                } else {
                                                    $img_height = 348;
                                                }
                                                if (get_option('image_width')) {
                                                    $img_width = get_option('image_width');
                                                } else {
                                                    $img_width = 490;
                                                }
                                                $icroping = get_option('croping');
                                                ?>
                                                <div class="product-img-view" style="width:<?php echo $img_width; ?>px; height:<?php echo $img_height; ?>px;">
                                                    <img src="<?php echo $img1; ?>" alt="" id="img1" height="<?php echo $img_height; ?>" width="<?php echo $img_width; ?>" />
                                                    <img src="<?php echo $img2; ?>" alt="" id="img2" height="<?php echo $img_height; ?>" width="<?php echo $img_width; ?>" style="display:none;" />
                                                    <img src="<?php echo $img3; ?>" alt="" id="img3" height="<?php echo $img_height; ?>" width="<?php echo $img_width; ?>" style="display:none;"  />
                                                </div>
                                                <div class="wpc-product-img">
                                                    <?php if ($img1): ?>
                                                        <div class="new-prdct-img"><img src="<?php echo $img1; ?>" alt="" width="151" id="img1" /></div>
                                                    <?php endif;
                                                    if ($img2):
                                                        ?>
                                                        <div class="new-prdct-img"><img src="<?php echo $img2; ?>" alt="" width="151" id="img2"/></div>
                                                    <?php endif;
                                                    if ($img3):
                                                        ?>
                                                        <div class="new-prdct-img"><img src="<?php echo $img3; ?>" alt="" width="151" id="img3"/></div>
        <?php endif; ?>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                                <?php $product_price = get_post_meta($post->ID, 'product_price', true); ?>
                                            <div class="entry-content"> 
                                                <h4><span>Detalles del producto</span> <?php if ($product_price): ?><span class="product-price">Price: <span><?php echo $product_price; ?></span></span><?php endif; ?></h4>
                                                <?php the_content(); ?>
                                                <?php
                                                if (get_option('next_prev') == 1) {
                                                    echo '<p class="wpc-next-prev">';
                                                    previous_post_link('%link', 'Anterior');
                                                    next_post_link('%link', 'Siguiente');
                                                    echo '</p>';
                                                }
                                                ?>
                                            </div>

    <?php endwhile;
endif;
?>
                                </div>
                                <!--/col-2-->
                            </div>
                        </div>

                    </div><!-- id="contentsCont"-->
                </div><!--fin id="content"-->
            </div><!-- /Cols -->
</section>

<!--FullContent-->
<!--/Content-->
<?php get_footer();
