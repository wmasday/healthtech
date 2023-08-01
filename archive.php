<?php
get_header();

$parentID = get_queried_object()->category_parent;
$newsID = get_theme_mod('post_category_home', 1);
$productID = get_theme_mod('product_id', 1);

if ($parentID == $newsID) {
    get_template_part('archive/news');
}

if ($parentID == $productID) {
    get_template_part('archive/products');
}

get_footer();
?>