        <!--//*call header -->
        <?php 
            /*
            Template Name:Blog Page
            */
         get_header(); ?>
         <!-- Banner Start Here -->
        <!-- Banner End Here -->

        <!--//*Call Blogs-part -->
        <?php get_template_part( 'Template-parts/content', 'blogs' );?>

        <!--//*call Footer -->
       <?php get_footer(); ?> 