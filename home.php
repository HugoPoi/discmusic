<?php
/*
 * View articles list
 *
 */
  query_posts(array(
    'post__not_in' => get_option( 'sticky_posts' )
  ));
get_header(); ?>
<main class="container-fluid articles-list">
<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'content', 'article' );
				?>

			<?php endwhile; ?>
<?php endif; ?>
</main>
<?php get_footer(); ?>
