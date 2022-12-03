<?php
/**
 * Enqueue theme asstes
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;
use AQUILA_THEME\Inc\Traits\Singleton;

 class Assets {
    use Singleton;

    protected function __construct()
    {
       
        // load class.
        $this->setup_hooks();
    }

    protected function setup_hooks(){
        /**
         * Actions hooks
         */

        add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ] );
        add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ] );
    }

    public function register_styles(){
       //register styles
       wp_register_style( 'style', get_stylesheet_uri(), [], filemtime( get_template_directory_uri() . '/style.css' ), 'all' );

       // wp_register_style( 'main-css', AQUILA_BUILD_CSS_URI . '/style.css', ['main-css'], filemtime( AQUILA_BUILD_CSS_DIR_PATH . '/style.css' ), 'all' );

       wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css' , [], false, 'all' );
        //enqueue style
       wp_enqueue_style('main-css');
       wp_enqueue_style('bootstrap-css');
    }

    public function register_scripts(){
        //register scripts
        wp_register_script( 'main-script', get_template_directory_uri() . '/assets/main.js', [], filemtime( get_template_directory(). '/assets/main.js' ), true );
        
        wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', ['jquery'], true );

        //enqueue scripts
        wp_enqueue_script('main-script');
        wp_enqueue_script('bootstrap-js');
    }
 }


