<?php

if ( ! function_exists( 'wp_pagination' ) ) :

	function wp_bs_pagination( $query=null ) {
	
		global $wp_query;
		$query = $query ? $query : $wp_query;
		$big = 999999999;

		$paginate = paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'type' => 'array',
			'total' => $query->max_num_pages,
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'prev_text' => __('&laquo;'),
			'next_text' => __('&raquo;'),
		));

		if ($query->max_num_pages > 1) : 
			echo '<ul class="pagination">';
				foreach ( $paginate as $page ) {
					echo '<li>' . $page . '</li>';
				}
			echo '</ul>';
		endif;
	}

endif; //wp_pagination
