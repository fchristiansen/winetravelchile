<?php
	require_once 'classes/Mobile_Detect.php';
	$detect = new Mobile_Detect;
	$deviceType 	= ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
	$scriptVersion 	= $detect->getScriptVersion();
?>
<!DOCTYPE html>
<html lang="es">
	<head>

		<!-- Google Tag Manager dejar comentado -->

<!-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N92D78P');</script> -->

<!-- End Google Tag Manager -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta name="description" content="<?php bloginfo('description'); ?>"/>
		<meta name="keywords" content="Wine,Chile,Travel,Wine Travel Chile,Wine Travel,Wine Tours,Wine Experience,Wine Travel South America,South America Wine Tours,Gastronomy Tours, Wine Lovers Experience,Nature,Adventure,Gastronomy,Wine Tasting,Eco Wine Tours, Organic Wines,Ecological Tours,Wine and Food,Golf and Wine,Wine for Professionals,South America Wine Tours,Argentina Wine tours,Uruguay Wine Tours,Wine and Food,WineTourism,Golf tours,Gastronomic Wine Tours,Gourmet Wine Tours,Chilean Wineries" />
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title><?php bloginfo( 'name' ); ?><?php wp_title('|', true, 'left'); ?></title>
		<!-- Bootstrap -->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link href="//fonts.googleapis.com/css?family=Montserrat:300,400,600,700" rel="stylesheet">
		<link href="//fonts.googleapis.com/css?family=Prata" rel="stylesheet">
		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/simpleLightbox.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/assets/slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/assets/slick/slick-theme.css"/>
		<link rel='stylesheet prefetch' href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/css/bootstrap-datepicker.min.css'>
		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/contacto.css">

		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/css/custom.css">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- GOOGLE ANALYTICS -->
		<script type="text/javascript">
		// var _gaq = _gaq || [];
		// _gaq.push(['_setAccount', 'UA-25725292-1']);
		// _gaq.push(['_trackPageview']);
		// (function() {
		//   var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		//   ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		//   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		// })();
		</script>

		<link rel="icon" type="image/png" href="<?php bloginfo('template_url');?>/assets/img/logo.png" />
	</head>
	<body>
		<!-- Google Tag Manager (noscript) -->
		<!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N92D78P"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
		<!-- End Google Tag Manager (noscript) -->
		<div id="blogurl" class="hide" data-url="<?php bloginfo('template_url');?>"></div>
