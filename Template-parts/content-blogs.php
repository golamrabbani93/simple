<!-- Blog Start Here -->
<div class="blogs">
    <div class="blog-left">
        <h4>latest blog</h4>
        <div class="blogs">

        <?php 
         
            if(have_posts()){
                while(have_posts()){
                    the_post();
                
                ?>
                    <div class="single-blog">
                        <h4><a href="<?php the_permalink();?>"> <?php the_title(); ?></a></h4>
                         <?php echo the_post_thumbnail('', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']); ?>
                        <div class="blog-meta">
                            <a href=""><?php  the_author_posts_link(); ?></a><a href="">3 July</a><a href="">Food</a>
                        </div>
                        <p> <?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink();?>">read more</a>
                    </div>
                <?php
                wp_reset_postdata();
                }
              }
         ?>                     
        </div>
    </div>
        <?php get_sidebar(); ?>
</div>
<!-- Blog End Here -->
