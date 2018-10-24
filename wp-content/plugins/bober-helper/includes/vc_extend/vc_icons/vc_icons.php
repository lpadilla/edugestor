<?php

add_action('vc_after_init', 'vlthemes_vc_after_init_icons');


function vlthemes_vc_after_init_icons(){


	add_action('vc_base_register_front_css', 'vlthemes_vc_iconpicker_base_register_css');
	add_action('vc_base_register_admin_css', 'vlthemes_vc_iconpicker_base_register_css');

	function vlthemes_vc_iconpicker_base_register_css()
	{
		wp_register_style('linearicons', plugin_dir_url(__FILE__) . 'fonts/lnr/lnr.min.css');
		wp_register_style('stroke', plugin_dir_url(__FILE__) . 'fonts/stroke/dist/pe-icon-7-stroke.css');
		wp_register_style('iconmoon', plugin_dir_url(__FILE__) . 'fonts/icnm/icnm.min.css');
		wp_register_style('etline', plugin_dir_url(__FILE__) . 'fonts/etl/etl.min.css');
		wp_register_style('elusive', plugin_dir_url(__FILE__) . 'fonts/el/el.min.css');
		wp_register_style('iconsmind', plugin_dir_url(__FILE__) . 'fonts/iconsmind/iconsmind.css');
	}

	add_action('vc_backend_editor_enqueue_js_css', 'vlthemes_vc_iconpicker_editor_jscss');
	add_action('vc_frontend_editor_enqueue_js_css', 'vlthemes_vc_iconpicker_editor_jscss');

	function vlthemes_vc_iconpicker_editor_jscss()
	{
		wp_enqueue_style('linearicons');
		wp_enqueue_style('stroke');
		wp_enqueue_style('iconmoon');
		wp_enqueue_style('etline');
		wp_enqueue_style('elusive');
		wp_enqueue_style('iconsmind');
		
	}


	add_action('vc_enqueue_font_icon_element', 'vlthemes_enqueue_font_elusive');

	function vlthemes_enqueue_font_elusive($font)
	{
		switch ($font) {
			case 'stroke':
				wp_enqueue_style('stroke');
				break;
            case 'linearicons':
				wp_enqueue_style('linearicons');
				break;
			case 'iconmoon':
				wp_enqueue_style('iconmoon');
				break;
			case 'etline':
				wp_enqueue_style('etline');
				break;
			case 'elusive':
				wp_enqueue_style('elusive');
				break;
			case 'iconsmind':
				wp_enqueue_style('iconsmind');
				break;
		}
	}


	//Start stroke
    add_filter('vc_iconpicker-type-stroke', 'vc_iconpicker_type_stroke');

    function vc_iconpicker_type_stroke($icons){

        $stroke_icons = array(

            array('pe-7s-album' => 'home'),

            array('pe-7s-arc' => 'home'),

            array('pe-7s-back-2' => 'home'),

            array('pe-7s-bandaid' => 'home'),

            array('pe-7s-car' => 'home'),

            array('pe-7s-diamond' => 'home'),

            array('pe-7s-door-lock' => 'home'),

            array('pe-7s-eyedropper' => 'home'),

            array('pe-7s-female' => 'home'),

            array('pe-7s-gym' => 'home'),

            array('pe-7s-hammer' => 'home'),

            array('pe-7s-headphones' => 'home'),

            array('pe-7s-helm' => 'home'),

            array('pe-7s-hourglass' => 'home'),

            array('pe-7s-leaf' => 'home'),

            array('pe-7s-magic-wand' => 'home'),

            array('pe-7s-male' => 'home'),

            array('pe-7s-map-2' => 'home'),

            array('pe-7s-next-2' => 'home'),

            array('pe-7s-paint-bucket' => 'home'),

            array('pe-7s-pendrive' => 'home'),

            array('pe-7s-photo' => 'home'),

            array('pe-7s-piggy' => 'home'),

            array('pe-7s-plugin' => 'home'),

            array('pe-7s-refresh-2' => 'home'),

            array('pe-7s-rocket' => 'home'),

            array('pe-7s-settings' => 'home'),

            array('pe-7s-shield' => 'home'),

            array('pe-7s-smile' => 'home'),

            array('pe-7s-usb' => 'home'),

            array('pe-7s-vector' => 'home'),

            array('pe-7s-wine' => 'home'),

            array('pe-7s-cloud-upload' => 'home'),

            array('pe-7s-cash' => 'home'),

            array('pe-7s-close' => 'home'),

            array('pe-7s-bluetooth' => 'home'),

            array('pe-7s-cloud-download' => 'home'),

            array('pe-7s-way' => 'home'),

            array('pe-7s-close-circle' => 'home'),

            array('pe-7s-id' => 'home'),

            array('pe-7s-angle-up' => 'home'),

            array('pe-7s-wristwatch' => 'home'),

            array('pe-7s-angle-up-circle' => 'home'),

            array('pe-7s-world' => 'home'),

            array('pe-7s-angle-right' => 'home'),

            array('pe-7s-volume' => 'home'),

            array('pe-7s-angle-right-circle' => 'home'),

            array('pe-7s-users' => 'home'),

            array('pe-7s-angle-left' => 'home'),

            array('pe-7s-user-female' => 'home'),

            array('pe-7s-angle-left-circle' => 'home'),

            array('pe-7s-up-arrow' => 'home'),

            array('pe-7s-angle-down' => 'home'),

            array('pe-7s-switch' => 'home'),

            array('pe-7s-angle-down-circle' => 'home'),

            array('pe-7s-scissors' => 'home'),

            array('pe-7s-wallet' => 'home'),

            array('pe-7s-safe' => 'home'),

            array('pe-7s-volume2' => 'home'),

            array('pe-7s-volume1' => 'home'),

            array('pe-7s-voicemail' => 'home'),

            array('pe-7s-video' => 'home'),

            array('pe-7s-user' => 'home'),

            array('pe-7s-upload' => 'home'),

            array('pe-7s-unlock' => 'home'),

            array('pe-7s-umbrella' => 'home'),

            array('pe-7s-trash' => 'home'),

            array('pe-7s-tools' => 'home'),

            array('pe-7s-timer' => 'home'),

            array('pe-7s-ticket' => 'home'),

            array('pe-7s-target' => 'home'),

            array('pe-7s-sun' => 'home'),

            array('pe-7s-study' => 'home'),

            array('pe-7s-stopwatch' => 'home'),

            array('pe-7s-star' => 'home'),

            array('pe-7s-speaker' => 'home'),

            array('pe-7s-signal' => 'home'),

            array('pe-7s-shuffle' => 'home'),

            array('pe-7s-shopbag' => 'home'),

            array('pe-7s-share' => 'home'),

            array('pe-7s-server' => 'home'),

            array('pe-7s-search' => 'home'),

            array('pe-7s-film' => 'home'),

            array('pe-7s-science' => 'home'),

            array('pe-7s-disk' => 'home'),

            array('pe-7s-ribbon' => 'home'),

            array('pe-7s-repeat' => 'home'),

            array('pe-7s-refresh' => 'home'),

            array('pe-7s-add-user' => 'home'),

            array('pe-7s-refresh-cloud' => 'home'),

            array('pe-7s-paperclip' => 'home'),

            array('pe-7s-radio' => 'home'),

            array('pe-7s-note2' => 'home'),

            array('pe-7s-print' => 'home'),

            array('pe-7s-network' => 'home'),

            array('pe-7s-prev' => 'home'),

            array('pe-7s-mute' => 'home'),

            array('pe-7s-power' => 'home'),

            array('pe-7s-medal' => 'home'),

            array('pe-7s-portfolio' => 'home'),

            array('pe-7s-like2' => 'home'),

            array('pe-7s-plus' => 'home'),

            array('pe-7s-left-arrow' => 'home'),

            array('pe-7s-play' => 'home'),

            array('pe-7s-key' => 'home'),

            array('pe-7s-plane' => 'home'),

            array('pe-7s-joy' => 'home'),

            array('pe-7s-photo-gallery' => 'home'),

            array('pe-7s-pin' => 'home'),

            array('pe-7s-phone' => 'phone'),

            array('pe-7s-plug' => 'home'),

            array('pe-7s-pen' => 'home'),

            array('pe-7s-right-arrow' => 'home'),

            array('pe-7s-paper-plane' => 'home'),

            array('pe-7s-delete-user' => 'home'),

            array('pe-7s-paint' => 'home'),

            array('pe-7s-bottom-arrow' => 'home'),

            array('pe-7s-notebook' => 'home'),

            array('pe-7s-note' => 'home'),

            array('pe-7s-next' => 'home'),

            array('pe-7s-news-paper' => 'home'),

            array('pe-7s-musiclist' => 'home'),

            array('pe-7s-music' => 'home'),

            array('pe-7s-mouse' => 'home'),

            array('pe-7s-more' => 'home'),

            array('pe-7s-moon' => 'home'),

            array('pe-7s-monitor' => 'home'),

            array('pe-7s-micro' => 'home'),

            array('pe-7s-menu' => 'home'),

            array('pe-7s-map' => 'home'),

            array('pe-7s-map-marker' => 'home'),

            array('pe-7s-mail' => 'home'),

            array('pe-7s-mail-open' => 'home'),

            array('pe-7s-mail-open-file' => 'home'),

            array('pe-7s-magnet' => 'home'),

            array('pe-7s-loop' => 'home'),

            array('pe-7s-look' => 'home'),

            array('pe-7s-lock' => 'home'),

            array('pe-7s-lintern' => 'home'),

            array('pe-7s-link' => 'home'),

            array('pe-7s-like' => 'home'),

            array('pe-7s-light' => 'home'),

            array('pe-7s-less' => 'home'),

            array('pe-7s-keypad' => 'home'),

            array('pe-7s-junk' => 'home'),

            array('pe-7s-info' => 'home'),

            array('pe-7s-home' => 'home'),

            array('pe-7s-help2' => 'home'),

            array('pe-7s-help1' => 'home'),

            array('pe-7s-graph3' => 'home'),

            array('pe-7s-graph2' => 'home'),

            array('pe-7s-graph1' => 'home'),

            array('pe-7s-graph' => 'home'),

            array('pe-7s-global' => 'home'),

            array('pe-7s-gleam' => 'home'),

            array('pe-7s-glasses' => 'home'),

            array('pe-7s-gift' => 'home'),

            array('pe-7s-folder' => 'home'),

            array('pe-7s-flag' => 'home'),

            array('pe-7s-filter' => 'home'),

            array('pe-7s-file' => 'home'),

            array('pe-7s-expand1' => 'home'),

            array('pe-7s-exapnd2' => 'home'),

            array('pe-7s-edit' => 'home'),

            array('pe-7s-drop' => 'home'),

            array('pe-7s-drawer' => 'home'),

            array('pe-7s-download' => 'home'),

            array('pe-7s-display2' => 'home'),

            array('pe-7s-display1' => 'home'),

            array('pe-7s-diskette' => 'home'),

            array('pe-7s-date' => 'home'),

            array('pe-7s-cup' => 'home'),

            array('pe-7s-culture' => 'home'),

            array('pe-7s-crop' => 'home'),

            array('pe-7s-credit' => 'home'),

            array('pe-7s-copy-file' => 'home'),

            array('pe-7s-config' => 'home'),

            array('pe-7s-compass' => 'home'),

            array('pe-7s-comment' => 'home'),

            array('pe-7s-coffee' => 'home'),

            array('pe-7s-cloud' => 'home'),

            array('pe-7s-clock' => 'home'),

            array('pe-7s-check' => 'home'),

            array('pe-7s-chat' => 'home'),

            array('pe-7s-cart' => 'home'),

            array('pe-7s-camera' => 'home'),

            array('pe-7s-call' => 'home'),

            array('pe-7s-calculator' => 'home'),

            array('pe-7s-browser' => 'home'),

            array('pe-7s-box2' => 'home'),

            array('pe-7s-box1' => 'home'),

            array('pe-7s-bookmarks' => 'home'),

            array('pe-7s-bicycle' => 'home'),

            array('pe-7s-bell' => 'home'),

            array('pe-7s-battery' => 'home'),

            array('pe-7s-ball' => 'home'),

            array('pe-7s-back' => 'home'),

            array('pe-7s-attention' => 'home'),

            array('pe-7s-anchor' => 'home'),

            array('pe-7s-albums' => 'home'),

            array('pe-7s-alarm' => 'home'),

            array('pe-7s-airplay' => 'home'),

        );

        return array_merge($icons, $stroke_icons);
    }
    //End stroke

	add_filter('vc_iconpicker-type-linearicons', 'vc_iconpicker_type_linearicons');

	function vc_iconpicker_type_linearicons($icons)
	{
		$linearicons_icons = array(
			array(
				'lnr lnr-home' => 'home'
			),
			array(
				'lnr lnr-apartment' => 'apartment'
			),
			array(
				'lnr lnr-pencil' => 'pencil'
			),
			array(
				'lnr lnr-magic-wand' => 'magic-wand'
			),
			array(
				'lnr lnr-drop' => 'drop'
			),
			array(
				'lnr lnr-lighter' => 'lighter'
			),
			array(
				'lnr lnr-poop' => 'poop'
			),
			array(
				'lnr lnr-sun' => 'sun'
			),
			array(
				'lnr lnr-moon' => 'moon'
			),
			array(
				'lnr lnr-cloud' => 'cloud'
			),
			array(
				'lnr lnr-cloud-upload' => 'cloud-upload'
			),
			array(
				'lnr lnr-cloud-download' => 'cloud-download'
			),
			array(
				'lnr lnr-cloud-sync' => 'cloud-sync'
			),
			array(
				'lnr lnr-cloud-check' => 'cloud-check'
			),
			array(
				'lnr lnr-database' => 'database'
			),
			array(
				'lnr lnr-lock' => 'lock'
			),
			array(
				'lnr lnr-cog' => 'cog'
			),
			array(
				'lnr lnr-trash' => 'trash'
			),
			array(
				'lnr lnr-dice' => 'dice'
			),
			array(
				'lnr lnr-heart' => 'heart'
			),
			array(
				'lnr lnr-star' => 'star'
			),
			array(
				'lnr lnr-star-half' => 'star-half'
			),
			array(
				'lnr lnr-star-empty' => 'star-empty'
			),
			array(
				'lnr lnr-flag' => 'flag'
			),
			array(
				'lnr lnr-envelope' => 'envelope'
			),
			array(
				'lnr lnr-paperclip' => 'paperclip'
			),
			array(
				'lnr lnr-inbox' => 'inbox'
			),
			array(
				'lnr lnr-eye' => 'eye'
			),
			array(
				'lnr lnr-printer' => 'printer'
			),
			array(
				'lnr lnr-file-empty' => 'file-empty'
			),
			array(
				'lnr lnr-file-add' => 'file-add'
			),
			array(
				'lnr lnr-enter' => 'enter'
			),
			array(
				'lnr lnr-exit' => 'exit'
			),
			array(
				'lnr lnr-graduation-hat' => 'graduation-hat'
			),
			array(
				'lnr lnr-license' => 'license'
			),
			array(
				'lnr lnr-music-note' => 'music-note'
			),
			array(
				'lnr lnr-film-play' => 'film-play'
			),
			array(
				'lnr lnr-camera-video' => 'camera-video'
			),
			array(
				'lnr lnr-camera' => 'camera'
			),
			array(
				'lnr lnr-picture' => 'picture'
			),
			array(
				'lnr lnr-book' => 'book'
			),
			array(
				'lnr lnr-bookmark' => 'bookmark'
			),
			array(
				'lnr lnr-user' => 'user'
			),
			array(
				'lnr lnr-users' => 'users'
			),
			array(
				'lnr lnr-shirt' => 'shirt'
			),
			array(
				'lnr lnr-store' => 'store'
			),
			array(
				'lnr lnr-cart' => 'cart'
			),
			array(
				'lnr lnr-tag' => 'tag'
			),
			array(
				'lnr lnr-phone-handset' => 'phone-handset'
			),
			array(
				'lnr lnr-phone' => 'phone'
			),
			array(
				'lnr lnr-pushpin' => 'pushpin'
			),
			array(
				'lnr lnr-map-marker' => 'map-marker'
			),
			array(
				'lnr lnr-map' => 'map'
			),
			array(
				'lnr lnr-location' => 'location'
			),
			array(
				'lnr lnr-calendar-full' => 'calendar-full'
			),
			array(
				'lnr lnr-keyboard' => 'keyboard'
			),
			array(
				'lnr lnr-spell-check' => 'spell-check'
			),
			array(
				'lnr lnr-screen' => 'screen'
			),
			array(
				'lnr lnr-smartphone' => 'smartphone'
			),
			array(
				'lnr lnr-tablet' => 'tablet'
			),
			array(
				'lnr lnr-laptop' => 'laptop'
			),
			array(
				'lnr lnr-laptop-phone' => 'laptop-phone'
			),
			array(
				'lnr lnr-power-switch' => 'power-switch'
			),
			array(
				'lnr lnr-bubble' => 'bubble'
			),
			array(
				'lnr lnr-heart-pulse' => 'heart-pulse'
			),
			array(
				'lnr lnr-construction' => 'construction'
			),
			array(
				'lnr lnr-pie-chart' => 'pie-chart'
			),
			array(
				'lnr lnr-chart-bars' => 'chart-bars'
			),
			array(
				'lnr lnr-gift' => 'gift'
			),
			array(
				'lnr lnr-diamond' => 'diamond'
			),
			array(
				'lnr lnr-linearicons' => 'linearicons'
			),
			array(
				'lnr lnr-dinner' => 'dinner'
			),
			array(
				'lnr lnr-coffee-cup' => 'coffee-cup'
			),
			array(
				'lnr lnr-leaf' => 'leaf'
			),
			array(
				'lnr lnr-paw' => 'paw'
			),
			array(
				'lnr lnr-rocket' => 'rocket'
			),
			array(
				'lnr lnr-briefcase' => 'briefcase'
			),
			array(
				'lnr lnr-bus' => 'bus'
			),
			array(
				'lnr lnr-car' => 'car'
			),
			array(
				'lnr lnr-train' => 'train'
			),
			array(
				'lnr lnr-bicycle' => 'bicycle'
			),
			array(
				'lnr lnr-wheelchair' => 'wheelchair'
			),
			array(
				'lnr lnr-select' => 'select'
			),
			array(
				'lnr lnr-earth' => 'earth'
			),
			array(
				'lnr lnr-smile' => 'smile'
			),
			array(
				'lnr lnr-sad' => 'sad'
			),
			array(
				'lnr lnr-neutral' => 'neutral'
			),
			array(
				'lnr lnr-mustache' => 'mustache'
			),
			array(
				'lnr lnr-alarm' => 'alarm'
			),
			array(
				'lnr lnr-bullhorn' => 'bullhorn'
			),
			array(
				'lnr lnr-volume-high' => 'volume-high'
			),
			array(
				'lnr lnr-volume-medium' => 'volume-medium'
			),
			array(
				'lnr lnr-volume-low' => 'volume-low'
			),
			array(
				'lnr lnr-volume' => 'volume'
			),
			array(
				'lnr lnr-mic' => 'mic'
			),
			array(
				'lnr lnr-hourglass' => 'hourglass'
			),
			array(
				'lnr lnr-undo' => 'undo'
			),
			array(
				'lnr lnr-redo' => 'redo'
			),
			array(
				'lnr lnr-sync' => 'sync'
			),
			array(
				'lnr lnr-history' => 'history'
			),
			array(
				'lnr lnr-clock' => 'clock'
			),
			array(
				'lnr lnr-download' => 'download'
			),
			array(
				'lnr lnr-upload' => 'upload'
			),
			array(
				'lnr lnr-enter-down' => 'enter-down'
			),
			array(
				'lnr lnr-exit-up' => 'exit-up'
			),
			array(
				'lnr lnr-bug' => 'bug'
			),
			array(
				'lnr lnr-code' => 'code'
			),
			array(
				'lnr lnr-link' => 'link'
			),
			array(
				'lnr lnr-unlink' => 'unlink'
			),
			array(
				'lnr lnr-thumbs-up' => 'thumbs-up'
			),
			array(
				'lnr lnr-thumbs-down' => 'thumbs-down'
			),
			array(
				'lnr lnr-magnifier' => 'magnifier'
			),
			array(
				'lnr lnr-cross' => 'cross'
			),
			array(
				'lnr lnr-menu' => 'menu'
			),
			array(
				'lnr lnr-list' => 'list'
			),
			array(
				'lnr lnr-chevron-up' => 'chevron-up'
			),
			array(
				'lnr lnr-chevron-down' => 'chevron-down'
			),
			array(
				'lnr lnr-chevron-left' => 'chevron-left'
			),
			array(
				'lnr lnr-chevron-right' => 'chevron-right'
			),
			array(
				'lnr lnr-arrow-up' => 'arrow-up'
			),
			array(
				'lnr lnr-arrow-down' => 'arrow-down'
			),
			array(
				'lnr lnr-arrow-left' => 'arrow-left'
			),
			array(
				'lnr lnr-arrow-right' => 'arrow-right'
			),
			array(
				'lnr lnr-move' => 'move'
			),
			array(
				'lnr lnr-warning' => 'warning'
			),
			array(
				'lnr lnr-question-circle' => 'question-circle'
			),
			array(
				'lnr lnr-menu-circle' => 'menu-circle'
			),
			array(
				'lnr lnr-checkmark-circle' => 'checkmark-circle'
			),
			array(
				'lnr lnr-cross-circle' => 'cross-circle'
			),
			array(
				'lnr lnr-plus-circle' => 'plus-circle'
			),
			array(
				'lnr lnr-circle-minus' => 'circle-minus'
			),
			array(
				'lnr lnr-arrow-up-circle' => 'arrow-up-circle'
			),
			array(
				'lnr lnr-arrow-down-circle' => 'arrow-down-circle'
			),
			array(
				'lnr lnr-arrow-left-circle' => 'arrow-left-circle'
			),
			array(
				'lnr lnr-arrow-right-circle' => 'arrow-right-circle'
			),
			array(
				'lnr lnr-chevron-up-circle' => 'chevron-up-circle'
			),
			array(
				'lnr lnr-chevron-down-circle' => 'chevron-down-circle'
			),
			array(
				'lnr lnr-chevron-left-circle' => 'chevron-left-circle'
			),
			array(
				'lnr lnr-chevron-right-circle' => 'chevron-right-circle'
			),
			array(
				'lnr lnr-crop' => 'crop'
			),
			array(
				'lnr lnr-frame-expand' => 'frame-expand'
			),
			array(
				'lnr lnr-frame-contract' => 'frame-contract'
			),
			array(
				'lnr lnr-layers' => 'layers'
			),
			array(
				'lnr lnr-funnel' => 'funnel'
			),
			array(
				'lnr lnr-text-format' => 'text-format'
			),
			array(
				'lnr lnr-text-format-remove' => 'text-format-remove'
			),
			array(
				'lnr lnr-text-size' => 'text-size'
			),
			array(
				'lnr lnr-bold' => 'bold'
			),
			array(
				'lnr lnr-italic' => 'italic'
			),
			array(
				'lnr lnr-underline' => 'underline'
			),
			array(
				'lnr lnr-strikethrough' => 'strikethrough'
			),
			array(
				'lnr lnr-highlight' => 'highlight'
			),
			array(
				'lnr lnr-text-align-left' => 'text-align-left'
			),
			array(
				'lnr lnr-text-align-center' => 'text-align-center'
			),
			array(
				'lnr lnr-text-align-right' => 'text-align-right'
			),
			array(
				'lnr lnr-text-align-justify' => 'text-align-justify'
			),
			array(
				'lnr lnr-line-spacing' => 'line-spacing'
			),
			array(
				'lnr lnr-indent-increase' => 'indent-increase'
			),
			array(
				'lnr lnr-indent-decrease' => 'indent-decrease'
			),
			array(
				'lnr lnr-pilcrow' => 'pilcrow'
			),
			array(
				'lnr lnr-direction-ltr' => 'direction-ltr'
			),
			array(
				'lnr lnr-direction-rtl' => 'direction-rtl'
			),
			array(
				'lnr lnr-page-break' => 'page-break'
			),
			array(
				'lnr lnr-sort-alpha-asc' => 'sort-alpha-asc'
			),
			array(
				'lnr lnr-sort-amount-asc' => 'sort-amount-asc'
			),
			array(
				'lnr lnr-hand' => 'hand'
			),
			array(
				'lnr lnr-pointer-up' => 'pointer-up'
			),
			array(
				'lnr lnr-pointer-right' => 'pointer-right'
			),
			array(
				'lnr lnr-pointer-down' => 'pointer-down'
			),
			array(
				'lnr lnr-pointer-left' => 'pointer-left'
			)
		);
		
		return array_merge($icons, $linearicons_icons);
		
	}


	add_filter('vc_iconpicker-type-iconmoon', 'vc_iconpicker_type_iconmoon');

	function vc_iconpicker_type_iconmoon($icons)
	{
		$iconmoon_icons = array(
			array(
				'icnm icnm-home' => 'home'
			),
			array(
				'icnm icnm-home2' => 'home2'
			),
			array(
				'icnm icnm-home3' => 'home3'
			),
			array(
				'icnm icnm-office' => 'office'
			),
			array(
				'icnm icnm-newspaper' => 'newspaper'
			),
			array(
				'icnm icnm-pencil' => 'pencil'
			),
			array(
				'icnm icnm-pencil2' => 'pencil2'
			),
			array(
				'icnm icnm-quill' => 'quill'
			),
			array(
				'icnm icnm-pen' => 'pen'
			),
			array(
				'icnm icnm-blog' => 'blog'
			),
			array(
				'icnm icnm-eyedropper' => 'eyedropper'
			),
			array(
				'icnm icnm-droplet' => 'droplet'
			),
			array(
				'icnm icnm-paint-format' => 'paint-format'
			),
			array(
				'icnm icnm-image' => 'image'
			),
			array(
				'icnm icnm-images' => 'images'
			),
			array(
				'icnm icnm-camera' => 'camera'
			),
			array(
				'icnm icnm-headphones' => 'headphones'
			),
			array(
				'icnm icnm-music' => 'music'
			),
			array(
				'icnm icnm-play' => 'play'
			),
			array(
				'icnm icnm-film' => 'film'
			),
			array(
				'icnm icnm-video-camera' => 'video-camera'
			),
			array(
				'icnm icnm-dice' => 'dice'
			),
			array(
				'icnm icnm-pacman' => 'pacman'
			),
			array(
				'icnm icnm-spades' => 'spades'
			),
			array(
				'icnm icnm-clubs' => 'clubs'
			),
			array(
				'icnm icnm-diamonds' => 'diamonds'
			),
			array(
				'icnm icnm-bullhorn' => 'bullhorn'
			),
			array(
				'icnm icnm-connection' => 'connection'
			),
			array(
				'icnm icnm-podcast' => 'podcast'
			),
			array(
				'icnm icnm-feed' => 'feed'
			),
			array(
				'icnm icnm-mic' => 'mic'
			),
			array(
				'icnm icnm-book' => 'book'
			),
			array(
				'icnm icnm-books' => 'books'
			),
			array(
				'icnm icnm-library' => 'library'
			),
			array(
				'icnm icnm-file-text' => 'file-text'
			),
			array(
				'icnm icnm-profile' => 'profile'
			),
			array(
				'icnm icnm-file-empty' => 'file-empty'
			),
			array(
				'icnm icnm-files-empty' => 'files-empty'
			),
			array(
				'icnm icnm-file-text2' => 'file-text2'
			),
			array(
				'icnm icnm-file-picture' => 'file-picture'
			),
			array(
				'icnm icnm-file-music' => 'file-music'
			),
			array(
				'icnm icnm-file-play' => 'file-play'
			),
			array(
				'icnm icnm-file-video' => 'file-video'
			),
			array(
				'icnm icnm-file-zip' => 'file-zip'
			),
			array(
				'icnm icnm-copy' => 'copy'
			),
			array(
				'icnm icnm-paste' => 'paste'
			),
			array(
				'icnm icnm-stack' => 'stack'
			),
			array(
				'icnm icnm-folder' => 'folder'
			),
			array(
				'icnm icnm-folder-open' => 'folder-open'
			),
			array(
				'icnm icnm-folder-plus' => 'folder-plus'
			),
			array(
				'icnm icnm-folder-minus' => 'folder-minus'
			),
			array(
				'icnm icnm-folder-download' => 'folder-download'
			),
			array(
				'icnm icnm-folder-upload' => 'folder-upload'
			),
			array(
				'icnm icnm-price-tag' => 'price-tag'
			),
			array(
				'icnm icnm-price-tags' => 'price-tags'
			),
			array(
				'icnm icnm-barcode' => 'barcode'
			),
			array(
				'icnm icnm-qrcode' => 'qrcode'
			),
			array(
				'icnm icnm-ticket' => 'ticket'
			),
			array(
				'icnm icnm-cart' => 'cart'
			),
			array(
				'icnm icnm-coin-dollar' => 'coin-dollar'
			),
			array(
				'icnm icnm-coin-euro' => 'coin-euro'
			),
			array(
				'icnm icnm-coin-pound' => 'coin-pound'
			),
			array(
				'icnm icnm-coin-yen' => 'coin-yen'
			),
			array(
				'icnm icnm-credit-card' => 'credit-card'
			),
			array(
				'icnm icnm-calculator' => 'calculator'
			),
			array(
				'icnm icnm-lifebuoy' => 'lifebuoy'
			),
			array(
				'icnm icnm-phone' => 'phone'
			),
			array(
				'icnm icnm-phone-hang-up' => 'phone-hang-up'
			),
			array(
				'icnm icnm-address-book' => 'address-book'
			),
			array(
				'icnm icnm-envelop' => 'envelop'
			),
			array(
				'icnm icnm-pushpin' => 'pushpin'
			),
			array(
				'icnm icnm-location' => 'location'
			),
			array(
				'icnm icnm-location2' => 'location2'
			),
			array(
				'icnm icnm-compass' => 'compass'
			),
			array(
				'icnm icnm-compass2' => 'compass2'
			),
			array(
				'icnm icnm-map' => 'map'
			),
			array(
				'icnm icnm-map2' => 'map2'
			),
			array(
				'icnm icnm-history' => 'history'
			),
			array(
				'icnm icnm-clock' => 'clock'
			),
			array(
				'icnm icnm-clock2' => 'clock2'
			),
			array(
				'icnm icnm-alarm' => 'alarm'
			),
			array(
				'icnm icnm-bell' => 'bell'
			),
			array(
				'icnm icnm-stopwatch' => 'stopwatch'
			),
			array(
				'icnm icnm-calendar' => 'calendar'
			),
			array(
				'icnm icnm-printer' => 'printer'
			),
			array(
				'icnm icnm-keyboard' => 'keyboard'
			),
			array(
				'icnm icnm-display' => 'display'
			),
			array(
				'icnm icnm-laptop' => 'laptop'
			),
			array(
				'icnm icnm-mobile' => 'mobile'
			),
			array(
				'icnm icnm-mobile2' => 'mobile2'
			),
			array(
				'icnm icnm-tablet' => 'tablet'
			),
			array(
				'icnm icnm-tv' => 'tv'
			),
			array(
				'icnm icnm-drawer' => 'drawer'
			),
			array(
				'icnm icnm-drawer2' => 'drawer2'
			),
			array(
				'icnm icnm-box-add' => 'box-add'
			),
			array(
				'icnm icnm-box-remove' => 'box-remove'
			),
			array(
				'icnm icnm-download' => 'download'
			),
			array(
				'icnm icnm-upload' => 'upload'
			),
			array(
				'icnm icnm-floppy-disk' => 'floppy-disk'
			),
			array(
				'icnm icnm-drive' => 'drive'
			),
			array(
				'icnm icnm-database' => 'database'
			),
			array(
				'icnm icnm-undo' => 'undo'
			),
			array(
				'icnm icnm-redo' => 'redo'
			),
			array(
				'icnm icnm-undo2' => 'undo2'
			),
			array(
				'icnm icnm-redo2' => 'redo2'
			),
			array(
				'icnm icnm-forward' => 'forward'
			),
			array(
				'icnm icnm-reply' => 'reply'
			),
			array(
				'icnm icnm-bubble' => 'bubble'
			),
			array(
				'icnm icnm-bubbles' => 'bubbles'
			),
			array(
				'icnm icnm-bubbles2' => 'bubbles2'
			),
			array(
				'icnm icnm-bubble2' => 'bubble2'
			),
			array(
				'icnm icnm-bubbles3' => 'bubbles3'
			),
			array(
				'icnm icnm-bubbles4' => 'bubbles4'
			),
			array(
				'icnm icnm-user' => 'user'
			),
			array(
				'icnm icnm-users' => 'users'
			),
			array(
				'icnm icnm-user-plus' => 'user-plus'
			),
			array(
				'icnm icnm-user-minus' => 'user-minus'
			),
			array(
				'icnm icnm-user-check' => 'user-check'
			),
			array(
				'icnm icnm-user-tie' => 'user-tie'
			),
			array(
				'icnm icnm-quotes-left' => 'quotes-left'
			),
			array(
				'icnm icnm-quotes-right' => 'quotes-right'
			),
			array(
				'icnm icnm-hour-glass' => 'hour-glass'
			),
			array(
				'icnm icnm-spinner' => 'spinner'
			),
			array(
				'icnm icnm-spinner2' => 'spinner2'
			),
			array(
				'icnm icnm-spinner3' => 'spinner3'
			),
			array(
				'icnm icnm-spinner4' => 'spinner4'
			),
			array(
				'icnm icnm-spinner5' => 'spinner5'
			),
			array(
				'icnm icnm-spinner6' => 'spinner6'
			),
			array(
				'icnm icnm-spinner7' => 'spinner7'
			),
			array(
				'icnm icnm-spinner8' => 'spinner8'
			),
			array(
				'icnm icnm-spinner9' => 'spinner9'
			),
			array(
				'icnm icnm-spinner10' => 'spinner10'
			),
			array(
				'icnm icnm-spinner11' => 'spinner11'
			),
			array(
				'icnm icnm-binoculars' => 'binoculars'
			),
			array(
				'icnm icnm-search' => 'search'
			),
			array(
				'icnm icnm-zoom-in' => 'zoom-in'
			),
			array(
				'icnm icnm-zoom-out' => 'zoom-out'
			),
			array(
				'icnm icnm-enlarge' => 'enlarge'
			),
			array(
				'icnm icnm-shrink' => 'shrink'
			),
			array(
				'icnm icnm-enlarge2' => 'enlarge2'
			),
			array(
				'icnm icnm-shrink2' => 'shrink2'
			),
			array(
				'icnm icnm-key' => 'key'
			),
			array(
				'icnm icnm-key2' => 'key2'
			),
			array(
				'icnm icnm-lock' => 'lock'
			),
			array(
				'icnm icnm-unlocked' => 'unlocked'
			),
			array(
				'icnm icnm-wrench' => 'wrench'
			),
			array(
				'icnm icnm-equalizer' => 'equalizer'
			),
			array(
				'icnm icnm-equalizer2' => 'equalizer2'
			),
			array(
				'icnm icnm-cog' => 'cog'
			),
			array(
				'icnm icnm-cogs' => 'cogs'
			),
			array(
				'icnm icnm-hammer' => 'hammer'
			),
			array(
				'icnm icnm-magic-wand' => 'magic-wand'
			),
			array(
				'icnm icnm-aid-kit' => 'aid-kit'
			),
			array(
				'icnm icnm-bug' => 'bug'
			),
			array(
				'icnm icnm-pie-chart' => 'pie-chart'
			),
			array(
				'icnm icnm-stats-dots' => 'stats-dots'
			),
			array(
				'icnm icnm-stats-bars' => 'stats-bars'
			),
			array(
				'icnm icnm-stats-bars2' => 'stats-bars2'
			),
			array(
				'icnm icnm-trophy' => 'trophy'
			),
			array(
				'icnm icnm-gift' => 'gift'
			),
			array(
				'icnm icnm-glass' => 'glass'
			),
			array(
				'icnm icnm-glass2' => 'glass2'
			),
			array(
				'icnm icnm-mug' => 'mug'
			),
			array(
				'icnm icnm-spoon-knife' => 'spoon-knife'
			),
			array(
				'icnm icnm-leaf' => 'leaf'
			),
			array(
				'icnm icnm-rocket' => 'rocket'
			),
			array(
				'icnm icnm-meter' => 'meter'
			),
			array(
				'icnm icnm-meter2' => 'meter2'
			),
			array(
				'icnm icnm-hammer2' => 'hammer2'
			),
			array(
				'icnm icnm-fire' => 'fire'
			),
			array(
				'icnm icnm-lab' => 'lab'
			),
			array(
				'icnm icnm-magnet' => 'magnet'
			),
			array(
				'icnm icnm-bin' => 'bin'
			),
			array(
				'icnm icnm-bin2' => 'bin2'
			),
			array(
				'icnm icnm-briefcase' => 'briefcase'
			),
			array(
				'icnm icnm-airplane' => 'airplane'
			),
			array(
				'icnm icnm-truck' => 'truck'
			),
			array(
				'icnm icnm-road' => 'road'
			),
			array(
				'icnm icnm-accessibility' => 'accessibility'
			),
			array(
				'icnm icnm-target' => 'target'
			),
			array(
				'icnm icnm-shield' => 'shield'
			),
			array(
				'icnm icnm-power' => 'power'
			),
			array(
				'icnm icnm-switch' => 'switch'
			),
			array(
				'icnm icnm-power-cord' => 'power-cord'
			),
			array(
				'icnm icnm-clipboard' => 'clipboard'
			),
			array(
				'icnm icnm-list-numbered' => 'list-numbered'
			),
			array(
				'icnm icnm-list' => 'list'
			),
			array(
				'icnm icnm-list2' => 'list2'
			),
			array(
				'icnm icnm-tree' => 'tree'
			),
			array(
				'icnm icnm-menu' => 'menu'
			),
			array(
				'icnm icnm-menu2' => 'menu2'
			),
			array(
				'icnm icnm-menu3' => 'menu3'
			),
			array(
				'icnm icnm-menu4' => 'menu4'
			),
			array(
				'icnm icnm-cloud' => 'cloud'
			),
			array(
				'icnm icnm-cloud-download' => 'cloud-download'
			),
			array(
				'icnm icnm-cloud-upload' => 'cloud-upload'
			),
			array(
				'icnm icnm-cloud-check' => 'cloud-check'
			),
			array(
				'icnm icnm-download2' => 'download2'
			),
			array(
				'icnm icnm-upload2' => 'upload2'
			),
			array(
				'icnm icnm-download3' => 'download3'
			),
			array(
				'icnm icnm-upload3' => 'upload3'
			),
			array(
				'icnm icnm-sphere' => 'sphere'
			),
			array(
				'icnm icnm-earth' => 'earth'
			),
			array(
				'icnm icnm-link' => 'link'
			),
			array(
				'icnm icnm-flag' => 'flag'
			),
			array(
				'icnm icnm-attachment' => 'attachment'
			),
			array(
				'icnm icnm-eye' => 'eye'
			),
			array(
				'icnm icnm-eye-plus' => 'eye-plus'
			),
			array(
				'icnm icnm-eye-minus' => 'eye-minus'
			),
			array(
				'icnm icnm-eye-blocked' => 'eye-blocked'
			),
			array(
				'icnm icnm-bookmark' => 'bookmark'
			),
			array(
				'icnm icnm-bookmarks' => 'bookmarks'
			),
			array(
				'icnm icnm-sun' => 'sun'
			),
			array(
				'icnm icnm-contrast' => 'contrast'
			),
			array(
				'icnm icnm-brightness-contrast' => 'brightness-contrast'
			),
			array(
				'icnm icnm-star-empty' => 'star-empty'
			),
			array(
				'icnm icnm-star-half' => 'star-half'
			),
			array(
				'icnm icnm-star-full' => 'star-full'
			),
			array(
				'icnm icnm-heart' => 'heart'
			),
			array(
				'icnm icnm-heart-broken' => 'heart-broken'
			),
			array(
				'icnm icnm-man' => 'man'
			),
			array(
				'icnm icnm-woman' => 'woman'
			),
			array(
				'icnm icnm-man-woman' => 'man-woman'
			),
			array(
				'icnm icnm-happy' => 'happy'
			),
			array(
				'icnm icnm-happy2' => 'happy2'
			),
			array(
				'icnm icnm-smile' => 'smile'
			),
			array(
				'icnm icnm-smile2' => 'smile2'
			),
			array(
				'icnm icnm-tongue' => 'tongue'
			),
			array(
				'icnm icnm-tongue2' => 'tongue2'
			),
			array(
				'icnm icnm-sad' => 'sad'
			),
			array(
				'icnm icnm-sad2' => 'sad2'
			),
			array(
				'icnm icnm-wink' => 'wink'
			),
			array(
				'icnm icnm-wink2' => 'wink2'
			),
			array(
				'icnm icnm-grin' => 'grin'
			),
			array(
				'icnm icnm-grin2' => 'grin2'
			),
			array(
				'icnm icnm-cool' => 'cool'
			),
			array(
				'icnm icnm-cool2' => 'cool2'
			),
			array(
				'icnm icnm-angry' => 'angry'
			),
			array(
				'icnm icnm-angry2' => 'angry2'
			),
			array(
				'icnm icnm-evil' => 'evil'
			),
			array(
				'icnm icnm-evil2' => 'evil2'
			),
			array(
				'icnm icnm-shocked' => 'shocked'
			),
			array(
				'icnm icnm-shocked2' => 'shocked2'
			),
			array(
				'icnm icnm-baffled' => 'baffled'
			),
			array(
				'icnm icnm-baffled2' => 'baffled2'
			),
			array(
				'icnm icnm-confused' => 'confused'
			),
			array(
				'icnm icnm-confused2' => 'confused2'
			),
			array(
				'icnm icnm-neutral' => 'neutral'
			),
			array(
				'icnm icnm-neutral2' => 'neutral2'
			),
			array(
				'icnm icnm-hipster' => 'hipster'
			),
			array(
				'icnm icnm-hipster2' => 'hipster2'
			),
			array(
				'icnm icnm-wondering' => 'wondering'
			),
			array(
				'icnm icnm-wondering2' => 'wondering2'
			),
			array(
				'icnm icnm-sleepy' => 'sleepy'
			),
			array(
				'icnm icnm-sleepy2' => 'sleepy2'
			),
			array(
				'icnm icnm-frustrated' => 'frustrated'
			),
			array(
				'icnm icnm-frustrated2' => 'frustrated2'
			),
			array(
				'icnm icnm-crying' => 'crying'
			),
			array(
				'icnm icnm-crying2' => 'crying2'
			),
			array(
				'icnm icnm-point-up' => 'point-up'
			),
			array(
				'icnm icnm-point-right' => 'point-right'
			),
			array(
				'icnm icnm-point-down' => 'point-down'
			),
			array(
				'icnm icnm-point-left' => 'point-left'
			),
			array(
				'icnm icnm-warning' => 'warning'
			),
			array(
				'icnm icnm-notification' => 'notification'
			),
			array(
				'icnm icnm-question' => 'question'
			),
			array(
				'icnm icnm-plus' => 'plus'
			),
			array(
				'icnm icnm-minus' => 'minus'
			),
			array(
				'icnm icnm-info' => 'info'
			),
			array(
				'icnm icnm-cancel-circle' => 'cancel-circle'
			),
			array(
				'icnm icnm-blocked' => 'blocked'
			),
			array(
				'icnm icnm-cross' => 'cross'
			),
			array(
				'icnm icnm-checkmark' => 'checkmark'
			),
			array(
				'icnm icnm-checkmark2' => 'checkmark2'
			),
			array(
				'icnm icnm-spell-check' => 'spell-check'
			),
			array(
				'icnm icnm-enter' => 'enter'
			),
			array(
				'icnm icnm-exit' => 'exit'
			),
			array(
				'icnm icnm-play2' => 'play2'
			),
			array(
				'icnm icnm-pause' => 'pause'
			),
			array(
				'icnm icnm-stop' => 'stop'
			),
			array(
				'icnm icnm-previous' => 'previous'
			),
			array(
				'icnm icnm-next' => 'next'
			),
			array(
				'icnm icnm-backward' => 'backward'
			),
			array(
				'icnm icnm-forward2' => 'forward2'
			),
			array(
				'icnm icnm-play3' => 'play3'
			),
			array(
				'icnm icnm-pause2' => 'pause2'
			),
			array(
				'icnm icnm-stop2' => 'stop2'
			),
			array(
				'icnm icnm-backward2' => 'backward2'
			),
			array(
				'icnm icnm-forward3' => 'forward3'
			),
			array(
				'icnm icnm-first' => 'first'
			),
			array(
				'icnm icnm-last' => 'last'
			),
			array(
				'icnm icnm-previous2' => 'previous2'
			),
			array(
				'icnm icnm-next2' => 'next2'
			),
			array(
				'icnm icnm-eject' => 'eject'
			),
			array(
				'icnm icnm-volume-high' => 'volume-high'
			),
			array(
				'icnm icnm-volume-medium' => 'volume-medium'
			),
			array(
				'icnm icnm-volume-low' => 'volume-low'
			),
			array(
				'icnm icnm-volume-mute' => 'volume-mute'
			),
			array(
				'icnm icnm-volume-mute2' => 'volume-mute2'
			),
			array(
				'icnm icnm-volume-increase' => 'volume-increase'
			),
			array(
				'icnm icnm-volume-decrease' => 'volume-decrease'
			),
			array(
				'icnm icnm-loop' => 'loop'
			),
			array(
				'icnm icnm-loop2' => 'loop2'
			),
			array(
				'icnm icnm-infinite' => 'infinite'
			),
			array(
				'icnm icnm-shuffle' => 'shuffle'
			),
			array(
				'icnm icnm-arrow-up-left' => 'arrow-up-left'
			),
			array(
				'icnm icnm-arrow-up' => 'arrow-up'
			),
			array(
				'icnm icnm-arrow-up-right' => 'arrow-up-right'
			),
			array(
				'icnm icnm-arrow-right' => 'arrow-right'
			),
			array(
				'icnm icnm-arrow-down-right' => 'arrow-down-right'
			),
			array(
				'icnm icnm-arrow-down' => 'arrow-down'
			),
			array(
				'icnm icnm-arrow-down-left' => 'arrow-down-left'
			),
			array(
				'icnm icnm-arrow-left' => 'arrow-left'
			),
			array(
				'icnm icnm-arrow-up-left2' => 'arrow-up-left2'
			),
			array(
				'icnm icnm-arrow-up2' => 'arrow-up2'
			),
			array(
				'icnm icnm-arrow-up-right2' => 'arrow-up-right2'
			),
			array(
				'icnm icnm-arrow-right2' => 'arrow-right2'
			),
			array(
				'icnm icnm-arrow-down-right2' => 'arrow-down-right2'
			),
			array(
				'icnm icnm-arrow-down2' => 'arrow-down2'
			),
			array(
				'icnm icnm-arrow-down-left2' => 'arrow-down-left2'
			),
			array(
				'icnm icnm-arrow-left2' => 'arrow-left2'
			),
			array(
				'icnm icnm-circle-up' => 'circle-up'
			),
			array(
				'icnm icnm-circle-right' => 'circle-right'
			),
			array(
				'icnm icnm-circle-down' => 'circle-down'
			),
			array(
				'icnm icnm-circle-left' => 'circle-left'
			),
			array(
				'icnm icnm-tab' => 'tab'
			),
			array(
				'icnm icnm-move-up' => 'move-up'
			),
			array(
				'icnm icnm-move-down' => 'move-down'
			),
			array(
				'icnm icnm-sort-alpha-asc' => 'sort-alpha-asc'
			),
			array(
				'icnm icnm-sort-alpha-desc' => 'sort-alpha-desc'
			),
			array(
				'icnm icnm-sort-numeric-asc' => 'sort-numeric-asc'
			),
			array(
				'icnm icnm-sort-numberic-desc' => 'sort-numberic-desc'
			),
			array(
				'icnm icnm-sort-amount-asc' => 'sort-amount-asc'
			),
			array(
				'icnm icnm-sort-amount-desc' => 'sort-amount-desc'
			),
			array(
				'icnm icnm-command' => 'command'
			),
			array(
				'icnm icnm-shift' => 'shift'
			),
			array(
				'icnm icnm-ctrl' => 'ctrl'
			),
			array(
				'icnm icnm-opt' => 'opt'
			),
			array(
				'icnm icnm-checkbox-checked' => 'checkbox-checked'
			),
			array(
				'icnm icnm-checkbox-unchecked' => 'checkbox-unchecked'
			),
			array(
				'icnm icnm-radio-checked' => 'radio-checked'
			),
			array(
				'icnm icnm-radio-checked2' => 'radio-checked2'
			),
			array(
				'icnm icnm-radio-unchecked' => 'radio-unchecked'
			),
			array(
				'icnm icnm-crop' => 'crop'
			),
			array(
				'icnm icnm-make-group' => 'make-group'
			),
			array(
				'icnm icnm-ungroup' => 'ungroup'
			),
			array(
				'icnm icnm-scissors' => 'scissors'
			),
			array(
				'icnm icnm-filter' => 'filter'
			),
			array(
				'icnm icnm-font' => 'font'
			),
			array(
				'icnm icnm-ligature' => 'ligature'
			),
			array(
				'icnm icnm-ligature2' => 'ligature2'
			),
			array(
				'icnm icnm-text-height' => 'text-height'
			),
			array(
				'icnm icnm-text-width' => 'text-width'
			),
			array(
				'icnm icnm-font-size' => 'font-size'
			),
			array(
				'icnm icnm-bold' => 'bold'
			),
			array(
				'icnm icnm-underline' => 'underline'
			),
			array(
				'icnm icnm-italic' => 'italic'
			),
			array(
				'icnm icnm-strikethrough' => 'strikethrough'
			),
			array(
				'icnm icnm-omega' => 'omega'
			),
			array(
				'icnm icnm-sigma' => 'sigma'
			),
			array(
				'icnm icnm-page-break' => 'page-break'
			),
			array(
				'icnm icnm-superscript' => 'superscript'
			),
			array(
				'icnm icnm-subscript' => 'subscript'
			),
			array(
				'icnm icnm-superscript2' => 'superscript2'
			),
			array(
				'icnm icnm-subscript2' => 'subscript2'
			),
			array(
				'icnm icnm-text-color' => 'text-color'
			),
			array(
				'icnm icnm-pagebreak' => 'pagebreak'
			),
			array(
				'icnm icnm-clear-formatting' => 'clear-formatting'
			),
			array(
				'icnm icnm-table' => 'table'
			),
			array(
				'icnm icnm-table2' => 'table2'
			),
			array(
				'icnm icnm-insert-template' => 'insert-template'
			),
			array(
				'icnm icnm-pilcrow' => 'pilcrow'
			),
			array(
				'icnm icnm-ltr' => 'ltr'
			),
			array(
				'icnm icnm-rtl' => 'rtl'
			),
			array(
				'icnm icnm-section' => 'section'
			),
			array(
				'icnm icnm-paragraph-left' => 'paragraph-left'
			),
			array(
				'icnm icnm-paragraph-center' => 'paragraph-center'
			),
			array(
				'icnm icnm-paragraph-right' => 'paragraph-right'
			),
			array(
				'icnm icnm-paragraph-justify' => 'paragraph-justify'
			),
			array(
				'icnm icnm-indent-increase' => 'indent-increase'
			),
			array(
				'icnm icnm-indent-decrease' => 'indent-decrease'
			),
			array(
				'icnm icnm-share' => 'share'
			),
			array(
				'icnm icnm-new-tab' => 'new-tab'
			),
			array(
				'icnm icnm-embed' => 'embed'
			),
			array(
				'icnm icnm-embed2' => 'embed2'
			),
			array(
				'icnm icnm-terminal' => 'terminal'
			),
			array(
				'icnm icnm-share2' => 'share2'
			),
			array(
				'icnm icnm-mail' => 'mail'
			),
			array(
				'icnm icnm-mail2' => 'mail2'
			),
			array(
				'icnm icnm-mail3' => 'mail3'
			),
			array(
				'icnm icnm-mail4' => 'mail4'
			),
			array(
				'icnm icnm-amazon' => 'amazon'
			),
			array(
				'icnm icnm-google' => 'google'
			),
			array(
				'icnm icnm-google2' => 'google2'
			),
			array(
				'icnm icnm-google3' => 'google3'
			),
			array(
				'icnm icnm-google-plus' => 'google-plus'
			),
			array(
				'icnm icnm-google-plus2' => 'google-plus2'
			),
			array(
				'icnm icnm-google-plus3' => 'google-plus3'
			),
			array(
				'icnm icnm-hangouts' => 'hangouts'
			),
			array(
				'icnm icnm-google-drive' => 'google-drive'
			),
			array(
				'icnm icnm-facebook' => 'facebook'
			),
			array(
				'icnm icnm-facebook2' => 'facebook2'
			),
			array(
				'icnm icnm-instagram' => 'instagram'
			),
			array(
				'icnm icnm-whatsapp' => 'whatsapp'
			),
			array(
				'icnm icnm-spotify' => 'spotify'
			),
			array(
				'icnm icnm-telegram' => 'telegram'
			),
			array(
				'icnm icnm-twitter' => 'twitter'
			),
			array(
				'icnm icnm-vine' => 'vine'
			),
			array(
				'icnm icnm-vk' => 'vk'
			),
			array(
				'icnm icnm-renren' => 'renren'
			),
			array(
				'icnm icnm-sina-weibo' => 'sina-weibo'
			),
			array(
				'icnm icnm-rss' => 'rss'
			),
			array(
				'icnm icnm-rss2' => 'rss2'
			),
			array(
				'icnm icnm-youtube' => 'youtube'
			),
			array(
				'icnm icnm-youtube2' => 'youtube2'
			),
			array(
				'icnm icnm-twitch' => 'twitch'
			),
			array(
				'icnm icnm-vimeo' => 'vimeo'
			),
			array(
				'icnm icnm-vimeo2' => 'vimeo2'
			),
			array(
				'icnm icnm-lanyrd' => 'lanyrd'
			),
			array(
				'icnm icnm-flickr' => 'flickr'
			),
			array(
				'icnm icnm-flickr2' => 'flickr2'
			),
			array(
				'icnm icnm-flickr3' => 'flickr3'
			),
			array(
				'icnm icnm-flickr4' => 'flickr4'
			),
			array(
				'icnm icnm-dribbble' => 'dribbble'
			),
			array(
				'icnm icnm-behance' => 'behance'
			),
			array(
				'icnm icnm-behance2' => 'behance2'
			),
			array(
				'icnm icnm-deviantart' => 'deviantart'
			),
			array(
				'icnm icnm-500px' => '500px'
			),
			array(
				'icnm icnm-steam' => 'steam'
			),
			array(
				'icnm icnm-steam2' => 'steam2'
			),
			array(
				'icnm icnm-dropbox' => 'dropbox'
			),
			array(
				'icnm icnm-onedrive' => 'onedrive'
			),
			array(
				'icnm icnm-github' => 'github'
			),
			array(
				'icnm icnm-npm' => 'npm'
			),
			array(
				'icnm icnm-basecamp' => 'basecamp'
			),
			array(
				'icnm icnm-trello' => 'trello'
			),
			array(
				'icnm icnm-wordpress' => 'wordpress'
			),
			array(
				'icnm icnm-joomla' => 'joomla'
			),
			array(
				'icnm icnm-ello' => 'ello'
			),
			array(
				'icnm icnm-blogger' => 'blogger'
			),
			array(
				'icnm icnm-blogger2' => 'blogger2'
			),
			array(
				'icnm icnm-tumblr' => 'tumblr'
			),
			array(
				'icnm icnm-tumblr2' => 'tumblr2'
			),
			array(
				'icnm icnm-yahoo' => 'yahoo'
			),
			array(
				'icnm icnm-yahoo2' => 'yahoo2'
			),
			array(
				'icnm icnm-tux' => 'tux'
			),
			array(
				'icnm icnm-appleinc' => 'appleinc'
			),
			array(
				'icnm icnm-finder' => 'finder'
			),
			array(
				'icnm icnm-android' => 'android'
			),
			array(
				'icnm icnm-windows' => 'windows'
			),
			array(
				'icnm icnm-windows8' => 'windows8'
			),
			array(
				'icnm icnm-soundcloud' => 'soundcloud'
			),
			array(
				'icnm icnm-soundcloud2' => 'soundcloud2'
			),
			array(
				'icnm icnm-skype' => 'skype'
			),
			array(
				'icnm icnm-reddit' => 'reddit'
			),
			array(
				'icnm icnm-hackernews' => 'hackernews'
			),
			array(
				'icnm icnm-wikipedia' => 'wikipedia'
			),
			array(
				'icnm icnm-linkedin' => 'linkedin'
			),
			array(
				'icnm icnm-linkedin2' => 'linkedin2'
			),
			array(
				'icnm icnm-lastfm' => 'lastfm'
			),
			array(
				'icnm icnm-lastfm2' => 'lastfm2'
			),
			array(
				'icnm icnm-delicious' => 'delicious'
			),
			array(
				'icnm icnm-stumbleupon' => 'stumbleupon'
			),
			array(
				'icnm icnm-stumbleupon2' => 'stumbleupon2'
			),
			array(
				'icnm icnm-stackoverflow' => 'stackoverflow'
			),
			array(
				'icnm icnm-pinterest' => 'pinterest'
			),
			array(
				'icnm icnm-pinterest2' => 'pinterest2'
			),
			array(
				'icnm icnm-xing' => 'xing'
			),
			array(
				'icnm icnm-xing2' => 'xing2'
			),
			array(
				'icnm icnm-flattr' => 'flattr'
			),
			array(
				'icnm icnm-foursquare' => 'foursquare'
			),
			array(
				'icnm icnm-yelp' => 'yelp'
			),
			array(
				'icnm icnm-paypal' => 'paypal'
			),
			array(
				'icnm icnm-chrome' => 'chrome'
			),
			array(
				'icnm icnm-firefox' => 'firefox'
			),
			array(
				'icnm icnm-IE' => 'IE'
			),
			array(
				'icnm icnm-edge' => 'edge'
			),
			array(
				'icnm icnm-safari' => 'safari'
			),
			array(
				'icnm icnm-opera' => 'opera'
			),
			array(
				'icnm icnm-file-pdf' => 'file-pdf'
			),
			array(
				'icnm icnm-file-openoffice' => 'file-openoffice'
			),
			array(
				'icnm icnm-file-word' => 'file-word'
			),
			array(
				'icnm icnm-file-excel' => 'file-excel'
			),
			array(
				'icnm icnm-libreoffice' => 'libreoffice'
			),
			array(
				'icnm icnm-html-five' => 'html-five'
			),
			array(
				'icnm icnm-html-five2' => 'html-five2'
			),
			array(
				'icnm icnm-css3' => 'css3'
			),
			array(
				'icnm icnm-git' => 'git'
			),
			array(
				'icnm icnm-codepen' => 'codepen'
			),
			array(
				'icnm icnm-svg' => 'svg'
			),
			array(
				'icnm icnm-IcoMoon' => 'IcoMoon'
			),
			array(
				'icnm icnm-uni21' => 'uni21'
			),
			array(
				'icnm icnm-uni22' => 'uni22'
			),
			array(
				'icnm icnm-uni23' => 'uni23'
			),
			array(
				'icnm icnm-uni24' => 'uni24'
			),
			array(
				'icnm icnm-uni25' => 'uni25'
			),
			array(
				'icnm icnm-uni26' => 'uni26'
			),
			array(
				'icnm icnm-uni27' => 'uni27'
			),
			array(
				'icnm icnm-uni28' => 'uni28'
			),
			array(
				'icnm icnm-uni29' => 'uni29'
			),
			array(
				'icnm icnm-uni2A' => 'uni2A'
			),
			array(
				'icnm icnm-uni2B' => 'uni2B'
			),
			array(
				'icnm icnm-uni2C' => 'uni2C'
			),
			array(
				'icnm icnm-uni2D' => 'uni2D'
			),
			array(
				'icnm icnm-uni2E' => 'uni2E'
			),
			array(
				'icnm icnm-uni2F' => 'uni2F'
			),
			array(
				'icnm icnm-uni30' => 'uni30'
			),
			array(
				'icnm icnm-uni31' => 'uni31'
			),
			array(
				'icnm icnm-uni32' => 'uni32'
			),
			array(
				'icnm icnm-uni33' => 'uni33'
			),
			array(
				'icnm icnm-uni34' => 'uni34'
			),
			array(
				'icnm icnm-uni35' => 'uni35'
			),
			array(
				'icnm icnm-uni36' => 'uni36'
			),
			array(
				'icnm icnm-uni37' => 'uni37'
			),
			array(
				'icnm icnm-uni38' => 'uni38'
			),
			array(
				'icnm icnm-uni39' => 'uni39'
			),
			array(
				'icnm icnm-uni3A' => 'uni3A'
			),
			array(
				'icnm icnm-uni3B' => 'uni3B'
			),
			array(
				'icnm icnm-uni3C' => 'uni3C'
			),
			array(
				'icnm icnm-uni3D' => 'uni3D'
			),
			array(
				'icnm icnm-uni3E' => 'uni3E'
			),
			array(
				'icnm icnm-uni3F' => 'uni3F'
			),
			array(
				'icnm icnm-uni40' => 'uni40'
			),
			array(
				'icnm icnm-uni41' => 'uni41'
			),
			array(
				'icnm icnm-uni42' => 'uni42'
			),
			array(
				'icnm icnm-uni43' => 'uni43'
			),
			array(
				'icnm icnm-uni44' => 'uni44'
			),
			array(
				'icnm icnm-uni45' => 'uni45'
			),
			array(
				'icnm icnm-uni46' => 'uni46'
			),
			array(
				'icnm icnm-uni47' => 'uni47'
			),
			array(
				'icnm icnm-uni48' => 'uni48'
			),
			array(
				'icnm icnm-uni49' => 'uni49'
			),
			array(
				'icnm icnm-uni4A' => 'uni4A'
			),
			array(
				'icnm icnm-uni4B' => 'uni4B'
			),
			array(
				'icnm icnm-uni4C' => 'uni4C'
			),
			array(
				'icnm icnm-uni4D' => 'uni4D'
			),
			array(
				'icnm icnm-uni4E' => 'uni4E'
			),
			array(
				'icnm icnm-uni4F' => 'uni4F'
			),
			array(
				'icnm icnm-uni50' => 'uni50'
			),
			array(
				'icnm icnm-uni51' => 'uni51'
			),
			array(
				'icnm icnm-uni52' => 'uni52'
			),
			array(
				'icnm icnm-uni53' => 'uni53'
			),
			array(
				'icnm icnm-uni54' => 'uni54'
			),
			array(
				'icnm icnm-uni55' => 'uni55'
			),
			array(
				'icnm icnm-uni56' => 'uni56'
			),
			array(
				'icnm icnm-uni57' => 'uni57'
			),
			array(
				'icnm icnm-uni58' => 'uni58'
			),
			array(
				'icnm icnm-uni59' => 'uni59'
			),
			array(
				'icnm icnm-uni5A' => 'uni5A'
			),
			array(
				'icnm icnm-uni5B' => 'uni5B'
			),
			array(
				'icnm icnm-uni5C' => 'uni5C'
			),
			array(
				'icnm icnm-uni5D' => 'uni5D'
			),
			array(
				'icnm icnm-uni5E' => 'uni5E'
			),
			array(
				'icnm icnm-uni5F' => 'uni5F'
			),
			array(
				'icnm icnm-uni60' => 'uni60'
			),
			array(
				'icnm icnm-uni61' => 'uni61'
			),
			array(
				'icnm icnm-uni62' => 'uni62'
			),
			array(
				'icnm icnm-uni63' => 'uni63'
			),
			array(
				'icnm icnm-uni64' => 'uni64'
			),
			array(
				'icnm icnm-uni65' => 'uni65'
			),
			array(
				'icnm icnm-uni66' => 'uni66'
			),
			array(
				'icnm icnm-uni67' => 'uni67'
			),
			array(
				'icnm icnm-uni68' => 'uni68'
			),
			array(
				'icnm icnm-uni69' => 'uni69'
			),
			array(
				'icnm icnm-uni6A' => 'uni6A'
			),
			array(
				'icnm icnm-uni6B' => 'uni6B'
			),
			array(
				'icnm icnm-uni6C' => 'uni6C'
			),
			array(
				'icnm icnm-uni6D' => 'uni6D'
			),
			array(
				'icnm icnm-uni6E' => 'uni6E'
			),
			array(
				'icnm icnm-uni6F' => 'uni6F'
			),
			array(
				'icnm icnm-uni70' => 'uni70'
			),
			array(
				'icnm icnm-uni71' => 'uni71'
			),
			array(
				'icnm icnm-uni72' => 'uni72'
			),
			array(
				'icnm icnm-uni73' => 'uni73'
			),
			array(
				'icnm icnm-uni74' => 'uni74'
			),
			array(
				'icnm icnm-uni75' => 'uni75'
			),
			array(
				'icnm icnm-uni76' => 'uni76'
			),
			array(
				'icnm icnm-uni77' => 'uni77'
			),
			array(
				'icnm icnm-uni78' => 'uni78'
			),
			array(
				'icnm icnm-uni79' => 'uni79'
			),
			array(
				'icnm icnm-uni7A' => 'uni7A'
			),
			array(
				'icnm icnm-uni7B' => 'uni7B'
			),
			array(
				'icnm icnm-uni7C' => 'uni7C'
			),
			array(
				'icnm icnm-uni7D' => 'uni7D'
			),
			array(
				'icnm icnm-uni7E' => 'uni7E'
			),
			array(
				'icnm icnm-uniA9' => 'uniA9'
			)
		);
		
		return array_merge($icons, $iconmoon_icons);
		
	}


	add_filter('vc_iconpicker-type-etline', 'vc_iconpicker_type_etline');

	function vc_iconpicker_type_etline($icons)
	{
		$etline_icons = array(
			
			array(
				'etl etl-attachment' => 'attachment'
			),
			array(
				'etl etl-bargraph' => 'bargraph'
			),
			array(
				'etl etl-basket' => 'basket'
			),
			array(
				'etl etl-beaker' => 'beaker'
			),
			array(
				'etl etl-bike' => 'bike'
			),
			array(
				'etl etl-book-open' => 'book-open'
			),
			array(
				'etl etl-briefcase' => 'briefcase'
			),
			array(
				'etl etl-browser' => 'browser'
			),
			array(
				'etl etl-calendar' => 'calendar'
			),
			array(
				'etl etl-camera' => 'camera'
			),
			array(
				'etl etl-caution' => 'caution'
			),
			array(
				'etl etl-chat' => 'chat'
			),
			array(
				'etl etl-circle-compass' => 'circle-compass'
			),
			array(
				'etl etl-clipboard' => 'clipboard'
			),
			array(
				'etl etl-clock' => 'clock'
			),
			array(
				'etl etl-cloud' => 'cloud'
			),
			array(
				'etl etl-compass' => 'compass'
			),
			array(
				'etl etl-desktop' => 'desktop'
			),
			array(
				'etl etl-dial' => 'dial'
			),
			array(
				'etl etl-document' => 'document'
			),
			array(
				'etl etl-documents' => 'documents'
			),
			array(
				'etl etl-download' => 'download'
			),
			array(
				'etl etl-dribbble' => 'dribbble'
			),
			array(
				'etl etl-edit' => 'edit'
			),
			array(
				'etl etl-envelope' => 'envelope'
			),
			array(
				'etl etl-expand' => 'expand'
			),
			array(
				'etl etl-facebook' => 'facebook'
			),
			array(
				'etl etl-flag' => 'flag'
			),
			array(
				'etl etl-focus' => 'focus'
			),
			array(
				'etl etl-gears' => 'gears'
			),
			array(
				'etl etl-genius' => 'genius'
			),
			array(
				'etl etl-gift' => 'gift'
			),
			array(
				'etl etl-global' => 'global'
			),
			array(
				'etl etl-globe' => 'globe'
			),
			array(
				'etl etl-googleplus' => 'googleplus'
			),
			array(
				'etl etl-grid' => 'grid'
			),
			array(
				'etl etl-happy' => 'happy'
			),
			array(
				'etl etl-hazardous' => 'hazardous'
			),
			array(
				'etl etl-heart' => 'heart'
			),
			array(
				'etl etl-hotairballoon' => 'hotairballoon'
			),
			array(
				'etl etl-hourglass' => 'hourglass'
			),
			array(
				'etl etl-key' => 'key'
			),
			array(
				'etl etl-laptop' => 'laptop'
			),
			array(
				'etl etl-layers' => 'layers'
			),
			array(
				'etl etl-lifesaver' => 'lifesaver'
			),
			array(
				'etl etl-lightbulb' => 'lightbulb'
			),
			array(
				'etl etl-linegraph' => 'linegraph'
			),
			array(
				'etl etl-linkedin' => 'linkedin'
			),
			array(
				'etl etl-lock' => 'lock'
			),
			array(
				'etl etl-magnifying-glass' => 'magnifying-glass'
			),
			array(
				'etl etl-map' => 'map'
			),
			array(
				'etl etl-map-pin' => 'map-pin'
			),
			array(
				'etl etl-megaphone' => 'megaphone'
			),
			array(
				'etl etl-mic' => 'mic'
			),
			array(
				'etl etl-mobile' => 'mobile'
			),
			array(
				'etl etl-newspaper' => 'newspaper'
			),
			array(
				'etl etl-notebook' => 'notebook'
			),
			array(
				'etl etl-paintbrush' => 'paintbrush'
			),
			array(
				'etl etl-paperclip' => 'paperclip'
			),
			array(
				'etl etl-pencil' => 'pencil'
			),
			array(
				'etl etl-phone' => 'phone'
			),
			array(
				'etl etl-picture' => 'picture'
			),
			array(
				'etl etl-pictures' => 'pictures'
			),
			array(
				'etl etl-piechart' => 'piechart'
			),
			array(
				'etl etl-presentation' => 'presentation'
			),
			array(
				'etl etl-pricetags' => 'pricetags'
			),
			array(
				'etl etl-printer' => 'printer'
			),
			array(
				'etl etl-profile-female' => 'profile-female'
			),
			array(
				'etl etl-profile-male' => 'profile-male'
			),
			array(
				'etl etl-puzzle' => 'puzzle'
			),
			array(
				'etl etl-quote' => 'quote'
			),
			array(
				'etl etl-recycle' => 'recycle'
			),
			array(
				'etl etl-refresh' => 'refresh'
			),
			array(
				'etl etl-ribbon' => 'ribbon'
			),
			array(
				'etl etl-rss' => 'rss'
			),
			array(
				'etl etl-sad' => 'sad'
			),
			array(
				'etl etl-scissors' => 'scissors'
			),
			array(
				'etl etl-scope' => 'scope'
			),
			array(
				'etl etl-search' => 'search'
			),
			array(
				'etl etl-shield' => 'shield'
			),
			array(
				'etl etl-speedometer' => 'speedometer'
			),
			array(
				'etl etl-strategy' => 'strategy'
			),
			array(
				'etl etl-streetsign' => 'streetsign'
			),
			array(
				'etl etl-tablet' => 'tablet'
			),
			array(
				'etl etl-target' => 'target'
			),
			array(
				'etl etl-telescope' => 'telescope'
			),
			array(
				'etl etl-toolbox' => 'toolbox'
			),
			array(
				'etl etl-tools' => 'tools'
			),
			array(
				'etl etl-tools-2' => 'tools-2'
			),
			array(
				'etl etl-trophy' => 'trophy'
			),
			array(
				'etl etl-tumblr' => 'tumblr'
			),
			array(
				'etl etl-twitter' => 'twitter'
			),
			array(
				'etl etl-upload' => 'upload'
			),
			array(
				'etl etl-video' => 'video'
			),
			array(
				'etl etl-wallet' => 'wallet'
			),
			array(
				'etl etl-wine' => 'wine'
			)
		);
		
		return array_merge($icons, $etline_icons);
		
	}


	add_filter('vc_iconpicker-type-elusive', 'vc_iconpicker_type_elusive');

	function vc_iconpicker_type_elusive($icons)
	{
		
		$elusive_icons = array(
			array(
				'el el-address-book-alt' => 'address-book-alt'
			),
			array(
				'el el-address-book' => 'address-book'
			),
			array(
				'el el-adjust-alt' => 'adjust-alt'
			),
			array(
				'el el-adjust' => 'adjust'
			),
			array(
				'el el-adult' => 'adult'
			),
			array(
				'el el-align-center' => 'align-center'
			),
			array(
				'el el-align-justify' => 'align-justify'
			),
			array(
				'el el-align-left' => 'align-left'
			),
			array(
				'el el-align-right' => 'align-right'
			),
			array(
				'el el-arrow-down' => 'arrow-down'
			),
			array(
				'el el-arrow-left' => 'arrow-left'
			),
			array(
				'el el-arrow-right' => 'arrow-right'
			),
			array(
				'el el-arrow-up' => 'arrow-up'
			),
			array(
				'el el-asl' => 'asl'
			),
			array(
				'el el-asterisk' => 'asterisk'
			),
			array(
				'el el-backward' => 'backward'
			),
			array(
				'el el-ban-circle' => 'ban-circle'
			),
			array(
				'el el-barcode' => 'barcode'
			),
			array(
				'el el-behance' => 'behance'
			),
			array(
				'el el-bell' => 'bell'
			),
			array(
				'el el-blind' => 'blind'
			),
			array(
				'el el-blogger' => 'blogger'
			),
			array(
				'el el-bold' => 'bold'
			),
			array(
				'el el-book' => 'book'
			),
			array(
				'el el-bookmark-empty' => 'bookmark-empty'
			),
			array(
				'el el-bookmark' => 'bookmark'
			),
			array(
				'el el-braille' => 'braille'
			),
			array(
				'el el-briefcase' => 'briefcase'
			),
			array(
				'el el-broom' => 'broom'
			),
			array(
				'el el-brush' => 'brush'
			),
			array(
				'el el-bulb' => 'bulb'
			),
			array(
				'el el-bullhorn' => 'bullhorn'
			),
			array(
				'el el-calendar-sign' => 'calendar-sign'
			),
			array(
				'el el-calendar' => 'calendar'
			),
			array(
				'el el-camera' => 'camera'
			),
			array(
				'el el-car' => 'car'
			),
			array(
				'el el-caret-down' => 'caret-down'
			),
			array(
				'el el-caret-left' => 'caret-left'
			),
			array(
				'el el-caret-right' => 'caret-right'
			),
			array(
				'el el-caret-up' => 'caret-up'
			),
			array(
				'el el-cc' => 'cc'
			),
			array(
				'el el-certificate' => 'certificate'
			),
			array(
				'el el-check-empty' => 'check-empty'
			),
			array(
				'el el-check' => 'check'
			),
			array(
				'el el-chevron-down' => 'chevron-down'
			),
			array(
				'el el-chevron-left' => 'chevron-left'
			),
			array(
				'el el-chevron-right' => 'chevron-right'
			),
			array(
				'el el-chevron-up' => 'chevron-up'
			),
			array(
				'el el-child' => 'child'
			),
			array(
				'el el-circle-arrow-down' => 'circle-arrow-down'
			),
			array(
				'el el-circle-arrow-left' => 'circle-arrow-left'
			),
			array(
				'el el-circle-arrow-right' => 'circle-arrow-right'
			),
			array(
				'el el-circle-arrow-up' => 'circle-arrow-up'
			),
			array(
				'el el-cloud-alt' => 'cloud-alt'
			),
			array(
				'el el-cloud' => 'cloud'
			),
			array(
				'el el-cog-alt' => 'cog-alt'
			),
			array(
				'el el-cog' => 'cog'
			),
			array(
				'el el-cogs' => 'cogs'
			),
			array(
				'el el-comment-alt' => 'comment-alt'
			),
			array(
				'el el-comment' => 'comment'
			),
			array(
				'el el-compass-alt' => 'compass-alt'
			),
			array(
				'el el-compass' => 'compass'
			),
			array(
				'el el-credit-card' => 'credit-card'
			),
			array(
				'el el-css' => 'css'
			),
			array(
				'el el-dashboard' => 'dashboard'
			),
			array(
				'el el-delicious' => 'delicious'
			),
			array(
				'el el-deviantart' => 'deviantart'
			),
			array(
				'el el-digg' => 'digg'
			),
			array(
				'el el-download-alt' => 'download-alt'
			),
			array(
				'el el-download' => 'download'
			),
			array(
				'el el-dribbble' => 'dribbble'
			),
			array(
				'el el-edit' => 'edit'
			),
			array(
				'el el-eject' => 'eject'
			),
			array(
				'el el-envelope-alt' => 'envelope-alt'
			),
			array(
				'el el-envelope' => 'envelope'
			),
			array(
				'el el-error-alt' => 'error-alt'
			),
			array(
				'el el-error' => 'error'
			),
			array(
				'el el-eur' => 'eur'
			),
			array(
				'el el-exclamation-sign' => 'exclamation-sign'
			),
			array(
				'el el-eye-close' => 'eye-close'
			),
			array(
				'el el-eye-open' => 'eye-open'
			),
			array(
				'el el-facebook' => 'facebook'
			),
			array(
				'el el-facetime-video' => 'facetime-video'
			),
			array(
				'el el-fast-backward' => 'fast-backward'
			),
			array(
				'el el-fast-forward' => 'fast-forward'
			),
			array(
				'el el-female' => 'female'
			),
			array(
				'el el-file-alt' => 'file-alt'
			),
			array(
				'el el-file-edit-alt' => 'file-edit-alt'
			),
			array(
				'el el-file-edit' => 'file-edit'
			),
			array(
				'el el-file-new-alt' => 'file-new-alt'
			),
			array(
				'el el-file-new' => 'file-new'
			),
			array(
				'el el-file' => 'file'
			),
			array(
				'el el-film' => 'film'
			),
			array(
				'el el-filter' => 'filter'
			),
			array(
				'el el-fire' => 'fire'
			),
			array(
				'el el-flag-alt' => 'flag-alt'
			),
			array(
				'el el-flag' => 'flag'
			),
			array(
				'el el-flickr' => 'flickr'
			),
			array(
				'el el-folder-close' => 'folder-close'
			),
			array(
				'el el-folder-open' => 'folder-open'
			),
			array(
				'el el-folder-sign' => 'folder-sign'
			),
			array(
				'el el-folder' => 'folder'
			),
			array(
				'el el-font' => 'font'
			),
			array(
				'el el-fontsize' => 'fontsize'
			),
			array(
				'el el-fork' => 'fork'
			),
			array(
				'el el-forward-alt' => 'forward-alt'
			),
			array(
				'el el-forward' => 'forward'
			),
			array(
				'el el-foursquare' => 'foursquare'
			),
			array(
				'el el-friendfeed-rect' => 'friendfeed-rect'
			),
			array(
				'el el-friendfeed' => 'friendfeed'
			),
			array(
				'el el-fullscreen' => 'fullscreen'
			),
			array(
				'el el-gbp' => 'gbp'
			),
			array(
				'el el-gift' => 'gift'
			),
			array(
				'el el-github-text' => 'github-text'
			),
			array(
				'el el-github' => 'github'
			),
			array(
				'el el-glass' => 'glass'
			),
			array(
				'el el-glasses' => 'glasses'
			),
			array(
				'el el-globe-alt' => 'globe-alt'
			),
			array(
				'el el-globe' => 'globe'
			),
			array(
				'el el-googleplus' => 'googleplus'
			),
			array(
				'el el-graph-alt' => 'graph-alt'
			),
			array(
				'el el-graph' => 'graph'
			),
			array(
				'el el-group-alt' => 'group-alt'
			),
			array(
				'el el-group' => 'group'
			),
			array(
				'el el-guidedog' => 'guidedog'
			),
			array(
				'el el-hand-down' => 'hand-down'
			),
			array(
				'el el-hand-left' => 'hand-left'
			),
			array(
				'el el-hand-right' => 'hand-right'
			),
			array(
				'el el-hand-up' => 'hand-up'
			),
			array(
				'el el-hdd' => 'hdd'
			),
			array(
				'el el-headphones' => 'headphones'
			),
			array(
				'el el-hearing-impaired' => 'hearing-impaired'
			),
			array(
				'el el-heart-alt' => 'heart-alt'
			),
			array(
				'el el-heart-empty' => 'heart-empty'
			),
			array(
				'el el-heart' => 'heart'
			),
			array(
				'el el-home-alt' => 'home-alt'
			),
			array(
				'el el-home' => 'home'
			),
			array(
				'el el-hourglass' => 'hourglass'
			),
			array(
				'el el-idea-alt' => 'idea-alt'
			),
			array(
				'el el-idea' => 'idea'
			),
			array(
				'el el-inbox-alt' => 'inbox-alt'
			),
			array(
				'el el-inbox-box' => 'inbox-box'
			),
			array(
				'el el-inbox' => 'inbox'
			),
			array(
				'el el-indent-left' => 'indent-left'
			),
			array(
				'el el-indent-right' => 'indent-right'
			),
			array(
				'el el-info-circle' => 'info-circle'
			),
			array(
				'el el-instagram' => 'instagram'
			),
			array(
				'el el-iphone-home' => 'iphone-home'
			),
			array(
				'el el-italic' => 'italic'
			),
			array(
				'el el-key' => 'key'
			),
			array(
				'el el-laptop-alt' => 'laptop-alt'
			),
			array(
				'el el-laptop' => 'laptop'
			),
			array(
				'el el-lastfm' => 'lastfm'
			),
			array(
				'el el-leaf' => 'leaf'
			),
			array(
				'el el-lines' => 'lines'
			),
			array(
				'el el-link' => 'link'
			),
			array(
				'el el-linkedin' => 'linkedin'
			),
			array(
				'el el-list-alt' => 'list-alt'
			),
			array(
				'el el-list' => 'list'
			),
			array(
				'el el-livejournal' => 'livejournal'
			),
			array(
				'el el-lock-alt' => 'lock-alt'
			),
			array(
				'el el-lock' => 'lock'
			),
			array(
				'el el-magic' => 'magic'
			),
			array(
				'el el-magnet' => 'magnet'
			),
			array(
				'el el-male' => 'male'
			),
			array(
				'el el-map-marker-alt' => 'map-marker-alt'
			),
			array(
				'el el-map-marker' => 'map-marker'
			),
			array(
				'el el-mic-alt' => 'mic-alt'
			),
			array(
				'el el-mic' => 'mic'
			),
			array(
				'el el-minus-sign' => 'minus-sign'
			),
			array(
				'el el-minus' => 'minus'
			),
			array(
				'el el-move' => 'move'
			),
			array(
				'el el-music' => 'music'
			),
			array(
				'el el-myspace' => 'myspace'
			),
			array(
				'el el-network' => 'network'
			),
			array(
				'el el-off' => 'off'
			),
			array(
				'el el-ok-circle' => 'ok-circle'
			),
			array(
				'el el-ok-sign' => 'ok-sign'
			),
			array(
				'el el-ok' => 'ok'
			),
			array(
				'el el-opensource' => 'opensource'
			),
			array(
				'el el-paper-clip-alt' => 'paper-clip-alt'
			),
			array(
				'el el-paper-clip' => 'paper-clip'
			),
			array(
				'el el-path' => 'path'
			),
			array(
				'el el-pause-alt' => 'pause-alt'
			),
			array(
				'el el-pause' => 'pause'
			),
			array(
				'el el-pencil-alt' => 'pencil-alt'
			),
			array(
				'el el-pencil' => 'pencil'
			),
			array(
				'el el-person' => 'person'
			),
			array(
				'el el-phone-alt' => 'phone-alt'
			),
			array(
				'el el-phone' => 'phone'
			),
			array(
				'el el-photo-alt' => 'photo-alt'
			),
			array(
				'el el-photo' => 'photo'
			),
			array(
				'el el-picasa' => 'picasa'
			),
			array(
				'el el-picture' => 'picture'
			),
			array(
				'el el-pinterest' => 'pinterest'
			),
			array(
				'el el-plane' => 'plane'
			),
			array(
				'el el-play-alt' => 'play-alt'
			),
			array(
				'el el-play-circle' => 'play-circle'
			),
			array(
				'el el-play' => 'play'
			),
			array(
				'el el-plurk-alt' => 'plurk-alt'
			),
			array(
				'el el-plurk' => 'plurk'
			),
			array(
				'el el-plus-sign' => 'plus-sign'
			),
			array(
				'el el-plus' => 'plus'
			),
			array(
				'el el-podcast' => 'podcast'
			),
			array(
				'el el-print' => 'print'
			),
			array(
				'el el-puzzle' => 'puzzle'
			),
			array(
				'el el-qrcode' => 'qrcode'
			),
			array(
				'el el-question-sign' => 'question-sign'
			),
			array(
				'el el-question' => 'question'
			),
			array(
				'el el-quote-alt' => 'quote-alt'
			),
			array(
				'el el-quote-right-alt' => 'quote-right-alt'
			),
			array(
				'el el-quote-right' => 'quote-right'
			),
			array(
				'el el-quotes' => 'quotes'
			),
			array(
				'el el-random' => 'random'
			),
			array(
				'el el-record' => 'record'
			),
			array(
				'el el-reddit' => 'reddit'
			),
			array(
				'el el-redux' => 'redux'
			),
			array(
				'el el-refresh' => 'refresh'
			),
			array(
				'el el-remove-circle' => 'remove-circle'
			),
			array(
				'el el-remove-sign' => 'remove-sign'
			),
			array(
				'el el-remove' => 'remove'
			),
			array(
				'el el-repeat-alt' => 'repeat-alt'
			),
			array(
				'el el-repeat' => 'repeat'
			),
			array(
				'el el-resize-full' => 'resize-full'
			),
			array(
				'el el-resize-horizontal' => 'resize-horizontal'
			),
			array(
				'el el-resize-small' => 'resize-small'
			),
			array(
				'el el-resize-vertical' => 'resize-vertical'
			),
			array(
				'el el-return-key' => 'return-key'
			),
			array(
				'el el-retweet' => 'retweet'
			),
			array(
				'el el-reverse-alt' => 'reverse-alt'
			),
			array(
				'el el-road' => 'road'
			),
			array(
				'el el-rss' => 'rss'
			),
			array(
				'el el-scissors' => 'scissors'
			),
			array(
				'el el-screen-alt' => 'screen-alt'
			),
			array(
				'el el-screen' => 'screen'
			),
			array(
				'el el-screenshot' => 'screenshot'
			),
			array(
				'el el-search-alt' => 'search-alt'
			),
			array(
				'el el-search' => 'search'
			),
			array(
				'el el-share-alt' => 'share-alt'
			),
			array(
				'el el-share' => 'share'
			),
			array(
				'el el-shopping-cart-sign' => 'shopping-cart-sign'
			),
			array(
				'el el-shopping-cart' => 'shopping-cart'
			),
			array(
				'el el-signal' => 'signal'
			),
			array(
				'el el-skype' => 'skype'
			),
			array(
				'el el-slideshare' => 'slideshare'
			),
			array(
				'el el-smiley-alt' => 'smiley-alt'
			),
			array(
				'el el-smiley' => 'smiley'
			),
			array(
				'el el-soundcloud' => 'soundcloud'
			),
			array(
				'el el-speaker' => 'speaker'
			),
			array(
				'el el-spotify' => 'spotify'
			),
			array(
				'el el-stackoverflow' => 'stackoverflow'
			),
			array(
				'el el-star-alt' => 'star-alt'
			),
			array(
				'el el-star-empty' => 'star-empty'
			),
			array(
				'el el-star' => 'star'
			),
			array(
				'el el-step-backward' => 'step-backward'
			),
			array(
				'el el-step-forward' => 'step-forward'
			),
			array(
				'el el-stop-alt' => 'stop-alt'
			),
			array(
				'el el-stop' => 'stop'
			),
			array(
				'el el-stumbleupon' => 'stumbleupon'
			),
			array(
				'el el-tag' => 'tag'
			),
			array(
				'el el-tags' => 'tags'
			),
			array(
				'el el-tasks' => 'tasks'
			),
			array(
				'el el-text-height' => 'text-height'
			),
			array(
				'el el-text-width' => 'text-width'
			),
			array(
				'el el-th-large' => 'th-large'
			),
			array(
				'el el-th-list' => 'th-list'
			),
			array(
				'el el-th' => 'th'
			),
			array(
				'el el-thumbs-down' => 'thumbs-down'
			),
			array(
				'el el-thumbs-up' => 'thumbs-up'
			),
			array(
				'el el-time-alt' => 'time-alt'
			),
			array(
				'el el-time' => 'time'
			),
			array(
				'el el-tint' => 'tint'
			),
			array(
				'el el-torso' => 'torso'
			),
			array(
				'el el-trash-alt' => 'trash-alt'
			),
			array(
				'el el-trash' => 'trash'
			),
			array(
				'el el-tumblr' => 'tumblr'
			),
			array(
				'el el-twitter' => 'twitter'
			),
			array(
				'el el-universal-access' => 'universal-access'
			),
			array(
				'el el-unlock-alt' => 'unlock-alt'
			),
			array(
				'el el-unlock' => 'unlock'
			),
			array(
				'el el-upload' => 'upload'
			),
			array(
				'el el-usd' => 'usd'
			),
			array(
				'el el-user' => 'user'
			),
			array(
				'el el-viadeo' => 'viadeo'
			),
			array(
				'el el-video-alt' => 'video-alt'
			),
			array(
				'el el-video-chat' => 'video-chat'
			),
			array(
				'el el-video' => 'video'
			),
			array(
				'el el-view-mode' => 'view-mode'
			),
			array(
				'el el-vimeo' => 'vimeo'
			),
			array(
				'el el-vkontakte' => 'vkontakte'
			),
			array(
				'el el-volume-down' => 'volume-down'
			),
			array(
				'el el-volume-off' => 'volume-off'
			),
			array(
				'el el-volume-up' => 'volume-up'
			),
			array(
				'el el-w3c' => 'w3c'
			),
			array(
				'el el-warning-sign' => 'warning-sign'
			),
			array(
				'el el-website-alt' => 'website-alt'
			),
			array(
				'el el-website' => 'website'
			),
			array(
				'el el-wheelchair' => 'wheelchair'
			),
			array(
				'el el-wordpress' => 'wordpress'
			),
			array(
				'el el-wrench-alt' => 'wrench-alt'
			),
			array(
				'el el-wrench' => 'wrench'
			),
			array(
				'el el-youtube' => 'youtube'
			),
			array(
				'el el-zoom-in' => 'zoom-in'
			),
			array(
				'el el-zoom-out' => 'zoom-out'
			)
		);
		
		
		return array_merge($icons, $elusive_icons);
	}




	add_filter('vc_iconpicker-type-iconsmind', 'vc_iconpicker_type_iconsmind');

	function vc_iconpicker_type_iconsmind($icons)
	{
		
		$iconsmind_icons = array(
			
			array(
				'icon-A-Z' => 'A-Z'
			),
			array(
				'icon-Aa' => 'Aa'
			),
			array(
				'icon-Add-Bag' => 'Add-Bag'
			),
			array(
				'icon-Add-Basket' => 'Add-Basket'
			),
			array(
				'icon-Add-Cart' => 'Add-Cart'
			),
			array(
				'icon-Add-File' => 'Add-File'
			),
			array(
				'icon-Add-SpaceAfterParagraph' => 'Add-SpaceAfterParagraph'
			),
			array(
				'icon-Add-SpaceBeforeParagraph' => 'Add-SpaceBeforeParagraph'
			),
			array(
				'icon-Add-User' => 'Add-User'
			),
			array(
				'icon-Add-UserStar' => 'Add-UserStar'
			),
			array(
				'icon-Add-Window' => 'Add-Window'
			),
			array(
				'icon-Add' => 'Add'
			),
			array(
				'icon-Address-Book' => 'Address-Book'
			),
			array(
				'icon-Address-Book2' => 'Address-Book2'
			),
			array(
				'icon-Administrator' => 'Administrator'
			),
			array(
				'icon-Aerobics-2' => 'Aerobics-2'
			),
			array(
				'icon-Aerobics-3' => 'Aerobics-3'
			),
			array(
				'icon-Aerobics' => 'Aerobics'
			),
			array(
				'icon-Affiliate' => 'Affiliate'
			),
			array(
				'icon-Aim' => 'Aim'
			),
			array(
				'icon-Air-Balloon' => 'Air-Balloon'
			),
			array(
				'icon-Airbrush' => 'Airbrush'
			),
			array(
				'icon-Airship' => 'Airship'
			),
			array(
				'icon-Alarm-Clock' => 'Alarm-Clock'
			),
			array(
				'icon-Alarm-Clock2' => 'Alarm-Clock2'
			),
			array(
				'icon-Alarm' => 'Alarm'
			),
			array(
				'icon-Alien-2' => 'Alien-2'
			),
			array(
				'icon-Alien' => 'Alien'
			),
			array(
				'icon-Aligator' => 'Aligator'
			),
			array(
				'icon-Align-Center' => 'Align-Center'
			),
			array(
				'icon-Align-JustifyAll' => 'Align-JustifyAll'
			),
			array(
				'icon-Align-JustifyCenter' => 'Align-JustifyCenter'
			),
			array(
				'icon-Align-JustifyLeft' => 'Align-JustifyLeft'
			),
			array(
				'icon-Align-JustifyRight' => 'Align-JustifyRight'
			),
			array(
				'icon-Align-Left' => 'Align-Left'
			),
			array(
				'icon-Align-Right' => 'Align-Right'
			),
			array(
				'icon-Alpha' => 'Alpha'
			),
			array(
				'icon-Ambulance' => 'Ambulance'
			),
			array(
				'icon-AMX' => 'AMX'
			),
			array(
				'icon-Anchor-2' => 'Anchor-2'
			),
			array(
				'icon-Anchor' => 'Anchor'
			),
			array(
				'icon-Android-Store' => 'Android-Store'
			),
			array(
				'icon-Android' => 'Android'
			),
			array(
				'icon-Angel-Smiley' => 'Angel-Smiley'
			),
			array(
				'icon-Angel' => 'Angel'
			),
			array(
				'icon-Angry' => 'Angry'
			),
			array(
				'icon-Apple-Bite' => 'Apple-Bite'
			),
			array(
				'icon-Apple-Store' => 'Apple-Store'
			),
			array(
				'icon-Apple' => 'Apple'
			),
			array(
				'icon-Approved-Window' => 'Approved-Window'
			),
			array(
				'icon-Aquarius-2' => 'Aquarius-2'
			),
			array(
				'icon-Aquarius' => 'Aquarius'
			),
			array(
				'icon-Archery-2' => 'Archery-2'
			),
			array(
				'icon-Archery' => 'Archery'
			),
			array(
				'icon-Argentina' => 'Argentina'
			),
			array(
				'icon-Aries-2' => 'Aries-2'
			),
			array(
				'icon-Aries' => 'Aries'
			),
			array(
				'icon-Army-Key' => 'Army-Key'
			),
			array(
				'icon-Arrow-Around' => 'Arrow-Around'
			),
			array(
				'icon-Arrow-Back3' => 'Arrow-Back3'
			),
			array(
				'icon-Arrow-Back' => 'Arrow-Back'
			),
			array(
				'icon-Arrow-Back2' => 'Arrow-Back2'
			),
			array(
				'icon-Arrow-Barrier' => 'Arrow-Barrier'
			),
			array(
				'icon-Arrow-Circle' => 'Arrow-Circle'
			),
			array(
				'icon-Arrow-Cross' => 'Arrow-Cross'
			),
			array(
				'icon-Arrow-Down' => 'Arrow-Down'
			),
			array(
				'icon-Arrow-Down2' => 'Arrow-Down2'
			),
			array(
				'icon-Arrow-Down3' => 'Arrow-Down3'
			),
			array(
				'icon-Arrow-DowninCircle' => 'Arrow-DowninCircle'
			),
			array(
				'icon-Arrow-Fork' => 'Arrow-Fork'
			),
			array(
				'icon-Arrow-Forward' => 'Arrow-Forward'
			),
			array(
				'icon-Arrow-Forward2' => 'Arrow-Forward2'
			),
			array(
				'icon-Arrow-From' => 'Arrow-From'
			),
			array(
				'icon-Arrow-Inside' => 'Arrow-Inside'
			),
			array(
				'icon-Arrow-Inside45' => 'Arrow-Inside45'
			),
			array(
				'icon-Arrow-InsideGap' => 'Arrow-InsideGap'
			),
			array(
				'icon-Arrow-InsideGap45' => 'Arrow-InsideGap45'
			),
			array(
				'icon-Arrow-Into' => 'Arrow-Into'
			),
			array(
				'icon-Arrow-Join' => 'Arrow-Join'
			),
			array(
				'icon-Arrow-Junction' => 'Arrow-Junction'
			),
			array(
				'icon-Arrow-Left' => 'Arrow-Left'
			),
			array(
				'icon-Arrow-Left2' => 'Arrow-Left2'
			),
			array(
				'icon-Arrow-LeftinCircle' => 'Arrow-LeftinCircle'
			),
			array(
				'icon-Arrow-Loop' => 'Arrow-Loop'
			),
			array(
				'icon-Arrow-Merge' => 'Arrow-Merge'
			),
			array(
				'icon-Arrow-Mix' => 'Arrow-Mix'
			),
			array(
				'icon-Arrow-Next' => 'Arrow-Next'
			),
			array(
				'icon-Arrow-OutLeft' => 'Arrow-OutLeft'
			),
			array(
				'icon-Arrow-OutRight' => 'Arrow-OutRight'
			),
			array(
				'icon-Arrow-Outside' => 'Arrow-Outside'
			),
			array(
				'icon-Arrow-Outside45' => 'Arrow-Outside45'
			),
			array(
				'icon-Arrow-OutsideGap' => 'Arrow-OutsideGap'
			),
			array(
				'icon-Arrow-OutsideGap45' => 'Arrow-OutsideGap45'
			),
			array(
				'icon-Arrow-Over' => 'Arrow-Over'
			),
			array(
				'icon-Arrow-Refresh' => 'Arrow-Refresh'
			),
			array(
				'icon-Arrow-Refresh2' => 'Arrow-Refresh2'
			),
			array(
				'icon-Arrow-Right' => 'Arrow-Right'
			),
			array(
				'icon-Arrow-Right2' => 'Arrow-Right2'
			),
			array(
				'icon-Arrow-RightinCircle' => 'Arrow-RightinCircle'
			),
			array(
				'icon-Arrow-Shuffle' => 'Arrow-Shuffle'
			),
			array(
				'icon-Arrow-Squiggly' => 'Arrow-Squiggly'
			),
			array(
				'icon-Arrow-Through' => 'Arrow-Through'
			),
			array(
				'icon-Arrow-To' => 'Arrow-To'
			),
			array(
				'icon-Arrow-TurnLeft' => 'Arrow-TurnLeft'
			),
			array(
				'icon-Arrow-TurnRight' => 'Arrow-TurnRight'
			),
			array(
				'icon-Arrow-Up' => 'Arrow-Up'
			),
			array(
				'icon-Arrow-Up2' => 'Arrow-Up2'
			),
			array(
				'icon-Arrow-Up3' => 'Arrow-Up3'
			),
			array(
				'icon-Arrow-UpinCircle' => 'Arrow-UpinCircle'
			),
			array(
				'icon-Arrow-XLeft' => 'Arrow-XLeft'
			),
			array(
				'icon-Arrow-XRight' => 'Arrow-XRight'
			),
			array(
				'icon-Ask' => 'Ask'
			),
			array(
				'icon-Assistant' => 'Assistant'
			),
			array(
				'icon-Astronaut' => 'Astronaut'
			),
			array(
				'icon-At-Sign' => 'At-Sign'
			),
			array(
				'icon-ATM' => 'ATM'
			),
			array(
				'icon-Atom' => 'Atom'
			),
			array(
				'icon-Audio' => 'Audio'
			),
			array(
				'icon-Auto-Flash' => 'Auto-Flash'
			),
			array(
				'icon-Autumn' => 'Autumn'
			),
			array(
				'icon-Baby-Clothes' => 'Baby-Clothes'
			),
			array(
				'icon-Baby-Clothes2' => 'Baby-Clothes2'
			),
			array(
				'icon-Baby-Cry' => 'Baby-Cry'
			),
			array(
				'icon-Baby' => 'Baby'
			),
			array(
				'icon-Back2' => 'Back2'
			),
			array(
				'icon-Back-Media' => 'Back-Media'
			),
			array(
				'icon-Back-Music' => 'Back-Music'
			),
			array(
				'icon-Back' => 'Back'
			),
			array(
				'icon-Background' => 'Background'
			),
			array(
				'icon-Bacteria' => 'Bacteria'
			),
			array(
				'icon-Bag-Coins' => 'Bag-Coins'
			),
			array(
				'icon-Bag-Items' => 'Bag-Items'
			),
			array(
				'icon-Bag-Quantity' => 'Bag-Quantity'
			),
			array(
				'icon-Bag' => 'Bag'
			),
			array(
				'icon-Bakelite' => 'Bakelite'
			),
			array(
				'icon-Ballet-Shoes' => 'Ballet-Shoes'
			),
			array(
				'icon-Balloon' => 'Balloon'
			),
			array(
				'icon-Banana' => 'Banana'
			),
			array(
				'icon-Band-Aid' => 'Band-Aid'
			),
			array(
				'icon-Bank' => 'Bank'
			),
			array(
				'icon-Bar-Chart' => 'Bar-Chart'
			),
			array(
				'icon-Bar-Chart2' => 'Bar-Chart2'
			),
			array(
				'icon-Bar-Chart3' => 'Bar-Chart3'
			),
			array(
				'icon-Bar-Chart4' => 'Bar-Chart4'
			),
			array(
				'icon-Bar-Chart5' => 'Bar-Chart5'
			),
			array(
				'icon-Bar-Code' => 'Bar-Code'
			),
			array(
				'icon-Barricade-2' => 'Barricade-2'
			),
			array(
				'icon-Barricade' => 'Barricade'
			),
			array(
				'icon-Baseball' => 'Baseball'
			),
			array(
				'icon-Basket-Ball' => 'Basket-Ball'
			),
			array(
				'icon-Basket-Coins' => 'Basket-Coins'
			),
			array(
				'icon-Basket-Items' => 'Basket-Items'
			),
			array(
				'icon-Basket-Quantity' => 'Basket-Quantity'
			),
			array(
				'icon-Bat-2' => 'Bat-2'
			),
			array(
				'icon-Bat' => 'Bat'
			),
			array(
				'icon-Bathrobe' => 'Bathrobe'
			),
			array(
				'icon-Batman-Mask' => 'Batman-Mask'
			),
			array(
				'icon-Battery-0' => 'Battery-0'
			),
			array(
				'icon-Battery-25' => 'Battery-25'
			),
			array(
				'icon-Battery-50' => 'Battery-50'
			),
			array(
				'icon-Battery-75' => 'Battery-75'
			),
			array(
				'icon-Battery-100' => 'Battery-100'
			),
			array(
				'icon-Battery-Charge' => 'Battery-Charge'
			),
			array(
				'icon-Bear' => 'Bear'
			),
			array(
				'icon-Beard-2' => 'Beard-2'
			),
			array(
				'icon-Beard-3' => 'Beard-3'
			),
			array(
				'icon-Beard' => 'Beard'
			),
			array(
				'icon-Bebo' => 'Bebo'
			),
			array(
				'icon-Bee' => 'Bee'
			),
			array(
				'icon-Beer-Glass' => 'Beer-Glass'
			),
			array(
				'icon-Beer' => 'Beer'
			),
			array(
				'icon-Bell-2' => 'Bell-2'
			),
			array(
				'icon-Bell' => 'Bell'
			),
			array(
				'icon-Belt-2' => 'Belt-2'
			),
			array(
				'icon-Belt-3' => 'Belt-3'
			),
			array(
				'icon-Belt' => 'Belt'
			),
			array(
				'icon-Berlin-Tower' => 'Berlin-Tower'
			),
			array(
				'icon-Beta' => 'Beta'
			),
			array(
				'icon-Betvibes' => 'Betvibes'
			),
			array(
				'icon-Bicycle-2' => 'Bicycle-2'
			),
			array(
				'icon-Bicycle-3' => 'Bicycle-3'
			),
			array(
				'icon-Bicycle' => 'Bicycle'
			),
			array(
				'icon-Big-Bang' => 'Big-Bang'
			),
			array(
				'icon-Big-Data' => 'Big-Data'
			),
			array(
				'icon-Bike-Helmet' => 'Bike-Helmet'
			),
			array(
				'icon-Bikini' => 'Bikini'
			),
			array(
				'icon-Bilk-Bottle2' => 'Bilk-Bottle2'
			),
			array(
				'icon-Billing' => 'Billing'
			),
			array(
				'icon-Bing' => 'Bing'
			),
			array(
				'icon-Binocular' => 'Binocular'
			),
			array(
				'icon-Bio-Hazard' => 'Bio-Hazard'
			),
			array(
				'icon-Biotech' => 'Biotech'
			),
			array(
				'icon-Bird-DeliveringLetter' => 'Bird-DeliveringLetter'
			),
			array(
				'icon-Bird' => 'Bird'
			),
			array(
				'icon-Birthday-Cake' => 'Birthday-Cake'
			),
			array(
				'icon-Bisexual' => 'Bisexual'
			),
			array(
				'icon-Bishop' => 'Bishop'
			),
			array(
				'icon-Bitcoin' => 'Bitcoin'
			),
			array(
				'icon-Black-Cat' => 'Black-Cat'
			),
			array(
				'icon-Blackboard' => 'Blackboard'
			),
			array(
				'icon-Blinklist' => 'Blinklist'
			),
			array(
				'icon-Block-Cloud' => 'Block-Cloud'
			),
			array(
				'icon-Block-Window' => 'Block-Window'
			),
			array(
				'icon-Blogger' => 'Blogger'
			),
			array(
				'icon-Blood' => 'Blood'
			),
			array(
				'icon-Blouse' => 'Blouse'
			),
			array(
				'icon-Blueprint' => 'Blueprint'
			),
			array(
				'icon-Board' => 'Board'
			),
			array(
				'icon-Bodybuilding' => 'Bodybuilding'
			),
			array(
				'icon-Bold-Text' => 'Bold-Text'
			),
			array(
				'icon-Bone' => 'Bone'
			),
			array(
				'icon-Bones' => 'Bones'
			),
			array(
				'icon-Book' => 'Book'
			),
			array(
				'icon-Bookmark' => 'Bookmark'
			),
			array(
				'icon-Books-2' => 'Books-2'
			),
			array(
				'icon-Books' => 'Books'
			),
			array(
				'icon-Boom' => 'Boom'
			),
			array(
				'icon-Boot-2' => 'Boot-2'
			),
			array(
				'icon-Boot' => 'Boot'
			),
			array(
				'icon-Bottom-ToTop' => 'Bottom-ToTop'
			),
			array(
				'icon-Bow-2' => 'Bow-2'
			),
			array(
				'icon-Bow-3' => 'Bow-3'
			),
			array(
				'icon-Bow-4' => 'Bow-4'
			),
			array(
				'icon-Bow-5' => 'Bow-5'
			),
			array(
				'icon-Bow-6' => 'Bow-6'
			),
			array(
				'icon-Bow' => 'Bow'
			),
			array(
				'icon-Bowling-2' => 'Bowling-2'
			),
			array(
				'icon-Bowling' => 'Bowling'
			),
			array(
				'icon-Box2' => 'Box2'
			),
			array(
				'icon-Box-Close' => 'Box-Close'
			),
			array(
				'icon-Box-Full' => 'Box-Full'
			),
			array(
				'icon-Box-Open' => 'Box-Open'
			),
			array(
				'icon-Box-withFolders' => 'Box-withFolders'
			),
			array(
				'icon-Box' => 'Box'
			),
			array(
				'icon-Boy' => 'Boy'
			),
			array(
				'icon-Bra' => 'Bra'
			),
			array(
				'icon-Brain-2' => 'Brain-2'
			),
			array(
				'icon-Brain-3' => 'Brain-3'
			),
			array(
				'icon-Brain' => 'Brain'
			),
			array(
				'icon-Brazil' => 'Brazil'
			),
			array(
				'icon-Bread-2' => 'Bread-2'
			),
			array(
				'icon-Bread' => 'Bread'
			),
			array(
				'icon-Bridge' => 'Bridge'
			),
			array(
				'icon-Brightkite' => 'Brightkite'
			),
			array(
				'icon-Broke-Link2' => 'Broke-Link2'
			),
			array(
				'icon-Broken-Link' => 'Broken-Link'
			),
			array(
				'icon-Broom' => 'Broom'
			),
			array(
				'icon-Brush' => 'Brush'
			),
			array(
				'icon-Bucket' => 'Bucket'
			),
			array(
				'icon-Bug' => 'Bug'
			),
			array(
				'icon-Building' => 'Building'
			),
			array(
				'icon-Bulleted-List' => 'Bulleted-List'
			),
			array(
				'icon-Bus-2' => 'Bus-2'
			),
			array(
				'icon-Bus' => 'Bus'
			),
			array(
				'icon-Business-Man' => 'Business-Man'
			),
			array(
				'icon-Business-ManWoman' => 'Business-ManWoman'
			),
			array(
				'icon-Business-Mens' => 'Business-Mens'
			),
			array(
				'icon-Business-Woman' => 'Business-Woman'
			),
			array(
				'icon-Butterfly' => 'Butterfly'
			),
			array(
				'icon-Button' => 'Button'
			),
			array(
				'icon-Cable-Car' => 'Cable-Car'
			),
			array(
				'icon-Cake' => 'Cake'
			),
			array(
				'icon-Calculator-2' => 'Calculator-2'
			),
			array(
				'icon-Calculator-3' => 'Calculator-3'
			),
			array(
				'icon-Calculator' => 'Calculator'
			),
			array(
				'icon-Calendar-2' => 'Calendar-2'
			),
			array(
				'icon-Calendar-3' => 'Calendar-3'
			),
			array(
				'icon-Calendar-4' => 'Calendar-4'
			),
			array(
				'icon-Calendar-Clock' => 'Calendar-Clock'
			),
			array(
				'icon-Calendar' => 'Calendar'
			),
			array(
				'icon-Camel' => 'Camel'
			),
			array(
				'icon-Camera-2' => 'Camera-2'
			),
			array(
				'icon-Camera-3' => 'Camera-3'
			),
			array(
				'icon-Camera-4' => 'Camera-4'
			),
			array(
				'icon-Camera-5' => 'Camera-5'
			),
			array(
				'icon-Camera-Back' => 'Camera-Back'
			),
			array(
				'icon-Camera' => 'Camera'
			),
			array(
				'icon-Can-2' => 'Can-2'
			),
			array(
				'icon-Can' => 'Can'
			),
			array(
				'icon-Canada' => 'Canada'
			),
			array(
				'icon-Cancer-2' => 'Cancer-2'
			),
			array(
				'icon-Cancer-3' => 'Cancer-3'
			),
			array(
				'icon-Cancer' => 'Cancer'
			),
			array(
				'icon-Candle' => 'Candle'
			),
			array(
				'icon-Candy-Cane' => 'Candy-Cane'
			),
			array(
				'icon-Candy' => 'Candy'
			),
			array(
				'icon-Cannon' => 'Cannon'
			),
			array(
				'icon-Cap-2' => 'Cap-2'
			),
			array(
				'icon-Cap-3' => 'Cap-3'
			),
			array(
				'icon-Cap-Smiley' => 'Cap-Smiley'
			),
			array(
				'icon-Cap' => 'Cap'
			),
			array(
				'icon-Capricorn-2' => 'Capricorn-2'
			),
			array(
				'icon-Capricorn' => 'Capricorn'
			),
			array(
				'icon-Car-2' => 'Car-2'
			),
			array(
				'icon-Car-3' => 'Car-3'
			),
			array(
				'icon-Car-Coins' => 'Car-Coins'
			),
			array(
				'icon-Car-Items' => 'Car-Items'
			),
			array(
				'icon-Car-Wheel' => 'Car-Wheel'
			),
			array(
				'icon-Car' => 'Car'
			),
			array(
				'icon-Cardigan' => 'Cardigan'
			),
			array(
				'icon-Cardiovascular' => 'Cardiovascular'
			),
			array(
				'icon-Cart-Quantity' => 'Cart-Quantity'
			),
			array(
				'icon-Casette-Tape' => 'Casette-Tape'
			),
			array(
				'icon-Cash-Register' => 'Cash-Register'
			),
			array(
				'icon-Cash-register2' => 'Cash-register2'
			),
			array(
				'icon-Castle' => 'Castle'
			),
			array(
				'icon-Cat' => 'Cat'
			),
			array(
				'icon-Cathedral' => 'Cathedral'
			),
			array(
				'icon-Cauldron' => 'Cauldron'
			),
			array(
				'icon-CD-2' => 'CD-2'
			),
			array(
				'icon-CD-Cover' => 'CD-Cover'
			),
			array(
				'icon-CD' => 'CD'
			),
			array(
				'icon-Cello' => 'Cello'
			),
			array(
				'icon-Celsius' => 'Celsius'
			),
			array(
				'icon-Chacked-Flag' => 'Chacked-Flag'
			),
			array(
				'icon-Chair' => 'Chair'
			),
			array(
				'icon-Charger' => 'Charger'
			),
			array(
				'icon-Check-2' => 'Check-2'
			),
			array(
				'icon-Check' => 'Check'
			),
			array(
				'icon-Checked-User' => 'Checked-User'
			),
			array(
				'icon-Checkmate' => 'Checkmate'
			),
			array(
				'icon-Checkout-Bag' => 'Checkout-Bag'
			),
			array(
				'icon-Checkout-Basket' => 'Checkout-Basket'
			),
			array(
				'icon-Checkout' => 'Checkout'
			),
			array(
				'icon-Cheese' => 'Cheese'
			),
			array(
				'icon-Cheetah' => 'Cheetah'
			),
			array(
				'icon-Chef-Hat' => 'Chef-Hat'
			),
			array(
				'icon-Chef-Hat2' => 'Chef-Hat2'
			),
			array(
				'icon-Chef' => 'Chef'
			),
			array(
				'icon-Chemical-2' => 'Chemical-2'
			),
			array(
				'icon-Chemical-3' => 'Chemical-3'
			),
			array(
				'icon-Chemical-4' => 'Chemical-4'
			),
			array(
				'icon-Chemical-5' => 'Chemical-5'
			),
			array(
				'icon-Chemical' => 'Chemical'
			),
			array(
				'icon-Chess-Board' => 'Chess-Board'
			),
			array(
				'icon-Chess' => 'Chess'
			),
			array(
				'icon-Chicken' => 'Chicken'
			),
			array(
				'icon-Chile' => 'Chile'
			),
			array(
				'icon-Chimney' => 'Chimney'
			),
			array(
				'icon-China' => 'China'
			),
			array(
				'icon-Chinese-Temple' => 'Chinese-Temple'
			),
			array(
				'icon-Chip' => 'Chip'
			),
			array(
				'icon-Chopsticks-2' => 'Chopsticks-2'
			),
			array(
				'icon-Chopsticks' => 'Chopsticks'
			),
			array(
				'icon-Christmas-Ball' => 'Christmas-Ball'
			),
			array(
				'icon-Christmas-Bell' => 'Christmas-Bell'
			),
			array(
				'icon-Christmas-Candle' => 'Christmas-Candle'
			),
			array(
				'icon-Christmas-Hat' => 'Christmas-Hat'
			),
			array(
				'icon-Christmas-Sleigh' => 'Christmas-Sleigh'
			),
			array(
				'icon-Christmas-Snowman' => 'Christmas-Snowman'
			),
			array(
				'icon-Christmas-Sock' => 'Christmas-Sock'
			),
			array(
				'icon-Christmas-Tree' => 'Christmas-Tree'
			),
			array(
				'icon-Christmas' => 'Christmas'
			),
			array(
				'icon-Chrome' => 'Chrome'
			),
			array(
				'icon-Chrysler-Building' => 'Chrysler-Building'
			),
			array(
				'icon-Cinema' => 'Cinema'
			),
			array(
				'icon-Circular-Point' => 'Circular-Point'
			),
			array(
				'icon-City-Hall' => 'City-Hall'
			),
			array(
				'icon-Clamp' => 'Clamp'
			),
			array(
				'icon-Clapperboard-Close' => 'Clapperboard-Close'
			),
			array(
				'icon-Clapperboard-Open' => 'Clapperboard-Open'
			),
			array(
				'icon-Claps' => 'Claps'
			),
			array(
				'icon-Clef' => 'Clef'
			),
			array(
				'icon-Clinic' => 'Clinic'
			),
			array(
				'icon-Clock-2' => 'Clock-2'
			),
			array(
				'icon-Clock-3' => 'Clock-3'
			),
			array(
				'icon-Clock-4' => 'Clock-4'
			),
			array(
				'icon-Clock-Back' => 'Clock-Back'
			),
			array(
				'icon-Clock-Forward' => 'Clock-Forward'
			),
			array(
				'icon-Clock' => 'Clock'
			),
			array(
				'icon-Close-Window' => 'Close-Window'
			),
			array(
				'icon-Close' => 'Close'
			),
			array(
				'icon-Clothing-Store' => 'Clothing-Store'
			),
			array(
				'icon-Cloud—' => 'Cloud—'
			),
			array(
				'icon-Cloud-' => 'Cloud-'
			),
			array(
				'icon-Cloud-Camera' => 'Cloud-Camera'
			),
			array(
				'icon-Cloud-Computer' => 'Cloud-Computer'
			),
			array(
				'icon-Cloud-Email' => 'Cloud-Email'
			),
			array(
				'icon-Cloud-Hail' => 'Cloud-Hail'
			),
			array(
				'icon-Cloud-Laptop' => 'Cloud-Laptop'
			),
			array(
				'icon-Cloud-Lock' => 'Cloud-Lock'
			),
			array(
				'icon-Cloud-Moon' => 'Cloud-Moon'
			),
			array(
				'icon-Cloud-Music' => 'Cloud-Music'
			),
			array(
				'icon-Cloud-Picture' => 'Cloud-Picture'
			),
			array(
				'icon-Cloud-Rain' => 'Cloud-Rain'
			),
			array(
				'icon-Cloud-Remove' => 'Cloud-Remove'
			),
			array(
				'icon-Cloud-Secure' => 'Cloud-Secure'
			),
			array(
				'icon-Cloud-Settings' => 'Cloud-Settings'
			),
			array(
				'icon-Cloud-Smartphone' => 'Cloud-Smartphone'
			),
			array(
				'icon-Cloud-Snow' => 'Cloud-Snow'
			),
			array(
				'icon-Cloud-Sun' => 'Cloud-Sun'
			),
			array(
				'icon-Cloud-Tablet' => 'Cloud-Tablet'
			),
			array(
				'icon-Cloud-Video' => 'Cloud-Video'
			),
			array(
				'icon-Cloud-Weather' => 'Cloud-Weather'
			),
			array(
				'icon-Cloud' => 'Cloud'
			),
			array(
				'icon-Clouds-Weather' => 'Clouds-Weather'
			),
			array(
				'icon-Clouds' => 'Clouds'
			),
			array(
				'icon-Clown' => 'Clown'
			),
			array(
				'icon-CMYK' => 'CMYK'
			),
			array(
				'icon-Coat' => 'Coat'
			),
			array(
				'icon-Cocktail' => 'Cocktail'
			),
			array(
				'icon-Coconut' => 'Coconut'
			),
			array(
				'icon-Code-Window' => 'Code-Window'
			),
			array(
				'icon-Coding' => 'Coding'
			),
			array(
				'icon-Coffee-2' => 'Coffee-2'
			),
			array(
				'icon-Coffee-Bean' => 'Coffee-Bean'
			),
			array(
				'icon-Coffee-Machine' => 'Coffee-Machine'
			),
			array(
				'icon-Coffee-toGo' => 'Coffee-toGo'
			),
			array(
				'icon-Coffee' => 'Coffee'
			),
			array(
				'icon-Coffin' => 'Coffin'
			),
			array(
				'icon-Coin' => 'Coin'
			),
			array(
				'icon-Coins-2' => 'Coins-2'
			),
			array(
				'icon-Coins-3' => 'Coins-3'
			),
			array(
				'icon-Coins' => 'Coins'
			),
			array(
				'icon-Colombia' => 'Colombia'
			),
			array(
				'icon-Colosseum' => 'Colosseum'
			),
			array(
				'icon-Column-2' => 'Column-2'
			),
			array(
				'icon-Column-3' => 'Column-3'
			),
			array(
				'icon-Column' => 'Column'
			),
			array(
				'icon-Comb-2' => 'Comb-2'
			),
			array(
				'icon-Comb' => 'Comb'
			),
			array(
				'icon-Communication-Tower' => 'Communication-Tower'
			),
			array(
				'icon-Communication-Tower2' => 'Communication-Tower2'
			),
			array(
				'icon-Compass-2' => 'Compass-2'
			),
			array(
				'icon-Compass-3' => 'Compass-3'
			),
			array(
				'icon-Compass-4' => 'Compass-4'
			),
			array(
				'icon-Compass-Rose' => 'Compass-Rose'
			),
			array(
				'icon-Compass' => 'Compass'
			),
			array(
				'icon-Computer-2' => 'Computer-2'
			),
			array(
				'icon-Computer-3' => 'Computer-3'
			),
			array(
				'icon-Computer-Secure' => 'Computer-Secure'
			),
			array(
				'icon-Computer' => 'Computer'
			),
			array(
				'icon-Conference' => 'Conference'
			),
			array(
				'icon-Confused' => 'Confused'
			),
			array(
				'icon-Conservation' => 'Conservation'
			),
			array(
				'icon-Consulting' => 'Consulting'
			),
			array(
				'icon-Contrast' => 'Contrast'
			),
			array(
				'icon-Control-2' => 'Control-2'
			),
			array(
				'icon-Control' => 'Control'
			),
			array(
				'icon-Cookie-Man' => 'Cookie-Man'
			),
			array(
				'icon-Cookies' => 'Cookies'
			),
			array(
				'icon-Cool-Guy' => 'Cool-Guy'
			),
			array(
				'icon-Cool' => 'Cool'
			),
			array(
				'icon-Copyright' => 'Copyright'
			),
			array(
				'icon-Costume' => 'Costume'
			),
			array(
				'icon-Couple-Sign' => 'Couple-Sign'
			),
			array(
				'icon-Cow' => 'Cow'
			),
			array(
				'icon-CPU' => 'CPU'
			),
			array(
				'icon-Crane' => 'Crane'
			),
			array(
				'icon-Cranium' => 'Cranium'
			),
			array(
				'icon-Credit-Card' => 'Credit-Card'
			),
			array(
				'icon-Credit-Card2' => 'Credit-Card2'
			),
			array(
				'icon-Credit-Card3' => 'Credit-Card3'
			),
			array(
				'icon-Cricket' => 'Cricket'
			),
			array(
				'icon-Criminal' => 'Criminal'
			),
			array(
				'icon-Croissant' => 'Croissant'
			),
			array(
				'icon-Crop-2' => 'Crop-2'
			),
			array(
				'icon-Crop-3' => 'Crop-3'
			),
			array(
				'icon-Crown-2' => 'Crown-2'
			),
			array(
				'icon-Crown' => 'Crown'
			),
			array(
				'icon-Crying' => 'Crying'
			),
			array(
				'icon-Cube-Molecule' => 'Cube-Molecule'
			),
			array(
				'icon-Cube-Molecule2' => 'Cube-Molecule2'
			),
			array(
				'icon-Cupcake' => 'Cupcake'
			),
			array(
				'icon-Cursor-Click' => 'Cursor-Click'
			),
			array(
				'icon-Cursor-Click2' => 'Cursor-Click2'
			),
			array(
				'icon-Cursor-Move' => 'Cursor-Move'
			),
			array(
				'icon-Cursor-Move2' => 'Cursor-Move2'
			),
			array(
				'icon-Cursor-Select' => 'Cursor-Select'
			),
			array(
				'icon-Cursor' => 'Cursor'
			),
			array(
				'icon-D-Eyeglasses' => 'D-Eyeglasses'
			),
			array(
				'icon-D-Eyeglasses2' => 'D-Eyeglasses2'
			),
			array(
				'icon-Dam' => 'Dam'
			),
			array(
				'icon-Danemark' => 'Danemark'
			),
			array(
				'icon-Danger-2' => 'Danger-2'
			),
			array(
				'icon-Danger' => 'Danger'
			),
			array(
				'icon-Dashboard' => 'Dashboard'
			),
			array(
				'icon-Data-Backup' => 'Data-Backup'
			),
			array(
				'icon-Data-Block' => 'Data-Block'
			),
			array(
				'icon-Data-Center' => 'Data-Center'
			),
			array(
				'icon-Data-Clock' => 'Data-Clock'
			),
			array(
				'icon-Data-Cloud' => 'Data-Cloud'
			),
			array(
				'icon-Data-Compress' => 'Data-Compress'
			),
			array(
				'icon-Data-Copy' => 'Data-Copy'
			),
			array(
				'icon-Data-Download' => 'Data-Download'
			),
			array(
				'icon-Data-Financial' => 'Data-Financial'
			),
			array(
				'icon-Data-Key' => 'Data-Key'
			),
			array(
				'icon-Data-Lock' => 'Data-Lock'
			),
			array(
				'icon-Data-Network' => 'Data-Network'
			),
			array(
				'icon-Data-Password' => 'Data-Password'
			),
			array(
				'icon-Data-Power' => 'Data-Power'
			),
			array(
				'icon-Data-Refresh' => 'Data-Refresh'
			),
			array(
				'icon-Data-Save' => 'Data-Save'
			),
			array(
				'icon-Data-Search' => 'Data-Search'
			),
			array(
				'icon-Data-Security' => 'Data-Security'
			),
			array(
				'icon-Data-Settings' => 'Data-Settings'
			),
			array(
				'icon-Data-Sharing' => 'Data-Sharing'
			),
			array(
				'icon-Data-Shield' => 'Data-Shield'
			),
			array(
				'icon-Data-Signal' => 'Data-Signal'
			),
			array(
				'icon-Data-Storage' => 'Data-Storage'
			),
			array(
				'icon-Data-Stream' => 'Data-Stream'
			),
			array(
				'icon-Data-Transfer' => 'Data-Transfer'
			),
			array(
				'icon-Data-Unlock' => 'Data-Unlock'
			),
			array(
				'icon-Data-Upload' => 'Data-Upload'
			),
			array(
				'icon-Data-Yes' => 'Data-Yes'
			),
			array(
				'icon-Data' => 'Data'
			),
			array(
				'icon-David-Star' => 'David-Star'
			),
			array(
				'icon-Daylight' => 'Daylight'
			),
			array(
				'icon-Death' => 'Death'
			),
			array(
				'icon-Debian' => 'Debian'
			),
			array(
				'icon-Dec' => 'Dec'
			),
			array(
				'icon-Decrase-Inedit' => 'Decrase-Inedit'
			),
			array(
				'icon-Deer-2' => 'Deer-2'
			),
			array(
				'icon-Deer' => 'Deer'
			),
			array(
				'icon-Delete-File' => 'Delete-File'
			),
			array(
				'icon-Delete-Window' => 'Delete-Window'
			),
			array(
				'icon-Delicious' => 'Delicious'
			),
			array(
				'icon-Depression' => 'Depression'
			),
			array(
				'icon-Deviantart' => 'Deviantart'
			),
			array(
				'icon-Device-SyncwithCloud' => 'Device-SyncwithCloud'
			),
			array(
				'icon-Diamond' => 'Diamond'
			),
			array(
				'icon-Dice-2' => 'Dice-2'
			),
			array(
				'icon-Dice' => 'Dice'
			),
			array(
				'icon-Digg' => 'Digg'
			),
			array(
				'icon-Digital-Drawing' => 'Digital-Drawing'
			),
			array(
				'icon-Diigo' => 'Diigo'
			),
			array(
				'icon-Dinosaur' => 'Dinosaur'
			),
			array(
				'icon-Diploma-2' => 'Diploma-2'
			),
			array(
				'icon-Diploma' => 'Diploma'
			),
			array(
				'icon-Direction-East' => 'Direction-East'
			),
			array(
				'icon-Direction-North' => 'Direction-North'
			),
			array(
				'icon-Direction-South' => 'Direction-South'
			),
			array(
				'icon-Direction-West' => 'Direction-West'
			),
			array(
				'icon-Director' => 'Director'
			),
			array(
				'icon-Disk' => 'Disk'
			),
			array(
				'icon-Dj' => 'Dj'
			),
			array(
				'icon-DNA-2' => 'DNA-2'
			),
			array(
				'icon-DNA-Helix' => 'DNA-Helix'
			),
			array(
				'icon-DNA' => 'DNA'
			),
			array(
				'icon-Doctor' => 'Doctor'
			),
			array(
				'icon-Dog' => 'Dog'
			),
			array(
				'icon-Dollar-Sign' => 'Dollar-Sign'
			),
			array(
				'icon-Dollar-Sign2' => 'Dollar-Sign2'
			),
			array(
				'icon-Dollar' => 'Dollar'
			),
			array(
				'icon-Dolphin' => 'Dolphin'
			),
			array(
				'icon-Domino' => 'Domino'
			),
			array(
				'icon-Door-Hanger' => 'Door-Hanger'
			),
			array(
				'icon-Door' => 'Door'
			),
			array(
				'icon-Doplr' => 'Doplr'
			),
			array(
				'icon-Double-Circle' => 'Double-Circle'
			),
			array(
				'icon-Double-Tap' => 'Double-Tap'
			),
			array(
				'icon-Doughnut' => 'Doughnut'
			),
			array(
				'icon-Dove' => 'Dove'
			),
			array(
				'icon-Down-2' => 'Down-2'
			),
			array(
				'icon-Down-3' => 'Down-3'
			),
			array(
				'icon-Down-4' => 'Down-4'
			),
			array(
				'icon-Down' => 'Down'
			),
			array(
				'icon-Download-2' => 'Download-2'
			),
			array(
				'icon-Download-fromCloud' => 'Download-fromCloud'
			),
			array(
				'icon-Download-Window' => 'Download-Window'
			),
			array(
				'icon-Download' => 'Download'
			),
			array(
				'icon-Downward' => 'Downward'
			),
			array(
				'icon-Drag-Down' => 'Drag-Down'
			),
			array(
				'icon-Drag-Left' => 'Drag-Left'
			),
			array(
				'icon-Drag-Right' => 'Drag-Right'
			),
			array(
				'icon-Drag-Up' => 'Drag-Up'
			),
			array(
				'icon-Drag' => 'Drag'
			),
			array(
				'icon-Dress' => 'Dress'
			),
			array(
				'icon-Drill-2' => 'Drill-2'
			),
			array(
				'icon-Drill' => 'Drill'
			),
			array(
				'icon-Drop' => 'Drop'
			),
			array(
				'icon-Dropbox' => 'Dropbox'
			),
			array(
				'icon-Drum' => 'Drum'
			),
			array(
				'icon-Dry' => 'Dry'
			),
			array(
				'icon-Duck' => 'Duck'
			),
			array(
				'icon-Dumbbell' => 'Dumbbell'
			),
			array(
				'icon-Duplicate-Layer' => 'Duplicate-Layer'
			),
			array(
				'icon-Duplicate-Window' => 'Duplicate-Window'
			),
			array(
				'icon-DVD' => 'DVD'
			),
			array(
				'icon-Eagle' => 'Eagle'
			),
			array(
				'icon-Ear' => 'Ear'
			),
			array(
				'icon-Earphones-2' => 'Earphones-2'
			),
			array(
				'icon-Earphones' => 'Earphones'
			),
			array(
				'icon-Eci-Icon' => 'Eci-Icon'
			),
			array(
				'icon-Edit-Map' => 'Edit-Map'
			),
			array(
				'icon-Edit' => 'Edit'
			),
			array(
				'icon-Eggs' => 'Eggs'
			),
			array(
				'icon-Egypt' => 'Egypt'
			),
			array(
				'icon-Eifel-Tower' => 'Eifel-Tower'
			),
			array(
				'icon-eject-2' => 'eject-2'
			),
			array(
				'icon-Eject' => 'Eject'
			),
			array(
				'icon-El-Castillo' => 'El-Castillo'
			),
			array(
				'icon-Elbow' => 'Elbow'
			),
			array(
				'icon-Electric-Guitar' => 'Electric-Guitar'
			),
			array(
				'icon-Electricity' => 'Electricity'
			),
			array(
				'icon-Elephant' => 'Elephant'
			),
			array(
				'icon-Email' => 'Email'
			),
			array(
				'icon-Embassy' => 'Embassy'
			),
			array(
				'icon-Empire-StateBuilding' => 'Empire-StateBuilding'
			),
			array(
				'icon-Empty-Box' => 'Empty-Box'
			),
			array(
				'icon-End2' => 'End2'
			),
			array(
				'icon-End-2' => 'End-2'
			),
			array(
				'icon-End' => 'End'
			),
			array(
				'icon-Endways' => 'Endways'
			),
			array(
				'icon-Engineering' => 'Engineering'
			),
			array(
				'icon-Envelope-2' => 'Envelope-2'
			),
			array(
				'icon-Envelope' => 'Envelope'
			),
			array(
				'icon-Environmental-2' => 'Environmental-2'
			),
			array(
				'icon-Environmental-3' => 'Environmental-3'
			),
			array(
				'icon-Environmental' => 'Environmental'
			),
			array(
				'icon-Equalizer' => 'Equalizer'
			),
			array(
				'icon-Eraser-2' => 'Eraser-2'
			),
			array(
				'icon-Eraser-3' => 'Eraser-3'
			),
			array(
				'icon-Eraser' => 'Eraser'
			),
			array(
				'icon-Error-404Window' => 'Error-404Window'
			),
			array(
				'icon-Euro-Sign' => 'Euro-Sign'
			),
			array(
				'icon-Euro-Sign2' => 'Euro-Sign2'
			),
			array(
				'icon-Euro' => 'Euro'
			),
			array(
				'icon-Evernote' => 'Evernote'
			),
			array(
				'icon-Evil' => 'Evil'
			),
			array(
				'icon-Explode' => 'Explode'
			),
			array(
				'icon-Eye-2' => 'Eye-2'
			),
			array(
				'icon-Eye-Blind' => 'Eye-Blind'
			),
			array(
				'icon-Eye-Invisible' => 'Eye-Invisible'
			),
			array(
				'icon-Eye-Scan' => 'Eye-Scan'
			),
			array(
				'icon-Eye-Visible' => 'Eye-Visible'
			),
			array(
				'icon-Eye' => 'Eye'
			),
			array(
				'icon-Eyebrow-2' => 'Eyebrow-2'
			),
			array(
				'icon-Eyebrow-3' => 'Eyebrow-3'
			),
			array(
				'icon-Eyebrow' => 'Eyebrow'
			),
			array(
				'icon-Eyeglasses-Smiley' => 'Eyeglasses-Smiley'
			),
			array(
				'icon-Eyeglasses-Smiley2' => 'Eyeglasses-Smiley2'
			),
			array(
				'icon-Face-Style' => 'Face-Style'
			),
			array(
				'icon-Face-Style2' => 'Face-Style2'
			),
			array(
				'icon-Face-Style3' => 'Face-Style3'
			),
			array(
				'icon-Face-Style4' => 'Face-Style4'
			),
			array(
				'icon-Face-Style5' => 'Face-Style5'
			),
			array(
				'icon-Face-Style6' => 'Face-Style6'
			),
			array(
				'icon-Facebook-2' => 'Facebook-2'
			),
			array(
				'icon-Facebook' => 'Facebook'
			),
			array(
				'icon-Factory-2' => 'Factory-2'
			),
			array(
				'icon-Factory' => 'Factory'
			),
			array(
				'icon-Fahrenheit' => 'Fahrenheit'
			),
			array(
				'icon-Family-Sign' => 'Family-Sign'
			),
			array(
				'icon-Fan' => 'Fan'
			),
			array(
				'icon-Farmer' => 'Farmer'
			),
			array(
				'icon-Fashion' => 'Fashion'
			),
			array(
				'icon-Favorite-Window' => 'Favorite-Window'
			),
			array(
				'icon-Fax' => 'Fax'
			),
			array(
				'icon-Feather' => 'Feather'
			),
			array(
				'icon-Feedburner' => 'Feedburner'
			),
			array(
				'icon-Female-2' => 'Female-2'
			),
			array(
				'icon-Female-Sign' => 'Female-Sign'
			),
			array(
				'icon-Female' => 'Female'
			),
			array(
				'icon-File-Block' => 'File-Block'
			),
			array(
				'icon-File-Bookmark' => 'File-Bookmark'
			),
			array(
				'icon-File-Chart' => 'File-Chart'
			),
			array(
				'icon-File-Clipboard' => 'File-Clipboard'
			),
			array(
				'icon-File-ClipboardFileText' => 'File-ClipboardFileText'
			),
			array(
				'icon-File-ClipboardTextImage' => 'File-ClipboardTextImage'
			),
			array(
				'icon-File-Cloud' => 'File-Cloud'
			),
			array(
				'icon-File-Copy' => 'File-Copy'
			),
			array(
				'icon-File-Copy2' => 'File-Copy2'
			),
			array(
				'icon-File-CSV' => 'File-CSV'
			),
			array(
				'icon-File-Download' => 'File-Download'
			),
			array(
				'icon-File-Edit' => 'File-Edit'
			),
			array(
				'icon-File-Excel' => 'File-Excel'
			),
			array(
				'icon-File-Favorite' => 'File-Favorite'
			),
			array(
				'icon-File-Fire' => 'File-Fire'
			),
			array(
				'icon-File-Graph' => 'File-Graph'
			),
			array(
				'icon-File-Hide' => 'File-Hide'
			),
			array(
				'icon-File-Horizontal' => 'File-Horizontal'
			),
			array(
				'icon-File-HorizontalText' => 'File-HorizontalText'
			),
			array(
				'icon-File-HTML' => 'File-HTML'
			),
			array(
				'icon-File-JPG' => 'File-JPG'
			),
			array(
				'icon-File-Link' => 'File-Link'
			),
			array(
				'icon-File-Loading' => 'File-Loading'
			),
			array(
				'icon-File-Lock' => 'File-Lock'
			),
			array(
				'icon-File-Love' => 'File-Love'
			),
			array(
				'icon-File-Music' => 'File-Music'
			),
			array(
				'icon-File-Network' => 'File-Network'
			),
			array(
				'icon-File-Pictures' => 'File-Pictures'
			),
			array(
				'icon-File-Pie' => 'File-Pie'
			),
			array(
				'icon-File-Presentation' => 'File-Presentation'
			),
			array(
				'icon-File-Refresh' => 'File-Refresh'
			),
			array(
				'icon-File-Search' => 'File-Search'
			),
			array(
				'icon-File-Settings' => 'File-Settings'
			),
			array(
				'icon-File-Share' => 'File-Share'
			),
			array(
				'icon-File-TextImage' => 'File-TextImage'
			),
			array(
				'icon-File-Trash' => 'File-Trash'
			),
			array(
				'icon-File-TXT' => 'File-TXT'
			),
			array(
				'icon-File-Upload' => 'File-Upload'
			),
			array(
				'icon-File-Video' => 'File-Video'
			),
			array(
				'icon-File-Word' => 'File-Word'
			),
			array(
				'icon-File-Zip' => 'File-Zip'
			),
			array(
				'icon-File' => 'File'
			),
			array(
				'icon-Files' => 'Files'
			),
			array(
				'icon-Film-Board' => 'Film-Board'
			),
			array(
				'icon-Film-Cartridge' => 'Film-Cartridge'
			),
			array(
				'icon-Film-Strip' => 'Film-Strip'
			),
			array(
				'icon-Film-Video' => 'Film-Video'
			),
			array(
				'icon-Film' => 'Film'
			),
			array(
				'icon-Filter-2' => 'Filter-2'
			),
			array(
				'icon-Filter' => 'Filter'
			),
			array(
				'icon-Financial' => 'Financial'
			),
			array(
				'icon-Find-User' => 'Find-User'
			),
			array(
				'icon-Finger-DragFourSides' => 'Finger-DragFourSides'
			),
			array(
				'icon-Finger-DragTwoSides' => 'Finger-DragTwoSides'
			),
			array(
				'icon-Finger-Print' => 'Finger-Print'
			),
			array(
				'icon-Finger' => 'Finger'
			),
			array(
				'icon-Fingerprint-2' => 'Fingerprint-2'
			),
			array(
				'icon-Fingerprint' => 'Fingerprint'
			),
			array(
				'icon-Fire-Flame' => 'Fire-Flame'
			),
			array(
				'icon-Fire-Flame2' => 'Fire-Flame2'
			),
			array(
				'icon-Fire-Hydrant' => 'Fire-Hydrant'
			),
			array(
				'icon-Fire-Staion' => 'Fire-Staion'
			),
			array(
				'icon-Firefox' => 'Firefox'
			),
			array(
				'icon-Firewall' => 'Firewall'
			),
			array(
				'icon-First-Aid' => 'First-Aid'
			),
			array(
				'icon-First' => 'First'
			),
			array(
				'icon-Fish-Food' => 'Fish-Food'
			),
			array(
				'icon-Fish' => 'Fish'
			),
			array(
				'icon-Fit-To' => 'Fit-To'
			),
			array(
				'icon-Fit-To2' => 'Fit-To2'
			),
			array(
				'icon-Five-Fingers' => 'Five-Fingers'
			),
			array(
				'icon-Five-FingersDrag' => 'Five-FingersDrag'
			),
			array(
				'icon-Five-FingersDrag2' => 'Five-FingersDrag2'
			),
			array(
				'icon-Five-FingersTouch' => 'Five-FingersTouch'
			),
			array(
				'icon-Flag-2' => 'Flag-2'
			),
			array(
				'icon-Flag-3' => 'Flag-3'
			),
			array(
				'icon-Flag-4' => 'Flag-4'
			),
			array(
				'icon-Flag-5' => 'Flag-5'
			),
			array(
				'icon-Flag-6' => 'Flag-6'
			),
			array(
				'icon-Flag' => 'Flag'
			),
			array(
				'icon-Flamingo' => 'Flamingo'
			),
			array(
				'icon-Flash-2' => 'Flash-2'
			),
			array(
				'icon-Flash-Video' => 'Flash-Video'
			),
			array(
				'icon-Flash' => 'Flash'
			),
			array(
				'icon-Flashlight' => 'Flashlight'
			),
			array(
				'icon-Flask-2' => 'Flask-2'
			),
			array(
				'icon-Flask' => 'Flask'
			),
			array(
				'icon-Flick' => 'Flick'
			),
			array(
				'icon-Flickr' => 'Flickr'
			),
			array(
				'icon-Flowerpot' => 'Flowerpot'
			),
			array(
				'icon-Fluorescent' => 'Fluorescent'
			),
			array(
				'icon-Fog-Day' => 'Fog-Day'
			),
			array(
				'icon-Fog-Night' => 'Fog-Night'
			),
			array(
				'icon-Folder-Add' => 'Folder-Add'
			),
			array(
				'icon-Folder-Archive' => 'Folder-Archive'
			),
			array(
				'icon-Folder-Binder' => 'Folder-Binder'
			),
			array(
				'icon-Folder-Binder2' => 'Folder-Binder2'
			),
			array(
				'icon-Folder-Block' => 'Folder-Block'
			),
			array(
				'icon-Folder-Bookmark' => 'Folder-Bookmark'
			),
			array(
				'icon-Folder-Close' => 'Folder-Close'
			),
			array(
				'icon-Folder-Cloud' => 'Folder-Cloud'
			),
			array(
				'icon-Folder-Delete' => 'Folder-Delete'
			),
			array(
				'icon-Folder-Download' => 'Folder-Download'
			),
			array(
				'icon-Folder-Edit' => 'Folder-Edit'
			),
			array(
				'icon-Folder-Favorite' => 'Folder-Favorite'
			),
			array(
				'icon-Folder-Fire' => 'Folder-Fire'
			),
			array(
				'icon-Folder-Hide' => 'Folder-Hide'
			),
			array(
				'icon-Folder-Link' => 'Folder-Link'
			),
			array(
				'icon-Folder-Loading' => 'Folder-Loading'
			),
			array(
				'icon-Folder-Lock' => 'Folder-Lock'
			),
			array(
				'icon-Folder-Love' => 'Folder-Love'
			),
			array(
				'icon-Folder-Music' => 'Folder-Music'
			),
			array(
				'icon-Folder-Network' => 'Folder-Network'
			),
			array(
				'icon-Folder-Open' => 'Folder-Open'
			),
			array(
				'icon-Folder-Open2' => 'Folder-Open2'
			),
			array(
				'icon-Folder-Organizing' => 'Folder-Organizing'
			),
			array(
				'icon-Folder-Pictures' => 'Folder-Pictures'
			),
			array(
				'icon-Folder-Refresh' => 'Folder-Refresh'
			),
			array(
				'icon-Folder-Remove-' => 'Folder-Remove-'
			),
			array(
				'icon-Folder-Search' => 'Folder-Search'
			),
			array(
				'icon-Folder-Settings' => 'Folder-Settings'
			),
			array(
				'icon-Folder-Share' => 'Folder-Share'
			),
			array(
				'icon-Folder-Trash' => 'Folder-Trash'
			),
			array(
				'icon-Folder-Upload' => 'Folder-Upload'
			),
			array(
				'icon-Folder-Video' => 'Folder-Video'
			),
			array(
				'icon-Folder-WithDocument' => 'Folder-WithDocument'
			),
			array(
				'icon-Folder-Zip' => 'Folder-Zip'
			),
			array(
				'icon-Folder' => 'Folder'
			),
			array(
				'icon-Folders' => 'Folders'
			),
			array(
				'icon-Font-Color' => 'Font-Color'
			),
			array(
				'icon-Font-Name' => 'Font-Name'
			),
			array(
				'icon-Font-Size' => 'Font-Size'
			),
			array(
				'icon-Font-Style' => 'Font-Style'
			),
			array(
				'icon-Font-StyleSubscript' => 'Font-StyleSubscript'
			),
			array(
				'icon-Font-StyleSuperscript' => 'Font-StyleSuperscript'
			),
			array(
				'icon-Font-Window' => 'Font-Window'
			),
			array(
				'icon-Foot-2' => 'Foot-2'
			),
			array(
				'icon-Foot' => 'Foot'
			),
			array(
				'icon-Football-2' => 'Football-2'
			),
			array(
				'icon-Football' => 'Football'
			),
			array(
				'icon-Footprint-2' => 'Footprint-2'
			),
			array(
				'icon-Footprint-3' => 'Footprint-3'
			),
			array(
				'icon-Footprint' => 'Footprint'
			),
			array(
				'icon-Forest' => 'Forest'
			),
			array(
				'icon-Fork' => 'Fork'
			),
			array(
				'icon-Formspring' => 'Formspring'
			),
			array(
				'icon-Formula' => 'Formula'
			),
			array(
				'icon-Forsquare' => 'Forsquare'
			),
			array(
				'icon-Forward' => 'Forward'
			),
			array(
				'icon-Fountain-Pen' => 'Fountain-Pen'
			),
			array(
				'icon-Four-Fingers' => 'Four-Fingers'
			),
			array(
				'icon-Four-FingersDrag' => 'Four-FingersDrag'
			),
			array(
				'icon-Four-FingersDrag2' => 'Four-FingersDrag2'
			),
			array(
				'icon-Four-FingersTouch' => 'Four-FingersTouch'
			),
			array(
				'icon-Fox' => 'Fox'
			),
			array(
				'icon-Frankenstein' => 'Frankenstein'
			),
			array(
				'icon-French-Fries' => 'French-Fries'
			),
			array(
				'icon-Friendfeed' => 'Friendfeed'
			),
			array(
				'icon-Friendster' => 'Friendster'
			),
			array(
				'icon-Frog' => 'Frog'
			),
			array(
				'icon-Fruits' => 'Fruits'
			),
			array(
				'icon-Fuel' => 'Fuel'
			),
			array(
				'icon-Full-Bag' => 'Full-Bag'
			),
			array(
				'icon-Full-Basket' => 'Full-Basket'
			),
			array(
				'icon-Full-Cart' => 'Full-Cart'
			),
			array(
				'icon-Full-Moon' => 'Full-Moon'
			),
			array(
				'icon-Full-Screen' => 'Full-Screen'
			),
			array(
				'icon-Full-Screen2' => 'Full-Screen2'
			),
			array(
				'icon-Full-View' => 'Full-View'
			),
			array(
				'icon-Full-View2' => 'Full-View2'
			),
			array(
				'icon-Full-ViewWindow' => 'Full-ViewWindow'
			),
			array(
				'icon-Function' => 'Function'
			),
			array(
				'icon-Funky' => 'Funky'
			),
			array(
				'icon-Funny-Bicycle' => 'Funny-Bicycle'
			),
			array(
				'icon-Furl' => 'Furl'
			),
			array(
				'icon-Gamepad-2' => 'Gamepad-2'
			),
			array(
				'icon-Gamepad' => 'Gamepad'
			),
			array(
				'icon-Gas-Pump' => 'Gas-Pump'
			),
			array(
				'icon-Gaugage-2' => 'Gaugage-2'
			),
			array(
				'icon-Gaugage' => 'Gaugage'
			),
			array(
				'icon-Gay' => 'Gay'
			),
			array(
				'icon-Gear-2' => 'Gear-2'
			),
			array(
				'icon-Gear' => 'Gear'
			),
			array(
				'icon-Gears-2' => 'Gears-2'
			),
			array(
				'icon-Gears' => 'Gears'
			),
			array(
				'icon-Geek-2' => 'Geek-2'
			),
			array(
				'icon-Geek' => 'Geek'
			),
			array(
				'icon-Gemini-2' => 'Gemini-2'
			),
			array(
				'icon-Gemini' => 'Gemini'
			),
			array(
				'icon-Genius' => 'Genius'
			),
			array(
				'icon-Gentleman' => 'Gentleman'
			),
			array(
				'icon-Geo—' => 'Geo—'
			),
			array(
				'icon-Geo-' => 'Geo-'
			),
			array(
				'icon-Geo-Close' => 'Geo-Close'
			),
			array(
				'icon-Geo-Love' => 'Geo-Love'
			),
			array(
				'icon-Geo-Number' => 'Geo-Number'
			),
			array(
				'icon-Geo-Star' => 'Geo-Star'
			),
			array(
				'icon-Geo' => 'Geo'
			),
			array(
				'icon-Geo2—' => 'Geo2—'
			),
			array(
				'icon-Geo2-' => 'Geo2-'
			),
			array(
				'icon-Geo2-Close' => 'Geo2-Close'
			),
			array(
				'icon-Geo2-Love' => 'Geo2-Love'
			),
			array(
				'icon-Geo2-Number' => 'Geo2-Number'
			),
			array(
				'icon-Geo2-Star' => 'Geo2-Star'
			),
			array(
				'icon-Geo2' => 'Geo2'
			),
			array(
				'icon-Geo3—' => 'Geo3—'
			),
			array(
				'icon-Geo3-' => 'Geo3-'
			),
			array(
				'icon-Geo3-Close' => 'Geo3-Close'
			),
			array(
				'icon-Geo3-Love' => 'Geo3-Love'
			),
			array(
				'icon-Geo3-Number' => 'Geo3-Number'
			),
			array(
				'icon-Geo3-Star' => 'Geo3-Star'
			),
			array(
				'icon-Geo3' => 'Geo3'
			),
			array(
				'icon-Gey' => 'Gey'
			),
			array(
				'icon-Gift-Box' => 'Gift-Box'
			),
			array(
				'icon-Giraffe' => 'Giraffe'
			),
			array(
				'icon-Girl' => 'Girl'
			),
			array(
				'icon-Glass-Water' => 'Glass-Water'
			),
			array(
				'icon-Glasses-2' => 'Glasses-2'
			),
			array(
				'icon-Glasses-3' => 'Glasses-3'
			),
			array(
				'icon-Glasses' => 'Glasses'
			),
			array(
				'icon-Global-Position' => 'Global-Position'
			),
			array(
				'icon-Globe-2' => 'Globe-2'
			),
			array(
				'icon-Globe' => 'Globe'
			),
			array(
				'icon-Gloves' => 'Gloves'
			),
			array(
				'icon-Go-Bottom' => 'Go-Bottom'
			),
			array(
				'icon-Go-Top' => 'Go-Top'
			),
			array(
				'icon-Goggles' => 'Goggles'
			),
			array(
				'icon-Golf-2' => 'Golf-2'
			),
			array(
				'icon-Golf' => 'Golf'
			),
			array(
				'icon-Google-Buzz' => 'Google-Buzz'
			),
			array(
				'icon-Google-Drive' => 'Google-Drive'
			),
			array(
				'icon-Google-Play' => 'Google-Play'
			),
			array(
				'icon-Google-Plus' => 'Google-Plus'
			),
			array(
				'icon-Google' => 'Google'
			),
			array(
				'icon-Gopro' => 'Gopro'
			),
			array(
				'icon-Gorilla' => 'Gorilla'
			),
			array(
				'icon-Gowalla' => 'Gowalla'
			),
			array(
				'icon-Grave' => 'Grave'
			),
			array(
				'icon-Graveyard' => 'Graveyard'
			),
			array(
				'icon-Greece' => 'Greece'
			),
			array(
				'icon-Green-Energy' => 'Green-Energy'
			),
			array(
				'icon-Green-House' => 'Green-House'
			),
			array(
				'icon-Guitar' => 'Guitar'
			),
			array(
				'icon-Gun-2' => 'Gun-2'
			),
			array(
				'icon-Gun-3' => 'Gun-3'
			),
			array(
				'icon-Gun' => 'Gun'
			),
			array(
				'icon-Gymnastics' => 'Gymnastics'
			),
			array(
				'icon-Hair-2' => 'Hair-2'
			),
			array(
				'icon-Hair-3' => 'Hair-3'
			),
			array(
				'icon-Hair-4' => 'Hair-4'
			),
			array(
				'icon-Hair' => 'Hair'
			),
			array(
				'icon-Half-Moon' => 'Half-Moon'
			),
			array(
				'icon-Halloween-HalfMoon' => 'Halloween-HalfMoon'
			),
			array(
				'icon-Halloween-Moon' => 'Halloween-Moon'
			),
			array(
				'icon-Hamburger' => 'Hamburger'
			),
			array(
				'icon-Hammer' => 'Hammer'
			),
			array(
				'icon-Hand-Touch' => 'Hand-Touch'
			),
			array(
				'icon-Hand-Touch2' => 'Hand-Touch2'
			),
			array(
				'icon-Hand-TouchSmartphone' => 'Hand-TouchSmartphone'
			),
			array(
				'icon-Hand' => 'Hand'
			),
			array(
				'icon-Hands' => 'Hands'
			),
			array(
				'icon-Handshake' => 'Handshake'
			),
			array(
				'icon-Hanger' => 'Hanger'
			),
			array(
				'icon-Happy' => 'Happy'
			),
			array(
				'icon-Hat-2' => 'Hat-2'
			),
			array(
				'icon-Hat' => 'Hat'
			),
			array(
				'icon-Haunted-House' => 'Haunted-House'
			),
			array(
				'icon-HD-Video' => 'HD-Video'
			),
			array(
				'icon-HD' => 'HD'
			),
			array(
				'icon-HDD' => 'HDD'
			),
			array(
				'icon-Headphone' => 'Headphone'
			),
			array(
				'icon-Headphones' => 'Headphones'
			),
			array(
				'icon-Headset' => 'Headset'
			),
			array(
				'icon-Heart-2' => 'Heart-2'
			),
			array(
				'icon-Heart' => 'Heart'
			),
			array(
				'icon-Heels-2' => 'Heels-2'
			),
			array(
				'icon-Heels' => 'Heels'
			),
			array(
				'icon-Height-Window' => 'Height-Window'
			),
			array(
				'icon-Helicopter-2' => 'Helicopter-2'
			),
			array(
				'icon-Helicopter' => 'Helicopter'
			),
			array(
				'icon-Helix-2' => 'Helix-2'
			),
			array(
				'icon-Hello' => 'Hello'
			),
			array(
				'icon-Helmet-2' => 'Helmet-2'
			),
			array(
				'icon-Helmet-3' => 'Helmet-3'
			),
			array(
				'icon-Helmet' => 'Helmet'
			),
			array(
				'icon-Hipo' => 'Hipo'
			),
			array(
				'icon-Hipster-Glasses' => 'Hipster-Glasses'
			),
			array(
				'icon-Hipster-Glasses2' => 'Hipster-Glasses2'
			),
			array(
				'icon-Hipster-Glasses3' => 'Hipster-Glasses3'
			),
			array(
				'icon-Hipster-Headphones' => 'Hipster-Headphones'
			),
			array(
				'icon-Hipster-Men' => 'Hipster-Men'
			),
			array(
				'icon-Hipster-Men2' => 'Hipster-Men2'
			),
			array(
				'icon-Hipster-Men3' => 'Hipster-Men3'
			),
			array(
				'icon-Hipster-Sunglasses' => 'Hipster-Sunglasses'
			),
			array(
				'icon-Hipster-Sunglasses2' => 'Hipster-Sunglasses2'
			),
			array(
				'icon-Hipster-Sunglasses3' => 'Hipster-Sunglasses3'
			),
			array(
				'icon-Hokey' => 'Hokey'
			),
			array(
				'icon-Holly' => 'Holly'
			),
			array(
				'icon-Home-2' => 'Home-2'
			),
			array(
				'icon-Home-3' => 'Home-3'
			),
			array(
				'icon-Home-4' => 'Home-4'
			),
			array(
				'icon-Home-5' => 'Home-5'
			),
			array(
				'icon-Home-Window' => 'Home-Window'
			),
			array(
				'icon-Home' => 'Home'
			),
			array(
				'icon-Homosexual' => 'Homosexual'
			),
			array(
				'icon-Honey' => 'Honey'
			),
			array(
				'icon-Hong-Kong' => 'Hong-Kong'
			),
			array(
				'icon-Hoodie' => 'Hoodie'
			),
			array(
				'icon-Horror' => 'Horror'
			),
			array(
				'icon-Horse' => 'Horse'
			),
			array(
				'icon-Hospital-2' => 'Hospital-2'
			),
			array(
				'icon-Hospital' => 'Hospital'
			),
			array(
				'icon-Host' => 'Host'
			),
			array(
				'icon-Hot-Dog' => 'Hot-Dog'
			),
			array(
				'icon-Hotel' => 'Hotel'
			),
			array(
				'icon-Hour' => 'Hour'
			),
			array(
				'icon-Hub' => 'Hub'
			),
			array(
				'icon-Humor' => 'Humor'
			),
			array(
				'icon-Hurt' => 'Hurt'
			),
			array(
				'icon-Ice-Cream' => 'Ice-Cream'
			),
			array(
				'icon-ICQ' => 'ICQ'
			),
			array(
				'icon-ID-2' => 'ID-2'
			),
			array(
				'icon-ID-3' => 'ID-3'
			),
			array(
				'icon-ID-Card' => 'ID-Card'
			),
			array(
				'icon-Idea-2' => 'Idea-2'
			),
			array(
				'icon-Idea-3' => 'Idea-3'
			),
			array(
				'icon-Idea-4' => 'Idea-4'
			),
			array(
				'icon-Idea-5' => 'Idea-5'
			),
			array(
				'icon-Idea' => 'Idea'
			),
			array(
				'icon-Identification-Badge' => 'Identification-Badge'
			),
			array(
				'icon-ImDB' => 'ImDB'
			),
			array(
				'icon-Inbox-Empty' => 'Inbox-Empty'
			),
			array(
				'icon-Inbox-Forward' => 'Inbox-Forward'
			),
			array(
				'icon-Inbox-Full' => 'Inbox-Full'
			),
			array(
				'icon-Inbox-Into' => 'Inbox-Into'
			),
			array(
				'icon-Inbox-Out' => 'Inbox-Out'
			),
			array(
				'icon-Inbox-Reply' => 'Inbox-Reply'
			),
			array(
				'icon-Inbox' => 'Inbox'
			),
			array(
				'icon-Increase-Inedit' => 'Increase-Inedit'
			),
			array(
				'icon-Indent-FirstLine' => 'Indent-FirstLine'
			),
			array(
				'icon-Indent-LeftMargin' => 'Indent-LeftMargin'
			),
			array(
				'icon-Indent-RightMargin' => 'Indent-RightMargin'
			),
			array(
				'icon-India' => 'India'
			),
			array(
				'icon-Info-Window' => 'Info-Window'
			),
			array(
				'icon-Information' => 'Information'
			),
			array(
				'icon-Inifity' => 'Inifity'
			),
			array(
				'icon-Instagram' => 'Instagram'
			),
			array(
				'icon-Internet-2' => 'Internet-2'
			),
			array(
				'icon-Internet-Explorer' => 'Internet-Explorer'
			),
			array(
				'icon-Internet-Smiley' => 'Internet-Smiley'
			),
			array(
				'icon-Internet' => 'Internet'
			),
			array(
				'icon-iOS-Apple' => 'iOS-Apple'
			),
			array(
				'icon-Israel' => 'Israel'
			),
			array(
				'icon-Italic-Text' => 'Italic-Text'
			),
			array(
				'icon-Jacket-2' => 'Jacket-2'
			),
			array(
				'icon-Jacket' => 'Jacket'
			),
			array(
				'icon-Jamaica' => 'Jamaica'
			),
			array(
				'icon-Japan' => 'Japan'
			),
			array(
				'icon-Japanese-Gate' => 'Japanese-Gate'
			),
			array(
				'icon-Jeans' => 'Jeans'
			),
			array(
				'icon-Jeep-2' => 'Jeep-2'
			),
			array(
				'icon-Jeep' => 'Jeep'
			),
			array(
				'icon-Jet' => 'Jet'
			),
			array(
				'icon-Joystick' => 'Joystick'
			),
			array(
				'icon-Juice' => 'Juice'
			),
			array(
				'icon-Jump-Rope' => 'Jump-Rope'
			),
			array(
				'icon-Kangoroo' => 'Kangoroo'
			),
			array(
				'icon-Kenya' => 'Kenya'
			),
			array(
				'icon-Key-2' => 'Key-2'
			),
			array(
				'icon-Key-3' => 'Key-3'
			),
			array(
				'icon-Key-Lock' => 'Key-Lock'
			),
			array(
				'icon-Key' => 'Key'
			),
			array(
				'icon-Keyboard' => 'Keyboard'
			),
			array(
				'icon-Keyboard3' => 'Keyboard3'
			),
			array(
				'icon-Keypad' => 'Keypad'
			),
			array(
				'icon-King-2' => 'King-2'
			),
			array(
				'icon-King' => 'King'
			),
			array(
				'icon-Kiss' => 'Kiss'
			),
			array(
				'icon-Knee' => 'Knee'
			),
			array(
				'icon-Knife-2' => 'Knife-2'
			),
			array(
				'icon-Knife' => 'Knife'
			),
			array(
				'icon-Knight' => 'Knight'
			),
			array(
				'icon-Koala' => 'Koala'
			),
			array(
				'icon-Korea' => 'Korea'
			),
			array(
				'icon-Lamp' => 'Lamp'
			),
			array(
				'icon-Landscape-2' => 'Landscape-2'
			),
			array(
				'icon-Landscape' => 'Landscape'
			),
			array(
				'icon-Lantern' => 'Lantern'
			),
			array(
				'icon-Laptop-2' => 'Laptop-2'
			),
			array(
				'icon-Laptop-3' => 'Laptop-3'
			),
			array(
				'icon-Laptop-Phone' => 'Laptop-Phone'
			),
			array(
				'icon-Laptop-Secure' => 'Laptop-Secure'
			),
			array(
				'icon-Laptop-Tablet' => 'Laptop-Tablet'
			),
			array(
				'icon-Laptop' => 'Laptop'
			),
			array(
				'icon-Laser' => 'Laser'
			),
			array(
				'icon-Last-FM' => 'Last-FM'
			),
			array(
				'icon-Last' => 'Last'
			),
			array(
				'icon-Laughing' => 'Laughing'
			),
			array(
				'icon-Layer-1635' => 'Layer-1635'
			),
			array(
				'icon-Layer-1646' => 'Layer-1646'
			),
			array(
				'icon-Layer-Backward' => 'Layer-Backward'
			),
			array(
				'icon-Layer-Forward' => 'Layer-Forward'
			),
			array(
				'icon-Leafs-2' => 'Leafs-2'
			),
			array(
				'icon-Leafs' => 'Leafs'
			),
			array(
				'icon-Leaning-Tower' => 'Leaning-Tower'
			),
			array(
				'icon-Left--Right' => 'Left--Right'
			),
			array(
				'icon-Left--Right3' => 'Left--Right3'
			),
			array(
				'icon-Left-2' => 'Left-2'
			),
			array(
				'icon-Left-3' => 'Left-3'
			),
			array(
				'icon-Left-4' => 'Left-4'
			),
			array(
				'icon-Left-ToRight' => 'Left-ToRight'
			),
			array(
				'icon-Left' => 'Left'
			),
			array(
				'icon-Leg-2' => 'Leg-2'
			),
			array(
				'icon-Leg' => 'Leg'
			),
			array(
				'icon-Lego' => 'Lego'
			),
			array(
				'icon-Lemon' => 'Lemon'
			),
			array(
				'icon-Len-2' => 'Len-2'
			),
			array(
				'icon-Len-3' => 'Len-3'
			),
			array(
				'icon-Len' => 'Len'
			),
			array(
				'icon-Leo-2' => 'Leo-2'
			),
			array(
				'icon-Leo' => 'Leo'
			),
			array(
				'icon-Leopard' => 'Leopard'
			),
			array(
				'icon-Lesbian' => 'Lesbian'
			),
			array(
				'icon-Lesbians' => 'Lesbians'
			),
			array(
				'icon-Letter-Close' => 'Letter-Close'
			),
			array(
				'icon-Letter-Open' => 'Letter-Open'
			),
			array(
				'icon-Letter-Sent' => 'Letter-Sent'
			),
			array(
				'icon-Libra-2' => 'Libra-2'
			),
			array(
				'icon-Libra' => 'Libra'
			),
			array(
				'icon-Library-2' => 'Library-2'
			),
			array(
				'icon-Library' => 'Library'
			),
			array(
				'icon-Life-Jacket' => 'Life-Jacket'
			),
			array(
				'icon-Life-Safer' => 'Life-Safer'
			),
			array(
				'icon-Light-Bulb' => 'Light-Bulb'
			),
			array(
				'icon-Light-Bulb2' => 'Light-Bulb2'
			),
			array(
				'icon-Light-BulbLeaf' => 'Light-BulbLeaf'
			),
			array(
				'icon-Lighthouse' => 'Lighthouse'
			),
			array(
				'icon-Like-2' => 'Like-2'
			),
			array(
				'icon-Like' => 'Like'
			),
			array(
				'icon-Line-Chart' => 'Line-Chart'
			),
			array(
				'icon-Line-Chart2' => 'Line-Chart2'
			),
			array(
				'icon-Line-Chart3' => 'Line-Chart3'
			),
			array(
				'icon-Line-Chart4' => 'Line-Chart4'
			),
			array(
				'icon-Line-Spacing' => 'Line-Spacing'
			),
			array(
				'icon-Line-SpacingText' => 'Line-SpacingText'
			),
			array(
				'icon-Link-2' => 'Link-2'
			),
			array(
				'icon-Link' => 'Link'
			),
			array(
				'icon-Linkedin-2' => 'Linkedin-2'
			),
			array(
				'icon-Linkedin' => 'Linkedin'
			),
			array(
				'icon-Linux' => 'Linux'
			),
			array(
				'icon-Lion' => 'Lion'
			),
			array(
				'icon-Livejournal' => 'Livejournal'
			),
			array(
				'icon-Loading-2' => 'Loading-2'
			),
			array(
				'icon-Loading-3' => 'Loading-3'
			),
			array(
				'icon-Loading-Window' => 'Loading-Window'
			),
			array(
				'icon-Loading' => 'Loading'
			),
			array(
				'icon-Location-2' => 'Location-2'
			),
			array(
				'icon-Location' => 'Location'
			),
			array(
				'icon-Lock-2' => 'Lock-2'
			),
			array(
				'icon-Lock-3' => 'Lock-3'
			),
			array(
				'icon-Lock-User' => 'Lock-User'
			),
			array(
				'icon-Lock-Window' => 'Lock-Window'
			),
			array(
				'icon-Lock' => 'Lock'
			),
			array(
				'icon-Lollipop-2' => 'Lollipop-2'
			),
			array(
				'icon-Lollipop-3' => 'Lollipop-3'
			),
			array(
				'icon-Lollipop' => 'Lollipop'
			),
			array(
				'icon-Loop' => 'Loop'
			),
			array(
				'icon-Loud' => 'Loud'
			),
			array(
				'icon-Loudspeaker' => 'Loudspeaker'
			),
			array(
				'icon-Love-2' => 'Love-2'
			),
			array(
				'icon-Love-User' => 'Love-User'
			),
			array(
				'icon-Love-Window' => 'Love-Window'
			),
			array(
				'icon-Love' => 'Love'
			),
			array(
				'icon-Lowercase-Text' => 'Lowercase-Text'
			),
			array(
				'icon-Luggafe-Front' => 'Luggafe-Front'
			),
			array(
				'icon-Luggage-2' => 'Luggage-2'
			),
			array(
				'icon-Macro' => 'Macro'
			),
			array(
				'icon-Magic-Wand' => 'Magic-Wand'
			),
			array(
				'icon-Magnet' => 'Magnet'
			),
			array(
				'icon-Magnifi-Glass-' => 'Magnifi-Glass-'
			),
			array(
				'icon-Magnifi-Glass' => 'Magnifi-Glass'
			),
			array(
				'icon-Magnifi-Glass2' => 'Magnifi-Glass2'
			),
			array(
				'icon-Mail-2' => 'Mail-2'
			),
			array(
				'icon-Mail-3' => 'Mail-3'
			),
			array(
				'icon-Mail-Add' => 'Mail-Add'
			),
			array(
				'icon-Mail-Attachement' => 'Mail-Attachement'
			),
			array(
				'icon-Mail-Block' => 'Mail-Block'
			),
			array(
				'icon-Mail-Delete' => 'Mail-Delete'
			),
			array(
				'icon-Mail-Favorite' => 'Mail-Favorite'
			),
			array(
				'icon-Mail-Forward' => 'Mail-Forward'
			),
			array(
				'icon-Mail-Gallery' => 'Mail-Gallery'
			),
			array(
				'icon-Mail-Inbox' => 'Mail-Inbox'
			),
			array(
				'icon-Mail-Link' => 'Mail-Link'
			),
			array(
				'icon-Mail-Lock' => 'Mail-Lock'
			),
			array(
				'icon-Mail-Love' => 'Mail-Love'
			),
			array(
				'icon-Mail-Money' => 'Mail-Money'
			),
			array(
				'icon-Mail-Open' => 'Mail-Open'
			),
			array(
				'icon-Mail-Outbox' => 'Mail-Outbox'
			),
			array(
				'icon-Mail-Password' => 'Mail-Password'
			),
			array(
				'icon-Mail-Photo' => 'Mail-Photo'
			),
			array(
				'icon-Mail-Read' => 'Mail-Read'
			),
			array(
				'icon-Mail-Removex' => 'Mail-Removex'
			),
			array(
				'icon-Mail-Reply' => 'Mail-Reply'
			),
			array(
				'icon-Mail-ReplyAll' => 'Mail-ReplyAll'
			),
			array(
				'icon-Mail-Search' => 'Mail-Search'
			),
			array(
				'icon-Mail-Send' => 'Mail-Send'
			),
			array(
				'icon-Mail-Settings' => 'Mail-Settings'
			),
			array(
				'icon-Mail-Unread' => 'Mail-Unread'
			),
			array(
				'icon-Mail-Video' => 'Mail-Video'
			),
			array(
				'icon-Mail-withAtSign' => 'Mail-withAtSign'
			),
			array(
				'icon-Mail-WithCursors' => 'Mail-WithCursors'
			),
			array(
				'icon-Mail' => 'Mail'
			),
			array(
				'icon-Mailbox-Empty' => 'Mailbox-Empty'
			),
			array(
				'icon-Mailbox-Full' => 'Mailbox-Full'
			),
			array(
				'icon-Male-2' => 'Male-2'
			),
			array(
				'icon-Male-Sign' => 'Male-Sign'
			),
			array(
				'icon-Male' => 'Male'
			),
			array(
				'icon-MaleFemale' => 'MaleFemale'
			),
			array(
				'icon-Man-Sign' => 'Man-Sign'
			),
			array(
				'icon-Management' => 'Management'
			),
			array(
				'icon-Mans-Underwear' => 'Mans-Underwear'
			),
			array(
				'icon-Mans-Underwear2' => 'Mans-Underwear2'
			),
			array(
				'icon-Map-Marker' => 'Map-Marker'
			),
			array(
				'icon-Map-Marker2' => 'Map-Marker2'
			),
			array(
				'icon-Map-Marker3' => 'Map-Marker3'
			),
			array(
				'icon-Map' => 'Map'
			),
			array(
				'icon-Map2' => 'Map2'
			),
			array(
				'icon-Marker-2' => 'Marker-2'
			),
			array(
				'icon-Marker-3' => 'Marker-3'
			),
			array(
				'icon-Marker' => 'Marker'
			),
			array(
				'icon-Martini-Glass' => 'Martini-Glass'
			),
			array(
				'icon-Mask' => 'Mask'
			),
			array(
				'icon-Master-Card' => 'Master-Card'
			),
			array(
				'icon-Maximize-Window' => 'Maximize-Window'
			),
			array(
				'icon-Maximize' => 'Maximize'
			),
			array(
				'icon-Medal-2' => 'Medal-2'
			),
			array(
				'icon-Medal-3' => 'Medal-3'
			),
			array(
				'icon-Medal' => 'Medal'
			),
			array(
				'icon-Medical-Sign' => 'Medical-Sign'
			),
			array(
				'icon-Medicine-2' => 'Medicine-2'
			),
			array(
				'icon-Medicine-3' => 'Medicine-3'
			),
			array(
				'icon-Medicine' => 'Medicine'
			),
			array(
				'icon-Megaphone' => 'Megaphone'
			),
			array(
				'icon-Memory-Card' => 'Memory-Card'
			),
			array(
				'icon-Memory-Card2' => 'Memory-Card2'
			),
			array(
				'icon-Memory-Card3' => 'Memory-Card3'
			),
			array(
				'icon-Men' => 'Men'
			),
			array(
				'icon-Menorah' => 'Menorah'
			),
			array(
				'icon-Mens' => 'Mens'
			),
			array(
				'icon-Metacafe' => 'Metacafe'
			),
			array(
				'icon-Mexico' => 'Mexico'
			),
			array(
				'icon-Mic' => 'Mic'
			),
			array(
				'icon-Microphone-2' => 'Microphone-2'
			),
			array(
				'icon-Microphone-3' => 'Microphone-3'
			),
			array(
				'icon-Microphone-4' => 'Microphone-4'
			),
			array(
				'icon-Microphone-5' => 'Microphone-5'
			),
			array(
				'icon-Microphone-6' => 'Microphone-6'
			),
			array(
				'icon-Microphone-7' => 'Microphone-7'
			),
			array(
				'icon-Microphone' => 'Microphone'
			),
			array(
				'icon-Microscope' => 'Microscope'
			),
			array(
				'icon-Milk-Bottle' => 'Milk-Bottle'
			),
			array(
				'icon-Mine' => 'Mine'
			),
			array(
				'icon-Minimize-Maximize-Close-Window' => 'Minimize-Maximize-Close-Window'
			),
			array(
				'icon-Minimize-Window' => 'Minimize-Window'
			),
			array(
				'icon-Minimize' => 'Minimize'
			),
			array(
				'icon-Mirror' => 'Mirror'
			),
			array(
				'icon-Mixer' => 'Mixer'
			),
			array(
				'icon-Mixx' => 'Mixx'
			),
			array(
				'icon-Money-2' => 'Money-2'
			),
			array(
				'icon-Money-Bag' => 'Money-Bag'
			),
			array(
				'icon-Money-Smiley' => 'Money-Smiley'
			),
			array(
				'icon-Money' => 'Money'
			),
			array(
				'icon-Monitor-2' => 'Monitor-2'
			),
			array(
				'icon-Monitor-3' => 'Monitor-3'
			),
			array(
				'icon-Monitor-4' => 'Monitor-4'
			),
			array(
				'icon-Monitor-5' => 'Monitor-5'
			),
			array(
				'icon-Monitor-Analytics' => 'Monitor-Analytics'
			),
			array(
				'icon-Monitor-Laptop' => 'Monitor-Laptop'
			),
			array(
				'icon-Monitor-phone' => 'Monitor-phone'
			),
			array(
				'icon-Monitor-Tablet' => 'Monitor-Tablet'
			),
			array(
				'icon-Monitor-Vertical' => 'Monitor-Vertical'
			),
			array(
				'icon-Monitor' => 'Monitor'
			),
			array(
				'icon-Monitoring' => 'Monitoring'
			),
			array(
				'icon-Monkey' => 'Monkey'
			),
			array(
				'icon-Monster' => 'Monster'
			),
			array(
				'icon-Morocco' => 'Morocco'
			),
			array(
				'icon-Motorcycle' => 'Motorcycle'
			),
			array(
				'icon-Mouse-2' => 'Mouse-2'
			),
			array(
				'icon-Mouse-3' => 'Mouse-3'
			),
			array(
				'icon-Mouse-4' => 'Mouse-4'
			),
			array(
				'icon-Mouse-Pointer' => 'Mouse-Pointer'
			),
			array(
				'icon-Mouse' => 'Mouse'
			),
			array(
				'icon-Moustache-Smiley' => 'Moustache-Smiley'
			),
			array(
				'icon-Movie-Ticket' => 'Movie-Ticket'
			),
			array(
				'icon-Movie' => 'Movie'
			),
			array(
				'icon-Mp3-File' => 'Mp3-File'
			),
			array(
				'icon-Museum' => 'Museum'
			),
			array(
				'icon-Mushroom' => 'Mushroom'
			),
			array(
				'icon-Music-Note' => 'Music-Note'
			),
			array(
				'icon-Music-Note2' => 'Music-Note2'
			),
			array(
				'icon-Music-Note3' => 'Music-Note3'
			),
			array(
				'icon-Music-Note4' => 'Music-Note4'
			),
			array(
				'icon-Music-Player' => 'Music-Player'
			),
			array(
				'icon-Mustache-2' => 'Mustache-2'
			),
			array(
				'icon-Mustache-3' => 'Mustache-3'
			),
			array(
				'icon-Mustache-4' => 'Mustache-4'
			),
			array(
				'icon-Mustache-5' => 'Mustache-5'
			),
			array(
				'icon-Mustache-6' => 'Mustache-6'
			),
			array(
				'icon-Mustache-7' => 'Mustache-7'
			),
			array(
				'icon-Mustache-8' => 'Mustache-8'
			),
			array(
				'icon-Mustache' => 'Mustache'
			),
			array(
				'icon-Mute' => 'Mute'
			),
			array(
				'icon-Myspace' => 'Myspace'
			),
			array(
				'icon-Navigat-Start' => 'Navigat-Start'
			),
			array(
				'icon-Navigate-End' => 'Navigate-End'
			),
			array(
				'icon-Navigation-LeftWindow' => 'Navigation-LeftWindow'
			),
			array(
				'icon-Navigation-RightWindow' => 'Navigation-RightWindow'
			),
			array(
				'icon-Nepal' => 'Nepal'
			),
			array(
				'icon-Netscape' => 'Netscape'
			),
			array(
				'icon-Network-Window' => 'Network-Window'
			),
			array(
				'icon-Network' => 'Network'
			),
			array(
				'icon-Neutron' => 'Neutron'
			),
			array(
				'icon-New-Mail' => 'New-Mail'
			),
			array(
				'icon-New-Tab' => 'New-Tab'
			),
			array(
				'icon-Newspaper-2' => 'Newspaper-2'
			),
			array(
				'icon-Newspaper' => 'Newspaper'
			),
			array(
				'icon-Newsvine' => 'Newsvine'
			),
			array(
				'icon-Next2' => 'Next2'
			),
			array(
				'icon-Next-3' => 'Next-3'
			),
			array(
				'icon-Next-Music' => 'Next-Music'
			),
			array(
				'icon-Next' => 'Next'
			),
			array(
				'icon-No-Battery' => 'No-Battery'
			),
			array(
				'icon-No-Drop' => 'No-Drop'
			),
			array(
				'icon-No-Flash' => 'No-Flash'
			),
			array(
				'icon-No-Smoking' => 'No-Smoking'
			),
			array(
				'icon-Noose' => 'Noose'
			),
			array(
				'icon-Normal-Text' => 'Normal-Text'
			),
			array(
				'icon-Note' => 'Note'
			),
			array(
				'icon-Notepad-2' => 'Notepad-2'
			),
			array(
				'icon-Notepad' => 'Notepad'
			),
			array(
				'icon-Nuclear' => 'Nuclear'
			),
			array(
				'icon-Numbering-List' => 'Numbering-List'
			),
			array(
				'icon-Nurse' => 'Nurse'
			),
			array(
				'icon-Office-Lamp' => 'Office-Lamp'
			),
			array(
				'icon-Office' => 'Office'
			),
			array(
				'icon-Oil' => 'Oil'
			),
			array(
				'icon-Old-Camera' => 'Old-Camera'
			),
			array(
				'icon-Old-Cassette' => 'Old-Cassette'
			),
			array(
				'icon-Old-Clock' => 'Old-Clock'
			),
			array(
				'icon-Old-Radio' => 'Old-Radio'
			),
			array(
				'icon-Old-Sticky' => 'Old-Sticky'
			),
			array(
				'icon-Old-Sticky2' => 'Old-Sticky2'
			),
			array(
				'icon-Old-Telephone' => 'Old-Telephone'
			),
			array(
				'icon-Old-TV' => 'Old-TV'
			),
			array(
				'icon-On-Air' => 'On-Air'
			),
			array(
				'icon-On-Off-2' => 'On-Off-2'
			),
			array(
				'icon-On-Off-3' => 'On-Off-3'
			),
			array(
				'icon-On-off' => 'On-off'
			),
			array(
				'icon-One-Finger' => 'One-Finger'
			),
			array(
				'icon-One-FingerTouch' => 'One-FingerTouch'
			),
			array(
				'icon-One-Window' => 'One-Window'
			),
			array(
				'icon-Open-Banana' => 'Open-Banana'
			),
			array(
				'icon-Open-Book' => 'Open-Book'
			),
			array(
				'icon-Opera-House' => 'Opera-House'
			),
			array(
				'icon-Opera' => 'Opera'
			),
			array(
				'icon-Optimization' => 'Optimization'
			),
			array(
				'icon-Orientation-2' => 'Orientation-2'
			),
			array(
				'icon-Orientation-3' => 'Orientation-3'
			),
			array(
				'icon-Orientation' => 'Orientation'
			),
			array(
				'icon-Orkut' => 'Orkut'
			),
			array(
				'icon-Ornament' => 'Ornament'
			),
			array(
				'icon-Over-Time' => 'Over-Time'
			),
			array(
				'icon-Over-Time2' => 'Over-Time2'
			),
			array(
				'icon-Owl' => 'Owl'
			),
			array(
				'icon-Pac-Man' => 'Pac-Man'
			),
			array(
				'icon-Paint-Brush' => 'Paint-Brush'
			),
			array(
				'icon-Paint-Bucket' => 'Paint-Bucket'
			),
			array(
				'icon-Paintbrush' => 'Paintbrush'
			),
			array(
				'icon-Palette' => 'Palette'
			),
			array(
				'icon-Palm-Tree' => 'Palm-Tree'
			),
			array(
				'icon-Panda' => 'Panda'
			),
			array(
				'icon-Panorama' => 'Panorama'
			),
			array(
				'icon-Pantheon' => 'Pantheon'
			),
			array(
				'icon-Pantone' => 'Pantone'
			),
			array(
				'icon-Pants' => 'Pants'
			),
			array(
				'icon-Paper-Plane' => 'Paper-Plane'
			),
			array(
				'icon-Paper' => 'Paper'
			),
			array(
				'icon-Parasailing' => 'Parasailing'
			),
			array(
				'icon-Parrot' => 'Parrot'
			),
			array(
				'icon-Password-2shopping' => 'Password-2shopping'
			),
			array(
				'icon-Password-Field' => 'Password-Field'
			),
			array(
				'icon-Password-shopping' => 'Password-shopping'
			),
			array(
				'icon-Password' => 'Password'
			),
			array(
				'icon-pause-2' => 'pause-2'
			),
			array(
				'icon-Pause' => 'Pause'
			),
			array(
				'icon-Paw' => 'Paw'
			),
			array(
				'icon-Pawn' => 'Pawn'
			),
			array(
				'icon-Paypal' => 'Paypal'
			),
			array(
				'icon-Pen-2' => 'Pen-2'
			),
			array(
				'icon-Pen-3' => 'Pen-3'
			),
			array(
				'icon-Pen-4' => 'Pen-4'
			),
			array(
				'icon-Pen-5' => 'Pen-5'
			),
			array(
				'icon-Pen-6' => 'Pen-6'
			),
			array(
				'icon-Pen' => 'Pen'
			),
			array(
				'icon-Pencil-Ruler' => 'Pencil-Ruler'
			),
			array(
				'icon-Pencil' => 'Pencil'
			),
			array(
				'icon-Penguin' => 'Penguin'
			),
			array(
				'icon-Pentagon' => 'Pentagon'
			),
			array(
				'icon-People-onCloud' => 'People-onCloud'
			),
			array(
				'icon-Pepper-withFire' => 'Pepper-withFire'
			),
			array(
				'icon-Pepper' => 'Pepper'
			),
			array(
				'icon-Petrol' => 'Petrol'
			),
			array(
				'icon-Petronas-Tower' => 'Petronas-Tower'
			),
			array(
				'icon-Philipines' => 'Philipines'
			),
			array(
				'icon-Phone-2' => 'Phone-2'
			),
			array(
				'icon-Phone-3' => 'Phone-3'
			),
			array(
				'icon-Phone-3G' => 'Phone-3G'
			),
			array(
				'icon-Phone-4G' => 'Phone-4G'
			),
			array(
				'icon-Phone-Simcard' => 'Phone-Simcard'
			),
			array(
				'icon-Phone-SMS' => 'Phone-SMS'
			),
			array(
				'icon-Phone-Wifi' => 'Phone-Wifi'
			),
			array(
				'icon-Phone' => 'Phone'
			),
			array(
				'icon-Photo-2' => 'Photo-2'
			),
			array(
				'icon-Photo-3' => 'Photo-3'
			),
			array(
				'icon-Photo-Album' => 'Photo-Album'
			),
			array(
				'icon-Photo-Album2' => 'Photo-Album2'
			),
			array(
				'icon-Photo-Album3' => 'Photo-Album3'
			),
			array(
				'icon-Photo' => 'Photo'
			),
			array(
				'icon-Photos' => 'Photos'
			),
			array(
				'icon-Physics' => 'Physics'
			),
			array(
				'icon-Pi' => 'Pi'
			),
			array(
				'icon-Piano' => 'Piano'
			),
			array(
				'icon-Picasa' => 'Picasa'
			),
			array(
				'icon-Pie-Chart' => 'Pie-Chart'
			),
			array(
				'icon-Pie-Chart2' => 'Pie-Chart2'
			),
			array(
				'icon-Pie-Chart3' => 'Pie-Chart3'
			),
			array(
				'icon-Pilates-2' => 'Pilates-2'
			),
			array(
				'icon-Pilates-3' => 'Pilates-3'
			),
			array(
				'icon-Pilates' => 'Pilates'
			),
			array(
				'icon-Pilot' => 'Pilot'
			),
			array(
				'icon-Pinch' => 'Pinch'
			),
			array(
				'icon-Ping-Pong' => 'Ping-Pong'
			),
			array(
				'icon-Pinterest' => 'Pinterest'
			),
			array(
				'icon-Pipe' => 'Pipe'
			),
			array(
				'icon-Pipette' => 'Pipette'
			),
			array(
				'icon-Piramids' => 'Piramids'
			),
			array(
				'icon-Pisces-2' => 'Pisces-2'
			),
			array(
				'icon-Pisces' => 'Pisces'
			),
			array(
				'icon-Pizza-Slice' => 'Pizza-Slice'
			),
			array(
				'icon-Pizza' => 'Pizza'
			),
			array(
				'icon-Plane-2' => 'Plane-2'
			),
			array(
				'icon-Plane' => 'Plane'
			),
			array(
				'icon-Plant' => 'Plant'
			),
			array(
				'icon-Plasmid' => 'Plasmid'
			),
			array(
				'icon-Plaster' => 'Plaster'
			),
			array(
				'icon-Plastic-CupPhone' => 'Plastic-CupPhone'
			),
			array(
				'icon-Plastic-CupPhone2' => 'Plastic-CupPhone2'
			),
			array(
				'icon-Plate' => 'Plate'
			),
			array(
				'icon-Plates' => 'Plates'
			),
			array(
				'icon-Plaxo' => 'Plaxo'
			),
			array(
				'icon-Play-Music' => 'Play-Music'
			),
			array(
				'icon-Plug-In' => 'Plug-In'
			),
			array(
				'icon-Plug-In2' => 'Plug-In2'
			),
			array(
				'icon-Plurk' => 'Plurk'
			),
			array(
				'icon-Pointer' => 'Pointer'
			),
			array(
				'icon-Poland' => 'Poland'
			),
			array(
				'icon-Police-Man' => 'Police-Man'
			),
			array(
				'icon-Police-Station' => 'Police-Station'
			),
			array(
				'icon-Police-Woman' => 'Police-Woman'
			),
			array(
				'icon-Police' => 'Police'
			),
			array(
				'icon-Polo-Shirt' => 'Polo-Shirt'
			),
			array(
				'icon-Portrait' => 'Portrait'
			),
			array(
				'icon-Portugal' => 'Portugal'
			),
			array(
				'icon-Post-Mail' => 'Post-Mail'
			),
			array(
				'icon-Post-Mail2' => 'Post-Mail2'
			),
			array(
				'icon-Post-Office' => 'Post-Office'
			),
			array(
				'icon-Post-Sign' => 'Post-Sign'
			),
			array(
				'icon-Post-Sign2ways' => 'Post-Sign2ways'
			),
			array(
				'icon-Posterous' => 'Posterous'
			),
			array(
				'icon-Pound-Sign' => 'Pound-Sign'
			),
			array(
				'icon-Pound-Sign2' => 'Pound-Sign2'
			),
			array(
				'icon-Pound' => 'Pound'
			),
			array(
				'icon-Power-2' => 'Power-2'
			),
			array(
				'icon-Power-3' => 'Power-3'
			),
			array(
				'icon-Power-Cable' => 'Power-Cable'
			),
			array(
				'icon-Power-Station' => 'Power-Station'
			),
			array(
				'icon-Power' => 'Power'
			),
			array(
				'icon-Prater' => 'Prater'
			),
			array(
				'icon-Present' => 'Present'
			),
			array(
				'icon-Presents' => 'Presents'
			),
			array(
				'icon-Press' => 'Press'
			),
			array(
				'icon-Preview' => 'Preview'
			),
			array(
				'icon-Previous' => 'Previous'
			),
			array(
				'icon-Pricing' => 'Pricing'
			),
			array(
				'icon-Printer' => 'Printer'
			),
			array(
				'icon-Professor' => 'Professor'
			),
			array(
				'icon-Profile' => 'Profile'
			),
			array(
				'icon-Project' => 'Project'
			),
			array(
				'icon-Projector-2' => 'Projector-2'
			),
			array(
				'icon-Projector' => 'Projector'
			),
			array(
				'icon-Pulse' => 'Pulse'
			),
			array(
				'icon-Pumpkin' => 'Pumpkin'
			),
			array(
				'icon-Punk' => 'Punk'
			),
			array(
				'icon-Punker' => 'Punker'
			),
			array(
				'icon-Puzzle' => 'Puzzle'
			),
			array(
				'icon-QIK' => 'QIK'
			),
			array(
				'icon-QR-Code' => 'QR-Code'
			),
			array(
				'icon-Queen-2' => 'Queen-2'
			),
			array(
				'icon-Queen' => 'Queen'
			),
			array(
				'icon-Quill-2' => 'Quill-2'
			),
			array(
				'icon-Quill-3' => 'Quill-3'
			),
			array(
				'icon-Quill' => 'Quill'
			),
			array(
				'icon-Quotes-2' => 'Quotes-2'
			),
			array(
				'icon-Quotes' => 'Quotes'
			),
			array(
				'icon-Radio' => 'Radio'
			),
			array(
				'icon-Radioactive' => 'Radioactive'
			),
			array(
				'icon-Rafting' => 'Rafting'
			),
			array(
				'icon-Rain-Drop' => 'Rain-Drop'
			),
			array(
				'icon-Rainbow-2' => 'Rainbow-2'
			),
			array(
				'icon-Rainbow' => 'Rainbow'
			),
			array(
				'icon-Ram' => 'Ram'
			),
			array(
				'icon-Razzor-Blade' => 'Razzor-Blade'
			),
			array(
				'icon-Receipt-2' => 'Receipt-2'
			),
			array(
				'icon-Receipt-3' => 'Receipt-3'
			),
			array(
				'icon-Receipt-4' => 'Receipt-4'
			),
			array(
				'icon-Receipt' => 'Receipt'
			),
			array(
				'icon-Record2' => 'Record2'
			),
			array(
				'icon-Record-3' => 'Record-3'
			),
			array(
				'icon-Record-Music' => 'Record-Music'
			),
			array(
				'icon-Record' => 'Record'
			),
			array(
				'icon-Recycling-2' => 'Recycling-2'
			),
			array(
				'icon-Recycling' => 'Recycling'
			),
			array(
				'icon-Reddit' => 'Reddit'
			),
			array(
				'icon-Redhat' => 'Redhat'
			),
			array(
				'icon-Redirect' => 'Redirect'
			),
			array(
				'icon-Redo' => 'Redo'
			),
			array(
				'icon-Reel' => 'Reel'
			),
			array(
				'icon-Refinery' => 'Refinery'
			),
			array(
				'icon-Refresh-Window' => 'Refresh-Window'
			),
			array(
				'icon-Refresh' => 'Refresh'
			),
			array(
				'icon-Reload-2' => 'Reload-2'
			),
			array(
				'icon-Reload-3' => 'Reload-3'
			),
			array(
				'icon-Reload' => 'Reload'
			),
			array(
				'icon-Remote-Controll' => 'Remote-Controll'
			),
			array(
				'icon-Remote-Controll2' => 'Remote-Controll2'
			),
			array(
				'icon-Remove-Bag' => 'Remove-Bag'
			),
			array(
				'icon-Remove-Basket' => 'Remove-Basket'
			),
			array(
				'icon-Remove-Cart' => 'Remove-Cart'
			),
			array(
				'icon-Remove-File' => 'Remove-File'
			),
			array(
				'icon-Remove-User' => 'Remove-User'
			),
			array(
				'icon-Remove-Window' => 'Remove-Window'
			),
			array(
				'icon-Remove' => 'Remove'
			),
			array(
				'icon-Rename' => 'Rename'
			),
			array(
				'icon-Repair' => 'Repair'
			),
			array(
				'icon-Repeat-2' => 'Repeat-2'
			),
			array(
				'icon-Repeat-3' => 'Repeat-3'
			),
			array(
				'icon-Repeat-4' => 'Repeat-4'
			),
			array(
				'icon-Repeat-5' => 'Repeat-5'
			),
			array(
				'icon-Repeat-6' => 'Repeat-6'
			),
			array(
				'icon-Repeat-7' => 'Repeat-7'
			),
			array(
				'icon-Repeat' => 'Repeat'
			),
			array(
				'icon-Reset' => 'Reset'
			),
			array(
				'icon-Resize' => 'Resize'
			),
			array(
				'icon-Restore-Window' => 'Restore-Window'
			),
			array(
				'icon-Retouching' => 'Retouching'
			),
			array(
				'icon-Retro-Camera' => 'Retro-Camera'
			),
			array(
				'icon-Retro' => 'Retro'
			),
			array(
				'icon-Retweet' => 'Retweet'
			),
			array(
				'icon-Reverbnation' => 'Reverbnation'
			),
			array(
				'icon-Rewind' => 'Rewind'
			),
			array(
				'icon-RGB' => 'RGB'
			),
			array(
				'icon-Ribbon-2' => 'Ribbon-2'
			),
			array(
				'icon-Ribbon-3' => 'Ribbon-3'
			),
			array(
				'icon-Ribbon' => 'Ribbon'
			),
			array(
				'icon-Right-2' => 'Right-2'
			),
			array(
				'icon-Right-3' => 'Right-3'
			),
			array(
				'icon-Right-4' => 'Right-4'
			),
			array(
				'icon-Right-ToLeft' => 'Right-ToLeft'
			),
			array(
				'icon-Right' => 'Right'
			),
			array(
				'icon-Road-2' => 'Road-2'
			),
			array(
				'icon-Road-3' => 'Road-3'
			),
			array(
				'icon-Road' => 'Road'
			),
			array(
				'icon-Robot-2' => 'Robot-2'
			),
			array(
				'icon-Robot' => 'Robot'
			),
			array(
				'icon-Rock-andRoll' => 'Rock-andRoll'
			),
			array(
				'icon-Rocket' => 'Rocket'
			),
			array(
				'icon-Roller' => 'Roller'
			),
			array(
				'icon-Roof' => 'Roof'
			),
			array(
				'icon-Rook' => 'Rook'
			),
			array(
				'icon-Rotate-Gesture' => 'Rotate-Gesture'
			),
			array(
				'icon-Rotate-Gesture2' => 'Rotate-Gesture2'
			),
			array(
				'icon-Rotate-Gesture3' => 'Rotate-Gesture3'
			),
			array(
				'icon-Rotation-390' => 'Rotation-390'
			),
			array(
				'icon-Rotation' => 'Rotation'
			),
			array(
				'icon-Router-2' => 'Router-2'
			),
			array(
				'icon-Router' => 'Router'
			),
			array(
				'icon-RSS' => 'RSS'
			),
			array(
				'icon-Ruler-2' => 'Ruler-2'
			),
			array(
				'icon-Ruler' => 'Ruler'
			),
			array(
				'icon-Running-Shoes' => 'Running-Shoes'
			),
			array(
				'icon-Running' => 'Running'
			),
			array(
				'icon-Safari' => 'Safari'
			),
			array(
				'icon-Safe-Box' => 'Safe-Box'
			),
			array(
				'icon-Safe-Box2' => 'Safe-Box2'
			),
			array(
				'icon-Safety-PinClose' => 'Safety-PinClose'
			),
			array(
				'icon-Safety-PinOpen' => 'Safety-PinOpen'
			),
			array(
				'icon-Sagittarus-2' => 'Sagittarus-2'
			),
			array(
				'icon-Sagittarus' => 'Sagittarus'
			),
			array(
				'icon-Sailing-Ship' => 'Sailing-Ship'
			),
			array(
				'icon-Sand-watch' => 'Sand-watch'
			),
			array(
				'icon-Sand-watch2' => 'Sand-watch2'
			),
			array(
				'icon-Santa-Claus' => 'Santa-Claus'
			),
			array(
				'icon-Santa-Claus2' => 'Santa-Claus2'
			),
			array(
				'icon-Santa-onSled' => 'Santa-onSled'
			),
			array(
				'icon-Satelite-2' => 'Satelite-2'
			),
			array(
				'icon-Satelite' => 'Satelite'
			),
			array(
				'icon-Save-Window' => 'Save-Window'
			),
			array(
				'icon-Save' => 'Save'
			),
			array(
				'icon-Saw' => 'Saw'
			),
			array(
				'icon-Saxophone' => 'Saxophone'
			),
			array(
				'icon-Scale' => 'Scale'
			),
			array(
				'icon-Scarf' => 'Scarf'
			),
			array(
				'icon-Scissor' => 'Scissor'
			),
			array(
				'icon-Scooter-Front' => 'Scooter-Front'
			),
			array(
				'icon-Scooter' => 'Scooter'
			),
			array(
				'icon-Scorpio-2' => 'Scorpio-2'
			),
			array(
				'icon-Scorpio' => 'Scorpio'
			),
			array(
				'icon-Scotland' => 'Scotland'
			),
			array(
				'icon-Screwdriver' => 'Screwdriver'
			),
			array(
				'icon-Scroll-Fast' => 'Scroll-Fast'
			),
			array(
				'icon-Scroll' => 'Scroll'
			),
			array(
				'icon-Scroller-2' => 'Scroller-2'
			),
			array(
				'icon-Scroller' => 'Scroller'
			),
			array(
				'icon-Sea-Dog' => 'Sea-Dog'
			),
			array(
				'icon-Search-onCloud' => 'Search-onCloud'
			),
			array(
				'icon-Search-People' => 'Search-People'
			),
			array(
				'icon-secound' => 'secound'
			),
			array(
				'icon-secound2' => 'secound2'
			),
			array(
				'icon-Security-Block' => 'Security-Block'
			),
			array(
				'icon-Security-Bug' => 'Security-Bug'
			),
			array(
				'icon-Security-Camera' => 'Security-Camera'
			),
			array(
				'icon-Security-Check' => 'Security-Check'
			),
			array(
				'icon-Security-Settings' => 'Security-Settings'
			),
			array(
				'icon-Security-Smiley' => 'Security-Smiley'
			),
			array(
				'icon-Securiy-Remove' => 'Securiy-Remove'
			),
			array(
				'icon-Seed' => 'Seed'
			),
			array(
				'icon-Selfie' => 'Selfie'
			),
			array(
				'icon-Serbia' => 'Serbia'
			),
			array(
				'icon-Server-2' => 'Server-2'
			),
			array(
				'icon-Server' => 'Server'
			),
			array(
				'icon-Servers' => 'Servers'
			),
			array(
				'icon-Settings-Window' => 'Settings-Window'
			),
			array(
				'icon-Sewing-Machine' => 'Sewing-Machine'
			),
			array(
				'icon-Sexual' => 'Sexual'
			),
			array(
				'icon-Share-onCloud' => 'Share-onCloud'
			),
			array(
				'icon-Share-Window' => 'Share-Window'
			),
			array(
				'icon-Share' => 'Share'
			),
			array(
				'icon-Sharethis' => 'Sharethis'
			),
			array(
				'icon-Shark' => 'Shark'
			),
			array(
				'icon-Sheep' => 'Sheep'
			),
			array(
				'icon-Sheriff-Badge' => 'Sheriff-Badge'
			),
			array(
				'icon-Shield' => 'Shield'
			),
			array(
				'icon-Ship-2' => 'Ship-2'
			),
			array(
				'icon-Ship' => 'Ship'
			),
			array(
				'icon-Shirt' => 'Shirt'
			),
			array(
				'icon-Shoes-2' => 'Shoes-2'
			),
			array(
				'icon-Shoes-3' => 'Shoes-3'
			),
			array(
				'icon-Shoes' => 'Shoes'
			),
			array(
				'icon-Shop-2' => 'Shop-2'
			),
			array(
				'icon-Shop-3' => 'Shop-3'
			),
			array(
				'icon-Shop-4' => 'Shop-4'
			),
			array(
				'icon-Shop' => 'Shop'
			),
			array(
				'icon-Shopping-Bag' => 'Shopping-Bag'
			),
			array(
				'icon-Shopping-Basket' => 'Shopping-Basket'
			),
			array(
				'icon-Shopping-Cart' => 'Shopping-Cart'
			),
			array(
				'icon-Short-Pants' => 'Short-Pants'
			),
			array(
				'icon-Shoutwire' => 'Shoutwire'
			),
			array(
				'icon-Shovel' => 'Shovel'
			),
			array(
				'icon-Shuffle-2' => 'Shuffle-2'
			),
			array(
				'icon-Shuffle-3' => 'Shuffle-3'
			),
			array(
				'icon-Shuffle-4' => 'Shuffle-4'
			),
			array(
				'icon-Shuffle' => 'Shuffle'
			),
			array(
				'icon-Shutter' => 'Shutter'
			),
			array(
				'icon-Sidebar-Window' => 'Sidebar-Window'
			),
			array(
				'icon-Signal' => 'Signal'
			),
			array(
				'icon-Singapore' => 'Singapore'
			),
			array(
				'icon-Skate-Shoes' => 'Skate-Shoes'
			),
			array(
				'icon-Skateboard-2' => 'Skateboard-2'
			),
			array(
				'icon-Skateboard' => 'Skateboard'
			),
			array(
				'icon-Skeleton' => 'Skeleton'
			),
			array(
				'icon-Ski' => 'Ski'
			),
			array(
				'icon-Skirt' => 'Skirt'
			),
			array(
				'icon-Skrill' => 'Skrill'
			),
			array(
				'icon-Skull' => 'Skull'
			),
			array(
				'icon-Skydiving' => 'Skydiving'
			),
			array(
				'icon-Skype' => 'Skype'
			),
			array(
				'icon-Sled-withGifts' => 'Sled-withGifts'
			),
			array(
				'icon-Sled' => 'Sled'
			),
			array(
				'icon-Sleeping' => 'Sleeping'
			),
			array(
				'icon-Sleet' => 'Sleet'
			),
			array(
				'icon-Slippers' => 'Slippers'
			),
			array(
				'icon-Smart' => 'Smart'
			),
			array(
				'icon-Smartphone-2' => 'Smartphone-2'
			),
			array(
				'icon-Smartphone-3' => 'Smartphone-3'
			),
			array(
				'icon-Smartphone-4' => 'Smartphone-4'
			),
			array(
				'icon-Smartphone-Secure' => 'Smartphone-Secure'
			),
			array(
				'icon-Smartphone' => 'Smartphone'
			),
			array(
				'icon-Smile' => 'Smile'
			),
			array(
				'icon-Smoking-Area' => 'Smoking-Area'
			),
			array(
				'icon-Smoking-Pipe' => 'Smoking-Pipe'
			),
			array(
				'icon-Snake' => 'Snake'
			),
			array(
				'icon-Snorkel' => 'Snorkel'
			),
			array(
				'icon-Snow-2' => 'Snow-2'
			),
			array(
				'icon-Snow-Dome' => 'Snow-Dome'
			),
			array(
				'icon-Snow-Storm' => 'Snow-Storm'
			),
			array(
				'icon-Snow' => 'Snow'
			),
			array(
				'icon-Snowflake-2' => 'Snowflake-2'
			),
			array(
				'icon-Snowflake-3' => 'Snowflake-3'
			),
			array(
				'icon-Snowflake-4' => 'Snowflake-4'
			),
			array(
				'icon-Snowflake' => 'Snowflake'
			),
			array(
				'icon-Snowman' => 'Snowman'
			),
			array(
				'icon-Soccer-Ball' => 'Soccer-Ball'
			),
			array(
				'icon-Soccer-Shoes' => 'Soccer-Shoes'
			),
			array(
				'icon-Socks' => 'Socks'
			),
			array(
				'icon-Solar' => 'Solar'
			),
			array(
				'icon-Sound-Wave' => 'Sound-Wave'
			),
			array(
				'icon-Sound' => 'Sound'
			),
			array(
				'icon-Soundcloud' => 'Soundcloud'
			),
			array(
				'icon-Soup' => 'Soup'
			),
			array(
				'icon-South-Africa' => 'South-Africa'
			),
			array(
				'icon-Space-Needle' => 'Space-Needle'
			),
			array(
				'icon-Spain' => 'Spain'
			),
			array(
				'icon-Spam-Mail' => 'Spam-Mail'
			),
			array(
				'icon-Speach-Bubble' => 'Speach-Bubble'
			),
			array(
				'icon-Speach-Bubble2' => 'Speach-Bubble2'
			),
			array(
				'icon-Speach-Bubble3' => 'Speach-Bubble3'
			),
			array(
				'icon-Speach-Bubble4' => 'Speach-Bubble4'
			),
			array(
				'icon-Speach-Bubble5' => 'Speach-Bubble5'
			),
			array(
				'icon-Speach-Bubble6' => 'Speach-Bubble6'
			),
			array(
				'icon-Speach-Bubble7' => 'Speach-Bubble7'
			),
			array(
				'icon-Speach-Bubble8' => 'Speach-Bubble8'
			),
			array(
				'icon-Speach-Bubble9' => 'Speach-Bubble9'
			),
			array(
				'icon-Speach-Bubble10' => 'Speach-Bubble10'
			),
			array(
				'icon-Speach-Bubble11' => 'Speach-Bubble11'
			),
			array(
				'icon-Speach-Bubble12' => 'Speach-Bubble12'
			),
			array(
				'icon-Speach-Bubble13' => 'Speach-Bubble13'
			),
			array(
				'icon-Speach-BubbleAsking' => 'Speach-BubbleAsking'
			),
			array(
				'icon-Speach-BubbleComic' => 'Speach-BubbleComic'
			),
			array(
				'icon-Speach-BubbleComic2' => 'Speach-BubbleComic2'
			),
			array(
				'icon-Speach-BubbleComic3' => 'Speach-BubbleComic3'
			),
			array(
				'icon-Speach-BubbleComic4' => 'Speach-BubbleComic4'
			),
			array(
				'icon-Speach-BubbleDialog' => 'Speach-BubbleDialog'
			),
			array(
				'icon-Speach-Bubbles' => 'Speach-Bubbles'
			),
			array(
				'icon-Speak-2' => 'Speak-2'
			),
			array(
				'icon-Speak' => 'Speak'
			),
			array(
				'icon-Speaker-2' => 'Speaker-2'
			),
			array(
				'icon-Speaker' => 'Speaker'
			),
			array(
				'icon-Spell-Check' => 'Spell-Check'
			),
			array(
				'icon-Spell-CheckABC' => 'Spell-CheckABC'
			),
			array(
				'icon-Spermium' => 'Spermium'
			),
			array(
				'icon-Spider' => 'Spider'
			),
			array(
				'icon-Spiderweb' => 'Spiderweb'
			),
			array(
				'icon-Split-FourSquareWindow' => 'Split-FourSquareWindow'
			),
			array(
				'icon-Split-Horizontal' => 'Split-Horizontal'
			),
			array(
				'icon-Split-Horizontal2Window' => 'Split-Horizontal2Window'
			),
			array(
				'icon-Split-Vertical' => 'Split-Vertical'
			),
			array(
				'icon-Split-Vertical2' => 'Split-Vertical2'
			),
			array(
				'icon-Split-Window' => 'Split-Window'
			),
			array(
				'icon-Spoder' => 'Spoder'
			),
			array(
				'icon-Spoon' => 'Spoon'
			),
			array(
				'icon-Sport-Mode' => 'Sport-Mode'
			),
			array(
				'icon-Sports-Clothings1' => 'Sports-Clothings1'
			),
			array(
				'icon-Sports-Clothings2' => 'Sports-Clothings2'
			),
			array(
				'icon-Sports-Shirt' => 'Sports-Shirt'
			),
			array(
				'icon-Spot' => 'Spot'
			),
			array(
				'icon-Spray' => 'Spray'
			),
			array(
				'icon-Spread' => 'Spread'
			),
			array(
				'icon-Spring' => 'Spring'
			),
			array(
				'icon-Spurl' => 'Spurl'
			),
			array(
				'icon-Spy' => 'Spy'
			),
			array(
				'icon-Squirrel' => 'Squirrel'
			),
			array(
				'icon-SSL' => 'SSL'
			),
			array(
				'icon-St-BasilsCathedral' => 'St-BasilsCathedral'
			),
			array(
				'icon-St-PaulsCathedral' => 'St-PaulsCathedral'
			),
			array(
				'icon-Stamp-2' => 'Stamp-2'
			),
			array(
				'icon-Stamp' => 'Stamp'
			),
			array(
				'icon-Stapler' => 'Stapler'
			),
			array(
				'icon-Star-Track' => 'Star-Track'
			),
			array(
				'icon-Star' => 'Star'
			),
			array(
				'icon-Starfish' => 'Starfish'
			),
			array(
				'icon-Start2' => 'Start2'
			),
			array(
				'icon-Start-3' => 'Start-3'
			),
			array(
				'icon-Start-ways' => 'Start-ways'
			),
			array(
				'icon-Start' => 'Start'
			),
			array(
				'icon-Statistic' => 'Statistic'
			),
			array(
				'icon-Stethoscope' => 'Stethoscope'
			),
			array(
				'icon-stop--2' => 'stop--2'
			),
			array(
				'icon-Stop-Music' => 'Stop-Music'
			),
			array(
				'icon-Stop' => 'Stop'
			),
			array(
				'icon-Stopwatch-2' => 'Stopwatch-2'
			),
			array(
				'icon-Stopwatch' => 'Stopwatch'
			),
			array(
				'icon-Storm' => 'Storm'
			),
			array(
				'icon-Street-View' => 'Street-View'
			),
			array(
				'icon-Street-View2' => 'Street-View2'
			),
			array(
				'icon-Strikethrough-Text' => 'Strikethrough-Text'
			),
			array(
				'icon-Stroller' => 'Stroller'
			),
			array(
				'icon-Structure' => 'Structure'
			),
			array(
				'icon-Student-Female' => 'Student-Female'
			),
			array(
				'icon-Student-Hat' => 'Student-Hat'
			),
			array(
				'icon-Student-Hat2' => 'Student-Hat2'
			),
			array(
				'icon-Student-Male' => 'Student-Male'
			),
			array(
				'icon-Student-MaleFemale' => 'Student-MaleFemale'
			),
			array(
				'icon-Students' => 'Students'
			),
			array(
				'icon-Studio-Flash' => 'Studio-Flash'
			),
			array(
				'icon-Studio-Lightbox' => 'Studio-Lightbox'
			),
			array(
				'icon-Stumbleupon' => 'Stumbleupon'
			),
			array(
				'icon-Suit' => 'Suit'
			),
			array(
				'icon-Suitcase' => 'Suitcase'
			),
			array(
				'icon-Sum-2' => 'Sum-2'
			),
			array(
				'icon-Sum' => 'Sum'
			),
			array(
				'icon-Summer' => 'Summer'
			),
			array(
				'icon-Sun-CloudyRain' => 'Sun-CloudyRain'
			),
			array(
				'icon-Sun' => 'Sun'
			),
			array(
				'icon-Sunglasses-2' => 'Sunglasses-2'
			),
			array(
				'icon-Sunglasses-3' => 'Sunglasses-3'
			),
			array(
				'icon-Sunglasses-Smiley' => 'Sunglasses-Smiley'
			),
			array(
				'icon-Sunglasses-Smiley2' => 'Sunglasses-Smiley2'
			),
			array(
				'icon-Sunglasses-W' => 'Sunglasses-W'
			),
			array(
				'icon-Sunglasses-W2' => 'Sunglasses-W2'
			),
			array(
				'icon-Sunglasses-W3' => 'Sunglasses-W3'
			),
			array(
				'icon-Sunglasses' => 'Sunglasses'
			),
			array(
				'icon-Sunrise' => 'Sunrise'
			),
			array(
				'icon-Sunset' => 'Sunset'
			),
			array(
				'icon-Superman' => 'Superman'
			),
			array(
				'icon-Support' => 'Support'
			),
			array(
				'icon-Surprise' => 'Surprise'
			),
			array(
				'icon-Sushi' => 'Sushi'
			),
			array(
				'icon-Sweden' => 'Sweden'
			),
			array(
				'icon-Swimming-Short' => 'Swimming-Short'
			),
			array(
				'icon-Swimming' => 'Swimming'
			),
			array(
				'icon-Swimmwear' => 'Swimmwear'
			),
			array(
				'icon-Switch' => 'Switch'
			),
			array(
				'icon-Switzerland' => 'Switzerland'
			),
			array(
				'icon-Sync-Cloud' => 'Sync-Cloud'
			),
			array(
				'icon-Sync' => 'Sync'
			),
			array(
				'icon-Synchronize-2' => 'Synchronize-2'
			),
			array(
				'icon-Synchronize' => 'Synchronize'
			),
			array(
				'icon-T-Shirt' => 'T-Shirt'
			),
			array(
				'icon-Tablet-2' => 'Tablet-2'
			),
			array(
				'icon-Tablet-3' => 'Tablet-3'
			),
			array(
				'icon-Tablet-Orientation' => 'Tablet-Orientation'
			),
			array(
				'icon-Tablet-Phone' => 'Tablet-Phone'
			),
			array(
				'icon-Tablet-Secure' => 'Tablet-Secure'
			),
			array(
				'icon-Tablet-Vertical' => 'Tablet-Vertical'
			),
			array(
				'icon-Tablet' => 'Tablet'
			),
			array(
				'icon-Tactic' => 'Tactic'
			),
			array(
				'icon-Tag-2' => 'Tag-2'
			),
			array(
				'icon-Tag-3' => 'Tag-3'
			),
			array(
				'icon-Tag-4' => 'Tag-4'
			),
			array(
				'icon-Tag-5' => 'Tag-5'
			),
			array(
				'icon-Tag' => 'Tag'
			),
			array(
				'icon-Taj-Mahal' => 'Taj-Mahal'
			),
			array(
				'icon-Talk-Man' => 'Talk-Man'
			),
			array(
				'icon-Tap' => 'Tap'
			),
			array(
				'icon-Target-Market' => 'Target-Market'
			),
			array(
				'icon-Target' => 'Target'
			),
			array(
				'icon-Taurus-2' => 'Taurus-2'
			),
			array(
				'icon-Taurus' => 'Taurus'
			),
			array(
				'icon-Taxi-2' => 'Taxi-2'
			),
			array(
				'icon-Taxi-Sign' => 'Taxi-Sign'
			),
			array(
				'icon-Taxi' => 'Taxi'
			),
			array(
				'icon-Teacher' => 'Teacher'
			),
			array(
				'icon-Teapot' => 'Teapot'
			),
			array(
				'icon-Technorati' => 'Technorati'
			),
			array(
				'icon-Teddy-Bear' => 'Teddy-Bear'
			),
			array(
				'icon-Tee-Mug' => 'Tee-Mug'
			),
			array(
				'icon-Telephone-2' => 'Telephone-2'
			),
			array(
				'icon-Telephone' => 'Telephone'
			),
			array(
				'icon-Telescope' => 'Telescope'
			),
			array(
				'icon-Temperature-2' => 'Temperature-2'
			),
			array(
				'icon-Temperature-3' => 'Temperature-3'
			),
			array(
				'icon-Temperature' => 'Temperature'
			),
			array(
				'icon-Temple' => 'Temple'
			),
			array(
				'icon-Tennis-Ball' => 'Tennis-Ball'
			),
			array(
				'icon-Tennis' => 'Tennis'
			),
			array(
				'icon-Tent' => 'Tent'
			),
			array(
				'icon-Test-Tube' => 'Test-Tube'
			),
			array(
				'icon-Test-Tube2' => 'Test-Tube2'
			),
			array(
				'icon-Testimonal' => 'Testimonal'
			),
			array(
				'icon-Text-Box' => 'Text-Box'
			),
			array(
				'icon-Text-Effect' => 'Text-Effect'
			),
			array(
				'icon-Text-HighlightColor' => 'Text-HighlightColor'
			),
			array(
				'icon-Text-Paragraph' => 'Text-Paragraph'
			),
			array(
				'icon-Thailand' => 'Thailand'
			),
			array(
				'icon-The-WhiteHouse' => 'The-WhiteHouse'
			),
			array(
				'icon-This-SideUp' => 'This-SideUp'
			),
			array(
				'icon-Thread' => 'Thread'
			),
			array(
				'icon-Three-ArrowFork' => 'Three-ArrowFork'
			),
			array(
				'icon-Three-Fingers' => 'Three-Fingers'
			),
			array(
				'icon-Three-FingersDrag' => 'Three-FingersDrag'
			),
			array(
				'icon-Three-FingersDrag2' => 'Three-FingersDrag2'
			),
			array(
				'icon-Three-FingersTouch' => 'Three-FingersTouch'
			),
			array(
				'icon-Thumb' => 'Thumb'
			),
			array(
				'icon-Thumbs-DownSmiley' => 'Thumbs-DownSmiley'
			),
			array(
				'icon-Thumbs-UpSmiley' => 'Thumbs-UpSmiley'
			),
			array(
				'icon-Thunder' => 'Thunder'
			),
			array(
				'icon-Thunderstorm' => 'Thunderstorm'
			),
			array(
				'icon-Ticket' => 'Ticket'
			),
			array(
				'icon-Tie-2' => 'Tie-2'
			),
			array(
				'icon-Tie-3' => 'Tie-3'
			),
			array(
				'icon-Tie-4' => 'Tie-4'
			),
			array(
				'icon-Tie' => 'Tie'
			),
			array(
				'icon-Tiger' => 'Tiger'
			),
			array(
				'icon-Time-Backup' => 'Time-Backup'
			),
			array(
				'icon-Time-Bomb' => 'Time-Bomb'
			),
			array(
				'icon-Time-Clock' => 'Time-Clock'
			),
			array(
				'icon-Time-Fire' => 'Time-Fire'
			),
			array(
				'icon-Time-Machine' => 'Time-Machine'
			),
			array(
				'icon-Time-Window' => 'Time-Window'
			),
			array(
				'icon-Timer-2' => 'Timer-2'
			),
			array(
				'icon-Timer' => 'Timer'
			),
			array(
				'icon-To-Bottom' => 'To-Bottom'
			),
			array(
				'icon-To-Bottom2' => 'To-Bottom2'
			),
			array(
				'icon-To-Left' => 'To-Left'
			),
			array(
				'icon-To-Right' => 'To-Right'
			),
			array(
				'icon-To-Top' => 'To-Top'
			),
			array(
				'icon-To-Top2' => 'To-Top2'
			),
			array(
				'icon-Token-' => 'Token-'
			),
			array(
				'icon-Tomato' => 'Tomato'
			),
			array(
				'icon-Tongue' => 'Tongue'
			),
			array(
				'icon-Tooth-2' => 'Tooth-2'
			),
			array(
				'icon-Tooth' => 'Tooth'
			),
			array(
				'icon-Top-ToBottom' => 'Top-ToBottom'
			),
			array(
				'icon-Touch-Window' => 'Touch-Window'
			),
			array(
				'icon-Tourch' => 'Tourch'
			),
			array(
				'icon-Tower-2' => 'Tower-2'
			),
			array(
				'icon-Tower-Bridge' => 'Tower-Bridge'
			),
			array(
				'icon-Tower' => 'Tower'
			),
			array(
				'icon-Trace' => 'Trace'
			),
			array(
				'icon-Tractor' => 'Tractor'
			),
			array(
				'icon-traffic-Light' => 'traffic-Light'
			),
			array(
				'icon-Traffic-Light2' => 'Traffic-Light2'
			),
			array(
				'icon-Train-2' => 'Train-2'
			),
			array(
				'icon-Train' => 'Train'
			),
			array(
				'icon-Tram' => 'Tram'
			),
			array(
				'icon-Transform-2' => 'Transform-2'
			),
			array(
				'icon-Transform-3' => 'Transform-3'
			),
			array(
				'icon-Transform-4' => 'Transform-4'
			),
			array(
				'icon-Transform' => 'Transform'
			),
			array(
				'icon-Trash-withMen' => 'Trash-withMen'
			),
			array(
				'icon-Tree-2' => 'Tree-2'
			),
			array(
				'icon-Tree-3' => 'Tree-3'
			),
			array(
				'icon-Tree-4' => 'Tree-4'
			),
			array(
				'icon-Tree-5' => 'Tree-5'
			),
			array(
				'icon-Tree' => 'Tree'
			),
			array(
				'icon-Trekking' => 'Trekking'
			),
			array(
				'icon-Triangle-ArrowDown' => 'Triangle-ArrowDown'
			),
			array(
				'icon-Triangle-ArrowLeft' => 'Triangle-ArrowLeft'
			),
			array(
				'icon-Triangle-ArrowRight' => 'Triangle-ArrowRight'
			),
			array(
				'icon-Triangle-ArrowUp' => 'Triangle-ArrowUp'
			),
			array(
				'icon-Tripod-2' => 'Tripod-2'
			),
			array(
				'icon-Tripod-andVideo' => 'Tripod-andVideo'
			),
			array(
				'icon-Tripod-withCamera' => 'Tripod-withCamera'
			),
			array(
				'icon-Tripod-withGopro' => 'Tripod-withGopro'
			),
			array(
				'icon-Trophy-2' => 'Trophy-2'
			),
			array(
				'icon-Trophy' => 'Trophy'
			),
			array(
				'icon-Truck' => 'Truck'
			),
			array(
				'icon-Trumpet' => 'Trumpet'
			),
			array(
				'icon-Tumblr' => 'Tumblr'
			),
			array(
				'icon-Turkey' => 'Turkey'
			),
			array(
				'icon-Turn-Down' => 'Turn-Down'
			),
			array(
				'icon-Turn-Down2' => 'Turn-Down2'
			),
			array(
				'icon-Turn-DownFromLeft' => 'Turn-DownFromLeft'
			),
			array(
				'icon-Turn-DownFromRight' => 'Turn-DownFromRight'
			),
			array(
				'icon-Turn-Left' => 'Turn-Left'
			),
			array(
				'icon-Turn-Left3' => 'Turn-Left3'
			),
			array(
				'icon-Turn-Right' => 'Turn-Right'
			),
			array(
				'icon-Turn-Right3' => 'Turn-Right3'
			),
			array(
				'icon-Turn-Up' => 'Turn-Up'
			),
			array(
				'icon-Turn-Up2' => 'Turn-Up2'
			),
			array(
				'icon-Turtle' => 'Turtle'
			),
			array(
				'icon-Tuxedo' => 'Tuxedo'
			),
			array(
				'icon-TV' => 'TV'
			),
			array(
				'icon-Twister' => 'Twister'
			),
			array(
				'icon-Twitter-2' => 'Twitter-2'
			),
			array(
				'icon-Twitter' => 'Twitter'
			),
			array(
				'icon-Two-Fingers' => 'Two-Fingers'
			),
			array(
				'icon-Two-FingersDrag' => 'Two-FingersDrag'
			),
			array(
				'icon-Two-FingersDrag2' => 'Two-FingersDrag2'
			),
			array(
				'icon-Two-FingersScroll' => 'Two-FingersScroll'
			),
			array(
				'icon-Two-FingersTouch' => 'Two-FingersTouch'
			),
			array(
				'icon-Two-Windows' => 'Two-Windows'
			),
			array(
				'icon-Type-Pass' => 'Type-Pass'
			),
			array(
				'icon-Ukraine' => 'Ukraine'
			),
			array(
				'icon-Umbrela' => 'Umbrela'
			),
			array(
				'icon-Umbrella-2' => 'Umbrella-2'
			),
			array(
				'icon-Umbrella-3' => 'Umbrella-3'
			),
			array(
				'icon-Under-LineText' => 'Under-LineText'
			),
			array(
				'icon-Undo' => 'Undo'
			),
			array(
				'icon-United-Kingdom' => 'United-Kingdom'
			),
			array(
				'icon-United-States' => 'United-States'
			),
			array(
				'icon-University-2' => 'University-2'
			),
			array(
				'icon-University' => 'University'
			),
			array(
				'icon-Unlike-2' => 'Unlike-2'
			),
			array(
				'icon-Unlike' => 'Unlike'
			),
			array(
				'icon-Unlock-2' => 'Unlock-2'
			),
			array(
				'icon-Unlock-3' => 'Unlock-3'
			),
			array(
				'icon-Unlock' => 'Unlock'
			),
			array(
				'icon-Up--Down' => 'Up--Down'
			),
			array(
				'icon-Up--Down3' => 'Up--Down3'
			),
			array(
				'icon-Up-2' => 'Up-2'
			),
			array(
				'icon-Up-3' => 'Up-3'
			),
			array(
				'icon-Up-4' => 'Up-4'
			),
			array(
				'icon-Up' => 'Up'
			),
			array(
				'icon-Upgrade' => 'Upgrade'
			),
			array(
				'icon-Upload-2' => 'Upload-2'
			),
			array(
				'icon-Upload-toCloud' => 'Upload-toCloud'
			),
			array(
				'icon-Upload-Window' => 'Upload-Window'
			),
			array(
				'icon-Upload' => 'Upload'
			),
			array(
				'icon-Uppercase-Text' => 'Uppercase-Text'
			),
			array(
				'icon-Upward' => 'Upward'
			),
			array(
				'icon-URL-Window' => 'URL-Window'
			),
			array(
				'icon-Usb-2' => 'Usb-2'
			),
			array(
				'icon-Usb-Cable' => 'Usb-Cable'
			),
			array(
				'icon-Usb' => 'Usb'
			),
			array(
				'icon-User' => 'User'
			),
			array(
				'icon-Ustream' => 'Ustream'
			),
			array(
				'icon-Vase' => 'Vase'
			),
			array(
				'icon-Vector-2' => 'Vector-2'
			),
			array(
				'icon-Vector-3' => 'Vector-3'
			),
			array(
				'icon-Vector-4' => 'Vector-4'
			),
			array(
				'icon-Vector-5' => 'Vector-5'
			),
			array(
				'icon-Vector' => 'Vector'
			),
			array(
				'icon-Venn-Diagram' => 'Venn-Diagram'
			),
			array(
				'icon-Vest-2' => 'Vest-2'
			),
			array(
				'icon-Vest' => 'Vest'
			),
			array(
				'icon-Viddler' => 'Viddler'
			),
			array(
				'icon-Video-2' => 'Video-2'
			),
			array(
				'icon-Video-3' => 'Video-3'
			),
			array(
				'icon-Video-4' => 'Video-4'
			),
			array(
				'icon-Video-5' => 'Video-5'
			),
			array(
				'icon-Video-6' => 'Video-6'
			),
			array(
				'icon-Video-GameController' => 'Video-GameController'
			),
			array(
				'icon-Video-Len' => 'Video-Len'
			),
			array(
				'icon-Video-Len2' => 'Video-Len2'
			),
			array(
				'icon-Video-Photographer' => 'Video-Photographer'
			),
			array(
				'icon-Video-Tripod' => 'Video-Tripod'
			),
			array(
				'icon-Video' => 'Video'
			),
			array(
				'icon-Vietnam' => 'Vietnam'
			),
			array(
				'icon-View-Height' => 'View-Height'
			),
			array(
				'icon-View-Width' => 'View-Width'
			),
			array(
				'icon-Vimeo' => 'Vimeo'
			),
			array(
				'icon-Virgo-2' => 'Virgo-2'
			),
			array(
				'icon-Virgo' => 'Virgo'
			),
			array(
				'icon-Virus-2' => 'Virus-2'
			),
			array(
				'icon-Virus-3' => 'Virus-3'
			),
			array(
				'icon-Virus' => 'Virus'
			),
			array(
				'icon-Visa' => 'Visa'
			),
			array(
				'icon-Voice' => 'Voice'
			),
			array(
				'icon-Voicemail' => 'Voicemail'
			),
			array(
				'icon-Volleyball' => 'Volleyball'
			),
			array(
				'icon-Volume-Down' => 'Volume-Down'
			),
			array(
				'icon-Volume-Up' => 'Volume-Up'
			),
			array(
				'icon-VPN' => 'VPN'
			),
			array(
				'icon-Wacom-Tablet' => 'Wacom-Tablet'
			),
			array(
				'icon-Waiter' => 'Waiter'
			),
			array(
				'icon-Walkie-Talkie' => 'Walkie-Talkie'
			),
			array(
				'icon-Wallet-2' => 'Wallet-2'
			),
			array(
				'icon-Wallet-3' => 'Wallet-3'
			),
			array(
				'icon-Wallet' => 'Wallet'
			),
			array(
				'icon-Warehouse' => 'Warehouse'
			),
			array(
				'icon-Warning-Window' => 'Warning-Window'
			),
			array(
				'icon-Watch-2' => 'Watch-2'
			),
			array(
				'icon-Watch-3' => 'Watch-3'
			),
			array(
				'icon-Watch' => 'Watch'
			),
			array(
				'icon-Wave-2' => 'Wave-2'
			),
			array(
				'icon-Wave' => 'Wave'
			),
			array(
				'icon-Webcam' => 'Webcam'
			),
			array(
				'icon-weight-Lift' => 'weight-Lift'
			),
			array(
				'icon-Wheelbarrow' => 'Wheelbarrow'
			),
			array(
				'icon-Wheelchair' => 'Wheelchair'
			),
			array(
				'icon-Width-Window' => 'Width-Window'
			),
			array(
				'icon-Wifi-2' => 'Wifi-2'
			),
			array(
				'icon-Wifi-Keyboard' => 'Wifi-Keyboard'
			),
			array(
				'icon-Wifi' => 'Wifi'
			),
			array(
				'icon-Wind-Turbine' => 'Wind-Turbine'
			),
			array(
				'icon-Windmill' => 'Windmill'
			),
			array(
				'icon-Window-2' => 'Window-2'
			),
			array(
				'icon-Window' => 'Window'
			),
			array(
				'icon-Windows-2' => 'Windows-2'
			),
			array(
				'icon-Windows-Microsoft' => 'Windows-Microsoft'
			),
			array(
				'icon-Windows' => 'Windows'
			),
			array(
				'icon-Windsock' => 'Windsock'
			),
			array(
				'icon-Windy' => 'Windy'
			),
			array(
				'icon-Wine-Bottle' => 'Wine-Bottle'
			),
			array(
				'icon-Wine-Glass' => 'Wine-Glass'
			),
			array(
				'icon-Wink' => 'Wink'
			),
			array(
				'icon-Winter-2' => 'Winter-2'
			),
			array(
				'icon-Winter' => 'Winter'
			),
			array(
				'icon-Wireless' => 'Wireless'
			),
			array(
				'icon-Witch-Hat' => 'Witch-Hat'
			),
			array(
				'icon-Witch' => 'Witch'
			),
			array(
				'icon-Wizard' => 'Wizard'
			),
			array(
				'icon-Wolf' => 'Wolf'
			),
			array(
				'icon-Woman-Sign' => 'Woman-Sign'
			),
			array(
				'icon-WomanMan' => 'WomanMan'
			),
			array(
				'icon-Womans-Underwear' => 'Womans-Underwear'
			),
			array(
				'icon-Womans-Underwear2' => 'Womans-Underwear2'
			),
			array(
				'icon-Women' => 'Women'
			),
			array(
				'icon-Wonder-Woman' => 'Wonder-Woman'
			),
			array(
				'icon-Wordpress' => 'Wordpress'
			),
			array(
				'icon-Worker-Clothes' => 'Worker-Clothes'
			),
			array(
				'icon-Worker' => 'Worker'
			),
			array(
				'icon-Wrap-Text' => 'Wrap-Text'
			),
			array(
				'icon-Wreath' => 'Wreath'
			),
			array(
				'icon-Wrench' => 'Wrench'
			),
			array(
				'icon-X-Box' => 'X-Box'
			),
			array(
				'icon-X-ray' => 'X-ray'
			),
			array(
				'icon-Xanga' => 'Xanga'
			),
			array(
				'icon-Xing' => 'Xing'
			),
			array(
				'icon-Yacht' => 'Yacht'
			),
			array(
				'icon-Yahoo-Buzz' => 'Yahoo-Buzz'
			),
			array(
				'icon-Yahoo' => 'Yahoo'
			),
			array(
				'icon-Yelp' => 'Yelp'
			),
			array(
				'icon-Yes' => 'Yes'
			),
			array(
				'icon-Ying-Yang' => 'Ying-Yang'
			),
			array(
				'icon-Youtube' => 'Youtube'
			),
			array(
				'icon-Z-A' => 'Z-A'
			),
			array(
				'icon-Zebra' => 'Zebra'
			),
			array(
				'icon-Zombie' => 'Zombie'
			),
			array(
				'icon-Zoom-Gesture' => 'Zoom-Gesture'
			),
			array(
				'icon-Zootool' => 'Zootool'
			)
		);
		
		
		return array_merge($icons, $iconsmind_icons);
	}
}
