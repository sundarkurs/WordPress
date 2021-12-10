<?php

  get_header();

  while(have_posts()) {
    the_post();
     ?>

<section
      id="home"
      data-parallax="scroll"
      data-image-src="<?php echo get_theme_file_uri('/images/bg/buildings2.jpg') ?>"
      data-natural-width="3000"
      data-natural-height="2000"
    >
      <div class="overlay"></div>
      <div class="home-content">
        <div class="row contents">
          <div class="home-content-left">
            <h1>
                <?php echo get_the_title() ?>
            </h1>
          </div>
        </div>
      </div>

      <ul class="home-social-list">
        <li>
          <a href="#"><i class="fa fa-facebook-square"></i></a>
        </li>
        <li>
          <a href="#"><i class="fa fa-twitter"></i></a>
        </li>
        <li>
          <a href="#"><i class="fa fa-instagram"></i></a>
        </li>
        <li>
          <a href="#"><i class="fa fa-youtube-play"></i></a>
        </li>
      </ul>
     
</section>

<section id="about">
      <div class="row about-intro">
        <div class="col-four">
          <h1 class="intro-header" data-aos="fade-up">About Our Company</h1>
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
</section>

<?php }

get_footer();

?>