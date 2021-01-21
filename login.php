<?php include('header.php'); ?>

<section class="s-login s-def">
    <div class="container">
        <div class="h1 sec-title">
            Вход или регистрация
        </div>
        <div class="login-block mt-1-s mt-10">
            <div class="row">
                <div class="grid-6 grid-12_l">
                    <div class="login-form">
                        <div class="login-form-content">
                            <div class="h4 mb-4">Вход в личный кабинет</div>
                            <form class="login-form__form">
                                <div class="form-row">
                                    <label>
                                        <input type="text" name="" data-label=""
                                               class="label-input" data-req="true">
                                        <span class="label-input-label">E-mail</span>
                                    </label>
                                </div>
                                <div class="form-row">
                                    <label>
                                        <input type="password" name="" data-label=""
                                               class="label-input" data-req="true">
                                        <span class="label-input-label">Пароль</span>
                                    </label>
                                </div>
                                <div class="login-form__buttons">
                                    <div>
                                        <a href="#" class="link-arrow">Забыли пароль? <i class="i-arrow-right"></i></a>
                                    </div>
                                    <div>
                                        <a href="/lk.php" class="btn btn--purple">Отправить</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="grid-6 grid-12_l">
                    <div class="login-block-badge">
                        <div class="login-block-badge-content">
                            <div class="h4 mb-4">Собираетесь оформить первый заказ?</div>
                            <div class="login-block-badge__text">
                                Сделайте это через личный кабинет. Вас ждет бонусная программа, личный менеджер,
                                отслеживание заказов и возможность добавить несколько компаний с реквизитами для быстрой
                                оплаты.
                                <br>
                                <br>
                                Уже со второго заказа вы участвуете в бонусной программе и получаете скидку от 3%.
                            </div>
                            <div class="login-block-badge__button">
                                <a href="#" class="btn btn--gray">Зарегистрироваться</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include('footer.php'); ?>
