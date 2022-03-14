<?php 
/*
Template Name: Home
 */
?>

<?php get_header(); ?>

<div class="san-pham">
	<ul>
		<?php $args = array( 
			'hide_empty' => 0,
			'taxonomy' => 'product_cat',
			'orderby' => 'id',
			'parent' => 0
		); 
		$cates = get_categories( $args ); 
		foreach ( $cates as $cate ) {  ?>
			<li>
				<a href="<?php echo get_term_link($cate->slug, 'product_cat'); ?>"><?php echo $cate->name; ?></a>
			</li>
		<?php } ?>
	</ul>
</div>

<!-- Slider image -->
<div class="slider">
	<?php if ( function_exists( 'soliloquy' ) ) { soliloquy( 'image-slider', 'slug' ); }?>
</div>

<!-- Ở đây nè -->
<div class="khucGiua">
	<?php get_template_part( 'template-part/quality-verification' ) ?>
</div>

<?php wp_footer(); ?>