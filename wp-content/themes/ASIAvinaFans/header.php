<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="">
  <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
  <header>
    <?php 
    wp_nav_menu( array(
      'theme_location'  => '',
      'menu'            => 'menu-header',
      'container'       => 'div',
      'container_class' => 'menu-{menu-slug}-container',
      'container_id'    => '',
      'menu_class'      => 'menu',
      'menu_id'         => '',
      'echo'            => true,
      'fallback_cb'     => 'wp_page_menu',
      'before'          => '',
      'after'           => '',
      'link_before'     => '',
      'link_after'      => '',
      'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
      'depth'           => 0,
      'walker'          => '',
    ) );
    ?>
    <?php echo do_shortcode('[gtranslate]'); ?>
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('search') ) : ?><?php endif; ?>
  </header>
