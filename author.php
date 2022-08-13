        <!--//*call header -->
        <?php 
            /*
            Template Name:Blog Page
            */
         get_header(); ?>
         <!-- Banner Start Here -->
        <!-- Banner End Here -->

        <!--//*Call Blogs-part -->
        <!-- Blog Start Here -->
<div class="blogs">
    <div class="blog-left">
        <h4>Author page</h4>
        <div class="blogs">
        <?php get_template_part( 'Template-parts/content', 'blogs' );?>
                            
        </div>
    </div>
        <?php get_sidebar(); ?>
</div>
       
        

        <!--//*call Footer -->
       <?php get_footer(); ?> 