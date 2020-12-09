<?php include('header.php'); ?>

<?

$catalogItem = array(
    [
        "NAME" => "Бумажные ручки",
        "IMG" => "/img/catalog/tiles/bum-ruchki.png",
        "LINK" => "#",
        "COLOR" => "orange",
    ],
    [
        "NAME" => "Зубные щётки",
        "IMG" => "/img/catalog/tiles/zubnie-shchetki.png",
        "LINK" => "#",
        "COLOR" => "green",
    ],
    [
        "NAME" => "Бумажные карандаши",
        "IMG" => "/img/catalog/tiles/bum-kar.png",
        "LINK" => "#",
        "COLOR" => "blue"
    ],
    [
        "NAME" => "Деревянные расчеки",
        "IMG" => "/img/catalog/tiles/rascheski.png",
        "LINK" => "#",
        "COLOR" => "cyan"
    ],
    [
        "NAME" => "Закладки для книг",
        "IMG" => "/img/catalog/tiles/zakladki.png",
        "LINK" => "#",
        "COLOR" => "red"
    ],
    [
        "NAME" => "Когтеточки",
        "IMG" => "/img/catalog/tiles/kogtetochki.png",
        "LINK" => "#",
        "COLOR" => "orange"
    ],
    [
        "NAME" => "Шоколад",
        "IMG" => "/img/catalog/tiles/shokolad.png",
        "LINK" => "#",
        "COLOR" => "green"
    ],
    [
        "NAME" => "Блокноты",
        "IMG" => "/img/catalog/tiles/bloknoti.png",
        "LINK" => "#",
        "COLOR" => "blue"
    ],
)

?>


    <section class="s-catalog s-def">
        <div class="catalog">
            <div class="container">
                <div class="big-title sec-title">
                    Каталог
                </div>
                <div class="catalog-tiles">
                    <div class="catalog-tiles-content">
                        <div class="row row-col-medium">
                            <? foreach ($catalogItem as $item): if ($item['NAME']):?>
                                <div class="grid-6 grid-12_m">
                                    <div href="#" class="catalog-tiles__item <?= $item['COLOR']?>">
                                        <div class="catalog-tiles__item__img-wrap">
                                            <img src="<?=$item["IMG"]?>" alt="">
                                        </div>
                                        <div class="catalog-tiles__item__title h1">
                                            <?=$item["NAME"]?>
                                        </div>
                                        <div class="catalog-tiles__item__button">
<!--                                            <a href="--><?//=$item["LINK"]?><!--" class="btn btn--outline btn--white">Перейти в категорию</a>-->
                                            <a href="/catalog-section.php" class="btn btn--outline btn--white">Перейти в категорию</a>
                                        </div>
                                    </div>
                                </div>
                            <? endif; endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include('footer.php'); ?>