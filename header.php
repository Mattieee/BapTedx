<!DOCTYPE html>
<html>
<head>

  <?php wp_head(); ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
  <script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/BapTedx/BapTedx/js/main.js"></script>
  <script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/BapTedx/BapTedx/js/smooth_scrolling.js"></script>
  <meta charset="utf-8"/>



  <title>TedX Devinci</title>


  

</head>

<body>

<!--navbar -->

<nav class="navbar navbar-default navbar-fixed-top">

	<div class="container-fluid">
		<div class="navbar-header hidden-sm">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"> </span>
			</button>

		</div>
		<div id="navbar" class="navbar-collapse collapse">



			<?php   
           /**
           * Displays a navigation menu
           * @param array $args Arguments
           */
           $args = array(
           	'theme_location' => 'primaire',
           	'menu_class' => 'nav navbar-nav navbar-right navbar-default',
           	'menu_id' => '',
           	'before' => '',
           	'after' => '',
           	'depth' => 0,
           	'walker' => new wp_bootstrap_navwalker()
           );

           wp_nav_menu( $args ); 
           ?>

       </div>



   </div>

</nav>
