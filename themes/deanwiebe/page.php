This is a page not a post
<?php
get_header();

while(have_posts()) {
    the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
<?php }

get_footer();
?>