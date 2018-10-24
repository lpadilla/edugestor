<?php
    $target = 'target='.bober_get_option('al-social-target').'';
?>

<!--Start social links-->
<ul class="social-links minimal">
    <?php
        if(bober_get_option('al-facebook')){
            echo '<li><a '.esc_attr($target).' href="'.esc_url( bober_get_option('al-facebook') ).'"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>';
        }if(bober_get_option('al-twitter')){
            echo '<li><a '.esc_attr($target).' href="'.esc_url( bober_get_option('al-twitter') ).'"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>';
        }if(bober_get_option('al-linkedin')){
            echo '<li><a '.esc_attr($target).' href="'.esc_url( bober_get_option('al-linkedin') ).'"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>';
        }if(bober_get_option('al-instagram')){
            echo '<li><a '.esc_attr($target).' href="'.esc_url( bober_get_option('al-instagram') ).'"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>';
        }if(bober_get_option('al-google')){
            echo '<li><a '.esc_attr($target).' href="'.esc_url( bober_get_option('al-google') ).'"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>';
        }if(bober_get_option('al-skype')){
            echo '<li><a '.esc_attr($target).' href="skype:live:'.esc_url(bober_get_option('al-skype')).'?chat"><i class="fa fa-skype" aria-hidden="true"></i></a></li>';
        }if(bober_get_option('al-dribbble')){
            echo '<li><a '.esc_attr($target).' href="'.esc_url(bober_get_option('al-dribbble')).'"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>';
        }if(bober_get_option('al-pinterest')){
            echo '<li><a '.esc_attr($target).' href="'.esc_url(bober_get_option('al-pinterest')).'"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>';
        }if(bober_get_option('al-rss')){
            echo '<li><a '.esc_attr($target).' href="'.esc_url(bober_get_option('al-rss')).'"><i class="fa fa-rss" aria-hidden="true"></i></a></li>';
        }if(bober_get_option('al-youtube')){
            echo '<li><a '.esc_attr($target).' href="'.esc_url(bober_get_option('al-youtube')).'"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>';
        }if(bober_get_option('al-vimeo')){
            echo '<li><a '.esc_attr($target).' href="'.esc_url(bober_get_option('al-vimeo')).'"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>';
        }if(bober_get_option('al-git')){
            echo '<li><a '.esc_attr($target).' href="'.esc_url(bober_get_option('al-git')).'"><i class="fa fa-git" aria-hidden="true"></i></a></li>';
        }if(bober_get_option('al-bitbucket')){
            echo '<li><a '.esc_attr($target).' href="'.esc_url(bober_get_option('al-bitbucket')).'"><i class="fa fa-bitbucket" aria-hidden="true"></i></a></li>';
        }
    ?>
</ul>
<!--End social links-->