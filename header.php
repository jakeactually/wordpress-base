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
        <div class="wrap">
            <a href="<?= get_site_url() ?>">
                <img src="<?= get_template_directory_uri() ?>/logo.png" alt="logo" height="45">
            </a>
            <nav class="rh"><? wp_nav_menu(); ?></nav>
            <button id="open" class="icon rs">
                <i class="material-icons">menu</i>
            </button>
        </div>
    </header>

    <nav id="side" class="rs">
        <button id="close" class="icon">
            <i class="material-icons">keyboard_arrow_left</i>
        </button>
        <? wp_nav_menu(); ?>
    </nav>
