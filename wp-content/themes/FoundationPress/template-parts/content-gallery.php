<?php
/**
 * The default template for displaying gallery
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<div class="column column-block">

<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
  <a href="<?php the_permalink(); ?>">
    <figure class="gallery-item">
      <figcaption>
    		<h4><?php the_title(); ?></a></h4>
    		<?php foundationpress_entry_meta(); ?>
    	</figcaption>
    <?php get_template_part('template-parts/cover'); ?>
    </figure>
  </a>
	<footer>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
</div>

</div>
