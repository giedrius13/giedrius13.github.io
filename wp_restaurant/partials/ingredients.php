<section class="third_section_background" id="ingredients-link"> <!-- sekcija nr3 pradzia -->
  <div class="juodo-fono-lygiavimas flex">
    <div class="ingridientu_juodas_fonas">
      <h3><?php the_field('fi_ingredients_heading'); ?></h3>
      <img src="<?php echo get_field('fi_section3_divider')['url']; ?>" alt="divider">
      <div class="lato_regular_font lato_white"><?php the_field('fi_content'); ?></div>
      <div class="padding_atitraukimas flex">
      
        <?php
        // check if the repeater field has rows of data
        if( have_rows('fi_ingredient_image_repeater') ):
          // loop through the rows of data
            $ingridientai = 0; 
            while ( have_rows('fi_ingredient_image_repeater') ) : the_row();
              $ingridientai++; 
              if($ingridientai == 1) {
                $klase = "sekcija3_left_ingrid";
              } else if ($ingridientai == 3) {
                $klase = "sekcija3_right_ingrid";
              } else {
                $klase = "";
              }
                // display a sub field value
                // the_sub_field('sub_field_name');
                $image = get_sub_field('fi_image');
                ?>

            <img class= "<?php echo $klase;  ?>" src="<?php echo $image['url']; ?>" alt="ingridientas1">
                
                <?php
            endwhile;
        endif;
        ?>

      </div>
    </div>
  </div>
</section> <!-- sekcija nr3 pabaiga -->