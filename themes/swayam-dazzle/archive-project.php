<?php

get_header();
pageBanner(array(
    'title' => 'All Projects',
    'subtitle' => 'See what is going on in our world.'
  ));
 ?>

<section id="pricing">

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

  <div class="row pricing-table">  
    <div class="plan-wrap">
      <div class="plan-block" data-aos="fade-up">
        <div class="plan-bottom-part">

        <?php
          while(have_posts()) {
            the_post(); ?>

          <div class="col-six tab-full">
            <div class="plan-block primary" data-aos="fade-up">
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <div>
                <?php the_content(); ?>
                <p><a href="<?php the_permalink(); ?>">More details &raquo;</a></p>
              </div>
            </div>
          </div>

        <?php } echo paginate_links(); ?>
       
      </div>
    </div>
  </div>

</section>

<?php get_footer(); ?>