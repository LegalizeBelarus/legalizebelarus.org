<?php get_header(); ?>

<script>
    jQuery(document).ready(function () {
        jQuery('[data-toggle="tooltip"]').tooltip()
    });
</script>

<div class="container bg-light px-0 pt-4 cont">

    <div class="container pb-3 text-center">
        <h1 class="display-4 px-3"><?php the_title(); ?></h1>
    </div>

    <div class="container pb-4 px-5">
        <p class="lead">
            <?php the_post();
            the_content(); ?>
        </p>
    </div>

</div>

	<div class="container">


	<div class="tnp-subscription-posts bg-white" id="tnp-subscription-posts" style=""><div class="container text-center"><img alt="" width="128" height="128" data-src="/wp-content/themes/legalizebelarus/images/mushrooms.png" class="aligncenter wp-image-23265 size-full ls-is-cached lazyloaded" src="/wp-content/themes/legalizebelarus/images/mushrooms.png"><noscript><img class="aligncenter wp-image-23265 size-full" src="/wp-content/themes/legalizebelarus/images/mushrooms.png" alt="" width="128" height="128" /></noscript></div>
<div>&nbsp;</div>
<h5 style="text-align: center">Можно, если осторожно</h5>
<p>Вступай в наш клуб за гуманную наркополитику. Твои данные не будут переданы третьим лицам.</p><div class="tnp tnp-subscription ">
<form method="post" action="https://legalizebelarus.org/?na=s">
<input type="hidden" name="nr" value="posts_bottom">
<input type="hidden" name="nlang" value="ru">
<div class="tnp-field tnp-field-email"><label for="tnp-1">Email</label>
<input class="tnp-email" type="email" name="ne" id="tnp-1" value="" placeholder="" required=""></div>
<div class="tnp-field tnp-privacy-field"><label><input type="checkbox" name="ny" required="" class="tnp-privacy"> Я даю согласие на использование переданного email-адреса для организации коммуникации с Legalize Belarus</label></div><div class="tnp-field tnp-field-button" style="text-align: left"><input class="tnp-submit" type="submit" value="Подписаться" style="">
</div>
</form>
</div>
	</div>


		</div>


<?php get_footer(); ?>



