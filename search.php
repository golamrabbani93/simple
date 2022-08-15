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
            <div class="search">
                 <?php get_search_form() ?>
            </div>
            <div class="blog-left">
                
                <div class="blogs">
                    <?php
                            $s=get_search_query();
                            $args = array(
                                            's' =>$s
                                        );
                                // The Query
                            $the_query = new WP_Query( $args );
                            if ( $the_query->have_posts() ) {
                                    _e("<h2 style='font-weight:bold;color:#000'>Search Results for: ".get_query_var('s')."</h2>");
                                    while ( $the_query->have_posts() ) {
                                    $the_query->the_post();
                                           
                                    get_template_part( 'Template-parts/content', 'blogs' );      
                                
                                    }
                                    wp_reset_postdata();
                                }else{
                            ?>
                                    <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
                                    <div class="alert alert-info">
                                    <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
                                    </div>
                    <?php  } ?>
                                    
                </div>
            </div>
                <?php get_sidebar(); ?>
        </div>

        <!--//*call Footer -->
       <?php get_footer(); ?> 