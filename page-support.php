<?php /* Template Name: page-support */ ?>

<?php get_header(); ?>

<div class="container bg-light px-0 pb-4 pt-4 cont">
    <div class="jumbotron d-flex flex-column jumbotron-fluid justify-content-center align-items-center"
         style="background-image: linear-gradient(135deg, rgba(229, 27, 77, 0.5), rgba(62, 2, 166, 0.5)),
                 url(<?php bloginfo('template_url'); ?>/images/forestaction.jpg);">
        <p class="display-4 text-light text-shadow">Support us!</p>
    </div>
</div>

<div class="container cont bg-light pb-5 px-md-5">

    <main role="main">
        <section>

            <div class="container pb-5 text-center">
                <p class="display-4">What we need funds for</p>
            </div>

            <div class="container pb-5">
                <p>Here is a non-exhaustive list of expense items we need funds for:</p>
                <ul>
                    <li>Website domain and hosting</li>
                    <li>Government fees (e.g. when going to court)</li>
                    <li>Zoom-account</li>
                    <li>Materials for public events and actions</li>
                    <li>Ads in social media</li>
                    <li>Education leaflets, stickers and other printed materials</li>
                    <li>Renting venues</li>
                </ul>
            </div>

            <div class="container pb-3 text-center">
                <p class="display-4">One-time donation</p>
            </div>

            <div class="container">
                <p>Make a one-time donation with a card. Payments are processed by Stripe.</p>
            </div>

            <div class="container pb-5 text-center">
                <div class="btn btn-lg btn-dark asp-attach-product-8034">Make a donation</div>
            </div>

            <div class="container pb-3 text-center">
                <p class="display-4">Monthly donations</p>
            </div>

            <div class="container">
                <p>If you feel like you want to support on on a continuous basis, please, consider becoming our patron
                    on Patreon.</p>
            </div>

            <div class="container pb-5 text-center">
                <a target="_blank" href="https://www.patreon.com/LegalizeBelarus">
                    <div class="btn btn-lg btn-dark">🔗 Become a patron</div>
                </a>
            </div>

            <div class="container">
                <p>Yes, we accept Bitcoin. Here is our wallet: <a target="_blank"
                                                                  href="bitcoin:3Bo4a5STRFx4gYFVFqCzkMzVDEdnocrwXc">3Bo4a5STRFx4gYFVFqCzkMzVDEdnocrwXc/a>
                </p>
            </div>

        </section>
    </main>


</div>


<?php get_footer(); ?>
