<?php get_header(); ?>

<div class="row row-cols-1 row-cols-md-3 my-3">
<?php
if (have_posts()) :
	while (have_posts()) : the_post(); ?>

        <div class="card text-center">
            <?php if (!empty(get_the_post_thumbnail())) { ?>
            <?php the_post_thumbnail('wcm-gallery'); ?>
          <?php } else { ?>
            <img class = "card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/images/default-placeholder.png"  alt="Coming Soon" />
          <?php } ?>
          <div class="card-body">
                    <h3 class="card-body"><?php the_title(); ?></h3>
                    <p class="card-text"><?php the_excerpt(); ?></p>
                <a href=<?php the_permalink(); ?> ><button type="button" class="btn btn-primary">Läs mer</button></a>
                </div>  
        </div>
<?php
    endwhile;
endif;
wp_reset_postdata();
?>

</div>
<?php
get_footer(); ?>