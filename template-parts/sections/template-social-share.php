<?php
/**
 * Datapicker
 *
 * @package WordPress
 * @subpackage BVH
 * @since BVH 1.0
 */

?>
<div class="menu-main-item socialShareRow my">
  <button class="socialCall my" onclick="interactShareMy()">Share</button>
  <div class="socialShareWrap my" id="socialShareCls">
    <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink() ?>" target="_blank">
      <i class="fa fa-facebook"></i>
    </a>
    <a
      href="mailto:?Subject=Corfu Next | <?php the_title(); ?> &amp;Body=You%20might%20be%20interested!%20 <br/><?php the_permalink() ?>">
      <i class="fa fa-envelope"></i>
    </a>
    <a href="https://twitter.com/intent/tweet?text=Bella Vista - <?php the_title(); ?>&hashtags=bellavistahotel&url=<?php the_permalink() ?>"
      target="_blank">
      <i class="fa fa-twitter"></i>
    </a>
    <!-- <a href="https://plus.google.com/share?url=<?php the_permalink() ?>" target="_blank">
		                <i class="fa fa-google-plus"></i>
		            </a> -->
    <a href="http://vk.com/share.php?url=<?php the_permalink(); ?>" target="_blank">
      <i class="fa fa-vk"></i>
    </a>
  </div>
</div>
