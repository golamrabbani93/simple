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
        <h4>Author page</h4>
        <div class="blogs">
        <?php get_template_part( 'Template-parts/content', 'blogs' );?>
                            
        </div>
    </div>
        <?php get_sidebar(); ?>
</div>

        <!--//*call Footer -->
       <?php get_footer(); ?> 