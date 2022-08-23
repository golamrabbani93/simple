        <!--//*call header -->
         <?php 
            /*
            Template Name:Home Page
            */
         get_header(); ?>
         <!-- Banner Start Here -->
         <div class="banner owl-carousel">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/slide1.jpg" alt="Banner">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/slide2.jpg" alt="Banner">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/slide3.jpg" alt="Banner">
        </div>
        <!-- Banner End Here -->

        <!-- //*Call Services-part -->
        <?php get_template_part( 'Template-parts/content', 'services' );?>

        <!--//*Call Blogs-part -->
        <div class="blogs">
            <div class="blog-left">
               <h4>Recent-Post</h4>
               <div class="blogs">
               <!-- //!custom query -->
                <?php 
                
                $args=array(
                  'post_type'=>'post',
                  'posts_per_page'=>'2',

                );
                $query=new WP_Query($args);
                // The Loop
                     if ( $query->have_posts()) {
                        while ( $query->have_posts() ) {
                           $query->the_post();?>
                              <div class="single-blog">
                                    <h4><a href="<?php the_permalink();?>"> <?php the_title(); ?></a></h4>
                                    <?php echo the_post_thumbnail('', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']); ?>
                                    <div class="blog-meta">
                                       <a href=""><?php  the_author_posts_link(); ?></a><a href=""> <?php the_date('F d') ?></a><a href=""> <?php the_category() ?></a>
                                    </div>
                                    <p> <?php the_excerpt(); ?></p>
                                    <a href="<?php the_permalink();?>">read more</a>
                              </div>
                  <?php }
                       
                     } 
                     /* Restore original Post Data */
                     wp_reset_postdata();
                
                ?>
                                    
               </div>
            </div>
               <?php get_sidebar(); ?>
         </div>

        <!--//*call Footer -->
       <?php get_footer(); ?> 