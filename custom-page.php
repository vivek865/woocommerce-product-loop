<?php
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => 12
			);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) : $loop->the_post();
				wc_get_template_part( 'content', 'product' );
			endwhile;
		} else {
			echo __( 'No products found' );
		}
		wp_reset_postdata();
	?>
// for multiple category
<?php 	$args = array('tax_query' => array(
        'relation' => 'OR',
        array(
            'taxonomy' => 'product_cat',
            'field' => 'slug',
            'terms' => 'activity-trackers'
        ),
        array(
            'taxonomy' => 'product_cat',
            'field' => 'slug',
            'terms' => 'sports-fitness'
        )
    ),
    'post_type' => 'product',
			'posts_per_page' => 12
			);
			$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) : $loop->the_post();
				wc_get_template_part( 'content', 'product' );
			endwhile;
		} else {
			echo __( 'No products found' );
		}
		wp_reset_postdata();
	?>

//https://www.gavick.com/blog/wp_query-woocommerce-products
