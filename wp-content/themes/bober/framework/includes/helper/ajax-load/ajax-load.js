jQuery.noConflict()(function($) {
    'use strict';
    var pageNum = parseInt(ajax_load.startPage) + 1,
        max = parseInt(ajax_load.maxPages),
        nextLink = ajax_load.nextLink,
        $loadMore = $('.al-ajax-more-posts'),
        $posts_container = $('.al-posts');

    $posts_container.next().find($loadMore).not('.al-button-disable').on('click', function(event){

        event.preventDefault();
        var t = $(this);
        if(nextLink == null) return;
        t.addClass('al-is-active');
        pageNum++;

        $.ajax({
            type: 'POST',
            url: nextLink,
            dataType: 'html',
            success: function(data) {
                var k = $(data),
                    g = k.find('.al-posts article');
                if(g.length > 0) {
                    g.imagesLoaded(function() {
                        if($posts_container.hasClass('al-masonry-posts')){
                            $posts_container.append(g).isotope('appended', g).isotope('layout');

                        } else {
                            $posts_container.append(g);
                        }

                        $('.image-modal').magnificPopup({
                            type:'inline',
                            fixedContentPos: true,
                            removalDelay: 100,
                            closeBtnInside: true,
                            preloader: true,
                            mainClass: 'mfp-fade'
                        });
                        $('.link-portfolio').magnificPopup({
                            type:'image',
                            gallery:{enabled:true},
                            zoom:{enabled: true, duration: 300},
                            callbacks: {
                                open: function() {
                                    $('html').css('margin-right', 0);
                                }
                            }
                        });
                        $('.dh-container').directionalHover();
                        $('.slider-wrap').al_slider_wrap();
                        $('.al-iframe-content').al_iframe_height();
                        $('.item-full-height').al_service_height();
                        $('.background-image').al_background_image();

                    });
                    t.removeClass('al-is-active');
                } else {
                    t.removeClass('al-is-active');
                    t.find('span').text('No more posts').end().addClass('al-button-disable');
                }

                nextLink = nextLink.replace(/\/page\/[0-9]?/,'/page/'+ pageNum);

                if(pageNum <= max) {
                    t.removeClass('al-is-active');
                    t.find('span').text('Load More');
                } else {
                    $loadMore.remove();
                    $(".al-ajax-navigation").append("<div class='al-ajax-more-posts btn al-btn-dark large-btn al-button-disable'>No more posts</div>")
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                $loadMore.text(jqXHR + ' :: ' + textStatus + ' :: ' + errorThrown);
            }
        });
    });
});
