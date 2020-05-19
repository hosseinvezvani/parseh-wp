<section class="slider">
    <div class="blog-slider">
        <div class="blog-slider__wrp swiper-wrapper">
            <?php
            $the_query = new WP_Query( array( 'post_type' => 'sliders','cat' =>'7','posts_per_page'=>'6' ) ); ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="blog-slider__item swiper-slide">
                <div class="blog-slider__img">
                    <?php the_post_thumbnail ('slider_img' , array('class' => 'img-fluid')); ?>
                </div>
                <div class="blog-slider__content">
                    <span class="blog-slider__code">تاریخ انتشار : <?php the_time('j F Y'); ?> </span>
                    <div class="blog-slider__title"><h2><?php the_title(); ?></h2></div>
                    <div class="blog-slider__text"><p><?php the_content_rss('', TRUE, '',35); ?></p></div>
                    <a href="<?php the_permalink(); ?>" class="btn blog-slider__button">ادامه مطلب...</a>
                </div>
            </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php esc_html_e( 'متاسفانه هیچ اسلایدی در سایت درج نشده است.' ); ?></p>
            <?php endif; ?>
        </div>
        <div class="blog-slider__pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"><i class="far fa-2x fa-chevron-left"></i></div>
        <div class="swiper-button-prev"><i class="far fa-2x fa-chevron-right"></i></div>
    </div>
</section>
<div class="clearfix"></div>