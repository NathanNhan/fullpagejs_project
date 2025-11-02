<?php

function load_assets()
{
    wp_enqueue_style("bootstrapcss", "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css", [], "1.1", "all");
    wp_enqueue_style("maincss", get_theme_file_uri() . '/style.css', [], "1.7", "all");
    wp_enqueue_style("fullpagecss", '//cdn.jsdelivr.net/npm/fullpage.js/dist/fullpage.min.css', [], "1.1", 'all');
    wp_enqueue_script("fullpage_script", '//cdn.jsdelivr.net/npm/fullpage.js/dist/fullpage.min.js', [], '1.1', true);
    wp_enqueue_script("fullpage_custom__script", get_theme_file_uri() . '/js/fullpage-custom.js', ["fullpage_script"], '1.2', true);
    wp_enqueue_script("gsap_script", '//cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js', [], '1.1', true);
    wp_enqueue_script("animation_logo__gsap", get_theme_file_uri() . '/js/custom.js', ["gsap_script"], '1.3', true);
    wp_enqueue_script("bootstrapjs", "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js", [], '1.4', true);
}
add_action("wp_enqueue_scripts", "load_assets");

/**
 * Register Custom Navigation Walker
 */
function register_navwalker()
{
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

    register_nav_menus([
        'primary' => __('Primary Menu', 'photograp'),
    ]);

}
add_action('after_setup_theme', 'register_navwalker');

add_filter('nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3);
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute($atts, $item, $args)
{
    if (is_a($args->walker, 'WP_Bootstrap_Navwalker')) {
        if (array_key_exists('data-toggle', $atts)) {
            unset($atts['data-toggle']);
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}

//register custom logo field
function theme_prefix_setup()
{

    add_theme_support('custom-logo', [
        'height' => 60,
        'width'  => 60,
    ]);

}
add_action('after_setup_theme', 'theme_prefix_setup');
