<style type="text/css">
    body {
        background-color: var(--light);
    }
</style>
<section class="mt-1 page mb-5">
    <img src="<?php echo get_theme_mod('background_news', get_template_directory_uri() . '/img/news.png'); ?>" alt="" style="width: 100%;" />
    <div class="container">
        <div class="card card-single p-3" id="cardSingle">
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

        <div class="row mt-3">
            <div class="col-sm-1">
                <span class="text-400">
                    <?php echo get_theme_mod('left_text_news', 'Berita'); ?>
                </span>
                <div class="devider" style="background-color: #000;"></div>
            </div>
            <div class="col-sm-9 post-news">
                <?php
                $id = get_theme_mod('post_category_home', 1);
                $limit = get_theme_mod('limit_news', 10);
                $args = array(
                    'cat' => $id,
                    'posts_per_page' => $limit,
                    'order' => 'DESC'
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) {
                    while ($query->have_posts()) :
                        $query->the_post();
                ?>
                    <a href="<?php the_permalink(); ?>" class="news-item bg-white border-radius row d-inline-block">
                        <div class="col-sm-2 border-end">
                            <h3 class="text-500 text-dark"><?php echo get_the_date('m-d'); ?></h3>
                            <span class="text-dark"><?php echo get_the_date('Y'); ?></span>
                        </div>
                        <div class="col-sm-10 ps-3">
                            <h3 class="text-400 text-dark post"><?php the_title(); ?></h3>
                        </div>
                    </a>
                <?php
                    endwhile;
                }
                ?>
            </div>
            <div class="col-sm-2 ps-2 category-news">
                <div class="bg-brand border-radius text-white text-center" style="padding: 10px 10px 10px 10px;">
                    <?php echo get_theme_mod('right_text_news', 'Tahun'); ?>
                </div>
                <div class="sidebar-menu">
                <?php
                    $parentCategory = get_theme_mod('post_category_home', 1);
                    $childCategories = get_categories('&child_of='. $parentCategory .'&hide_empty');
                    foreach ($childCategories as $data) {
                ?>
                        <a href="<?php echo get_category_link($data->term_id); ?>" class="btn btn-transparent w-100 d-inline-block text-center">
                            <?php echo $data->name; ?>
                        </a>
                <?php
                    }
                ?>
                </div>
            </div>
        </div>
    </div>
</section>