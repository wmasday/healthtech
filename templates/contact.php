<section class="mt-1 page mb-5" id="content-template">
    <img src="<?php echo get_theme_mod('background_contacts', get_template_directory_uri() . '/img/contact.png'); ?>" id="content-image" style="width: 100%;" />
    <div class="title-page">
        <h1><?php single_post_title(); ?></h1>
        <hr style="width: 100px;background-color:white;margin:auto;margin-top:30px;" />
    </div>
    <div class="container">
        <div class="card card-page">
            <?php the_post_thumbnail(); ?>
            <div class="p-2">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>