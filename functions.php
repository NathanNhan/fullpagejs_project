<?php

function load_assets()
{
    wp_enqueue_style("maincss", get_theme_file_uri() . '/style.css', [], "1.7", "all");
    wp_enqueue_style("fullpagecss", '//cdn.jsdelivr.net/npm/fullpage.js/dist/fullpage.min.css', [], "1.1", 'all');
    wp_enqueue_script("fullpage_script", '//cdn.jsdelivr.net/npm/fullpage.js/dist/fullpage.min.js', [], '1.1', true);
    wp_enqueue_script("fullpage_custom__script", get_theme_file_uri() . '/js/fullpage-custom.js', ["fullpage_script"], '1.2', true);
    wp_enqueue_script("gsap_script", '//cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js', [], '1.1', true);
    wp_enqueue_script("animation_logo__gsap", get_theme_file_uri() . '/js/custom.js', ["gsap_script"], '1.2', true);
}
add_action("wp_enqueue_scripts", "load_assets");
