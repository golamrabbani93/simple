        <!--//*call header -->
        <?php 
            /*
            Template Name:Blog Page
            */
         get_header(); ?>
         <!-- Banner Start Here -->
        <!-- Banner End Here -->

       <!-- Blog Start Here -->
            <div class="blogs">
                <div class="blog-left">
                    <div class="blogs">
                        <div class="single-blog">
                            
                            <?php echo the_post_thumbnail('', ['class' => 'img-responsive responsive--full img-width', 'title' => 'Feature image']); ?>
                            <h4><a href="<?php the_permalink();?>"> <?php the_title(); ?></a></h4>
                            <div class="blog-meta author">
                            <a href=""><?php echo get_the_author(); ?></a><a href=""> <?php echo the_date('F d') ?></a><a href=""> <?php the_category() ?></a>
                            </div>
                            <div class="single-content"> <?php the_content('',); ?></div>
                            
                        </div>                  
                    </div>    
                </div>
        <?php get_sidebar(); ?>
</div>
        <!--//*call Footer -->
       <?php get_footer(); ?> 