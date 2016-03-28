<?php 

function wordpress_resources() {
    
    wp_enqueue_style('style' , get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'wordpress_resources');

//Navigations menu

register_nav_menus(array(
    'primary' => __( 'Primary Menu'),
	'footer' => __( 'Footer Menu'),
    'header' => __( 'Header menu'),
    ));



//does page has children
function has_children() {
  global $post;
  
  $pages = get_pages('child_of=' . $post->ID);
  
  return count($pages);
}

function get_ancestor_id() {
	global $post;
	if($post->post_parent) {
	$ancestors = array_reverse(get_post_ancestors($post->ID));
	return $ancestors[0];
	}
	return $post->ID;
}
// Child page conditional
function is_tree($pid) {      // $pid = The ID of the page we're looking for pages underneath
	global $post;         // load details about this page
	if(is_page()&&($post->post_parent==$pid||is_page($pid))) 
               return true;   // we're at the page or at a sub page
	else 
               return false;  // we're elsewhere
};
//add featured image support
function wordpress_feature() {
    
add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 150, 84, true ); 
}
add_action('after_setup_theme', 'wordpress_feature');
//first_image
function first_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches[1][0];

  if(empty($first_img)) {
    $first_img = "/path/to/default.png";
  }
  return $first_img;
}
//Add category tag to pages
function add_taxonomies_to_pages() {
 register_taxonomy_for_object_type( 'post_tag', 'page' );
 register_taxonomy_for_object_type( 'category', 'page' );
 }
add_action( 'init', 'add_taxonomies_to_pages' );
 if ( ! is_admin() ) {
 add_action( 'pre_get_posts', 'category_and_tag_archives' );
 
 }
function category_and_tag_archives( $wp_query ) {
$my_post_array = array('post','page');
 
 if ( $wp_query->get( 'category_name' ) || $wp_query->get( 'cat' ) )
 $wp_query->set( 'post_type', $my_post_array );
 
 if ( $wp_query->get( 'tag' ) )
 $wp_query->set( 'post_type', $my_post_array );
}
//sidebar
	if(function_exists('register_sidebar'))
	{
		register_sidebar();
	}
	
//add theme support or post format support
add_theme_support( 'post-formats', array(
		'video'
	) );
//Search only Posts
function SearchFilter($query) {
if ($query->is_search) {
$query->set('post_type', 'post');
}
return $query;
}

add_filter('pre_get_posts','SearchFilter');
//custom-permalinks

//excerpt length
function custom_excerpt_length( $length ) {
	return 99;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 99 );
//UPLOAD FILE
@ini_set( 'upload_max_size' , '200M' );
@ini_set( 'post_max_size', '200M');
@ini_set( 'max_execution_time', '300' );
//Meta-Custom filds - page comments support
function add_field_support_theme() {
	add_post_type_support( 'post', 'custom-fields' );
	add_post_type_support( 'page', 'custom-fields' );
	add_post_type_support( 'page', 'comments' );
}
add_action( 'init', 'add_field_support_theme' );
//Post Views
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
	$counts = ($count + 100);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $counts.' Views';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
//home url next page url
function url(){
  return sprintf(
    "%s://%s%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME'],
    $_SERVER['REQUEST_URI']
  );
}

function home_url_ss(){
	return get_home_url().'/';
}
//Search
function fb_change_search_url_rewrite() {
	if ( is_search() && ! empty( $_GET['s'] ) ) {
		wp_redirect( home_url( "/search/" ) . urlencode( get_query_var( 's' ) ) );
		exit();
	}	
}
add_action( 'template_redirect', 'fb_change_search_url_rewrite' );