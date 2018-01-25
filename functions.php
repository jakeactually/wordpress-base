<?

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(['main' => "Principal"]);

    add_action('wp_enqueue_scripts', function() {
        wp_enqueue_style('materialIcons', "https://fonts.googleapis.com/icon?family=Material+Icons");
        wp_enqueue_style('roboto', "https://fonts.googleapis.com/css?family=Roboto:400,700");
        wp_enqueue_style('normalize', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
        wp_enqueue_style('light', get_template_directory_uri() . "/light.css");
        wp_enqueue_style('wordpressBase', get_stylesheet_uri());
        wp_enqueue_script('hammer', "https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js");
        wp_enqueue_script('$', "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js");
        wp_enqueue_script('wordpressBase', get_template_directory_uri() . "/script.js");
    });

    $opt_name = "wp_base";
     
    Redux::setArgs($opt_name, [
        'opt_name' => $opt_name,
        'menu_title' => 'WP Base',
    ]);

    $fields = [
        [
            'type'     => 'media',
            'id'       => 'logo',
            'title'    => 'Logo',
        ],
        [
            'type'     => 'editor',
            'id'       => 'footer',
            'title'    => 'Footer'
        ]
    ];

    if (function_exists('additionalFields')) {
        $fields = array_merge($fields, additionalFields());
    }

    Redux::setSection($opt_name, [
        'id'     => 'general',
        'title'  => "General",
        'icon'   => 'el el-home',  
        'fields' => $fields
    ]);

?>
