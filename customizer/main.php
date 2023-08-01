<?php
function indexCustomizer($wp_customize ) {
    $wp_customize->add_panel('panelHealthtech', array(
        'title' => 'Customizer Healthtech',
        'description'   => 'Landing Page Customizer',
        'capability' => 'edit_theme_options',
        'priority' => 1
    ));

    // Utility Color
    $wp_customize->add_section('colorHealthtech', array(
        'title' => 'Edit Color Config',
        'description'   => 'Edit Color Config',
        'panel' => 'panelHealthtech',
    ));

    $wp_customize->add_setting('brand', array(
        'default'     => "#33b250",
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'brand', array(
        'label'        => __('Brand Color'),
        'section'    => 'colorHealthtech',
    )));

    $wp_customize->add_setting('white', array(
        'default'     => "#ffffff",
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'white', array(
        'label'        => __('White Color'),
        'section'    => 'colorHealthtech',
    )));

    $wp_customize->add_setting('light', array(
        'default'     => "#f1f2f6",
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'light', array(
        'label'        => __('Light Color'),
        'section'    => 'colorHealthtech',
    )));

    $wp_customize->add_setting('dark', array(
        'default'     => "#2f3542",
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'dark', array(
        'label'        => __('Dark Color'),
        'section'    => 'colorHealthtech',
    )));

    $wp_customize->add_setting('darken', array(
        'default'     => "#161a1f",
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'darken', array(
        'label'        => __('Darken Color'),
        'section'    => 'colorHealthtech',
    )));

    $wp_customize->add_setting('primary', array(
        'default'     => "#3742fa",
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'primary', array(
        'label'        => __('Primary Color'),
        'section'    => 'colorHealthtech',
    )));

    $wp_customize->add_setting('secondary', array(
        'default'     => "#747d8c",
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'secondary', array(
        'label'        => __('Secondary Color'),
        'section'    => 'colorHealthtech',
    )));

    $wp_customize->add_setting('info', array(
        'default'     => "#70a1ff",
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'info', array(
        'label'        => __('Info Color'),
        'section'    => 'colorHealthtech',
    )));

    $wp_customize->add_setting('danger', array(
        'default'     => "#ff4757",
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'danger', array(
        'label'        => __('Danger Color'),
        'section'    => 'colorHealthtech',
    )));

    $wp_customize->add_setting('success', array(
        'default'     => "#2ed573",
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'success', array(
        'label'        => __('Success Color'),
        'section'    => 'colorHealthtech',
    )));

    $wp_customize->add_setting('warning', array(
        'default'     => "#eccc68",
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'warning', array(
        'label'        => __('Warning Color'),
        'section'    => 'colorHealthtech',
    )));



    // Site Information
    $wp_customize->add_section('infoHealthtech', array(
        'title' => 'Edit Site Information',
        'description'   => 'Site Information Customizer',
        'panel' => 'panelHealthtech',
    ));

    $wp_customize->add_setting('brand-image', array(
        'default' => get_template_directory_uri() . '/img/logo.png',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'brand-image', array(
        'label' => 'Brand Image',
        'section' => 'infoHealthtech',
    )));

    $wp_customize->add_setting('sitename', array(
        'default' => __('PT Biomedikal Indopharm Nusantara'),
    ));

    $wp_customize->add_control('sitename', array (
        'label' => 'Sitename',
        'section' => 'infoHealthtech',
        'type' => 'text'
    ));

    $wp_customize->add_setting('description', array(
        'default' => __('Distributor Alat Kesehatan Yang Tepat & Akurat.'),
    ));
    
    $wp_customize->add_control('description', array (
        'label' => 'Description',
        'section' => 'infoHealthtech',
        'type' => 'textarea'
    ));

    $wp_customize->add_setting('telp', array(
        'default' => __('+62 21 000 000'),
    ));

    $wp_customize->add_control('telp', array (
        'label' => 'Telp',
        'section' => 'infoHealthtech',
        'type' => 'text'
    ));

    $wp_customize->add_setting('email', array(
        'default' => __('contact@mail.com'),
    ));

    $wp_customize->add_control('email', array (
        'label' => 'Email',
        'section' => 'infoHealthtech',
        'type' => 'text'
    ));

    $wp_customize->add_setting('fax', array(
        'default' => __('+62 21 000 000'),
    ));

    $wp_customize->add_control('fax', array (
        'label' => 'Fax',
        'section' => 'infoHealthtech',
        'type' => 'text'
    ));

    $wp_customize->add_setting('facebook', array(
        'default' => __('facebook'),
    ));

    $wp_customize->add_control('facebook', array (
        'label' => 'Username Facebook',
        'section' => 'infoHealthtech',
        'type' => 'text'
    ));

    $wp_customize->add_setting('instagram', array(
        'default' => __('instagram'),
    ));

    $wp_customize->add_control('instagram', array (
        'label' => 'Username Instagram',
        'section' => 'infoHealthtech',
        'type' => 'text'
    ));

    $wp_customize->add_setting('twitter', array(
        'default' => __('twitter'),
    ));

    $wp_customize->add_control('twitter', array (
        'label' => 'Username Twitter',
        'section' => 'infoHealthtech',
        'type' => 'text'
    ));

    $wp_customize->add_setting('youtube', array(
        'default' => __('youtube'),
    ));

    $wp_customize->add_control('youtube', array (
        'label' => 'Youtube Channel',
        'section' => 'infoHealthtech',
        'type' => 'text'
    ));

    $wp_customize->add_setting('address', array(
        'default' => __('Inti, Jl. Griya Ratna No.72, RT.2/RW.20, Sunter Agung, Kec. Tj. Priok, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14350'),
    ));
    
    $wp_customize->add_control('address', array (
        'label' => 'Address',
        'section' => 'infoHealthtech',
        'type' => 'textarea'
    ));

    // Landing Page

    $wp_customize->add_section('indexHealthtech', array(
        'title' => 'Edit Landing Page',
        'description'   => 'Landing Page Customizer',
        'panel' => 'panelHealthtech',
    ));

    $wp_customize->add_setting('btn-landing', array(
        'default' => __('Cek Katalog Kami'),
    ));
    
    $wp_customize->add_control('btn-landing', array (
        'label' => 'Button Value',
        'section' => 'indexHealthtech',
        'type' => 'text'
    ));

    $wp_customize->add_setting('href-landing', array(
        'default' => __('/produk'),
    ));
    
    $wp_customize->add_control('href-landing', array (
        'label' => 'Button Link',
        'section' => 'indexHealthtech',
        'type' => 'text'
    ));

    $wp_customize->add_setting('background-landing', array(
        'default' => get_template_directory_uri() . '/img/particle.png',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'background-landing', array(
        'label' => 'Landing Background Image',
        'section' => 'indexHealthtech',
    )));


    // Slider
    $wp_customize->add_section('sliderHealthtech', array(
        'title' => 'Edit Slider',
        'description'   => 'Slider Customizer',
        'panel' => 'panelHealthtech',
    ));

    // Slider 1
    $wp_customize->add_setting('slider_1_text', array(
        'default' => __('Slider 1'),
    ));

    $wp_customize->add_control('slider_1_text', array (
        'label' => 'Text Slider 1',
        'section' => 'sliderHealthtech',
        'type' => 'textarea'
    ));

    $wp_customize->add_setting('slider_1_image', array(
        'default' => get_template_directory_uri() . '/img/slider.png',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_1_image', array(
        'label' => 'Image Slider 1',
        'section' => 'sliderHealthtech',
    )));
    
    // Slider 2
    $wp_customize->add_setting('slider_2_text', array(
        'default' => __('Slider 2'),
    ));

    $wp_customize->add_control('slider_2_text', array (
        'label' => 'Text Slider 2',
        'section' => 'sliderHealthtech',
        'type' => 'textarea'
    ));

    $wp_customize->add_setting('slider_2_image', array(
        'default' => get_template_directory_uri() . '/img/slider.png',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_2_image', array(
        'label' => 'Image Slider 2',
        'section' => 'sliderHealthtech',
    )));

    // Slider 3
    $wp_customize->add_setting('slider_3_text', array(
        'default' => __('Slider 3'),
    ));

    $wp_customize->add_control('slider_3_text', array (
        'label' => 'Text Slider 3',
        'section' => 'sliderHealthtech',
        'type' => 'textarea'
    ));

    $wp_customize->add_setting('slider_3_image', array(
        'default' => get_template_directory_uri() . '/img/slider.png',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_3_image', array(
        'label' => 'Image Slider 3',
        'section' => 'sliderHealthtech',
    )));

    // Slider 4
    $wp_customize->add_setting('slider_4_text', array(
        'default' => __('Slider 4'),
    ));

    $wp_customize->add_control('slider_4_text', array (
        'label' => 'Text Slider 4',
        'section' => 'sliderHealthtech',
        'type' => 'textarea'
    ));

    $wp_customize->add_setting('slider_4_image', array(
        'default' => get_template_directory_uri() . '/img/slider.png',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_4_image', array(
        'label' => 'Image Slider 4',
        'section' => 'sliderHealthtech',
    )));

    // Slider 5
    $wp_customize->add_setting('slider_5_text', array(
        'default' => __('Slider 5'),
    ));

    $wp_customize->add_control('slider_5_text', array (
        'label' => 'Text Slider 5',
        'section' => 'sliderHealthtech',
        'type' => 'textarea'
    ));

    $wp_customize->add_setting('slider_5_image', array(
        'default' => get_template_directory_uri() . '/img/slider.png',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_5_image', array(
        'label' => 'Image Slider 5',
        'section' => 'sliderHealthtech',
    )));

    // Pages Home
    $wp_customize->add_section('homeHealthtech', array(
        'title' => 'Edit Home Page',
        'description'   => 'Home Page Customizer',
        'panel' => 'panelHealthtech',
    ));

    $wp_customize->add_setting('text_to_news', array(
        'default' => __('Lihat Berita Lainnya'),
    ));

    $wp_customize->add_control('text_to_news', array (
        'label' => 'Text Section After Slider',
        'section' => 'homeHealthtech',
        'type' => 'text'
    ));

    $wp_customize->add_setting('link_to_news', array(
        'default' => __('berita'),
    ));

    $wp_customize->add_control('link_to_news', array (
        'label' => 'Link Section After Slider',
        'section' => 'homeHealthtech',
        'type' => 'text'
    ));
    
    $wp_customize->add_setting('background_home', array(
        'default' => get_template_directory_uri() . '/img/section.png',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'background_home', array(
        'label' => 'Background Section',
        'section' => 'homeHealthtech',
    )));

    $wp_customize->add_setting('text_card_home', array(
        'default' => __('Berita Terbaru'),
    ));

    $wp_customize->add_control('text_card_home', array (
        'label' => 'Text Card Home',
        'section' => 'homeHealthtech',
        'type' => 'text'
    ));

    $wp_customize->add_setting('post_category_home', array(
        'default' => __('1'),
    ));

    $wp_customize->add_control('post_category_home', array (
        'label' => 'Post Category ID - Home',
        'section' => 'homeHealthtech',
        'type' => 'number'
    ));

    $wp_customize->add_setting('post_name_home', array(
        'default' => __('BIOSET NEWS'),
    ));

    $wp_customize->add_control('post_name_home', array (
        'label' => 'Section Post Name - Home',
        'section' => 'homeHealthtech',
        'type' => 'text'
    ));
    
    // Pages - Abouts
    $wp_customize->add_section('aboutsHealthtech', array(
        'title' => 'Edit Abouts Page',
        'description'   => 'Abouts Page Customizer',
        'panel' => 'panelHealthtech',
    ));

    $wp_customize->add_setting('background_abouts', array(
        'default' => get_template_directory_uri() . '/img/abouts.png',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'background_abouts', array(
        'label' => 'Background Section',
        'section' => 'aboutsHealthtech',
    )));

    // Pages - Services
    $wp_customize->add_section('servicesHealthtech', array(
        'title' => 'Edit Services Page',
        'description'   => 'Services Page Customizer',
        'panel' => 'panelHealthtech',
    ));

    $wp_customize->add_setting('background_services', array(
        'default' => get_template_directory_uri() . '/img/service.png',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'background_services', array(
        'label' => 'Background Section',
        'section' => 'servicesHealthtech',
    )));

    // Pages - Contacts
    $wp_customize->add_section('contactsHealthtech', array(
        'title' => 'Edit Contacts Page',
        'description'   => 'Contacts Page Customizer',
        'panel' => 'panelHealthtech',
    ));

    $wp_customize->add_setting('background_contacts', array(
        'default' => get_template_directory_uri() . '/img/contact.png',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'background_contacts', array(
        'label' => 'Background Section',
        'section' => 'contactsHealthtech',
    )));

    // Pages - News
    $wp_customize->add_section('newsHealthtech', array(
        'title' => 'Edit News Page',
        'description'   => 'News Page Customizer',
        'panel' => 'panelHealthtech',
    ));

    $wp_customize->add_setting('background_news', array(
        'default' => get_template_directory_uri() . '/img/news.png',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'background_news', array(
        'label' => 'Background Section',
        'section' => 'newsHealthtech',
    )));

    $wp_customize->add_setting('left_text_news', array(
        'default' => __('Berita'),
    ));

    $wp_customize->add_control('left_text_news', array (
        'label' => 'Text On Left News Page',
        'section' => 'newsHealthtech',
        'type' => 'text'
    ));

    $wp_customize->add_setting('right_text_news', array(
        'default' => __('Tahun'),
    ));

    $wp_customize->add_control('right_text_news', array (
        'label' => 'Text On Right News Page',
        'section' => 'newsHealthtech',
        'type' => 'text'
    ));

    $wp_customize->add_setting('limit_news', array(
        'default' => __('10'),
    ));

    $wp_customize->add_control('limit_news', array (
        'label' => 'Limit News On Page',
        'section' => 'newsHealthtech',
        'type' => 'number'
    ));

    // Pages - Product
    $wp_customize->add_section('productHealthtech', array(
        'title' => 'Edit Product Page',
        'description'   => 'Product Page Customizer',
        'panel' => 'panelHealthtech',
    ));

    $wp_customize->add_setting('product_id', array(
        'default' => __('1'),
    ));

    $wp_customize->add_control('product_id', array (
        'label' => 'Product - Category ID',
        'section' => 'productHealthtech',
        'type' => 'number'
    ));

    $wp_customize->add_setting('limit_product', array(
        'default' => __('10'),
    ));

    $wp_customize->add_control('limit_product', array (
        'label' => 'Limit Products On Page',
        'section' => 'productHealthtech',
        'type' => 'number'
    ));

    $wp_customize->add_setting('background_product', array(
        'default' => get_template_directory_uri() . '/img/products.png',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'background_product', array(
        'label' => 'Background Section',
        'section' => 'productHealthtech',
    )));

    $wp_customize->add_setting('detail_product_btn', array(
        'default' => __('Lihat Selengkapnya'),
    ));

    $wp_customize->add_control('detail_product_btn', array (
        'label' => 'Button Detail Produk',
        'section' => 'productHealthtech',
        'type' => 'text'
    ));

    // Footer
    $wp_customize->add_section('footerHealthtech', array(
        'title' => 'Edit Footer',
        'description'   => 'Footer Customizer',
        'panel' => 'panelHealthtech',
    ));

    $wp_customize->add_setting('heading_one_footer', array(
        'default' => __('Abouts'),
    ));

    $wp_customize->add_control('heading_one_footer', array (
        'label' => 'Head Menu 1',
        'section' => 'footerHealthtech',
        'type' => 'text'
    ));

    $wp_customize->add_setting('heading_two_footer', array(
        'default' => __('News'),
    ));

    $wp_customize->add_control('heading_two_footer', array (
        'label' => 'Head Menu 2',
        'section' => 'footerHealthtech',
        'type' => 'text'
    ));

    $wp_customize->add_setting('heading_three_footer', array(
        'default' => __('Products'),
    ));

    $wp_customize->add_control('heading_three_footer', array (
        'label' => 'Head Menu 3',
        'section' => 'footerHealthtech',
        'type' => 'text'
    ));

    $wp_customize->add_setting('heading_four_footer', array(
        'default' => __('Services'),
    ));

    $wp_customize->add_control('heading_four_footer', array (
        'label' => 'Head Menu 4',
        'section' => 'footerHealthtech',
        'type' => 'text'
    ));

    $wp_customize->add_setting('heading_five_footer', array(
        'default' => __('Career'),
    ));

    $wp_customize->add_control('heading_five_footer', array (
        'label' => 'Head Menu 5',
        'section' => 'footerHealthtech',
        'type' => 'text'
    ));

    $wp_customize->add_setting('heading_six_footer', array(
        'default' => __('Contact'),
    ));

    $wp_customize->add_control('heading_six_footer', array (
        'label' => 'Head Menu 6',
        'section' => 'footerHealthtech',
        'type' => 'text'
    ));
}
add_action('customize_register', 'indexCustomizer');
