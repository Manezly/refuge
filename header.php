<?php

$navbar_logo = get_field('navbar_logo', 'options');
$navbar_logo_link = get_field('navbar_logo_link', 'options');
$link_1_text = get_field('link_1_text', 'options');
$link_1_url = get_field('link_1_url', 'options');
$link_2_text = get_field('link_2_text', 'options');
$link_2_url = get_field('link_2_url', 'options');
$link_3_text = get_field('link_3_text', 'options');
$link_3_url = get_field('link_3_url', 'options');
$link_4_text = get_field('link_4_text', 'options');
$link_4_url = get_field('link_4_url', 'options');
$link_5_text = get_field('link_5_text', 'options');
$link_5_url = get_field('link_5_url', 'options');
$link_6_text = get_field('link_6_text', 'options');
$link_6_url = get_field('link_6_url', 'options');
$nav_book_button_text = get_field('nav_book_button_text', 'options');
$nav_book_button_url = get_field('nav_book_button_url', 'options');
$dark_mode_button_image = get_field('dark_mode_button_image', 'options');
$light_mode_button_image = get_field('light_mode_button_image', 'options');
$second_navbar_logo = get_field('second_navbar_logo', 'options');
?>

<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if (wp_title('', false)) {
										echo ' :';
									} ?> <?php bloginfo('name'); ?></title>

	<link href="//www.google-analytics.com" rel="dns-prefetch">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<?php wp_head(); ?>
	<script>
		// conditionizr.com
		// configure environment tests
		conditionizr.config({
			assets: '<?php echo get_template_directory_uri(); ?>',
			tests: {}
		});
	</script>

</head>

<body <?php body_class(); ?>>
	<div id="top"></div>
	<nav class="full_width navbar" id="nav">
		<div class="fixed_width navbar_container">
			<div class="nav_menu_darklight">
				<div class="light_icons">
					<button class="light_dark sun"><img src="<?= $light_mode_button_image; ?>" alt="sun"></button>
					<button class="light_dark moon"><img src="<?= $dark_mode_button_image; ?>" alt="moon"></button>
				</div>
				<div class="dark_icons">
					<button class="light_dark sun"><img src="<?= get_template_directory_uri(); ?>/img/sun-icon-dark-mode.png" alt="sun"></button>
					<button class="light_dark moon"><img src="<?= get_template_directory_uri(); ?>/img/moon-dark-mode.png" alt="moon"></button>
				</div>
			</div>
			<div class="nav__home">
				<a href="<?= $navbar_logo_link; ?>" class="manchester_bar_logo"><?= $navbar_logo; ?></a>
				<a href="<?= $navbar_logo_link; ?>">
					<h6 class="refuge_logo"><?= $second_navbar_logo; ?></h6>
				</a>
			</div>
			<ul class="nav__links">
				<li><a href="<?= $link_1_url; ?>"><?= $link_1_text; ?></a></li>
				<li><a href="<?= $link_2_url; ?>"><?= $link_2_text; ?></a></li>
				<li><a href="<?= $link_3_url; ?>"><?= $link_3_text; ?></a></li>
				<li><a href="<?= $link_5_url; ?>"><?= $link_5_text; ?></a></li>
			</ul>
			<div class="nav__right">
				<div class="nav__right_desktop">
					<a href="<?= $nav_book_button_url; ?>" class="octagonal_button text_fade">
						<?= $nav_book_button_text; ?>
					</a>
					<div class="light_icons">
						<button class="light_dark sun"><img src="<?= $light_mode_button_image; ?>" alt="sun"></button>
						<button class="light_dark moon"><img src="<?= $dark_mode_button_image; ?>" alt="moon"></button>
					</div>
					<div class="dark_icons">
						<button class="light_dark sun"><img src="<?= get_template_directory_uri(); ?>/img/sun-icon-dark-mode.png" alt="sun"></button>
						<button class="light_dark moon"><img src="<?= get_template_directory_uri(); ?>/img/moon-dark-mode.png" alt="moon"></button>
					</div>
				</div>
				<div class="nav_burger">
					<span></span>
				</div>
			</div>
			<div class="nav_menu_mobile">
				<ul>
					<li><a href="<?= $link_1_url; ?>"><?= $link_1_text; ?></a></li>
					<li><a href="<?= $link_2_url; ?>"><?= $link_2_text; ?></a></li>
					<li><a href="<?= $link_3_url; ?>"><?= $link_3_text; ?></a></li>
					<li><a href="<?= $link_5_url; ?>"><?= $link_5_text; ?></a></li>
				</ul>

			</div>
		</div>
	</nav>