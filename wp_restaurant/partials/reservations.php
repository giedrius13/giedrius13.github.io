<section id="reservations" class="sixth_section_background"> <!-- sekcija nr6 pradzia -->
  <div class="flex container justify-content-space-around">
    <div class="flex sixth_section_width_right">
      <div class="sekcijos6-back1"></div>
      <div class="sekcijos6-back2"></div>  
    </div>
    <div class="sixth_section_width_left">
      <h5><?php the_field('re_reservations_title'); ?></h5>
      <img class="img" src="<?php echo get_field('re_reservations_divider')['url']; ?>" alt="mini gold divider">
      <div class="lato_regular_font text-center top_p_text"><?php the_field('re_main_content'); ?></div>
      <div class="lato_regular_font text-center bottom_p_text"><?php the_field('re_main_content_another_paragraph'); ?></div>
      <?php the_content(); ?>
    </div>
  </div>
</section><!-- sekcija nr6 pabaiga -->