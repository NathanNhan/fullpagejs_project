<?php get_header(); ?>

<body>
    <header class="custom-nav">
        <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1"
                    aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'your-theme-slug'); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a class="navbar-brand" href="#">Navbar</a>
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
    <div id="fullpage">

        <div class="section home">
            <div class="home-right">
                <?php

                if (get_field('home_image', "27")): ?>
                <img src="<?php the_field('home_image', "27")?>" />
                <?php endif; ?>

            </div>
            <div class="home-left">
                <h1 class="home_title"><?php the_field('sut_title', '27'); ?></h1>
                <h3><?php the_field('title', '27'); ?></h3>
                <p>
                    <?php the_field('des', '27'); ?>
                </p>
                <div class="button">
                    <a href="<?php the_field('link_started_button', '27'); ?>" class="btn-1">Get Started</a>
                    <a href="<?php the_field('link_register_button', '27'); ?>" class="btn-2">Register</a>
                </div>
            </div>
        </div>
        <div class="section pic">
            <?php if (have_rows('slider_', '27')): ?>

            <?php while (have_rows('slider_', '27')): the_row();
                    $image = get_sub_field('slide_item');
                ?>
	            <div class="slide"><img src="<?php echo $image; ?>" width="100%" height="100%" alt="" /></div>
	            <?php endwhile; ?>

            <?php endif; ?>

        </div>
        <div class="section photographer">
            <h1><?php the_field('title_section', '27'); ?></h1>
            <div class="image-box">
                <?php if (have_rows('members', '27')): ?>

                <?php while (have_rows('members', '27')): the_row();
                        $image_member = get_sub_field('member_image');
                        $name_member  = get_sub_field('member_name');
                    ?>

	                <div class="imageBox">

	                    <div class="content">
	                        <div class="image-container">
	                            <span class="overlay"></span>
	                            <img src="<?php echo $image_member; ?>" alt="">

	                        </div>
	                        <div class="content-txt">
	                            <h2><?php echo $name_member; ?></h2>
	                            <p><i class="fa fa-facebook-squre"></i><i class="fa fa-facebook-squre"></i><i
	                                    class="fa fa-facebook-squre"></i></p>
	                        </div>
	                    </div>
	                </div>
	                <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>
        <div class="section img-gallery">
            <div id="container">
                <?php if (have_rows('photos', '27')): ?>

                <?php while (have_rows('photos', '27')): the_row();
                        $image_gallery = get_sub_field('item');
                    ?>
	                <div class="gallery">
	                    <div class="image_gallery"><img src="<?php echo $image_gallery; ?>" alt="">
	                    </div>
	                </div>

	                <?php endwhile; ?>

                <?php endif; ?>

            </div>
        </div>

        <div class="loading-page">
            <svg id="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                <!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                <path
                    d="M479.8 576L384.7 576L276.5 421.5L276.5 512.6L190.1 576L92.4 576L92.4 93.8L132.9 64L240.9 64L364.6 240.1L364.6 127.4L451 64L548.7 64L548.7 525.5L479.8 576zM103.2 99.3L103.2 560L175.2 507.1L175.2 258L390.7 565.6L475.5 565.6L527.9 527.4L449.6 527.4L133.5 76.9L103.3 99.2zM185.7 565.9L265.7 507.1L265.7 406.1L185.9 291.7L185.9 512.6L113.3 565.9L185.6 565.9L185.6 565.9zM145 74.8L455.6 517.4L538 517.4L538 74.8L458.2 74.8L458.2 392.4L235.3 74.8L145 74.8zM375.4 255.6L447.4 358.4L447.4 79.9L375.4 132.9L375.4 255.6z" />
            </svg>

            <div class="name-container">
                <div class="logo-name">Nathan</div>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</body>

<?php get_footer(); ?>