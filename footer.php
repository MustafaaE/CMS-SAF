<footer class="navbar navbar-expand-lg navbar-dark bg-secondary d-flex justify-content-between mt-4">
	<!-- Copyright -->
	<div class="text-center">
		<?php wp_nav_menu(
			array(
				'theme_location' => 'footer',
				'menu' => 'footer',
				'container' => '',
				'items_wrap' => '<ul class="navbar-nav">%3$s</ul>'
			)
		); ?>

	</div>
	<!-- Copyright -->
</footer>
<?php wp_footer(); ?>
</body>

</html>