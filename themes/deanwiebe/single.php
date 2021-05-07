<?php
get_header();?>
    <div>
      <?php get_template_part('nav-mobile'); ?> 
      <div class="page-main">
        <div class="card page-card">
          <div class="website">
            <div class="img">
              <img id="card_image" src="<?php echo(get_the_post_thumbnail_url()); ?>" alt="" srcset="">
            </div>
            <div class="title">
              <h2><?php the_title() ?></h2>
            <div class="button page-button">
              <p><a href="<?php the_field('the_website') ?>">Visit website</a></p>
            </div>
            <div class="button page-button contact-button">
              <p>Get in touch</p>
            </div>
            </div>
          </div>
        </div>
        <div class="story">
          <p>
              <?php the_content() ?>
          </p>
        </div>
      </div>
    </div>
        <!-- ////////////////////////////////////////////////////////////begin cards section -->
<div id="portfolio"></div>
<section id="section">
<?php 

$customPostsQuery = new WP_Query(array(
  'posts_per_page' => -1,
  'post_type' => 'post'
));
  if ( $customPostsQuery->have_posts() ) {
    while ( $customPostsQuery->have_posts() ) {
      $customPostsQuery->the_post(); 
      if($customPostsQuery->current_post % 2 == 0){ ?>
        <div class="card left">
          <div class="tags">
            <?php
              if(get_field('the_code')){ ?>
                <p><a href="<?php the_field('the_code') ?>">The Code</a></p>
             <?php }
            ?>
            <?php
              if(get_field('the_design')){ ?>
                <p><a href="<?php the_field('the_design') ?>">The Design</a></p>
             <?php }
            ?>
            <p><a href="<?php the_permalink();?>">The Story</a></p>
          </div>
          <div class="website">
            <div class="img">
              <img id="card_image" src="<?php echo(get_the_post_thumbnail_url()); ?>" alt="" srcset="">
            </div>
            <div class="title">
            <a href="<?php the_permalink() ?>"><h2><span><?php the_title(); ?></span></h2></a>
            </div>
          </div>
        </div>
      <?php }
      else{ ?>
        <div class="card card2 right">
        <div class="website">
          <div class="img">
            <img id="card_image" src="<?php echo(get_the_post_thumbnail_url()); ?>" alt="" srcset="">
          </div>
          <div class="title">
            <a href="<?php the_permalink() ?>"><h2><span><?php the_title(); ?></span></h2></a>
          </div>
        </div>
        <div class="tags">
          <?php
            if(get_field('the_code')){ ?>
              <p><a href="<?php the_field('the_code') ?>">The Code</a></p>
            <?php }
          ?>
          <?php
              if(get_field('the_design')){ ?>
                <p><a href="<?php the_field('the_design') ?>">The Design</a></p>
             <?php }
            ?>
          <p><a href="<?php the_permalink(); ?>">The Story</a></p>
        </div>
      </div>
     <?php }
    } // end while
  } // end if
?>
</section>
<?php get_template_part('services');  ?>
<?php get_template_part('contact'); ?>
<?php get_footer();
?>