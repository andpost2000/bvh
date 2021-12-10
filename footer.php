<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage BVH
 * @since BVH 1.0
 */

?>

</div><!-- #content -->

<footer id="colophon" class="page-footer">
  <?php if ( has_nav_menu( 'footer' ) ) : ?>
  <nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'twentynineteen' ); ?>">
    <?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'menu_class'     => 'footer-menu',
							'depth'          => 1,
						)
					);
					?>
  </nav><!-- .footer-navigation -->
  <?php endif; ?>
  <div class="page-footer__info">
    <div class="page-footer__socials">
      <p><?php the_field('social_media_intro','options'); ?></p>

      <?php if( get_field('twitter','options') ): ?>
      <a href="<?php the_field('twitter','options'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
      <?php endif; ?>

      <?php if( get_field('facebook','options') ): ?>
      <a href="<?php the_field('facebook','options'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
      <?php endif; ?>

      <?php if( get_field('instagram','options') ): ?>
      <a href="<?php the_field('instagram','options'); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
      <?php endif; ?>

      <?php if( get_field('skype','options') ): ?>
      <a href="<?php the_field('skype','options'); ?>" target="_blank"><i class="fa fa-skype"></i></a>
      <?php endif; ?>

      <?php if( get_field('vk','options') ): ?>
      <a href="<?php the_field('vk','options'); ?>" target="_blank"><i class="fa fa-vk"></i></a>
      <?php endif; ?>

    </div>
    <div class="page-footer__contacts">
      <a href="tel:<?php the_field('phone','options'); ?>">T. <?php the_field('phone','options'); ?></a>
      <a href="mailto:<?php the_field('email','options'); ?>">E. <?php the_field('email','options'); ?></a>
    </div>
    <div class="page-footer__awards">
      <img src="<?php echo get_stylesheet_directory_uri();?>/images/booking-award-bella-vista-hotel.jpg">
    </div>
  </div>
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript" src="<?PHP echo get_theme_file_uri( '/js/slick.min.js' ) ?>"></script>
<script>
jQuery('.hero-slider__slick').slick({
  lazyLoad: 'ondemand',
  infinite: true,
  autoplay: false,
  autoplaySpeed: 5000,
  pauseOnsHover: true,
  pauseOnDotsHover: true,
  arrows: true,
  dots: true,
  slidesToShow: 1,
  slidesToScroll: 1
});


const observer = lozad('.lozad'); // lazy loads elements with default selector as '.lozad'
observer.observe();
</script>
<script type="text/javascript" src="<?PHP echo get_theme_file_uri( '/js/main.js' ) ?>"></script>
</body>

</html>
