    <!-- ////////////////////////////////////////////////////////////begin cards section -->
<div id="portfolio"></div>
<section id="section">
<?php 
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post(); 
      if($wp_query->current_post % 2 == 0){ ?>
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