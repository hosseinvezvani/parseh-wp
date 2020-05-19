<section class="technical-team mt-5 pt-3">
    <div class="container">
        <div class="row d-flex justify-content-center mb-3">
            <h2 class="d-flex justify-content-center aos-item" data-aos="fade-in">تیم فنی چاپ پارسه</h2>
        </div>
        <div class="row my-5 pt-2 d-flex justify-content-center">
            <?php
            $the_query = new WP_Query( array( 'post_type' => 'technicalteam','cat' =>'5','posts_per_page'=>'6' ) ); ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="square linkedin col-7 col-md-3 ml-0 ml-lg-5 aos-item" data-aos="fade-in" data-aos-duration="1000">
                <a href="" class="team-link mb-5 pb-4">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <div class="content">
                        <?php the_post_thumbnail ('img_team' , array('class' => 'img-fluid img-team')); ?>

                        <h4>
                            <?php the_title(); ?>
                        </h4>
                        <p>
                            <?php the_field('expertise'); ?>
                        </p>
                    </div>
                </a>
            </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php esc_html_e( 'لطفاْ اعضاء تیم خود را وارد نمایید.' ); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>
<div class="clearfix"></div>