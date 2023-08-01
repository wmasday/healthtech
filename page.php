<?php
get_header();
if (have_posts()) {
    while (have_posts()) {
        the_post();

        if (is_page('tentang-kami')) {
            get_template_part('templates/about');
        } else if (is_page('layanan')) {
            get_template_part('templates/service');
        } else if (is_page('kontak')) {
            get_template_part('templates/contact');
        } else if (is_page('berita')) {
            get_template_part('templates/news');
        } else if (is_page('produk')) {
            get_template_part('templates/product');
        } else {
            get_template_part('templates/content');
        }
    }
}

get_footer();
?>