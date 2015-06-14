<article class="row">
  <div class="col-md-10 col-md-offset-1 article-content">
    <?php the_post_thumbnail('thumbnail', array( 'class' => 'img-responsive pull-left' )); ?>
    <h1><?php the_title(); ?></h1>
    <?php the_excerpt(); ?>
  </div>
</article>
