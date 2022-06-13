<?php
  function arphabet_widgets_init() {

    register_sidebar( array(
      'name'          => 'Sidebar',
      'id'            => 'sidebar-widgets',
      'before_widget' => '<div class="side-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="rounded">',
      'after_title'   => '</h3>',
    ) );
    
    }
    
    add_action( 'widgets_init', 'arphabet_widgets_init' );



    
    function mytheme_menu(){
      register_nav_menu('mijn_custom_menu', __( 'Mijn Custom Menu' ));
     }
     add_action('init', 'mytheme_menu');
?>

<?php
  add_theme_support( 'post-thumbnails' );
  add_image_size( 'sidebar-thumb', 605, 600, true );
  add_image_size( 'custom-page-thumb', 300, 300 );
  add_image_size( 'home-page', 100, 9999);
?>
