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