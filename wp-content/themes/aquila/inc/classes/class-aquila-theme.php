<?php
/**
 * Bootstraps the theme.
 * 
 * @package Aquila
 */

 namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

 class AQUILA_THEME {
    use Singleton;
    
    protected function __construct()
    {
        
        // load class.
        Assets::get_instance();
        Menus::get_instance();
        Meta_Boxes::get_instance();
        Sidebars::get_instance();

        $this->setup_hooks();

    }

    protected function setup_hooks(){
        /**
         * Actions hooks
         */

        add_action( 'after_setup_theme', [ $this, 'setup_theme' ] );
  
    }

    public function setup_theme(){

        add_theme_support( 'title-tag' );
        add_theme_support( 'custom-logo', [
            'header-text'          => ['site-title',  'site-description'] ,
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
            'unlink-homepage-logo' => true,
        ] );
        add_theme_support( 'custom-background', [
            'default-color' => '#ffffff',
            'default-image' =>'',
        ] );

        add_theme_support( 'post-thumbnails');
        /**
         * Register image sizes.
         */
        add_image_size( 'featured-thumbnail', 350, 233, true );

        add_theme_support( 'customize-selective-refresh-widgets' );

        add_theme_support( 'automatic-feed-links' );

        add_theme_support( 
            'html5', 
            [
            'search-form',
            'comment-list',
            'comment-form',
            'gallery',
            'caption',
            ]
        );

        add_editor_style('assets/build/css/editor.css');


        add_theme_support( 'wp-block-styles' );

        add_theme_support( 'align-wide' );

        global $content_width;
        if( !isset ( $content_width ) ){
            $content_width = 1240;
        }
        
    }

    
 }

