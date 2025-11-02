<?php
/**
 * The template for displaying 404 pages.
 *
 * @package WordPress
 */
?>

<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <section class="error-404 not-found">
            <header class="page-header">
                <h1 class="page-title">
                    <?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'your-theme-textdomain' ); ?></h1>
            </header><!-- .page-header -->

            <div class="page-content">
                <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'your-theme-textdomain' ); ?>
                </p>

                <?php
                    get_search_form();

                    // Hiển thị liên kết trang chủ
                    echo '<a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Go to Homepage', 'your-theme-textdomain' ) . '</a>';
                ?>
            </div><!-- .page-content -->
        </section><!-- .error-404 -->

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();