<?php get_template_part('includes/header'); ?>

<?php
    $url_full = get_permalink();
    $url_base = get_home_url();
    $permalink = str_replace('/', '', str_replace($url_base, "", $url_full));

    if (is_front_page()) {
        get_template_part('custom/custom_home', 'page');
    } else {
        get_template_part('custom/custom_' . $permalink, 'page');
    }
?>

<?php get_template_part('includes/footer'); ?>