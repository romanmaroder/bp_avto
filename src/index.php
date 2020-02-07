<?php
session_start();
require_once ('lang/lang.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8" />
<!--	<meta name="viewport" content="width=device-width, initial-scale=1.0" />-->
<!--	<meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=3.0, minimum-scale=0.2" />-->
	<meta name="description"
		  content="Bp auto (car selection) - проверка, диагностика автомобилей перед покупкой. Автоподбор поддержаных и новых авто. ">
	<meta name="keywords"
		  content="Автоподбор,Автоподбор поддержаных автомобилей,Автоподбор новых автомобилей,Автоподбор автомобилей с
		  пробегом,услуги автоподбора,подбор авто,диагностика авто,диагностика авто перед покупкой,компьютерная диагностика
		   авто,проверка пробег,проверка пробега авто,выездной диагностика,автомобиль диагностика,подбор авто,автомобиль покупка
		   помощь,купить авто,купить машину,купить б/у машину,купить автомобиль,продать авто,авто ремонт,авто сервисы Рига,
		   Выездная авто диагностика,покупка авто Рига,выездная проверка авто,авто Румбула Рига,">
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta http-equiv="x-rim-auto-match" content="none">
	<meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" href="libs/normalize.css" />
	<link rel="stylesheet" href="libs/magnific-popup.css" />
	<link rel="stylesheet" href="fonts/stylesheet.css" />
	<link rel="stylesheet" href="css/main.css" />

	<title>BP AUTO</title>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
<!-- Header -->
<header class="header">
	<div class="container-fluid">
		<nav class="navigation">
			<div class="navigation__logo logo">
				<a href="#"><img src="images/logo.png" alt="logo" /></a>
			</div>
			<div class="navigation__block">
				<div class="navigation__phone phone">+(371) 26858674</div>
				<ul class="navigation__menu menu">
					<li class="menu__item">
						<a href="#pop-up-about" class="menu__link popup-about"><?php echo $Lang['about_us']?></a>
					</li>
					<li class="menu__item">
						<a href="#servise" class="menu__link"><?php echo $Lang['what_we_do']?></a>
					</li>
					<li class="menu__item">
						<a href="#for-look" class="menu__link"><?php echo $Lang['search_car']?></a>
					</li>
					<li class="menu__item">
						<a href="#why-us" class="menu__link"><?php echo $Lang['why_we']?></a>
					</li>
					<li class="menu__item">
						<a href="#delivery" class="menu__link"><?php echo $Lang['car_service']?></a>
					</li>
					<li class="menu__item">
						<a href="#contact" class="menu__link"><?php echo $Lang['contacts']?></a>
					</li>
				</ul>
			</div>
			<div class="navigation__action">
				<div class="navigation__top">
					<div class="navigation__social">
						<a href="#">
							<img src="images/icon/icon_facebook.png" alt="facebook link" />
						</a>
						<a href="#">
							<img src="images/icon/icon_instagram.png" alt="instagram link" />
						</a>
					</div>
					<div class="navigation__lang">
						<a href="index.php?lang=ru">RUS</a>
						<span>|</span>
						<a href="index.php?lang=lv">LV</a>
						<span>|</span>
						<a href="index.php?lang=en">EN</a>
					</div>
				</div>
				<div class="navigation__bottom">
					<a href="#poup-form" class="btn btn__small navigation__btn popup-modal"><?php echo $Lang['make_order']?></a>
				</div>
			</div>
		</nav>
		<div class="header__content">
			<h1 class="header__title"><?php echo $Lang['main_title']?></h1>
			<p class="header__subtitle"><?php echo $Lang['main_subtitle']?></p>
			<a href="#pop-up-about" class="btn header__btn btn__small popup-about"><?php echo $Lang['about_us_btn']?></a>
			<div class="header__scroll"></div>
		</div>
	</div>
</header>
<!-- Main content -->
<main>
	<!-- Services -->
	<section class="services" id="servise">
		<h2 class="main-title"><?php echo $Lang['what_we_do']?></h2>

		<div class="container">
			<!-- top card -->
			<div class="top-card">
				<div class="card">
					<div class="card__img ">
						<img src="images/service_1.jpg" alt="service" />
					</div>
					<?php echo $Lang['one_car_checking'];?>
					<hr class="card__line-top" />
					<div class="card__price">Стоимость - от 30 EUR/авто</div>
					<a href="#poup-form" class="card__btn btn btn__small popup-modal">Заказать</a>
				</div>

				<div class="card">
					<div class="card__img">
						<img src="images/service_2.jpg" alt="service" />
					</div>
					<div class="card__title">
						Полный осмотр одного авто <br>перед покупкой у нас в сервисе
					</div>
					<div class="card__list">
						<ul>
							<li>Осмотр кузова толщиномером (на предмет ремонта и ДТП)</li>
							<li>Детальная компьютерная диагностика (профильным оборудованием)</li>
							<li>Тест-драйв для проверки авто на ходу</li>
							<li>Проверка двигателя, коробки, ходовой части (на подъемнике)
							</li>
							<li>Выявление реального состояния автомобиля, расчет по ремонту
							</li>
							<li>Работаем как в присутствии заказчика, так и дистанционно
								(экономя его время)
							</li>
							<li>Проверка авто на юридическую частоту</li>
							<li>Торги с продавцом, которые чаще всего окупают наши услуги
							</li>
							<li>Помощь в оформлении автомобиля, постановке на учет</li>
						</ul>
					</div>
					<hr class="card__line-top" />
					<div class="card__price">Стоимость - от 40 EUR/авто</div>
					<a href="#poup-form" class="card__btn btn btn__small popup-modal">Заказать</a>
				</div>
			</div>
			<!-- bottom card -->
			<div class="bottom-card">
				<div class="card card__bottom">
					<div class="card__img card__img--bottom">
						<img src="images/service_3.jpg" alt="service" />
					</div>
					<h3 class="card__title">
						Выездной осмотр <br>нескольких авто <br> перед покупкой Латвия-Литва-Эстония (эксперт на день) </h3>
					<div class="card__content">
						<p>
							Данный вариант чаще всего выбирают наши клиенты если у них несколько авто находятся в одном
							месте или в разных местах по городу. Также если автомобили находятся в регионах по Латвии
							или они хотят купить машину в Литве, Эстонии. </p>
						<p>
							Опираясь от пожелания заказчика мы даем ему ставку, при которой с экспертом они могут
							осмотреть
							все интересующие автомобили. </p>
						<p>
							Сам спектр услуг по данному варианту будет такой же как на стандартном выездном
							осмотре. </p>
					</div>
					<hr class="card__line-bottom" />
					<div class="card__price">Стоимость - от 50 EUR</div>
					<a href="#poup-form" class="card__btn btn btn__small popup-modal">Заказать</a>
				</div>

				<div class="card card__bottom">
					<div class="card__img card__img--bottom">
						<img src="images/service_4.jpg" alt="service" />
					</div>
					<h3 class="card__title">
						Подбор автомобиля <br />под ключ <br />(Латвия-Литва-Эстония) </h3>
					<div class="card__content">
						<p>
							Как это работает - мы получаем от клиента фильтр на автомобиль, который он хочет приобрести.
							Фильтр включает в себя: марку, модель, кузов, двигатель, коробку, цвет авто, желаемый пробег
							и экстры. Обозначает также территорию поиска. </p>
						<p>
							Мы начинаем искать авто, просматривая объявления и прозванивая продавцов. Как только мы
							находим наиболее достойные варианты, мы отправляем ссылки на них заказчику. Если его все
							устраивает,
							мы выезжаем на осмотр автомобилей. Как только мы находим живой, хороший автомобиль,
							согласовываем все с продавцом, заказчик приезжает сам, принимает нашу работы и покупает
							автомобиль. Такая услуга также возможна по Литве и Эстонии. </p>
					</div>
					<hr class="card__line-bottom" />
					<div class="card__price">Стоимость - от 100 EUR/авто</div>
					<a href="#poup-form" class="card__btn btn btn__small popup-modal">Заказать</a>
				</div>

				<div class="card card__bottom">
					<div class="card__img card__img--bottom">
						<img src="images/service_5.jpg" alt="service" />
					</div>
					<h3 class="card__title">Авто под заказ <br />из Европы</h3>
					<div class="card__content">
						<p>
							Выбирая данную услугу, мы можем помочь привезти под заказчика
							автомобиль из Европы. </p>
						<p>
							По его ссылкам или фильтру, мы поможем связаться с продавцами, получить нужную информацию по
							машинам. Проверить ее и дать свои рекомендации. </p>
						<p>
							Стоимость услуги будет включать в себя: поиск авто, проверку автомобиля по VIN номеру,
							переговоры с продавцами, проверку юрид. частоты автомобиля и доставку. </p>
					</div>
					<hr class="card__line-bottom" />
					<div class="card__price">Стоимость - от 500 EUR/авто</div>
					<a href="#poup-form" class="card__btn btn btn__small popup-modal">Заказать</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Problem -->
	<section class="flex">
		<h2 class="main-title">
			Основные проблемы при <br />
			покупке авто самостоятельно </h2>

		<div class="container">
			<div class="flex__wrap flex__wrap--problem">
				<div class="flex__items flex__items--problem">
					<div class="flex__img">
						<img src="images/icon/icon_car.png" alt="car" />
					</div>
					<div class="flex__description flex__description--problem">
						Состояние не соотвествует <br />
						заявленному <br /><span>(ремонт скрытых дефектов)</span>
					</div>
				</div>

				<div class="flex__items flex__items--problem">
					<div class="flex__img">
						<img src="images/icon/icon_speedometer.png" alt="speedometer" />
					</div>
					<div class="flex__description flex__description--problem">Скрученный<br>пробег</div>
				</div>

				<div class="flex__items flex__items--problem">
					<div class="flex__img">
						<img src="images/icon/icon_alarm.png" alt="alarm" />
					</div>
					<div class="flex__description flex__description--problem">
						Проблемы с документами <br />
						и регистрацией
					</div>
				</div>

				<div class="flex__items flex__items--problem">
					<div class="flex__img">
						<img src="images/icon/icon_judge.png" alt="jude" />
					</div>
					<div class="flex__description flex__description--problem">
						Риски при покупке <br />
						залоговых автомобилей
					</div>
				</div>

				<div class="flex__items flex__items--problem">
					<div class="flex__img">
						<img src="images/icon/icon_time.png" alt="time" />
					</div>
					<div class="flex__description flex__description--problem">
						Потерянное время на нахождение <br /> живого автомобиля
					</div>
				</div>

				<div class="flex__items flex__items--problem">
					<div class="flex__img">
						<img src="images/icon/icon_wallet.png" alt="wallet" />
					</div>
					<div class="flex__description flex__description--problem">
						Завышенные цены <br />
						и неадекватность продавцов
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- For look -->
	<section class="for-look" id="for-look">
		<h2 class="main-title main-title--color main-title--where">
			Где искать авто </h2>
		<div class="container">
			<ul class="for-look__list">
				<li class="for-look__item">
					<p class="for-look__title">В Латвии</p>
					<div class="for-look__img">
						<a href="https://www.ss.lv/" target="_blank">
							<img src="images/logo_ss.png" alt="В Латвии" /></a>
					</div>
				</li>

				<li class="for-look__item">
					<p class="for-look__title">В Литве</p>
					<div class="for-look__img">
						<a href="https://rus.auto24.ee/main/mainindex.php" target="_blank"><img
								src="images/logo_auto_24.png" alt="В Эстонии" /></a>
					</div>
				</li>

				<li class="for-look__item">
					<p class="for-look__title">В Эстонии</p>
					<div class="for-look__img">
						<a href="https://ru.autoplius.lt/" target="_blank"><img src="images/logo_autoplus.png"
																				alt="В Литве" /></a>
					</div>
				</li>

				<li class="for-look__item">
					<p class="for-look__title">В Европе</p>
					<div class="for-look__img">
						<a href="https://www.autoscout24.com/"><img src="images/logo_auto_scout_24.png"
																	alt="В Европе" /></a>
						<a href="https://www.mobile.de/" target="_blank"><img src="images/logo_mobile.png"
																			  alt="В Европе" /></a>
					</div>
				</li>
			</ul>
		</div>
	</section>

	<!-- Why us-->
	<section class="flex flex--why" id="why-us">
		<h2 class="main-title">
			Почему мы </h2>

		<div class="container">
			<div class="flex__wrap">
				<div class="flex__items flex__items--why">
					<div class="flex__img flex__img--why">
						<img src="images/icon/icon_1.png" alt="01" />
					</div>
					<div class="flex__description flex__description--why">
						Мы проверяем каждое объявление, связываемся с продавцами перед тем как кудо-то ехать
					</div>
				</div>

				<div class="flex__items flex__items--why">
					<div class="flex__img flex__img--why">
						<img src="images/icon/icon_2.png" alt="02" />
					</div>
					<div class="flex__description flex__description--why">
						Можем осматривать авто<br />
						как на выезде, <br />так и у нас в сервисе
					</div>
				</div>

				<div class="flex__items flex__items--why">
					<div class="flex__img flex__img--why">
						<img src="images/icon/icon_3.png" alt="03" />
					</div>
					<div class="flex__description flex__description--why">
						Невысокие расценки на весь <br />спектр услуг
					</div>
				</div>

				<div class="flex__items flex__items--why">
					<div class="flex__img flex__img--why">
						<img src="images/icon/icon_4.png" alt="04" />
					</div>
					<div class="flex__description flex__description--why">
						Работаем как компания,<br />
						предоставляя <br />все отчеты и акты
					</div>
				</div>

				<div class="flex__items flex__items--why">
					<div class="flex__img flex__img--why">
						<img src="images/icon/icon_5.png" alt="05" />
					</div>
					<div class="flex__description flex__description--why">
						Засчет торга с продавцами, чаще
						всего стоимость наших услуг входит
						в скидку от общей цены авто
					</div>
				</div>

				<div class="flex__items flex__items--why">
					<div class="flex__img flex__img--why">
						<img src="images/icon/icon_6.png" alt="06" />
					</div>
					<div class="flex__description flex__description--why">
						Большой опыт в работе <br />с автомобилями
					</div>
				</div>

				<div class="flex__items flex__items--why">
					<div class="flex__img flex__img--why">
						<img src="images/icon/icon_7.png" alt="07" />
					</div>
					<div class="flex__description flex__description--why">
						Всегда на стороне клиента, <br />работаем до конца пока не
						найдем нужный автомобиль
					</div>
				</div>

				<div class="flex__items flex__items--why">
					<div class="flex__img flex__img--why">
						<img src="images/icon/icon_8.png" alt="08" />
					</div>
					<div class="flex__description flex__description--why">
						Оплата по факту после <br />
						предоставления услуги
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Order -->
	<section class="order">
		<div class="container">
			<div class="order__wrap ">
				<h2 class="order__heading">Заказ</h2>
				<form action="mail.php?lang=ru" method="POST" class="form order__form">
					<div class="form__title order__title">Заказать осмотр</div>
					<div class="form__subtitle order__subtitle">
						Закажите осмотр авто у нас. <br /><br />
						Оставьте ссылку на авто, который <br />
						вас интересует, и наш менеджер свяжется с вами
					</div>

					<label class="form__label order__label" for="link">Ссылка</label>
					<input class="form__input order__input" type="text" name="link" id="link" placeholder="" required />

					<label class="form__label order__label" for="email">Email/телефон </label>
					<input class="form__input order__input" type="text" name="email" id="email" placeholder=""
						   required />
<!--					<div class="form__captcha">-->
<!--						<div class="g-recaptcha"  style="transform:scale(0.9);transform-origin:0;" data-sitekey="6LfcSNUUAAAAAIC4yP1R4wMMLBttNJUrjPxuhJBn"></div>-->
<!--					</div>-->
					<input class="btn btn__large form__btn" type="submit" name="submit" value="Отправить">
					<div class="form_result"></div>
					<hr class="form__line" />
					<div class="form__contacts order__contacts">
						<p>Также с нами можно связаться по данному номеру</p>
						<p>+ (371) 26858674</p>
						<div class="form__icon">
							<img src="images/icon/icon_viber.png" alt="viber" />
							<img src="images/icon/icon_whatsapp.png" alt="vwhatsapp" />
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>

	<!-- Delivery -->
	<section class="delivery" id="delivery">
		<div class="container">
			<div class="delivery__wrap">
				<h3 class="main-title main-title--color">Автосервис и доставка</h3>
				<p class="delivery__subtitle">
					Посетите сайты нашей компании и узнайте больше о нас: </p>
				<div class="delivery__inner">
					<div class="delivery__left delivery__block">
						<a href=" http://bpauto.lv/cardelivery/" target="_blank" class="delivery__link"></a>
						<p class="delivery__description">
							Доставка автомобилей автовозом из Европы <br />
							в Страны Балтии. Еженедельная перевозка  <br />авто Литва -
							Латвия - Эстония. </p>
					</div>
					<div class="delivery__right delivery__block">
						<a href="http://bpauto.lv/" target="_blank" class="delivery__link delivery__link--hover"></a>
						<p class="delivery__description">
							Автосервис. <br />Продажа новых, б/у автозапчастей. </p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Map -->
	<section class="map" id="contact">
		<h2 class="map__heading">Контакты</h2>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3076.9365685277126!2d24.05614865797299!3d56.953551868737456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecffd5268be5f%3A0xc439fb05a5f73f44!2zU2xva2FzIGllbGEgNTIsIEt1cnplbWVzIHJham9ucywgUsSrZ2EsIExWLTEwMDcsINCb0LDRgtCy0LjRjw!5e0!3m2!1sru!2sua!4v1580329075130!5m2!1sru!2sua"
				height="568" style="border:0;" allowfullscreen=""></iframe>

		<div class="map__contact">
			<p class="map__title">Контакты</p>
			<p class="map__name">BP Auto | SIA "Next Baltic"</p>
			<p class="map__data map__data--loc">Ул. Слокас 52 (LV-1007) Рига</p>
			<p class="map__data map__data--tel">
				Тел: + (371) 26858674 (WhatsApp/Viber) </p>
			<p class="map__data map__data--mail">
				E-mail: <a href="mailto:info@bpauto.lv">info@bpauto.lv</a>
			</p>
			<p class="map__data map__data--web">
				Web: <a href="www.bpauto.lv">www.bpauto.lv</a>
			</p>
		</div>
	</section>

	<!-- Feedback -->
	<section class="feedback">
		<div class="container">
			<h3 class="main-title">
				Обратная связь </h3>
			<div class="feedback__inner">
				<div class="feedback__img">
					<img src="images/ask.png" alt="email" />
					<p class="feedback__desc">
						Будем рады помочь, если у вас возникнут вопросы </p>
				</div>

				<form action="mail.php?lang=ru" method="POST" class="feedback__form">
					<div class="feedback__block">
						<label class="feedback__label" for="e-mail">Ваш e-mail</label>
						<input type="email" name="email" id="e-mail" class="feedback__input" required />
<!--						<div class="feedback__captcha">-->
<!--							<div class="g-recaptcha"-->
<!--								 style="transform:scale(0.9);transform-origin:0;"-->
<!--								 data-sitekey="6LfcSNUUAAAAAIC4yP1R4wMMLBttNJUrjPxuhJBn-->
<!--							"></div>-->
<!--						</div>-->
					</div>

					<div class="feedback__block">
						<label class="feedback__label" for="message">Ваше сообщение</label>
						<textarea name="message" id="message" cols="30" rows="10" class="feedback__textarea"
								  placeholder=""></textarea>
						<input class="btn btn__small feedback__btn" type="submit" name="submit" value="Отправить">
					</div>
				</form>
			</div>
		</div>
	</section>
</main>
<!-- Footer -->
<footer class="footer">
	<div class="container-fluid">
		<div class="footer__content">
			<div class="footer__contact">
				<p class="footer__phone phone">+(371) 26858674</p>
				<p class="footer__adress">Ул. Слокас 52 (LV-1007) Рига</p>
			</div>
			<div class="footer__menu">
				<div class="footer__item">
					<a href="#pop-up-about" class="footer__link popup-about">О Нас</a>
					<a href="#" class="footer__link">Наши Услуги</a>
				</div>
				<div class="footer__item">
					<a href="#" class="footer__link">Где искать авто</a>
					<a href="#" class="footer__link">Почему мы</a>
				</div>
				<div class="footer__item">
					<a href="#" class="footer__link">Автосервис и доставка</a>
					<a href="#" class="footer__link">Контакты</a>
				</div>
			</div>
			<div class="footer__logo logo">
				<img src="images/logo.png" alt="logo" />
				<div class="footer__copyright">Все права защищены</div>
			</div>
		</div>
	</div>
</footer>

<!-- Popup -->
<section class="pop-up-block white-popup mfp-hide">
	<!-- О нас -->
	<div class="about" id="pop-up-about">
		<header class="about__header">
			<div class="about__bread-crumbs">
				<a href="index.php">Главная /</a>
				<span>О нас</span>
			</div>
			<div class="about__img"></div>
		</header>
		<div class="about__close-modal popup-about-dismiss"></div>
		<div class="about__main">
			<h3 class="main-title about__title">О нас</h3>
<!--			<p class="about__subtitle">-->
<!--				Компания "BP Auto" предлагает свои услуги в перевозке автомобилей из-->
<!--				Европы в Страны Балтии и СНГ. </p>-->
			<p class="about__content">
				Направление Car Selection в нашей компании отвечает за осмотр и подбор б/у, новых автомобилей. Мы
				предлагаем профессиональный сервис по осмотру авто перед покупкой на месте у продавцов (по всей Латвии,
				Литве, Эстонии), также полный осмотр автомобилей у нас в сервисе. Так как на живом рынке чаще всего
				найти и попасть в хороший автомобиль с первого раза достаточно сложно, мы предлагаем такую услугу как
				авто-подбор. Данная услуга полностью освобождает наших клиентов от присутствия при осмотре каждого авто,
				экономя их время.</p>
			<p class="about__content"> Основная наша задача при нахождении автомобиля - это найти для заказчика самый
				живой
				автомобиль по его бюджету на рынке. Что делает наши услуги особенными - это наше отношение к клиенту и
				его пожеланиям, большой опыт работы на авто рынке, возможность обслуживать авто после покупке у нас в
				сервисе, невысокие конкурентоспособные цены, территория поиска автомобилей. Более детально со всеми
				нашими услугами можно ознакомиться на сайте. Мы будем рады сотрудничеству на постоянной основе. По всем
				вопросам обращайтесь пожалуйста, у нас бесплатные консультации для всех клиентов. Контактный телефон
				указан на сайте. </p>
			<p class="about__content">Благодарим за внимание. <br> Bp Auto (Car Logistics).</p>
		</div>

		<footer class="about__footer">
			<div class="about__logo">
				<img src="images/logo.png" alt="logo" />
			</div>
		</footer>
	</div>

	<!-- Форма Заказать осмотр -->

	<form action="mail.php?lang=ru" method="POST" class="form pop-up__form" id="poup-form">
		<div class="form__title">Заказать осмотр</div>
		<div class="pop-up__close-modal popup-modal-dismiss" data-close="close"></div>
		<div class="form__subtitle pop-up__subtitle">
			Оставьте вашу заявку <br />
			и наш менеджер свяжется с вами
		</div>

		<label class="form__label pop-up__label" for="link-popup">Ваш e-mail или телефон</label>
		<input class="form__input pop-up__input" type="text" name="link" id="link-popup"
			   placeholder="Ваши контакты для обратной связи" required />
		<label class="form__label pop-up__label" for="message-popup">Опишите вашу ситуацию</label>
		<textarea class="form__textarea pop-up__textarea" name="message" id="message-popup"
				  placeholder="Здесь вы можете в кратце рассказать про автомобиль, выслать ссылку на объявление"></textarea>

<!--		<div class="form__captcha pop-up__captcha">-->
<!--			<div class="g-recaptcha"  style="transform:scale(0.9);transform-origin:0;"-->
<!--				 data-sitekey="6LfcSNUUAAAAAIC4yP1R4wMMLBttNJUrjPxuhJBn"></div>-->
<!--		</div>-->

		<input class="btn btn__large form__btn" name="submit" type="submit" value="Отправить">
		<div class="form_result"></div>
		<hr class="form__line" />
		<div class="form__contacts">
			<p>Также с нами можно связаться по номеру</p>
			<p>+ (371) 26858674</p>
			<div class="form__icon">
				<img src="images/icon/icon_viber.png" alt="viber" />
				<img src="images/icon/icon_whatsapp.png" alt="vwhatsapp" />
			</div>
		</div>
	</form>
</section>

<div id="btnUp" style="display: inline;"></div>
<!-- Scripts -->
<script src="libs/jquery.min.js"></script>
<script src="libs/jquery.magnific-popup.min.js"></script>
<script src="libs/jquery.malihu.PageScroll2id.js"></script>
<script src="js/main.js"></script>
</body>
</html>

