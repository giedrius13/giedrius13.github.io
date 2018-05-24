<section id="menu" class="section4_background"> <!-- sekcija nr4 pradzia -->
  <div class="container flex justify-content-center">
    <?php 
      $categories = get_categories( array(
        'child_of' => get_field('ms_post_category'),
        ) );
        $i = 0;
        foreach ( $categories as $category ) {
          $i++;
          if($i == 1) {
            $eilute = "section4_right_padding";
            echo '<div class="'.$eilute.'"><!--right pradzia -->';
            } else if ($i == 3) {
              $eilute = "section4_left_padding";
              echo '<div class="'.$eilute.'"><!--left pradzia -->';
              }
    ?>
      <div class="dish_bottom_padding">
        <div>
          <h3><?php echo $category->name ?></h3>
          <img class="img" src="<?php echo get_field('ms_category_divider')["sizes"]["thumbnail"]; ?>" alt="golden divider">
        </div>

        <?php
        $query = new WP_Query( array( 
          'cat' => $category->term_id,
          'posts_per_page' => -1 
          //pagala default posts_per_page yra = 10 (nustatomas per admin, settings -> reading)
          // jei posts_per_page nurodyta reiksme -1 isveda visus irasus
        ) );
        // var_dump($query);
        
        if ($query->have_posts() ) :
          while ($query->have_posts() ):
            $query->the_post(); 
            ?>
            <!--blog post-->
           <div class="dish_bottom_padding">
          <div class="bendras_patiekalo_div">
            <div class="patiekalo_pavadinimas"><h4><?php the_title(); ?></h4></div>
            <div class="kaina"><h4><?php the_field('p_price'); ?></h4></div> 
          </div> 
          <div class="patiekalo_ingridientai">
            <p><?php the_excerpt(); ?></p>
          </div>          
        </div>
      <!--/blog post--> 
          <?php
          // turiniu isvesti yra 2 funkcijos:
          // the concept(); - isveda visa turini
          // the_excerpt(); - isveda 150 zodziu, pasalina teksto formatavima
          endwhile;
        endif;
        wp_reset_query();
        ?>
        </div>
        <?php // jai lyginis isvedinet div uzdaryma
        if($i == 2 || $i== 4) {
          echo '</div>';
        }

    } // baigiasi ciklas

      ?> 

      
  </div>
</section> <!-- sekcija nr4 pabaiga -->