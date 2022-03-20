<div class="san-pham-noi-bat">
    <div class="san-pham">
        <?php
	$cat = 'san-pham';
	$args = array( 
		'post_type' => 'product',
		'posts_per_page' => 6, 
		'product_cat' => $cat,
	); 
?>
        <?php $getposts = new WP_query( $args);?>
        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
        <?php global $product; ?>
        <div class="item-product">
            <a href="<?php the_permalink(); ?>">
                <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'thumnail') ); ?>
            </a>
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        </div>
        <?php endwhile; wp_reset_postdata();
?>
    </div>

</div>