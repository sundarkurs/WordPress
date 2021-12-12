<?php

  get_header();

  while(have_posts()) {
    the_post();
    ?>

<?php pageBanner(); ?>


<?php the_title() ?>
   

    

<?php } get_footer(); ?>