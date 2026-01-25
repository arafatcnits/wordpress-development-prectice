<?php

function bricksland_header_social()
{
    $fb_url  = get_theme_mod("fb_url", "#");
    $ins_url = get_theme_mod("ins_url", "#");
    $wp_url  = get_theme_mod("wp_url", "#");
    $yu_url  = get_theme_mod("yu_url", "#");


    if (!empty($fb_url)) : ?>
        <a href="<?php echo esc_url($fb_url); ?>"><i class="fa-brands fa-facebook-f"></i></a>
    <?php endif;

    if (!empty($ins_url)) : ?>
        <a href="<?php echo esc_url($ins_url); ?>"><i class="fa-brands fa-instagram"></i></a>
    <?php endif;

    if (!empty($wp_url)) : ?>
        <a href="<?php echo esc_url($wp_url); ?>"><i class="fa-brands fa-whatsapp"></i></a>
    <?php endif;

    if (!empty($yu_url)) : ?>
        <a href="<?php echo esc_url($yu_url); ?>"><i class="fa-brands fa-youtube"></i></a>
<?php endif;
}
