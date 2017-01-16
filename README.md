# Pagination for Wordpress
Add a pagination to your page

##Install

Install via Bower

```
bower install -save https://github.com/marcelbadua/wp-pagination.git
```

Download

```
https://github.com/marcelbadua/wp-pagination/archive/master.zip
```

##Usage

Include in your `function.php`

```php
require get_stylesheet_directory() . '/bower_components/wp-pagination/wp-pagination.php';
```

Add in your template

```php
if ( function_exists('wp_pagination') ) {
	wp_pagination();
}
```

###Custom WP_Query

add this before your wordpress loop

```php
if ( get_query_var('paged') ) {
   	$paged = get_query_var('paged');
} else if ( get_query_var('page') ) {
   	$paged = get_query_var('page');
} else {
   	$paged = 1;
}
```

on your `new WP_Query` arguments

```php	
$my_args = array(
  	'post_type' => 'my-post-type',
  	'posts_per_page' => 6,
  	'paged' => $paged
);

$my_query = new WP_Query( $my_args );

if ( function_exists('wp_pagination') ) {
  	wp_pagination( $my_query );
}
```


###Source
Thanks

1. http://www.bobz.co/bootstrap-pagination-in-wordpress-theme/
2. https://codex.wordpress.org/Function_Reference/paginate_links

Add me a star if you find this useful, or you are using it in your wordpress project. Thanks!
