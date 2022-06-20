<?php get_header(); ?>
<?php get_template_part('template-parts/carousel'); ?>
<?php
if (have_posts()) :
	while (have_posts()) : the_post(); ?>
		<div class="card text-center" <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<div class="card-body">
			<h1 class="card-title"><?php
								the_title(); ?></h1>
			<?php if (!empty(get_the_post_thumbnail())) { ?>
				<?php the_post_thumbnail('wcm-gallery'); ?>
			<?php } else { ?>
				<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/images/default-placeholder.png" alt="Coming Soon" />
			<?php } ?>
			 <p class="card-text"><?php the_content(); ?></p>
			 
			<p class="pe-4"><?php echo get_post_meta($post->ID, 'travel_logi', true); ?></p>
			
			</div>
			</div>
		<?php
	endwhile;
	if (is_single()) : ?>
	<div class="d-flex flex-column align-items-center">
		<div>
			<h2 class="mt-2">Liknande Resor</h2>
		</div>
			<div class="d-flex justify-content-between my-1">
				<div class="badge badge-primary text-wrap"><?php previous_post_link(); ?> </div>
				<div class="badge badge-primary text-wrap"><?php next_post_link(); ?>-></div>
	<?php
	endif;
else :
	_e('Sorry, no posts matched your criteria.', 'textdomain');
endif;
	?>
		</div>
</div>
		<?php
		get_footer(); ?>