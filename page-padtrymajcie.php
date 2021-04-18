<?php /* Template Name: page-padtrymajcie */ ?>

<?php get_header(); ?>

<div class="container bg-light px-0 pb-4 pt-4 cont">
    <div class="jumbotron d-flex flex-column jumbotron-fluid justify-content-center align-items-center" style="background-image: linear-gradient(135deg, rgba(229, 27, 77, 0.5), rgba(62, 2, 166, 0.5)),
                             url(<?php bloginfo('template_url'); ?>/images/forestaction.jpg);">
        <p class="display-4 text-light text-shadow">Поддержите нас!</p>
    </div>
</div>

<div class="container cont bg-light pb-5 px-md-5">

    <main role="main">
        <section>
            <div class="container pb-5 text-center">
                <p class="display-4">На что нужны средства</p>
            </div>

            <div class="container pb-5">
                <p>Вот не исчерпывающий список статей расходов, на которые нам нужны средства:</p>
                <ul>
                    <li>Домен и хостинга вебсайта</li>
                    <li>Государственные пошлины (при обращении в суд, например)</li>
                    <li>Zoom-аккаунт</li>
                    <li>Материалы для публичных мероприятий и акций</li>
                    <li>Реклама в социальных сетях</li>
                    <li>Образовательные листовки, стикеры, другая печатная продукция</li>
                    <li>Аренда площадок для проведения мероприятий</li>
                </ul>
            </div>


            <div class="container pb-3 text-center">
                <p class="display-4">Ежемесячные пожертвования</p>
            </div>

            <div class="container">
                <p>Если вы чувствуете, что готовы поддерживать нас на постоянной основе, пожалуйста, станьте нашим
                    патроном на Patreon.</p>
            </div>

            <div class="container pb-5 text-center">
                <a target="_blank" href="https://www.patreon.com/LegalizeBelarus">
                    <div class="btn btn-lg btn-dark">🔗 Стать патроном</div>
                </a>
            </div>

            <div class="container pb-3 text-center">
                <p class="display-4">Единовременное пожертвование</p>
            </div>

            <div class="container">
                <p>Совершите единовременное пожертвование с банковской карты. Платежи обрабатываются с помощью платежной
                    системы Stripe.</p>
            </div>

            <div class="container pb-5 text-center">
                <div class="btn btn-lg btn-dark asp-attach-product-9027">Внести пожертвование</div>
            </div>

            <div class="container">
                <p>Мы также принимаем Bitcoin. Наш кошелек: <a target="_blank"
                                                               href="bitcoin:3Bo4a5STRFx4gYFVFqCzkMzVDEdnocrwXc">3Bo4a5STRFx4gY<wbr>FVFqCzkMzVDEdnocrwXc</a>
                </p>
            </div>

        </section>
    </main>


</div>


<?php get_footer(); ?>
