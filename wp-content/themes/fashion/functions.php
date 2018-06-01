<?php 

/**
 * Enqueue scripts
 *
 * @param string $handle Script name
 * @param string $src Script url
 * @param array $deps (optional) Array of script names on which this script depends
 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
 */
function fashion_styles_scripts() {
    wp_enqueue_style( 'fashion-style', get_stylesheet_uri() );
    wp_enqueue_style('fashion-elastide', get_template_directory_uri().'/css/elastislide.css');
    wp_enqueue_style('fashion-custom', get_template_directory_uri().'/css/custom.css');


    wp_enqueue_script( 'fashion-jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js');
    wp_enqueue_script( 'modernizr.custom', get_template_directory_uri().'/js/modernizr.custom.17475.js');
    wp_enqueue_script( 'jquerypp.custom', get_template_directory_uri().'/js/jquerypp.custom.js',  ['fashion-jquery'], null, true );
    wp_enqueue_script( 'jquery.elastislide', get_template_directory_uri().'/js/jquery.elastislide.js', ['fashion-jquery'], null, true );
}
add_action( 'wp_enqueue_scripts', 'fashion_styles_scripts' );
