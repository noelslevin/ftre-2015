<?php get_header(); ?>

<div class="site-content">
	<div class="content">
		<header class="primary-header">
		<?php if ( have_posts() ) : ?>
			<h1><?php printf( ( 'Search Results for: %s'), get_search_query()); ?></h1>
            </header>
			<?php while ( have_posts() ) : the_post(); ?>
			<h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<?php the_excerpt(); ?>
			<?php endwhile; ?>
		<?php else : ?>
        <h1>Nothing found</h1>
            </header>
        <p>Try searching for something else instead.</p>
        <?php get_search_form(); ?>
		
		<?php endif; ?>
		
	</div>

<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>