<?php get_header(); ?>
  <body>
    <div class="container">
       <div class="masthead">
       <nav class="navbar navbar-inverse">
          <ul class="nav nav-pills nav-justified">
            <?php wp_list_pages(array('title_li' => '')); ?>
         </ul>
       </nav>
       </div>
    </div>
	<?php 
		if( have_posts() ) {
			while( have_posts() ) {
				the_post(); 
				the_content();
			}
		}
		else echo '<p>'._e('没您需要的文章').'</p>';
	?>
<?php get_footer(); ?>

