<?php add_filter( 'woocommerce_enqueue_styles', '__return_false' );

//product card
remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
add_action( 'woocommerce_shop_loop_item_title', function() {
    global $product;
    echo '<h4>
            <a href="'. $product -> get_permalink() .'">'. $product-> get_title() .'</a>
        </h4>';
} );

remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
add_filter( 'woocommerce_product_get_rating_html', function($html, $rating, $count) {
    $html = '';
		/* translators: %s: rating */
		$label = sprintf( __( 'Rated %s out of 5', 'woocommerce' ), $rating );
		$html  = '<div class="star-rating" role="img" aria-label="' . esc_attr( $label ) . '">' . wc_get_star_rating_html( $rating, $count ) . '</div>';

	return $html;
}, 10, 5 );

//custom shortcode
add_shortcode( 'shop_recent_products', 'recent_products' );
function recent_products( $atts ){
    global $woocommerce_loop, $woocommerce;

    extract( shortcode_atts( array(
        'limit'      => '12',
        'orderby'       => 'date',
        'order'         => 'desc'
        ), $atts ) );

    // Get products on sale
    $product_ids_on_sale = woocommerce_get_product_ids_on_sale();

    $args = array(
        'posts_per_page'=> $limit,
        'orderby'       => $orderby,
        'order'         => $order,
        'post_status'   => 'publish',
        'post_type'     => 'product',
    );

    ob_start();

    $products = new WP_Query( $args );

    if ( $products->have_posts() ) : ?>

        <?php while ( $products->have_posts() ) : $products->the_post(); ?>

            <?php wc_get_template_part( 'content', 'recent-product' ); ?>

        <?php endwhile; // end of the loop. ?>

    <?php endif;

    wp_reset_postdata();

    return '<div class="woocommerce"><div class="owl-carousel owl-theme owl-carousel-full"> ' . ob_get_clean() . ' </div></div>';
}
//show cart count without reload
add_filter( 'woocommerce_add_to_cart_fragments', function($fragments) {
    $fragments['span.cart-badge'] = '
    <span class="badge text-bg-warning cart-badge bg-warning rounded-circle">
        ' . WC()->cart->get_cart_contents_count() . ' </span>';
    return $fragments;
});