<footer class="s-site-footer">

	<div class="container">

		<div class="site-footer-top">
			<a href="/" class="site-footer-top__logo">
				<img src="/img/logo.svg" alt="logotype">
			</a>
			<div class="breadcrumbs">
				<a href="#">Каталог</a>
				<a href="#">Бумажные ручки</a>
				<span>Бумажные ручки “Просторучки” цвет Черный</span>
			</div>
		</div>

		<div class="site-footer-middle">
			<div class="site-footer-middle__col">
				<div class="site-footer-title">Каталог</div>
				<nav class="site-footer-nav">
					<a href="#">Бумажные ручки</a>
					<a href="#">Зубные щетки</a>
					<a href="#">Бумажные карандаши</a>
					<a href="#">Шоколад</a>
					<a href="#">Деревянные расчески</a>
					<a href="#">Закладки для книг</a>
					<a href="#">Ежедневники и блокноты</a>
					<a href="#">Когтеточки</a>
				</nav>
			</div>
			<div class="site-footer-middle__col">
				<div class="site-footer-title">О нас</div>
				<nav class="site-footer-nav">
					<a href="/warranty.php">Гарантия качества</a>
					<a href="/delivery.php" class="active">Доставка и Оплата</a>
					<a href="#">Блог</a>
					<a href="#">Отзывы</a>
				</nav>
			</div>
			<div class="site-footer-middle__col">
				<div class="site-footer-title">Клиентам</div>
				<nav class="site-footer-nav">
					<a href="#">Личный кабинет</a>
					<a href="#">Частые вопросы</a>
				</nav>
			</div>
			<div class="site-footer-middle__col site-footer-middle__col--contacts">
				<div class="site-footer-title">Контакты</div>
				<div class="site-footer-address">
					Казань,<br>
					Петербургская 50, корпус 23<br>
					офис 516/2
				</div>
				<div class="site-footer-worktime">
					Режим работы:<br>
					10:00 — 20:00 (по МСК)
				</div>
			</div>
			<div class="site-footer-middle__col site-footer-middle__col--last">
				<a href="tel:88007772045" class="site-footer-phone">8 800 777-20-45</a>
				<div class="site-footer-email">
					<small>Есть вопросы? Пишите</small>
					<a href="mailto:sales@agifta.ru">sales@agifta.ru</a>
				</div>
				<div class="site-footer-socials">
					<a href="#">
						<img src="/img/icons/insta.svg" alt="insta">
					</a>
					<a href="#">
						<img src="/img/icons/vk.svg" alt="vk">
					</a>
					<a href="#">
						<img src="/img/icons/fb.svg" alt="fb">
					</a>
				</div>
			</div>
		</div>
		
	</div>

	<div class="site-footer-bottom">
		<div class="container">
			<div class="site-footer-bottom__left">
				© 2019 — 2020 ИП Акбиров Р.Р.<br>
				Все права защищены
			</div>
			<div class="site-footer-bottom__center">
				Мы собираем обезличенные метаданные пользователя (cookie, данные об IP-адресе и местоположении) для нормального функционирования сайта и если вы не желаете, чтобы эти данные обрабатывались, то пожалуйста покиньте сайт.<br>
				<a href="#">Политика конфиденциальности</a>
			</div>
			<div class="site-footer-bottom__right">
				<a href="https://penbrain.ru" target="_blank" class="penbrain">
					<span>Дизайн<br>и разработка —</span>
					<img src="/img/penbrain.svg" alt="penbrain">
				</a>
			</div>
		</div>
	</div>

</footer>


<!-- Модальные окна -->
<div class="modals-sec">

	<div id="modal-order" class="modal">
		<p>Заказать обратный звонок</p>
		<p>Оставьте заявку и наш администратор свяжется с&nbsp;Вами в течение 10 минут</p>
		<form class="ajax-form">
			<input type="hidden" value="Новая заявка" name="form_subject">
			<input type="text" name="user_name" placeholder="Введите имя" data-label="Имя пользователя" class="input-text" >
			<input type="email" name="user_email" placeholder="Введите e-mail*" data-label="Email" class="input-text" data-req="true">
			<input type="tel" name="user_tel" placeholder="Введите телефон*" data-label="Телефон"  class="input-text" data-req="true">
			<input type="file" name="user_file" data-label="Файл">
			<button type="submit" class="btn">Отправить</button>
			<label class="style-check-ios">
				<input type="checkbox" name="user_policy" data-label="Согласен с условиями" value="yes" data-req="true" checked="">
				<span>Нажимая кнопку, я даю согласие на&nbsp;обработку персональных данных и&nbsp;соглашаюсь с&nbsp;<a href="#">условиями политики конфиденциальности</a></span>
			</label>
		</form>
	</div>

	<div id="modal-thanks" class="modal">
		<p>Спасибо за заявку!</p>
	</div>

	<div id="modal-error" class="modal">
		<p>Что-то пошло не так.</p>
		<p>Попробуйте еще раз.</p>
		<p>Если постоянно видите эту ошибку, пожалуйста, обратитесь к администратору сайта. Мы будем очень благодарны.</p>
	</div>

</div>
<!-- Модальные окна -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js-dev/vendors/jquery-ui.min.js" type="text/javascript" ></script>
<script src="js/assets.js" type="text/javascript" ></script>
<script src="js/main.js" type="text/javascript" ></script>

	</body>
</html>
