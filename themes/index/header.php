<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Katri
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="<?=get_stylesheet_directory_uri();?>/css/owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="<?=get_stylesheet_directory_uri();?>/css/jquery.fancybox.css" />
<link rel="stylesheet" type="text/css" href="<?=get_stylesheet_directory_uri();?>/css/lightslider.min.css" />
<link rel="stylesheet" type="text/css" href="<?=get_stylesheet_directory_uri();?>/css/style.css">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700,500&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="main">

	<div class="adaptive-menu-wrap adaptive-header-top-menu">
		<button class="close-adaptive-menu"></button>
			<?php
	              $args = array(
	              'theme_location'=>'top',
	              );
	              wp_nav_menu($args);
	            ?>
	</div>
	<header class="header">
		<a href="#" class="header-menu-toggle-btn"></a>
		<div class="header-top-wr">
			<div class="wrapper">
				<nav class="header-top-menu">
					<?php
		              $args = array(
		              'theme_location'=>'top',
		              );
		              wp_nav_menu($args);
		            ?>
				</nav>
				<div class="login-reg-block">
					<ul>
						<li><a href="#order-call" class="modal-trigger login-link">Вход</a></li>
						<li><a href="#order-call" class="modal-trigger">Регистрация</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="header-middle-wr">
			<div class="wrapper">
				<div class="logo-block"><a href="/"><img src="<?=get_stylesheet_directory_uri();?>/images/logo.png"></a></div>
				<div class="header-descr-block">
					<div class="header-title">Трикотажная фабрика</div>
					<div class="header-price"><?php echo do_shortcode("[download-price]"); ?></div>
				</div>
				<div class="header-contacts">
					<div class="header-tel">
						<a><?php echo do_shortcode("[phone]"); ?></a>	
					</div>
					<div class="callback">
						<a href="#order-call" class="modal-trigger">Обратный звонок</a>	
					</div>
				</div>
			</div>
		</div>

		<div class="adaptive-header-middle-wr">
			<div class="wrapper">
				<div class="top-line">
					<div class="logo-block"><a href="/"><img src="<?=get_stylesheet_directory_uri();?>/images/logo.png"></a></div>
					<div class="header-title">Трикотажная фабрика</div>
				</div>
				<div class="bottom-line">
					<div class="header-tel">
						<a><?php echo do_shortcode("[phone]"); ?></a>	
					</div>
					<div class="header-price"><?php echo do_shortcode("[download-price]"); ?></div>
				</div>
			</div>
		</div>

		<div class="header-bottom-wr">
			<div class="wrapper">
				<nav class="header-main-menu">
					<ul>
						<li><a href="#">Корпоративная одежда</a></li>
						<li><a href="#">Брендирование</a></li>
						<li><a href="#">Трикотажное полотно</a></li>
						<li><a href="#">Головные уборы</a></li>
						<li><a href="#">Женский трикотаж</a></li>
						<li><a href="#">Мужской трикотаж</a></li>
						<li><a href="#">Новинки!</a></li>
						<li><a href="#">Распродажа</a></li>
					</ul>
				</nav>

				<div class="adaptive-cat-slider">
					<div class="cat-menu-slider">
						<div class="item">
							<div class="cat-menu-table">
								<div class="cat-menu-table-cell">
									<a href="#">Корпоративная одежда</a>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="cat-menu-table">
								<div class="cat-menu-table-cell">
									<a href="#">Брендирование</a>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="cat-menu-table">
								<div class="cat-menu-table-cell">
									<a href="#">Трикотажное полотно</a>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="cat-menu-table">
								<div class="cat-menu-table-cell">
									<a href="#">Головные уборы</a>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="cat-menu-table">
								<div class="cat-menu-table-cell">
									<a href="#">Женский трикотаж</a>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="cat-menu-table">
								<div class="cat-menu-table-cell">
									<a href="#">Мужской трикотаж</a>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="cat-menu-table">
								<div class="cat-menu-table-cell">
									<a href="#">Новинки!</a>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="cat-menu-table">
								<div class="cat-menu-table-cell">
									<a href="#">Распродажа</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>