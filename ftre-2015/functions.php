<?php

function getLatestPod($source, $image, $rss, $itunes) {

    $content = file_get_contents($source);
    $bannerimage = get_stylesheet_directory_uri()."/images/".$image;
    $x = new SimpleXmlElement($content);
	$n = 0;

    foreach($x->channel->item as $entry) {
		while ($n < 1) {
            $ituneslink = htmlspecialchars($itunes);
			$podlink = htmlspecialchars($entry->enclosure['url']);
            $rss = htmlspecialchars($rss);
            $text = htmlspecialchars($entry->description);
            $title = htmlspecialchars($entry->title);
            echo "<div class=\"float-right\">\n";
            echo "<img src='$bannerimage' />";
            echo "<audio src='$podlink' controls>\n";
			echo "</audio>\n";
            echo "</div>\n";
            echo "<h2>$title</h2>\n";
            echo "<p>$text</p>\n";
            echo "<div class=\"right\">\n";
            echo "<p><a href=\"$podlink\" download>Download file</a> | ";
            echo "<a href=\"$ituneslink\">iTunes</a> | ";
            echo "<a href=\"$rss\">RSS feed</a></p>\n";
            echo "</div>\n";
			$n++;
		}
    }
}

function social() {
    $content = file_get_contents('http://rookeryend.tumblr.com/rss');
    $x = new SimpleXmlElement($content);
    foreach ($x->channel->item as $entry) {
        echo "<div class=\"entry\">\n";
        echo "<p>$entry->description</p>\n";
        echo "<p>$data</p>\n";
        echo "</div>\n";
    }
}

add_shortcode( 'social', 'social' );

function ftre_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'ftre' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'ftre_wp_title', 10, 2 );

function register_ftre_menus() {
  register_nav_menus(
    array(
      'header-menu' => ( 'Header Menu' ),
	  'sidebar' => ( 'Sidebar' )
    )
  );
}
add_action( 'init', 'register_ftre_menus' );

$args = array(
	'search-form',
	'comment-form',
	'comment-list',
	'gallery',
	'caption'
);
add_theme_support( 'html5', $args );

function getArtwork() {
    $themedir = get_stylesheet_directory_uri();
    $dir = '/home/noelinho/websites/ftre.slevin.org.uk/public_html/wp-content/themes/ftre-2015/images/stanley-grouse/';
    $publicdir = $themedir."/images/stanley-grouse/";
    $contents = scandir($dir, 1);
    shuffle($contents);
    $extensions = array('jpeg', 'jpg', 'png');
    foreach($contents as $key => $file) {
        $suffix = substr(strrchr($file, "."), 1);
        if (in_array($suffix, $extensions)) {
            echo "<img class =\"artwork\" src=\"".$publicdir.$file."\"/>";
        }
    }
}

add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );

if ( ! isset( $content_width ) ) $content_width = 863;

// This function hides the admin bar on the site
add_filter('show_admin_bar', '__return_false');

// These actions remove emoji detection, mainly to clean up the page source and because I'm not bothered about this feature
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' ); 

// Remove WordPress information from the site head
remove_action('wp_head', 'wp_generator');

// Load theme Javascript
function my_scripts_styles() {
    wp_register_script('ftre-scripts', get_template_directory_uri() . '/scripts.js',  '2015-11-10', true );
    wp_enqueue_script('ftre-scripts');
}

add_action( 'wp_enqueue_scripts', 'my_scripts_styles' );

// Allows HTML in author bios
remove_filter('pre_user_description', 'wp_filter_kses');

?>