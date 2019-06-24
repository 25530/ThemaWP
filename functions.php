<?php

function themaSam_bronnen() {
  wp_enqueue_script('script', get_theme_file_uri('js/scriptSam.js'), NULL, '1.0', true);
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('mijn fonts', '//fonts.googleapis.com/css?family=Lato:100,300,300i,400');
}

add_action('wp_enqueue_scripts', 'themaSam_bronnen');

// registreer menu's van get thema

register_nav_menus( array (
    'hoofd' => __('Hoofd menu'),
    'footer' => __('Menu in footer'),
));

function themaSam_widgets() {
  register_sidebar( array(
   'name'           => __( 'Widget aside' ),
   'id'             => ('widget_aside'),    
   'description'    => ('Hier de widgets voor de aside plaatsen'),
   'before_widget'  => '',
   'after_widget'   => '',
   'before_title'   => '<h4 class="widgettitel">',
   'after_title'    => '</h4>'
 ) );
}
add_action('widgets_init', 'themaSam_widgets');
?>
