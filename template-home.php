<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Home
 *
 * @package storefront
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<title><?php echo get_bloginfo()?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/homecss/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/homecss/noscript.css" /></noscript>
	
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	</head>
	<body <?php body_class(); ?> class="is-preload">
	<?php //wp_body_open(); ?>
	<body >

		<!-- Header -->
			<header id="header">
				<h1><img src="<?php echo get_template_directory_uri(); ?>/images/Logo.jpg" /></h1>
				<nav>
					<ul>
						<li><a href="#intro">Intro</a></li>
						<li><a href="#one">What I Do</a></li>
						<li><a href="#two">Who I Am</a></li>
						<li><a href="#work">What people say</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</nav>
			</header>

		<!-- Intro -->
			<section id="intro" class="main style1 dark fullscreen">
				<figure class="wp-block-video"><video muted autoplay="1" loop="1" src="http://lizzkitchen.com/wp-content/uploads/2022/11/Home.mp4" playsinline=""></video></figure>
				<div class="content">
					<header>
						<h2>澌人厨房</h2>
						<h5>Lizz's Kitchen</h5>
					</header>
					<p>Welcome to <strong>Lizz's Kitchen</strong>, specializes in home-cooked meals. We only do deliveries, call us for more</p>
					<footer>
						<a href="#one" class="button style2 down">More</a>
					</footer>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="main style2 right dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>What I Do</h2>
					</header>
					<p>We provide home-cooked catering for <strong>Lunch</strong> & <strong>Dinner</strong>,  as well as bento box.</p>
				</div>
				<a href="#two" class="button style2 down anchored">Next</a>
			</section>

		<!-- Two -->
			<section id="two" class="main style2 left dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>Who I Am</h2>
					</header>
					<p>A warm meal that fills the belly and nourishes the soul.
To provide such meals is the dream of <strong>Lizz Lee</strong>, founder of <strong>Lizz’s Kitchen</strong>. It is a concept that has led her to start the elaborate and complicated business of catering home-cooked meals...more</p>
				</div>
				<a href="#work" class="button style2 down anchored">Next</a>
			</section>

		<!-- Work -->
			<section id="work" class="main style3 primary">
				<div class="content">
					<header>
						<h2>What people say</h2>
						
						<blockquote class="wp-block-quote">
							<p>“谢谢你每天都那么用心为我们准备伙食”</p><cite>Kiki</cite>
						</blockquote>

						<blockquote class="wp-block-quote">
							<p>”这个星期的伙食太棒了，我也特别喜欢昨天的娘惹猪扒‘’</p><cite>Joseph</cite>
						</blockquote>

						<blockquote class="wp-block-quote">
							<p>My husband is fussy but he praised ur food is very good &amp; cook with sincerity.</p>
							<cite>Vivian</cite>
						</blockquote>
					</header>

					

				</div>
			</section>

		<!-- Contact -->
			<section id="contact" class="main style3 secondary">
				<div class="content">
					<header>
						<h2>Say Hello.</h2>
						
					</header>
					<div class="box">
					<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
}
?>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">

				<!-- Icons -->
					<ul class="icons">
						<!--<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>-->
						<li><a href="https://www.facebook.com/lizzkitchen2020" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<!--<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
						-->
						<li><a href="#" class="icon brands fa-youtube"><span class="label">Youtube</span></a></li>
					</ul>

				<!-- Menu -->
					<ul class="menu">
						<li>&copy; Lizzkitchen.com</li><li>Design: <a href="mailto:shawn@webimmersion.com">Web Immersion</a></li>
					</ul>

			</footer>

		<!-- Scripts -->
			<script src="<?php echo get_template_directory_uri(); ?>/assets/homejs/jquery.min.js"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/assets/homejs/jquery.poptrox.min.js"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/assets/homejs/jquery.scrolly.min.js"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/assets/homejs/jquery.scrollex.min.js"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/assets/homejs/browser.min.js"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/assets/homejs/breakpoints.min.js"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/assets/homejs/util.js"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/assets/homejs/main.js"></script>

	</body>
</html>
