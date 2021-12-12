<?php

  get_header();

  while(have_posts()) {
    the_post();
    ?>

<?php pageBanner(); ?>


<section id="pricing">

  <!-- <div class="row narrow add-bottom text-center">
    <div class="col-twelve tab-full">
      <h3>Project</h3>
      <h1> <?php the_title() ?></h1>
      <p class="lead"><?php the_content() ?></p>   			
    </div>
  </div> -->

  <div class="row pricing-content">
    <div class="col-four pricing-intro" data-aos="fade-up">
      <h1 class="intro-header" ><?php the_title() ?></h1>
      <p>
        <?php the_content() ?>
      </p>
    </div>

    <div class="col-eight pricing-table">
      <div class="row">
        <div class="col-six plan-wrap">
          <div class="plan-block" data-aos="fade-up">
            <div class="plan-top-part">
              <h3 class="plan-block-title">Swayam One</h3>
            </div>

            <div class="plan-bottom-part">
              <ul class="plan-block-features">
                <li><span>3GB</span> Storage</li>
                <li><span>10GB</span> Bandwidth</li>
                <li><span>5</span> Databases</li>
                <li><span>30</span> Email Accounts</li>
              </ul>
            </div>
          </div>
        </div>
        <!-- end plan-wrap -->

        <div class="col-six plan-wrap">
          <div class="plan-block primary" data-aos="fade-up">
            <div class="plan-top-part">
              <h3 class="plan-block-title">Swayam Two</h3>
            </div>

            <div class="plan-bottom-part">
              <ul class="plan-block-features">
                <li><span>5GB</span> Storage</li>
                <li><span>20GB</span> Bandwidth</li>
                <li><span>15</span> Databases</li>
                <li><span>70</span> Email Accounts</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row pricing-table">  
    <div class="plan-wrap">
      <div class="plan-block" data-aos="fade-up">
        <div class="plan-bottom-part">
          <div class="col-six tab-full">
            <p>
              <img src="<?php echo get_theme_file_uri('/images/shutterbug.jpg') ?>">
            </p>
          </div>
          <div class="col-six tab-full">
            <p>
              <img src="<?php echo get_theme_file_uri('/images/shutterbug.jpg') ?>">
            </p>
        </div>
        <div class="col-six tab-full">
            <p>
              <img src="<?php echo get_theme_file_uri('/images/shutterbug.jpg') ?>">
            </p>
        </div>
      </div>
    </div>
  </div>

</section>
    

<?php } get_footer(); ?>