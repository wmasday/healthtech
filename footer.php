<footer class="mt-1">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <a href="<?php bloginfo('url'); ?>" class="navbar-brand-image">
                    <img src="<?php echo get_theme_mod('brand-image', get_template_directory_uri() . '/img/logo.png'); ?>" onerror="this.onerror = null; this.remove();" />
                </a>
                <div class="brand-name mt-1"><?php echo get_theme_mod('sitename', 'PT Biomedikal Indopharm Nusantara'); ?></div>
                <p class="brand-description mt-1">
                    <?php echo get_theme_mod('address', 'Inti, Jl. Griya Ratna No.72, RT.2/RW.20, Sunter Agung, Kec. Tj. Priok, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14350'); ?>
                </p>
                <div class="social mt-2">
                    <div class="head-content">Ikuti Kami</div>
                    <div class="social-icon mt-1">
                        <a href="https://fb.com/<?php echo get_theme_mod('facebook'); ?>" class="mdi-icon">
                            <span class="dashicons dashicons-facebook-alt"></span>
                        </a>
                        <a href="https://instagram.com/<?php echo get_theme_mod('instagram'); ?>" class="mdi-icon">
                            <span class="dashicons dashicons-instagram"></span>
                        </a>
                        <a href="https://twitter.com/<?php echo get_theme_mod('twitter'); ?>" class="mdi-icon">
                            <span class="dashicons dashicons-twitter"></span>
                        </a>
                        <a href="https://youtube.com/@<?php echo get_theme_mod('youtube'); ?>" class="mdi-icon">
                            <span class="dashicons dashicons-youtube"></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-1">
                <div class="head-content">
                    <?php echo get_theme_mod('heading_one_footer', 'Abouts'); ?>
                </div>
                <?php
                    $footer = array('theme_location' => 'footer_menu_1');
                    wp_nav_menu($footer);
                ?>
            </div>

            <div class="col-sm-1">
                <div class="head-content">
                    <?php echo get_theme_mod('heading_two_footer', 'News'); ?>
                </div>
                <?php
                    $footer = array('theme_location' => 'footer_menu_2');
                    wp_nav_menu($footer);
                ?>
            </div>
            
            <div class="col-sm-1">
                <div class="head-content">
                    <?php echo get_theme_mod('heading_three_footer', 'Products'); ?>
                </div>
                <?php
                    $footer = array('theme_location' => 'footer_menu_3');
                    wp_nav_menu($footer);
                ?>
            </div>

            <div class="col-sm-1">
                <div class="head-content">
                    <?php echo get_theme_mod('heading_four_footer', 'Services'); ?>
                </div>
                <?php
                    $footer = array('theme_location' => 'footer_menu_4');
                    wp_nav_menu($footer);
                ?>
            </div>

            <div class="col-sm-1">
                <div class="head-content">
                    <?php echo get_theme_mod('heading_five_footer', 'Career'); ?>
                </div>
                <?php
                    $footer = array('theme_location' => 'footer_menu_5');
                    wp_nav_menu($footer);
                ?>
            </div>

            <div class="col-sm-1">
                <div class="head-content">
                    <?php echo get_theme_mod('heading_six_footer', 'Contact'); ?>
                </div>
                <?php
                    $footer = array('theme_location' => 'footer_menu_6');
                    wp_nav_menu($footer);
                ?>
            </div>

        </div>
        <div class="text-center footername">
            Copyright &copy; <?php echo get_theme_mod('sitename', 'PT Biomedikal Indopharm Nusantara');
                                echo " - " . date('Y'); ?>
            All rights reserved
        </div>
    </div>
</footer>
<?php wp_footer(); ?>