<?php get_header(); ?>
<div id="main">	
	<div id="primary">
		   <?php include(TEMPLATEPATH."/l_sidebar.php");?>
	</div>    
    <div id="content" class="normal">	
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
					<!-- item -->
					<div class="item entry" id="post-<?php the_ID(); ?>">
						<div class="itemhead">
						    <h1>
						    	<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
						    </h1>
						    <div class="date">
						    	<?php the_time('j. F, Y') ?> autor <?php the_author(); ?>
						    </div>
						    
						    <?php the_content('Číst dále  &raquo;'); ?>
							 
							<small class="metadata">
								 Rubrika <span class="category"><?php the_category(', ') ?> </span> | <?php edit_post_link('Editovat', '', ' | '); ?> <?php comments_popup_link('Komentář (0)', ' Komentář (1)', 'Komentáře(ů) (%)'); ?>
							</small>							
						</div>
					</div>
					<!-- end item -->
					<?php comments_template(); // Get wp-comments.php template ?>		
			<?php endwhile; ?>

			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>

		<?php else : ?>
			<h2 class="center">Nenalezeno</h2>
			<p class="center">Je nám líto, ale hledáte něco, co tu není.</p>
		<?php endif; ?>
	</div><!-- end content -->
	<!--</div> #content ale je uzavřenej už předtim wtf is this-->
	
	<div id="secondary">
		<?php include(TEMPLATEPATH."/r_sidebar.php");?>
	</div>	
</div><!-- #main -->
<?php get_footer(); ?>
