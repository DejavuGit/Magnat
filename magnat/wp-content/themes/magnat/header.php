<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('Magnat');?></title>
    <link rel="stylesheet" href="css/style.min.css">

    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header__wrapper">
                <a href="#" class="logo"><img class="header__logo" src="<?php bloginfo("template_url"); ?>/assets/images/logo.png" alt="logo"></a>
                <nav class="menu">
                    <ul class="menu__list">
                        <li class="menu__item dropdown">
                            <a href="#" class="menu__link ">О нас <svg class="menu__svg">
                                <use xlink:href="<?php bloginfo("template_url"); ?>/assets/images/sprite.svg#dropdown"></use>
                                </svg> 
                            </a>
                            <ul class="dropdown__list">
                                <li><a href="#" class="dropdown__link">Медиа</a></li>
                                <li><a href="#" class="dropdown__link">Блог</a></li>
                            </ul>
                        </li>
                        <li class="menu__item"><a href="#" class="menu__link">Продукция</a></li>
                        <li class="menu__item"><a href="#" class="menu__link">Семья Осянкиных</a></li>
                        <li class="menu__item dropdown">
                            <a href="#" class="menu__link" >Рецепты <svg class="menu__svg">
                        <use xlink:href="<?php bloginfo("template_url"); ?>/assets/images/sprite.svg#dropdown"></use>
                        </svg></a>
                        <ul class="dropdown__list">
                            <li><a href="#" class="dropdown__link">Медиа</a></li>
                            <li><a href="#" class="dropdown__link">Блог</a></li>
                        </ul>
                        </li>
                        <li class="menu__item"><a href="#" class="menu__link">Где купить</a></li>
                        <li class="menu__item"><a href="#" class="menu__link">Контакты</a></li>
                        <button class="menu__btn">
                            <span class="menu__sticks"></span>
                        </button>
                    </ul>
                </nav>
            </div>
        </div>
    </header>