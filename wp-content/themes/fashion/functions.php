<?php 

add_action('widgets_init', 'register_fashion_widgets');
add_action('after_setup_theme', 'fashion_after_setup_theme');
remove_shortcode( 'gallery' );
add_shortcode( 'gallery', 'fashion_shortcode_gallery' );

function fashion_shortcode_gallery($atts){
    $img_id = explode(',', $atts['ids']);

    $html = '<ul id="slide_2" class="slidik">';

    $pattern = '#(width|height)="\d+"\s#';
    $i = 1;
    foreach ($img_id as $id) {
        $img = wp_get_attachment_image( $id, 'full');

        $img = preg_replace($pattern, '', $img);

        if($i == 1){
            $html .= '<li class="show">'.$img.'</li>';
        }else{
            $html .= '<li>'.$img.'</li>';
        }
        
    }

    $html .= '<a data-slidik="slide_2" class="next" href="#">Next</a>
            <a data-slidik="slide_2" class="prev" href="#">Prev</a>
            <div class="captionWrap"><div data-slidik="slide_2" class="caption"></div></div>
            <div class="portfolio-close"><a href="#"></a></div>';

    $html .= '</ul>';

    return $html;
}

/**
 * Enqueue scripts
 */
function fashion_styles_scripts() {
    wp_enqueue_style( 'fashion-style', get_stylesheet_uri() );

    wp_enqueue_script( 'fashion-jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js');

    if(is_home() || is_category('portfolio')){
        wp_enqueue_style('fashion-elastide', get_template_directory_uri().'/css/elastislide.css');
        wp_enqueue_style('fashion-custom', get_template_directory_uri().'/css/custom.css');
        
        wp_enqueue_script( 'modernizr.custom', get_template_directory_uri().'/js/modernizr.custom.17475.js');
        wp_enqueue_script( 'jquerypp.custom', get_template_directory_uri().'/js/jquerypp.custom.js',  ['fashion-jquery'], null, true );
        wp_enqueue_script( 'jquery.elastislide', get_template_directory_uri().'/js/jquery.elastislide.js', ['fashion-jquery'], null, true );
    }

    if(in_category('portfolio')){
        wp_enqueue_style('fashion-liSlidik', get_template_directory_uri().'/css/liSlidik.css');
        wp_enqueue_style('fashion-liSlidik-black', get_template_directory_uri().'/css/liSlidik.blackClasic.css');

        wp_enqueue_script( 'fashion-jquery.liSlidik', get_template_directory_uri().'/js/jquery.liSlidik.js', ['fashion-jquery']);   
    }

}
add_action( 'wp_enqueue_scripts', 'fashion_styles_scripts' );

function fashion_after_setup_theme(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}

function register_fashion_widgets(){
    $args = array(
    'name'          => 'Слайдер',
    'id'            => 'slider-top',
    'description'   => 'Добавьте слайды через виджет текст',
    'before_widget' => '',
    'after_widget'  => ''
    );

    register_sidebar( $args );

    $args = array(
    'name'          => 'Футер',
    'id'            => 'footer',
    'description'   => 'Добавьте иконки социальных сетей через виджет текст',
    'before_widget' => '',
    'after_widget'  => ''
    );

    register_sidebar( $args );
}



/**
 * menu
 */
register_nav_menu( 'main-menu', 'Главное меню' );


