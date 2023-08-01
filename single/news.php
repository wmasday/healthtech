<section class="page mt-2 mb-5">
    <div class="news row container">
        <div class="col-sm-12">
            <h1 class="mt-4 mb-1"><?php echo the_title(); ?></h1>
            <div class="single-category-product">
                <hr style="width: 30px;
                           background-color: var(--brand);
                           height: 8px;
                           margin: auto;
                           border:none;
                           margin-right: 10px;
                           float: left;
                           margin-top: 7px;"/>
                <?php echo get_the_category()[0]->name; ?>
            </div>
        </div>
    </div>

    <div class="mt-2 container news">
        <?php echo the_content(); ?>
    </div>

    <div class="mt-5 container news">
        <h4 class="text-600">Recent Post</h4>
        <div class="row">
            <?php
                $parentID = get_theme_mod('post_category_home', 1);
                $args = array(
                    'cat' => $parentID,
                    'posts_per_page' => 4,
                    'order' => 'DESC'
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) {
                    while ($query->have_posts()) :
                        $query->the_post();
            ?>
                <a class="col-sm-3 recent-item" href="<?php the_permalink(); ?>">
                    <div class="post-title post"><?php echo the_title(); ?></div>
                </a>
            <?php
                    endwhile;
                }
            ?>
        </div>
    </div>
</section>