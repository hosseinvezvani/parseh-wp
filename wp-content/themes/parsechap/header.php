<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>چاپ پارسه</title>
        <link rel="stylesheet" href="assets/css/ekko-lightbox.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--    <link rel="stylesheet" href="assets/FontAwesome.Pro.5.12.0.Web/css/all.css">-->
    <link rel="stylesheet" href="assets/css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
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
                <ul class="nav navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">خانه <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">نمونه کارها</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            خدمات ما
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">کارت ویزیت</a>
                            <a class="dropdown-item" href="#">چاپ افست</a>
                            <div class="dropdown-divider">چاپ دیجیتال</div>
                            <a class="dropdown-item" href="#">چاپ بوم</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ثبت سفارش</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">بلاگ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">درباره ما</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">تماس با ما</a>
                    </li>
                </ul>
            </div>
            <a class="navbar-brand mx-auto" href="#"><img src="assets/images/logo-top.png"
                                                          class="img-fluid logo-top-parshe" alt="لوگوی چاپ پارسه"></a>
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