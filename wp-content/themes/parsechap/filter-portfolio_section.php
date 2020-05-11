<section class="filter-portfolio">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <h2 class="d-flex justify-content-center">برخی از نمونه کارها</h2>
        </div>
        <div class="row float-right mr-1 mt-3 mr-md-5 mt-md-5" id="portfolio" data-aos="fade-left"  data-aos-duration="800" data-aos-easing="ease-in-out">
            <div class="col-lg-12">
                <ul id="portfolio-flters">
                    <li data-filter=".filter-adds, .filter-card, .filter-logo, .filter-boom, .filter-baner" class="filter-active">همه
                    </li>
                    <li data-filter=".filter-adds">هدایای تبلیغاتی</li>
                    <li data-filter=".filter-card">کارت ویزیت</li>
                    <li data-filter=".filter-logo">طراحی لوگو</li>
                    <li data-filter=".filter-boom">چاپ روی بوم نقاشی</li>
                    <li data-filter=".filter-baner">طراحی بنر</li>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row mr-2 mt-2 mr-md-5" id="portfolio-wrapper" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="600">
            <?php
            $the_query = new WP_Query( array( 'post_type' => 'portfolio','posts_per_page'=>'15' ) ); ?>
            <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="col-4 col-lg-2 col-md-2 portfolio-item <?php the_field('selectpotfolio'); ?>">
                        <a href="assets/images/filter/adds-1.jpg" data-toggle="lightbox" data-max-width="600" data-gallery="example-gallery" data-title="نمونه کارهای چاپ پارسه" data-footer="A custom footer text" data-gallery="remoteload" dideo-checked="true">
                            <?php the_post_thumbnail ('filter_posts_img' , array('class' => 'img-fluid')); ?>
                            <div class="details">
                                <h4><?php the_field('typeofworks'); ?></h4>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php esc_html_e( 'متاسفانه محتوایی پیدا نشد' ); ?></p>
            <?php endif; ?>
        </div>
</section>