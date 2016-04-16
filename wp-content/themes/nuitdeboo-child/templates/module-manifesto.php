<?php
/*
module "manifesto"
*/
// $page = get_page_by_title( 'Manifeste' );
$page = get_field('homepage_manifesto', 'option');

$include = get_pages('include='.$page->ID);
if ( $include[0]->post_title ){
	$content = apply_filters('the_content',$include[0]->post_content);
	$title = apply_filters('the_title',$include[0]->post_title);
	echo '<h2>'.$title.'</h2>';
	echo $content;
}
else{
	echo 'Please go to admin > options > Manifesto and select the page you want to display (a page must be created before)';
}
?>