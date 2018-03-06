<!doctype html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?v=<?php echo md5_file(get_template_directory() . '/style.css'); ?>">

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/92d1da124e.js"></script>

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Mono:400|Inconsolata' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <meta name="description" content="<?php echo bloginfo('description'); ?>">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <header class="header">
        <div class="row">
            <div class="large-12 columns">
                <a href="<?php echo bloginfo(url); ?>"><h1 class="headline"><?php echo bloginfo('name'); ?></h1></a>
            </div>
        </div>
    </header>

    <nav class="topnav">
        <?php wp_nav_menu(array('menu'=>'topnav')) ?>
    </nav>
    <div class="topnav-spacer"></div>