  <footer id="footer">
    <div class="footer-align-center-divs flex container">
      <div class="footer-pirmas">
        <div>
          <h3><?php the_field('foot_header'); ?></h3>
        </div>
        <div>
          <img class="img" src="<?php echo get_field('foot_divider')['url']; ?>" alt="divider">
          <div class="footer-smaller-text"><?php the_field('foot_first_footer_content'); ?></div>
          <div class="footer-smaller-text"><?php the_field('second_footer_content'); ?></div>
        </div>
      </div>
      <div class="footer-antras">
        <div>
          <h3><?php the_field('foot_header2'); ?></h3>
          <img class="img" src="<?php echo get_field('foot_divider2')['url']; ?>" alt="divider">
          <div class= "footer-2ndcol-bottom-padding">
            <div class="footer-smaller-text"><?php the_field('foot_first_footer_content2'); ?></div>
            <div class="footer-smaller-text"><?php the_field('second_footer_content2'); ?></div>
          </div>
        </div>
        <div>
          <ul class="flex flex-wrap">
             <?php
              // check if the repeater field has rows of data
              if( have_rows('f2c_payment_methods') ):
                // loop through the rows of data
                while ( have_rows('f2c_payment_methods') ) : the_row();
                  // display subfield value
                 $link = get_sub_field('f2c_payment_link');
                 $target = $link['target'] ? ' target="'.$link['target'].'"' : '';
                 // sutrumpintas if
                 echo '<li> <a href="'.$link["url"].'" '.$target.'> <i class="fa '.get_sub_field('f2c_payment_icon').'"></i></a></li>';
               endwhile;
              else :
              // no rows found
              endif;
            ?>
          </ul>
        </div>
      </div>
      <div class="footer-trecias">
        <div>
          <h3><?php the_field('foot_header3'); ?></h3>
          <img class="img" src="<?php echo get_field('foot_divider3')['url']; ?>" alt="divider">
        </div>
        <div class="flex justify-content-space-between flex-direction-column">
          <div class="footer-2ndcol-bottom-padding">
            <div class="footer-smaller-text"><?php the_field('foot_first_footer_content3'); ?></div>
            <div class="footer-smaller-text"><?php the_field('second_footer_content3'); ?></div>
          </div>
          <div>
            <ul class="flex flex-wrap">
              <?php
              // check if the repeater field has rows of data
              if( have_rows('f3c_footer_social_icons') ):
                // loop through the rows of data
                while ( have_rows('f3c_footer_social_icons') ) : the_row();
                  // display subfield value
                 $link = get_sub_field('f3c_link');
                 $target = $link['target'] ? ' target="'.$link['target'].'"' : '';
                 // sutrumpintas if
                 echo '<li> <a href="'.$link["url"].'" '.$target.'> <i class="fa '.get_sub_field('f3c_repeater_icon').'"></i></a></li>';
               endwhile;
              else :
              // no rows found
              endif;
            ?>
            </ul>
          </div>
        </div>        
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>