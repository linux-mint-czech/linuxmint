<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title(''); if (function_exists('is_tag') and is_tag()) { ?>Tag Archive for <?php echo $tag; } if (is_archive()) { ?> archive<?php } elseif (is_search()) { ?> Search for <?php echo $s; } if ( !(is_404()) && (is_search()) or (is_single()) or (is_page()) or (function_exists('is_tag') and is_tag()) or (is_archive()) ) { ?> at <?php } ?> <?php bloginfo('name'); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress<?php /*bloginfo('version'); */?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>

<link href="https://plus.google.com/114676587388452854332" rel="publisher" />
	<script type="text/javascript">
 	 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 	 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 	 })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

 	 ga('create', 'UA-39944089-1', 'linux-mint-czech.cz');
 	 ga('send', 'pageview');
	</script>


</head>
<body>

<div id="wrap">
	<div id="head">
		<?php /*<!--h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
			<div class="description"><h2><?php bloginfo('description'); ?></h2></div--> */?>
		<a id="logo" href="<?php echo get_option('home'); ?>">
			&nbsp;
		</a>

		<!-- +1 button  -->
		<div style="position:absolute;right:35px;top:30px;">
			<div class="g-plusone" data-href="http://www.linux-mint-czech.cz/"></div>
		</div>
		<!-- end +1 button -->

		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
			<div class="searchbar">
				<div class="searchbar-right">
					<input type="text" size="18" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
					<input type="submit" id="searchsubmit" value="Search" class="btn" />
				</div>
			</div>
		</form>
	</div>

	<div style="display: block; float: left; padding-top: 8px; position: relative; z-index: 200;">
	  <a href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/'; ?>">
		<img src="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/'; ?>galerie/home_icon.png" width="19" height="17" alt="Domů"/>
	  </a>
	</div>
	<div id="account">
		<div id="navigation">
			<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Menu under Header') ) : else : endif; ?>		
		</div>	
	</div>
