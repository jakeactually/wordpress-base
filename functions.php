<?

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(['main' => "Principal"]);
    
    function jc_enqueue_scripts() {
        wp_enqueue_style('jc_material_icons', "https://fonts.googleapis.com/icon?family=Material+Icons");
        wp_enqueue_style('jc_roboto', "https://fonts.googleapis.com/css?family=Roboto:400,700");
        wp_enqueue_style('jc_normalize', "https://cdnjs.cloudflare.com/ajax/libs/normalize/6.0.0/normalize.min.css");
        wp_enqueue_style('jc_frontend', get_template_directory_uri() . "/frontend.css");
        wp_enqueue_style('jc_style', get_stylesheet_uri());
        wp_enqueue_script('jc_jquery', "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js");
        wp_enqueue_script('jc_script', get_template_directory_uri() . "/script.js");
    }
    add_action('wp_enqueue_scripts', 'jc_enqueue_scripts');

?>
