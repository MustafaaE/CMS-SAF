<?php get_header(); ?>
<h1>hejdå</h1>
<div class="container">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post(); ?>
            <article <?php post_class(); ?> id="post-<?php
			the_ID(); ?>">
                <a style="color: black;" class="text-decoration-none" href="<?php
				the_permalink(); ?>"><h2><?php
						the_title(); ?></h2></a>
                <div id="our-post-thumbnail">
					<?php
					the_post_thumbnail( 'wcm-gallery' ); ?>
                </div>
				<?php
				the_content(); ?>
            </article>
		<?php
		endwhile;

		if ( is_single() ) :
			previous_post_link();
			next_post_link();
		endif;
	else :
		_e( 'Sorry, no posts matched your criteria.', 'textdomain' );
	endif;
	?>
</div>

<?php
get_footer(); ?>