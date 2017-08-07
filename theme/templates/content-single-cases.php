<?php while (have_posts()) : the_post(); ?>
<div class="container">
	<div class="row">
		<div class="col text-center">
			<div class="cases-title"><span class="text-brand">Case:</span><?php the_title(); ?></div>
		</div>
	</div>
</div>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
