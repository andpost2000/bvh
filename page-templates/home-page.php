<?php /* Template Name: Home-page */ ?>

<?php get_header(); ?>
<style>
.singleRow {
  display: none;
}

</style>

<div class="container">

  <div class="hero-slider">

    <?php $images = get_field('header_slider'); if( $images ): ?>
    <div class="hero-slider__slick">

      <?php foreach( $images as $image ): ?>
      <div><img height="250" width='360' data-lazy="<?php echo $image['sizes']['mobile']; ?>" /></div>
      <?php endforeach; ?>

    </div>
    <?php endif; ?>

    <div class="hero-slider__title">
      <h2><?php the_field('header_title') ?></h2>
      <p><?php the_field('header_subtitle') ?></p>
    </div>
  </div>

  <div class="welcome-row single-row">
    <div class="welcome-row__left">
      <?php $image = get_field('welcome_image_top'); ?>
      <img class="lozad" width='1000' height='667' data-src="<?php echo $image['sizes']['mobile']; ?>"
        alt="<?php echo $image['alt'] ?>">
      <?php $image = get_field('welcome_image_bottom'); ?>
      <img class="lozad" width='1000' height='667' data-src="<?php echo $image['sizes']['mobile']; ?>"
        alt="<?php echo $image['alt'] ?>">
    </div>
    <div class="welcome-row__right">
      <img class="lozad" data-src="<?php echo get_stylesheet_directory_uri();?>/images/olive-branch.png" alt="olive branch" width='143'
        height='150'>
      <h1><?php the_field('welcome_title'); ?></h1>
      <?php the_field('welcome_content'); ?>
      <div class="welcome-row__anchor-menu">
        <h5><?php the_field('welcome_menu_title'); ?></h5>
        <div class="anchorMenu">
          <?php if(get_field('welcome_menu')): ?>
          <?php while(the_repeater_field('welcome_menu')): ?>
          <?php
											  	$post_object = get_sub_field('menu_item');
											  	if( $post_object ):
											    $post = $post_object;
											    setup_postdata( $post );
											    ?>

          <a class="arrowLink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

          <?php wp_reset_postdata(); ?>
          <?php endif; ?>

          <?php endwhile; ?>
          <?php endif;?>
        </div>
      </div>
    </div>
  </div>

  <div class="room-row single-row">
    <div class="room-row__left">
      <?php $image = get_field('room_image'); ?>
      <img class="lozad" width='768' height='512' data-src="<?php echo $image['sizes']['mobile']; ?>"
        alt="<?php echo $image['alt'] ?>">
    </div>
    <div class="room-row__right">
      <h2><?php the_field('room_title'); ?></h2>
    </div>
  </div>

  <div class="about-row single-row">
    <div class="about-row__left image-box-col">
      <?php $image = get_field('about_image'); ?>
      <img class="lozad" width='768' height='512' data-src="<?php echo $image['sizes']['mobile']; ?>"
        alt="<?php echo $image['alt'] ?>">
      <div class="image-box-col__content">
        <h3><?php the_field('about_image_title'); ?></h3>
        <a class="btn btn--blue"
          href="<?php the_field('about_link','options'); ?>"><?php echo __('Read more','bellavista'); ?></a>
      </div>
    </div>
    <div class="about-row__right">
      <h3 class="title"><?php the_field('about_title'); ?></h3>
      <h4 class="subtitle"><?php the_field('about_subtitle'); ?></h4>
      <?php the_field('about_content'); ?>
      <a class="arrowLink"
        href="<?php the_field('about_link','options'); ?>"><?php echo __('Learn more','bellavista'); ?></a>
    </div>
  </div>

  <div class="location-row single-row">
    <div class="about-row__left image-box-col">
      <?php $image = get_field('location_image_full'); ?>
      <img class="lozad" width='768' height='512' data-src="<?php echo $image['sizes']['mobile']; ?>"
        alt="<?php echo $image['alt'] ?>">
      <div class="image-box-col__content">
        <h3><?php the_field('location_image_title'); ?></h3>
        <a class="btn btn--blue"
          href="<?php the_field('location_link','options'); ?>"><?php echo __('Read more','bellavista'); ?></a>
      </div>
    </div>
  </div>

  <div class="location-row single-row">
    <div class="location-row__left">
      <h3 class="title"><?php the_field('location_title'); ?></h3>
      <h4 class="subtitle"><?php the_field('location_subtitle'); ?></h4>
      <?php the_field('location_content'); ?>
      <a class="arrowLink"
        href="<?php the_field('location_link','options'); ?>"><?php echo __('Learn More','bellavista'); ?></a>
      <!-- <img class="lozad" data-src="<?php echo get_stylesheet_directory_uri();?>/images/olive-branch-2.png"> -->
    </div>
    <div class="location-row__right">
      <?php $image = get_field('location_image'); ?>
      <img class="lozad" width='768' height='512' data-src="<?php echo $image['sizes']['mobile']; ?>"
        alt="<?php echo $image['alt'] ?>">
    </div>
  </div>

  <div class="facilities-row single-row">
    <div class="facilities-row__left">
      <?php $image = get_field('facilities_image'); ?>
      <img class="lozad" width='768' height='512' data-src="<?php echo $image['sizes']['mobile']; ?>"
        alt="<?php echo $image['alt'] ?>">
    </div>
    <div class="facilities-row__center">
      <h3 class="title"><?php the_field('facilities_title'); ?></h3>
      <?php the_field('facilities_content'); ?>
    </div>
    <div class="facilities-row__right">
      <div class="facilitiesList">
        <?php the_field('facilities_list'); ?>
      </div>
    </div>
  </div>

  <div class="breakfast-row single-row">
    <div class="breakfast-row__left image-box-col">
      <?php $image = get_field('breakfast_image'); ?>
      <img class="lozad" width='768' height='512' data-src="<?php echo $image['sizes']['mobile']; ?>"
        alt="<?php echo $image['alt'] ?>">
      <div class="image-box-col__content">
        <h3><?php the_field('breakfast_image_title'); ?></h3>
        <a class="btn btn--blue"
          href="<?php the_field('breakfast_link','options'); ?>"><?php echo __('Read more','bellavista'); ?></a>
      </div>
    </div>
    <div class="breakfast-row__right">
      <h3 class="title"><?php the_field('breakfast_title'); ?></h3>
      <?php the_field('breakfast_content'); ?>
      <a class="arrowLink"
        href="<?php the_field('breakfast_link','options'); ?>"><?php echo __('Learn More','bellavista'); ?></a>
    </div>
  </div>

  <div class="home-footer">
    <h3><?php the_field('footer_title'); ?></h3>
    <?php the_field('footer_content_left'); ?>
    <?php the_field('footer_content_right'); ?>
  </div>

  <?php get_template_part('template-parts/sections/template', 'footer-columns'); ?>

</div>


<?php get_footer(); ?>
