<!-- begin r_sidebar -->

<div id="r_sidebar">

	<div id="r_sidebarwidgeted">
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Right Sidebar') ) : else : ?>

	
	<h5>About</h5>
		<p>This is an area on your website where you can add text.  This will serve as an informative location on your website, where you can talk about your site.</p>
	</li>
		<div class="feedarea"><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"> Grab my feed</a></div>
			
	
	<h5>Blogroll</h5>
		<ul>
			<?php get_links(-1, '<li>', '</li>', ' - '); ?>
		</ul>
	</li>
		

        <h5>Admin</h5>
		<ul>
			<?php wp_register(); ?>
			<li><?php wp_loginout(); ?></li>
			<li><a href="http://wordpress.org/">WordPress</a></li>
			<?php wp_meta(); ?>
			<li><a href="http://validator.w3.org/check?uri=referer">XHTML</a></li>
		</ul>
</li>
	<?php endif; ?>
	</div>
			
</div>

<!-- end r_sidebar -->
