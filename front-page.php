<?php
	get_header(); ?>
	<div class="site-content clearfix">
		<?php if(have_posts()):
			while(have_posts()):
				the_post();
				the_content();
			endwhile;
			else:
				echo '<p>No content found</p>';
			endif; ?>
			
		<div class="home-columns clearfix">
			<div class="one-half">
				<?php //initial pots loop begins here
				$initialPosts = new WP_Query('cat=7&posts_per_page=2&orderby=title');
				if($initialPosts->have_posts()):
					while($initialPosts->have_posts()):
						$initialPosts->the_post(); ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_excerpt(); ?>
					<?php endwhile;
				else:
					echo '<p>No content found</p>';
				endif;
				wp_reset_postdata(); ?>
			</div>
			<div class="one-half last">
				<?php //secondary pots loop begins here
				$initialPosts = new WP_Query('cat=8&posts_per_page=2&orderby=title');
				if($initialPosts->have_posts()):
					while($initialPosts->have_posts()):
						$initialPosts->the_post(); ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_excerpt(); ?>
					<?php endwhile;
				else:
					echo '<p>No content found</p>';
				endif;
				wp_reset_postdata(); ?>
			</div>
		</div>
		
	</div>
	<?php get_footer();
?>