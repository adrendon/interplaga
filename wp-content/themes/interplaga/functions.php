<?php

if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'sidebar_1', //nombre del lugar donde habilitamos widgets
        'before_widget' => '', //etiqueta html o clase css que vendrá antes de nuestro widgets
        'after_widget' => '', // etiqueta html o clase css que vendrá después de nuestro widgets
        'before_title' => '<h2>', // etiqueta html que viene antes del título de nuestro widgets
        'after_title' => '</h2>', // etiqueta html que viene después del título de nuestro widgets
    ));
}

if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'telefonos',
));


add_filter('jpeg_quality', 'smashing_jpeg_quality');
add_filter('widget_text', 'do_shortcode');

function smashing_jpeg_quality() {
    return 100;
}

if (function_exists('add_theme_support'))
    add_theme_support('post-thumbnails');
    add_theme_support('menus');

add_shortcode('mapa', 'field_func');
function field_func($atts) {
global $post;
$name = $atts['name'];
if (empty($name)) return;

return get_post_meta($post->ID, $name, true);
}

?>