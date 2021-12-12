<?php 

function swayam_static_references(){

  wp_enqueue_style('base_style', get_theme_file_uri('/css/base.css'));
  wp_enqueue_style('vendor_style', get_theme_file_uri('/css/vendor.css'));
  wp_enqueue_style('main_style', get_theme_file_uri('/css/main.css'));
  wp_enqueue_style('main_style', get_theme_file_uri('/css/page.css'));

  wp_enqueue_script('modernizrJs', get_theme_file_uri('/js/modernizr.js'), array('jquery'), '1.0', true);
  wp_enqueue_script('paceJs', get_theme_file_uri('/js/pace.min.js'), array('jquery'), '1.0', true);

  wp_enqueue_script('pluginJs', get_theme_file_uri('/js/plugins.js'), array('jquery'), '1.0', true);
  wp_enqueue_script('mainJs', get_theme_file_uri('/js/main.js'), array('jquery'), '1.0', true);
  
}

add_action('wp_enqueue_scripts', 'swayam_static_references');

function swayam_features() {
  add_theme_support('title-tag');
  add_image_size('pageBanner', 1024, 523, true);
}

add_action('after_setup_theme', 'swayam_features');

?>


<?php

function pageBanner($args = NULL) {
  
  if (!$args['title']) {
    $args['title'] = get_the_title();
  }

  if (!$args['subtitle']) {
    $args['subtitle'] = get_field('page_subtitle');
  }

  if (!$args['photo']) {
    if (get_field('page_banner_image') AND !is_home() ) {
      $args['photo'] = get_field('page_banner_image')['sizes']['pageBanner'];
    } else {
      $args['photo'] = get_theme_file_uri('/images/bg/default.jpg');
    }
  }

  //print_r (get_field('page_banner_image'));

  ?>
  
  <section
      id="home"
      data-parallax="scroll"
      data-image-src="<?php echo $args['photo'] ?>"
      data-natural-width="3000"
      data-natural-height="2000"
    >
      <div class="overlay"></div>
      <div class="home-content">
        <div class="row contents">
          <div class="home-content-left">
            <h1><?php echo $args['title']; ?></h1>
            <h3><?php echo $args['subtitle']; ?></h3>
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

<?php }