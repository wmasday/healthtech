<?php
function social_shortcode()
{
    $instagram = get_theme_mod('instagram');
    $twitter = get_theme_mod('twitter');
    $facebook = get_theme_mod('facebook');
    $youtube = get_theme_mod('youtube');
    
    $html = '
    <div class="social">
        <div class="social-icon mt-1">
            <a href="https://fb.com/'. $facebook .'" class="mdi-icon">
                <span class="dashicons dashicons-facebook-alt text-dark"></span>
            </a>
            <a href="https://instagram.com/'. $instagram .'" class="mdi-icon">
                <span class="dashicons dashicons-instagram text-dark"></span>
            </a>
            <a href="https://twitter.com/'. $twitter .'" class="mdi-icon">
                <span class="dashicons dashicons-twitter text-dark"></span>
            </a>
            <a href="https://youtube.com/@'. $youtube .'" class="mdi-icon">
                <span class="dashicons dashicons-youtube text-dark"></span>
            </a>
        </div>
    </div>
    ';
    return $html;
}
add_shortcode('social', 'social_shortcode');
