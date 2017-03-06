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

<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry gallery'); ?>>
    <figure class="gallery-item">
      <a class="gallery-link" href="<?php the_permalink(); ?>"></a>
        <figcaption>
      		<h4 class="text-center"><?php the_title(); ?></a></h4>
          <p class="text-center"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></p>
      	</figcaption>
    <?php get_template_part('template-parts/cover'); ?>
    </figure>
	<footer class="gallery-info">
    <img class="avatar" src="<?php the_field( 'avatar_user' ); ?>"/>
    <div class="post-data">
      <i class="fa fa-eye view"></i>
      <p><?php the_field( 'views' ); ?></p>
    </div>
    <div class="post-data like">
      <i class="fa fa-thumbs-up"></i>
      <p><?php the_field( 'likes' ); ?></p>
    </div>
	</footer>
</div>

</div>
