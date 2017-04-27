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
                <img src="<?= get_site_url() ?>/wp-content/uploads/2000/01/logo.png" alt="logo" height="45">
            </a>
            <nav class="rh"><? wp_nav_menu(); ?></nav>
            <div id="open" class="rs">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </header>

    <nav id="side" class="rs">
        <span id="close" class="icon-arrow-left"></span>
        <? wp_nav_menu(); ?>
    </nav>