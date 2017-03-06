<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div id="page-full-width" role="main">
	<article class="main-content">

		<div class="row">
			<div class="column">
				<div class="filtrer">
					<div class="stacked-for-medium button-group">
					  <a class="button">Projects</a>
					  <a class="button hollow button secondary">All Creative Fields</a>
					  <a class="button hollow button secondary">Most Appreciated</a>
					  <a class="button hollow button secondary">Worldwide</a>
					</div>
				</div>
			</div>
		</div>

	<?php if ( have_posts() ) : ?>

		<div class="row small-up-1 medium-up-2 xmedium-up-3 large-up-4 xxlarge-up-6">

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'template-parts/content-gallery', get_post_format() ); ?>
					<?php endwhile; ?>

					<?php else : ?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; // End have_posts() check. ?>

		</div>

		<div class="row">
			<div class="small-12 small-centered medium-4 column">
				<a class="button expanded" href="#">More...</a>
			</div>
		</div>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php
		if ( function_exists( 'foundationpress_pagination' ) ) :
			foundationpress_pagination();
		elseif ( is_paged() ) :
		?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
			</nav>
		<?php endif; ?>

	</article>

</div>

<?php get_footer();
