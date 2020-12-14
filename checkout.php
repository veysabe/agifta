<?php include("header.php") ?>


    <section class="s-checkout s-def-big">
        <div class="checkout-block">
            <div class="container">
                <div class="h1">Оформление заказа</div>
                <div class="row">
                    <div class="grid-8 grid-12_l">
                        <div class="checkout-subtitle mt-2">
                            <div class="subtitle">
                                Ускорьте процесс оформления, зайдите в свой личный кабинет, и данные,<br>
                                занесенные ранее будутавтоматически подставлены в соответствующие поля
                            </div>
                            <div class="mt-3-l">
                                <a href="#" class="btn btn--gray">Войти в личный кабинет</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="basket-root mt-1">
                    <div class="row">
                        <div class="grid-8 grid-12_l">
                            <h3 class="my-3">1. Регион доставки</h3>
                            <div class="basket-wrap">
                                <form>
                                    <div data-checkout-area="del-region">
                                        <div class="cat-el-variety__title">
                                            <span class="cat-el-variety__type">Тип плательщика</span>
                                        </div>
                                        <div class="form-row radios mt-1">
                                            <label class="custom-radio">
                                                <input type="radio" name="type">
                                                <div class="radio-radio"></div>
                                                <span>Физическое лицо</span>
                                            </label>
                                            <label class="custom-radio ml-6 ml-rem-l mt-2-l">
                                                <input type="radio" name="type">
                                                <div class="radio-radio"></div>
                                                <span>Юридическое лицо</span>
                                            </label>
                                        </div>
                                        <div class="cat-el-variety__title mt-3">
                                            <span class="cat-el-variety__type">Местоположение*</span>
                                        </div>
                                        <div class="cat-el-variety__buttons mt-1">
                                            <label class="cat-el-variety__item">
                                                <input type="radio" name="print-type" value="kzn">
                                                <div class="cat-el-variety__item-content">
                                                    <div class="btn btn--gray">Казань</div>
                                                </div>
                                            </label>
                                            <label class="cat-el-variety__item">
                                                <input type="radio" name="print-type" value="msk">
                                                <div class="cat-el-variety__item-content">
                                                    <div class="btn btn--gray">Москва</div>
                                                </div>
                                            </label>
                                            <label class="cat-el-variety__item">
                                                <input type="radio" name="print-type" value="spb">
                                                <div class="cat-el-variety__item-content">
                                                    <div class="btn btn--gray">Санкт-Петербург</div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="form-row mt-3">
                                            <label>
                                                <input type="text" name="" data-label=""
                                                       class="label-input label-input--no-label label-input--gray"
                                                       data-req="true" placeholder="Город" value="Казань">
                                            </label>
                                        </div>
                                        <div class="cat-el-variety__title mt-3">
                                            <span class="cat-el-variety__type">Индекс*</span>
                                        </div>
                                        <div class="form-row mt-1">
                                            <label>
                                                <input type="text" name="" data-label=""
                                                       class="label-input label-input--no-label label-input--gray"
                                                       data-req="true" placeholder="Индекс" value="420107">
                                            </label>
                                        </div>
                                        <div class="subtitle mt-1">
                                            *Выберите город в списке. Если вы не нашли свой город, выберите "другое
                                            местоположение", а город впишите в поле "Город"
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <h3 class="my-3">2. Доставка</h3>
                            <div class="basket-wrap">
                                <div class="checkout-tiles" data-checkout-area="del-type">
                                    <div class="row">
                                        <div class="grid-7 grid-12_l">
                                            <div class="checkout-tiles__tiles">
                                                <div class="ch-tiles__tile">
                                                    <div class="ch-tiles__tile-content">
                                                        <div class="ch-tiles__tile__img">
                                                            <img src="/img/checkout/sdek.png">
                                                        </div>
                                                        <div class="ch-tiles__tile__title">
                                                            Самовывоз с пункта выдачи СДЭК 0 р.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ch-tiles__tile selected">
                                                    <div class="ch-tiles__tile-content">
                                                        <div class="ch-tiles__tile__img">
                                                            <img src="/img/checkout/sdek.png">
                                                        </div>
                                                        <div class="ch-tiles__tile__title">
                                                            Доставка курьером СДЭК 500 р.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ch-tiles__tile">
                                                    <div class="ch-tiles__tile-content">
                                                        <div class="ch-tiles__tile__img">
                                                            <img src="/img/checkout/russian-post.png">
                                                        </div>
                                                        <div class="ch-tiles__tile__title">
                                                            В отделение Почты России
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ch-tiles__tile">
                                                    <div class="ch-tiles__tile-content">
                                                        <div class="ch-tiles__tile__img">
                                                            <img src="/img/checkout/samovivoz.png">
                                                        </div>
                                                        <div class="ch-tiles__tile__title">
                                                            Самовывоз с пункта выдачи СДЭК 0 р.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ch-tiles__tile">
                                                    <div class="ch-tiles__tile-content">
                                                        <div class="ch-tiles__tile__img">
                                                            <img src="/img/checkout/courier.png">
                                                        </div>
                                                        <div class="ch-tiles__tile__title">
                                                            Самовывоз с пункта выдачи СДЭК 0 р.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid-5 grid-12_l mt-3-l">
                                            <div class="checkout-tiles__current">
                                                <div class="ch-tiles__cur-content">
                                                    <div class="text-bold">
                                                        Доставка CDEK (Курьером до двери)
                                                    </div>
                                                    <div class="ch-tiles__cur__img">
                                                        <img src="/img/checkout/sdek-big.png">
                                                    </div>
                                                    <div>
                                                        Доставка посылки курьером до двери получателя
                                                    </div>
                                                    <div>
                                                        <span class="subtitle">Стоимость: </span><span>387 руб.</span>
                                                    </div>
                                                    <div>
                                                        <span class="subtitle">Срок доставки: </span><span>дн. 3 (CDEK OPTIMUM)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 class="my-3">3.Оплата</h3>
                            <div class="basket-wrap">
                                <div class="checkout-tiles" data-checkout-area="pay-type">
                                    <div class="row">
                                        <div class="grid-7 grid-12_l">
                                            <div class="checkout-tiles__tiles">
                                                <div class="ch-tiles__tile selected">
                                                    <div class="ch-tiles__tile-content">
                                                        <div class="ch-tiles__tile__img">
                                                            <img src="/img/checkout/ya-kassa.png">
                                                        </div>
                                                        <div class="ch-tiles__tile__title">
                                                            Яндекс.Касса
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ch-tiles__tile">
                                                    <div class="ch-tiles__tile-content">
                                                        <div class="ch-tiles__tile__img">
                                                            <img src="/img/checkout/bank-card.png">
                                                        </div>
                                                        <div class="ch-tiles__tile__title">
                                                            Банковская карта
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ch-tiles__tile">
                                                    <div class="ch-tiles__tile-content">
                                                        <div class="ch-tiles__tile__img">
                                                            <img src="/img/checkout/check.png">
                                                        </div>
                                                        <div class="ch-tiles__tile__title">
                                                            Оформить счет без НДС
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ch-tiles__tile">
                                                    <div class="ch-tiles__tile-content">
                                                        <div class="ch-tiles__tile__img">
                                                            <img src="/img/checkout/cash.png">
                                                        </div>
                                                        <div class="ch-tiles__tile__title">
                                                            Наличные курьеру
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ch-tiles__tile">
                                                    <div class="ch-tiles__tile-content">
                                                        <div class="ch-tiles__tile__img">
                                                            <img src="/img/checkout/percent.png">
                                                        </div>
                                                        <div class="ch-tiles__tile__title">
                                                            Оформить счет с НДС
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid-5 grid-12_l mt-3-l">
                                            <div class="checkout-tiles__current">
                                                <div class="ch-tiles__cur-content">
                                                    <div class="text-bold">
                                                        Оплата с Яндекс.Касса
                                                    </div>
                                                    <div class="ch-tiles__cur__img">
                                                        <img src="/img/checkout/ya-kassa-big.png">
                                                    </div>
                                                    <div>
                                                        Оплата онлайн с помощью карт Visa, MasterCard и МИР
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 class="my-3">4. Покупатель</h3>
                            <div class="basket-wrap">
                                <div class="checkout-client-info">
                                    <form>
                                        <div class="form-row">
                                            <label>
                                                <input type="text" name="" data-label=""
                                                       class="label-input label-input--gray" data-req="true">
                                                <span class="label-input-label">ФИО</span>
                                            </label>
                                        </div>
                                        <div class="form-row">
                                            <label>
                                                <input type="text" name="" data-label=""
                                                       class="label-input label-input--gray" data-req="true">
                                                <span class="label-input-label">E-mail*</span>
                                            </label>
                                        </div>
                                        <div class="form-row">
                                            <label>
                                                <input type="text" name="" data-label=""
                                                       class="label-input label-input--gray" data-req="true">
                                                <span class="label-input-label">Телефон*</span>
                                            </label>
                                        </div>
                                        <div class="form-row">
                                            <label>
                                                <input type="text" name="" data-label=""
                                                       class="label-input label-input--gray" data-req="true">
                                                <span class="label-input-label">Адрес доставки*</span>
                                            </label>
                                        </div>
                                        <div class="form-row">
                                            <label class="custom-file-input">
                                                <input type="file" name="" data-label=""
                                                       class="" data-req="true">
                                                Добавить логотип к заказу (.pdf, .cdr, .eps, .svg, .jpg, .png)
                                            </label>
                                        </div>
                                        <div class="form-row">
                                            <textarea class="custom-textarea"
                                                      placeholder="Комментарий к заказу"></textarea>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <h3 class="my-3">5. Товары в заказе</h3>
                            <div class="basket-wrap">
                                <div class="checkout-items">
                                    <div class="checkout-item">
                                        <div class="ch-item__image-title">
                                            <img src="/img/catalog/black-pen.png" alt="">
                                            <span class="ml-2">Черная бумажная ручка</span>
                                        </div>
                                        <div class="ch-item__point">
                                            <p>Артикул</p>
                                            <div>101UV</div>
                                        </div>
                                        <div class="ch-item__point">
                                            <p>Цвет</p>
                                            <div>Чёрный</div>
                                        </div>
                                        <div class="ch-item__point">
                                            <p>Печать</p>
                                            <div>УФ-печать</div>
                                        </div>
                                        <div class="ch-item__point">
                                            <p>Нанесение</p>
                                            <div>1 сторона</div>
                                        </div>
                                        <div class="ch-item__point">
                                            <p>Цена</p>
                                            <div>3 900 Р</div>
                                        </div>
                                        <div class="ch-item__point">
                                            <p>Количество</p>
                                            <div>100 шт.</div>
                                        </div>
                                    </div>
                                    <div class="checkout-item">
                                        <div class="ch-item__image-title">
                                            <img src="/img/catalog/red-pen.png" alt="">
                                            <span class="ml-2">Красная бумажная ручка</span>
                                        </div>
                                        <div class="ch-item__point">
                                            <p>Артикул</p>
                                            <div>101UV</div>
                                        </div>
                                        <div class="ch-item__point">
                                            <p>Цвет</p>
                                            <div>Чёрный</div>
                                        </div>
                                        <div class="ch-item__point">
                                            <p>Печать</p>
                                            <div>УФ-печать</div>
                                        </div>
                                        <div class="ch-item__point">
                                            <p>Нанесение</p>
                                            <div>1 сторона</div>
                                        </div>
                                        <div class="ch-item__point">
                                            <p>Цена</p>
                                            <div>3 900 Р</div>
                                        </div>
                                        <div class="ch-item__point">
                                            <p>Количество</p>
                                            <div>100 шт.</div>
                                        </div>
                                    </div>
                                    <div class="checkout-item">
                                        <div class="ch-item__image-title">
                                            <img src="/img/catalog/purple-pen.png" alt="">
                                            <span class="ml-2">Сиреневая бумажная ручка</span>
                                        </div>
                                        <div class="ch-item__point">
                                            <p>Артикул</p>
                                            <div>101UV</div>
                                        </div>
                                        <div class="ch-item__point">
                                            <p>Цвет</p>
                                            <div>Чёрный</div>
                                        </div>
                                        <div class="ch-item__point">
                                            <p>Печать</p>
                                            <div>УФ-печать</div>
                                        </div>
                                        <div class="ch-item__point">
                                            <p>Нанесение</p>
                                            <div>1 сторона</div>
                                        </div>
                                        <div class="ch-item__point">
                                            <p>Цена</p>
                                            <div>3 900 Р</div>
                                        </div>
                                        <div class="ch-item__point">
                                            <p>Количество</p>
                                            <div>100 шт.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="row">
                                    <div class="grid-8 grid-12_l"><label class="style-check-ios">
                                            <input type="checkbox" name="user_policy" data-label="Согласен с условиями"
                                                   value="yes" data-req="true" checked="">
                                            <span>Нажимая кнопку, я даю согласие на&nbsp;обработку персональных данных и&nbsp;соглашаюсь с&nbsp;
                                            <a href="#">условиями политики конфиденциальности</a>
                                        </span>
                                        </label></div>
                                    <div class="grid-4 grid-12_l mt-3-l">
                                        <a href="#" class="btn btn--purple w-100">Оформить заказ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-1"></div>
                        <div class="grid-3 grid-12_l">
                            <div class="basket-wrap  mt-5-l">
                                <div class="basket-total">
                                    <div class="h3">Ваш заказ</div>
                                    <div class="basket-total-row mt-3">
                                        <div>Итого</div>
                                        <div class="total-value">335 700 Р</div>
                                    </div>
                                    <div class="basket-total-row subtitle">
                                        <div>В том числе НДС</div>
                                        <div class="nds-total-value">67 140 Р</div>
                                    </div>
                                    <div class="basket-total-row subtitle">
                                        <div>Доставка</div>
                                        <div class="nds-total-value">Бесплатно</div>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="basket-total-row mb-3">
                                        <div class="h4">Итого</div>
                                        <div class="h4">335 700 Р</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include("footer.php") ?>