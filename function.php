<?php
// Do NOT include the opening php tag.
// Exclude categories from blog homepage.
add_action( 'pre_get_posts', 'genesis_exclude_categories' );
function genesis_exclude_categories( $query ) {
	if( $query->is_main_query() && $query->is_home() ) {
		$query->set( 'cat', '-5,-7' );
	}
}
