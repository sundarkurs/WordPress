<?php

get_header();
pageBanner(array(
    'title' => 'All Projects',
    'subtitle' => 'See what is going on in our world.'
  ));
 ?>

<section id="about">

  <div class="row about-intro">
    <div class="col-four">
      <h1 class="intro-header" data-aos="fade-up">All our projects</h1>
    </div>
    <div class="col-eight">
      <p class="lead" data-aos="fade-up">
        Excepteur enim magna veniam labore veniam sint. Ex aliqua esse
        proident ullamco voluptate. Nisi nisi nisi aliqua eiusmod dolor
        dolor proident deserunt occaecat elit Lorem reprehenderit. Id culpa
        veniam ex aliqua magna elit pariatur do nulla. Excepteur enim magna
        veniam labore veniam sint.
      </p>
    </div>
  </div>

  <div class="row about-how">

    <div class="about-how-content">
      <div class="about-how-steps block-1-1 block-tab-full group">

        <?php
          $projCount = 1;
          while(have_posts()) {
            the_post(); ?>

          <div class="bgrid step" data-item="<?php echo $projCount ?>" data-aos="fade-up">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div class="col-six">
              <p> <?php the_content(); ?> </p>
              <p><a href="<?php the_permalink(); ?>">More details &raquo;</a></p>
            </div>
            <div class="col-six">
              <p><?php the_post_thumbnail('projectPortrait'); ?></p>
            </div>
          </div>

        <?php 
          $projCount = $projCount + 1;
          } 
          
        ?>
      </div>
      <div style="text-align:center"><?php echo paginate_links(); ?></div>
    </div>
  </div>

</section>

<?php get_footer(); ?>