 <?php 


 //*Add Theme Support

 function simple_setup(){
    //!Load Text Domain
    load_theme_textdomain('simple');

    // !Register Navigation
    register_nav_menus(array(
      'main-menu'=>__('Main Menu','Simple'),
      'footer-menu'=>__('Footer Menu','Simple'),
    ));

 }

 add_action('after_setup_theme','simple_setup');
 
 //*create css and javascript file hook

 function style_js(){
   /*
     *css File Call starts here
     */
    //*font-awesome
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0.0', "all" );

    //*owl-carousel
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0.0', "all" );
    //*owl-carousel

    wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), '1.0.0', "all" );

    //*project main stylesheet
    wp_enqueue_style( 'project-main-stylesheet', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', "all" );

    //*Responsive-stylesheet
    wp_enqueue_style( 'Responsive-stylesheet', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', "all" );

    //*Wordpress-stylesheet
    wp_enqueue_style( 'wordpress-stylesheet', get_stylesheet_uri() );
    /*
     *css File Call Ends here
     */

    /*
     *javascript Call starts here
     */
     //*owl-carousel-js
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true );
    
     //*main-js
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );
    /*
     *javascript Call ends here
     */

 }
add_action('wp_enqueue_scripts', 'style_js');


//! Register Sidebar Starts Here

function simple_sidebar() {
  //*Main Sidebar
  register_sidebar( array(
      'name'          => __( 'Main Sidebar', 'simple' ),
      'id'            => 'sidebar-1',
      'description'   => __( 'This Is a Main Side Bar.', 'simple' ),
      'before_widget' => '<div class="single-sidebar">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4>',
      'after_title'   => '</h4>',
  ) );
}
add_action( 'widgets_init', 'simple_sidebar' );

//! Register Sidebar Ends Here