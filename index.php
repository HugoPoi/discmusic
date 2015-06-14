<?php
  query_posts(array(
    'post__in' => get_option( 'sticky_posts' )
  ));
get_header(); ?>
<main class="container-fluid home">
<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'content', 'home' );
				?>

			<?php endwhile; ?>
<?php endif; ?>
</main>
<?php get_footer(); ?>
