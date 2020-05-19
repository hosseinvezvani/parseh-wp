<?php get_header(); ?>

<main>
    <article class="page_content">
        <div class="header_info"></div>
        <div class="container">
            <div class="row reverse">
                <div class="col-12 staticer">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="sticky_sidebar">
                            <section class="row header_information">
                                <div class="col-12 col-sm-12 col-md-9 col-lg-9"><i class="fal fa-marker float-right"></i><h1 class="h3"><?php the_title(); ?></h1>
                                    <div class="header_description">
                                        <i class="fal fa-lightbulb-on float-right"></i>
                                        <p><?php the_content_rss('', TRUE, '', 30); ?></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="Sidebar col-12 col-sm-12 col-md-3 col-lg-3">
                                    <div class="sidebar-details">
                                        <div class="workthumb"><?php the_post_thumbnail('post_single_page_img', array('class' => 'img-fluid')); ?></div>
                                    </div>
                            </section>

                            <div class="content_single mt-2 py-2">
                                <div class="head_content">
                                    <div class="breadcrumbs float-right"><?php the_breadcrumb(); ?></div>
                                    <div class="the_date float-left"><i class="fal fa-calendar-edit fa-2x ml-1 pt-1"></i>تاریخ انتشار : <?php the_time('j F Y'); ?></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="body_content">
                                    <?php the_content(__('')); ?>
                                </div>
                                <hr>
                                <div class="alert alert-warning" role="alert">
                                    <span class="float-right"><i class="fal fa-tags"></i>برچسب ها : </span>
                                    <ul class="float-right list-group list-group-horizontal-lg">
                                        <li class="list-group-item font-italic"><a href="<?php the_permalink();?>"><?php the_tags( '# ' , ' , ' ,' '); ?></a></li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <hr class="mb-5">
<!--                                <div class="footer_content">-->
<!--                                    <img src="--><?php //bloginfo('template_url'); ?><!--/assets/images/1.jpg" style="width: 120px;height: 120px;" class="img-thumbnail float-right imgauther">-->
<!--                                    <div class="nameauther"><i class="fal fa-calendar-edit fa-2x ml-1 pt-1"></i>تاریخ انتشار : ۲۵ اردیبهشت ۱۳۹۹ </div>-->
<!--                                    <div class="clearfix"></div>-->
<!--                                </div>-->
                            </div>
                        </div>
                    <?php endwhile; else : ?>
                        <p><?php esc_html_e( 'متاسفانه محتوایی برای نمایش وجود ندارد. لطفا به صفحه اصلی بروید یا از کادر جستجو در بالای سایت استفاده نمایید' ); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </article>
</main>
<?php get_footer(); ?>
