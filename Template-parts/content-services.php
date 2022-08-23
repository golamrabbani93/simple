<!-- Services Start Here -->
<div class="services" id="services">
    <div class="title">
        <h4>exclusive services</h4>
    </div>
    <div class="service fix">
     <?php 
     
        $servicesArgs=array(
            'post_type'     =>'services',
            'posts_per_page'=>3,
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