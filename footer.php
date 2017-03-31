			<footer class="site-footer">
				<nav class="site-nav">
					<?php 
						$args = array(
							'theme_location' => 'footer'
						);
					?> 
					<?php wp_nav_menu($args); ?>
				</nav>
				<?php bloginfo('name'); ?> -&copy; <?php echo date('Y'); ?>
			</footer> 
		</div>
		<?php wp_footer(); ?>
	</body>
</html>