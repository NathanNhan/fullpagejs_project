    <header class="custom-nav">
        <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1"
                    aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'your-theme-slug'); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a class="navbar-brand" href="#">
                    <?php
                        $custom_logo_id  = get_theme_mod('custom_logo');
                        $custom_logo_url = wp_get_attachment_image_url($custom_logo_id);
                        echo '<img class="img-logo" src="' . esc_url($custom_logo_url) . '" alt="">';
                    ?>
                </a>
                <?php
                    wp_nav_menu([
                        'theme_location'  => 'primary',
                        'depth'           => 2,
                        'container'       => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'bs-example-navbar-collapse-1',
                        'menu_class'      => 'nav navbar-nav',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          => new WP_Bootstrap_Navwalker(),
                    ]);
                ?>
            </div>
        </nav>

    </header>