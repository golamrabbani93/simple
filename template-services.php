<?php 
 /*
  Template Name:Services Page
  */
 get_header();
 ?>

        <!-- Page Banner Start Here -->
        <div class="page-banner" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/page-bannar.jpg');">
            <h2> <?php wp_title() ?></h2>
        </div>
        <!-- Page Banner End Here -->
        
        <!-- Services Start Here -->
        <div class="services">
            <div class="title">
                <h4>exclusive services</h4>
            </div>
            <div class="service service-page fix">
            <?php 
                    
                    $servicesArgs=array(
                        'post_type'     =>'services',
                        'posts_per_page'=>6,
                        'order'         =>'ASC'

                    );
                    $serviceQuery=new WP_Query($servicesArgs);
                
                ?>
                <?php if ( $serviceQuery->have_posts() ){

                    while ( $serviceQuery->have_posts() ) : $serviceQuery->the_post(); ?>
                        <div class="single-service">
                            <h4> <?php the_title() ?></h4>
                            <?php echo the_post_thumbnail();?>
                            <?php the_excerpt() ?>
                            <a href="<?php the_permalink()?>" class="btn">read more</a>
                        </div>

                    <?php endwhile; 




                    wp_reset_postdata(); 
                }  ?>
            </div>
        </div>
        <!-- Services End Here -->

 <?php get_footer(); ?>