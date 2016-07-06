<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Katri
 */

?>
<!-- #content -->
<footer class="footer">
		<div class="footer-menu-wrap">
			<div class="wrapper">
				<div class="footer-menu">
					<?php
		              $args = array(
		              'theme_location'=>'bottom',
		              );
		              wp_nav_menu($args);
		            ?>
				</div>
			</div>
		</div>
		<div class="footer-bottom-wrap">
			<div class="wrapper">
				<div class="footer-bottom-col">
					<div class="footer-subscribe-block">
						<div class="subscribe-title">Скидка за подписку</div>
						<form action="" class="subscribe-form">
							<div class="form-row">
								<input type="text" name="email" class="form-input" placeholder="ВВЕДИТЕ E-MAIL">
							</div>
							<div class="form-row">
								<input type="submit" value="ОК" class="form-submit">
							</div>
						</form>
					</div>
				</div>					
				<div class="footer-bottom-col">
					<div class="footer-logo">
						<a href="/"><img src="<?=get_stylesheet_directory_uri();?>/images/footer-logo.png" alt="logo"></a>
					</div>
				</div>
				<div class="footer-bottom-col">
					<div class="footer-soc-list">
						<ul>
							<?php echo do_shortcode("[social]"); ?>
						</ul>
					</div>
					<div class="powered"><a href="http://webolution.ru/" target="_blank"><img src="<?=get_stylesheet_directory_uri();?>/images/webolution-logo.png"></a></div>
					<div class="copyright">© 2005-<?=date("Y")?> КАТРИ</div>
				</div>
			</div>
		</div>
	</footer>
		
</div>

<div id="filter-modal" class="filter-modal-box">
	<div class="modal-body">
		<div class="modal-filter-wrap">
			<div class="filter-item">
				<div class="filter-title">Цена</div>
				<div class="filter-toggle-block">
					<div class="range-inputs">
						<input type="text" id="" class="minCost" value="0"/>
						-
						<input type="text" id="" class="maxCost" value="1000"/>
						руб
					</div>
					<div class="modal-range-slider"></div>
				</div>
			</div>
			<div class="filter-item">
				<div class="filter-title">Для кого</div>
				<div class="filter-toggle-block">
					<div class="filter-checkbox-list">
						<div class="checkbox-row">
							<input id="checkbox11" type="checkbox" name="first"/>
					        <label for="checkbox11">Мужчины</label>
					    </div>
					    <div class="checkbox-row">
							<input id="checkbox12" type="checkbox" name="second"/>
					        <label for="checkbox12">Женщины</label>
					    </div>
					    <div class="checkbox-row">
							<input id="checkbox13" type="checkbox" name="third"/>
					        <label for="checkbox13">Дети</label>
					    </div>
					</div>
				</div>
			</div>
			<div class="filter-item">
				<div class="filter-title">Сезон</div>
				<div class="filter-toggle-block">
					<div class="filter-checkbox-list">
						<div class="checkbox-row">
							<input id="season14" type="checkbox" name="first"/>
					        <label for="season14">Зима</label>
					    </div>
					    <div class="checkbox-row">
							<input id="season15" type="checkbox" name="second"/>
					        <label for="season15">Весна</label>
					    </div>
					    <div class="checkbox-row">
							<input id="season16" type="checkbox" name="third"/>
					        <label for="season16">Лето</label>
					    </div>
					     <div class="checkbox-row">
							<input id="season17" type="checkbox" name="third"/>
					        <label for="season17">Осень</label>
					    </div>
					</div>
				</div>
			</div>
			<div class="filter-item">
				<div class="filter-title">Цвет</div>
				<div class="filter-toggle-block">
					<div class="filter-checkbox-list">
						<div class="checkbox-row">
							<input id="color18" type="checkbox" name="first"/>
					        <label for="color18">Белый</label>
					    </div>
					    <div class="checkbox-row">
							<input id="color19" type="checkbox" name="second"/>
					        <label for="color19">Черный</label>
					    </div>
					    <div class="checkbox-row">
							<input id="color20" type="checkbox" name="third"/>
					        <label for="color20">Разноцветный</label>
					    </div>
					     <div class="checkbox-row">
							<input id="color21" type="checkbox" name="fourth"/>
					        <label for="color21">Цвет в несколько слоев несколько слоев</label>
					    </div>
					    <div class="checkbox-row">
							<input id="color22" type="checkbox" name="third"/>
					        <label for="color22">Разноцветный</label>
					    </div>
					     <div class="checkbox-row">
							<input id="color23" type="checkbox" name="fourth"/>
					        <label for="color23">Цвет в несколько слоев несколько слоев</label>
					    </div>
					    <div class="hide-checkbox-block">
					    	<div class="checkbox-row">
								<input id="color24" type="checkbox" name="first"/>
						        <label for="color24">Белый</label>
						    </div>
						    <div class="checkbox-row">
								<input id="color25" type="checkbox" name="second"/>
						        <label for="color25">Черный</label>
						    </div>
						    <div class="checkbox-row">
								<input id="color26" type="checkbox" name="third"/>
						        <label for="color26">Разноцветный</label>
						    </div>
						     <div class="checkbox-row">
								<input id="color27" type="checkbox" name="fourth"/>
						        <label for="color27">Цвет в несколько слоев несколько слоев</label>
						    </div>
					    </div>
					    <a href="#" class="checkbox-more-btn">Показать все</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="order-call" class="modal-box">
	<div class="modal-body">
		<div class="modal-title">Обратный звонок</div>
		<form action="" class="order-call-form modal-form">
			<div class="form-row">
				<input type="text" name="name" class="form-input" placeholder="Имя">
			</div>
			<div class="form-row">
				<input type="text" name="tel" class="form-input tel-input" placeholder="Телефон">
			</div>
			<div class="form-row">
				<input type="text" name="time" class="form-input time-input" placeholder="Удобное время звонка">
			</div>
			<div class="form-row">
				<input type="submit" class="form-submit-btn" value="Отправить">
			</div>
		</form>
	</div>
</div>

<!-- <script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.maskedinput.min.js"></script>
<script src="js/lightslider.min.js"></script>
<script src="js/jquery-ui.min.js"></script> -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<!-- <script src="js/scripts.js"></script> -->
<?php wp_footer(); ?>
</body>
</html>