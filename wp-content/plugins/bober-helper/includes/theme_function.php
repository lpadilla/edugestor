<?php

/****************************
Social share
 ***************************/
if (!function_exists('bober_share_buttons')) {
    function alian4x_share_buttons(){

        global $post;

        $url = get_permalink($post->ID);
        $title = get_the_title($post->ID);
        $media = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'bober_fullsize');
        $output = '';
        $output .= '<div class="al-share-post">';
        $output .= '<h4>' . esc_html__('Share:', 'alian4x') . '</h4>';
        $output .= '<ul class="al-share-post-links">';
        $output .= '<li><a href="https://www.facebook.com/sharer.php?u=' . $url . '&t=' . $title . '" onclick="window.open(\'https://www.facebook.com/sharer.php?u=' . $url . '/&t=' . $title . '\',\'popup\',\'width=600,height=600,scrollbars=no,resizable=no\'); return false;"  title="' . esc_attr__('Share on Facebook', 'alian4x') . '" ><i class="fa fa-facebook"></i></a></li>';
        $output .= '<li><a href="https://twitter.com/home/?status=' . $url . ' - ' . $title . '" onclick="window.open(\'https://twitter.com/home/?status=' . $title . ' - ' . $url . '\',\'popup\',\'width=600,height=600,scrollbars=no,resizable=no\'); return false;"  title="' . esc_attr__('Tweet this', 'alian4x') . '" ><i class="fa fa-twitter"></i></a></li>';
        $output .= '<li><a href="http://vk.com/share.php?url=' . $url . '" onclick="window.open(\'http://vk.com/share.php?url=' . $url . '\',\'popup\',\'width=600,height=600,scrollbars=no,resizable=no\'); return false;"  title="' . esc_attr__('Share on VK', 'alian4x') . '" ><i class="fa fa-vk"></i></a></li>';
        $output .= '<li><a href="https://plus.google.com/share?url=' . $url . '" onclick="window.open(\'https://plus.google.com/share?url=' . $url . '\',\'popup\',\'width=600,height=600,scrollbars=no,resizable=no\'); return false;"  title="' . esc_attr__('Share on Google plus', 'alian4x') . '" ><i class="fa fa-google-plus"></i></a></li>';
        $output .= '<li><a href="https://www.linkedin.com/shareArticle?mini=true&title=' . $title . '&url=' . $url . '" onclick="window.open(\'https://www.linkedin.com/shareArticle?mini=true&title=' . $title . '&url=' . $url . '\',\'popup\',\'width=600,height=600,scrollbars=no,resizable=no\'); return false;"  title="' . esc_attr__('Share on Linkedin', 'alian4x') . '" ><i class="fa fa-linkedin"></i></a></li>';
        $output .= '';
        $output .= '';
        $output .= '</ul>';
        $output .= '</div>';

        return apply_filters('alian4x/share_buttons', $output);

    }
}

