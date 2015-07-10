# wp-bs-pagination
Wordpress Bootstrap Pagination based on http://www.bobz.co/bootstrap-pagination-in-wordpress-theme/

bower install -save https://github.com/marcelbadua/wp-bs-pagination.git

require get_stylesheet_directory() . '/bower_components/wp-bs-pagination/wp-bs-pagination.php';

  <?php
    if ( function_exists('vb_pagination') ) {
  vb_pagination();
}
?>
