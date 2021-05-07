<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="backgroundImage">
      <img src="<?php echo get_theme_file_uri('/images/backgrund2.jpg')?>" alt="" srcset="">
    </div>
    <div class="wrapper">
      <header id="header"<?php if(!is_front_page()){?>
        class="page-header"
     <?php } ?>>
        <div class="container">
          <div class="logo">
            <a href="<?php echo site_url('/') ?>"><h1>Dean Wiebe</h1></a>
          </div>
        </div>
        <div class="container">
          <div class="nav">
          
            <ul>
              <a class="tag" href="<?php echo site_url('/') ?>"><li id="portfolio">Portfolio</li></a>
              <a class="tag" href="" return="false"><li id="services">Services</li></a>
              <a class="tag" href=""><li id="contact">Contact</li></a>
            </ul>
           
          </div>
        </div>
        <div class="tag" id="hamburger">
          <span><i class="fas fa-hamburger"></i></span>
        </div>
      </header>