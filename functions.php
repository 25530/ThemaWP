<?php

function themaSam_bron() {
  wp_enqueue_script('sam script', get_theme_file_uri('script.js'), NULL, '1.0', true);
  wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'themaSam');

// registreer menu's van get thema

register_nav_menus( array (
    'hoofd' => __('Hoofd menu'),
    'footer' => __('Menu in footer'),
));

?>
