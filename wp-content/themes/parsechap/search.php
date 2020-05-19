<?php get_header(); ?>
<main>
    <article class="search_page">
        <div class="header_info"></div>
        <div class="container">
            <div class="row reverse">
                <div class="col-12 staticer">
                    <div class="sticky_sidebar">
                        <section class="row header_information text-center d-flex justify-content-center">
                           <i class="fal fa-search fa-2x ml-2 float-right"></i>
                                <h1 class="h4">عبارت سرچ شده شما :  <?php the_search_query(); ?></h1>
                            <div class="header_description mt-4 mb-2">
                                <i class="fal fa-lightbulb-on float-right"></i>
                            عبارت سرچ شده شما در پست ها و محصولات زیر پیداه شده حتی اگر یک کلمه در پست های زیر وجود داشته باشد شما را به پست های زیر روانه میسازد.
                            </div>
                        </section>
                        <div class="content_single mt-5 py-2 container">
                            <div class="head_content">
                                <div class="breadcrumbs float-right d-inline-block"><a href="<?php  get_home_url('/'); ?>"><i class="fal fa-home fa-2x"></i>خانه</a></a> / صفحه جستجو</div>
                                <div class="the_date float-left">
                                    <i class="fal fa-file-search fa-2x ml-1 pt-1"></i>
                                    نتایج یافت شده برای عبارت :
                                    <span class="text-success alert alert-success py-2 px-3"> <?php the_search_query(); ?></span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="body_content">
                                <div class="row">
                                    <div class="searchpost">
                                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                        <div class="media my-3">
                                            <?php the_post_thumbnail('post_single_page_img', array('class' => 'img-fluid search-img ml-3')); ?>
                                            <div class="media-body">
                                                <h4 class="mt-0"><?php the_title(); ?></h4>
                                                <?php the_content_rss('', TRUE, '', 160); ?>
                                                <a href="<?php the_permalink();?>" class="btn blog-slider__button float-left">ادامه مطلب...</a>
                                            </div>
                                        </div>
                                        <?php endwhile; else : ?>
                                        <span class="alert alert-warning mx-3 my-5" role="alert"><?php esc_html_e( 'برای عبارت و کلمه جستجو شده نتیجه ای یافت نشد.' ); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                            </div>

                            <div class="footer_content text-center d-flex justify-content-center mb-5 pb-5">
                                <?php
                                the_posts_pagination( array(
                                    'mid_size'  => 2,
                                    'prev_text' => __( 'Previous', 'textdomain' ),
                                    'next_text' => __( 'Next', 'textdomain' ),
                                ) );
                                ?>
                                <br>
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#">قبلی</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">بعدی</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </article>
</main>
<?php get_footer(); ?>
