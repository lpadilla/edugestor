<?php
    $folio_id = get_the_ID();
    global $post;

    $portfolio_icon = 'fa fa-picture-o';

    if(class_exists('acf')){

        $style_popup_width = get_field('portfolio_max_width_popup');

        $hover_desrcription = get_field('portfolio_hover_description');
        $popup_desrcription = get_field('portfolio_description_project');
        $folio_type = get_field('portfolio_type');
        $custom_icon = get_field('portfolio_custom_icon');
        $post_type = get_post_type();

        //details
        $details = get_field('portfolio_details');

        $display_details = get_field('portfolio_display_details');
        $display_name = get_field('display_name_project');

        $details_client = $details['portfolio_details_client'];
        $details_date = $details['portfolio_details_date_of_release'];
        $details_link = $details['portfolio_details_link_preview'];
    }

    switch ($folio_type){
        case 'video';
            $portfolio_icon = 'fa fa-play';
            break;
        case 'audio';
            $portfolio_icon = 'fa fa-music';
            break;
        case 'photo_gallery';
            $portfolio_icon = 'fa fa-sliders';
            break;
        case 'video_gallery';
            $portfolio_icon = 'fa fa-youtube-play';
            break;
        case 'audio_gallery';
            $portfolio_icon = 'fa fa-music';
            break;
    }

    $link_open = '';
    $attr_modal = '';

    switch ($post_type){
        case 'folio';
            $link_open = '#'.$folio_id;
            $attr_modal = 'target=_blank data-toggle=modal data-target=.modal1 class=image-modal';
            break;
        case 'portfolio';
            $link_open = get_permalink($post->ID);
            break;
    }

    if(!empty($custom_icon)){
        $portfolio_icon = $custom_icon;
    }

?>

<article class="<?php echo bober_folio_class(); ?>">

    <a href="<?php echo esc_url($link_open); ?>"  title="<?php echo esc_attr( get_the_title($post->ID) ); ?>" <?php echo esc_attr($attr_modal); ?>>
        <div class="item-wrap dh-container">

            <?php if (has_post_thumbnail()) { ?>
                <div class="post-thumb">
                    <?php if (function_exists('add_theme_support'))
                        the_post_thumbnail('bober_portfolio_popup'); ?>
                </div>
            <?php } ?>


            <div class="content dh-overlay">
                <?php if($post_type == 'folio'): ?>
                    <div class="tizer-circle">
                        <i class="<?php echo esc_attr($portfolio_icon); ?>"></i>
                    </div>
                <?php endif; ?>

                <div class="content-wrap">
                    <div class="content-va">
                        <h2><?php echo get_the_title(); ?></h2>
                        <?php if($hover_desrcription){
                            echo '<p>'.esc_html($hover_desrcription).'</p>';
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </a>

    <!-- Start Modal project-->
    <?php if($post_type == 'folio'): ?>
        <div id="<?php echo esc_attr($folio_id); ?>" <?php if(!empty($style_popup_width)){echo 'style="max-width:'.$style_popup_width.'px"';}?>  class="modal-box mfp-hide">
            <?php echo bober_portfolio_thumbnail_format('bober_portfolio_large'); ?>
            <div class="modal-box-content">

                <?php if($display_name === true){
                    echo '<h2>'.get_the_title().'</h2>';
                } ?>

                <?php if(!empty($popup_desrcription)){
                   echo wp_kses_post($popup_desrcription);
                } ?>

                <?php if($display_details === true) :?>
                    <hr>
                    <h3><?php echo esc_html__('Detalis', 'bober'); ?></h3>
                    <ul class="list-project">
                        <?php
                            if($details_client){
                                echo '<li><b>'.esc_html__('Client:', 'bober').'</b>  '.esc_html($details_client).'</li>';
                            }
                            if($details_date){
                                echo '<li><b>'.esc_html__('Date: ', 'bober').'</b>  '.esc_html($details_date).'</li>';
                            }
                            if($details_link){
                                echo '<li><b>'.esc_html__('Live:', 'bober').'</b>  <a href="'.esc_url($details_link).'">'.esc_html__('View project', 'bober').'<i aria-hidden="true" class="fa fa-external-link"></i></a></li>';
                            }

                        ?>
                    </ul>
                <?php endif; ?>

                <?php echo bober_portfolio_footer(); ?>

            </div>
            <button title="<?php echo esc_attr__('Close (Esc)', 'bober') ?>" type="button" class="mfp-close">×</button>
        </div>
        <!-- End Modal project-->
    <?php endif; ?>


</article>




