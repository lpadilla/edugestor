<?php

if(!function_exists('bober_ajax_load')){

    function bober_ajax_load($wp_query = null) {

        if($wp_query == null) {
            global $wp_query;
        } else {
            $wp_query = $wp_query;
        }

        wp_enqueue_script('bober_ajax_script', BOBER_THEME_DIRECTORY . 'framework/includes/helper/ajax-load/ajax-load.js', array('jquery'), '', true);
        // What page are we on? And what is the pages limit?
        $max = $wp_query->max_num_pages;
        $paged = (get_query_var('paged') > 1) ? get_query_var('paged') : 1;


        wp_localize_script(
            'bober_ajax_script',
            'ajax_load',
            array(
                'startPage' => $paged,
                'maxPages' => $max,
                'nextLink' => next_posts($max, false)
            )
        );
    }
}