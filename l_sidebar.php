<!-- begin l_sidebar -->

<div id="l_sidebar">

	<div id="l_sidebarwidgeted">
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Left Sidebar') ) : else : ?>
	
	
	<h5>Recently Written</h5>
		<ul>
			<?php get_archives('postbypost', 10); ?>
		</ul>
	</li>

	
	<h5>Categories</h5>
		<ul>
			<?php wp_list_cats('sort_column=name'); ?>
		</ul>
	</li>
		
	
	<h5>Archives</h5>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
	</li>

	
	
	<?php endif; ?>
	</div>
	
</div>

<!-- end l_sidebar -->
