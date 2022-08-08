<?php get_header(); ?>

<div class="site-content">
	<div class="content">
		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h1 class="archive-title"><?php echo single_cat_title(); ?></h1>
                <?php if ( category_description() ) : ?>
				    <div class="archive-meta"><?php echo category_description(); ?></div>
			     <?php endif; ?>
			</header>
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="archive-box">
            <h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            <?php the_post_thumbnail( 'large'); ?>
			<?php the_excerpt(); ?>
            <?php edit_post_link('Edit', '<p>', '</p>'); ?>
        </div>
			<?php endwhile; ?>
        <div class="paginate">
            <?php echo paginate_links(); ?>
        </div>
		<?php endif; ?>
	</div>
    
    <?php get_sidebar(); ?>
    
</div>

<?php get_footer(); ?>