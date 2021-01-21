<?php include('header.php'); ?>

<section class="s-login s-def">
    <div class="container">
        <div class="h1 sec-title">
            Регистрация
        </div>
        <div class="login-block mt-1-s mt-10">
            <div class="row">
                <div class="grid-6 grid-12_l">
                    <div class="login-form">
                        <div class="login-form-content">
                            <div class="h4 mb-4">Регистрация пользователя</div>
                            <form class="login-form__form">
                                <div class="form-row">
                                    <label>
                                        <input type="email" name="user_email" data-label="email"
                                               class="label-input" data-req="true">
                                        <span class="label-input-label">E-mail</span>
                                    </label>
                                </div>
                                <div class="form-row">
                                    <label>
                                        <input type="password" name="user_password" data-label="password"
                                               class="label-input" data-req="true">
                                        <span class="label-input-label">Введите пароль</span>
                                    </label>
                                </div>
                                <div class="form-row">
                                    <label>
                                        <input type="password" name="user_password" data-label="password"
                                               class="label-input" data-req="true">
                                        <span class="label-input-label">Подтвердите пароль</span>
                                    </label>
                                </div>
                                <div class="form-row">
                                    <label class="style-check-ios">
                                        <input type="checkbox" name="user_policy" data-label="Согласен с условиями"
                                               value="yes" data-req="true"
                                               checked="">
                                        <span>Соглашаюсь на&nbsp;обработку персональных данных и&nbsp;соглашаюсь с&nbsp;условиями <a
                                                    href="#">политики конфиденциальности</a></span>
                                    </label>
                                </div>
                                <div class="login-form__buttons">
                                    <div>
                                        <a href="/lk.php" class="btn btn--purple">Зарегистрироваться</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="grid-6 grid-12_l">
                    <div class="login-block-badge no-bg">
                        <div class="login-block-badge-content">
                            <div class="h4 mb-4">Зачем нужна регистрация?</div>
                            <div class="login-block-badge__text">
                                Зарегистрировавшись на сайте вы сможете получить личный кабинет, что позволит вам
                                отслеживать историю заказов, быстрее оформлять заказы в нашем Интернет-магазине, так как
                                вся информация о вас будет доступна в нашем магазине и ее не нужно будет повторно
                                вносить.
                            </div>
                        </div>
                    </div>
                    <div class="w-100 mt-3">
                        <img src="img/personal/register-action.png" alt="" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include('footer.php'); ?>
