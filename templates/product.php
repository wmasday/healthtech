<section class="mt-5">
    <div class="bg-darken w-100 p-3 text-center all-product-category pt-4">
        <?php
            $orderby = 'name';
            $order = 'asc';
            $hide_empty = false ;
            $cat_args = array(
                'orderby'    => $orderby,
                'order'      => $order,
                'hide_empty' => $hide_empty,
            );
 
            $product_categories = get_terms('product_cat', $cat_args);
            $count = count($product_categories);
            foreach ($product_categories as $key => $data) {
                if ($key+1 != $count) {
        ?>
            <a class="product-category" href="<?php echo get_category_link($data->term_id); ?>">
                <div class="name-category">
                    <?php echo $data->name; ?>
                </div>
            </a>
        <?php
                }
        }
        ?>
    </div>

    <div style="position: relative;" class="container-product">
        <div class="image-container" style="background: url('<?php echo get_theme_mod('background_product', get_template_directory_uri() . '/img/products.png'); ?>');">
        <?php
            $limit = get_theme_mod('limit_product', 10);
            $key = 1;
            $args = array(
                'posts_per_page' => $limit,
                'order' => 'DESC',
                'post_type' => 'product'
            );
            $wc = wc_get_products($args);
            $query = wc_get_products($args);
            foreach ($query as $data) {
                $image = wp_get_attachment_image_src(get_post_thumbnail_id($data->id), 'single-post-thumbnail');
        ?>
                    <div class="slide-product">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="name-product mt-3"><?php echo $data->name; ?></div>
                                <div class="category-product mt-1">
                                <?php
                                    $term = get_term_by('id', $data->category_ids[0], 'product_cat');
                                    echo $term->name;
                                ?>
                                </div>
                                <p class="description text-dark mt-3 post" style="max-width: 75%;">
                                    <?php echo $data->short_description; ?>
                                </p>
                                <a href="<?php echo $data->slug; ?>" class="text-brand">
                                    <?php echo get_theme_mod('detail_product_btn', 'Lihat Selengkapnya'); ?>
                                </a>
                            </div>
                            <?php
                                if ($image) {
                            ?>
                                <div class="col-sm-6 text-end image-product">
                                    <img src="<?php echo $image[0]; ?>" alt=""/>
                                </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
        <?php
            }
        ?>

            <a class="previousIcon" onclick="moveSlides(-1)">
                <i class="dashicons dashicons-arrow-left-alt2 text-brand"></i>
            </a>
            <a class="nextIcon" onclick="moveSlides(1)">
                <i class="dashicons dashicons-arrow-right-alt2 text-brand"></i>
            </a>
        </div>
        <br>

        <div style="text-align:center" class="slider-nav">
        <?php
            $limit = get_theme_mod('limit_product', 10);
            $key = 1;
            $args = array(
                'posts_per_page' => $limit,
                'order' => 'DESC',
                'post_type' => 'product'
            );
            $query = wc_get_products($args);
            foreach ($query as $data) {
        ?>
                <span class="footerdot" onclick="activeSlide(<?php echo $key++; ?>)"></span>
        <?php } ?>
        </div>
    </div>
</section>