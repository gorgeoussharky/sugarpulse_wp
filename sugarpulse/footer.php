<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sugarpulse
 */

$th_options_links = carbon_get_theme_option('th_options_links');

?>

<div class="scroll-end"></div>

<footer class="footer">

    <div class="footer__wrap">

        <div class="container">

            <div class="footer__content">

                <div class="footer__col">

                    <a href="<?=site_url();?>" class="footer__logo-wrap">
					
                        <img src="<?php echo THEME_PATH; ?>/assets/img/icons/logo-white.svg" alt="">

                    </a>

                    <ul class="footer__contacts-list">

                        <li class="footer__contacts-item">
                                <?= carbon_get_theme_option('th_options_tel'); ?>
                        </li>

                        <li class="footer__contacts-item">
                                <?= carbon_get_theme_option('th_options_mail'); ?>
                        </li>

                        <li class="footer__contacts-item">
                            <?= carbon_get_theme_option('th_options_time'); ?>
                        </li>

                    </ul>

                    <div class="footer__adress">
                        <?= carbon_get_theme_option('th_options_address'); ?>
                    </div>

                    <div class="footer__small-socials small-socials">

                        <ul class="small-socials__list">
														
							<?php foreach ($th_options_links as $item) : ?>
                            <li class="small-socials__item">

                                <a href="<?= $item['th_options_links_link']; ?>" class="small-socials__link" rel="nofollow" target="_blank" title="Перейти по ссылке"><?= $item['th_options_links_icon']; ?></a>

                            </li>
							<?php endforeach ?>
                            
                        </ul>

                    </div>

                </div>

                <div class="footer__col">

                    <div class="footer__footer-menu footer-menu">

                        <ul class="footer-menu__list">

                            <li class="footer-menu__item">

                                <a href="" class="footer-menu__link">Компания</a>

                                <ul class="footer-menu__sublist">

                                    <li class="footer-menu__subitem">

                                        <a href="/about-us.html" class="footer-menu__sublink">О нас</a>

                                    </li>

                                    <li class="footer-menu__subitem">

                                        <a href="/loyalty.html" class="footer-menu__sublink">Программа лояльности</a>

                                    </li>

                                    <li class="footer-menu__subitem">

                                        <a href="/blog.html" class="footer-menu__sublink">Новости компании</a>

                                    </li>

                                    <li class="footer-menu__subitem">

                                        <a href="/contacts.html" class="footer-menu__sublink">Контакты</a>

                                    </li>

                                </ul>

                            </li>

                            <li class="footer-menu__item">

                                <a href="" class="footer-menu__link">Каталог</a>

                                <ul class="footer-menu__sublist">

                                    <li class="footer-menu__subitem">

                                        <a href="/catalog.html" class="footer-menu__sublink">Диабетические товары</a>

                                    </li>

                                    <li class="footer-menu__subitem">

                                        <a href="/catalog.html" class="footer-menu__sublink">Здоровое питание</a>

                                    </li>

                                    <li class="footer-menu__subitem">

                                        <a href="/catalog.html" class="footer-menu__sublink">Товары для здоровья</a>

                                    </li>

                                </ul>

                            </li>

                            <li class="footer-menu__item">

                                <a href="" class="footer-menu__link">Информация</a>

                                <ul class="footer-menu__sublist">

                                    <li class="footer-menu__subitem">

                                        <a href="/wholesalers.html" class="footer-menu__sublink">Оптовикам</a>

                                    </li>

                                    <li class="footer-menu__subitem">

                                        <a href="/delivery.html" class="footer-menu__sublink">Доставка и оплата</a>

                                    </li>

                                    <li class="footer-menu__subitem">

                                        <a href="/guarantee.html" class="footer-menu__sublink">Гарантия и возврат</a>

                                    </li>

                                    <li class="footer-menu__subitem">

                                        <a href="/faq.html" class="footer-menu__sublink">Вопросы и ответы</a>

                                    </li>

                                </ul>

                            </li>

                        </ul>

                    </div>

                </div>

            </div>

               <div class="footer__small-socials small-socials small-socials--mobile">
				   
                        <ul class="small-socials__list">
							
							<?php foreach ($th_options_links as $item) : ?>
                            <li class="small-socials__item">

                                <a href="<?= $item['th_options_links_link']; ?>" class="small-socials__link" rel="nofollow" target="_blank" title="Перейти по ссылке"><?= $item['th_options_links_icon']; ?></a>

                            </li>
							<?php endforeach ?>
                            
                        </ul>

                    </div>

            <div class="footer__footer">

                <div class="footer__copyright">
                    2023 All rights reserved.
                </div>

                <a href="<?=site_url();?>/politika-konfidenczialnosti" class="footer__policy">Политика конфиденциальности</a>
                <a href="<?=site_url();?>/oferta" class="footer__policy">Публичная оферта</a>

            </div>

        </div>

    </div>


</footer>

<?php wp_footer(); ?>

</body>

</html>