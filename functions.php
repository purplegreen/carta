<?php

function apparenza() {
	wp_enqueue_style('custom-fonts' , '//fonts.googleapis.com/css?family=Work+Sans|Noto+Serif+TC');
	wp_enqueue_style('footfootfoot' , '//use.fontawesome.com/releases/v5.3.1/css/all.css');
	wp_enqueue_style('style' , get_stylesheet_uri());
}
add_action('wp_enqueue_scripts' , 'apparenza');


// Theme Logo
	
	add_theme_support( 'custom-logo' );

// Theme setup

function myWordPress_setup(){

//Navigation Menus

register_nav_menus(array(
	'primary' => __( 'Pimary Menu'),
	'footer' => __( 'Footer Menu'),
		));



// Add excerp
	add_post_type_support( 'page', 'excerpt' );

}

add_action('after_setup_theme','myWordPress_setup');


// Add a New Menu Location

function extra_setup() {
register_nav_menu ('primary mobile', __( 'Navigation Mobile', 'dehlix_simple' ));
}
add_action( 'after_setup_theme', 'extra_setup' );


// svg

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');



//Return all authors who have at least one article
function contributors() {
	
	global $wpdb;
	$post_status = 'publish';
	$post_type = 'post';
	$post_author1 = 1089;
	$post_author2 = 1390;

	$arrLatestAuthors = $wpdb->get_col($wpdb->prepare("SELECT DISTINCT post_author FROM $wpdb->posts WHERE post_status = %s AND post_type = %s AND post_author NOT IN (%s, %s) ORDER BY post_date DESC LIMIT 0,20", $post_status, $post_type, $post_author1, $post_author2)); 
	
	if ($arrLatestAuthors) {
		foreach ($arrLatestAuthors as $latestAuthor) {
			$desc = wp_trim_words(get_the_author_meta('user_description', $latestAuthor), 25, ' [...]'); 
			echo '<p class="latest">'."\n";
			echo '<a class="photo" href="'.get_bloginfo('url').'/?author='.$latestAuthor.'">';
			if (function_exists('userphoto')) { 
				echo userphoto($latestAuthor);
			}
			echo '</a>'."\n";
			echo $desc.'<p id="contributorname"><a href="'.get_bloginfo('url').'/?author='.$latestAuthor.'">'.get_the_author_meta('display_name', $latestAuthor).'</a></p>'."\n";
			echo '</p>'."\n";
		}
	}
	
	$arrFilterLatestAuthors = implode(",", $arrLatestAuthors);

	$argsOtherAuthors = array(
		'blog_id'      => $GLOBALS['blog_id'],
		'exclude'      => $arrLatestAuthors,
		'meta_key' 		=> 'last_name',
		'orderby' 		=> 'meta_value',
		'order' 		=> 'ASC',
		'count_total'  => false
	);
	// 'role'         => array('Author', 'Editor', 'Administrator'),
		

	$arrOtherAuthors = new WP_User_Query($argsOtherAuthors);
	if (!empty($arrOtherAuthors->results)) {
		echo '<div class="authorlist">'."\n";
		foreach ($arrOtherAuthors->results as $author) {
			//$user = new WP_User($author->ID);
			//if ($author->roles[0] == 'author' || $author->roles[0] == 'editor') {
			//if (count_user_posts($author->ID) != 0 and user_can($author->ID, 'level_1') and $author->ID != '1089') {
			//if ($user->has_cap('edit_published_posts') and count_user_posts($author->ID) != 0 and user_can($author->ID, 'level_1') and $author->ID != '1089') {
			//var_dump( $author);
			if (count_user_posts($author->ID) != 0 and $author->roles[0] == 'author' and $author->ID != '1089') {
				echo '<a class="authorlist" href="'.get_bloginfo('url').'/author/'.$author->user_nicename.'/">'.$author->display_name.'</a> ';
			}
		}
		echo '</div>'."\n";
	}
}

function contribshort() {
	
	global $wpdb;
	$post_status = 'publish';
	$post_type = 'post';
	$post_author1 = 1089;
	$post_author2 = 1390;

	$arrLatestAuthors = $wpdb->get_col($wpdb->prepare("SELECT DISTINCT post_author FROM $wpdb->posts WHERE post_status = %s AND post_type = %s AND post_author NOT IN (%s, %s) ORDER BY post_date DESC LIMIT 0,26", $post_status, $post_type, $post_author1, $post_author2)); 
	
	if ($arrLatestAuthors) {
		foreach ($arrLatestAuthors as $latestAuthor) {
			echo '<li>'."\n";
			echo '<a href="'.get_bloginfo('url').'/?author='.$latestAuthor.'">'.get_the_author_meta('display_name', $latestAuthor).'</a>'."\n";
			echo '</li>'."\n";
		}
	}
	
}


//ACF Option Page
if( function_exists('acf_add_options_page') ) {
 
	$option_page = acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title' 	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability' 	=> 'edit_posts',
		'redirect' 	=> false
	));
 
}