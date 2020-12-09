<?php include('header.php'); ?>


    <section class="contacts s-def">
        <div class="contacts-content">
            <div class="container">
                <div class="sec-title big-title">
                    Контакты
                </div>
                <div class="contacts-hotline">
                    <div class="contacts-hotline__text">
                        Горячая линия <br class="hidden-xl">8 800 777-20-45
                    </div>
                    <a href="#" class="btn btn--outline mt-2-l">Скачать карту партнера</a>
                </div>
                <div class="contacts-info s-def">
                    <div class="row">
                        <div class="grid-6 grid-12_l">
                            <div class="h3">Главный офис</div>
                            <div class="row contacts-info__text">
                                <div class="grid-6 grid-12_l">
                                    <div class="contacts-info__text__elem">
                                        <div class="title">Телефон</div>
                                        <div class="h3">8 843 206-07-96</div>
                                    </div>
                                    <div class="contacts-info__text__elem">
                                        <div class="title">E-mail</div>
                                        <div class="h3">mail@agifta.ru</div>
                                    </div>
                                </div>
                                <div class="grid-6 grid-12_l">
                                    <div class="contacts-info__text__elem">
                                        <div class="title">Адрес</div>
                                        <div class="h3">Казань, Овражная 14<br>1 этаж</div>
                                    </div>
                                    <div class="contacts-info__text__elem">
                                        <div class="title">Метро</div>
                                        <div class="h3">Суконная слобода<br>Площадь Тукая</div>
                                    </div>
                                    <div class="contacts-info__text__elem">
                                        <div class="title">Адрес</div>
                                        <div class="h3">09:00 - 18:00<br>Пн-Пт</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-6 grid-12_l mt-5-l">
                            <div class="contacts-map">
                                <div id="map"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="s-home-subscribe s-def">
        <div class="container home-subscribe">
            <img src="/img/home/subscribe-bg.jpg" alt="img" class="home-subscribe__img">

            <div class="h1 home-subscribe__title">Узнавайте о новинках первыми!</div>
            <div class="home-subscribe__descr">Подпишись на нашу новостную рассылку. Мы против спама и воды.<br>Только за
                качественный контент!
            </div>

            <form class="ajax-form subscribe-form">
                <input type="hidden" value="Новая заявка" name="form_subject">
                <div class="subscribe-form__row">
                    <input type="email" name="user_email" placeholder="Введите e-mail*" data-label="Email"
                           class="input-text" data-req="true">
                    <button type="submit" class="btn btn--purple">Отправить</button>
                </div>
                <label class="style-check-ios style-check-ios--white">
                    <input type="checkbox" name="user_policy" data-label="Согласен с условиями" value="yes" data-req="true"
                           checked="">
                    <span>Соглашаюсь на&nbsp;обработку персональных данных и&nbsp;соглашаюсь с&nbsp;условиями <a href="#">политики конфиденциальности</a></span>
                </label>
            </form>
        </div>
    </section>

    <script>
        ymaps.ready(init);

        function init() {

            let myMap = new ymaps.Map("map", {
                center: [55.784815, 49.136714],
                zoom: 13,
                duration: 1000,
                controls: []
            }, {
                suppressMapOpenBlock: true
            });

            let marker = new ymaps.Placemark([55.784815, 49.136714], {}, {
                iconLayout: 'default#image',
                iconImageHref: '/img/icons/map-marker.png',
                iconImageSize: [39, 48],
                iconImageOffset: [-17.61, -48]
            });

            myMap.geoObjects.add(marker)
        };
    </script>


<?php include('footer.php'); ?>