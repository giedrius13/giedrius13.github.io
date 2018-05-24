<section id="reviews" class="saslyku_background flexbox_juodam_fonui" style="background-image: url(<?php echo get_field('r_reviews_background_image')['url']; ?>);"> <!-- sekcija nr5 pradzia -->
  <div class="juodas_penktos_sekcijos_background">
    <h3><?php the_field('r_reviews_title'); ?></h3>
    <img class="img" src="<?php echo get_field('r_reviews_divider')['url']; ?>" alt="divider">
    <div>
      <div class="guest_reviews_main_p_text text-center"><?php the_field('r_reviews_content_text1'); ?></div>
      <div class="food-inc lato_white text-center lato_regular_font"><?php the_field('r_reviews_bottom_content_text'); ?></div>
    </div>
  </div> 
</section> <!-- sekcija nr5 pabaiga -->