<?php include('header.php'); ?>


    <section class="main-banner">
        <div class="container">
            <div class="main-banner__content">
                <div class="main-banner__title">Гарантия<br>качества</div>
                <div class="main-banner__text">Быстро отвечаем на вопросы и всегда выполняем гарантийные обязательства.
                </div>
                <div class="main-banner__button"></div>
            </div>
        </div>
        <img src="/img/warranty/banner-handles.png" class="main-banner__additional-image handles"
             data-parallax='{"y" : 20}'>
        <img src="/img/warranty/banner-bg.png" alt="intro">
    </section>

<?

$warrantyItems = array(
    [
        "NAME" => "Готовы помочь",
        "TEXT" => "Менеджеры нашей компании готовы помочь вам и ответить на любые
                    возникающие вопросы с понедельника по пятницу с 9:00 до 18:00 по Мск."
    ],
    [
        "NAME" => "Такой результат,<br>как вы хотите",
        "TEXT" => "До произведения оплаты менеджер отдела продаж полностью утверждает с вами макет с выбранным дизайном,
         обговаривает все детали по доставке и документации."
    ],
    [
        "NAME" => "Вот как мы работаем<br>с юридическими лицами",
        "TEXT" => "Если вы будете оплачивать от юридического лица, и для проведения транзакции вам нужны документы, юридически подтверждающие законность деятельность нашей организации, менеджер выставит договор на поставку товаров."
    ],
    [
        "NAME" => "Контроль<br>на любом этапе",
        "TEXT" => "После оплаты счета, заказ переходит на этап производства, вы обязательно будете проинформированы об этом в виде смс-сообщения. Как только товар будет произведен и отправлен в ваш город, вам также придет смс-сообщение с трек-номером для отслеживания заказа."
    ],
    [
        "NAME" => "Производство ручек<br>в прямом эфире!",
        "TEXT" => "Бумажные ручки и карандаши с ультрафиолетовой печатью – наш якорный продукт и данные товары изготавливаются в прямом эфире. 
Вы можете в любое рабочее время посмотреть, как проходит производство, а также, чтобы вы не пропустили «Звездный час» 
вашего заказа, за 5 минут вам будет выслано сообщение со ссылкой 
на прямой эфир.
производства."
    ],
    [
        "NAME" => "Не успели посмотреть?<br>Вышлем запись",
        "TEXT" => "Для вашей уверенности перед отправкой мы можем предоставить вам запись производства бумажных ручек и карандашей с ультрафиолетовой печатью."
    ],
    [
        "NAME" => "Мы всегда на связи",
        "TEXT" => "Если после получения заказа у вас возникли какие-либо вопросы, 
с вами всегда на связи менеджер клиентского отдела."
    ],
)

?>
    <section class="warranty-list s-def">
        <div class="container">
            <? foreach ($warrantyItems as $count => $item): ?>
                <div class="warranty-item">
                    <div class="warranty-item__title">
                        <div class="count"><?= $count + 1 ?>.</div>
                        <div><?= $item['NAME'] ?></div>
                    </div>
                    <div class="warranty-item__desc">
                        <?= $item['TEXT'] ?>
                    </div>
                </div>
            <? endforeach; ?>
        </div>
    </section>
    <section class="s-home-subscribe s-def">
        <div class="container home-subscribe">
            <img src="/img/home/subscribe-bg.jpg" alt="img" class="home-subscribe__img">

            <div class="h1 home-subscribe__title">Узнавайте о новинках первыми!</div>
            <div class="home-subscribe__descr">Подпишись на нашу новостную рассылку. Мы против спама и воды.<br>Только
                за
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
                    <input type="checkbox" name="user_policy" data-label="Согласен с условиями" value="yes"
                           data-req="true"
                           checked="">
                    <span>Соглашаюсь на&nbsp;обработку персональных данных и&nbsp;соглашаюсь с&nbsp;условиями <a
                                href="#">политики конфиденциальности</a></span>
                </label>
            </form>
        </div>
    </section>


<?php include('footer.php'); ?>