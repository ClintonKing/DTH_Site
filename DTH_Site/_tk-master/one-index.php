<?php
/**
 * @package _tk
 */
?>


<?php // Styling Tip!

// Want to wrap for example the post content in blog listings with a thin outline in Bootstrap style?
// Just add the class "panel" to the article tag here that starts below.
// Simply replace post_class() with post_class('panel') and check your site!
// Remember to do this for all content templates you want to have this,
// for example content-single.php for the post single view. ?>

<!--more specific query posts than what's in index.php-->


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<p>THIS IS one-index.PHP</p>
	</header>

<!--THIS CODE POSTS THE FEATURE IMAGES FOR THE POSTS-->
<a class="thumbnail" href="<?php the_permalink(); ?>" rel="bookmark"><?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	the_post_thumbnail("small");	} ?></a>


	<?php if ( is_search() || is_archive() ) : // Only display Excerpts for Search and Archive Pages ?>

	<?php endif; ?>

	<footer class="entry-meta">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', '_tk' ) );
				if ( $categories_list && _tk_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( 'Posted in %1$s', '_tk' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', '_tk' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php printf( __( 'Tagged %1$s', '_tk' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', '_tk' ), __( '1 Comment', '_tk' ), __( '% Comments', '_tk' ) ); ?></span>
		<?php endif; ?>

		<?php edit_post_link( __( 'Edit', '_tk' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
