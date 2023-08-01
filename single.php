<?php
get_header();

if (isset(get_the_category()[0]->parent)) {
    $parentID = get_the_category()[0]->parent;
    $newsID = get_theme_mod('post_category_home', 1);
    $productID = get_theme_mod('product_id', 1);
    if ($parentID == $newsID) {
        get_template_part('single/news');
    }
    
    if ($parentID == $productID) {
        get_template_part('single/product');
    }
} else {
    get_template_part('single/product');
}


get_footer();
