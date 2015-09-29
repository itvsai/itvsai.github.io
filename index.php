<?php  
/*
*
*
*/
?>
<!Doctype html>
<!--[if IE 7]> <html class="ie ie7" <?php language_atteributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="ie ie8" <?php language_atteributes(); ?>> <![endif]-->	
<!--[if !(IE 7) & (IE 8)]><!-->
<html <?php language_atteributes(); ?>>
<head>
	<meta charset="UTF-8"><!---->
	<meta name="viewport" content="width=device-width,initial-scale=1"><!--mobil first media query to work at mobile good -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge" ><!--for bootstrap to work good at IE-->
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url' ); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/skeleton-pxl.css" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!-- IE 9 use different method than IE 7 & 8 to start good -->		
		<!--[if it ie 9]>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
		<![endif]-->

		<!--search difference between wordpress html5.js vs html5shiv.js by cdn-->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class( ); ?>>

		<div class="container">

			<!-- 1 header-->
			<div class="header">
				
			</div>
			<!-- End header-->


			<!-- 2 main page-->
			<div class="main">
				
			</div>
			<!-- End main page-->
			
			<!-- aside sidebar if you want -->
			<div class="aside">
				
			</div>
			
			<!-- 3 footer-->
			<div class="footer">
				
			</div>
			<!-- End footer -->
			
		</div>

	</body>
	</html>	