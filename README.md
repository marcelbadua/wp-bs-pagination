# wp-bs-pagination
Wordpress Bootstrap Pagination based on http://www.bobz.co/bootstrap-pagination-in-wordpress-theme/

Install via Bower

	bower install -save https://github.com/marcelbadua/wp-bs-pagination.git

Include in your function.php

	require get_stylesheet_directory() . '/bower_components/wp-bs-pagination/wp-bs-pagination.php';

Add in your template

  	<?php
    	if ( function_exists('vb_pagination') ) {
  		vb_pagination();
		}
	?>
