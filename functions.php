<?
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    register_nav_menus(['main' => "Principal"]);

    function jc_enqueue_scripts() {
        wp_enqueue_style('jc_sli', "https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css");
        wp_enqueue_style('jc_bootstrap', "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css");
        wp_enqueue_style('jc_frontend', get_template_directory_uri() . "/frontend.css");
        wp_enqueue_style('jc_style', get_stylesheet_uri());
        wp_enqueue_script('jquery');
        wp_enqueue_script('jc_bootstrap', "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js");
        wp_enqueue_script('jc_hammer', "https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js");
        wp_enqueue_script('jc_script', get_template_directory_uri() . "/main.js");
    }
    add_action( 'wp_enqueue_scripts', 'jc_enqueue_scripts' );
?>