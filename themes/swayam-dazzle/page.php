<?php

  get_header();

  while(have_posts()) {
    the_post();
     ?>

  <?php pageBanner(); ?>

  <section id="about">
    <div class="row about-intro">
      <?php the_content() ?>
    </div>
  </section>

<?php } get_footer(); ?>