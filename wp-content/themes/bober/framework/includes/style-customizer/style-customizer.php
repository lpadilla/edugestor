

<!-- style-customizer start-->
<div class="style-customizer closed">
    <div class="buy-button">
        <?php get_template_part('templates/site/site','header-logo'); ?>
        <a href="#" class="opener"><i aria-hidden="true" class="fa fa-cog fa-spin fa-fw"></i></a>
        <a href="http://themeforest.com/cart/add_items?ref=Domsday&amp;item_ids=22104976" target="blanc" class="button button-border btn-buy">Buy now!</a>
    </div>
    <div class="clearfix content-chooser">
        <h3>Color Schemes</h3>
        <p>Which theme color you want to use? Select from here.</p>
        <ul class="styleChange clearfix">
            <li title="color-1" data-style="<?php echo get_template_directory_uri() . '/assets/css/main1.css'; ?>" class="color-11 selected"></li>
            <li title="color-2" data-style="<?php echo get_template_directory_uri() . '/assets/css/main2.css'; ?>" class="color-2"></li>
            <li title="color-3" data-style="<?php echo get_template_directory_uri() . '/assets/css/main3.css'; ?>" class="color-3"></li>
            <li title="color-4" data-style="<?php echo get_template_directory_uri() . '/assets/css/main4.css'; ?>" class="color-4"></li>
            <li title="color-5" data-style="<?php echo get_template_directory_uri() . '/assets/css/main5.css'; ?>" class="color-5"></li>
            <li title="color-6" data-style="<?php echo get_template_directory_uri() . '/assets/css/main6.css'; ?>" class="color-6"></li>
            <li title="color-7" data-style="<?php echo get_template_directory_uri() . '/assets/css/main7.css'; ?>" class="color-7"></li>
            <li title="color-8" data-style="<?php echo get_template_directory_uri() . '/assets/css/main8.css'; ?>" class="color-8"></li>
            <li title="color-9" data-style="<?php echo get_template_directory_uri() . '/assets/css/main9.css'; ?>" class="color-9"></li>
            <li title="color-10" data-style="<?php echo get_template_directory_uri() . '/assets/css/main10.css'; ?>" class="color-10"></li>
            <li title="color-11" data-style="<?php echo get_template_directory_uri() . '/assets/css/main11.css'; ?>" class="color-1"></li>
            <li title="color-12" data-style="<?php echo get_template_directory_uri() . '/assets/css/main12.css'; ?>" class="color-12"></li>
        </ul>
        <ul class="resetAll">
            <li><a href="#" class="button button-border button-reset">Reset All</a></li>
        </ul>
    </div>
</div>

<script>
    /* style-customizer */
    jQuery(document).ready(function($) {

        /*************************
         Left sidebar
         *************************/
        style_switcher = $('.style-customizer'),
            panelWidth = style_switcher.outerWidth(true);
        $('.style-customizer .opener').on("click", function(){
            var $this = $(this);
            if ($(".style-customizer.closed").length>0) {
                style_switcher.animate({"left" : "0px"});
                $(".style-customizer.closed").removeClass("closed");
                $(".style-customizer").addClass("opened");
            } else {
                $(".style-customizer.opened").removeClass("opened");
                $(".style-customizer").addClass("closed");
                style_switcher.animate({"left" : '-' + panelWidth});
            }
            return false;
        });

        /*************************
         style change
         *************************/
        var link = $('link[id="bober-main-styles-css"]'),
            link_no_cookie = $('link[data-style="styles-no-cookie"]');

        /****************************************
         Resume from last selected style
         ****************************************/
        var tp_stylesheet = $.cookie('tp_stylesheet');

        $(".style-customizer .selected").removeClass("selected");
        if (!($.cookie('tp_stylesheet'))) {
            $.cookie('tp_stylesheet', '<?php echo get_template_directory_uri() . '/assets/css/main1.css'; ?>', 30);
            tp_stylesheet = $.cookie('tp_stylesheet');
            $('.style-customizer .styleChange li[data-style="'+tp_stylesheet+'"]').addClass("selected");
        } else {
            if (link.length>0) {
                link.attr('href','' + tp_stylesheet + '');
                $('.style-customizer .styleChange li[data-style="'+tp_stylesheet+'"]').addClass("selected");
            };
        };

        /*************************
         Color Changer
         *************************/
        $('.style-customizer .styleChange li').on('click',function(){
            if (link.length>0) {
                var $this = $(this),
                    tp_stylesheet = $this.data('style');
                $(".style-customizer .styleChange .selected").removeClass("selected");
                $this.addClass("selected");
                link.attr('href', '' + tp_stylesheet + '');
                $.cookie('tp_stylesheet', tp_stylesheet, 30);
            } else {
                var $this = $(this),
                    tp_stylesheet_no_cookie = $this.data('style');
                $(".style-customizer .styleChange .selected").removeClass("selected");
                $this.addClass("selected");
                link_no_cookie.attr('href', '' + tp_stylesheet_no_cookie + '');

            };
        });

        /**************************************
         Reset all customize styles
         **************************************/
        $('.style-customizer .resetAll li a.button-reset').on('click',function() {
            $(".owl-carousel .container").css("marginLeft", "auto");
            $('.style-customizer .patternChange li.selected').removeClass("selected");

            //Logo change
            $.cookie('tp_stylesheet', '<?php echo get_template_directory_uri() . '/assets/css/main1.css'; ?>', 30);
            var tp_stylesheet = '<?php echo get_template_directory_uri() . '/assets/css/main1.css'; ?>';
            $('.style-customizer .styleChange li.selected').removeClass("selected");
            $('.style-customizer .styleChange li[data-style="'+tp_stylesheet+'"]').addClass("selected");
            link.attr('href', '' + tp_stylesheet + '');
            $(window).trigger('resize');
        });

    });


</script>

<!-- style-customizer end-->