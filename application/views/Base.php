<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Хотей</title>
    <link rel="stylesheet" href="<?=URL::base()?>style/style.css">
</head>
<script type="text/javascript" src="<?=URL::base().'js/jquery.js'?>"></script>
<script type="text/javascript" src="<?=URL::base().'js/js.js'?>"></script>
<script type="text/javascript" src="<?=URL::base().'js/jquery.cookie.js'?>"></script>

<body>
    <div class="backet-fixed">
        <a href="<?=URL::base().'basket'?>">
            <div class="backet-picture">
                <img src="<?=URL::base()?>img/Cart_01.svg" alt="">
            </div>
        </a>
        <div class="backet-text">
            <span class="backet-text-span-one">У ВАШОМУ КОШИКУ</span>
            <span class="backet-text-span-two"><span id="basket-info-count">0</span> товар(ів), <span id="basket-info-price">0</span> грн.</span>
        </div>
    </div>
    <div class="section group header">
        <div class="col span_1_of_4 head">
            <div class="header-inside">
                <div class="header-list active">
                    <a href="<?=URL::base()?>">ГОЛОВНА</a>
                </div>
                <div class="header-list">
                    ПРО НАС
                </div>
                <div class="header-list next">
                    ЧАЙНА ЛАВКА(РОЗДРІБ)
                </div>
                <div class="header-list next-two">
                    ЧАЙ ОПТОМ
                </div>
                <div class="header-list next-tree">
                    ПОСЛУГИ
                </div>
                <div class="header-list next-four">
                    КОНТАКТИ
                </div>
                <div class="logo">
                    <img src="<?=URL::base()?>img/logo.png" alt="">
                </div>
                <div class="personal-cabinet">
                    <span class="personal-cabinet-text">Особистий кабінет</span>
                    <span class="symbol">Ë</span>
                </div>
                <div class="social-networks">
                    <span class="s-net">å</span>
                    <span class="s-net">æ</span>
                    <span class="s-net">ä</span>
                </div>
            </div>
        </div>
    </div>
    <div class="section group search-telephone">
        <div class="search-telephone-inside">
            <div class="search">
                <div class="input-search">
                    <input type="text" placeholder="Пошук по сайтові">
                </div>
                <div class="vertical-line"></div>
                <div class="search-symbol">#</div>
            </div>
            <div class="telephone-number">
                <span class="telephone-number-text">
				<span class="telephone-color">+380 </span>637-237-892</span>
                <span class="telephone-number-text">
				<span class="telephone-color">+380 </span>631-568-701</span>
            </div>
            <div class="order-phone">
                Замовити зворотній дзвінок
            </div>
            <div class="backet">
                <a href="<?=URL::base().'basket'?>">
                    <div class="backet-picture">
                        <img src="<?=URL::base()?>img/Cart_01.svg" alt="">
                    </div>
                </a>
                <div class="backet-text">
                    <span class="backet-text-span-one">У ВАШОМУ КОШИКУ</span>
                    <span class="backet-text-span-two"><span id="basket-info-count">0</span> товар(ів), <span id="basket-info-price">0</span> грн.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="section group main-block">
        <div class="main-block-inside">
            <div class="menu">
                <div class="menu-head">РІЗНЕ</div>
                <div class="different-inside">
                    <div class="different-inside-element">Акції</div>
                    <div class="different-inside-element">Подарунки</div>
                    <div class="different-inside-element">Посуд</div>
                    <div class="different-inside-element">Аксeсуари</div>
                </div>
                <div class="menu-head-two">ЧАЙ</div>
                <div class="tea-inside">
                    <div class="tea-inside-element">Фасований</div>
                    <div class="element-type active">> Зав’язаний</div>
                    <div class="element-type">“Точі”</div>
                    <div class="tea-inside-element">Зелений</div>
                    <div class="tea-inside-element">Жасминовий</div>
                    <div class="tea-inside-element">Білий</div>
                    <div class="tea-inside-element">Жовтий</div>
                    <div class="tea-inside-element">Улун</div>
                    <div class="tea-inside-element">Червоний</div>
                    <div class="tea-inside-element">Пуер</div>
                    <div class="tea-inside-element">Зв’язаний</div>
                    <div class="tea-inside-element">Фруктовий</div>
                    <div class="tea-inside-element">Інші</div>
                </div>
            </div>
            <?=$content?>
        </div>
    </div>
    <div class="section group footer">
        <div class="footer-inside">
            © Чайний дім “Хотей” 2008-2014
        </div>
    </div>
</body>

</html>