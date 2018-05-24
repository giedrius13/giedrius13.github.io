<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Gentium+Book+Basic:400,400i,700,700i%7CLato:400,400i,700,700i%7COpen+Sans:400,400i,700,700i%7CSource+Serif+Pro:400,700%7CYeseva+One&amp;subset=latin-ext" rel="stylesheet">
    <title><?php the_title(); ?> </title>
    <?php wp_head(); ?>
  </head>
  <body>
    <section class="first_section_background flex flex-direction-column justify-content-space-between" style="background-image: url(<?php echo get_field('h_background_image')['url']; ?>);"> 
        <div class="align-items-center first_section_shadow_back">
          <header class="container flex justify-content-space-between">
            <a class="logo" href="#"><img src="<?php echo get_field('h_logo')['url']; ?>" alt="Lambda"></a>
            <nav class="nav">
              <a class="burger-nav"><i class="fa fa-align-justify" aria-hidden="true"></i></a>
              <?php 
              $args = ['theme_location'=>'primary-navigation', 
              'container'=>false, 
              'menu_class'=>'flex flex-wrap space-between'];
              wp_nav_menu($args);
              ?>
            </nav>
          </header>
        </div>
        <div class="flex flex-direction-column justify-content-space-between">
          <div class="max-width-h1">
            <h1><?php the_field('h_hero_heading') ?></h1>
            <img class="img" src="<?php echo get_field('h_top_footer_divider')['url']; ?>" alt="">
          </div>
          <div class="buttons_div">
            <?php
            if( have_rows('h_hero_buttons_repeater') ):
                while ( have_rows('h_hero_buttons_repeater') ) : the_row();    
                    $link = get_sub_field('h_button');
                    ?>
                <a class="<?php the_sub_field('h_button_style'); ?> mygtukas" href="<?php echo $link["url"]?>" <?php if($link["target"]!='') { echo 'target="'.$link['target'].'"';}   ?>>
                  <?php echo $link["title"]; ?>
                </a>               
            <?php
              endwhile;
              endif;
            ?>
          </div>
        </div>
        <div class="flex justify-content-center">
          <a class="chevron-hero" href="#about"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
        </div> 
      </section><!-- section 1 end--------------->

      
  
   


   