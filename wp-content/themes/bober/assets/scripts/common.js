/*
   Theme Name: Bober
   Theme URI: http://bober.alian4x.com
   Author: Alian4x
   Author URI: http://themeforest.net/user/Alian4x
   Description: BOBER - Creative Digital Agency Template
   Version: 1.0.0
*/

"use strict";

(function ($) {

    $('body').on('click', '.al-button-disable', function(e){
        e.preventDefault();
        return false;
    });

    $(function() {
        var backToTop = {
            element: $('.al-btn-to-top'),
            offset: 350,
            duration: 350
        };
        $(window).on('scroll', function() {
            if ($(this).scrollTop() > backToTop.offset) {
                backToTop.element.removeClass('is-hidden').addClass('is-visible');
            } else {
                backToTop.element.removeClass('is-visible').addClass('is-hidden');
            }
        });
        backToTop.element.on('click', function() {
            $('html, body').animate({
                scrollTop: 0
            }, backToTop.duration);
            return false;
        });
	});

	/*-------------------------------------
	 	MatchHeight
	 -------------------------------------*/
    $('.al-inslider-item').matchHeight({
        property: 'height'
	});

	/*-------------------------------------
	 	Tilt
	 -------------------------------------*/
    $('.al-icon-container').tilt({
        scale: 1.09
    });

	/*-------------------------------------
		 Add active class to current menu
	 -------------------------------------*/
    $(function () {
        var url = window.location.pathname,
            urlRegExp = new RegExp(url.replace(/\/$/, '') + "$");
        $('.al-services-list > li > a').each(function () {
            if (urlRegExp.test(this.href.replace(/\/$/, ''))) {
                $(this).parent().addClass('active');
            }
        });
    });

	/*-------------------------------------
		Loader
	-------------------------------------*/
	$(document).ready(function(){


	});
	$(window).load(function () {

		$('#status').fadeOut();
		$('#preloader').delay(1000).fadeOut('slow');
		$('body.dark-load').removeClass('dark-load');

		/*-------------------------------------
		Top menu - Textillate
		-------------------------------------*/

		$('.al-tlt-text').textillate({
			selector: '.texts',
			loop: true,
			minDisplayTime: 500,
			initialDelay: 0,
			autoStart: true,
			inEffects: [],
			outEffects: [ 'hinge' ],
			in: {
				effect: 'rollIn',
				delayScale: 0.4,
				delay: 50,
				sync: false,
				shuffle: false,
				reverse: false,
				callback: function () {}
			},
			out: {
				effect: 'fadeOutDown',
				delayScale: 0.5,
				delay: 70,
				sync: false,
				shuffle: false,
				reverse: false,
				callback: function () {}
			},
			type: 'char'
		});






		/*-------------------------------------
		 Particles
		 -------------------------------------*/
        $('#al-particles-js').each(function() {
            $(this).particleground({
                dotColor: 'rgba(255, 255, 255, 0.40)',
                lineColor: 'rgba(255, 255, 255, 0.21)',
                parallaxMultiplier: 5,
                particleRadius: 5,
                proximity: 130,
                density: 12000
            });
		});
	});



	/*-------------------------------------
	 Service  nav height as content
	 -------------------------------------*/
    // if ($(window).width() > 992) {
    //
     //    // Ini functions
     //    al_service_height();
    //
     //    $(window).on('resize', function() {
     //        al_service_height();
     //    }).trigger('resize');
    // }else{
    //
     //    $(window).on('resize', function() {
     //        al_service_height('auto');
     //    }).trigger('resize');
	// }

		$(window).on('resize', function() {
            al_height_service();
            $('.dh-container').directionalHover();
		}).trigger('resize');

        function al_height_service() {
            $('.al-service-single', this).each(function() {
                var height = $(this).find('.al-services-content').outerHeight(),
                	nav = $(this).find('.al-services-nav');

                if($(window).width() > 992){
                    nav.css('height', height);
                }else{
                    nav.css('height', 'auto');
                }

            });
		}



	/*-------------------------------------
	 Masonry blog
	 -------------------------------------*/
    $(function(){

    	var section = $('.al-masonry-posts');

    	section.imagesLoaded().done(function(){
			section.isotope({
				itemSelector: 'article',
				masonry: {
					columnWidth: 'article',
                    gutter: '.gutter-sizer'
				},
                transitionDuration: '0.8s',
                percentPosition: true
			});
		});

        $(window).on('resize', function() {
            section.isotope();
        }).trigger('resize');


	});

	/*-------------------------------------
	 Portfolio control
	 -------------------------------------*/
    $(function() {
        if ($("#al-control-portfolio").length) {

            $('#al-control-portfolio li').on('click', function (e) {
                e.preventDefault();
                var $this = $(this);
                $('#al-control-portfolio li').removeClass('active');
                $(this).addClass('active');
                $('.al-masonry-posts').isotope({
                    filter: $(this).attr('data-filter'),
                    masonry: {
                        columnWidth: 'article',
                        gutter: '.gutter-sizer'
                    }
                });
                return false;
            });

        }
    });

        /*-------------------------------------
        Header normal
        —-----------------------------------*/
	if ($(window).width() < 1160) {
		var headertp1 = $(".header-type-1");
		headertp1.addClass("page-header");
		headertp1.attr('id', 'top-nav');
	}

	/*-------------------------------------
	Masonry portfolio
	—-----------------------------------*/
	// $(function(){
	// 	var masonry_layout = $(".masonry-portfolio");
	// 	masonry_layout.imagesLoaded(function () {
	// 		masonry_layout.isotope('layout');
	// 	});
    //
	// 	masonry_layout.isotope({
	// 		layoutMode: 'masonry',
	// 		transitionDuration: '0.3s'
	// 	});
	// });

	/*-------------------------------------
	Top nav
	-------------------------------------*/
	$(function(){
      // scroll is still position
		var scroll = $(document).scrollTop(),
			window_view = $(window),
            $body = $('body'),
			headerHeight = $('.page-header').outerHeight();

		//console.log(headerHeight);

		/*-------------------------------------
		Top menu - fixed
		-------------------------------------*/
		window_view.on('scroll', function() {
			var winTop = window_view.scrollTop(),
				top_nav = $("#top-nav");

				if(winTop >= 150){
			top_nav.addClass("is-sticky");
			}else{
				top_nav.removeClass("is-sticky");
			}
			/*-------------------------------------
				Back to top link
			-------------------------------------*/
			$(function(){
				var y = $(this).scrollTop(),
					top = $('.top');
				if (y > 1000) {
					top.fadeIn('slow');
				} else {
					top.fadeOut('slow');
				}
			});

			/*-------------------------------------
			Hide Header on on scroll down
			-------------------------------------*/
			$(function(){
				// scrolled is new position just obtained
				var scrolled = $(document).scrollTop(),
					page_header = $('.page-header');


					if (scrolled > headerHeight){
						page_header.addClass('off-canvas-menu');
					} else {
						page_header.removeClass('off-canvas-menu');
					}

				    if (scrolled > scroll){
				         // scrolling down
						 page_header.removeClass('fixed-tp-menu');
						$body.removeClass('al-admin-off-menu');
				      } else {
						  //scrolling up
						  page_header.addClass('fixed-tp-menu');
						  $body.addClass('al-admin-off-menu');
				    }

					scroll = $(document).scrollTop();
				});
			})
	});

	/*-------------------------------------
	 Top menu - Superfish
	 -------------------------------------*/
    $('ul.sf-menu-header').superfish({
        delay: 300,
        speed: 200,
        animation:     ({opacity:'show',  height:'show'}),
        animationOut:  ({opacity:'hide', height:'hide'}),
        cssArrows: true,
        disableHI: false,
        easing: 'fadeInUp',
        touchMove: false,
        swipe: false
    });


    /*-------------------------------------
        Portfolio popup
    -------------------------------------*/
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

	/*-------------------------------------
	Accordion
	-------------------------------------*/
	$('.accordion:nth-child(1n)').accordion({
		heightStyle: 'content'
	});

	/*-------------------------------------
		MFP
	-------------------------------------*/
	$('.open-popup-link').magnificPopup({
		type:'inline',
		midClick: true, // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
		removalDelay: 300,
		mainClass: 'mfp-fade'
	});

	/*-------------------------------------
		Animations
	-------------------------------------*/
	$(function () {
		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
			} else {
				$(".heading-title > h2").animated("fadeInDown");
				$(".heading-title > p").animated("fadeInUp");
				$(".heading-title > .small-desd").animated("fadeIn");
				$(".animated-service").animated("fadeIn");
				$(".masonry-item-pr, .masonry-item").animated("fadeIn");
			}
	}());


	/*-------------------------------------
		MagnificPopup
	-------------------------------------*/
	$('.image-modal-gallery').magnificPopup({
		type:'inline',
		fixedContentPos: true,
		removalDelay: 100,
		closeBtnInside: true,
		preloader: true,
		mainClass: 'mfp-fade',
		// callbacks: {
		// 	open: initSliders
		// }
	});

    // $('.al-gallery-folio').each(function(){
     //    $(this).on('click', function(){
     //        $('.slider-portfolio-single').slick('refresh');
     //        console.log('it is work fine');
     //    });
	// });

    $('.al-masonry-posts').on('click', '.al-gallery-folio', function(){
        $('.slider-portfolio-single').slick('refresh');
	});

	$('.image-modal').each(function(){
        $(this).magnificPopup({
            type:'inline',
            fixedContentPos: true,
            removalDelay: 100,
            closeBtnInside: true,
            preloader: true,
            mainClass: 'mfp-fade',
            callbacks: {
                open: function () {
                    $('.slider-portfolio-single').not('.slick-initialized').slick('refresh');
                    $('html').css('margin-right', '5px');
                }
                // e.t.c.
            }
        });
	});


	/*-------------------------------------
	 Background function
	 -------------------------------------*/
    $.fn.al_background_image = function() {
        $(this).each(function() {
            var url = $(this).attr('data-image');
            if(url){
                $(this).css('background-image', 'url(' + url + ')');
            }
        });
    };
    $('.background-image').al_background_image();

	/*-------------------------------------
		Video iframe height
	 -------------------------------------*/
    $.fn.al_iframe_height = function() {
        $(this).each(function() {

            var height = $(this).attr('data-height');
            if(height){
                $(this).children('iframe').css('height', ''+height+'px');
            }

        });
    };
    $('.al-iframe-content').al_iframe_height();

	/*------------------------------------------------------------------
	 Resize iframe video
	 -------------------------------------------------------------------*/
    function al_resposive_iframe() {
        var resizeitem = $('iframe');
        resizeitem.height(
            resizeitem.attr("height") / resizeitem.attr("width") * resizeitem.width()
        );
    }

    if ($(window).width() < 768) {
        al_resposive_iframe();
        $(window).resize(function() {
            al_resposive_iframe();
        });
	}

	/*-------------------------------------
	 Service item full heading
	 -------------------------------------*/
    $.fn.al_service_height = function() {
        $(this).each(function() {
            var height = $(this).find('.content-service').outerHeight();
            $(this).find('.icon-service').css('height', height);
        });
    };
    // init
    $('.item-full-height').al_service_height();


    $.fn.al_slider_wrap = function() {
        $(this).each(function() {
            var $dots = $(this).find('.al-dots-control');
            var $arrows = $(this).find('.al-control-portfolio-slider');
            var $next = $arrows.children(".wrap-next");
            var $prev = $arrows.children(".wrap-prev");

            var $slick_slider = $(this).children(".slider-portfolio-single");

            // $arrows.css('display', 'none');
            $slick_slider.not('.slick-initialized').slick({
                dots: true,
                fade: true,
                appendDots: $dots,
                dotsClass: 'dots',
                autoplay: true,
                autoplaySpeed: 8000,
                autoHeight: false,
                infinite: true,
                cssEase: 'linear',
                adaptiveHeight: true,
                prevArrow: $prev,
                nextArrow: $next
            });

        });
    };

    $('.slider-wrap').al_slider_wrap();


	/*-------------------------------------
		Into slider
	-------------------------------------*/
	$(function() {
		var introHeader = $('.intro'),
			window_view = $(window),
			intro = $('.intro');

		buildModuleHeader(introHeader);

		window_view.resize(function() {
			var width = Math.max(window_view.width(), window_view.innerWidth);
			buildModuleHeader(introHeader);
		});

		window_view.scroll(function() {
			effectsModuleHeader(introHeader, this);
		});

		function buildModuleHeader(introHeader) {
		};
		function effectsModuleHeader(introHeader, scrollTopp) {
			if (introHeader.length > 0) {
				var homeSHeight = introHeader.height();
				var topScroll = $(document).scrollTop();
				if ((introHeader.hasClass('intro')) && ($(scrollTopp).scrollTop() <= homeSHeight)) {
					// introHeader.css('top', (topScroll * .4));
				}
				if (introHeader.hasClass('intro') && ($(scrollTopp).scrollTop() <= homeSHeight)) {
					introHeader.css('opacity', (1 - topScroll/introHeader.height() * 1));
				}
			}
		};
	});


	/*-------------------------------------
		Drag images restagt
	-------------------------------------*/
	$('img, a').on('dragstart', function(event) { event.preventDefault(); });

	/*-------------------------------------
		Smooth Scroll to link

	 , .al-no-click, .image-modal
	-------------------------------------*/

    $(document).on('click', 'a[href^="#"]', function(e) {

        var id = $(this).attr('href');
        // target element
        var $id = $(id);
        if ($id.length === 0) {
            return;
        }
        if($(this).is('.al-no-click, .image-modal, .ult_a')){
        	console.log('has');
		}else{
            if($('.single-product').length === 0){
                e.preventDefault();
                var pos = $id.offset().top;
                $('html, body').stop().animate({
                    scrollTop: pos
                }, {
                    duration: 1000,
                    specialEasing: {
                        width: "linear",
                        height: "easeInOutCubic"
                    }
                });
            }
		}
    });


	/*-------------------------------------
		Select size
	-------------------------------------*/
	$("form .al-select").selectize();

	/*-------------------------------------
		directionalHover
	-------------------------------------*/
	$('.dh-container').directionalHover();


	/*-------------------------------------
		MagnificPopup
	-------------------------------------*/
	$('.icon-play').magnificPopup({
		type: 'iframe',
		autoFocusLast: false,
		mainClass: 'mfp-with-zoom',
		iframe: {
			markup: '<div class="mfp-iframe-scaler">'+
			'<div class="mfp-close"></div>'+
			'<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
			'</div>', // HTML markup of popup, `mfp-close` will be replaced by the close button

			patterns: {
				youtube: {
					index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).
					id: 'v=', // String that splits URL in a two parts, second part should be %id%
						// Or null - full URL will be returned
						// Or a function that should return %id%, for example:
						// id: function(url) { return 'parsed id'; }
					src: '//www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe.
				},

				vimeo: {
					index: 'vimeo.com/',
					id: '/',
					src: '//player.vimeo.com/video/%id%?autoplay=1'
				},

				gmaps: {
					index: '//maps.google.',
					src: '%id%&output=embed'
				}

			},
			zoom: {
				enabled: true, // By default it's false, so don't forget to enable it

				duration: 300, // duration of the effect, in milliseconds
				easing: 'ease-in-out', // CSS transition easing function

				// The "opener" function should return the element from which popup will be zoomed in
				// and to which popup will be scaled down
				// By defailt it looks for an image tag:
				opener: function(openerElement) {
					// openerElement is the element on which popup was initialized, in this case its <a> tag
					// you don't need to add "opener" option if this code matches your needs, it's defailt one.
					return openerElement.is('img') ? openerElement : openerElement.find('img');
					}
			},

			srcAction: 'iframe_src', // Templating object key. First part defines CSS selector, second attribute. "iframe_src" means: find "iframe" and set attribute "src".
		}
	});



	/*-------------------------------------
		Mobile menu - full screen menu
	-------------------------------------*/
	$(function() {

		var $menu = $('#mobile-menu'),
			$body = $('body'),
			$fn = $('#mobile-menu'),
			$fnToggle = $('.toggle-mnu'),
			$logo = $('.logo'),
			$window = $(window);

			$menu.find('.menu-item-has-children > a').on('click', function(e) {
				e.preventDefault();
				if ($(this).next('ul').is(':visible')) {
					$(this).removeClass('sub-active').next('ul').slideUp(250);
				} else {
					// $('.menu-item-has-children > a').removeClass('sub-active').next('ul').slideUp(250);
					$(this).addClass('sub-active').next('ul').slideToggle(250);
				}
			});

			var fnOpen = false;

			var fnToggleFunc = function() {
				fnOpen = !fnOpen;
				$body.toggleClass('fullscreen-nav-open');
				$fn.stop().fadeToggle(500);
				$fn.toggleClass("active");
				$('.toggle-mnu').toggleClass('on');
				$logo.toggleClass('on');
				$logo.toggleClass('dark-logo');

				return false;
			};

			$fnToggle.on('click', fnToggleFunc);

			$(document).on('keyup', function(e) {
				if (e.keyCode == 27 && fnOpen) {
					fnToggleFunc();
				}

			});

			$fn.find('li:not(.menu-item-has-children) > a').one('click', function() {
				fnToggleFunc();
				return true;
			});

			$menu.on('click', function(){
				fnToggleFunc();
				return true;
			});

			$('.inner-wrap, .fullscreen-menu-toggle').on('click', function(e){
				e.stopPropagation();
			});
	});

	/*-------------------------------------
		Top menu - full screen menu
	-------------------------------------*/
	$(function(){
		var $menu = $('.toggle-top'),
			$body = $('body');

		$menu.on('click', function(e){
			e.preventDefault();
			$(this).toggleClass('on-top');
			$body.toggleClass('active-fullscreen-topnav');
			$('.fullscreen-topnav').toggleClass('show-full-screen');
		});
	});

	/*-------------------------------------
	YouTube player
	-------------------------------------*/
	if (typeof $.fn.mb_YTPlayer !== 'undefined') {
		$(function () {
			if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
				} else {
					$("#bgndVideo").mb_YTPlayer(); //Your code
				}
		}());
	}

	/*-------------------------------------
		Who we are height
	-------------------------------------*/
	$('.right-full', this).each(function() {
		var height = $(this).outerHeight();
		$('.left-full').css('height', height);
	});


	/*-------------------------------------
		Skills
	-------------------------------------*/
	$('.al-skillbar').each(function(){
		var $ths_out = $(this).find('.al-skillbar-progress'),
			$ths_in = $(this).find('.al-progress-bar');


		$ths_in.waypoint(function (dir) {
			if (dir === "down") {
				$ths_in.animate({
					width:$ths_out.attr('data-percent')
				},1500);
			}
			else {
				$ths_in.css('width', '0');
			}
			}, {
				offset: "90%"
			});
	});






})(jQuery);