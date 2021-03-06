<?php /* Template Name: Footer Columns-Template */ ?>





<div class="footer-columns">

  <?php if(get_field('footer_repeater','options')): ?>
  <?php while(the_repeater_field('footer_repeater','options')): ?>

  <div class="footer-columns__item">
    <a href="<?php the_sub_field('link','options'); ?>">
      <img class="lozad" width='720' height='1000' data-src="<?php the_sub_field('image','options'); ?>"
        alt="<?php the_sub_field('title','options'); ?>">
      <h5><?php the_sub_field('title','options'); ?></h5>
    </a>

    <div class="footer-columns__hover-content">
      <?php the_sub_field('content','options'); ?>
      <a class="arrowLink arrowLink--white lozad"
        href="<?php the_sub_field('link','options'); ?>"><?php echo __('Learn More','bellavista'); ?></a>
    </div>
  </div>

  <?php endwhile; ?>
  <?php endif; ?>

</div>
