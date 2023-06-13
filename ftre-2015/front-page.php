<?php get_header(); ?>

<div class="site-content">
    
    <div class="home-page-section">
	<?php getLatestPod('https://feeds.acast.com/public/shows/628e15899f8b3900138cb94a', 'ftre-premier-league.jpg', 'https://feeds.feedburner.com/rookeryend', 'https://itunes.apple.com/gb/podcast/from-the-rookery-end/id374798846'); ?>
	<div class="podcast-links right">
		<a href="https://www.google.com/podcasts?feed=aHR0cHM6Ly9hdWRpb2Jvb20uY29tL2NoYW5uZWxzLzQyMjU0MTYucnNz"><img class="inline-svg" src="<?php echo get_stylesheet_directory_uri(); ?>/images/google-podcasts.svg" alt="Listen on Google Podcasts"></a>
		<a href="https://itunes.apple.com/gb/podcast/from-the-rookery-end-watford-fc/id374798846?mt=2"><img class="inline-svg" src="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-podcasts.svg" alt="Listen on Apple Podcasts"></a>
		<a href="https://open.spotify.com/show/0UUCvUimZxjhgVPiY5Mvlh"><img class="inline-svg spotify" src="<?php echo get_stylesheet_directory_uri(); ?>/images/spotify-podcast-badge.svg" alt="Listen on Spotify"></a>
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