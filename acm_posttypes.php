<?php
    /*
    Plugin Name: Post Types
    Description: A simple plugin which holds all custom post types for TSSN
    Version: 1.0
    Author: Andrew Maxwell
    Author URI: http://www.andrewcmaxwell.com
    */
    
    
    // New Post Type - Soccer - Premiere League
add_action('init', 'soccer_pleague');
 
function soccer_pleague()
{
    $labels = array(
        'name' => _x('Soccer - Premiere League', 'post type general name'),
        'singular_name' => _x('Soccer Premiere League Item', 'post type singular name'),
        'add_new' => _x('Add New', 'Soccer Premiere League item'),
        'add_new_item' => __('Add New Soccer Premiere League Item'),
        'edit_item' => __('Edit Soccer Premiere League Item'),
        'new_item' => __('New Soccer Premiere League Item'),
        'view_item' => __('View Soccer Premiere League Item'),
        'search_items' => __('Search Soccer Premiere League'),
        'not_found' =>  __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );
 
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        //'menu_icon' => get_stylesheet_directory_uri() . '/article16.png',
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','editor','thumbnail','excerpt','custom-fields','comments','revisions','page-attributes')
      ); 
 
    register_post_type( 'soccer_pleague' , $args );
}
register_taxonomy('spl_categories', array('soccer_pleague'), array('hierarchical' => true, 'label' => 'Categories', 'singular_label' => 'Category', 'rewrite' => true, 'show_in_nav_menus' => true, 'show_ui' => true));

// New Post Type - Soccer - Major League Soccer
add_action('init', 'soccer_mls');
 
function soccer_mls()
{
    $labels = array(
        'name' => _x('Soccer - MLS', 'post type general name'),
        'singular_name' => _x('Soccer MLS', 'post type singular name'),
        'add_new' => _x('Add New', 'Soccer MLS item'),
        'add_new_item' => __('Add New Soccer MLS Item'),
        'edit_item' => __('Edit Soccer MLS Item'),
        'new_item' => __('New Soccer MLS Item'),
        'view_item' => __('View Soccer MLS Item'),
        'search_items' => __('Search MLS League'),
        'not_found' =>  __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );
 
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        //'menu_icon' => get_stylesheet_directory_uri() . '/article16.png',
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','editor','thumbnail','excerpt','custom-fields','comments','revisions','page-attributes')
      ); 
 
    register_post_type( 'soccer_MLS' , $args );
}
register_taxonomy('smls_categories', array('soccer_mls'), array('hierarchical' => true, 'label' => 'Categories', 'singular_label' => 'Category', 'rewrite' => true, 'show_in_nav_menus' => true, 'show_ui' => true));


// New Post Type - Soccer - World Cup
add_action('init', 'soccer_worldcup');
 
function soccer_worldcup()
{
    $labels = array(
        'name' => _x('Soccer - World Cup', 'post type general name'),
        'singular_name' => _x('Soccer World Cup Item', 'post type singular name'),
        'add_new' => _x('Add New', 'Soccer World Cup item'),
        'add_new_item' => __('Add New Soccer World Cup Item'),
        'edit_item' => __('Edit Soccer World Cup Item'),
        'new_item' => __('New Soccer World Cup Item'),
        'view_item' => __('View Soccer World Cup Item'),
        'search_items' => __('Search Soccer World Cup'),
        'not_found' =>  __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );
 
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        //'menu_icon' => get_stylesheet_directory_uri() . '/article16.png',
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','editor','thumbnail','excerpt','custom-fields','comments','revisions','page-attributes')
      ); 
 
    register_post_type( 'soccer_worldcup' , $args );
}

register_taxonomy('swc_categories', array('soccer_worldcup'), array('hierarchical' => true, 'label' => 'Categories', 'singular_label' => 'Category', 'rewrite' => true, 'show_in_nav_menus' => true, 'show_ui' => true));

// New Post Type - Soccer - Euro Cup
add_action('init', 'soccer_eurocup');
 
function soccer_eurocup()
{
    $labels = array(
        'name' => _x('Soccer - Euro Cup', 'post type general name'),
        'singular_name' => _x('Soccer Euro Cup Item', 'post type singular name'),
        'add_new' => _x('Add New', 'Soccer Euro Cup item'),
        'add_new_item' => __('Add New Soccer Euro Cup Item'),
        'edit_item' => __('Edit Soccer Euro Cup Item'),
        'new_item' => __('New Soccer Euro Cup Item'),
        'view_item' => __('View Soccer Euro Cup Item'),
        'search_items' => __('Search Soccer Euro Cup'),
        'not_found' =>  __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );
 
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        //'menu_icon' => get_stylesheet_directory_uri() . '/article16.png',
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','editor','thumbnail','excerpt','custom-fields','comments','revisions','page-attributes')
      ); 
 
    register_post_type( 'soccer_eurocup' , $args );
}

register_taxonomy('sec_categories', array('soccer_eurocup'), array('hierarchical' => true, 'label' => 'Categories', 'singular_label' => 'Category', 'rewrite' => true, 'show_in_nav_menus' => true, 'show_ui' => true));


// New Post Type - Soccer - OLY
add_action('init', 'soccer_oly');
 
function soccer_oly()
{
    $labels = array(
        'name' => _x('Soccer - OLY', 'post type general name'),
        'singular_name' => _x('Soccer OLY Item', 'post type singular name'),
        'add_new' => _x('Add New', 'Soccer OLY item'),
        'add_new_item' => __('Add New Soccer OLY Item'),
        'edit_item' => __('Edit Soccer OLY Item'),
        'new_item' => __('New Soccer OLY Item'),
        'view_item' => __('View Soccer OLY Item'),
        'search_items' => __('Search Soccer OLY'),
        'not_found' =>  __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );
 
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        //'menu_icon' => get_stylesheet_directory_uri() . '/article16.png',
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','editor','thumbnail','excerpt','custom-fields','comments','revisions','page-attributes')
      ); 
 
    register_post_type( 'soccer_oly' , $args );
}

register_taxonomy('soly_categories', array('soccer_oly'), array('hierarchical' => true, 'label' => 'Categories', 'singular_label' => 'Category', 'rewrite' => true, 'show_in_nav_menus' => true, 'show_ui' => true));

// New Post Type - Baseball - MLB
add_action('init', 'baseball_mlb');
 
function baseball_mlb()
{
    $labels = array(
        'name' => _x('Baseball - MLB', 'post type general name'),
        'singular_name' => _x('Baseball MLB Item', 'post type singular name'),
        'add_new' => _x('Add New', 'Baseball MLB item'),
        'add_new_item' => __('Add New Baseball MLB Item'),
        'edit_item' => __('Edit Baseball MLB Item'),
        'new_item' => __('New Baseball MLB Item'),
        'view_item' => __('View Baseball MLB Item'),
        'search_items' => __('Search Baseball MLB'),
        'not_found' =>  __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );
 
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        //'menu_icon' => get_stylesheet_directory_uri() . '/article16.png',
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','editor','thumbnail','excerpt','custom-fields','comments','revisions','page-attributes')
      ); 
 
    register_post_type( 'baseball_mlb' , $args );
}

register_taxonomy('basemlb_categories', array('baseball_mlb'), array('hierarchical' => true, 'label' => 'Categories', 'singular_label' => 'Category', 'rewrite' => true, 'show_in_nav_menus' => true, 'show_ui' => true));

// New Post Type - Baseball - NCAA
add_action('init', 'baseball_ncaa');
 
function baseball_ncaa()
{
    $labels = array(
        'name' => _x('Baseball - NCAA', 'post type general name'),
        'singular_name' => _x('Baseball NCAA Item', 'post type singular name'),
        'add_new' => _x('Add New', 'Baseball NCAA item'),
        'add_new_item' => __('Add New Baseball NCAA Item'),
        'edit_item' => __('Edit Baseball NCAA Item'),
        'new_item' => __('New Baseball NCAA Item'),
        'view_item' => __('View Baseball NCAA Item'),
        'search_items' => __('Search Baseball NCAA'),
        'not_found' =>  __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );
 
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        //'menu_icon' => get_stylesheet_directory_uri() . '/article16.png',
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','editor','thumbnail','excerpt','custom-fields','comments','revisions','page-attributes')
      ); 
 
    register_post_type( 'baseball_ncaa' , $args );
}

register_taxonomy('basencaa_categories', array('baseball_ncaa'), array('hierarchical' => true, 'label' => 'Categories', 'singular_label' => 'Category', 'rewrite' => true, 'show_in_nav_menus' => true, 'show_ui' => true));
?>
