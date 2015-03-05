<?php get_header(); ?>
	<?php 
		if( have_posts() ) {
			while( have_posts() ) {
				the_post(); 
				echo '<h1>'.the_title().'</h1>';
				the_content();
			}
		}
		else echo '<p>'._e('没您需要的文章').'</p>';
	?>
<?php get_footer(); ?>

