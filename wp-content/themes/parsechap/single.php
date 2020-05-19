<?php get_header(); ?>
<main>
    <article class="single_page_content">
        <div class="header_info"></div>
        <div class="container">
            <div class="row reverse">
                <div class="col-12 col-sm-12 col-md-9 col-lg-9 staticer">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="sticky_sidebar">
                        <section class="row header_information">
                            <div class="col-12"><i class="fal fa-marker float-right"></i><h1 class="h3"><?php the_title(); ?></h1>
                                <div class="header_description">
                                    <i class="fal fa-lightbulb-on float-right"></i>
                                    <p><?php the_content_rss('', TRUE, '', 30); ?></p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </section>

                        <div class="content_single mt-5 py-2">
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
                            <hr>
                            <div class="footer_content">
                                <?php echo get_avatar( get_the_author_meta('user_email'), '120', '120' ); ?>
                                <div class="nameauther"><i class="fal fa-user fa-2x ml-1 pt-1"></i>منتشر شده توسط :  <?php the_author_link(); ?> | <i class="fal fa-address-card fa-2x ml-1 pt-1"></i><span><?php the_author_meta('description'); ?></span> </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 scroller">
                    <div class="Sidebar">
                        <div class="sidebar-details">
                            <div class="workthumb"> <?php the_post_thumbnail('post_single_page_img', array('class' => 'img-fluid')); ?></div>
                        </div>
                        <div class="list-group cat_list mt-5">
                            <a href="" class="list-group-item list-group-item-action active">
                                <i class="far fa-align-right"></i>  خدمات چاپ پارسه
                            </a>
                            <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-angle-left"></i>چاپ دیجیتال</a>
                            <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-angle-left"></i>چاپ افست</a>
                            <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-angle-left"></i>چاپ روی بوم نقاشی</a>
                            <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-angle-left"></i>چاپ بنر</a>
                            <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-angle-left"></i>خدمات طراحی</a>
                            <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-angle-left"></i>هدایای تبلیغاتی</a>
                            <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-angle-left"></i>ساخت مهر و پلاک</a>
                            <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-angle-left"></i>انواع لیبل و هولوگرام</a>
                        </div>
                        <div class="list-group last_blog_post my-3">
                            <a href="" class="list-group-item list-group-item-action active">
                                <i class="fal fa-ballot"></i>  آخرین مطلاب بلاگ
                            </a>
<?php
global $post;
$myposts = get_posts('numberposts=5&offset=0&category=3');
foreach($myposts as $post) :
?>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="media">
                                    <?php the_post_thumbnail('relatedpost_img', array('class' => 'mr-0')); ?>
                                    <div class="media-body">
                                        <h4 class="mt-0"><?php the_title_excerpt('', '...', true, '50'); ?></h4>
                                    </div>
                                </div>
                            </a>
<?php endforeach; ?>
                        </div>
                        <div class="list-group catalog">
                            <a href="" class="list-group-item list-group-item-action active">
                                <i class="fal fa-book"></i> کاتالوگ چاپ پارسه
                            </a>
                            <a href="" class="py-2 px-2 text-center">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/1.jpg" class="mr-0 img-thumbnail" style="width:200px;height: 150px">
                                <span class="mt-2">کاتالوگ خدمات و محصولات چاپ پارسه</span>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endwhile; else : ?>
                    <p><?php esc_html_e( 'متاسفانه محتوایی برای نمایش وجود ندارد. لطفا به صفحه اصلی بروید یا از کادر جستجو در بالای سایت استفاده نمایید' ); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </article>
</main>
<?php get_footer(); ?>
