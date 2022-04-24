<?php
/**
 * triumph Theme Customizer.
 *
 * @package triumph Lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function triumph_seo_customize_register( $wp_customize ) {


    /***************************************************/
    /*****            Theme Options                 ****/
    /**************************************************/
    $wp_customize->add_panel( 'panel_id', array(
        'priority'       => 121,
        'capability'     => 'edit_theme_options',
        'title'          => __('Theme Design Options', 'triumph-seo'),
        'description'    => __('Theme Design Options', 'triumph-seo'),
        ) ); 

    /***************************************************/
    /*****                 Settings                 ****/
    /**************************************************/
    $wp_customize->add_section( 'triumph_seo_styling_settings', array(
        'title'      => __('All Blog Posts Settings','triumph-seo'),
        'priority'   => 122,
        'capability' => 'edit_theme_options',

        ) );


    /***************************************************/
    /*****                 General                 ****/
    /**************************************************/
    $wp_customize->add_section( 'triumph_seo_general_layout', array(
        'title'      => __('General Layout','triumph-seo'),
        'priority'   => 1,
        'capability' => 'edit_theme_options',
        ) );


    /***************************************************/
    /*****                 Layout                 ****/
    /**************************************************/
    $wp_customize->add_setting('triumph_seo_layout', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_key',
        'default'           => 'cslayout',
        ));


    /***************************************************/
    /*****                 Header                  ****/
    /**************************************************/

    $wp_customize->add_setting( 'header_right_button_text', array(
        'type'              => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'capability'        => 'edit_theme_options',
        ) );
    $wp_customize->add_control( 'header_right_button_text', array(
        'label'    => __( "Header Button Text", 'triumph-seo' ),
        'section'  => 'header_image',
        'type'     => 'text',
        'priority' => 1,
        ) );
    $wp_customize->add_setting( 'header_right_button_link', array(
        'type'              => 'theme_mod',
        'sanitize_callback' => 'esc_url_raw',
        'capability'        => 'edit_theme_options',
        ) );
    $wp_customize->add_control( 'header_right_button_link', array(
        'label'    => __( "Header Button Link", 'triumph-seo' ),
        'section'  => 'header_image',
        'type'     => 'text',
        'priority' => 1,
        ) );
    $wp_customize->add_setting( 'header_right_button_bg', array(
        'default'           => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
        ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_right_button_bg', array(
        'label'       => __( 'Button Background Color', 'triumph-seo' ),
        'section'     => 'header_image',
        'priority'   => 1,
        'settings'    => 'header_right_button_bg',
        ) ) );
    $wp_customize->add_setting( 'header_right_button_text_color', array(
        'default'           => '#005fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
        ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_right_button_text_color', array(
        'label'       => __( 'Button Text Color', 'triumph-seo' ),
        'section'     => 'header_image',
        'priority'   => 1,
        'settings'    => 'header_right_button_text_color',
        ) ) );
    $wp_customize->add_setting( 'top_header_background_color', array(
        'default'           => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
        ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_header_background_color', array(
        'label'       => __( 'Header Background Color', 'triumph-seo' ),
        'description' => __( 'Applied to header background.', 'triumph-seo' ),
        'section'     => 'header_image',
        'priority'   => 10,
        'settings'    => 'top_header_background_color',
        ) ) );
    $wp_customize->add_setting( 'primary_theme_colors', array(
        'default'           => '#005fff',
        'sanitize_callback' => 'sanitize_hex_color',
        ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_theme_colors', array(
        'label'    => __('Primary Color Scheme','triumph-seo'),
        'section'  => 'triumph_seo_general_layout',
        'priority'   => 0,
        'settings' => 'primary_theme_colors',
        )) );


    /***************************************************/
    /*****               Sections                  ****/
    /**************************************************/
    $wp_customize->add_section( 'colors', array(
        'title'      => __('Background Color','triumph-seo'),
        'priority'   => 150,
        'capability' => 'edit_theme_options',

        ) );
    $wp_customize->add_section( 'static_front_page', array(
        'title'      => __('Static Front Page','triumph-seo'),
        'priority'   => 150,
        'capability' => 'edit_theme_options',
        ) );
    $wp_customize->add_section( 'triumph_seo_header_settings', array(
        'title'      => __('Header','triumph-seo'),
        'priority'   => 122,
        'capability' => 'edit_theme_options',
        ) );

    /***************************************************/
    /*****               pagination                ****/
    /**************************************************/
    $wp_customize->add_section( 'triumph_seo_pagination_settings', array(
        'title'      => __('Pagination Type','triumph-seo'),
        'priority'   => 122,
        'capability' => 'edit_theme_options',

        ) );
    $wp_customize->add_setting( 'triumph_seo_pagination_type', array(
        'default'           => '1',
        'capability'        => 'edit_theme_options',
        'priority'   => 1,
        'sanitize_callback' => 'sanitize_key',
        ));
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'triumph_seo_pagination_type',

            array(
                'label'     => __('Pagination Type', 'triumph-seo'),
                'section'   => 'all_blog_posts',

                'settings'  => 'triumph_seo_pagination_type',
                'type'      => 'radio',
                'choices'  => array(
                    '0'   => __('Next/Previous', 'triumph-seo'),
                    '1'  => __('Numbered', 'triumph-seo'),
                    ),
                'transport' => 'refresh',
                'priority'   => 99,
                )
            )
        );

    /***************************************************/
    /*****         Blog Feed Customization          ****/
    /**************************************************/
    $wp_customize->add_setting( 'all_blog_posts_headline', array(
        'default'           => '#333',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
        ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'all_blog_posts_headline', array(
        'label'       => __( 'Headline Colors', 'triumph-seo' ),
        'section'     => 'all_blog_posts',
        'priority'   => 1,
        'settings'    => 'all_blog_posts_headline',
        ) ) );
    $wp_customize->add_setting( 'all_blog_posts_date', array(
        'default'           => '#8c8c8c',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
        ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'all_blog_posts_date', array(
        'label'       => __( 'Date Colors', 'triumph-seo' ),
        'section'     => 'all_blog_posts',
        'priority'   => 1,
        'settings'    => 'all_blog_posts_date',
        ) ) );
    $wp_customize->add_setting( 'all_blog_posts_text', array(
        'default'           => '#989898',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
        ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'all_blog_posts_text', array(
        'label'       => __( 'Text Colors', 'triumph-seo' ),
        'section'     => 'all_blog_posts',
        'priority'   => 1,
        'settings'    => 'all_blog_posts_text',
        ) ) );


    $wp_customize->add_setting( 'all_blog_posts_bg', array(
        'default'           => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
        ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'all_blog_posts_bg', array(
        'label'       => __( 'Background Color', 'triumph-seo' ),
        'section'     => 'all_blog_posts',
        'priority'   => 1,
        'settings'    => 'all_blog_posts_bg',
        ) ) );



    /***************************************************/
    /*****                 Breadcrumbs              ****/
    /**************************************************/
    $wp_customize->add_setting('triumph_seo_single_breadcrumb_section', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_key',
        'transport'         => 'refresh',
        'default'           => '1',
        ));
    $wp_customize->add_control('triumph_seo_single_breadcrumb_section', array(
        'label'    => __('Breadcrumb Section', 'triumph-seo'),
        'section'  => 'triumph_single_settings',
        'description' => __('This setting will only affect blog posts.','triumph-seo'),
        'settings' => 'triumph_seo_single_breadcrumb_section',
        'type'     => 'radio',
        'choices'  => array(
            '1' => __('OFF', 'triumph-seo'),
            '0' => __('ON', 'triumph-seo'),
            ),
        ));


    /***************************************************/
    /*****                   Tags                  ****/
    /**************************************************/
    $wp_customize->add_setting('triumph_seo_single_tags_section', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_key',
        'transport'         => 'refresh',
        'default'           => '1',
        ));
    $wp_customize->add_control('triumph_seo_single_tags_section', array(
        'label'    => __('Tags Section', 'triumph-seo'),
        'section'  => 'triumph_single_settings',
        'description' => __('This setting will only affect blog posts.','triumph-seo'),
        'settings' => 'triumph_seo_single_tags_section',
        'type'     => 'radio',
        'choices'  => array(
            '0' => __('OFF', 'triumph-seo'),
            '1' => __('ON', 'triumph-seo'),
            ),
        ));

    /***************************************************/
    /*****              Related Posts              ****/
    /**************************************************/
    $wp_customize->add_setting('triumph_seo_relatedposts_section', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_key',
        'transport'         => 'refresh',
        'default'           => '1',
        ));
    $wp_customize->add_control('triumph_seo_relatedposts_section', array(
        'label'    => __('Related Posts Section', 'triumph-seo'),
        'section'  => 'triumph_single_settings',
        'description' => __('This setting will only affect blog posts.','triumph-seo'),
        'settings' => 'triumph_seo_relatedposts_section',
        'type'     => 'radio',
        'choices'  => array(
            '1' => __('OFF', 'triumph-seo'),
            '0' => __('ON', 'triumph-seo'),
            ),
        ));
    $wp_customize->add_section( 'upper_widgets_settings', array(
        'title'      => __('Top Widget Settings','triumph-seo'),
        'priority'   => 50,
        'capability' => 'edit_theme_options',
        ) );
    $wp_customize->add_setting( 'upper_widgets_headlinke_color', array(
        'default'           => '#000',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
        ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'upper_widgets_headlinke_color', array(
        'label'       => __( 'Top Widgets Headline Color', 'triumph-seo' ),
        'section'     => 'upper_widgets_settings',
        'priority'   => 1,
        'settings'    => 'upper_widgets_headlinke_color',
        ) ) );
    $wp_customize->add_setting( 'upper_widgets_content_color', array(
        'default'           => '#828282',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
        ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'upper_widgets_content_color', array(
        'label'       => __( 'Top Widgets Content Color', 'triumph-seo' ),
        'section'     => 'upper_widgets_settings',
        'priority'   => 1,
        'settings'    => 'upper_widgets_content_color',
        ) ) );
    $wp_customize->add_setting( 'upper_widgets_link_color', array(
        'default'           => '#005fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
        ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'upper_widgets_link_color', array(
        'label'       => __( 'Top Widgets Link Color', 'triumph-seo' ),
        'section'     => 'upper_widgets_settings',
        'priority'   => 1,
        'settings'    => 'upper_widgets_link_color',
        ) ) );

    $wp_customize->add_setting( 'upper_widgets_background_color', array(
        'default'           => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
        ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'upper_widgets_background_color', array(
        'label'       => __( 'Top Widgets Background Color', 'triumph-seo' ),
        'section'     => 'upper_widgets_settings',
        'priority'   => 1,
        'settings'    => 'upper_widgets_background_color',
        ) ) );

    /***************************************************/
    /*****                 Author Box               ****/
    /**************************************************/
    $wp_customize->add_setting('triumph_seo_authorbox_section', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_key',
        'transport'         => 'refresh',
        'default'           => '1',
        ));
    $wp_customize->add_control('triumph_seo_authorbox_section', array(
        'label'    => __('Author box Section', 'triumph-seo'),
        'section'  => 'triumph_single_settings',
        'description' => __('This setting will only affect blog posts.','triumph-seo'),
        'settings' => 'triumph_seo_authorbox_section',
        'type'     => 'radio',
        'choices'  => array(
            '1' => __('OFF', 'triumph-seo'),
            '0' => __('ON', 'triumph-seo'),
            ),
        ));

    /***************************************************/
    /*****             Page Colors                 ****/
    /**************************************************/
    $wp_customize->add_setting( 'post_page_headline', array(
        'default'           => '#000',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
        ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_page_headline', array(
        'label'       => __( 'Headline Colors', 'triumph-seo' ),
        'section'     => 'triumph_single_settings',
        'priority'   => 1,
        'settings'    => 'post_page_headline',
        ) ) );
    $wp_customize->add_setting( 'post_page_date', array(
        'default'           => '#a2a2a2',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
        ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_page_date', array(
        'label'       => __( 'Date Colors', 'triumph-seo' ),
        'section'     => 'triumph_single_settings',
        'description' => __('This setting will only affect blog posts.','triumph-seo'),
        'priority'   => 1,
        'settings'    => 'post_page_date',
        ) ) );
    $wp_customize->add_setting( 'post_page_text', array(
        'default'           => '#555555',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
        ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_page_text', array(
        'label'       => __( 'Text Colors', 'triumph-seo' ),
        'section'     => 'triumph_single_settings',
        'priority'   => 1,
        'settings'    => 'post_page_text',
        ) ) );
    $wp_customize->add_setting( 'post_page_link', array(
        'default'           => '#005fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
        ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_page_link', array(
        'label'       => __( 'Link Colors', 'triumph-seo' ),
        'section'     => 'triumph_single_settings',
        'priority'   => 1,
        'settings'    => 'post_page_link',
        ) ) );

    $wp_customize->add_setting( 'post_page_background', array(
        'default'           => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
        ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_page_background', array(
        'label'       => __( 'Background Color', 'triumph-seo' ),
        'section'     => 'triumph_single_settings',
        'priority'   => 1,
        'settings'    => 'post_page_background',
        ) ) );
    $wp_customize->get_setting( 'blogname' )->transport                              = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport                       = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport                      = 'postMessage';
    $wp_customize->get_section('header_image')->title = __( 'Header', 'triumph-seo' );
    $wp_customize->get_control( 'background_color'  )->section   = 'triumph_seo_general_layout';
    $wp_customize->get_control( 'header_textcolor'  )->section   = 'header_image';
}
add_action( 'customize_register', 'triumph_seo_customize_register' );

if(! function_exists('triumph_seo_color_choice' ) ):
    function triumph_seo_color_choice(){
        ?>
        <style type="text/css">
        .related-posts .related-posts-no-img h5.title.front-view-title, #tabber .inside li .meta b,footer .widget li a:hover,.fn a,.reply a,#tabber .inside li div.info .entry-title a:hover, #navigation ul ul a:hover,.single_post a, a:hover, .sidebar.c-4-12 .textwidget a, #site-footer .textwidget a, #commentform a, #tabber .inside li a, .copyrights a:hover, a, .sidebar.c-4-12 a:hover, .top a:hover, footer .tagcloud a:hover,.sticky-text { color: <?php echo esc_attr(get_theme_mod( 'primary_theme_colors')); ?>; }
        .total-comments span:after, span.sticky-post, .nav-previous a:hover, .nav-next a:hover, #commentform input#submit, #searchform input[type='submit'], .home_menu_item, .currenttext, .pagination a:hover, .readMore a, .triumphseo-subscribe input[type='submit'], .pagination .current, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce-product-search input[type=\"submit\"], .woocommerce a.button, .woocommerce-page a.button, .woocommerce button.button, .woocommerce-page button.button, .woocommerce input.button, .woocommerce-page input.button, .woocommerce #respond input#submit, .woocommerce-page #respond input#submit, .woocommerce #content input.button, .woocommerce-page #content input.button, #sidebars h3.widget-title:after, .postauthor h4:after, .related-posts h3:after, .archive .postsby span:after, .comment-respond h4:after, .single_post header:after, #cancel-comment-reply-link, .upper-widgets-grid h3:after  { background-color: <?php echo esc_attr(get_theme_mod( 'primary_theme_colors')); ?>; }
        #sidebars .widget h3, #sidebars .widget h3 a { border-left-color: <?php echo esc_attr(get_theme_mod( 'primary_theme_colors')); ?>; }
        .related-posts-no-img, #navigation ul li.current-menu-item a, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce-page nav.woocommerce-pagination ul li span.current, .woocommerce #content nav.woocommerce-pagination ul li span.current, .woocommerce-page #content nav.woocommerce-pagination ul li span.current, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce-page nav.woocommerce-pagination ul li a:hover, .woocommerce #content nav.woocommerce-pagination ul li a:hover, .woocommerce-page #content nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce-page nav.woocommerce-pagination ul li a:focus, .woocommerce #content nav.woocommerce-pagination ul li a:focus, .woocommerce-page #content nav.woocommerce-pagination ul li a:focus, .pagination .current, .tagcloud a { border-color: <?php echo esc_attr(get_theme_mod( 'primary_theme_colors')); ?>; }
        .corner { border-color: transparent transparent <?php echo esc_attr(get_theme_mod( 'primary_theme_colors')); ?> transparent;}
        .header-button-solid, .header-button-solid:hover, .header-button-solid:active, .header-button-solid:focus { color: <?php echo esc_attr(get_theme_mod( 'header_right_button_text_color')); ?>; }
        .header-button-solid, .header-button-solid:hover, .header-button-solid:active, .header-button-solid:focus { background: <?php echo esc_attr(get_theme_mod( 'header_right_button_bg')); ?>; }
        .header-button-border, .header-button-border:hover, .header-button-border:active, .header-button-border:focus { color: <?php echo esc_attr(get_theme_mod( 'header_left_button_text_color')); ?>; }
        .header-button-border, .header-button-border:hover, .header-button-border:active, .header-button-border:focus { border-color: <?php echo esc_attr(get_theme_mod( 'header_left_button_bg')); ?>; }
        .pagination a, .pagination2, .pagination .dots, .post.excerpt { background: <?php echo esc_attr(get_theme_mod( 'all_blog_posts_bg')); ?>; }
        #content, #comments, #commentsAdd, .related-posts, .single-post .post.excerpt, .postauthor { background: <?php echo esc_attr(get_theme_mod( 'post_page_background')); ?>; }
        #sidebars .widget { background: <?php echo esc_attr(get_theme_mod( 'sidebar_background_color')); ?>; }
        .upper-widgets-grid { background: <?php echo esc_attr(get_theme_mod( 'upper_widgets_background_color')); ?>; }
        footer { background: <?php echo esc_attr(get_theme_mod( 'footer_bg_color')); ?>; }
        .copyrights { background: <?php echo esc_attr(get_theme_mod( 'footer_copyright_bg_color')); ?>; }
        #site-header { background-color: <?php echo esc_attr(get_theme_mod( 'top_header_background_color')); ?>; }
        .primary-navigation, .primary-navigation, #navigation ul ul li { background-color: <?php echo esc_attr(get_theme_mod( 'navigation_background_color')); ?>; }
        a#pull, #navigation .menu a, #navigation .menu a:hover, #navigation .menu .fa > a, #navigation .menu .fa > a, #navigation .toggle-caret, #navigation span.site-logo a, #navigation.mobile-menu-wrapper .site-logo a, .primary-navigation.header-activated #navigation ul ul li a { color: <?php echo esc_attr(get_theme_mod( 'navigation_link_color')); ?> }
        #sidebars .widget h3, #sidebars .widget h3 a, #sidebars h3 { color: <?php echo esc_attr(get_theme_mod( 'sidebar_headline_color')); ?>; }
        #sidebars .widget a, #sidebars a, #sidebars li a { color: <?php echo esc_attr(get_theme_mod( 'sidebar_link_color')); ?>; }
        #sidebars .widget, #sidebars, #sidebars .widget li { color: <?php echo esc_attr(get_theme_mod( 'sidebar_text_color')); ?>; }
        .post.excerpt .post-content, .pagination a, .pagination2, .pagination .dots { color: <?php echo esc_attr(get_theme_mod( 'all_blog_posts_text')); ?>; }
        .post.excerpt h2.title a { color: <?php echo esc_attr(get_theme_mod( 'all_blog_posts_headline')); ?>; }
        .pagination a, .pagination2, .pagination .dots { border-color: <?php echo esc_attr(get_theme_mod( 'all_blog_posts_text')); ?>; }
        span.entry-meta{ color: <?php echo esc_attr(get_theme_mod( 'all_blog_posts_date')); ?>; }
        .article h1, .article h2, .article h3, .article h4, .article h5, .article h6, .total-comments, .article th{ color: <?php echo esc_attr(get_theme_mod( 'post_page_headline')); ?>; }
        .article, .article p, .related-posts .title, .breadcrumb, .article #commentform textarea  { color: <?php echo esc_attr(get_theme_mod( 'post_page_text')); ?>; }
        .article a, .breadcrumb a, #commentform a { color: <?php echo esc_attr(get_theme_mod( 'post_page_link')); ?>; }
        #commentform input#submit, #commentform input#submit:hover{ background: <?php echo esc_attr(get_theme_mod( 'post_page_link')); ?>; }
        .post-date-triumph, .comment time { color: <?php echo esc_attr(get_theme_mod( 'post_page_date')); ?>; }
        .footer-widgets #searchform input[type='submit'],  .footer-widgets #searchform input[type='submit']:hover{ background: <?php echo esc_attr(get_theme_mod( 'footer_link_color')); ?>; }
        .footer-widgets h3:after{ background: <?php echo esc_attr(get_theme_mod( 'footer_headline_color')); ?>; }
        .footer-widgets h3, footer .widget.widget_rss h3 a{ color: <?php echo esc_attr(get_theme_mod( 'footer_headline_color')); ?>; }
        .footer-widgets .widget li, .footer-widgets .widget, #copyright-note, footer p{ color: <?php echo esc_attr(get_theme_mod( 'footer_text_color')); ?>; }
        footer .widget a, #copyright-note a, #copyright-note a:hover, footer .widget a:hover, footer .widget li a:hover{ color: <?php echo esc_attr(get_theme_mod( 'footer_link_color')); ?>; }
        .top-column-widget a, .top-column-widget a:hover, .top-column-widget a:active, .top-column-widget a:focus { color: <?php echo esc_attr(get_theme_mod( 'upper_widgets_link_color')); ?>; }
        .top-column-widget, .upper-widgets-grid { color: <?php echo esc_attr(get_theme_mod( 'upper_widgets_content_color')); ?>; }
        .top-column-widget .widget.widget_rss h3 a, .upper-widgets-grid h3, .top-column-widget h3{ color: <?php echo esc_attr(get_theme_mod( 'upper_widgets_headlinke_color')); ?>; }
        @media screen and (min-width: 865px) {
            .primary-navigation.header-activated #navigation a { color: <?php echo esc_attr(get_theme_mod( 'navigation_frontpage_link_color')); ?>; }
        }
        @media screen and (max-width: 865px) {
            #navigation.mobile-menu-wrapper{ background-color: <?php echo esc_attr(get_theme_mod( 'navigation_background_color')); ?>; }
        }
        .site-branding { padding-top: <?php echo esc_attr(get_theme_mod( 'header_top_padding')); ?>px; }
        .site-branding { padding-bottom: <?php echo esc_attr(get_theme_mod( 'header_bottom_padding')); ?>px; }
        </style>
        <?php }
        add_action( 'wp_head', 'triumph_seo_color_choice' );
        endif;

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function triumph_seo_customize_preview_js() {
 wp_enqueue_script( 'triumph_seo_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'triumph_seo_customize_preview_js' );
