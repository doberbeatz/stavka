<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

		<!-- core CSS -->
		<link href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php bloginfo('template_directory'); ?>/assets/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?php bloginfo('template_directory'); ?>/assets/css/animate.min.css" rel="stylesheet">
		<link href="<?php bloginfo('template_directory'); ?>/assets/css/prettyPhoto.css" rel="stylesheet">
		<link href="<?php bloginfo('template_directory'); ?>/assets/css/main.css" rel="stylesheet">
		<link href="<?php bloginfo('template_directory'); ?>/assets/css/responsive.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />
		<!--[if lt IE 9]>
		<script src="/assets/js/html5shiv.js"></script>
		<script src="/assets/js/respond.min.js"></script>
		<![endif]-->
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/images/ico/favicon.ico">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/assets/images/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/assets/images/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/assets/images/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_directory'); ?>/assets/images/ico/apple-touch-icon-57-precomposed.png">

		<?php wp_head(); ?>

	</head><!--/head-->

	<body class="homepage">
		<div class="main_wrap">
			<header id="header">

				<?php get_template_part('partial', 'top-menu');?>

			</header><!--/header-->

			@yield('content')

</div><!-- main_wrap -->

<footer id="footer" class="midnight-blue">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				&copy; <?php the_time('Y'); ?> <?php bloginfo('name'); ?>
			</div>
			<div class="col-sm-6">
				<ul class="bottom-menu pull-right">
					<li><a href="/">Главная</a></li>
					<li><a href="#">О нас</a></li>
					<li><a href="#">Правила</a></li>
					<li><a href="#">Контакты</a></li>
				</ul>
			</div>
		</div>
	</div>
</footer><!--/#footer-->

<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.prettyPhoto.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.isotope.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/wow.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>