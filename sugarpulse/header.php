<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sugarpulse
 */

$th_options_links = carbon_get_theme_option('th_options_links');

?>

<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body>

    <div class="header-main-menu">

        <div class="header-main-menu__circle"></div>

        <div class="container">

            <div class="header-main-menu__content">

                <div class="header-main-menu__mid-wrap">

                    <nav class="header-main-menu__main-menu main-menu">

                        <?php bem_menu('main-menu-top', 'main-menu'); ?>

                    </nav>


                    <nav class="header-main-menu__main-menu main-menu main-menu--submenu">

                        <?php bem_menu('main-menu-bot', 'main-menu'); ?>

                    </nav>

                </div>

                <ul class="header-main-menu__langswitch">

                    <li class="header-main-menu__lang">

                        <a href="" class="header-main-menu__lang-link header-main-menu__lang-link--active">ru</a>

                    </li>

                    <li class="header-main-menu__lang">

                        <a href="" class="header-main-menu__lang-link">eng</a>

                    </li>

                </ul>


                <div class="header-main-menu__header-menu header-menu">

                    <ul class="header-menu__list">

                        <li class="header-menu__item">

                            <a href="" class="header-menu__link">Компания</a>

                            <ul class="header-menu__sublist">

                                <li class="header-menu__subitem">

                                    <a href="/about-us.html" class="header-menu__sublink">О нас</a>

                                </li>

                                <li class="header-menu__subitem">

                                    <a href="/loyalty.html" class="header-menu__sublink">Программа лояльности</a>

                                </li>

                                <li class="header-menu__subitem">

                                    <a href="/blog.html" class="header-menu__sublink">Новости компании</a>

                                </li>

                                <li class="header-menu__subitem">

                                    <a href="/contacts.html" class="header-menu__sublink">Контакты</a>

                                </li>

                            </ul>

                        </li>

                        <li class="header-menu__item">

                            <a href="" class="header-menu__link">Каталог</a>

                            <ul class="header-menu__sublist">

                                <li class="header-menu__subitem">

                                    <a href="/catalog.html" class="header-menu__sublink">Диабетические товары</a>

                                </li>

                                <li class="header-menu__subitem">

                                    <a href="/catalog.html" class="header-menu__sublink">Здоровое питание</a>

                                </li>

                                <li class="header-menu__subitem">

                                    <a href="/catalog.html" class="header-menu__sublink">Товары для здоровья</a>

                                </li>

                            </ul>

                        </li>

                        <li class="header-menu__item">

                            <a href="" class="header-menu__link">Информация</a>

                            <ul class="header-menu__sublist">

                                <li class="header-menu__subitem">

                                    <a href="/wholesalers.html" class="header-menu__sublink">Оптовикам</a>

                                </li>

                                <li class="header-menu__subitem">

                                    <a href="/delivery.html" class="header-menu__sublink">Доставка и оплата</a>

                                </li>

                                <li class="header-menu__subitem">

                                    <a href="/guarantee.html" class="header-menu__sublink">Гарантия и возврат</a>

                                </li>

                                <li class="header-menu__subitem">

                                    <a href="/faq.html" class="header-menu__sublink">Вопросы и ответы</a>

                                </li>

                            </ul>

                        </li>

                    </ul>

                </div>

                <div class="header-main-menu__footer">

                    <div class="header-main-menu__small-socials small-socials">

                        <ul class="small-socials__list">

                            <?php foreach ($th_options_links as $item) : ?>
                                <li class="small-socials__item">

                                    <a href="<?= $item['th_options_links_link']; ?>" class="small-socials__link">
                                        <?= $item['th_options_links_icon']; ?>
                                    </a>

                                </li>
                            <?php endforeach ?>

                        </ul>

                    </div>

                    <div class="header-main-menu__left">
                        <?= carbon_get_theme_option('th_options_tel'); ?>

                        <div class="header-main-menu__email"><?= carbon_get_theme_option('th_options_mail'); ?></div>


                        <div class="header-main-menu__work-time"><?= carbon_get_theme_option('th_options_time'); ?></div>

                    </div>

                    <div class="header-main-menu__policy-wrap">

                        <a href="<?= site_url(); ?>/politika-konfidenczialnosti" class="header-main-menu__policy">Политика конфиденциальности</a>

                        <a href="<?= site_url(); ?>/oferta" class="header-main-menu__policy">Публичная оферта</a>

                    </div>

                </div>

            </div>


        </div>

    </div>

    <header class="header">

        <div class="header__wrap">

            <div class="container">

                <div class="header__content">

                    <div class="header__outer-left">

                        <button class="header__menu-toggle">

                            <span></span>
                            <span></span>

                        </button>

                        <a href="<?= site_url(); ?>" class="header__logo-wrap">
                            <svg class="header-logo-icon" width="27" height="23" viewBox="0 0 27 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.3534 1.76214C15.9755 2.13931 7.18628 11.009 6.62552 11.5565C6.13791 11.082 3.89488 8.87981 3.57793 8.57564C1.63966 6.53159 3.17565 3.0275 6.01601 3.0275C6.784 3.0275 7.86894 3.33168 8.49065 4.1712L7.21066 5.5339C6.64991 5.02289 6.29638 4.90121 6.01601 4.90121C4.87011 4.90121 4.22402 6.23958 4.93106 7.12777L7.01562 9.17182C7.17409 9.01365 11.1725 4.87688 11.5139 4.53621C10.6362 2.00548 8.34437 0.521108 5.67468 0.654944C0.298725 0.922618 -1.98087 7.63878 2.05414 10.9969C6.28419 15.158 2.20042 11.1429 6.68648 15.5473C16.1218 6.27608 12.9889 9.13532 17.5847 4.79171C19.4864 2.40699 23.3507 3.74535 23.3507 6.79926C23.3507 7.56578 23.0825 8.2593 22.6437 8.80681C21.7294 9.70717 14.5615 16.9587 13.3546 18.151L12.0868 16.8978L21.3515 7.49278C22.2414 5.95974 20.0471 4.54837 18.9987 5.92324C18.7915 6.13008 8.16151 16.618 7.97866 16.7883C8.24684 17.056 13.1839 21.8985 13.4399 22.154C13.4887 22.1053 24.7526 10.6562 24.7526 10.6562C25.6059 9.59766 26.1179 8.24713 26.1179 6.78709C26.1057 1.72564 20.3885 -1.10926 16.3534 1.76214Z" fill="#0098C7" />
                            </svg>

                            <div class="header__logo-text">
                                Sugar Pulse
                            </div>
                        </a>
                    </div>

                    <div class="header__hide-wrap">
                        <form class="header__search-form search-form">

                            <div class="search-form__group">

                                <label for="search" class="search-form__label sr-only">Поиск</label>
                                <input id="search" name="s" class="search-form__control" placeholder="Найти товары">

                            </div>

                        </form>

                        <ul class="header__langswitch">

                            <li class="header__lang">

                                <a href="" class="header__lang-link header__lang-link--active">ru</a>

                            </li>

                            <li class="header__lang">

                                <a href="" class="header__lang-link">eng</a>

                            </li>

                        </ul>

                        <div class="header__btns">

                            <a href="<?= wc_get_cart_url();?>" class="header__btn-link">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1554_3966)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.3746 4.87805H4.0785C3.18289 4.87805 2.43948 5.57025 2.37557 6.46391L1.53948 18.1712C1.50582 18.6439 1.66972 19.1093 1.99265 19.4561C2.31606 19.8029 2.76826 20 3.24241 20H16.7565C17.2307 20 17.6829 19.8029 18.0063 19.4561C18.3292 19.1093 18.4931 18.6439 18.4595 18.1712L17.6234 6.46391C17.5595 5.57025 16.8161 4.87805 15.9205 4.87805H14.6336V4.63415C14.6336 2.07463 12.559 0 9.99948 0C7.53362 0 5.2546 1.9639 5.36533 4.63415C5.36874 4.71512 5.37168 4.79659 5.3746 4.87805ZM13.1702 4.87805V4.63415C13.1702 2.88293 11.7507 1.46341 9.99948 1.46341C8.24826 1.46341 6.82874 2.88293 6.82874 4.63415V4.87805H13.1702Z" fill="#0098C7" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1554_3966">
                                            <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                                <span><?php _e('Корзина','sugarpulse');?></span></a>

                            <a href="" class="header__btn-link">
                                <svg fill="#0098C7" width="20px" height="20px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.256 12.16q0.544 2.080 2.080 3.616l13.664 14.144 13.664-14.144q1.536-1.536 2.080-3.616t0-4.128-2.080-3.584-3.584-2.080-4.16 0-3.584 2.080l-2.336 2.816-2.336-2.816q-1.536-1.536-3.584-2.080t-4.128 0-3.616 2.080-2.080 3.584 0 4.128z">
                                    </path>
                                </svg>

                                <span><?php _e('Избранное','sugarpulse');?></span>
                            </a>

                        </div>
                    </div>



                    <div class="header__outer-right">

                        <a href="<?=get_permalink(wc_get_page_id('myaccount'));?>" class="header__log-in">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.5333 19.1243L17.5625 19.125L17.5865 19.1227C17.6945 19.1092 18.125 19.0268 18.125 18.5625C18.125 14.5237 14.8512 11.25 10.8125 11.25C10.3138 11.25 9.81125 11.25 9.3125 11.25C5.27375 11.25 2 14.5237 2 18.5625C2 18.5738 2 18.5857 2.0015 18.597C2.00975 18.7792 2.08775 18.8992 2.183 18.9772C2.28275 19.0687 2.41625 19.125 2.5625 19.125C2.5625 19.125 3.125 19.0928 3.125 18.5625C3.125 15.1455 5.8955 12.375 9.3125 12.375H10.8125C14.2295 12.375 17 15.1455 17 18.5625C17 18.5738 17 18.5857 17.0015 18.597C17.0098 18.7792 17.0877 18.8992 17.183 18.9772C17.276 19.0627 17.399 19.1175 17.5333 19.1243Z" fill="#1D1D1D" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0625 0C6.64775 0 3.875 2.77275 3.875 6.1875C3.875 9.60225 6.64775 12.375 10.0625 12.375C13.4773 12.375 16.25 9.60225 16.25 6.1875C16.25 2.77275 13.4773 0 10.0625 0ZM10.0625 1.125C12.8562 1.125 15.125 3.39375 15.125 6.1875C15.125 8.98125 12.8562 11.25 10.0625 11.25C7.26875 11.25 5 8.98125 5 6.1875C5 3.39375 7.26875 1.125 10.0625 1.125Z" fill="#1D1D1D" />
                            </svg>
                            <span>Войти</span>
                        </a>

                    </div>

                    <div class="header__small-socials small-socials">

                        <ul class="small-socials__list">

                            <?php foreach ($th_options_links as $item) : ?>
                                <li class="small-socials__item">

                                    <a href="<?= $item['th_options_links_link']; ?>" class="small-socials__link" rel="nofollow" target="_blank" title="Перейти по ссылке">
                                        <?= $item['th_options_links_icon']; ?>
                                    </a>

                                </li>
                            <?php endforeach ?>

                        </ul>

                    </div>

                </div>


            </div>



        </div>

    </header>

    <div class="scroll-start"></div>

    <div class="scroll-wrap">
        <button class="to-top">
            <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13 7L7 1L1 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
        <button class="toggle-theme">
            <svg width="15" height="18" viewBox="0 0 15 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.73681 0.0545281C8.57456 0.128135 8.40634 0.333006 8.37624 0.493599C8.3629 0.564796 8.35768 0.969796 8.36459 1.39364C8.37841 2.23699 8.38717 2.26965 8.65384 2.46874C8.80941 2.58489 9.19054 2.58489 9.34611 2.46874C9.61993 2.26431 9.62274 2.25234 9.62274 1.28596C9.62274 0.461818 9.61764 0.401108 9.53989 0.296965C9.49433 0.235934 9.4098 0.150716 9.35206 0.107604C9.21907 0.00832271 8.89945 -0.0192398 8.73681 0.0545281ZM2.83056 2.50767C2.66598 2.57935 2.50013 2.78386 2.46806 2.95454C2.40912 3.26885 2.46051 3.35725 3.04704 3.95109C3.34894 4.25672 3.64477 4.53243 3.70444 4.56381C3.95033 4.69294 4.34436 4.59824 4.50612 4.37107C4.60018 4.23897 4.6457 3.9633 4.60211 3.78949C4.56639 3.64689 3.52565 2.58401 3.34613 2.50679C3.18533 2.43756 2.99071 2.43792 2.83056 2.50767ZM8.32582 3.89757C6.06292 4.21647 4.30483 5.91389 3.91469 8.1565C3.81718 8.71711 3.85214 9.68577 3.98866 10.2056C4.51552 12.2115 5.97606 13.6111 7.99712 14.047C8.47006 14.149 9.52676 14.15 10.0044 14.049C11.0039 13.8376 11.9026 13.3628 12.5929 12.6814C13.3304 11.9535 13.7691 11.1752 14.0342 10.1252C14.1077 9.83395 14.1204 9.6685 14.1204 9.00025C14.1204 8.14047 14.081 7.901 13.8223 7.18687C13.2384 5.57482 11.7609 4.31848 10.0245 3.95739C9.65127 3.87977 8.69193 3.84598 8.32582 3.89757ZM8.99998 9.00579V12.8685L8.70743 12.842C7.99643 12.7776 7.21681 12.4793 6.66612 12.0611C5.97075 11.5331 5.45582 10.7401 5.23552 9.85818C5.14022 9.47648 5.14026 8.52385 5.23564 8.14191C5.61899 6.60689 6.80823 5.48482 8.34667 5.20671C8.51815 5.17569 8.73528 5.14869 8.82922 5.14672L8.99998 5.1431V9.00579ZM0.379663 8.41272C-0.00777888 8.5852 -0.116542 9.10021 0.166395 9.42248C0.346114 9.62715 0.478623 9.65062 1.37328 9.63595C2.23897 9.62177 2.26874 9.61393 2.46847 9.34638C2.58462 9.19081 2.58462 8.80968 2.46847 8.65411C2.26685 8.38407 2.24447 8.3784 1.3331 8.36784C0.70306 8.36052 0.472596 8.37137 0.379663 8.41272ZM3.75667 13.4141C3.66414 13.4582 3.363 13.7272 3.04704 14.048C2.45742 14.6465 2.409 14.731 2.46983 15.0552C2.50692 15.253 2.74727 15.4933 2.94502 15.5304C3.26923 15.5912 3.35376 15.5428 3.95242 14.9532C4.31961 14.5915 4.53678 14.3446 4.58893 14.2294C4.82233 13.7137 4.26774 13.1705 3.75667 13.4141ZM8.73681 15.4831C8.57456 15.5567 8.40634 15.7616 8.37624 15.9222C8.3629 15.9934 8.35768 16.3984 8.36459 16.8222C8.37841 17.6656 8.38717 17.6982 8.65384 17.8973C8.80941 18.0135 9.19054 18.0135 9.34611 17.8973C9.61993 17.6929 9.62274 17.6809 9.62274 16.7145C9.62274 15.8904 9.61764 15.8297 9.53989 15.7255C9.49433 15.6645 9.4098 15.5793 9.35206 15.5362C9.21907 15.4369 8.89945 15.4093 8.73681 15.4831Z" fill="#0098C7" />
            </svg>
        </button>

        <button class="ai-temp">
            <svg width="27" height="23" viewBox="0 0 27 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.3534 1.76214C15.9755 2.13931 7.18628 11.009 6.62552 11.5565C6.13791 11.082 3.89488 8.87981 3.57793 8.57564C1.63966 6.53159 3.17565 3.0275 6.01601 3.0275C6.784 3.0275 7.86894 3.33168 8.49065 4.1712L7.21066 5.5339C6.64991 5.02289 6.29638 4.90121 6.01601 4.90121C4.87011 4.90121 4.22402 6.23958 4.93106 7.12777L7.01562 9.17182C7.17409 9.01365 11.1725 4.87688 11.5139 4.53621C10.6362 2.00548 8.34437 0.521108 5.67468 0.654944C0.298725 0.922618 -1.98087 7.63878 2.05414 10.9969C6.28419 15.158 2.20042 11.1429 6.68648 15.5473C16.1218 6.27608 12.9889 9.13532 17.5847 4.79171C19.4864 2.40699 23.3507 3.74535 23.3507 6.79926C23.3507 7.56578 23.0825 8.2593 22.6437 8.80681C21.7294 9.70717 14.5615 16.9587 13.3546 18.151L12.0868 16.8978L21.3515 7.49278C22.2414 5.95974 20.0471 4.54837 18.9987 5.92324C18.7915 6.13008 8.16151 16.618 7.97866 16.7883C8.24684 17.056 13.1839 21.8985 13.4399 22.154C13.4887 22.1053 24.7526 10.6562 24.7526 10.6562C25.6059 9.59766 26.1179 8.24713 26.1179 6.78709C26.1057 1.72564 20.3885 -1.10926 16.3534 1.76214Z" fill="#0098C7" />
            </svg>

            <div class="ai-temp__desc">
                Скоро здесь появится ИИ ассистент Sugar Pulse
            </div>
        </button>
    </div>