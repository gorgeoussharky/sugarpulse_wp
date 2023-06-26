<?php

/**
 * The main template file
 */

$main_slider = carbon_get_post_meta(get_the_ID(), 'main_slider');

get_header();
?>


<main class="homepage">

    <div class="homepage__wrap">

        <section class="homepage__main-hero main-hero">

            <div class="main-hero__wrap">

                <div class="container main-hero__mobile-wrap">

                    <div class="main-hero__banner-slider banner-slider">

                        <div class="banner-slider__swiper-wrapper swiper-wrapper">

                            <?php foreach ($main_slider as $item) : ?>
                                <div class="banner-slider__swiper-slide swiper-slide">

                                    <a href="<?= $item['main_slider_link']; ?>" class="banner-slider__link">

                                        <div class="banner-slider__text-wrap">

                                            <div class="banner-slider__title">
                                                <?= $item['main_slider_title']; ?>
                                            </div>

                                            <div class="banner-slider__btn-link">
                                                <?= $item['main_slider_btn']; ?>
                                            </div>

                                            <div class="banner-slider__info">
                                                <?= $item['main_slider_text']; ?>
                                            </div>

                                        </div>

                                        <picture class="banner-slider__img-wrap">
                                            <source srcset="<?= $item['main_slider_img']; ?>.webp" type="image/webp">
                                            <img loading="lazy" src="<?= $item['main_slider_img']; ?>" alt="<?= $item['main_slider_img_alt']; ?>">
                                        </picture>
                                    </a>

                                </div>
                            <?php endforeach ?>

                        </div>

                        <div class="banner-slider__nav">

                            <button class="banner-slider__arrow banner-slider__arrow--prev arrow-slider"></button>
                            <button class="banner-slider__arrow banner-slider__arrow--next arrow-slider"></button>

                        </div>

                        <div class="banner-slider__pagination"></div>

                    </div>

                </div>

                <div class="container">

                    <div class="main-hero__small-benefits small-benefits">

                        <ul class="small-benefits__list">

                            <li class="small-benefits__item">

                                <div class="small-benefits__icon-wrap">

                                    <img class="small-benefits__icon" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzOCIgaGVpZ2h0PSIzOCIgZmlsbD0ibm9uZSI+PHBhdGggZmlsbD0iIzFEMUQxRCIgZD0iTTI2Ljk2IDE5LjA0N1Y2LjE5NWMwLS4zLS4yNDUtLjU0Ny0uNTQ2LS41NDdIMTIuMTk1Yy0uMyAwLS41NDcuMjQ3LS41NDcuNTQ3djEyLjg1MmMwIC4zLjI0Ny41NDcuNTQ3LjU0N2gxNC4yMmMuMyAwIC41NDYtLjI0Ni41NDYtLjU0N1ptLTEuMDkzLS41NDdIMTIuNzQyVjYuNzQyaDEzLjEyNVYxOC41WiIvPjxwYXRoIGZpbGw9IiMxRDFEMUQiIGQ9Ik0yNS4zMiAxSDEzLjI5QTYuMjkgNi4yOSAwIDAgMCA3IDcuMjl2MTUuODU4YTYuMjkgNi4yOSAwIDAgMCA2LjI5IDYuMjloMi4xODd2Ni4wMTVjMCAuMy4yNDYuNTQ3LjU0Ni41NDdoNi41NjNjLjMgMCAuNTQ3LS4yNDYuNTQ3LS41NDd2LTYuMDE2aDIuMTg3YTYuMjkgNi4yOSAwIDAgMCA2LjI5LTYuMjg5VjcuMjlBNi4yOSA2LjI5IDAgMCAwIDI1LjMyIDFabS0zLjI4IDMzLjkwNmgtNS40N3YtOS44NDNoNS40N3Y5Ljg0M1ptOC40NzYtMTEuNzU4YTUuMTkzIDUuMTkzIDAgMCAxLTUuMTk2IDUuMTk2aC0yLjE4N3YtMy4yODJoMS4wOTRjLjMgMCAuNTQ2LS4yNDYuNTQ2LS41NDYgMC0uMzAxLS4yNDYtLjU0Ny0uNTQ2LS41NDdoLTkuODQ0Yy0uMzAxIDAtLjU0Ny4yNDYtLjU0Ny41NDcgMCAuMy4yNDYuNTQ3LjU0Ny41NDdoMS4wOTR2My4yOGgtMi4xODhhNS4xOTMgNS4xOTMgMCAwIDEtNS4xOTUtNS4xOTVWNy4yOWE1LjE5MyA1LjE5MyAwIDAgMSA1LjE5NS01LjE5NUgyNS4zMmE1LjE5MyA1LjE5MyAwIDAgMSA1LjE5NiA1LjE5NXYxNS44NloiLz48cGF0aCBmaWxsPSIjMUQxRDFEIiBkPSJNMTkuMzA1IDMzLjgxM2MuOTAyIDAgMS42NC0uNzM5IDEuNjQtMS42NDFzLS43MzgtMS42NC0xLjY0LTEuNjRjLS45MDMgMC0xLjY0LjczOC0xLjY0IDEuNjQgMCAuOTAyLjczNyAxLjY0IDEuNjQgMS42NFptMC0yLjE4OGMuMyAwIC41NDcuMjQ2LjU0Ny41NDcgMCAuMy0uMjQ3LjU0Ny0uNTQ3LjU0N2EuNTQ5LjU0OSAwIDAgMS0uNTQ3LS41NDdjMC0uMy4yNDYtLjU0Ny41NDctLjU0N1oiLz48cGF0aCBmaWxsPSIjMDA5OEM3IiBkPSJNMTkuMzA1IDE2Ljg2YzEuNjEzIDAgMi45NTMtMS4zMTMgMi45NTMtMi45MjYgMC0yLjk4LTIuNDg4LTUuMzA1LTIuNTctNS4zODdhLjU1NC41NTQgMCAwIDAtLjc2Ni4wMjdjLS4xMS4xMS0yLjU3IDIuNzA3LTIuNTcgNS4zNiAwIDEuNjEzIDEuMzQgMi45MjYgMi45NTMgMi45MjZabS4wMjctNy4xMWMuNjI5LjczOSAxLjgzMiAyLjM1MiAxLjgzMiA0LjE4NCAwIDEuMDM5LS44NDggMS44Ni0xLjg2IDEuODYtMS4wMzggMC0xLjg1OS0uODIxLTEuODU5LTEuODYgMC0xLjY2OCAxLjIzLTMuNDE4IDEuODg3LTQuMTg0WiIvPjwvc3ZnPg==" alt="">
                                    <img class="small-benefits__icon small-benefits__icon--dark" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzOCIgaGVpZ2h0PSIzOCIgZmlsbD0ibm9uZSI+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTI2Ljk2IDE5LjA0N1Y2LjE5NWMwLS4zLS4yNDUtLjU0Ny0uNTQ2LS41NDdIMTIuMTk1Yy0uMyAwLS41NDcuMjQ3LS41NDcuNTQ3djEyLjg1MmMwIC4zLjI0Ny41NDcuNTQ3LjU0N2gxNC4yMmMuMyAwIC41NDYtLjI0Ni41NDYtLjU0N1ptLTEuMDkzLS41NDdIMTIuNzQyVjYuNzQyaDEzLjEyNVYxOC41WiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0yNS4zMiAxSDEzLjI5QTYuMjkgNi4yOSAwIDAgMCA3IDcuMjl2MTUuODU4YTYuMjkgNi4yOSAwIDAgMCA2LjI5IDYuMjloMi4xODd2Ni4wMTVjMCAuMy4yNDYuNTQ3LjU0Ni41NDdoNi41NjNjLjMgMCAuNTQ3LS4yNDYuNTQ3LS41NDd2LTYuMDE2aDIuMTg3YTYuMjkgNi4yOSAwIDAgMCA2LjI5LTYuMjg5VjcuMjlBNi4yOSA2LjI5IDAgMCAwIDI1LjMyIDFabS0zLjI4IDMzLjkwNmgtNS40N3YtOS44NDNoNS40N3Y5Ljg0M1ptOC40NzYtMTEuNzU4YTUuMTkzIDUuMTkzIDAgMCAxLTUuMTk2IDUuMTk2aC0yLjE4N3YtMy4yODJoMS4wOTRjLjMgMCAuNTQ2LS4yNDYuNTQ2LS41NDYgMC0uMzAxLS4yNDYtLjU0Ny0uNTQ2LS41NDdoLTkuODQ0Yy0uMzAxIDAtLjU0Ny4yNDYtLjU0Ny41NDcgMCAuMy4yNDYuNTQ3LjU0Ny41NDdoMS4wOTR2My4yOGgtMi4xODhhNS4xOTMgNS4xOTMgMCAwIDEtNS4xOTUtNS4xOTVWNy4yOWE1LjE5MyA1LjE5MyAwIDAgMSA1LjE5NS01LjE5NUgyNS4zMmE1LjE5MyA1LjE5MyAwIDAgMSA1LjE5NiA1LjE5NXYxNS44NloiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMTkuMzA1IDMzLjgxM2MuOTAyIDAgMS42NC0uNzM5IDEuNjQtMS42NDFzLS43MzgtMS42NC0xLjY0LTEuNjRjLS45MDMgMC0xLjY0LjczOC0xLjY0IDEuNjQgMCAuOTAyLjczNyAxLjY0IDEuNjQgMS42NFptMC0yLjE4OGMuMyAwIC41NDcuMjQ2LjU0Ny41NDcgMCAuMy0uMjQ3LjU0Ny0uNTQ3LjU0N2EuNTQ5LjU0OSAwIDAgMS0uNTQ3LS41NDdjMC0uMy4yNDYtLjU0Ny41NDctLjU0N1oiLz48cGF0aCBmaWxsPSIjMDA5OEM3IiBkPSJNMTkuMzA1IDE2Ljg2YzEuNjEzIDAgMi45NTMtMS4zMTMgMi45NTMtMi45MjYgMC0yLjk4LTIuNDg4LTUuMzA1LTIuNTctNS4zODdhLjU1NC41NTQgMCAwIDAtLjc2Ni4wMjdjLS4xMS4xMS0yLjU3IDIuNzA3LTIuNTcgNS4zNiAwIDEuNjEzIDEuMzQgMi45MjYgMi45NTMgMi45MjZabS4wMjctNy4xMWMuNjI5LjczOSAxLjgzMiAyLjM1MiAxLjgzMiA0LjE4NCAwIDEuMDM5LS44NDggMS44Ni0xLjg2IDEuODYtMS4wMzggMC0xLjg1OS0uODIxLTEuODU5LTEuODYgMC0xLjY2OCAxLjIzLTMuNDE4IDEuODg3LTQuMTg0WiIvPjwvc3ZnPg==" alt="">

                                </div>

                                <div class="small-benefits__info">
                                    <?php _e('Ассортимент товаров более 100 брендов и 5 000 товаров', 'sugarpulse'); ?>
                                </div>

                            </li>

                            <li class="small-benefits__item">

                                <div class="small-benefits__icon-wrap">

                                    <img class="small-benefits__icon" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzOCIgaGVpZ2h0PSIzOCIgZmlsbD0ibm9uZSI+PHBhdGggZmlsbD0iIzFEMUQxRCIgZD0iTTMxLjU0NSA0Ljk2OGgtMi40NnYtLjQ5MmMwLS44MTQtLjY2MS0xLjQ3Ni0xLjQ3NS0xLjQ3Ni0uODE0IDAtMS40NzYuNjYyLTEuNDc2IDEuNDc2di40OTJIMTEuMzc4di0uNDkyYzAtLjgxNC0uNjYyLTEuNDc2LTEuNDc2LTEuNDc2LS44MTMgMC0xLjQ3NS42NjItMS40NzUgMS40NzZ2LjQ5MmgtMi40NkExLjk3IDEuOTcgMCAwIDAgNCA2LjkzNHYyMC42NTlhMS45NyAxLjk3IDAgMCAwIDEuOTY4IDEuOTY3aDYuODg2YS40OTIuNDkyIDAgMCAwIDAtLjk4M0g1Ljk2OGEuOTg1Ljk4NSAwIDAgMS0uOTg0LS45ODRWMTAuODdoMjcuNTQ1djE2LjcyNGEuOTg1Ljk4NSAwIDAgMS0uOTg0Ljk4M2gtNS40MWEuNDkyLjQ5MiAwIDAgMCAwIC45ODRoNS40MWExLjk3IDEuOTcgMCAwIDAgMS45NjgtMS45NjdWNi45MzVhMS45NyAxLjk3IDAgMCAwLTEuOTY4LTEuOTY3Wm0tNC40MjctLjQ5MmEuNDkyLjQ5MiAwIDAgMSAuOTg0IDB2Mi40NTlhLjQ5Mi40OTIgMCAwIDEtLjk4NCAwdi0yLjQ2Wm0tMTcuNzA3IDBhLjQ5Mi40OTIgMCAwIDEgLjk4MyAwdjIuNDU5YS40OTIuNDkyIDAgMCAxLS45ODMgMHYtMi40NlptLTQuNDI3IDUuNDFWNi45MzVjMC0uNTQyLjQ0MS0uOTg0Ljk4NC0uOTg0aDIuNDU5di45ODRjMCAuODE0LjY2MiAxLjQ3NiAxLjQ3NiAxLjQ3Ni44MTMgMCAxLjQ3NS0uNjYyIDEuNDc1LTEuNDc2di0uOTg0aDE0Ljc1NnYuOTg0YzAgLjgxNC42NjIgMS40NzYgMS40NzYgMS40NzZzMS40NzYtLjY2MiAxLjQ3Ni0xLjQ3NnYtLjk4NGgyLjQ1OWMuNTQyIDAgLjk4NC40NDIuOTg0Ljk4NHYyLjk1MUg0Ljk4NFoiLz48cGF0aCBmaWxsPSIjMDA5OEM3IiBkPSJNMjcuMTE4IDIzLjY1OWEyLjk1NSAyLjk1NSAwIDAgMC0yLjk1MS0yLjk1MiAyLjk1NSAyLjk1NSAwIDAgMC0yLjk1MiAyLjk1MiAyLjk1NiAyLjk1NiAwIDAgMCAyLjQ2IDIuOTF2Mi43NDZhNC4xODYgNC4xODYgMCAwIDEtNC4xODEgNC4xODEgNC4xODYgNC4xODYgMCAwIDEtNC4xODEtNC4xOHYtMi43MzRhNC40MzMgNC40MzMgMCAwIDAgMy45MzUtNC4zOTl2LTQuNDI3YTEuOTcgMS45NyAwIDAgMC0xLjk2OC0xLjk2Ny40OTIuNDkyIDAgMCAwIDAgLjk4M2MuNTQzIDAgLjk4NC40NDIuOTg0Ljk4NHY0LjQyN2EzLjQ0NyAzLjQ0NyAwIDAgMS0zLjQ0MyAzLjQ0MyAzLjQ0NyAzLjQ0NyAwIDAgMS0zLjQ0My0zLjQ0M3YtNC40MjdjMC0uNTQyLjQ0MS0uOTg0Ljk4My0uOTg0YS40OTIuNDkyIDAgMSAwIDAtLjk4MyAxLjk3IDEuOTcgMCAwIDAtMS45NjcgMS45Njd2NC40MjdhNC40MzMgNC40MzMgMCAwIDAgMy45MzUgNC4zOTl2Mi43MzNhNS4xNyA1LjE3IDAgMCAwIDUuMTY1IDUuMTY1IDUuMTcgNS4xNyAwIDAgMCA1LjE2NC01LjE2NXYtMi43NDdhMi45NTYgMi45NTYgMCAwIDAgMi40Ni0yLjkxWm0tNC45MTkgMGExLjk3IDEuOTcgMCAwIDEgMS45NjgtMS45NjggMS45NyAxLjk3IDAgMCAxIDEuOTY3IDEuOTY4IDEuOTcgMS45NyAwIDAgMS0xLjQ3NiAxLjkwNXYtMS4wNTVhLjk4My45ODMgMCAxIDAtLjk4MyAwdjEuMDU1YTEuOTcgMS45NyAwIDAgMS0xLjQ3Ni0xLjkwNVoiLz48L3N2Zz4=" alt="">
                                    <img class="small-benefits__icon small-benefits__icon--dark" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMCIgaGVpZ2h0PSIzMiIgZmlsbD0ibm9uZSI+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTI3LjU0NSAxLjk2OGgtMi40NnYtLjQ5MkMyNS4wODYuNjYyIDI0LjQyNSAwIDIzLjYxIDBjLS44MTQgMC0xLjQ3Ni42NjItMS40NzYgMS40NzZ2LjQ5Mkg3LjM3OHYtLjQ5MkM3LjM3OC42NjIgNi43MTYgMCA1LjkwMiAwIDUuMDkgMCA0LjQyOC42NjIgNC40MjggMS40NzZ2LjQ5MmgtMi40NkExLjk3IDEuOTcgMCAwIDAgMCAzLjkzNHYyMC42NTlhMS45NyAxLjk3IDAgMCAwIDEuOTY4IDEuOTY3aDYuODg2YS40OTIuNDkyIDAgMCAwIDAtLjk4M0gxLjk2OGEuOTg1Ljk4NSAwIDAgMS0uOTg0LS45ODRWNy44N2gyNy41NDV2MTYuNzI0YS45ODUuOTg1IDAgMCAxLS45ODQuOTgzaC01LjQxYS40OTIuNDkyIDAgMCAwIDAgLjk4NGg1LjQxYTEuOTcgMS45NyAwIDAgMCAxLjk2Ny0xLjk2N1YzLjkzNWExLjk3IDEuOTcgMCAwIDAtMS45NjctMS45NjhabS00LjQyNy0uNDkyYS40OTIuNDkyIDAgMCAxIC45ODQgMHYyLjQ1OWEuNDkyLjQ5MiAwIDAgMS0uOTg0IDB2LTIuNDZabS0xNy43MDcgMGEuNDkyLjQ5MiAwIDAgMSAuOTgzIDB2Mi40NTlhLjQ5Mi40OTIgMCAwIDEtLjk4MyAwdi0yLjQ2Wk0uOTg0IDYuODg2VjMuOTM1YzAtLjU0Mi40NDEtLjk4NC45ODQtLjk4NGgyLjQ1OXYuOTg0YzAgLjgxNC42NjIgMS40NzYgMS40NzYgMS40NzYuODEzIDAgMS40NzUtLjY2MiAxLjQ3NS0xLjQ3NnYtLjk4NGgxNC43NTZ2Ljk4NGMwIC44MTQuNjYyIDEuNDc2IDEuNDc2IDEuNDc2czEuNDc2LS42NjIgMS40NzYtMS40NzZ2LS45ODRoMi40NTljLjU0MiAwIC45ODQuNDQyLjk4NC45ODR2Mi45NTFILjk4NFoiLz48cGF0aCBmaWxsPSIjMDA5OEM3IiBkPSJNMjMuMTE4IDIwLjY1OWEyLjk1NSAyLjk1NSAwIDAgMC0yLjk1MS0yLjk1MiAyLjk1NSAyLjk1NSAwIDAgMC0yLjk1MiAyLjk1MiAyLjk1NSAyLjk1NSAwIDAgMCAyLjQ2IDIuOTF2Mi43NDZhNC4xODYgNC4xODYgMCAwIDEtNC4xODEgNC4xODEgNC4xODYgNC4xODYgMCAwIDEtNC4xODEtNC4xOHYtMi43MzRhNC40MzMgNC40MzMgMCAwIDAgMy45MzUtNC4zOTl2LTQuNDI3YTEuOTcgMS45NyAwIDAgMC0xLjk2OC0xLjk2Ny40OTIuNDkyIDAgMSAwIDAgLjk4M2MuNTQzIDAgLjk4NC40NDIuOTg0Ljk4NHY0LjQyN2EzLjQ0NyAzLjQ0NyAwIDAgMS0zLjQ0MyAzLjQ0MyAzLjQ0NyAzLjQ0NyAwIDAgMS0zLjQ0My0zLjQ0M3YtNC40MjdjMC0uNTQyLjQ0MS0uOTg0Ljk4NC0uOTg0YS40OTIuNDkyIDAgMSAwIDAtLjk4MyAxLjk3IDEuOTcgMCAwIDAtMS45NjggMS45Njd2NC40MjdhNC40MzMgNC40MzMgMCAwIDAgMy45MzUgNC4zOTl2Mi43MzNhNS4xNyA1LjE3IDAgMCAwIDUuMTY1IDUuMTY1IDUuMTcgNS4xNyAwIDAgMCA1LjE2NC01LjE2NXYtMi43NDdhMi45NTYgMi45NTYgMCAwIDAgMi40Ni0yLjkxWm0tNC45MTkgMGExLjk3IDEuOTcgMCAwIDEgMS45NjctMS45NjggMS45NyAxLjk3IDAgMCAxIDEuOTY4IDEuOTY4IDEuOTcgMS45NyAwIDAgMS0xLjQ3NiAxLjkwNXYtMS4wNTVhLjk4My45ODMgMCAxIDAtLjk4MyAwdjEuMDU1YTEuOTcgMS45NyAwIDAgMS0xLjQ3Ni0xLjkwNVoiLz48L3N2Zz4=" alt="">

                                </div>

                                <div class="small-benefits__info">
                                    <?php _e('Индивидуальная консультация врачами и помощь клиентам', 'sugarpulse'); ?>
                                </div>

                            </li>

                            <li class="small-benefits__item">

                                <div class="small-benefits__icon-wrap">

                                    <img class="small-benefits__icon" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzOCIgaGVpZ2h0PSIzOCIgZmlsbD0ibm9uZSI+PHBhdGggZmlsbD0iIzFEMUQxRCIgZD0iTTMzLjQ2IDMzLjk2aC0xLjk5N2EuNS41IDAgMCAxIDAtLjk5OGgxLjQ5OFYxNC43NDlMMTguOTggNS4xMDYgNC45OTkgMTQuNzQ5djE4LjIxM2gxLjQ5OGEuNS41IDAgMCAxIDAgLjk5OUg0LjQ5OWEuNS41IDAgMCAxLS40OTktLjVWMTQuNDg3YS41LjUgMCAwIDEgLjIxNi0uNDEybDE0LjQ4LTkuOTg3YS41LjUgMCAwIDEgLjU2OCAwbDE0LjQ4IDkuOTg3YS41LjUgMCAwIDEgLjIxNi40MTJWMzMuNDZhLjUuNSAwIDAgMS0uNS41WiIvPjxwYXRoIGZpbGw9IiMxRDFEMUQiIGQ9Ik0xNS40ODUgMjYuOTdIOC40OTRhLjUuNSAwIDAgMS0uNS0uNXYtNi45OWEuNS41IDAgMCAxIC41LS41aDYuOTlhLjUuNSAwIDAgMSAuNS41djYuOTlhLjUuNSAwIDAgMS0uNS41Wm0tNi40OTItLjk5OWg1Ljk5MlYxOS45OEg4Ljk5M3Y1Ljk5MloiLz48cGF0aCBmaWxsPSIjMUQxRDFEIiBkPSJNMTEuOTkgMjEuOTc3YS41LjUgMCAwIDEtLjUtLjVWMTkuNDhhLjUuNSAwIDAgMSAuOTk5IDB2MS45OTdhLjUuNSAwIDAgMS0uNS41Wk0yMi40NzUgMjYuOTdoLTYuOTlhLjUuNSAwIDAgMS0uNS0uNXYtNi45OWEuNS41IDAgMCAxIC41LS41aDYuOTlhLjUuNSAwIDAgMSAuNS41djYuOTlhLjUuNSAwIDAgMS0uNS41Wm0tNi40OTEtLjk5OWg1Ljk5MlYxOS45OGgtNS45OTJ2NS45OTJaIi8+PHBhdGggZmlsbD0iIzFEMUQxRCIgZD0iTTE4Ljk4IDIxLjk3N2EuNS41IDAgMCAxLS40OTktLjVWMTkuNDhhLjUuNSAwIDAgMSAuOTk5IDB2MS45OTdhLjUuNSAwIDAgMS0uNS41Wk0yMi40NzUgMzMuOTZoLTYuOTlhLjUuNSAwIDAgMS0uNS0uNDk5di02Ljk5YS41LjUgMCAwIDEgLjUtLjVoNi45OWEuNS41IDAgMCAxIC41LjV2Ni45OWEuNS41IDAgMCAxLS41LjVabS02LjQ5MS0uOTk4aDUuOTkyVjI2Ljk3aC01Ljk5MnY1Ljk5MloiLz48cGF0aCBmaWxsPSIjMUQxRDFEIiBkPSJNMTguOTggMjguOTY3YS41LjUgMCAwIDEtLjQ5OS0uNXYtMS45OTZhLjUuNSAwIDAgMSAuOTk5IDB2MS45OTdhLjUuNSAwIDAgMS0uNS41Wk0xNS40ODUgMzMuOTZIOC40OTRhLjUuNSAwIDAgMS0uNS0uNDk5di02Ljk5YS41LjUgMCAwIDEgLjUtLjVoNi45OWEuNS41IDAgMCAxIC41LjV2Ni45OWEuNS41IDAgMCAxLS41LjVabS02LjQ5Mi0uOTk4aDUuOTkyVjI2Ljk3SDguOTkzdjUuOTkyWiIvPjxwYXRoIGZpbGw9IiMxRDFEMUQiIGQ9Ik0xMS45OSAyOC45NjdhLjUuNSAwIDAgMS0uNS0uNXYtMS45OTZhLjUuNSAwIDAgMSAuOTk5IDB2MS45OTdhLjUuNSAwIDAgMS0uNS41WiIvPjxwYXRoIGZpbGw9IiMwMDk4QzciIGQ9Ik0yOS40NjYgMzMuOTZoLTYuOTlhLjUuNSAwIDAgMS0uNS0uNDk5di02Ljk5YS41LjUgMCAwIDEgLjUtLjVoNi45OWEuNS41IDAgMCAxIC41LjV2Ni45OWEuNS41IDAgMCAxLS41LjVabS02LjQ5MS0uOTk4aDUuOTkyVjI2Ljk3aC01Ljk5MnY1Ljk5MloiLz48cGF0aCBmaWxsPSIjMDA5OEM3IiBkPSJNMjUuOTcxIDI4Ljk2N2EuNS41IDAgMCAxLS41LS41di0xLjk5NmEuNS41IDAgMCAxIDEgMHYxLjk5N2EuNS41IDAgMCAxLS41LjVaIi8+PC9zdmc+" alt="">
                                    <img class="small-benefits__icon small-benefits__icon--dark" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMCIgaGVpZ2h0PSIzMCIgZmlsbD0ibm9uZSI+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTI5LjQ2IDI5Ljk2aC0xLjk5N2EuNS41IDAgMCAxIDAtLjk5OGgxLjQ5OFYxMC43NDlMMTQuOTggMS4xMDYuOTk5IDEwLjc0OXYxOC4yMTNoMS40OThhLjUuNSAwIDAgMSAwIC45OTlILjQ5OWEuNS41IDAgMCAxLS40OTktLjVWMTAuNDg3YS41LjUgMCAwIDEgLjIxNi0uNDEyTDE0LjY5Ni4wODhhLjUuNSAwIDAgMSAuNTY4IDBsMTQuNDggOS45ODdhLjUuNSAwIDAgMSAuMjE2LjQxMlYyOS40NmEuNS41IDAgMCAxLS41LjVaIi8+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTExLjQ4NSAyMi45N2gtNi45OWEuNS41IDAgMCAxLS41LS41di02Ljk5YS41LjUgMCAwIDEgLjUtLjVoNi45OWEuNS41IDAgMCAxIC41LjV2Ni45OWEuNS41IDAgMCAxLS41LjVabS02LjQ5MS0uOTk5aDUuOTkyVjE1Ljk4SDQuOTk0djUuOTkyWiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik03Ljk5IDE3Ljk3N2EuNS41IDAgMCAxLS41LS41VjE1LjQ4YS41LjUgMCAwIDEgLjk5OSAwdjEuOTk3YS41LjUgMCAwIDEtLjUuNVpNMTguNDc1IDIyLjk3aC02Ljk5YS41LjUgMCAwIDEtLjUtLjV2LTYuOTlhLjUuNSAwIDAgMSAuNS0uNWg2Ljk5YS41LjUgMCAwIDEgLjUuNXY2Ljk5YS41LjUgMCAwIDEtLjUuNVptLTYuNDkxLS45OTloNS45OTJWMTUuOThoLTUuOTkydjUuOTkyWiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0xNC45OCAxNy45NzdhLjUuNSAwIDAgMS0uNS0uNVYxNS40OGEuNS41IDAgMCAxIDEgMHYxLjk5N2EuNS41IDAgMCAxLS41LjVaTTE4LjQ3NSAyOS45NmgtNi45OWEuNS41IDAgMCAxLS41LS40OTl2LTYuOTlhLjUuNSAwIDAgMSAuNS0uNWg2Ljk5YS41LjUgMCAwIDEgLjUuNXY2Ljk5YS41LjUgMCAwIDEtLjUuNVptLTYuNDkxLS45OThoNS45OTJWMjIuOTdoLTUuOTkydjUuOTkyWiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0xNC45OCAyNC45NjdhLjUuNSAwIDAgMS0uNS0uNXYtMS45OTZhLjUuNSAwIDAgMSAxIDB2MS45OTdhLjUuNSAwIDAgMS0uNS41Wk0xMS40ODUgMjkuOTZoLTYuOTlhLjUuNSAwIDAgMS0uNS0uNDk5di02Ljk5YS41LjUgMCAwIDEgLjUtLjVoNi45OWEuNS41IDAgMCAxIC41LjV2Ni45OWEuNS41IDAgMCAxLS41LjVabS02LjQ5MS0uOTk4aDUuOTkyVjIyLjk3SDQuOTk0djUuOTkyWiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik03Ljk5IDI0Ljk2N2EuNS41IDAgMCAxLS41LS41di0xLjk5NmEuNS41IDAgMCAxIC45OTkgMHYxLjk5N2EuNS41IDAgMCAxLS41LjVaIi8+PHBhdGggZmlsbD0iIzAwOThDNyIgZD0iTTI1LjQ2NiAyOS45NmgtNi45OWEuNS41IDAgMCAxLS41LS40OTl2LTYuOTlhLjUuNSAwIDAgMSAuNS0uNWg2Ljk5YS41LjUgMCAwIDEgLjUuNXY2Ljk5YS41LjUgMCAwIDEtLjUuNVptLTYuNDkxLS45OThoNS45OTJWMjIuOTdoLTUuOTkydjUuOTkyWiIvPjxwYXRoIGZpbGw9IiMwMDk4QzciIGQ9Ik0yMS45NzEgMjQuOTY3YS41LjUgMCAwIDEtLjUtLjV2LTEuOTk2YS41LjUgMCAwIDEgMSAwdjEuOTk3YS41LjUgMCAwIDEtLjUuNVoiLz48L3N2Zz4=" alt="">

                                </div>

                                <div class="small-benefits__info">
                                    <?php _e('Доставляем наши товары в любую точку мира', 'sugarpulse'); ?>
                                </div>

                            </li>

                            <li class="small-benefits__item">

                                <div class="small-benefits__icon-wrap">

                                    <img class="small-benefits__icon" src="<?php echo THEME_PATH; ?>/assets/img/icons/ben4.svg" alt="">
                                    <img class="small-benefits__icon small-benefits__icon--dark" src="<?php echo THEME_PATH; ?>/assets/img/icons/ben-dark3.svg" alt="">

                                </div>

                                <div class="small-benefits__info">
                                    <?php _e('Склад с соответствующим нормам хранения товаров', 'sugarpulse'); ?>
                                </div>

                            </li>

                        </ul>

                    </div>

                    <div class="main-hero__small-categories small-categories">

                        <?php

                        $args = array(
                            'taxonomy' => 'product_cat',
                            'hide_empty' => false,
                            'parent' => 0
                        );

                        $product_cats = get_terms($args);

                        if (!empty($product_cats)) : ?>

                            <ul class="small-categories__list">

                                <?php foreach ($product_cats as $cat) :
                                    $args = array(
                                        'taxonomy' => 'product_cat',
                                        'hide_empty' => false,
                                        'parent' => $cat->term_id
                                    );
                                    $subcats = get_terms($args);
                                ?>

                                    <li class="small-categories__item">
                                        <a href="<?= get_term_link($cat->term_id, 'product_cat'); ?>" class="small-categories__link">
                                            <div class="small-categories__name">
                                                <?= $cat->name; ?>
                                            </div>

                                            <div class="small-categories__quantity">
                                                <span><?= count($subcats); ?></span>
                                                <?php _e('разделов', 'sugarpulse'); ?>
                                            </div>
                                        </a>
                                    </li>

                                <?php endforeach; ?>
                            </ul>

                        <?php endif; ?>
                    </div>

                </div>

            </div>

        </section>

        <section class="homepage__products-tabs products-tabs">

            <div class="products-tabs__wrap">

                <div class="container">

                    <div class="products-tabs__header">

                        <div class="products-tabs__title">
                            <?php _e('Популярные товары', 'sugarpulse'); ?>
                        </div>

                        <?php

                        $args = array(
                            'taxonomy' => 'product_cat',
                            'hide_empty' => false,
                            'parent' => 0
                        );

                        $product_cats = get_terms($args);

                        if (!empty($product_cats)) : ?>

                            <ul class="products-tabs__nav-list">
                                <?php foreach ($product_cats as $cat) : ?>
                                    <li class="products-tabs__nav-item">
                                        <a href="<?= get_term_link($cat->term_id, 'product_cat'); ?>" class="products-tabs__nav-link">
                                            <?= $cat->name; ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>

                        <?php endif; ?>

                        <a href="<?= get_permalink(wc_get_page_id('shop')); ?>" class="products-tabs__link">
                            <?php _e('Весь каталог', 'sugarpulse'); ?>
                        </a>

                    </div>

                    <div class="products-tabs__content">

                        <div class="products-slider__product-slider-wrap product-slider-wrap">

                            <div class="product-slider-wrap__products-slider products-slider">

                                <div class="products-slider__swiper-wrapper swiper-wrapper">

                                    <?php
                                    $args = array(
                                        'limit' => 10,
                                        'orderby' => 'date',
                                        'order' => 'DESC',
                                    );
                                    $query = new WC_Product_Query($args);
                                    $products = $query->get_products(); ?>

                                    <?php foreach ($products as $product) : ?>
                                        <div class="products-slider__swiper-slide swiper-slide">
                                            <div class="products-slider__product-card product-card">
                                                <?= wc_get_template_part('content', 'product'); ?>
                                            </div>
                                        </div>
                                    <?php endforeach ?>


                                </div>

                            </div>

                            <div class="product-slider-wrap__nav">

                                <button class="product-slider-wrap__arrow product-slider-wrap__arrow--prev arrow-slider"></button>
                                <button class="product-slider-wrap__arrow product-slider-wrap__arrow--next arrow-slider"></button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <div class="homepage__benefits-block benefits-block">

            <div class="benefits-block__wrap">

                <div class="container">

                    <div class="benefits-block__title">
                        <?php _e('Магазин Sugar Pulse – товары для диабетиков', 'sugarpulse'); ?>
                    </div>

                    <ul class="benefits-block__list">

                        <li class="benefits-block__item">

                            <div class="benefits-block__icon-wrap">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.4141 0H2.58591C1.16002 0 0 1.16006 0 2.58595V16.8953C0 18.3212 1.16002 19.4813 2.58591 19.4813H13.6563V16.5187C13.6563 14.1098 15.6161 12.15 18.025 12.15C20.4339 12.15 22.3937 14.1098 22.3937 16.5187V19.2879C23.3351 18.9011 24 17.9746 24 16.8953V2.58595C24 1.16006 22.8399 0 21.4141 0ZM6.72811 3.06248H17.2719C17.6602 3.06248 17.975 3.3773 17.975 3.76561C17.975 4.15392 17.6602 4.46873 17.2719 4.46873H6.72811C6.33984 4.46873 6.02498 4.15392 6.02498 3.76561C6.02498 3.3773 6.33984 3.06248 6.72811 3.06248ZM11.3468 15.7156H3.71559C3.32733 15.7156 3.01247 15.4008 3.01247 15.0125C3.01247 14.6242 3.32733 14.3094 3.71559 14.3094H11.3469C11.7353 14.3094 12.05 14.6242 12.05 15.0125C12.05 15.4008 11.7352 15.7156 11.3468 15.7156ZM20.2843 10.4938H3.71559C3.32733 10.4938 3.01247 10.179 3.01247 9.79064C3.01247 9.40233 3.32733 9.08752 3.71559 9.08752H20.2844C20.6727 9.08752 20.9875 9.40233 20.9875 9.79064C20.9874 10.179 20.6727 10.4938 20.2843 10.4938ZM20.2843 7.48125H3.71559C3.32733 7.48125 3.01247 7.16644 3.01247 6.77813C3.01247 6.38981 3.32733 6.075 3.71559 6.075H20.2844C20.6727 6.075 20.9875 6.38981 20.9875 6.77813C20.9874 7.16644 20.6727 7.48125 20.2843 7.48125Z" fill="white" />
                                    <path d="M18.025 13.5562C16.3915 13.5562 15.0625 14.8852 15.0625 16.5187C15.0625 18.1522 16.3915 19.4811 18.025 19.4811C19.6585 19.4811 20.9874 18.1522 20.9874 16.5187C20.9874 14.8852 19.6585 13.5562 18.025 13.5562Z" fill="white" />
                                    <path d="M15.0625 19.7266V23.2969C15.0625 23.5562 15.2052 23.7945 15.4338 23.9169C15.5378 23.9725 15.6518 24.0001 15.7655 24.0001C15.902 24.0001 16.038 23.9604 16.1556 23.8819L18.025 22.6357L19.8943 23.8819C20.012 23.9604 20.1479 24.0001 20.2844 24.0001C20.3981 24.0001 20.5121 23.9725 20.6161 23.9169C20.8447 23.7946 20.9874 23.5563 20.9874 23.2969V19.7266C20.2082 20.4467 19.1672 20.8876 18.025 20.8876C16.8827 20.8876 15.8417 20.4467 15.0625 19.7266Z" fill="white" />
                                </svg>
                            </div>

                            <div class="benefits-block__text-wrap">

                                <div class="benefits-block__name">
                                    <?php _e('Качество', 'sugarpulse'); ?>
                                </div>

                                <div class="benefits-block__text">
                                    <?php _e('Каждый товар подлежит сертификации, собственный склад с соответствующим нормами хранения товаров', 'sugarpulse'); ?>
                                </div>

                            </div>

                        </li>

                        <li class="benefits-block__item">

                            <div class="benefits-block__icon-wrap">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.83108 10.4526C5.39233 10.4526 5.02197 10.9359 5.02197 11.5073C5.02197 12.0792 5.39228 12.5625 5.83108 12.5625C6.26983 12.5625 6.64061 12.0792 6.64061 11.5073C6.64061 10.9359 6.26983 10.4526 5.83108 10.4526Z" fill="white" />
                                    <path d="M12.9263 16.0303C12.4875 16.0303 12.1172 16.5136 12.1172 17.0854C12.1172 17.6568 12.4875 18.1401 12.9263 18.1401C13.365 18.1401 13.7359 17.6568 13.7359 17.0854C13.7359 16.5136 13.365 16.0303 12.9263 16.0303Z" fill="white" />
                                    <path d="M17.5243 7.48555C10.3954 0.925953 10.76 1.1765 10.1932 0.956329C9.3878 0.636829 8.42939 0.803891 7.76737 1.41289L1.1677 7.48555C0.425625 8.16805 0 9.1393 0 10.1509V20.9045C0 22.1715 1.02567 23.2027 2.28614 23.2027H16.4053C17.6658 23.2027 18.6915 22.1715 18.6915 20.9045V10.1509C18.6915 9.1393 18.2658 8.16805 17.5243 7.48555ZM8.66555 5.18023C8.70816 4.77158 9.08297 4.48138 9.50231 4.56008C9.90338 4.6437 10.1293 5.02855 10.0545 5.38695C9.97505 5.7688 9.61584 6.01203 9.22762 5.93914C8.85684 5.8618 8.63053 5.52495 8.66555 5.18023ZM3.61556 11.5074C3.61556 10.1504 4.60936 9.04649 5.83097 9.04649C7.05305 9.04649 8.0468 10.1504 8.0468 11.5074C8.0468 12.8645 7.053 13.9688 5.83097 13.9688C4.60936 13.9688 3.61556 12.8645 3.61556 11.5074ZM7.64648 18.9915C7.14961 18.9915 6.80283 18.482 6.99867 18.016L10.4216 9.85789C10.572 9.49977 10.9841 9.33102 11.3422 9.48149C11.7003 9.63149 11.8686 10.044 11.7186 10.4021L8.29523 18.5602C8.18227 18.8293 7.92164 18.9915 7.64648 18.9915ZM12.9262 19.5465C11.7045 19.5465 10.7108 18.4426 10.7108 17.0855C10.7108 15.7285 11.7046 14.6241 12.9262 14.6241C14.1478 14.6241 15.142 15.7285 15.142 17.0855C15.142 18.4426 14.1478 19.5465 12.9262 19.5465Z" fill="white" />
                                    <path d="M23.8236 15.2078C21.5343 8.54341 20.2627 4.83803 20.2446 4.79594C19.8467 3.87437 19.0732 3.15766 18.1235 2.83C18.069 2.81148 18.3905 2.88958 13.291 1.67969L18.476 6.45062C19.5068 7.39844 20.0979 8.74703 20.0979 10.1509V19.2634L22.6274 18.1806C23.7716 17.6856 24.3036 16.3567 23.8236 15.2078Z" fill="white" />

                                </svg>
                            </div>

                            <div class="benefits-block__text-wrap">

                                <div class="benefits-block__name">
                                    <?php _e('Скидки и предложения', 'sugarpulse'); ?>
                                </div>

                                <div class="benefits-block__text">
                                    <?php _e('Специальные предложения, дополнительная скидка за звонок, консультации и помощь врача', 'sugarpulse'); ?>
                                </div>

                            </div>

                        </li>

                        <li class="benefits-block__item">

                            <div class="benefits-block__icon-wrap">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.0888 3.91704C20.8145 2.63879 19.2315 2 17.3392 2C16.3275 2 15.3909 2.21135 14.5291 2.63404C13.6674 3.05674 12.8239 3.7382 12 4.67775C11.1754 3.7382 10.3326 3.05674 9.47088 2.63404C8.60915 2.21135 7.67246 2 6.66081 2C4.76853 2 3.18555 2.63879 1.91119 3.91704C0.63684 5.19461 0 7.30064 0 8.68117C0 10.0617 0 11.804 2.10772 14.3334C4.33767 17.0091 12 23 12 23C12 23 19.6623 17.0091 21.8923 14.3334C24 11.804 24 10.0617 24 8.68117C24 7.30064 23.3632 5.19528 22.0888 3.91704ZM16.0864 11.4997C16.0864 11.9673 15.7073 12.3464 15.2397 12.3464H12.8435V14.7551C12.8435 15.2213 12.4655 15.5993 11.9993 15.5993C11.5331 15.5993 11.1552 15.2213 11.1552 14.7551V12.3464H8.75895C8.29131 12.3464 7.91221 11.9673 7.91221 11.4997C7.91221 11.032 8.29131 10.6529 8.75895 10.6529H11.1552V8.24422C11.1552 7.778 11.5331 7.40005 11.9993 7.40005C12.4655 7.40005 12.8435 7.778 12.8435 8.24422V10.6529H15.2397C15.7073 10.6529 16.0864 11.032 16.0864 11.4997Z" fill="white" />
                                </svg>
                            </div>

                            <div class="benefits-block__text-wrap">

                                <div class="benefits-block__name">
                                    <?php _e('Забота о клиенте', 'sugarpulse'); ?>
                                </div>

                                <div class="benefits-block__text">
                                    <?php _e('Специальные предложения, дополнительная скидка за звонок, консультации и помощь врача', 'sugarpulse'); ?>
                                </div>

                            </div>

                        </li>

                        <li class="benefits-block__item">

                            <div class="benefits-block__icon-wrap">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.92 13.2886C23.7792 10.2282 23.7792 7.02192 22.92 3.96145L23.3695 3.5302C23.7703 3.14536 24 2.6063 24 2.05083C24 0.919734 23.0803 4.6875e-05 21.9492 4.6875e-05C21.3938 4.6875e-05 20.8547 0.229734 20.4699 0.630516L20.0011 1.11895C15.9342 0.443016 11.8158 0.443016 7.74892 1.11895L7.27033 0.620203C6.89158 0.225937 6.36142 0 5.81486 0C4.70205 0 3.79689 0.905156 3.79689 2.01797C3.80294 2.04998 3.72761 2.84681 4.38798 3.50719L4.83283 3.95203C4.61955 4.71094 4.45876 5.47875 4.35095 6.25125C4.39408 6.28969 4.43673 6.32953 4.47845 6.37031C6.34923 6.09516 8.24533 5.95547 10.125 5.95547C12.0047 5.95547 13.9008 6.09516 15.7716 6.37031C16.8588 5.30362 18.1495 5.39766 18.1852 5.39062C20.0733 5.39062 21.6094 6.92672 21.6094 8.81484C21.6017 8.85628 21.684 10.067 20.7277 11.1239C21.1828 13.0697 21.3216 15.0694 21.143 17.0484C21.5739 17.229 21.9463 17.1999 21.982 17.2031C23.0949 17.2031 24 16.298 24 15.1852C24 14.6386 23.7741 14.1084 23.3794 13.7297L22.92 13.2886Z" fill="white" />
                                    <path d="M12.1281 12.7032C11.7495 12.7032 11.3934 12.8505 11.1255 13.118L10.6218 13.6209C10.3474 13.895 9.90267 13.895 9.62822 13.6209L9.12455 13.118C8.85666 12.8505 8.50059 12.7031 8.12198 12.7031C7.33964 12.7031 6.70312 13.3396 6.70312 14.122C6.70312 14.5742 6.82172 15.0209 7.04606 15.4135C7.68014 16.5232 8.60184 17.4449 9.71152 18.0789L10.125 18.3152L10.5384 18.0789C11.6481 17.4449 12.5698 16.5232 13.2038 15.4135C13.4282 15.0209 13.5468 14.5743 13.5468 14.122C13.5469 13.3396 12.9105 12.7032 12.1281 12.7032Z" fill="white" />
                                    <path d="M18.1852 6.79704C18.1674 6.80055 17.3999 6.73108 16.7428 7.38813L16.26 7.87047C12.1871 7.19266 8.063 7.19266 3.99003 7.87047L3.50722 7.38813C2.86672 6.74768 2.03305 6.79989 2.018 6.79704C0.90519 6.79704 3.40928e-05 7.70219 3.40928e-05 8.815C3.40928e-05 9.36157 0.225972 9.89172 0.620659 10.2705L1.08003 10.7116C0.220815 13.772 0.220815 16.9783 1.08003 20.0388L0.62019 20.4798C-0.031044 21.1055 0.00101847 21.9773 3.40928e-05 21.9822C3.40928e-05 23.095 0.90519 24.0002 2.018 24.0002H2.06488C2.61144 24.0002 3.1416 23.7742 3.52035 23.3795L3.99894 22.8813C8.06581 23.5572 12.1843 23.5572 16.2511 22.8813L16.7297 23.38C17.1085 23.7742 17.6386 24.0002 18.1852 24.0002C19.298 24.0002 20.2032 23.095 20.2032 21.9822C20.1971 21.9502 20.2724 21.1533 19.6121 20.493L19.1672 20.0481C20.0297 16.982 20.0297 13.7683 19.1672 10.7022L19.6121 10.2573C20.2458 9.62364 20.2009 8.82639 20.2032 8.815C20.2032 7.70219 19.298 6.79704 18.1852 6.79704ZM14.4249 16.1113C13.6663 17.4388 12.5637 18.5415 11.2362 19.3L10.4739 19.7356C10.3658 19.7973 10.2454 19.8283 10.125 19.8283C10.0047 19.8283 9.88424 19.7974 9.77619 19.7356L9.01386 19.3C7.68636 18.5414 6.58372 17.4388 5.82519 16.1113C5.47958 15.5066 5.29691 14.8187 5.29691 14.1221C5.29691 12.5643 6.56422 11.297 8.12202 11.297C8.87591 11.297 9.58485 11.5903 10.1182 12.123L10.1251 12.1298L10.1319 12.123C10.6653 11.5904 11.3742 11.297 12.1281 11.297C13.6858 11.297 14.9532 12.5643 14.9532 14.1221C14.9532 14.8187 14.7705 15.5066 14.4249 16.1113Z" fill="white" />
                                </svg>
                            </div>

                            <div class="benefits-block__text-wrap">

                                <div class="benefits-block__name">
                                    <?php _e('Комфорт клиента', 'sugarpulse'); ?>
                                </div>

                                <div class="benefits-block__text">
                                    <?php _e('Доставка в любую точку мира, оплата с любой карты любого банка', 'sugarpulse'); ?>
                                </div>

                            </div>

                        </li>

                        <li class="benefits-block__item">

                            <div class="benefits-block__icon-wrap">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1 6.41071C1 5.07932 2.07932 4 3.41071 4H21.0893C22.4207 4 23.5 5.07932 23.5 6.41071V7.21429H1V6.41071ZM1 8.82143H23.5V17.6607C23.5 18.9922 22.4207 20.0714 21.0893 20.0714H3.41071C2.07932 20.0714 1 18.9922 1 17.6607V8.82143ZM13.8571 14.4464C13.4133 14.4464 13.0536 14.8062 13.0536 15.25C13.0536 15.6938 13.4133 16.0536 13.8571 16.0536H18.6786C19.1224 16.0536 19.4821 15.6938 19.4821 15.25C19.4821 14.8062 19.1224 14.4464 18.6786 14.4464H13.8571Z" fill="white" />
                                </svg>
                            </div>

                            <div class="benefits-block__text-wrap">

                                <div class="benefits-block__name">
                                    <?php _e('Рассрочка', 'sugarpulse'); ?>
                                </div>

                                <div class="benefits-block__text">
                                    <?php _e('Доставка в любую точку мира, оплата с любой карты любого банка', 'sugarpulse'); ?>
                                </div>

                            </div>

                        </li>

                        <li class="benefits-block__item">

                            <div class="benefits-block__icon-wrap">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.5714 0H1.42857C0.642857 0 0 0.642857 0 1.42857V18.5714C0 19.3571 0.642857 20 1.42857 20H18.5714C19.3571 20 20 19.3571 20 18.5714V1.42857C20 0.642857 19.3571 0 18.5714 0ZM2.85714 17.1429L6.42857 12.6429L8.98571 15.7143L12.5571 11.1143L17.1429 17.1429H2.85714Z" fill="white" />
                                </svg>
                            </div>

                            <div class="benefits-block__text-wrap">

                                <div class="benefits-block__name">
                                    <?php _e('Рассрочка', 'sugarpulse'); ?>
                                </div>

                                <div class="benefits-block__text">
                                    <?php _e('Доставка в любую точку мира, оплата с любой карты любого банка', 'sugarpulse'); ?>
                                </div>

                            </div>

                        </li>

                    </ul>

                </div>

            </div>

        </div>

        <section class="homepage__promo-banners promo-banners">
            <?= get_template_part('template-parts/content', 'promo-banners'); ?>
        </section>

        <div class="homepage__form-banner form-banner">

            <div class="form-banner__wrap">

                <div class="container">

                    <div class="form-banner__content">

                        <picture class="form-banner__img-wrap">
                            <source srcset="<?php echo THEME_PATH; ?>/assets/img/form-img.avif" type="image/avif">
                            <img loading="lazy" src="<?php echo THEME_PATH; ?>/assets/img/form-img.webp" alt="">
                        </picture>
                        <div class="form-banner__text-wrap">
                            <div class="form-banner__title">
                                <?php _e('Нужна консультация врача?  <span>Записывайся!</span>', 'sugarpulse'); ?>
                            </div>

                            <div class="form-banner__text">
                                <?php _e('Заполните заявку прямо сейчас', 'sugarpulse'); ?>
                            </div>

                            <button class="form-banner__btn">
                                <?php _e('Получить консультацию', 'sugarpulse'); ?>
                            </button>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <section class="homepage__news-block news-block">
            <?= get_template_part('content', 'news'); ?>
        </section>
    </div>

</main>

<?php get_footer();
