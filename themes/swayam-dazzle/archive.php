<?php

get_header();
pageBanner(array(
  'title' => get_the_archive_title(),
  'subtitle' => get_the_archive_description()
));
 ?>
<section id="pricing">
<div class="row pricing-content">
<?php
  while(have_posts()) {
    the_post(); ?>
    <div>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      
      <div>
        <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y'); ?> in <?php echo get_the_category_list(', '); ?></p>
      </div>

      <div>
        <?php the_excerpt(); ?>
        <p><a href="<?php the_permalink(); ?>">Continue reading &raquo;</a></p>
      </div>

    </div>
  <?php }
  echo paginate_links();
?>
</div>
</section>

<?php get_footer();

?>