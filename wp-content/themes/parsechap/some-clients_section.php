<section class="some-clients mt-5 pt-3">
    <div class="container">
        <div class="row d-flex justify-content-center mb-1">
            <h2 class="d-flex justify-content-center aos-item" data-aos="fade-in">برخی از مشتریان ما</h2>
        </div>
    </div>
    <div class="container d-flex justify-content-center mb-3">
        <div class="row my-3 pt-2">
            <div class="col-md-12">
                <?php
                $the_query = new WP_Query( array( 'post_type' => 'somecustomers','cat' =>'6','posts_per_page'=>'12' ) ); ?>
                <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <span class="logo-clients" data-toggle="tooltip" data-placement="bottom" title="<?php the_title(); ?>">
                     <?php the_post_thumbnail ('some_claints_img' , array('class' => 'img-fluid')); ?>
                </span>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php esc_html_e( 'متاسفانه هیچ مشتری در سایت درج نشده است.' ); ?></p>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>