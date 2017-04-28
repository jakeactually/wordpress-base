<?

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(['main' => "Principal"]);
    
    function jc_enqueue_scripts() {
        wp_enqueue_style('jc_sli', "https://unpkg.com/simple-line-icons@2.4.1/css/simple-line-icons.css");
        wp_enqueue_style('jc_normalize', "https://unpkg.com/normalize.css@6.0.0");
        wp_enqueue_style('jc_frontend', "https://unpkg.com/jakeactuallynext-frontend@1.0.12/frontend.css");
        wp_enqueue_style('jc_style', get_stylesheet_uri());
        wp_enqueue_script('jc_jquery', "https://unpkg.com/jquery@3.2.1/dist/jquery.min.js");
        wp_enqueue_script('jc_script', get_template_directory_uri() . "/script.js");
    }
    add_action('wp_enqueue_scripts', 'jc_enqueue_scripts');

?>
