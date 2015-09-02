# Bootstrap 3 pagination for Wordpress
Add a bootstrap 3 compatible pagination to your page

Install via Bower

	bower install -save https://github.com/marcelbadua/wp-bs-pagination.git

Include in your function.php

	require get_stylesheet_directory() . '/bower_components/wp-bs-pagination/wp-bs-pagination.php';

Add in your template

  	<?php
    	if ( function_exists('wp_bs_pagination') ) {
  		wp_bs_pagination();
		}
	?>

###Custom WP_Query

add this vefore your wordpress loop

	if ( get_query_var('paged') ) {
   		$paged = get_query_var('paged');
	} else if ( get_query_var('page') ) {
   		$paged = get_query_var('page');
	} else {
   		$paged = 1;
	}

add this to your 'new WP_Query' arguments
	
	'paged' => $paged

add this to your LESS

	.page-numbers  {
		&.current {
			z-index: 2;
			color: #fff;
			cursor: default;
			pointer-events: none;
			background-color: @brand-primary;
			border-color: @brand-primary;
		}	
	}
###Source

Thanks

1. http://www.bobz.co/bootstrap-pagination-in-wordpress-theme/
2. https://codex.wordpress.org/Function_Reference/paginate_links
