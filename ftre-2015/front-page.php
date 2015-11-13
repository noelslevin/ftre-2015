<?php get_header(); ?>

<div class="site-content">
    
    <div class="home-page-section">
	<?php getLatestPod('https://audioboom.com/channels/4225404.rss', 'ftre-premier-league.jpg', 'https://feeds.feedburner.com/rookeryend', 'https://itunes.apple.com/gb/podcast/from-the-rookery-end/id374798846'); ?> 
	</div>
    
    <div class="home-page-section">
    <!--<h2>Stanley Grouse's artwork</h2>-->
        <div class="stanley-grouse">
            <?php getArtwork(); ?>
        </div>
	</div>
    
	<div class="home-page-section">
		<?php getLatestPod('https://audioboom.com/channels/1472379.rss', 'ftre-shorts.jpg', 'https://feeds.feedburner.com/rookeryend', 'https://itunes.apple.com/gb/podcast/from-the-rookery-end/id374798846'); ?>
	</div>
	
</div>

<?php get_footer(); ?>