<section class="page mt-2 mb-5">
    <div class="split-bg row p-4">
        <div class="col-sm-6">
            <div class="single-category-product">
                <?php 
                    global $post;
                    $terms = get_the_terms($post->ID, 'product_cat');
                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($terms[0]->iterm_id), 'single-post-thumbnail');
                    echo $terms[0]->name;
                ?>
            </div>
            <h1 class="post-h1"><?php echo the_title(); ?></h1>
            <div class="detail mt-7">
                <h3>Deskripsi</h3>
                <p class="description post"><?php echo the_excerpt(); ?></p>
            </div>
        </div>
        <div class="col-sm-6 text-center">
            <img src="<?php echo $image[0]; ?>"/>
        </div>
    </div>

    <div class="mt-4 container single">
        <?php echo the_content(); ?>
    </div>
    <?php
     do_shortcode('[add_to_cart_url id="99"]');
    ?>
</section>