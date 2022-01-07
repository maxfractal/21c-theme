<?php
    function cgeek_files() {
        wp_enqueue_style('21cgeek_styles', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'cgeek_files');

?>