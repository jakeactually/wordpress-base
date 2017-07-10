<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <? wp_head(); ?>
</head>
<body <? body_class(); ?>>
    
    <header id="header">
        <a href="<?= get_site_url() ?>">
            <img src="<?= get_template_directory_uri() ?>/logo.png" alt="logo" height="45">
        </a>
        <button id="open" class="icon rs">
            <i class="material-icons">menu</i>
        </button>

        <nav>
            <button id="close" class="icon">
                <i class="material-icons">clear</i>
            </button>
            <? wp_nav_menu(); ?>
        </nav>
    </header>
