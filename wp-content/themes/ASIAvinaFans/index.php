<?php 
/*
Template Name: Home
 */
?>

<?php get_header(); ?>

<!-- 10 sản phẩm nổi bật -->
<?php get_template_part( 'template-part/san-pham-noi-bat' ); ?>

<!-- Slider image -->
<div class="slider">
	<?php if ( function_exists( 'soliloquy' ) ) { soliloquy( 'image-slider', 'slug' ); }?>
</div>

<!-- Chứng chỉ công nhận -->
<div class="khucGiua">
	<?php get_template_part( 'template-part/quality-verification' ) ?>
</div>

<?php wp_footer(); ?>