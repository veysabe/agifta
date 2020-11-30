<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Agifta</title>

    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
    <link rel="manifest" href="favicons/manifest.json">
    <link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="favicons/favicon.ico">
    <meta name="msapplication-config" content="favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- favicons -->

    <!-- og -->
    <meta property="og:title" content="Шаблон проекта">
    <meta property="og:description" content="Описание проекта">
    <meta property="og:type" content="website">
    <meta property="og:image" content="/img/og.jpg">
    <!-- og -->

    <link href="css/main.css" rel="stylesheet">
</head>

<body>


<header class="s-site-header">
    <div class="container">

        <div class="site-header-top">
            <a href="/" class="site-header-top__logo">
                <img src="/img/logo.svg" alt="logotype">
                <span class="site-header-top__descr">Сувенирная продукция с&nbsp;вашим логотипом</span>
            </a>
            <nav class="site-header-top__nav">
                <a href="#">Доставка и оплата</a>
                <a href="#" class="active">Частые вопросы</a>
                <a href="#">Контакты</a>
            </nav>
            <div class="site-header-top__langs">
                <a href="#" class="active">RU</a>
                <figure>|</figure>
                <a href="#">ENG</a>
            </div>
        </div>

        <div class="site-header-bottom">
            <div class="site-header-menu">
                <div class="burger">
                    <figure></figure>
                </div>
                <span>Каталог</span>
            </div>
            <nav class="site-header-bottom__nav">
                <a href="#" class="active">Бумажные ручки</a>
                <a href="#">Зубные щетки</a>
                <a href="#">Бумажные карандаши</a>
            </nav>
            <div class="site-header-user">
                <a href="#" class="site-header-user__lk">Кабинет</a>
                <a href="#" class="site-header-user__cart">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="50" viewBox="0 0 44.79 50" fill="#FFF">
                        <path d="M44.76,43.73l-3.54-30.4A1.5,1.5,0,0,0,39.73,12H32.26V10a10,10,0,1,0-20,0v2H5.07a1.5,1.5,0,0,0-1.49,1.33L0,43.73a5.65,5.65,0,0,0,1.38,4.4A5.57,5.57,0,0,0,5.58,50H39.22a5.56,5.56,0,0,0,4.15-1.87A5.65,5.65,0,0,0,44.76,43.73ZM15.26,10a7,7,0,0,1,14,0v2h-14ZM41.13,46.14a2.55,2.55,0,0,1-1.91.86H5.58a2.53,2.53,0,0,1-1.91-.86A2.63,2.63,0,0,1,3,44.08L6.4,15h5.86v2.5a1.5,1.5,0,0,0,3,0V15h14v2.5a1.5,1.5,0,1,0,3,0V15h6.13l3.39,29.08A2.66,2.66,0,0,1,41.13,46.14Z"/>
                    </svg>
                    <span>99</span>
                </a>
            </div>
        </div>

    </div>
</header>


<header class="s-site-header-mob">
    <div class="container">
        <div class="site-header-mob">
            <a href="/" class="site-header-top__logo">
                <img src="/img/logo.svg" alt="logotype">
            </a>
            <div class="site-header-user">
                <a href="#" class="site-header-user__lk">Мой кабинет</a>
                <a href="#" class="site-header-user__cart">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="50" viewBox="0 0 44.79 50" fill="#FFF">
                        <path d="M44.76,43.73l-3.54-30.4A1.5,1.5,0,0,0,39.73,12H32.26V10a10,10,0,1,0-20,0v2H5.07a1.5,1.5,0,0,0-1.49,1.33L0,43.73a5.65,5.65,0,0,0,1.38,4.4A5.57,5.57,0,0,0,5.58,50H39.22a5.56,5.56,0,0,0,4.15-1.87A5.65,5.65,0,0,0,44.76,43.73ZM15.26,10a7,7,0,0,1,14,0v2h-14ZM41.13,46.14a2.55,2.55,0,0,1-1.91.86H5.58a2.53,2.53,0,0,1-1.91-.86A2.63,2.63,0,0,1,3,44.08L6.4,15h5.86v2.5a1.5,1.5,0,0,0,3,0V15h14v2.5a1.5,1.5,0,1,0,3,0V15h6.13l3.39,29.08A2.66,2.66,0,0,1,41.13,46.14Z"/>
                    </svg>
                    <span>99</span>
                </a>
            </div>
            <div class="burger mob">
                <figure></figure>
            </div>
        </div>
    </div>
</header>


<div class="mob-panel">
    <nav class="mob-panel__cats">
        <a href="#">Бумажные ручки</a>
        <a href="#" class="active">Зубные щетки</a>
    </nav>
    <nav class="mob-panel__pages">
        <a href="#">Доставка и оплата</a>
        <a href="#" class="active">Частые вопросы</a>
        <a href="#">Контакты</a>
    </nav>
    <div class="mob-panel__contacts">
        <a href="tel:88007772045" class="mob-panel__phone">8 800 777-20-45</a>
        <div class="mob-panel__email">
            <small>Есть вопросы? Пишите:</small>
            <a href="mailto:sales@agifta.ru">sales@agifta.ru</a>
        </div>
    </div>
    <div class="mob-panel__langs">
        <a href="#" class="active">RU</a>
        <figure>|</figure>
        <a href="#">ENG</a>
    </div>
</div>

<?

$catalogElems = array(
    [
        "NAME" => "Бумажные ручки",
        "IMG" => "img/catalog/prostoruchki.png",
        "LINK" => "#"
    ],
    [
        "NAME" => "Зубные щетки",
        "IMG" => "img/catalog/zubnie_shchetki.png",
        "LINK" => "#"
    ],
    [
        "NAME" => "Бумажные карандаши",
        "IMG" => "img/catalog/ruchki.png",
        "LINK" => "#"
    ],
    [
        "NAME" => "Контрольная продукция",
        "IMG" => "img/catalog/control.png",
        "LINK" => "#"
    ],
    [
        "NAME" => "Деревянные расчески",
        "IMG" => "img/catalog/rascheski.png",
        "LINK" => "#"
    ],
    [
        "NAME" => "Закладки для книг",
        "IMG" => "img/catalog/zakladki.png",
        "LINK" => "#",
        "NOWRAP" => true
    ],
    [
        "NAME" => "Блокноты",
        "IMG" => "img/catalog/bloknoti.png",
        "LINK" => "#"
    ],
    [
        "NAME" => "Когтеточки",
        "IMG" => "img/catalog/kogtetochki.png",
        "LINK" => "#"
    ],
)

?>

<div class="catalog-menu">
    <div class="container">
        <div class="catalog-elems row">
            <? foreach ($catalogElems as $item): ?>
                <a href="<?= $item['LINK'] ?>" class="catalog-elems__item">
                    <img src="<?= $item['IMG'] ?>">
                    <?
                    if (strlen($item['NAME']) > 30 && !isset($item['NOWRAP'])) {
                        $name = explode(' ', $item['NAME']);
                        $item['NAME'] = $name[0] . '<br>' . $name[1];
                    }
                    ?>
                    <p><?= $item['NAME'] ?></p>
                </a>
            <? endforeach; ?>
        </div>
    </div>
</div>

<div class="black-overflow"></div>