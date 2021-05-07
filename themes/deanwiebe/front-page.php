<?php
get_header();
?>
<main>
          <div class="container">
              <div class="welcome-text">
              <?php get_template_part('nav-mobile'); ?>
                  <div class="tagline">
                      <h1>Bringing Success Home</h1>
                  </div>
                  <div>
                      <p><span>Web Design</span> and development that gives life to your ideas, and confidence to your clients.</p>
                  </div>
                  <div>
                      <p>Honest reliable support serving hard working canadians like you.</p>
                  </div>
              </div>
              <div class="contact">
                <div class="button contact-button">
                  <p>Get in touch</p>
                </div>
              </div>
          </div>
      </main>
    </div>
    <?php get_template_part('cards'); ?>
    <?php get_template_part('services'); ?>
    <?php get_template_part('contact'); ?>
    </div>
    <?php
    get_footer();
    ?>