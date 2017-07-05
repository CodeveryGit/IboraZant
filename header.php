<?php

?>
    <!DOCTYPE html>
<html <?php language_attributes(); ?> >
    <head>
        <title><?php bloginfo('name');
            wp_title(); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">

        <meta property="og:url" content="http://iborazant.com/"/>
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="Ibora Zant"/>
        <meta property="og:description" content="Online Business Coach"/>
        <meta property="og:image"
              content="http://iborazant.com/wp-content/uploads/2014/04/Ibora-Zant-Favorites-0031.jpg"/>

        <?php if (is_singular() && pings_open(get_queried_object())): ?>
            <link rel="pingback" href="<?php bloginfo('pingback_url') ?>">
        <?php endif; ?>
        <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?> >
<?php if (is_front_page() || get_field('include_header') || is_single() && get_theme_mod('single_include_header')): ?>
    <nav class="navbar navbar-default header-main">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php if (!empty (get_theme_mod('header_logo'))): ?>
                    <a class="navbar-brand" href="/"><img src="<?php echo get_theme_mod('header_logo'); ?>" alt=""></a>
                <?php endif; ?>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div class="header-nav-list">
                    <?php
                    wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'container' => false,
                            'menu_class' => 'nav navbar-nav',
                            'walker' => new Ibora_Walker_Nav_Primary()
                        )
                    )
                    ?>
                    <div class="dropdown search-dropdown">
                        <button class="btn btn-default dropdown-toggle glyphicon glyphicon-search h-search"
                                type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true"></button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li>
                                <form class="navbar-form navbar-left">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </form><!-- .navbar-form -->
                            </li><!-- li -->
                        </ul><!--.dropdown-menu-->
                    </div><!--.dropdown-->
                    <div class="h-language-block">
                        <a href="" class="lang-ng lang-item"
                           style="background-image: url(<?php echo get_template_directory_uri() ?>/img/ng.jpg)"></a>
                        <a href="" class="lang-en lang-item"
                           style="background-image: url(<?php echo get_template_directory_uri() ?>/img/en.jpg)"></a>
                    </div>
                </div><!--.header-nav-list-->
            </div><!-- /.navbar-collapse -->
            <div class="h-side-btn">
                <span class="side-icon"></span>
                <span class="side-icon"></span>
                <span class="side-icon"></span>
            </div>
            <div class="h-side-menu">
                <p class="h-close-button text-uppercase text-right">close</p>
                <?php
                wp_nav_menu(array(
                        'theme_location' => 'sidebar-first',
                        'container' => false,
                        'menu_class' => 'f-s-menu f-s-menu-1 l-bottom l-black',
                        'walker' => new Ibora_Walker_Nav_Primary()
                    )
                );
                wp_nav_menu(array(
                        'theme_location' => 'sidebar-second',
                        'container' => false,
                        'menu_class' => 'f-s-menu f-s-menu-2 l-bottom l-black',
                        'walker' => new Ibora_Walker_Nav_Primary()
                    )
                );
                wp_nav_menu(array(
                        'theme_location' => 'sidebar-third',
                        'container' => false,
                        'menu_class' => 'f-s-menu f-s-menu-3 l-bottom l-black',
                        'walker' => new Ibora_Walker_Nav_Primary()
                    )
                );
                wp_nav_menu(array(
                        'theme_location' => 'sidebar-fourth',
                        'container' => false,
                        'menu_class' => 'f-s-menu f-s-menu-4',
                        'walker' => new Ibora_Walker_Nav_Primary()
                    )
                );

                dynamic_sidebar('right-sidebar');
                ?>
            </div>
        </div><!-- /.container-fluid -->
    </nav>
<?php endif; ?>