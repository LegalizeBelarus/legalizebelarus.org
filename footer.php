<footer>
    <div class="container px-md-5 pt-4">
        <div class="container text-center">
            <p class="text-light">Legalize Belarus © 2017-2021</p>
            <a target="_blank" href="mailto:legalizebelarus.org@gmail.com">
                <div class="btn btn-light mb-3">
                    🔗 <?php _e('Contact us', 'legalizebelarus'); ?>
                </div>
            </a>

            <form class="search mt-4 mb-5" method="get" action="<?php echo home_url(); ?>" role="search">
                <input type="search" class="form-control"
                       placeholder="<?php _e('Search query', 'legalizebelarus'); ?>"
                       value="<?php echo get_search_query() ?>" name="s"
                       title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>"/>

            </form>

        </div>
    </div>
</footer>


<?php wp_footer(); ?>
</body>
</html>
