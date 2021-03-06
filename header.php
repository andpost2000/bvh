<?php

/**
 * The header for our theme
 *
 * @package WordPress
 * @subpackage BVH
 * @since BVH 1.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="profile" href="https://gmpg.org/xfn/11" />
  <?php wp_head(); ?>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
  <script type="text/javascript" src="<?PHP echo get_theme_file_uri( '/js/lozad.min.js' ) ?>"></script>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="site">

    <header id="masthead" class="site-header">

      <div class="site-branding-container container">
        <?php get_template_part('template-parts/header/site', 'branding'); ?>
      </div><!-- .site-branding-container -->

      <?php if (is_singular() && twentynineteen_can_show_post_thumbnail()) : ?>
      <div class="site-featured-image">
        <?php
          twentynineteen_post_thumbnail();
          the_post();
          $discussion = !is_page() && twentynineteen_can_show_post_thumbnail() ? twentynineteen_get_discussion_data() : null;

          $classes = 'entry-header';
          if (!empty($discussion) && absint($discussion->responses) > 0) {
            $classes = 'entry-header has-discussion';
          }
          ?>
        <div class="<?php echo $classes; ?>">
          <?php get_template_part('template-parts/header/entry', 'header'); ?>
        </div><!-- .entry-header -->
        <?php rewind_posts(); ?>
      </div>
      <?php endif; ?>
    </header><!-- #masthead -->

    <div id="content" class="site-content">
