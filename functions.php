 <?php 


 //*Add Theme Support

 function simple_setup(){
    //!add Title Dynamic
    add_theme_support('title-tag');
    //!Suport Post thumbnails
    add_theme_support('post-thumbnails');
    //!Suport Services Post thumbnails
    add_theme_support('simple_services');


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

/*
 * Register a custom post type called "Services".
 *
 * @see get_post_type_labels() for label keys.
 */

function simple_services() {
    $labels = array(
        'name'                  => __( 'Services', 'Post type general name', 'simple' ),
        'singular_name'         => __( 'Service', 'Post type singular name', 'simple' ),
        'menu_name'             => __( 'Services', 'Admin Menu text', 'simple' ),
        'name_admin_bar'        => __( 'Service', 'Add New on Toolbar', 'simple' ),
        'add_new'               => __( 'Add New', 'simple' ),
        'add_new_item'          => __( 'Add New Service', 'simple' ),
        'new_item'              => __( 'New Service', 'simple' ),
        'edit_item'             => __( 'Edit Service', 'simple' ),
        'view_item'             => __( 'View Service', 'simple' ),
        'all_items'             => __( 'All Services', 'simple' ),
        'search_items'          => __( 'Search Services', 'simple' ),
        'parent_item_colon'     => __( 'Parent Services:', 'simple' ),
        'not_found'             => __( 'No Services found.', 'simple' ),
        'not_found_in_trash'    => __( 'No Services found in Trash.', 'simple' ),
        'featured_image'        => __( 'Service Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'simple' ),
        'set_featured_image'    => __( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'simple' ),
        'remove_featured_image' => __( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'simple' ),
        'use_featured_image'    => __( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'simple' ),
        'archives'              => __( 'Service archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'simple' ),
        'insert_into_item'      => __( 'Insert into Service', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'simple' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Service', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'simple' ),
        'filter_items_list'     => __( 'Filter Services list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'simple' ),
        'items_list_navigation' => __( 'Services list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'simple' ),
        'items_list'            => __( 'Services list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'simple' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Service custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'services' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail','excerpt' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true,
        'menu_icon'               =>'dashicons-schedule'
    );
      
    register_post_type( 'services', $args );
}
add_action( 'init', 'simple_services' );