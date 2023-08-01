<section class="page">
    <div class="container mt-4">
        <div class="row mt-3">
            <div class="col-sm-6 text-start">
                <h3 class="text-500 text-brand">Produk</h3>
            </div>
            <div class="col-sm-6 text-end">
                <h3 class="text-500 text-brand">
                    <?php echo get_queried_object()->name; ?>
                </h3>
            </div>
        </div>

        <div class="row mt-3">
        <?php
            $limit = get_theme_mod('limit_product', 10);
            $args = array(
                'cat' => $cat,
                'posts_per_page' => $limit,
                'order' => 'DESC'
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) {
                while ($query->have_posts()) :
                    $query->the_post();
        ?>
            <a class="col-sm-3 bg-white product-item" href="<?php the_permalink(); ?>">
                <img src="<?php echo get_theme_mod('brand-image', get_template_directory_uri() . '/img/cl8000.png'); ?>" />
                <div class="product-name">
                    <?php the_title(); ?>
                </div>
                <div class="product-description post">
                    <?php the_excerpt(); ?>
                </div>
                <div class="btn btn-brand mt-3 text-center">Check It Out!</div>
            </a>
        <?php
            endwhile;
        }
        ?>
        </div>
    </div>
</section>