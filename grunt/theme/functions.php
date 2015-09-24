<?php 

  if ( !defined( 'THEME_PATH' ) ) define( 'THEME_PATH',  trailingslashit( get_stylesheet_directory() ) );
  if ( !defined( 'THEME_URL' ) )  define( 'THEME_URL', trailingslashit( dirname( get_bloginfo( 'stylesheet_url' ) ) ) );
 
  remove_action( 'wp_head', 'wp_generator' ) ;
  remove_action( 'wp_head', 'wlwmanifest_link' ) ;
  remove_action( 'wp_head', 'rsd_link' ) ;
  remove_action( 'wp_head', 'feed_links', 2 );
  remove_action( 'wp_head', 'feed_links_extra', 3 );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  
  wp_deregister_script( 'jquery' );

  add_theme_support( 'post-thumbnails' ); 

  function load_em_up(){
   
    $css_files = [ 
      "css/bootstrap.css",
      "css/main.css"
    ];
    
    $js_files = [ 
      "js/vendor/vendor.js"
    ];

    for ($i=0; $i < count( $css_files ) ; $i++) { 
      $filename = $css_files[$i]; 

      if ( file_exists( THEME_PATH . $filename ) ) {
         wp_enqueue_style( basename( $filename ) , THEME_URL . $filename );
      } 
    }

    for ($i=0; $i < count( $js_files ) ; $i++) { 
      $filename = $js_files[$i];
      if ( file_exists( THEME_PATH . $filename ) ) {
         wp_enqueue_script( basename( $filename ) , THEME_URL . $filename, 'jquery' , '1' , true );
      } 
    }
    

    if ( is_home() ) {
      $filename = 'js/home.js';
    }

    if ( 
      file_exists( THEME_PATH . $filename ) ) { wp_enqueue_script( basename( $filename ) , THEME_URL . $filename, 'jquery' , '1' , true ); 
    } 

    if (in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'))) {
      wp_register_script('livereload', 'http://localhost:35729/livereload.js?snipver=1', null, false, true);
      wp_enqueue_script('livereload');
    }

  };

  add_action( 'wp_enqueue_scripts', 'load_em_up' );

?>