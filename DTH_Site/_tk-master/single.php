<?php
/**
 * The Template for displaying all single posts.
 *
 * @package _tk
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="row no-gutter"><?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
			the_post_thumbnail("full", array('class' => 'nosides'));	} ?></div>
<div class="row">
	<div class="col-sm-12 col-md-10 pad-more">
		<?php get_template_part( 'content', 'single' ); ?>
	</div>

	<div class="col-sm-12 col-md-2">
		<?php _tk_content_nav( 'nav-below' ); ?>
		<?php get_sidebar(); ?>
	</div>
</div>

		<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() )
				comments_template();
		?>

	<?php endwhile; // end of the loop. ?>

<div class="row">
	<div class="col-sm-12 col-md-12">
		<?php get_footer(); ?>
	</div>
</div>
