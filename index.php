<?php get_header(); ?>
<main>
    <section class="landing">
        <div class="container">
            <div class="row">
                <div class="col-sm-6" style="position: relative;z-index: 9999;">
                    <h1 class="text-brand h1"><?php echo get_theme_mod('sitename', 'PT Biomedikal Indopharm Nusantara'); ?></h1>
                    <p class="detail text-brand"><?php echo get_theme_mod('description', 'Distributor Alat Kesehatan Yang Tepat & Akurat.'); ?></p>
                    <a href="<?php echo get_theme_mod('href-landing', 'produk'); ?>" class="btn btn-brand">
                        <?php echo get_theme_mod('btn-landing', 'Cek Katalog Kami'); ?>
                    </a>
                </div>
                <div class="col-sm-6">
                    <img src="<?php echo get_theme_mod('background-landing', get_template_directory_uri() . '/img/particle.png'); ?>" alt="" class="hero" />
                </div>
            </div>
        </div>
    </section>

    <section class="bg-dark mt-0 text-center p-5">
        <a href="<?php echo get_theme_mod('link_to_news', 'berita'); ?>" class="text-white text-400"><?php echo get_theme_mod('text_to_news', 'Lihat Berita Lainnya'); ?></a>
    </section>

    <section>
        <img src="<?php echo get_theme_mod('background_home', get_template_directory_uri() . '/img/section.png'); ?>" alt="" id="homeImage" />
        <div class="container">
            <div class="card card-single p-3" id="homeCard">
                <span class="text-400 text-brand"><?php echo get_theme_mod('text_card_home', 'Berita Terbaru'); ?></span>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="devider"></div>
                    </div>
                    <?php
                        $id = get_theme_mod('post_category_home', 1);
                        $args = array(
                            'cat' => $id,
                            'posts_per_page' => 1,
                            'orderby' => 'date',
                            'order' => 'DESC'
                        );
                        $query = new WP_Query($args);
                        if ($query->have_posts()) {
                            while ($query->have_posts()) :
                                $query->the_post();
                    ?>
                        <a class="col-sm-10" href="<?php the_permalink(); ?>">
                            <h3 class="text-400 text-dark post"><?php the_title(); ?></h3>
                        </a>
                    <?php
                            endwhile;
                        }
                    ?>
                </div>
            </div>

            <div class="mt-4">
                <div class="row">
                <?php
                    $id = get_theme_mod('post_category_home', 1);
                    $args = array(
                        'cat' => $id,
                        'posts_per_page' => 3,
                        'order' => 'DESC'
                    );
                    $query = new WP_Query($args);
                    if ($query->have_posts()) {
                        while ($query->have_posts()) :
                            $query->the_post();
                ?>
                    <a href="<?php the_permalink(); ?>" class="col-sm-4 recent-post p-3">
                        <div class="category-name">
                            <?php echo get_theme_mod('post_name_home', 'BIOSET NEWS'); ?>
                        </div>
                        <p class="value-post mt-1 post"><?php the_title(); ?></p>
                    </a>
                <?php
                        endwhile;
                    } else {
                ?>
                    <a href="#" class="col-sm-12 recent-post p-3">
                        <div class="category-name">
                            <?php echo get_theme_mod('post_name_home', 'BIOSET NEWS'); ?>
                        </div>
                        <p class="value-post mt-1 post">Not Have Post Yet!</p>
                    </a>
                <?php
                    }
                ?>
                </div>
            </div>
        </div>
    </section>

    <section style="position: relative;">
        <div class="image-container">
            <div class="slide">
                <img src="<?php echo get_theme_mod('slider_1_image', get_template_directory_uri() . '/img/slider.png'); ?>">
                <div class="slide-text"><?php echo get_theme_mod('slider_1_text', 'Image Slider'); ?></div>
            </div>
            <div class="slide">
                <img src="<?php echo get_theme_mod('slider_2_image', get_template_directory_uri() . '/img/slider.png'); ?>">
                <div class="slide-text"><?php echo get_theme_mod('slider_2_text', 'Image Slider'); ?></div>
            </div>
            <div class="slide">
                <img src="<?php echo get_theme_mod('slider_3_image', get_template_directory_uri() . '/img/slider.png'); ?>">
                <div class="slide-text"><?php echo get_theme_mod('slider_3_text', 'Image Slider'); ?></div>
            </div>
            <div class="slide">
                <img src="<?php echo get_theme_mod('slider_4_image', get_template_directory_uri() . '/img/slider.png'); ?>">
                <div class="slide-text"><?php echo get_theme_mod('slider_4_text', 'Image Slider'); ?></div>
            </div>
            <div class="slide">
                <img src="<?php echo get_theme_mod('slider_5_image', get_template_directory_uri() . '/img/slider.png'); ?>">
                <div class="slide-text"><?php echo get_theme_mod('slider_5_text', 'Image Slider'); ?></div>
            </div>

            <a class="previousIcon" onclick="moveSlides(-1)">
                <i class="dashicons dashicons-arrow-left-alt2"></i>
            </a>
            <a class="nextIcon" onclick="moveSlides(1)">
                <i class="dashicons dashicons-arrow-right-alt2"></i>
            </a>
        </div>
        <br>

        <div style="text-align:center" class="slider-nav">
            <span class="footerdot" onclick="activeSlide(1)"></span>
            <span class="footerdot" onclick="activeSlide(2)"></span>
            <span class="footerdot" onclick="activeSlide(3)"></span>
            <span class="footerdot" onclick="activeSlide(4)"></span>
            <span class="footerdot" onclick="activeSlide(5)"></span>
        </div>
    </section>
</main>
<?php get_footer(); ?>