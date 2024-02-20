
<?php
function neon82_enqueue_styles() {
    // Enregistre et met en file d'attente la feuille de style principale du thème.
    wp_enqueue_style( 'neon82-style', get_stylesheet_uri() );
    
    // Si vous avez d'autres feuilles de style, vous pouvez les ajouter ici.
    // Par exemple, pour une feuille de style supplémentaire :
    // wp_enqueue_style( 'neon82-custom-style', get_template_directory_uri() . '/chemin/vers/votre-feuille-de-style.css', array('neon82-style'), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'neon82_enqueue_styles' );

function register_my_menu(){
    register_nav_menu( 'main-menu', 'Menu principal' );
  }
  add_action( 'after_setup_theme', 'register_my_menu' );