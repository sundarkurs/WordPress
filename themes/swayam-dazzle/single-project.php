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
    <div class="col-six pricing-intro" data-aos="fade-up">
      <h1 class="intro-header" ><?php the_title() ?></h1>
      <p>
        <?php the_content() ?>
      </p>
    </div>
    <div class="col-six pricing-intro" data-aos="fade-up">
      <p>
        <?php the_post_thumbnail('projectPortrait'); ?>
      </p>
    </div>

    <!-- <div class="col-eight pricing-table">
      <div class="row">
        <div class="col-six plan-wrap">
          <div class="plan-block" data-aos="fade-up">
            <div class="plan-top-part">
              <h3 class="plan-block-title">Located at</h3>
            </div>

            <div class="plan-bottom-part">
              <ul class="plan-block-features">
                <li><span>ONE</span> SOMETHING</li>
                <li><span>TWO</span> SOMETHING</li>
                <li><span>THREE</span> SOMETHING</li>
                <li><span>FOUR</span> SOMETHING</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-six plan-wrap">
          <div class="plan-block primary" data-aos="fade-up">
            <div class="plan-top-part">
              <h3 class="plan-block-title">Facilities</h3>
            </div>

            <div class="plan-bottom-part">
              <ul class="plan-block-features">
              <li><span>ONE</span> SOMETHING</li>
                <li><span>TWO</span> SOMETHING</li>
                <li><span>THREE</span> SOMETHING</li>
                <li><span>FOUR</span> SOMETHING</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    
  </div>

  <div class="row half-bottom">

		   <div class="col-twelve">

		    	<h3>Details</h3>

		      <ul class="stats-tabs">
				   <li><a href="#">1,234 <em>Sasuke</em></a></li>
				   <li><a href="#">567 <em>Hinata</em></a></li>
				   <li><a href="#">23,456 <em>Naruto</em></a></li>
				   <li><a href="#">3,456 <em>Kiba</em></a></li>
				   <li><a href="#">456 <em>Shikamaru</em></a></li>
				   <li><a href="#">26 <em>Sakura</em></a></li>
				</ul>	      		

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