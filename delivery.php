<?php include('header.php'); ?>

<!--<section class="main-banner delivery-banner">-->
<!--    <div class="container">-->
<!--        <div class="main-banner__title">Доставка<br>и оплата</div>-->
<!--        <div class="main-banner__text"><strong>Заказ оплачивается после утверждения дизайна</strong>, когда-->
<!--            продукция уже готова к-->
<!--            производству. Доставляем курьером до двери или в ближайший пункт выдачи.-->
<!--        </div>-->
<!--        <div class="main-banner__button"></div>-->
<!--        <img src="/img/delivery/van.png" alt="intro" class="main-banner__additional-image van">-->
<!--    </div>-->
<!--</section>-->


<section class="main-banner delivery-banner w-image">
    <div class="container">
        <div class="main-banner__content">
            <div class="main-banner__title">Доставка <br>и оплата</div>
            <div class="main-banner__text"><strong>Заказ оплачивается после утверждения дизайна</strong>, когда
                продукция уже готова к
                производству. Доставляем курьером до двери или в ближайший пункт выдачи.
            </div>
            <div class="main-banner__button"></div>
        </div>
    </div>
    <img src="/img/delivery/van.png" alt="intro" class="main-banner__additional-image van">
</section>

<section class="pay-info s-def">
    <div class="container">
        <div class="big-title sec-title">Оплата</div>
        <div class="info-block row">
            <div class="info-block__content grid-6 grid-12_l">
                <div class="info-block__content__text">Оплатить заказ можно <strong>двумя способами</strong>:</div>
                <div class="custom-list custom-list--purple">
                    <ul>
                        <li>
                            <div class="h3">Онлайн картой, через Яндекс.Кассу</div>
                        </li>
                        <li>
                            <div class="h3">С расчетного счета</div>
                        </li>
                    </ul>
                </div>
                <div class="info-block__content__text">
                    С наличными не работаем. Вы оплачиваете заказ перед производством<br>
                    продукции. До этого согласовываем условия и дизайн. Вносим столько<br>
                    правок, сколько нужно.
                </div>
            </div>
            <div class="notice-badge grid-6 grid-12_l">
                <div class="notice-badge__content">
                    <div class="notice-badge__title h3">
                        <img src="/img/bell.svg" alt="">
                        <div>Важная информация</div>
                    </div>
                    <div class="notice-badge__text">
                        Если оплачиваете заказ с расчетного счета, то пришлем закрывающие документы. При оплате картой
                        пришлем электронный чек на почту.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="delivery-info s-def">
    <div class="container">
        <div class="big-title sec-title">Доставка</div>
        <div class="info-block row">
            <div class="info-block__content grid-6 grid-12_l">
                <div class="info-block__content__text">Доставить заказ можно <strong>тремя способами</strong>:</div>
                <div class="custom-list custom-list--purple">
                    <ul>
                        <li>
                            <div class="h3">Курьерская служба СДЭК</div>
                            <div class="custom-list__desc">
                                Курьером до двери или в ближайший пункт выдачи. Посмотреть адреса пунктов выдачи в вашем
                                городе можно на сайте.
                            </div>
                        </li>
                        <li>
                            <div class="h3">Почта России</div>
                            <div class="custom-list__desc">
                                В удобное вам отделение по тарифу почты.
                            </div>
                        </li>
                        <li>
                            <div class="h3">Самовывоз</div>
                            <div class="custom-list__desc">
                                Из нашего офиса в Казани. Угостим чаем, расскажем про производство.
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="info-block__content__map">
                    <a href="#">
                        <div class="map-icon">
                            <img src="img/delivery/map-preview.png">
                            <div class="map-icon__text">Схема проезда</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="notice-badge grid-6 grid-12_l">
                <div class="notice-badge__content">
                    <div class="notice-badge__title h3">
                        <img src="/img/bell.svg" alt="">
                        <div>Важная информация</div>
                    </div>
                    <div class="notice-badge__text">
                        Доставка <strong>оплачивается отдельно</strong> при получении курьеру или в пункте выдачи.
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

<?php include('footer.php'); ?>
