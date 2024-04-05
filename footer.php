<footer>
    <div class="container px-md-5 pt-4">
        <div class="container text-center">
                      <div class="container">
            <p class="text-light">Legalize Belarus © 2017–<?php echo date("Y"); ?></p>
            <a target="_blank" href="mailto:legalizebelarus.org@gmail.com">
                <div class="btn btn-light mb-3">
                    🔗 <?php _e('Contact us', 'legalizebelarus'); ?>
                </div>
            </a>
            </div>

              <div class="container mt-4 mb-5">
                          <form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
                <input type="search" class="form-control"
                       placeholder="<?php _e('Search query', 'legalizebelarus'); ?>"
                       value="<?php echo get_search_query() ?>" name="s"
                       title="<?php echo esc_attr_x('Search for:', 'label') ?>"/>
            </form>
              </div>


        </div>
    </div>
</footer>


<?php wp_footer(); ?>
</body>
</html>
