<?php get_header(); ?>

<div class="site-content">
	<div class="content">
	
	<?php while ( have_posts() ) : the_post(); ?>
	
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
            <p><?php the_date(); ?> by <?php the_author_posts_link(); ?><br />
                <?php the_tags(); ?>
            </p>
		</header>

		<div class="entry-content">
            <?php the_post_thumbnail( 'medium' ); ?>
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->

	</article><!-- #post -->
        
        <?php wp_list_comments( $args ); ?>
	<?php comments_template( '', true ); ?>

<?php endwhile; ?>
	
	</div>

    <?php get_sidebar(); ?>
    
</div>

<?php get_footer(); ?>