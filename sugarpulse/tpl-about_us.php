<?php

/*
Template Name: О компании
*/

$about_us_employees = carbon_get_post_meta(get_the_ID(), 'about_us_employees');
$about_us_advantages_title = carbon_get_post_meta(get_the_ID(), 'about_us_advantages_title');
$about_us_advantages_block = carbon_get_post_meta(get_the_ID(), 'about_us_advantages_block');

get_header();
?>

<main class="about-us">

    <div class="about-us__wrap">

        <div class="container">

            <div class="about-us__about-banner about-banner">

                <div class="about-banner__wrap">

                    <div class="about-banner__content">

                        <h1 class="about-banner__heading">
							<?php _e( 'Главная миссия <b>Sugar Pulse</b>', 'sugarpulse' );?>
                        </h1>

                        <div class="about-banner__text">
							<?php _e( 'Повышение качества жизни людей с диабетом во всем мире, используя инновационные подходы и
                            технологии, открытие собственного R&D и поиск новых проблем и их решений в сфере диабета и
                            здорового образа жизни.', 'sugarpulse' );?>
                        </div>


                    </div>

                    <div class="about-banner__img">
                        <img src="<?php echo THEME_PATH; ?>/assets/img/about-banner.svg" alt="">
                    </div>

                </div>

            </div>

            <div class="about-us__team-slider-wrap team-slider-wrap">

                <div class="team-slider-wrap__wrap">

                    <h2 class="team-slider-wrap__title">
						<?php _e( 'Наша команда', 'sugarpulse' );?>
                    </h2>

                    <div class="about-us__team-slider team-slider">

                        <div class="team-slider__swiper-wrapper swiper-wrapper">
														
							<?php foreach ($about_us_employees as $item) : ?>
                            <div class="team-slider__swiper-slide swiper-slide">

                                <div class="team-slider__card-body">

                                    <picture class="team-slider__thumbnail">
                                            <source srcset="<?= $item['about_us_employees_icon']; ?>" type="image/avif">
                                            <img loading="lazy" src="<?= $item['about_us_employees_icon']; ?>" alt="<?= $item['about_us_employees_name']; ?>">
                                    </picture>
                                    <div class="team-slider__name"><?= $item['about_us_employees_name']; ?></div>

                                    <div class="team-slider__role"><?= $item['about_us_employees_job']; ?></div>

                                </div>

                            </div>
							<?php endforeach ?>

                        </div>

                    </div>

                    <div class="team-slider__nav">

                        <button class="team-slider__arrow team-slider__arrow--prev arrow-slider"></button>
                        <button class="team-slider__arrow team-slider__arrow--next arrow-slider"></button>
    
                    </div>

                </div>

            </div>

            <div class="about-us__benefits-block benefits-block">

                <div class="benefits-block__wrap">

                    <div class="container">

                        <div class="benefits-block__title"><?= $about_us_advantages_title; ?></div>

                        <ul class="benefits-block__list">

                            <?php foreach ($about_us_advantages_block as $item) : ?>
							<li class="benefits-block__item">

                                <div class="benefits-block__icon-wrap">
                                    <img src="<?= $item['about_us_advantages_icon']; ?>" alt="<?= $item['about_us_advantages_title']; ?>">
                                </div>

                                <div class="benefits-block__text-wrap">

                                    <div class="benefits-block__name"><?= $item['about_us_advantages_title']; ?></div>

                                    <div class="benefits-block__text">
                                        <?= $item['about_us_advantages_text']; ?>
                                    </div>

                                </div>

                            </li>
							<?php endforeach ?>

                        </ul>

                    </div>

                </div>

            </div>

            <div class="about-us__about-banner about-banner">

                <div class="about-banner__wrap">

                    <div class="about-banner__content">

                        <h2 class="about-banner__heading">
							<?php _e( 'Строим новые
                            <b>горизонты и цели</b>', 'sugarpulse' );?>
                        </h2>

                        <div class="about-banner__text">
							<?php _e( 'В будущем мы запустим свой научно-исследовательский центр, который будет направлен на
                            выявление передовых технологий, поиск новых лекарств и разрботку собственных препаратов, с
                            целью быстрой и качественной помощи нашим клиентам', 'sugarpulse' );?>
                        </div>


                    </div>

                    <div class="about-banner__img">
                        <img src="<?php echo THEME_PATH; ?>/assets/img/about-banner2.svg" alt="">
                    </div>

                </div>

            </div>

            <div class="about-us__small-benefits small-benefits">

                <ul class="small-benefits__list">

                    <li class="small-benefits__item">

                        <div class="small-benefits__icon-wrap">

                            <img class="small-benefits__icon" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzOCIgaGVpZ2h0PSIzOCIgZmlsbD0ibm9uZSI+PHBhdGggZmlsbD0iIzFEMUQxRCIgZD0iTTI2Ljk2IDE5LjA0N1Y2LjE5NWMwLS4zLS4yNDUtLjU0Ny0uNTQ2LS41NDdIMTIuMTk1Yy0uMyAwLS41NDcuMjQ3LS41NDcuNTQ3djEyLjg1MmMwIC4zLjI0Ny41NDcuNTQ3LjU0N2gxNC4yMmMuMyAwIC41NDYtLjI0Ni41NDYtLjU0N1ptLTEuMDkzLS41NDdIMTIuNzQyVjYuNzQyaDEzLjEyNVYxOC41WiIvPjxwYXRoIGZpbGw9IiMxRDFEMUQiIGQ9Ik0yNS4zMiAxSDEzLjI5QTYuMjkgNi4yOSAwIDAgMCA3IDcuMjl2MTUuODU4YTYuMjkgNi4yOSAwIDAgMCA2LjI5IDYuMjloMi4xODd2Ni4wMTVjMCAuMy4yNDYuNTQ3LjU0Ni41NDdoNi41NjNjLjMgMCAuNTQ3LS4yNDYuNTQ3LS41NDd2LTYuMDE2aDIuMTg3YTYuMjkgNi4yOSAwIDAgMCA2LjI5LTYuMjg5VjcuMjlBNi4yOSA2LjI5IDAgMCAwIDI1LjMyIDFabS0zLjI4IDMzLjkwNmgtNS40N3YtOS44NDNoNS40N3Y5Ljg0M1ptOC40NzYtMTEuNzU4YTUuMTkzIDUuMTkzIDAgMCAxLTUuMTk2IDUuMTk2aC0yLjE4N3YtMy4yODJoMS4wOTRjLjMgMCAuNTQ2LS4yNDYuNTQ2LS41NDYgMC0uMzAxLS4yNDYtLjU0Ny0uNTQ2LS41NDdoLTkuODQ0Yy0uMzAxIDAtLjU0Ny4yNDYtLjU0Ny41NDcgMCAuMy4yNDYuNTQ3LjU0Ny41NDdoMS4wOTR2My4yOGgtMi4xODhhNS4xOTMgNS4xOTMgMCAwIDEtNS4xOTUtNS4xOTVWNy4yOWE1LjE5MyA1LjE5MyAwIDAgMSA1LjE5NS01LjE5NUgyNS4zMmE1LjE5MyA1LjE5MyAwIDAgMSA1LjE5NiA1LjE5NXYxNS44NloiLz48cGF0aCBmaWxsPSIjMUQxRDFEIiBkPSJNMTkuMzA1IDMzLjgxM2MuOTAyIDAgMS42NC0uNzM5IDEuNjQtMS42NDFzLS43MzgtMS42NC0xLjY0LTEuNjRjLS45MDMgMC0xLjY0LjczOC0xLjY0IDEuNjQgMCAuOTAyLjczNyAxLjY0IDEuNjQgMS42NFptMC0yLjE4OGMuMyAwIC41NDcuMjQ2LjU0Ny41NDcgMCAuMy0uMjQ3LjU0Ny0uNTQ3LjU0N2EuNTQ5LjU0OSAwIDAgMS0uNTQ3LS41NDdjMC0uMy4yNDYtLjU0Ny41NDctLjU0N1oiLz48cGF0aCBmaWxsPSIjMDA5OEM3IiBkPSJNMTkuMzA1IDE2Ljg2YzEuNjEzIDAgMi45NTMtMS4zMTMgMi45NTMtMi45MjYgMC0yLjk4LTIuNDg4LTUuMzA1LTIuNTctNS4zODdhLjU1NC41NTQgMCAwIDAtLjc2Ni4wMjdjLS4xMS4xMS0yLjU3IDIuNzA3LTIuNTcgNS4zNiAwIDEuNjEzIDEuMzQgMi45MjYgMi45NTMgMi45MjZabS4wMjctNy4xMWMuNjI5LjczOSAxLjgzMiAyLjM1MiAxLjgzMiA0LjE4NCAwIDEuMDM5LS44NDggMS44Ni0xLjg2IDEuODYtMS4wMzggMC0xLjg1OS0uODIxLTEuODU5LTEuODYgMC0xLjY2OCAxLjIzLTMuNDE4IDEuODg3LTQuMTg0WiIvPjwvc3ZnPg==" alt="">
                            <img class="small-benefits__icon small-benefits__icon--dark" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzOCIgaGVpZ2h0PSIzOCIgZmlsbD0ibm9uZSI+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTI2Ljk2IDE5LjA0N1Y2LjE5NWMwLS4zLS4yNDUtLjU0Ny0uNTQ2LS41NDdIMTIuMTk1Yy0uMyAwLS41NDcuMjQ3LS41NDcuNTQ3djEyLjg1MmMwIC4zLjI0Ny41NDcuNTQ3LjU0N2gxNC4yMmMuMyAwIC41NDYtLjI0Ni41NDYtLjU0N1ptLTEuMDkzLS41NDdIMTIuNzQyVjYuNzQyaDEzLjEyNVYxOC41WiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0yNS4zMiAxSDEzLjI5QTYuMjkgNi4yOSAwIDAgMCA3IDcuMjl2MTUuODU4YTYuMjkgNi4yOSAwIDAgMCA2LjI5IDYuMjloMi4xODd2Ni4wMTVjMCAuMy4yNDYuNTQ3LjU0Ni41NDdoNi41NjNjLjMgMCAuNTQ3LS4yNDYuNTQ3LS41NDd2LTYuMDE2aDIuMTg3YTYuMjkgNi4yOSAwIDAgMCA2LjI5LTYuMjg5VjcuMjlBNi4yOSA2LjI5IDAgMCAwIDI1LjMyIDFabS0zLjI4IDMzLjkwNmgtNS40N3YtOS44NDNoNS40N3Y5Ljg0M1ptOC40NzYtMTEuNzU4YTUuMTkzIDUuMTkzIDAgMCAxLTUuMTk2IDUuMTk2aC0yLjE4N3YtMy4yODJoMS4wOTRjLjMgMCAuNTQ2LS4yNDYuNTQ2LS41NDYgMC0uMzAxLS4yNDYtLjU0Ny0uNTQ2LS41NDdoLTkuODQ0Yy0uMzAxIDAtLjU0Ny4yNDYtLjU0Ny41NDcgMCAuMy4yNDYuNTQ3LjU0Ny41NDdoMS4wOTR2My4yOGgtMi4xODhhNS4xOTMgNS4xOTMgMCAwIDEtNS4xOTUtNS4xOTVWNy4yOWE1LjE5MyA1LjE5MyAwIDAgMSA1LjE5NS01LjE5NUgyNS4zMmE1LjE5MyA1LjE5MyAwIDAgMSA1LjE5NiA1LjE5NXYxNS44NloiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMTkuMzA1IDMzLjgxM2MuOTAyIDAgMS42NC0uNzM5IDEuNjQtMS42NDFzLS43MzgtMS42NC0xLjY0LTEuNjRjLS45MDMgMC0xLjY0LjczOC0xLjY0IDEuNjQgMCAuOTAyLjczNyAxLjY0IDEuNjQgMS42NFptMC0yLjE4OGMuMyAwIC41NDcuMjQ2LjU0Ny41NDcgMCAuMy0uMjQ3LjU0Ny0uNTQ3LjU0N2EuNTQ5LjU0OSAwIDAgMS0uNTQ3LS41NDdjMC0uMy4yNDYtLjU0Ny41NDctLjU0N1oiLz48cGF0aCBmaWxsPSIjMDA5OEM3IiBkPSJNMTkuMzA1IDE2Ljg2YzEuNjEzIDAgMi45NTMtMS4zMTMgMi45NTMtMi45MjYgMC0yLjk4LTIuNDg4LTUuMzA1LTIuNTctNS4zODdhLjU1NC41NTQgMCAwIDAtLjc2Ni4wMjdjLS4xMS4xMS0yLjU3IDIuNzA3LTIuNTcgNS4zNiAwIDEuNjEzIDEuMzQgMi45MjYgMi45NTMgMi45MjZabS4wMjctNy4xMWMuNjI5LjczOSAxLjgzMiAyLjM1MiAxLjgzMiA0LjE4NCAwIDEuMDM5LS44NDggMS44Ni0xLjg2IDEuODYtMS4wMzggMC0xLjg1OS0uODIxLTEuODU5LTEuODYgMC0xLjY2OCAxLjIzLTMuNDE4IDEuODg3LTQuMTg0WiIvPjwvc3ZnPg==" alt="">

                        </div>

                        <div class="small-benefits__info">
							<?php _e( 'Ассортимент товаров более 100 брендов и 5 000 товаров', 'sugarpulse' );?>
                        </div>

                    </li>

                    <li class="small-benefits__item">

                        <div class="small-benefits__icon-wrap">

                            <img class="small-benefits__icon" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzOCIgaGVpZ2h0PSIzOCIgZmlsbD0ibm9uZSI+PHBhdGggZmlsbD0iIzFEMUQxRCIgZD0iTTMxLjU0NSA0Ljk2OGgtMi40NnYtLjQ5MmMwLS44MTQtLjY2MS0xLjQ3Ni0xLjQ3NS0xLjQ3Ni0uODE0IDAtMS40NzYuNjYyLTEuNDc2IDEuNDc2di40OTJIMTEuMzc4di0uNDkyYzAtLjgxNC0uNjYyLTEuNDc2LTEuNDc2LTEuNDc2LS44MTMgMC0xLjQ3NS42NjItMS40NzUgMS40NzZ2LjQ5MmgtMi40NkExLjk3IDEuOTcgMCAwIDAgNCA2LjkzNHYyMC42NTlhMS45NyAxLjk3IDAgMCAwIDEuOTY4IDEuOTY3aDYuODg2YS40OTIuNDkyIDAgMCAwIDAtLjk4M0g1Ljk2OGEuOTg1Ljk4NSAwIDAgMS0uOTg0LS45ODRWMTAuODdoMjcuNTQ1djE2LjcyNGEuOTg1Ljk4NSAwIDAgMS0uOTg0Ljk4M2gtNS40MWEuNDkyLjQ5MiAwIDAgMCAwIC45ODRoNS40MWExLjk3IDEuOTcgMCAwIDAgMS45NjgtMS45NjdWNi45MzVhMS45NyAxLjk3IDAgMCAwLTEuOTY4LTEuOTY3Wm0tNC40MjctLjQ5MmEuNDkyLjQ5MiAwIDAgMSAuOTg0IDB2Mi40NTlhLjQ5Mi40OTIgMCAwIDEtLjk4NCAwdi0yLjQ2Wm0tMTcuNzA3IDBhLjQ5Mi40OTIgMCAwIDEgLjk4MyAwdjIuNDU5YS40OTIuNDkyIDAgMCAxLS45ODMgMHYtMi40NlptLTQuNDI3IDUuNDFWNi45MzVjMC0uNTQyLjQ0MS0uOTg0Ljk4NC0uOTg0aDIuNDU5di45ODRjMCAuODE0LjY2MiAxLjQ3NiAxLjQ3NiAxLjQ3Ni44MTMgMCAxLjQ3NS0uNjYyIDEuNDc1LTEuNDc2di0uOTg0aDE0Ljc1NnYuOTg0YzAgLjgxNC42NjIgMS40NzYgMS40NzYgMS40NzZzMS40NzYtLjY2MiAxLjQ3Ni0xLjQ3NnYtLjk4NGgyLjQ1OWMuNTQyIDAgLjk4NC40NDIuOTg0Ljk4NHYyLjk1MUg0Ljk4NFoiLz48cGF0aCBmaWxsPSIjMDA5OEM3IiBkPSJNMjcuMTE4IDIzLjY1OWEyLjk1NSAyLjk1NSAwIDAgMC0yLjk1MS0yLjk1MiAyLjk1NSAyLjk1NSAwIDAgMC0yLjk1MiAyLjk1MiAyLjk1NiAyLjk1NiAwIDAgMCAyLjQ2IDIuOTF2Mi43NDZhNC4xODYgNC4xODYgMCAwIDEtNC4xODEgNC4xODEgNC4xODYgNC4xODYgMCAwIDEtNC4xODEtNC4xOHYtMi43MzRhNC40MzMgNC40MzMgMCAwIDAgMy45MzUtNC4zOTl2LTQuNDI3YTEuOTcgMS45NyAwIDAgMC0xLjk2OC0xLjk2Ny40OTIuNDkyIDAgMCAwIDAgLjk4M2MuNTQzIDAgLjk4NC40NDIuOTg0Ljk4NHY0LjQyN2EzLjQ0NyAzLjQ0NyAwIDAgMS0zLjQ0MyAzLjQ0MyAzLjQ0NyAzLjQ0NyAwIDAgMS0zLjQ0My0zLjQ0M3YtNC40MjdjMC0uNTQyLjQ0MS0uOTg0Ljk4My0uOTg0YS40OTIuNDkyIDAgMSAwIDAtLjk4MyAxLjk3IDEuOTcgMCAwIDAtMS45NjcgMS45Njd2NC40MjdhNC40MzMgNC40MzMgMCAwIDAgMy45MzUgNC4zOTl2Mi43MzNhNS4xNyA1LjE3IDAgMCAwIDUuMTY1IDUuMTY1IDUuMTcgNS4xNyAwIDAgMCA1LjE2NC01LjE2NXYtMi43NDdhMi45NTYgMi45NTYgMCAwIDAgMi40Ni0yLjkxWm0tNC45MTkgMGExLjk3IDEuOTcgMCAwIDEgMS45NjgtMS45NjggMS45NyAxLjk3IDAgMCAxIDEuOTY3IDEuOTY4IDEuOTcgMS45NyAwIDAgMS0xLjQ3NiAxLjkwNXYtMS4wNTVhLjk4My45ODMgMCAxIDAtLjk4MyAwdjEuMDU1YTEuOTcgMS45NyAwIDAgMS0xLjQ3Ni0xLjkwNVoiLz48L3N2Zz4=" alt="">
                            <img class="small-benefits__icon small-benefits__icon--dark" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMCIgaGVpZ2h0PSIzMiIgZmlsbD0ibm9uZSI+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTI3LjU0NSAxLjk2OGgtMi40NnYtLjQ5MkMyNS4wODYuNjYyIDI0LjQyNSAwIDIzLjYxIDBjLS44MTQgMC0xLjQ3Ni42NjItMS40NzYgMS40NzZ2LjQ5Mkg3LjM3OHYtLjQ5MkM3LjM3OC42NjIgNi43MTYgMCA1LjkwMiAwIDUuMDkgMCA0LjQyOC42NjIgNC40MjggMS40NzZ2LjQ5MmgtMi40NkExLjk3IDEuOTcgMCAwIDAgMCAzLjkzNHYyMC42NTlhMS45NyAxLjk3IDAgMCAwIDEuOTY4IDEuOTY3aDYuODg2YS40OTIuNDkyIDAgMCAwIDAtLjk4M0gxLjk2OGEuOTg1Ljk4NSAwIDAgMS0uOTg0LS45ODRWNy44N2gyNy41NDV2MTYuNzI0YS45ODUuOTg1IDAgMCAxLS45ODQuOTgzaC01LjQxYS40OTIuNDkyIDAgMCAwIDAgLjk4NGg1LjQxYTEuOTcgMS45NyAwIDAgMCAxLjk2Ny0xLjk2N1YzLjkzNWExLjk3IDEuOTcgMCAwIDAtMS45NjctMS45NjhabS00LjQyNy0uNDkyYS40OTIuNDkyIDAgMCAxIC45ODQgMHYyLjQ1OWEuNDkyLjQ5MiAwIDAgMS0uOTg0IDB2LTIuNDZabS0xNy43MDcgMGEuNDkyLjQ5MiAwIDAgMSAuOTgzIDB2Mi40NTlhLjQ5Mi40OTIgMCAwIDEtLjk4MyAwdi0yLjQ2Wk0uOTg0IDYuODg2VjMuOTM1YzAtLjU0Mi40NDEtLjk4NC45ODQtLjk4NGgyLjQ1OXYuOTg0YzAgLjgxNC42NjIgMS40NzYgMS40NzYgMS40NzYuODEzIDAgMS40NzUtLjY2MiAxLjQ3NS0xLjQ3NnYtLjk4NGgxNC43NTZ2Ljk4NGMwIC44MTQuNjYyIDEuNDc2IDEuNDc2IDEuNDc2czEuNDc2LS42NjIgMS40NzYtMS40NzZ2LS45ODRoMi40NTljLjU0MiAwIC45ODQuNDQyLjk4NC45ODR2Mi45NTFILjk4NFoiLz48cGF0aCBmaWxsPSIjMDA5OEM3IiBkPSJNMjMuMTE4IDIwLjY1OWEyLjk1NSAyLjk1NSAwIDAgMC0yLjk1MS0yLjk1MiAyLjk1NSAyLjk1NSAwIDAgMC0yLjk1MiAyLjk1MiAyLjk1NSAyLjk1NSAwIDAgMCAyLjQ2IDIuOTF2Mi43NDZhNC4xODYgNC4xODYgMCAwIDEtNC4xODEgNC4xODEgNC4xODYgNC4xODYgMCAwIDEtNC4xODEtNC4xOHYtMi43MzRhNC40MzMgNC40MzMgMCAwIDAgMy45MzUtNC4zOTl2LTQuNDI3YTEuOTcgMS45NyAwIDAgMC0xLjk2OC0xLjk2Ny40OTIuNDkyIDAgMSAwIDAgLjk4M2MuNTQzIDAgLjk4NC40NDIuOTg0Ljk4NHY0LjQyN2EzLjQ0NyAzLjQ0NyAwIDAgMS0zLjQ0MyAzLjQ0MyAzLjQ0NyAzLjQ0NyAwIDAgMS0zLjQ0My0zLjQ0M3YtNC40MjdjMC0uNTQyLjQ0MS0uOTg0Ljk4NC0uOTg0YS40OTIuNDkyIDAgMSAwIDAtLjk4MyAxLjk3IDEuOTcgMCAwIDAtMS45NjggMS45Njd2NC40MjdhNC40MzMgNC40MzMgMCAwIDAgMy45MzUgNC4zOTl2Mi43MzNhNS4xNyA1LjE3IDAgMCAwIDUuMTY1IDUuMTY1IDUuMTcgNS4xNyAwIDAgMCA1LjE2NC01LjE2NXYtMi43NDdhMi45NTYgMi45NTYgMCAwIDAgMi40Ni0yLjkxWm0tNC45MTkgMGExLjk3IDEuOTcgMCAwIDEgMS45NjctMS45NjggMS45NyAxLjk3IDAgMCAxIDEuOTY4IDEuOTY4IDEuOTcgMS45NyAwIDAgMS0xLjQ3NiAxLjkwNXYtMS4wNTVhLjk4My45ODMgMCAxIDAtLjk4MyAwdjEuMDU1YTEuOTcgMS45NyAwIDAgMS0xLjQ3Ni0xLjkwNVoiLz48L3N2Zz4=" alt="">

                        </div>

                        <div class="small-benefits__info">
							<?php _e( 'Индивидуальная консультация врачами и помощь клиентам', 'sugarpulse' );?>
                        </div>

                    </li>

                    <li class="small-benefits__item">

                        <div class="small-benefits__icon-wrap">

                            <img class="small-benefits__icon" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzOCIgaGVpZ2h0PSIzOCIgZmlsbD0ibm9uZSI+PHBhdGggZmlsbD0iIzFEMUQxRCIgZD0iTTMzLjQ2IDMzLjk2aC0xLjk5N2EuNS41IDAgMCAxIDAtLjk5OGgxLjQ5OFYxNC43NDlMMTguOTggNS4xMDYgNC45OTkgMTQuNzQ5djE4LjIxM2gxLjQ5OGEuNS41IDAgMCAxIDAgLjk5OUg0LjQ5OWEuNS41IDAgMCAxLS40OTktLjVWMTQuNDg3YS41LjUgMCAwIDEgLjIxNi0uNDEybDE0LjQ4LTkuOTg3YS41LjUgMCAwIDEgLjU2OCAwbDE0LjQ4IDkuOTg3YS41LjUgMCAwIDEgLjIxNi40MTJWMzMuNDZhLjUuNSAwIDAgMS0uNS41WiIvPjxwYXRoIGZpbGw9IiMxRDFEMUQiIGQ9Ik0xNS40ODUgMjYuOTdIOC40OTRhLjUuNSAwIDAgMS0uNS0uNXYtNi45OWEuNS41IDAgMCAxIC41LS41aDYuOTlhLjUuNSAwIDAgMSAuNS41djYuOTlhLjUuNSAwIDAgMS0uNS41Wm0tNi40OTItLjk5OWg1Ljk5MlYxOS45OEg4Ljk5M3Y1Ljk5MloiLz48cGF0aCBmaWxsPSIjMUQxRDFEIiBkPSJNMTEuOTkgMjEuOTc3YS41LjUgMCAwIDEtLjUtLjVWMTkuNDhhLjUuNSAwIDAgMSAuOTk5IDB2MS45OTdhLjUuNSAwIDAgMS0uNS41Wk0yMi40NzUgMjYuOTdoLTYuOTlhLjUuNSAwIDAgMS0uNS0uNXYtNi45OWEuNS41IDAgMCAxIC41LS41aDYuOTlhLjUuNSAwIDAgMSAuNS41djYuOTlhLjUuNSAwIDAgMS0uNS41Wm0tNi40OTEtLjk5OWg1Ljk5MlYxOS45OGgtNS45OTJ2NS45OTJaIi8+PHBhdGggZmlsbD0iIzFEMUQxRCIgZD0iTTE4Ljk4IDIxLjk3N2EuNS41IDAgMCAxLS40OTktLjVWMTkuNDhhLjUuNSAwIDAgMSAuOTk5IDB2MS45OTdhLjUuNSAwIDAgMS0uNS41Wk0yMi40NzUgMzMuOTZoLTYuOTlhLjUuNSAwIDAgMS0uNS0uNDk5di02Ljk5YS41LjUgMCAwIDEgLjUtLjVoNi45OWEuNS41IDAgMCAxIC41LjV2Ni45OWEuNS41IDAgMCAxLS41LjVabS02LjQ5MS0uOTk4aDUuOTkyVjI2Ljk3aC01Ljk5MnY1Ljk5MloiLz48cGF0aCBmaWxsPSIjMUQxRDFEIiBkPSJNMTguOTggMjguOTY3YS41LjUgMCAwIDEtLjQ5OS0uNXYtMS45OTZhLjUuNSAwIDAgMSAuOTk5IDB2MS45OTdhLjUuNSAwIDAgMS0uNS41Wk0xNS40ODUgMzMuOTZIOC40OTRhLjUuNSAwIDAgMS0uNS0uNDk5di02Ljk5YS41LjUgMCAwIDEgLjUtLjVoNi45OWEuNS41IDAgMCAxIC41LjV2Ni45OWEuNS41IDAgMCAxLS41LjVabS02LjQ5Mi0uOTk4aDUuOTkyVjI2Ljk3SDguOTkzdjUuOTkyWiIvPjxwYXRoIGZpbGw9IiMxRDFEMUQiIGQ9Ik0xMS45OSAyOC45NjdhLjUuNSAwIDAgMS0uNS0uNXYtMS45OTZhLjUuNSAwIDAgMSAuOTk5IDB2MS45OTdhLjUuNSAwIDAgMS0uNS41WiIvPjxwYXRoIGZpbGw9IiMwMDk4QzciIGQ9Ik0yOS40NjYgMzMuOTZoLTYuOTlhLjUuNSAwIDAgMS0uNS0uNDk5di02Ljk5YS41LjUgMCAwIDEgLjUtLjVoNi45OWEuNS41IDAgMCAxIC41LjV2Ni45OWEuNS41IDAgMCAxLS41LjVabS02LjQ5MS0uOTk4aDUuOTkyVjI2Ljk3aC01Ljk5MnY1Ljk5MloiLz48cGF0aCBmaWxsPSIjMDA5OEM3IiBkPSJNMjUuOTcxIDI4Ljk2N2EuNS41IDAgMCAxLS41LS41di0xLjk5NmEuNS41IDAgMCAxIDEgMHYxLjk5N2EuNS41IDAgMCAxLS41LjVaIi8+PC9zdmc+" alt="">
                            <img class="small-benefits__icon small-benefits__icon--dark" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMCIgaGVpZ2h0PSIzMCIgZmlsbD0ibm9uZSI+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTI5LjQ2IDI5Ljk2aC0xLjk5N2EuNS41IDAgMCAxIDAtLjk5OGgxLjQ5OFYxMC43NDlMMTQuOTggMS4xMDYuOTk5IDEwLjc0OXYxOC4yMTNoMS40OThhLjUuNSAwIDAgMSAwIC45OTlILjQ5OWEuNS41IDAgMCAxLS40OTktLjVWMTAuNDg3YS41LjUgMCAwIDEgLjIxNi0uNDEyTDE0LjY5Ni4wODhhLjUuNSAwIDAgMSAuNTY4IDBsMTQuNDggOS45ODdhLjUuNSAwIDAgMSAuMjE2LjQxMlYyOS40NmEuNS41IDAgMCAxLS41LjVaIi8+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTExLjQ4NSAyMi45N2gtNi45OWEuNS41IDAgMCAxLS41LS41di02Ljk5YS41LjUgMCAwIDEgLjUtLjVoNi45OWEuNS41IDAgMCAxIC41LjV2Ni45OWEuNS41IDAgMCAxLS41LjVabS02LjQ5MS0uOTk5aDUuOTkyVjE1Ljk4SDQuOTk0djUuOTkyWiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik03Ljk5IDE3Ljk3N2EuNS41IDAgMCAxLS41LS41VjE1LjQ4YS41LjUgMCAwIDEgLjk5OSAwdjEuOTk3YS41LjUgMCAwIDEtLjUuNVpNMTguNDc1IDIyLjk3aC02Ljk5YS41LjUgMCAwIDEtLjUtLjV2LTYuOTlhLjUuNSAwIDAgMSAuNS0uNWg2Ljk5YS41LjUgMCAwIDEgLjUuNXY2Ljk5YS41LjUgMCAwIDEtLjUuNVptLTYuNDkxLS45OTloNS45OTJWMTUuOThoLTUuOTkydjUuOTkyWiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0xNC45OCAxNy45NzdhLjUuNSAwIDAgMS0uNS0uNVYxNS40OGEuNS41IDAgMCAxIDEgMHYxLjk5N2EuNS41IDAgMCAxLS41LjVaTTE4LjQ3NSAyOS45NmgtNi45OWEuNS41IDAgMCAxLS41LS40OTl2LTYuOTlhLjUuNSAwIDAgMSAuNS0uNWg2Ljk5YS41LjUgMCAwIDEgLjUuNXY2Ljk5YS41LjUgMCAwIDEtLjUuNVptLTYuNDkxLS45OThoNS45OTJWMjIuOTdoLTUuOTkydjUuOTkyWiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0xNC45OCAyNC45NjdhLjUuNSAwIDAgMS0uNS0uNXYtMS45OTZhLjUuNSAwIDAgMSAxIDB2MS45OTdhLjUuNSAwIDAgMS0uNS41Wk0xMS40ODUgMjkuOTZoLTYuOTlhLjUuNSAwIDAgMS0uNS0uNDk5di02Ljk5YS41LjUgMCAwIDEgLjUtLjVoNi45OWEuNS41IDAgMCAxIC41LjV2Ni45OWEuNS41IDAgMCAxLS41LjVabS02LjQ5MS0uOTk4aDUuOTkyVjIyLjk3SDQuOTk0djUuOTkyWiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik03Ljk5IDI0Ljk2N2EuNS41IDAgMCAxLS41LS41di0xLjk5NmEuNS41IDAgMCAxIC45OTkgMHYxLjk5N2EuNS41IDAgMCAxLS41LjVaIi8+PHBhdGggZmlsbD0iIzAwOThDNyIgZD0iTTI1LjQ2NiAyOS45NmgtNi45OWEuNS41IDAgMCAxLS41LS40OTl2LTYuOTlhLjUuNSAwIDAgMSAuNS0uNWg2Ljk5YS41LjUgMCAwIDEgLjUuNXY2Ljk5YS41LjUgMCAwIDEtLjUuNVptLTYuNDkxLS45OThoNS45OTJWMjIuOTdoLTUuOTkydjUuOTkyWiIvPjxwYXRoIGZpbGw9IiMwMDk4QzciIGQ9Ik0yMS45NzEgMjQuOTY3YS41LjUgMCAwIDEtLjUtLjV2LTEuOTk2YS41LjUgMCAwIDEgMSAwdjEuOTk3YS41LjUgMCAwIDEtLjUuNVoiLz48L3N2Zz4=" alt="">

                        </div>

                        <div class="small-benefits__info">
							<?php _e( 'Доставляем наши товары в любую точку мира', 'sugarpulse' );?>
                        </div>

                    </li>

                    <li class="small-benefits__item">

                        <div class="small-benefits__icon-wrap">

                            <img class="small-benefits__icon" src="<?php echo THEME_PATH; ?>/assets/img/icons/ben4.svg" alt="">
                            <img class="small-benefits__icon small-benefits__icon--dark" src="<?php echo THEME_PATH; ?>/assets/img/icons/ben-dark3.svg" alt="">

                        </div>

                        <div class="small-benefits__info">
							<?php _e( 'Склад с соответствующим нормам хранения товаров', 'sugarpulse' );?>
                        </div>

                    </li>

                </ul>

            </div>

            <div class="about-us__form-banner form-banner">

                <div class="form-banner__wrap">

                    <form action="" class="form-banner__content-two">

                        <div class="form-banner__title">
							<?php _e( 'У вас возникают вопросы?
                            <span>Оставьте заявку!</span>', 'sugarpulse' );?>
                        </div>

                        <div class="form-banner__small-wrap">

                            <div class="form-banner__group">

                                <label for="" class="form-banner__label sr-only">
									<?php _e( 'Ваше Имя*', 'sugarpulse' );?>
								</label>

                                <input class="form-banner__control" placeholder="<?php _e( 'Ваше Имя*', 'sugarpulse' );?>">

                            </div>

                            <div class="form-banner__group">

                                <label for="" class="form-banner__label sr-only">
									<?php _e( 'Ваш Email или телефон*', 'sugarpulse' );?>
								</label>

                                <input class="form-banner__control" placeholder="<?php _e( 'Ваш Email или телефон*', 'sugarpulse' );?>">

                            </div>

                            <div class="form-banner__group form-banner__group--textarea">

                                <label for="" class="form-banner__label sr-only"></label>

                                <textarea name="" id="" cols="30" rows="1" class="form-banner__textarea" 
									placeholder="<?php _e( 'Ваш комментарий', 'sugarpulse' );?>">
								</textarea>

                            </div>

                        </div>

                        <div class="form-banner__footer">

                            <button class="form-banner__btn">
								<?php _e( 'Отправить заявку', 'sugarpulse' );?>
							</button>

                            <div class="form-banner__group form-banner__group--checkbox">
                                <input id="policy1" type="checkbox" class="form-banner__control">

                                <label for="policy1" class="form-banner__label">
									<?php _e( 'Нажимая на “Отправить заявку” я соглашаюсь на обработку
                                    <a href="">персональных данных</a>', 'sugarpulse' );?>
                                </label>
                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

        <div class="scroll-end"></div>

    </div>


</main>

<?php get_footer();