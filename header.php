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
        <button class="icon">
            <i class="material-icons">menu</i>
        </button>
        <a href="<?= get_site_url() ?>" class="no-dec">
            <img src="<?= logo ?? "" ?>" alt="logo" height="45">
        </a>
        
        <div class="screen"></div>
        <nav>
            <? wp_nav_menu(); ?>
        </nav>
    </header>
