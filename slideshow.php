<?php
/*
Template Name: Slideshow
*/
?>

<?php get_header(); ?>
<div id="main">
	
<div id="primary">
       <?php include(TEMPLATEPATH."/l_sidebar.php");?>
</div>
    
    <div id="content" class="normal">
<?php do_action('slideshow_deploy', '5709'); ?>
</div>
	
	<div id="secondary">

<?php include(TEMPLATEPATH."/r_sidebar.php");?>

	</div>
	<div style="clear:both;"></div>
	<div style="clear:both;"></div>
</div>
<?php get_footer(); ?>