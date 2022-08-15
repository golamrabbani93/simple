        <!--//*call header -->
        <?php 
            /*
            Template Name:Blog Page
            */
         get_header(); ?>
         <!-- Banner Start Here -->
        <!-- Banner End Here -->

        <!--//*Call Blogs-part -->
        <div class="blogs">
            <div class="blog-left">
                <h4>Category:  <?php single_cat_title() ?></h4>
                <div class="blogs">
                    <?php get_template_part( 'Template-parts/content', 'blogs' );?>
                                    
                </div>
            </div>
                <?php get_sidebar(); ?>
        </div>

        <!--//*call Footer -->
       <?php get_footer(); ?> 