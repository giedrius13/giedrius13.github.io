<!-- about us Page
    ==========================================-->
<?php
// the_field('lauko_pavadinimas') - automatiskai isveda duomenis (echo)
// get_field('lauko pavadinimas') - grazina duomenis (return) 

?>
<section id="about" class="pattern"> <!-- sekcija nr2 pradzia -->
  <div class="antros-sekcijos-centravimas flex">
    <div class="max-width left-align-block">
      <h2 class="yeseva_one_font just-the-right-food"><?php the_field('aus_section_title'); ?></h2>
      <img class="img" src="<?php echo get_field('aus_golden_divider')['url']; ?>" alt="golden divider">
      <div class="center-antros-sekcijos-teksta lato_black lato_regular_font"><?php echo get_field('aus_section_content'); ?></div>
      <div class="cook-center">
        <img src="<?php echo get_field('aus_chef_sign')['url']; ?>" alt="virejo parasas">
      </div>
    </div>
    <div class="right-align-block">
      <img src="<?php echo get_field('aus_food_plate')['url']; ?>" alt="lekste">
    </div>
  </div>
</section> <!-- sekcija nr2 pabaiga -->

