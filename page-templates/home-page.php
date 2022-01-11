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
      <div><img height="250" width='360' data-lazy="<?php echo $image['sizes']['desktop']; ?>" /></div>
      <?php endforeach; ?>

    </div>
    <?php endif; ?>

    <div class="hero-slider__title">
      <h2><?php the_field('header_title') ?></h2>
      <p><?php the_field('header_subtitle') ?></p>
    </div>
  </div>

  <div class="single-row quiz-row">
    <h2>The Book-Launch Quiz</h2>
    <p>To celebrate the launch of our book, When the Gods Came to Benitses, we have a special quiz with free holidays in Corfu up for grabs!</p>
    <p>For each of the 12 chapters, there will be 7 questions with 1 winner randomly chosen for each chapter. The 12 winners get 7 nights free at the Bella Vista Hotel with an all-you-can-eat buffet breakfast included!</p>
    <p>We’ve included a few excerpts below that you may be able to get your answers from. There might be some questions that require you to read the whole chapter, though.</p>
    <p>You can purchase the first chapter, The Birth of Anthea, on its own here.</p>
    <a href="#">[Buy First Chapter]</a>
    <p>Or you can get the whole book here.</p>
    <a href="#">[Buy the Book]</a>
    <p><i>Remember, there will be eleven more quizzes where the book might come in handy...</i></p>
    <h4>Excerpt 1</h4>
    <p>“There weren’t many places Zeus could have a half-naked nymph on his lap without Hera threatening to kill them both. Benitses was one of those rare gems. Hera had no idea it existed, and that was just the way Zeus liked it.</p>
    <p>Of course, escaping his headache of a wife wasn’t the only reason Zeus found Benitses so appealing. He only had to look at the clear water and the friendly people to feel like he was in Elysium. He could taste the potential. He’d already proven it could make money by setting up a little place called Zeus on the Beach. It had the four S’s in abundance: sun, sea, sand and sex. It was impossible not to make money.”</p>
    <h4>Excerpt 2</h4>
    <p>“A large fish in an onion, garlic and spicy tomato sauce stared up at him. Could this night get any better? Zeus shovelled a forkful into his mouth and his shoulders sagged. “Mmm…” He used his fork to point at the plate of bourdeto. “This… this is perfection.”</p>
    <p>Poseidon went to take a bite of his own, but paused. He opened his mouth to speak, then paused again. “Have you seen Kerkyra today?””</p>
    <h4>Excerpt 3</h4>
    <p>“Zeus had experienced pain this severe only once before, when he birthed Athena, the goddess of wisdom, arts and war. Last time, Hephaestus had relieved him of his torment, but now, Poseidon was his only hope.</p>
    <p>The sea god towered above him, trident in hand. “Hold still,” he said.</p>
    <p>“You’re going to do it with that?”</p>
    <button id="start-quiz-btn" class="btn btn--blue">Start quiz</button>

    <div class="quiz-row__popup">
    <button id="close-quiz-btn" class="quiz-row__popup-close"></button>
      <?php echo do_shortcode('[WATU 1]') ?>
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
    <div class="location-row__left image-box-col">
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

  <div class="benitses-row single-row">
    <div class="benitses-row__left">
      <h3 class="title"><?php the_field('location_title'); ?></h3>
      <h4 class="subtitle"><?php the_field('location_subtitle'); ?></h4>
      <?php the_field('location_content'); ?>
      <a class="arrowLink"
        href="<?php the_field('location_link','options'); ?>"><?php echo __('Learn More','bellavista'); ?></a>
      <!-- <img class="lozad" data-src="<?php echo get_stylesheet_directory_uri();?>/images/olive-branch-2.png"> -->
    </div>
    <div class="benitses-row__right">
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
