<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * Template Name: Главная страница
 * @package Katri
 */

get_header(); ?>

	

	<?php echo get_template_part('template-parts/main-slider'); ?>

	<div class="top-sales-wrap">
		<div class="wrapper">
			<h2><span>Хиты продаж</span></h2>
			<div class="top-sale-slider">
				<div class="item">
					<div class="top-sale-thumb"><a href="<?=get_stylesheet_directory_uri();?>/images/top-sale-img.jpg" class="gallery-modal"><img src="<?=get_stylesheet_directory_uri();?>/images/top-sale-img.jpg"></a></div>
					<div class="top-sale-body">
						<div class="top-sale-name">Шапка женская Mondana 2088</div>
						<div class="top-sale-price">780 руб.</div>
						<div class="top-sale-btn-block">
							<a href="#order-call" class="modal-trigger">Заказать</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="top-sale-thumb"><a href="<?=get_stylesheet_directory_uri();?>/images/top-sale-img.jpg" class="gallery-modal"><img src="<?=get_stylesheet_directory_uri();?>/images/top-sale-img.jpg"></a></div>
					<div class="top-sale-body">
						<div class="top-sale-name">Шапка женская Mondana 2088</div>
						<div class="top-sale-price">780 руб.</div>
						<div class="top-sale-btn-block">
							<a href="#order-call" class="modal-trigger">Заказать</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="top-sale-thumb"><a href="i<?=get_stylesheet_directory_uri();?>/mages/top-sale-img.jpg" class="gallery-modal"><img src="<?=get_stylesheet_directory_uri();?>/images/top-sale-img.jpg"></a></div>
					<div class="top-sale-body">
						<div class="top-sale-name">Шапка женская Mondana 2088</div>
						<div class="top-sale-price">780 руб.</div>
						<div class="top-sale-btn-block">
							<a href="#order-call" class="modal-trigger">Заказать</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="top-sale-thumb"><a href="<?=get_stylesheet_directory_uri();?>/images/top-sale-img.jpg" class="gallery-modal"><img src="<?=get_stylesheet_directory_uri();?>/images/top-sale-img.jpg"></a></div>
					<div class="top-sale-body">
						<div class="top-sale-name">Шапка женская Mondana 2088</div>
						<div class="top-sale-price">780 руб.</div>
						<div class="top-sale-btn-block">
							<a href="#order-call" class="modal-trigger">Заказать</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="top-sale-thumb"><a href="<?=get_stylesheet_directory_uri();?>/images/top-sale-img.jpg" class="gallery-modal"><img src="<?=get_stylesheet_directory_uri();?>/images/top-sale-img.jpg"></a></div>
					<div class="top-sale-body">
						<div class="top-sale-name">Шапка женская Mondana 2088</div>
						<div class="top-sale-price">780 руб.</div>
						<div class="top-sale-btn-block">
							<a href="#order-call" class="modal-trigger">Заказать</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="top-sale-thumb"><a href="<?=get_stylesheet_directory_uri();?>/images/top-sale-img.jpg" class="gallery-modal"><img src="<?=get_stylesheet_directory_uri();?>/images/top-sale-img.jpg"></a></div>
					<div class="top-sale-body">
						<div class="top-sale-name">Шапка женская Mondana 2088</div>
						<div class="top-sale-price">780 руб.</div>
						<div class="top-sale-btn-block">
							<a href="#order-call" class="modal-trigger">Заказать</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="top-sale-thumb"><a href="<?=get_stylesheet_directory_uri();?>/images/top-sale-img.jpg" class="gallery-modal"><img src="<?=get_stylesheet_directory_uri();?>/images/top-sale-img.jpg"></a></div>
					<div class="top-sale-body">
						<div class="top-sale-name">Шапка женская Mondana 2088</div>
						<div class="top-sale-price">780 руб.</div>
						<div class="top-sale-btn-block">
							<a href="#order-call" class="modal-trigger">Заказать</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="history-wrap">
		<div class="wrapper">
			<h2><span>Наша история</span></h2>
			<blockquote>
				<?the_content();?>
			</blockquote>
		</div>
	</div>

	<div class="clients-wrap">
		<div class="wrapper">
			<h2><span>Наши клиенты</span></h2>
			<?php echo get_template_part('template-parts/clients-slider'); ?>
		</div>
	</div>
	
	
<?php
get_footer();
