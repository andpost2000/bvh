<?php
/**
 * Datapicker
 *
 * @package WordPress
 * @subpackage BVH
 * @since BVH 1.0
 */

?>

<div class="socialIcons">
  <?php if (get_field('twitter', 'options')) : ?>
  <a href="<?php the_field('twitter', 'options'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
  <?php endif; ?>

  <?php if (get_field('facebook', 'options')) : ?>
  <a href="<?php the_field('facebook', 'options'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
  <?php endif; ?>

  <?php if (get_field('instagram', 'options')) : ?>
  <a href="<?php the_field('instagram', 'options'); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
  <?php endif; ?>

  <?php if (get_field('skype', 'options')) : ?>
  <a href="<?php the_field('skype', 'options'); ?>" target="_blank"><i class="fa fa-skype"></i></a>
  <?php endif; ?>

  <?php if (get_field('vk', 'options')) : ?>
  <a href="<?php the_field('vk', 'options'); ?>" target="_blank"><i class="fa fa-vk"></i></a>
  <?php endif; ?>
</div>
