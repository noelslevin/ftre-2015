<?php get_header(); ?>

<div class="site-content">
    
    <div class="home-page-section">
	<?php getLatestPod('https://audioboom.com/channels/4225416.rss', 'ftre-premier-league.jpg', 'https://feeds.feedburner.com/rookeryend', 'https://itunes.apple.com/gb/podcast/from-the-rookery-end/id374798846'); ?>
	<div class="podcast-links right">
		<a href="https://www.google.com/podcasts?feed=aHR0cHM6Ly9hdWRpb2Jvb20uY29tL2NoYW5uZWxzLzQyMjU0MTYucnNz"><img class="inline-svg" src="<?php echo get_stylesheet_directory_uri(); ?>/images/google-podcasts.svg" alt="Listen on Google Podcasts"></a>
		<a href="https://itunes.apple.com/gb/podcast/from-the-rookery-end-watford-fc/id374798846?mt=2"><img class="inline-svg" src="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-podcasts.svg" alt="Listen on Apple Podcasts"></a>
		</div>
	</div>
    
    <div class="home-page-section">
    <!--<h2>Stanley Grouse's artwork</h2>-->
        <div class="stanley-grouse">
            <?php getArtwork(); ?>
        </div>
	</div>
	
</div>

<?php get_footer(); ?>