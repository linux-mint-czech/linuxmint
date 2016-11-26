<?php
/*
Template Name: Two columns layout
*/
?>

<?php get_header(); ?>
<div id="main">
	
<div id="primary">
</div>
    
    <div id="content" class="normal">
	
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
<!-- item -->
				<div class="item entry" id="post-<?php the_ID(); ?>">
				          <div class="itemhead">
				            <h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				            <div class="date"><?php the_time('j. F, Y') ?> </div>
				          
						  
								<?php the_content('Číst dále  &raquo;'); ?>
						 
				          <small class="metadata">
							 Rubrika <span class="category"><?php the_category(', ') ?> </span> | <?php edit_post_link('Editovat', '', ' | '); ?> <?php comments_popup_link('Komentář (0)', ' Komentář (1)', 'Komentáře(ů) (%)'); ?></small>
							 <div style="clear:both;"></div>
<div style="clear:both;"></div>
				 </div></div>
<!-- end item -->

<?php comments_template(); // Get wp-comments.php template ?>
		
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Předchozí příspěvky') ?></div>
			<div class="alignright"><?php previous_posts_link('Další příspěvky &raquo;') ?></div>
			<p> </p>
		</div>

	<?php else : ?>

		<h2 class="center">Nenalezeno</h2>
		<p class="center">Je nám líto, ale hledáte něco, co tu není.</p>

	<?php endif; ?>
<!-- end content -->

	</div>
	<div id="secondary">

<?php include(TEMPLATEPATH."/r_sidebar.php");?>

	</div>
	<div style="clear:both;"></div>
	<div style="clear:both;"></div>
</div>
<?php get_footer(); ?>
