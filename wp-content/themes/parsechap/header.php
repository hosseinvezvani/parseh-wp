<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php
        if (is_category()) {
            echo 'Category: '; wp_title(''); echo ' - ';

        } elseif (function_exists('is_tag') && is_tag()) {
            single_tag_title('Tag Archive for &quot;'); echo '&quot; - ';

        } elseif (is_archive()) {
            wp_title(''); echo ' Archive - ';

        } elseif (is_page()) {
            echo wp_title(''); echo ' - ';

        } elseif (is_search()) {
            echo 'Search for &quot;'.wp_specialchars($s).'&quot; - ';

        } elseif (!(is_404()) && (is_single()) || (is_page())) {
            wp_title(''); echo ' - ';

        } elseif (is_404()) {
            echo 'Not Found - ';

        } bloginfo('name');
        ?>
    </title>
<?php wp_head(); ?>
</head>
<body>

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
            <a class="navbar-brand mx-auto" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-top.png" class="img-fluid logo-top-parshe" alt="لوگوی چاپ پارسه"></a>
            <div class="navbar-collapse float-left collapse" id="icone-menu">
                <ul class="nav navbar-nav  w-100 justify-content-end menu-icon">
                    <div id="search">
                        <i class="fal fa-search" id="search-icon"></i>
                        <form>
                            <input type="search" id="search-input" name="search" autocomplete="off"
                                   placeholder="جستجو کنید...">
                        </form>
                    </div>
                    <li class="nav-item"><i class="fal fa-user"></i></li>
                    <li class="nav-item notifications"><i class="fal fa-bell"></i></li>
                    <li class="nav-item"  data-toggle="tooltip" data-placement="bottom" title="" data-original-title="۰۹۱۲-۸۶۰۵۹۸۸"><i class="fal fa-phone-alt"></i></li>
                </ul>
            </div>
        </div>
    </nav>
</section>