<?php
/*Template Name: Special Template*/
	get_header();
	if (have_posts()):
		while(have_posts()): the_post(); ?>
		<article class="post page">
			<h2><?php the_title(); ?></h2>
			<div class="info-box">
				<h4>Disclaimer Title</h4>
				<p>Ignore this is dummy text. qwer tyuiopasdfghjkl ;zxcvbnm,qwertyuio sdfghjklz x cvbn masd fghjkwer tyuio y fweb hns retvbnj ratcvbnh txcrtvbhn</p>
			</div>			
			<p><?php the_content(); ?></p>
		</article>
		<?php endwhile;
	else:
		echo '<p>No content found</p>';	
	endif;
	get_footer();
?>