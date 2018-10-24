<?php

$logo_height = '';

if(!empty(bober_get_option('al-height-logo'))){
    $logo_height = 'style="height:'.bober_get_option('al-height-logo').'"';
}

$logo = '';
$logo_white = '<img '.$logo_height.' alt="'.esc_attr( get_bloginfo('name') ).'" src="'.esc_url( bober_get_option('al-logo-white') ).'" class="logo-white">';
$logo_dark = '<img '.$logo_height.' alt="'.esc_attr( get_bloginfo('name') ).'" src="'.esc_url( bober_get_option('al-logo-dark') ).'" class="logo-dark">';

if(bober_get_option('al-type-logo') === 'image'){
    $logo .= $logo_white.$logo_dark;
}elseif(bober_get_option('al-type-logo') === 'text'){
    if(!empty(bober_get_option('al-text-logo'))){
        $logo = bober_get_option('al-text-logo');
    }else{
        $logo = get_bloginfo('name');
    }
}elseif(empty($logo)){
    $logo = get_bloginfo('name');
}
?>

<a href="<?php echo esc_url(home_url('/')); ?>" class="al-logo-site logo smooth-scroll">
    <?php echo wp_kses_post($logo); ?>
</a>
