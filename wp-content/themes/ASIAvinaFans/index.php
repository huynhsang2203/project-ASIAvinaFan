<?php 
/*
Template Name: Home
 */
?>

<?php get_header(); ?>
<!-- Slider image -->
<div class="slider">
	<?php if ( function_exists( 'soliloquy' ) ) { soliloquy( 'image-slider', 'slug' ); }?>
</div>

<!-- Ở đây nè -->
<div class="khucGiua">
	<?php get_template_part( 'template-part/quality-verification' ) ?>
</div>

<?php wp_footer(); ?>