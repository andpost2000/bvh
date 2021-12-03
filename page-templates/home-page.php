<?php /* Template Name: Home-page */ ?>

<?php get_header(); ?>
<style>
.slick-hero-slider {
  height: 240px;
}

.slick-dotted.slick-slider {
  margin-bottom: 30px;
}

.slick-prev {
  left: 5px;
}

.slick-next {
  right: 5px;
}

.slick-arrow {
  z-index: 5;
}

.slick-track {
  height: 240px;
  overflow: hidden;
}

.slick-dots>li {
  margin: 0;
}

.singleRow {
  display: none;
}

</style>

<div class="container">

  <div class="hero-slider">

    <?php $images = get_field('header_slider'); if( $images ): ?>
    <div class="hero-slider__slick">

      <?php foreach( $images as $image ): ?>
      <img height="240" src="<?php echo $image['sizes']['large']; ?>" />
      <?php endforeach; ?>

    </div>
    <?php endif; ?>

    <div class="hero-slider__title">
      <h2><?php the_field('header_title') ?></h2>
      <p><?php the_field('header_subtitle') ?></p>
    </div>
  </div>

  <div class="col-md-12 no_padding clearfix welcomeRow singleRow">
    <div class="col-md-3 no_padding clearfix welcomeRowLeft singleColUneven">
      <div
        style="background-image:url('<?php the_field('welcome_image_top'); ?>'); background-size:cover; background-position:center center; height:275px; margin-bottom:20px;">
      </div>
      <div
        style="background-image:url('<?php the_field('welcome_image_bottom'); ?>'); background-size:cover; background-position:center center; height:275px;">
      </div>
    </div>
    <div class="col-md-9 no_padding clearfix welcomeRowRight singleColUneven">
      <div class="welcomeWrapper bg-logo">
        <h1><?php the_field('welcome_title'); ?></h1>
        <?php the_field('welcome_content'); ?>
        <img src="<?php echo get_stylesheet_directory_uri();?>/images/olive-branch.png">
        <div class="anchorMenuWrap">
          <h5><?php the_field('welcome_menu_title'); ?></h5>
          <div class="anchorMenu">
            <?php
								    if(get_field('welcome_menu')): ?>
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
            <?php endif;
								?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-12 no_padding clearfix roomRow singleRow">
    <div class="col-md-9 no_padding clearfix roomRowLeft singleColUneven"
      style="background-image:url('<?php $image = get_field('room_image'); echo($image['url']); ?>'); background-size:cover; background-position:center center; height:600px;">
    </div>
    <div class="col-md-3 no_padding clearfix roomRowRight singleColUneven">
      <h2><?php the_field('room_title'); ?></h2>

    </div>
  </div>

  <div class="col-md-12 no_padding clearfix aboutRow singleRow">
    <div class="col-md-6 no_padding clearfix aboutRowLeft my singleCol imageBoxCol"
      style="background-image:url('<?php $image = get_field('about_image'); echo($image['sizes']['large']); ?>'); background-size:cover; background-position:center center; /*height:600px;*/">
      <div class="imageContentWrap">
        <h3><?php the_field('about_image_title'); ?></h3>
        <a class="blueBtn"
          href="<?php the_field('about_link','options'); ?>"><?php echo __('Read more','bellavista'); ?></a>
      </div>
    </div>
    <div class="col-md-6 no_padding clearfix aboutRowRight my singleCol">
      <div class="contentWrapper bg-logo">
        <h3 class="greenTitle"><?php the_field('about_title'); ?></h3>
        <h4 class="yellowSubtitle"><?php the_field('about_subtitle'); ?></h4>
        <?php the_field('about_content'); ?>
        <a class="arrowLink"
          href="<?php the_field('about_link','options'); ?>"><?php echo __('Learn more','bellavista'); ?></a>
      </div>
    </div>
  </div>
  <div class="col-md-12 no_padding clearfix locationRow singleRow">
    <div class="col-md-12 no_padding clearfix locationRow singleColUneven imageBoxCol my"
      style="background-image:url('<?php $image = get_field('location_image_full'); echo($image['url']); ?>'); background-size:cover; background-position:center center; height:600px;">
      <div class="imageContentWrap my">
        <h4><?php the_field('location_image_title'); ?></h4>
        <a class="blueBtn"
          href="<?php the_field('location_link','options'); ?>"><?php echo __('Read more','bellavista'); ?></a>
      </div>
    </div>
  </div>
  <div class="col-md-12 no_padding clearfix locationRow singleRow">
    <div class="col-md-8 no_padding clearfix locationRowLeft singleColUneven">
      <div class="contentWrapper bg-logo my">
        <h3 class="greenTitle"><?php the_field('location_title'); ?></h3>
        <h4 class="yellowSubtitle"><?php the_field('location_subtitle'); ?></h4>
        <?php the_field('location_content'); ?>
        <a class="arrowLink my"
          href="<?php the_field('location_link','options'); ?>"><?php echo __('Learn More','bellavista'); ?></a>
      </div>
      <!-- <img src="<?php echo get_stylesheet_directory_uri();?>/images/olive-branch-2.png"> -->
    </div>
    <div class="col-md-4 no_padding clearfix locationRowRight singleColUneven imageBoxCol"
      style="background-image:url('<?php $image = get_field('location_image'); echo($image['sizes']['large']); ?>'); background-size:cover; background-position:center center; height:600px;">
    </div>
  </div>

  <div class="col-md-12 no_padding clearfix facilitiesRow singleRow">
    <div class="col-md-4 no_padding clearfix facilitiesRowLeft singleCol"
      style="background-image:url('<?php $image = get_field('facilities_image'); echo($image['sizes']['large']); ?>'); background-size:cover; background-position:center center; height:650px;">
    </div>
    <div class="col-md-4 no_padding clearfix facilitiesRowCenter singleCol">
      <div class="contentWrapper">
        <h3 class="greenTitle"><?php the_field('facilities_title'); ?></h3>
        <?php the_field('facilities_content'); ?>
      </div>
    </div>
    <div class="col-md-4 no_padding clearfix facilitiesRowRight singleCol">
      <div class="facilitiesList">
        <?php the_field('facilities_list'); ?>
      </div>
    </div>
  </div>

  <div class="col-md-12 no_padding clearfix breakfastRow singleRow">
    <div class="col-md-6 no_padding clearfix breakfastRowLeft singleColUneven imageBoxCol"
      style="background-image:url('<?php $image = get_field('breakfast_image'); echo($image['sizes']['large']); ?>'); background-size:cover; background-position:center center; height:600px;">
      <div class="imageContentWrap">
        <h3><?php the_field('breakfast_image_title'); ?></h3>
        <a class="blueBtn"
          href="<?php the_field('breakfast_link','options'); ?>"><?php echo __('Read more','bellavista'); ?></a>
      </div>
    </div>
    <div class="col-md-6 no_padding clearfix breakfastRowRight singleColUneven">
      <div class="contentWrapper bg-logo">
        <h3 class="greenTitle"><?php the_field('breakfast_title'); ?></h3>
        <?php the_field('breakfast_content'); ?>
        <a class="arrowLink"
          href="<?php the_field('breakfast_link','options'); ?>"><?php echo __('Learn More','bellavista'); ?></a>
      </div>
      <!-- <img src="<?php echo get_stylesheet_directory_uri();?>/images/lemon.png"> -->
    </div>
  </div>

  <div class="col-md-12 no_padding clearfix roomTabsHeader">
    <ul class="tab">
      <?php
					$type = 'room';
					$pageurl = get_permalink();
					$paged = (get_query_var('page')) ? get_query_var('page') : 1;
					$args=array(
					    'post_type' => $type,
					    'post_status' => 'publish',
					    'posts_per_page' => -1,
					    'paged' => $paged,
					    'orderby'    => 'date',
					    'order'  => 'DESC',
					);
					$my_query = null;
					$my_query = new WP_Query($args);
					if( $my_query->have_posts() ) { $i = 1;
					    while ($my_query->have_posts()) : $my_query->the_post();
					       	$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

      <?php if($i == 1) { ?>

      <a href="javascript:void(0)" class="tablinks active"
        onclick="openTab(event, 'tab<?php echo $i; ?>')"><?php the_title(); ?></a>

      <?php } else { ?>

      <a href="javascript:void(0)" class="tablinks"
        onclick="openTab(event, 'tab<?php echo $i; ?>')"><?php the_title(); ?></a>

      <?php } ?>

      <?php $i++; ?>

      <?php endwhile; }
					    wp_reset_query();  // Restore global post data stomped by the_post().
					?>
    </ul>
  </div>
  <div class="col-md-12 no_padding clearfix roomTabsRow">
    <?php
				$type = 'room';
				$pageurl = get_permalink();
				$paged = (get_query_var('page')) ? get_query_var('page') : 1;
				$args=array(
				    'post_type' => $type,
				    'post_status' => 'publish',
				    'posts_per_page' => -1,
				    'paged' => $paged,
				    'orderby'    => 'date',
				    'order'  => 'DESC',
				);
				$my_query = null;
				$my_query = new WP_Query($args);
				if( $my_query->have_posts() ) { $i = 1;
				    while ($my_query->have_posts()) : $my_query->the_post();
					$src = get_the_post_thumbnail_url( $post->ID, 'large'); ?>

    <?php if($i == 1) { ?>

    <div id="tab<?php echo $i; ?>" class="tabcontent" style="display: block!important;">

      <div class="col-md-12 no_padding clearfix singleRoomRow singleRow">
        <div class="col-md-6 no_padding clearfix singleRoomRowLeft singleColUneven">
          <?php if( get_field('price') ): ?>
          <div class="badgeIcon">
            <img class="badgeImg" src="<?php echo get_stylesheet_directory_uri();?>/images/badge-icon.png">
            <span class="badgePrice"><?php the_field('price'); ?>€</span>
          </div>
          <?php endif; ?>
          <div class="contentWrapper">
            <div class="roomIntro"><?php the_field('intro'); ?></div>
            <div class="roomContent"><?php the_field('content'); ?></div>
            <div class="roomFacilities"><?php the_field('room_facilities'); ?></div>
          </div>
        </div>
        <div class="col-md-6 no_padding clearfix singleRoomRight singleColUneven imageBoxCol"
          style="background-image:url('<?php echo $src; ?>'); background-size:cover; background-position:center center; /*height:600px;*/">
          <div class="imageContentWrap">
            <h4><?php the_title(); ?></h4>
            <a class="blueBtn"
              href="<?php the_field('request_form_link'); ?>"><?php echo __('Book Now','bellavista'); ?></a>
          </div>
        </div>
      </div>

    </div>

    <?php } else { ?>

    <div id="tab<?php echo $i; ?>" class="tabcontent" style="display: none;">

      <div class="col-md-12 no_padding clearfix singleRoomRow singleRow">
        <div class="col-md-6 no_padding clearfix singleRoomRowLeft singleColUneven">
          <?php if( get_field('price') ): ?>
          <div class="badgeIcon">
            <img class="badgeImg" src="<?php echo get_stylesheet_directory_uri();?>/images/badge-icon.png">
            <span class="badgePrice"><?php the_field('price'); ?>€</span>
          </div>
          <?php endif; ?>
          <div class="contentWrapper">
            <div class="roomIntro"><?php the_field('intro'); ?></div>
            <div class="roomContent"><?php the_field('content'); ?></div>
            <div class="roomFacilities"><?php the_field('room_facilities'); ?></div>
          </div>
        </div>
        <div class="col-md-6 no_padding clearfix singleRoomRight singleColUneven imageBoxCol"
          style="background-image:url('<?php echo $src; ?>'); background-size:cover; background-position:center center; height:600px;">
          <div class="imageContentWrap">
            <h4><?php the_title(); ?></h4>
            <a class="blueBtn"
              href="<?php the_field('request_form_link'); ?>"><?php echo __('Book Now','bellavista'); ?></a>
          </div>
        </div>
      </div>


    </div>

    <?php } ?>

    <?php $i++; ?>

    <?php endwhile; }
				    wp_reset_query();  // Restore global post data stomped by the_post().
			?>
  </div>

  <div class="col-md-12 no_padding clearfix homeFooter">
    <div class="col-md-12 no_padding clearfix doubleColTextGrid bg-logo">
      <h3><?php the_field('footer_title'); ?></h3>
      <div class="col-md-6 no_padding clearfix">
        <?php the_field('footer_content_left'); ?>
      </div>
      <div class="col-md-6 no_padding clearfix">
        <?php the_field('footer_content_right'); ?>
      </div>
    </div>
  </div>

  <?php get_template_part('footer-columns'); ?>

</div>


<?php get_footer(); ?>


<!-- 
<style>
.bx-wrapper img {
	margin: auto;
	width: 100%;
}
.bx-wrapper .bx-viewport {
	box-shadow: none;
	border: none;
	background: transparent;
}
.bx-wrapper {
    border: 0;
    box-shadow:none;
	left:5px;
	position:relative;
}
.bx-wrapper .bx-pager.bx-default-pager a {
	background: #fff !important;
}
.bx-wrapper .bx-pager.bx-default-pager .active {
	background: #5d81b8 !important;
}

.tabcontent {
    -webkit-animation: fadeEffect 1.5s;
    animation: fadeEffect 1.5s; /* Fading effect takes 1 second */
}
@-webkit-keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}
@keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}
@media screen and (max-width: 1700px) {
	.single_slide {
		height: unset !important;
		padding-bottom: 50%;
	}
	.bx-viewport {
		height: unset !important;
		padding-bottom: 50%;
	}
}
@media screen and (max-width: 1275px) {
	.newGalleryGrid {
		margin-left: 5%;
		max-width: 55%;
	}
}
@media screen and (max-width: 1000px) {
	.newGalleryGrid {
		margin-left: 5%;
		max-width: 90%;
		position: relative;
		top: 0 !important;
		transform: none;
	}
	.header_bottom {
		padding-right: 45px;
	}
	.video-container.newGalleryWrap {
		padding: 50px 0px !important;
		height: auto;
		margin: 0;
	}
	.single_slide {
		height: unset !important;
		padding-bottom: 66%;
	}
	.bx-viewport {
		height: unset !important;
		padding-bottom: 66%;
	}
}
@media screen and (max-width: 420px) {
	.header_bottom {
		padding-right: 15px;
	}
}
</style>

<script type="text/javascript">
jQuery(document).ready(function($) {
 $('.bxslider').bxSlider({
 	    mode: 'fade',
 	  	pause: 5000,
 	  	speed: 1000,
        pager : true,
	  	controls : false,
	  	autoHover: false,
	  	auto: true,
	  	infiniteLoop: true,
        onSliderLoad: function(){
 $("li.single_slide").css("visibility", "visible");
 }
 });
});
</script>

<script>
function openTab(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

<style type="text/css">

	.html5-video-player.ytp-hide-controls.ytp-hide-info-bar.iv-module-loaded.playing-mode.ytp-autohide {
	  background-color: #fff!important;
}
</style> -->
