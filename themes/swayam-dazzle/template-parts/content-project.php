<div class="col-six plan-wrap">
    <div class="plan-block" data-aos="fade-up">
    <div class="plan-top-part">
        <h3 class="plan-block-title"><?php the_title(); ?></h3>
    </div>

    <div class="plan-bottom-part">
        <?php the_post_thumbnail('projectLandscape'); ?>
        <?php echo wp_trim_words(get_the_content(), 50); ?>

        <a class="button button-primary large" href="<?php the_permalink(); ?>">Read more</a>
    </div>
    </div>
</div>