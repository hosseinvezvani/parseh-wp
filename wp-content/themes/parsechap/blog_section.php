<section class="blog">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center mb-3">
            <h2 class="d-flex justify-content-center aos-item" data-aos="fade-in">مطالب مفید سایت</h2>
        </div>
        <div class="row my-1 pt-2 my-md-5 aos-item" data-aos="fade-down" data-aos-anchor-placement="center-bottom"
             data-aos-offset="150" data-aos-delay="100" data-aos-duration="800">
            <div class="MultiCarousel col-md-10" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"
                 data-interval="1000">
                <div class="MultiCarousel-inner">
                    <?php
                    global $post;
                    $myposts = get_posts('numberposts=12');
                    foreach ($myposts as $post) :
                        setup_postdata($post);
                        ?>
                        <div class="item">
                            <a href="<?php the_permalink(); ?>" dideo-checked="true">
                                <div class="pad15">
                                    <h3 class="title-heading"><?php the_title(); ?></h3>
                                    <hr>
                                    <p class="abstract-blog"><?php the_content_rss('', TRUE, '', 60); ?></p>
                                </div>
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('blog_posts_img', array('class' => 'img-blog img-fluid')); ?>
                                <?php else: ?>
                                    <img src="<?php bloginfo('template_url'); ?>/image/200*200.jpg"
                                         class="img-blog img-fluid">
                                <?php endif; ?>
                            </a>
                            <div class="post-hidden d-flex justify-content-between pl-4 mr-4">
                                <span class="post-time"><i class="far fa-calendar-alt"></i> <?php the_time('j F Y'); ?></span>
                                <span class="post-viwe"><?php echo gt_get_post_view(); ?><i class="far fa-eye"></i></span></div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <button class="rightLst"><i class="fas fa-long-arrow-right"></i></button>
                <button class="leftLst"><i class="fas fa-long-arrow-left"></i></button>
            </div>

        </div>
        <div class="row d-flex justify-content-center">

            <a href="#" class="btn blog-slider__button col-6 col-md-3 aos-item" data-aos="fade-down"
               data-aos-anchor-placement="center-bottom" data-aos-offset="220" data-aos-delay="100"
               data-aos-duration="1100" dideo-checked="true">ادامه مطلب...</a>

        </div>
    </div>
</section>
<div class="clearfix"></div>