<?php 

$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));

get_header(); ?>

<div class="site-content">
	<div class="content">
    <header class="entry-header">
        <h1 class="entry-title"><?php echo $curauth->display_name; ?></h1>
        </header>
        <div class="entry-content">
            <?php if (file_exists(get_stylesheet_directory() . "/images/" . strtolower($curauth->user_login) . ".jpg")) {
                echo "<div class=\"alignright\">
                <img src=\"".get_stylesheet_directory_uri()."/images/".strtolower($curauth->user_login).".jpg\"/>
                </div>
                ";
            }        
            echo $curauth->description; ?>
        </div>
    </div>
    
    <?php get_sidebar(); ?>
    
</div>

<?php get_footer(); ?>