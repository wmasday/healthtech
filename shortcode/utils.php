<?php

function email_shortcode()
{
    $data = get_theme_mod('email');
    return $data;
}
add_shortcode('email', 'email_shortcode');


function telp_shortcode()
{
    $data = get_theme_mod('telp');
    return $data;
}
add_shortcode('telp', 'telp_shortcode');

function fax_shortcode()
{
    $data = get_theme_mod('fax');
    return $data;
}
add_shortcode('fax', 'fax_shortcode');

function address_shortcode()
{
    $data = get_theme_mod('address');
    return $data;
}
add_shortcode('address', 'address_shortcode');