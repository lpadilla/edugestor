<!-- Start full screen top nav-->
<?php

    $background_image = '';
    $contact_form = '';

    //START Link 1
        $link_1 = '';
        $link_1_type = bober_get_option('al-full-screen-link-type-1');
        $link_1_target = '';

        if($link_1_type ==='link'){
            $link_1 = bober_get_option('al-full-link-1');
        }elseif($link_1_type == 'page'){
            $link_1 = get_page_link(bober_get_option('al-full-link-page-1'));
        }

        if(!empty(bober_get_option('al-full-link-target-1'))){
            $link_1_target = 'target='.bober_get_option('al-full-link-target-1').'';
        }
    //END Link 1

    //START Link 2
        $link_2 = '';
        $link_2_type = bober_get_option('al-full-screen-link-type-2');
        $link_2_target = '';

        if($link_2_type ==='link'){
            $link_2 = bober_get_option('al-full-link-2');
        }elseif($link_2_type == 'page'){
            $link_2 = get_page_link(bober_get_option('al-full-link-page-2'));
        }

        if(!empty(bober_get_option('al-full-link-target-2'))){
            $link_2_target = 'target='.bober_get_option('al-full-link-target-2').'';
        }
    //END Link 12

    //START Description
    $description = bober_get_option('al-full-screen-description');
    $title = bober_get_option('al-full-screen-title');
    //END Description

    //START Video
    $video = bober_get_option('al-full-screen-video-link');
    $video_desc = bober_get_option('al-full-screen-video-description');
    //END Video

    if(!empty(bober_get_option('al-full-screen-background'))){
        $background_image = 'data-image="'.bober_get_option('al-full-screen-background').'"';
    }
    if(!empty(bober_get_option('al-full-screen-form'))){
        $contact_form = bober_get_option('al-full-screen-form');
    }

?>

<div <?php echo esc_attr($background_image); ?>  class="fullscreen-topnav rotate background-image">
    <!-- Start container-->
    <div class="container-fluid height-half">
        <div class="row height-full no-padding-bottom">
            <div class="items height-full">

                <a <?php echo esc_attr($link_1_target); ?> href="<?php echo esc_url($link_1); ?>" class="col-lg-3 col-md-6 col-sm-6 col-xs-12 height-full link">
                    <div class="item table">
                        <div class="content-nav table-cell">
                            <p><?php echo esc_html(bober_get_option('al-full-link-1-title')); ?></p>
                            <h2><?php echo esc_html(bober_get_option('al-full-link-1-description')); ?></h2>
                        </div>
                    </div>
                </a>
                <a <?php echo esc_attr($link_2_target); ?> href="<?php echo esc_url($link_2); ?>" class="col-lg-3 col-md-6 col-sm-6 col-xs-12 col-lg-push-6 height-full link">
                    <div class="item table">
                        <div class="content-nav table-cell">
                            <p><?php echo esc_html(bober_get_option('al-full-link-2-title')); ?></p>
                            <h2><?php echo esc_html(bober_get_option('al-full-link-2-description')); ?></h2>
                        </div>
                    </div>
                </a>


                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-lg-pull-3 height-full text-item">
                    <div class="item table">
                        <div class="content-nav table-cell">
                            <h3><?php echo wp_kses_post($title); ?></h3>
                            <p><?php echo wp_kses_post($description); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start container-->
    <div class="container-fluid height-half-60">
        <div class="row no-padding-bottom height-full">
            <div class="items height-full">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 video-play height-full">
                    <div class="video-section table">
                        <div class="table-cell"><a href="<?php echo esc_url($video); ?>" class="icon-play anim-shadow"><i class="pe-7s-play"></i></a>
                            <?php if($video_desc){
                                echo '<p>'.$video_desc.'</p>';
                            } ?>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-full-screen height-full">
                    <div class="content table">
                        <div class="table-cell">
                            <?php echo do_shortcode($contact_form) ;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End container-->
</div>
<!-- End full screen top nav-->

