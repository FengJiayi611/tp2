<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme4w4
 */

?>

<article class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <?php the_post_thumbnail('thumbnail'); ?>
    </div>
    <div class="flip-card-back">
      <h1><a href="<?php echo get_permalink();?>"><?php the_title();?></a></h1> 
      <p></p> 
      <p></p>
    </div>
  </div>
</article>
