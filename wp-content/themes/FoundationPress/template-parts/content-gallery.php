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

<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'visuel-listing' );?>

<?php if (has_post_thumbnail()): ?>

<div class="column column-block">

<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry gallery'); ?>>

    <figure class="gallery-item" style="background-image: url('<?php echo $thumb['0'];?>')">
      <a class="gallery-link" href="<?php the_permalink(); ?>"></a>
        <figcaption>
      		<h5><?php the_title(); ?></a></h5>
          <p><?php the_category( ', ' ); ?></p>
      	</figcaption>
    </figure>

	<footer class="gallery-info">
    <div class="avatar">
      <img src="<?php the_field( 'avatar_user' ); ?>"/>
    </div>
    <div class="post-data view">
      <i class="fa fa-eye"></i>
      <p><?php the_field( 'views' ); ?></p>
    </div>
    <div class="post-data like">
      <i class="fa fa-thumbs-up"></i>
      <p><?php the_field( 'likes' ); ?></p>
    </div>
	</footer>

</div>

<?php endif; ?>

</div>
