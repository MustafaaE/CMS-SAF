<?php

$travel_query = new WP_Query([
    'post_type' => 'travel_cup',
    'posts_per_page' => 3,
    // 'orderby'=> 'rand'
]);

if ($travel_query->have_posts()) :
    while ($travel_query->have_posts()) : $travel_query->the_post(); ?>
            <div class="col-sm">
            <div id="our-post-thumbnail">
            <?php if (!empty(get_the_post_thumbnail())) { ?>
            <?php the_post_thumbnail('wcm-gallery'); ?>
          <?php } else { ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-placeholder.png" width="350" height="250" alt="Coming Soon" />
          <?php } ?>
                </div>
                <a href="<?php the_permalink(); ?>" style="color: black;" class="text-decoration-none">
                    <h3><?php the_title(); ?></h3>
                </a>
                <p><?php the_excerpt(); ?></p>
                <a href=<?php the_permalink(); ?> ><button type="button" class="btn btn-primary">Läs mer</button></a>
            </div>
<?php
    endwhile;
endif;
wp_reset_postdata();
?>