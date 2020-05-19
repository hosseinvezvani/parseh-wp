<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>پارسه</title>
<!--    <link rel="stylesheet" href="--><?php //bloginfo('template_url'); ?><!--/assets/css/ekko-lightbox.css">-->
<!--    <link rel="stylesheet" href="--><?php //bloginfo('template_url'); ?><!--/assets/css/bootstrap.min.css">-->
    <!--    <link rel="stylesheet" href="assets/FontAwesome.Pro.5.12.0.Web/css/all.css">-->
<!--    <link rel="stylesheet" href="--><?php //bloginfo('template_url'); ?><!--/assets/css/bootstrap-rtl.min.css">-->
<!--    <link rel="stylesheet" href="--><?php //bloginfo('template_url'); ?><!--/assets/css/swiper.min.css">-->
<!--    <link rel="stylesheet" href="assets/css/aos.css">-->
<!--    <link rel="stylesheet" href="--><?php //bloginfo('template_url'); ?><!--/style.css">-->
<!--    <link rel="stylesheet" href="--><?php //bloginfo('template_url'); ?><!--/assets/css/responsive.css">-->
<?php wp_head(); ?>
</head>
<body <?phpbody_class(); ?>>

<section class="menu">
    <nav class="navbar navbar-expand-lg fixed-top navbar-parseh" data-toggle="sticky-onscroll">
        <div class="container warp-container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse menu-hover menu-hover-1" id="navbarNavDropdown">
                <?php
                wp_nav_menu([
                    'menu'            => 'main-menu',
                    'theme_location'  => 'main-menu',
                    'container'       => 'navbar',
                    'container_id'    => 'navbarNavDropdown',
                    'container_class' => 'collapse navbar-collapse',
                    'menu_id'         => false,
                    'menu_class'      => 'nav navbar-nav',
                    'depth'           => 3,
                    'fallback_cb'     => 'bs4navwalker::fallback',
                    'walker'          => new bs4navwalker()
                ]);
                ?>
            </div>

<!--            --><?php
//            $logosite = ot_get_option( 'logosite' , false );
//            if ( $logosite !== false ) { ?>
<!--            <a class="navbar-brand mx-auto" href="https://parsechap.com/"><img src="--><?php //echo $logosite; ?><!--" class="img-fluid logo-top-parshe" alt="چاپ پارسه"></a>-->
<!--            --><?php //} ?>
            <div class="navbar-collapse float-left collapse" id="icone-menu">
                <ul class="nav navbar-nav  w-100 justify-content-end menu-icon">
                    <form action="<?php echo home_url('/'); ?>" method="get">
                    <div id="search">
                        <i class="fal fa-search" id="search-icon"></i>
                            <input type="search" id="search-input" autocomplete="off" placeholder="<?php echo esc_attr_x( 'پس از درج کلمه مورد نیاز اینتر را بزنید', 'placeholder' ) ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
<!--                            <input type="submit" value="--><?php //_e("جستجو", "wpbootstrap"); ?><!--">-->

                    </div>
                    </form>
                    <li class="nav-item"><i class="fal fa-user"></i></li>
                    <li class="nav-item notifications"><i class="fal fa-bell"></i></li>
                    <li class="nav-item"  data-toggle="tooltip" data-placement="bottom" title="" data-original-title="۰۹۱۲-۸۶۰۵۹۸۸"><i class="fal fa-phone-alt"></i></li>
                </ul>
            </div>
        </div>
    </nav>
</section>