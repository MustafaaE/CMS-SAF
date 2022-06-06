<?php get_header(); ?>
<div class="container-fluid">
	<div id="carousel" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active" data-bs-interval="10000">
				<img src="<?php echo get_theme_file_uri('assets/images/olka_logo.png') ?>" class="d-block h-50 w-100" alt=>
			</div>
			<div class="carousel-item" data-bs-interval="2000">
				<img src="<?php echo get_theme_file_uri('assets/images/olka_logo.png') ?>" class="d-block h-50 w-100" alt=>
			</div>
			<div class="carousel-item">
				<img src="<?php echo get_theme_file_uri('assets/images/olka_logo.png') ?>" class="d-block h-50 w-100" alt=>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
</div>


<?php
if (have_posts()) :
	while (have_posts()) : the_post(); ?>
		<article <?php post_class(); ?> id="post-<?php	the_ID(); ?>">
				<div class="d-flex flex-column align-items-center">
				<h1 class="my-3"><?php
					the_title(); ?></h1>
			<div class ="my-4" id="our-post-thumbnail">
				<?php
				the_post_thumbnail('wcm-gallery'); ?>
			</div>
			<?php
			the_content(); ?>
		</article>
		<div>
		</div>
		</div>
	<?php
	endwhile;
	if (is_single()) : ?>
		<h2 class="mt-2">Liknande Resor</h2>
		<div class="d-flex justify-content-between my-1">
			<div class="badge badge-primary text-wrap"><?php previous_post_link(); ?> </div>
			<div class="badge badge-primary text-wrap"><?php next_post_link(); ?>-></div>
		</div>
<?php
	endif;
else :
	_e('Sorry, no posts matched your criteria.', 'textdomain');
endif;
?>
<?php
get_footer(); ?>