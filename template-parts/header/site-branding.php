<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage BVH
 * @since BVH 1.0
 */
?>
<div class="site-branding">

  <?php if( has_custom_logo() ): the_custom_logo(); ?>
  <?php else: ?>
  <?php bloginfo('name'); ?>
  <?php endif; ?>

  <?php if ( has_nav_menu( 'menu-1' ) ) : ?>
  <div id="menu-main-wrap" class="menu-main-wrap">
    <nav id="site-navigation" class="main-navigation menu-main-item"
      aria-label="<?php esc_attr_e( 'Top Menu', 'twentynineteen' ); ?>">

      <button id="menu-main-button" class="menu-main-button" type="button" aria-lable='menu button'>
        <i class="fa fa-bars"></i>
        <span>Menu</span>
      </button>
      <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_class'     => 'menu-list',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				)
			);
			?>
    </nav><!-- #site-navigation -->

    <div class="menu-main-item">
      <button id="check-in-button" class="menu-main-button" type="button" aria-lable='menu button'>
        <i class="fa fa-calendar"></i>
        <span>Check in</span>
      </button>
      <?php get_template_part('template-parts/sections/template', 'datapicker'); ?>
    </div>

    <div class="sideContent">
      <div class="menu-main-item">
        <button class="menu-main-button" type="button" aria-lable='menu button'>
          <i class="fa fa-hotel"></i>
          <span>Rooms</span>
        </button>
        <?php get_template_part('template-parts/sections/template', 'social-share'); ?>
      </div>
      <div class="menu-main-item">
        <a class="blogBtn menu-main-button" href="<?php the_field('blog', 'options'); ?>">
          <i class="fa fa-rss"></i>
          <span>Blog</span>
        </a>
      </div>
      <div class="menu-main-item">
        <button class="menu-main-button" type="button" aria-lable='menu button'>
          <i class="fa fa-globe"></i>
          <span>Languages</span>
        </button>
        <div class="langSelect"><?php do_action('icl_language_selector'); ?></div>
      </div>
    </div>
  </div>
  <?php endif; ?>

  <?php if ( has_nav_menu( 'social' ) ) : ?>
  <nav class="social-navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentynineteen' ); ?>">
    <?php
			wp_nav_menu(
				array(
					'theme_location' => 'social',
					'menu_class'     => 'social-links-menu',
					'link_before'    => '<span class="screen-reader-text">',
					'link_after'     => '</span>' . twentynineteen_get_icon_svg( 'link' ),
					'depth'          => 1,
				)
			);
			?>
  </nav><!-- .social-navigation -->
  <?php endif; ?>
</div><!-- .site-branding -->
