<?php 

/*********Head action hook**************/
if(!function_exists("lakshmi_lite_head")){
	function lakshmi_lite_head(){
		do_action("lakshmi_lite_head");
	}
	add_action('wp_head', 'lakshmi_lite_head', 20);
}

/*********Print the logo html**************/
if(!function_exists("lakshmi_lite_logo")){
	function lakshmi_lite_logo(){
	if ( function_exists( 'fw_get_db_customizer_option') ) {
		$lsi_logo_type = fw_get_db_customizer_option( 'lsi_logo_type/logo');
		$lsi_logo_image = fw_get_db_customizer_option( 'lsi_logo_type/image/lsi_logo_image');
		$lsi_tagline = fw_get_db_customizer_option( 'lsi_tagline/on_off');
	} else {
		$lsi_custom_logo_id = get_theme_mod( 'custom_logo' );
		$lsi_custom_logo_image = wp_get_attachment_image_src( $lsi_custom_logo_id, 'full' );
	}
	
	if(isset($lsi_logo_type) && ($lsi_logo_type == 'image')){ ?>
		
        	<a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'lakshmi-lite') ); ?>" >
                <img src="<?php echo esc_url($lsi_logo_image['url']);?>" class="lsi-default-logo" alt="<?php echo esc_attr( get_bloginfo( 'name', 'lakshmi-lite') ); ?>" />
            </a>
        <?php if($lsi_tagline == 'on'){ ?>
		<div id="lsi-logo-tagline"><?php echo wp_kses_post(bloginfo('description')); ?></div>
        <?php } ?>
	<?php } elseif(isset($lsi_logo_type) && ($lsi_logo_type == 'text')) { ?>
        	
	<div id="lsi-logo-text">
    	<a href="<?php echo esc_url(home_url( '/')); ?>" title="<?php esc_attr_e('Click for Home','lakshmi-lite'); ?>"><?php echo esc_html(bloginfo( 'name' )); ?></a>
    </div>
    <?php if($lsi_tagline == 'on'){ ?>
	<div id="lsi-logo-tagline"><?php echo wp_kses_post(bloginfo('description')); ?></div>
    <?php } ?>
	<?php } elseif ( function_exists( 'the_custom_logo' ) && ($lsi_custom_logo_id != '')) { ?>
    	<?php the_custom_logo(); ?>   
    <?php } else { ?> 
	<div id="lsi-logo-text">
    	<a href="<?php echo esc_url(home_url( '/')); ?>" title="<?php esc_attr_e('Click for Home','lakshmi-lite'); ?>"><?php echo esc_html(bloginfo('name')); ?></a>
    </div>
    <div id="lsi-logo-tagline"><?php echo wp_kses_post(get_bloginfo('description')); ?></div>
	<?php }
}
}

/*********Print the secondary header html**************/
if(!function_exists("lakshmi_lite_secondary_header")){
	function lakshmi_lite_secondary_header(){
	if ( function_exists( 'fw_get_db_customizer_option') ) {
		$lsi_sh_layout = fw_get_db_customizer_option( 'lsi_sh_layout');
		$lsi_sh_custom_content = fw_get_db_customizer_option( 'lsi_sh_custom_content');
		$lsi_sh_custom = fw_get_db_customizer_option( 'lsi_sh_custom');
		$lsi_sh_menu = fw_get_db_customizer_option( 'lsi_sh_menu');
		$lsi_sh_socials = fw_get_db_customizer_option( 'lsi_sh_socials');
		$lsi_social1 = fw_get_db_customizer_option( 'lsi_social1');
		$lsi_social_icon1 = fw_get_db_customizer_option( 'lsi_social_icon1');
		$lsi_social2 = fw_get_db_customizer_option( 'lsi_social2');
		$lsi_social_icon2 = fw_get_db_customizer_option( 'lsi_social_icon2');
		$lsi_social3 = fw_get_db_customizer_option( 'lsi_social3');
		$lsi_social_icon3 = fw_get_db_customizer_option( 'lsi_social_icon3');
		$lsi_social4 = fw_get_db_customizer_option( 'lsi_social4');
		$lsi_social_icon4 = fw_get_db_customizer_option( 'lsi_social_icon4');
		$lsi_social5 = fw_get_db_customizer_option( 'lsi_social5');
		$lsi_social_icon5 = fw_get_db_customizer_option( 'lsi_social_icon5');
		$lsi_social6 = fw_get_db_customizer_option( 'lsi_social6');
		$lsi_social_icon6 = fw_get_db_customizer_option( 'lsi_social_icon6');
		$lsi_social7 = fw_get_db_customizer_option( 'lsi_social7');
		$lsi_social_icon7 = fw_get_db_customizer_option( 'lsi_social_icon7');
		$lsi_social8 = fw_get_db_customizer_option( 'lsi_social8');
		$lsi_social_icon8 = fw_get_db_customizer_option( 'lsi_social_icon8');
	} else {
		$lsi_sh_layout = 'menu-custom-social';
		$lsi_sh_menu = 'no';
		$lsi_sh_custom = 'yes';
		$lsi_sh_socials = 'yes';
		$lsi_sh_custom_content = get_theme_mod( 'header_title_text', '' );
		$lsi_social1 = get_theme_mod( 'social_1', '#' );
		$lsi_social_icon1 = 'fa fa-facebook';
		$lsi_social2 = get_theme_mod( 'social_2', '#' );
		$lsi_social_icon2 = 'fa fa-google';
		$lsi_social3 = get_theme_mod( 'social_3', '#' );
		$lsi_social_icon3 = 'fa fa-twitter';
		$lsi_social4 = get_theme_mod( 'social_4', '#' );
		$lsi_social_icon4 = 'fa fa-youtube';
		$lsi_social5 = get_theme_mod( 'social_5', '#' );
		$lsi_social_icon5 = 'fa fa-linkedin';
		$lsi_social6 = '';
		$lsi_social7 = '';
		$lsi_social8 = '';
	} ?>
	<div id="lsi-outersecondaryheader">
        <div class="container">
        	<div id="lsi-secondary-header" class="lsi-<?php echo esc_attr($lsi_sh_layout); ?>">
        	<?php
			$lsi_sh_order = $lsi_sh_layout;
			$lsi_sh_order_elements = explode('-', $lsi_sh_order);
			foreach ($lsi_sh_order_elements as $sh_element) {
			?>
            	<?php if ($sh_element == 'custom') {
					if ($lsi_sh_custom == 'yes') { ?>
            	<div id="lsi-sh-custom">
					<?php echo wp_kses_post($lsi_sh_custom_content) ; ?>
            	</div>
					<?php }
				} ?>
                <?php if ($sh_element == 'menu') { 
					if ($lsi_sh_menu == 'yes') { ?>
                <div id="lsi-sh-menu">
                	<nav id="lsi-sh-navigation">
						<?php wp_nav_menu( array(
                          'container'       => 'ul', 
                          'menu_class'      => 'lsi-sh-menu-content',
                          'menu_id'         => 'sh-nav', 
                          'depth'           => 1,
                          'sort_column'     => 'menu_order',
                          'theme_location'  => 'secondarymenu' 
                          )); 
                        ?>                                                             
                    </nav>
                </div>
                	<?php }
				}?>
                <?php if ($sh_element == 'social') { 
					if ($lsi_sh_socials == 'yes') { ?>
                <div id="lsi-sh-social">
                	<div id="lsi-menu-social" class="lsi-menu-social">
                        <ul id="lsi-menu-social-items" class="menu-items">
                         <?php if($lsi_social1 != ''){ ?><li><a href="<?php echo esc_url($lsi_social1) ; ?>"><i class="<?php echo esc_attr($lsi_social_icon1) ; ?>"></i></a></li> <?php } else {} ?>
                         <?php if($lsi_social2 != ''){ ?><li><a href="<?php echo esc_url($lsi_social2) ; ?>"><i class="<?php echo esc_attr($lsi_social_icon2) ; ?>"></i></a></li> <?php } else {} ?>
                         <?php if($lsi_social3 != ''){ ?><li><a href="<?php echo esc_url($lsi_social3) ; ?>"><i class="<?php echo esc_attr($lsi_social_icon3) ; ?>"></i></a></li> <?php } else {} ?>
                         <?php if($lsi_social4 != ''){ ?><li><a href="<?php echo esc_url($lsi_social4) ; ?>"><i class="<?php echo esc_attr($lsi_social_icon4) ; ?>"></i></a></li> <?php } else {} ?>
                         <?php if($lsi_social5 != ''){ ?><li><a href="<?php echo esc_url($lsi_social5) ; ?>"><i class="<?php echo esc_attr($lsi_social_icon5) ; ?>"></i></a></li> <?php } else {} ?>
                         <?php if($lsi_social6 != ''){ ?><li><a href="<?php echo esc_url($lsi_social6) ; ?>"><img src="<?php echo esc_url($lsi_social_icon6['url']) ; ?>" class="social-image"/></a></li> <?php } else {} ?>
                         <?php if($lsi_social7 != ''){ ?><li><a href="<?php echo esc_url($lsi_social7) ; ?>"><img src="<?php echo esc_url($lsi_social_icon7['url']) ; ?>" class="social-image"/></a></li> <?php } else {} ?>
                         <?php if($lsi_social8 != ''){ ?><li><a href="<?php echo esc_url($lsi_social8) ; ?>"><img src="<?php echo esc_url($lsi_social_icon8['url']) ; ?>" class="social-image"/></a></li> <?php } else {} ?>
                        </ul>
                    </div>
                </div>
                	<?php }
				}?>
            <?php } ?>
            	<div class="clearfix"></div>
            </div>
        </div>
    </div>
    <?php
	}
}

/*********DYNAMIC STYLES**************/

/*********Header Styles**************/
if(!function_exists("lakshmi_lite_header_styles")){
function lakshmi_lite_header_styles() {
	
if ( ! defined( 'FW' ) ) {
	$lsi_body_bg_color = get_theme_mod( 'background_color', get_theme_support( 'custom-background', 'default-color' ) );
	$lsi_feautered_blog_posts = get_theme_mod( 'feautered_blog_posts', 'on' ); ?>
<style type="text/css">
body {
	background-color: #<?php echo esc_attr($lsi_body_bg_color); ?> !important;
}
#lsi-outerheader {
	background-image: url('<?php header_image(); ?>');
}

<?php if ((is_home() || is_tax() || is_archive() || is_search() || is_404()) && $lsi_feautered_blog_posts == 'on') { ?>
#lsi-maincontent {
    padding-top: 0px;
    padding-bottom: 0px;
}
<?php } ?>
</style>
<?php 
} 
// Theme Settings
if ( function_exists( 'fw_get_db_customizer_option') ) {
  $lsi_theme_layout = fw_get_db_customizer_option( 'lsi_theme_layout/type');
  $lsi_boxed_width = fw_get_db_customizer_option( 'lsi_theme_layout/boxed/lsi_boxed_width');
  $lsi_boxed_margin_top = fw_get_db_customizer_option( 'lsi_theme_layout/boxed/lsi_boxed_margin_top');
  $lsi_boxed_margin_bottom = fw_get_db_customizer_option( 'lsi_theme_layout/boxed/lsi_boxed_margin_bottom');
  $lsi_boxed_background_color = fw_get_db_customizer_option( 'lsi_theme_layout/boxed/lsi_boxed_background_color');
  $lsi_boxed_background_image = fw_get_db_customizer_option( 'lsi_theme_layout/boxed/lsi_boxed_background_image');
  $lsi_boxed_image_size = fw_get_db_customizer_option( 'lsi_theme_layout/boxed/lsi_boxed_image_size');
  $lsi_boxed_image_repeat = fw_get_db_customizer_option( 'lsi_theme_layout/boxed/lsi_boxed_image_repeat');
  $lsi_boxed_image_fixed = fw_get_db_customizer_option( 'lsi_theme_layout/boxed/lsi_boxed_image_fixed');
  $lsi_sidepadding = fw_get_db_customizer_option( 'lsi_theme_layout/sidepadding/lsi_sidepadding');
  $lsi_sidepadding_background_color = fw_get_db_customizer_option( 'lsi_theme_layout/sidepadding/lsi_sidepadding_background_color');
  $lsi_sidepadding_background_image = fw_get_db_customizer_option( 'lsi_theme_layout/sidepadding/lsi_sidepadding_background_image');
  $lsi_sidepadding_image_size = fw_get_db_customizer_option( 'lsi_theme_layout/sidepadding/lsi_sidepadding_image_size');
  $lsi_sidepadding_image_repeat = fw_get_db_customizer_option( 'lsi_theme_layout/sidepadding/lsi_sidepadding_image_repeat');
  $lsi_sidepadding_image_fixed = fw_get_db_customizer_option( 'lsi_theme_layout/sidepadding/lsi_sidepadding_image_fixed');
  $lsi_page_background_color = fw_get_db_customizer_option( 'lsi_page_background_color');
  $lsi_page_background_image = fw_get_db_customizer_option( 'lsi_page_background_image');
  $lsi_page_image_size = fw_get_db_customizer_option( 'lsi_page_image_size');
  $lsi_page_image_repeat = fw_get_db_customizer_option( 'lsi_page_image_repeat');
  
  $lsi_header_background_color = fw_get_db_customizer_option( 'lsi_header_background_color');
  $lsi_header_background_image = fw_get_db_customizer_option( 'lsi_header_background_image');
  $lsi_header_image_size = fw_get_db_customizer_option( 'lsi_header_image_size');
  $lsi_header_image_repeat = fw_get_db_customizer_option( 'lsi_header_image_repeat');
  $lsi_logo_padding = fw_get_db_customizer_option( 'lsi_logo_padding');
  $lsi_hb_padding = fw_get_db_customizer_option( 'lsi_header_buttons/on/lsi_hb_padding');
  $lsi_hb_ivp = fw_get_db_customizer_option( 'lsi_header_buttons/on/lsi_hb_ivp');
  $lsi_hb_ihp = fw_get_db_customizer_option( 'lsi_header_buttons/on/lsi_hb_ihp');
  $lsi_menu_item_mr = fw_get_db_customizer_option( 'lsi_menu_item_mr');
  $lsi_menu_item_pt = fw_get_db_customizer_option( 'lsi_menu_item_pt');
  $lsi_menu_item_pr = fw_get_db_customizer_option( 'lsi_menu_item_pr');
  $lsi_menu_item_pb = fw_get_db_customizer_option( 'lsi_menu_item_pb');
  $lsi_menu_item_pl = fw_get_db_customizer_option( 'lsi_menu_item_pl');
  $lsi_menu_item_hover_effect = fw_get_db_customizer_option( 'lsi_menu_item_hover_effect');
  $lsi_menu_item_transition = fw_get_db_customizer_option( 'lsi_menu_item_transition');
  $lsi_submenu_allow_icon = fw_get_db_customizer_option( 'lsi_submenu_allow_icon');
  $lsi_submenu_width = fw_get_db_customizer_option( 'lsi_submenu_width');
  $lsi_submenu_item_pt = fw_get_db_customizer_option( 'lsi_submenu_item_pt');
  $lsi_submenu_item_pr = fw_get_db_customizer_option( 'lsi_submenu_item_pr');
  $lsi_submenu_item_pb = fw_get_db_customizer_option( 'lsi_submenu_item_pb');
  $lsi_submenu_item_pl = fw_get_db_customizer_option( 'lsi_submenu_item_pl');
  $lsi_submenu_item_hover_effect = fw_get_db_customizer_option( 'lsi_submenu_item_hover_effect');
  $lsi_mm_start = fw_get_db_customizer_option( 'lsi_mm_start');
  $lsi_mm_vp = fw_get_db_customizer_option( 'lsi_mm/on/lsi_mm_vp');
  $lsi_mm_transparent_header = fw_get_db_customizer_option( 'lsi_mm_transparent_header');
  $lsi_sh_mobil = fw_get_db_customizer_option( 'lsi_sh_mobil');
  $lsi_sh_padding = fw_get_db_customizer_option( 'lsi_sh_padding');
  $lsi_sh_mi_padding = fw_get_db_customizer_option( 'lsi_sh_mi_padding');
  $lsi_sh_custom_padding = fw_get_db_customizer_option( 'lsi_sh_custom_padding');
  $lsi_sh_menu_padding = fw_get_db_customizer_option( 'lsi_sh_menu_padding');
  $lsi_sh_social_padding = fw_get_db_customizer_option( 'lsi_sh_socials_padding');
  $lsi_feautered_blog_posts = fw_get_db_customizer_option( 'lsi_feautered_blog_posts');
  $lsi_sidebar_width = fw_get_db_customizer_option( 'lsi_sidebar_width');
  $lsi_sidebar_padding = fw_get_db_customizer_option( 'lsi_sidebar_padding');
  $lsi_sidebar_background_color = fw_get_db_customizer_option( 'lsi_sidebar_background_color');
  $lsi_sidebar_background_image = fw_get_db_customizer_option( 'lsi_sidebar_background_image');
  $lsi_sidebar_image_size = fw_get_db_customizer_option( 'lsi_sidebar_image_size');
  $lsi_sidebar_image_repeat = fw_get_db_customizer_option( 'lsi_sidebar_image_repeat');
  $lsi_content_width = 100 - $lsi_sidebar_width;
?>
<!-- Header Styles -->
<style type="text/css">
<?php if ((is_home() || is_tax() || is_archive() || is_search() || is_404()) && $lsi_feautered_blog_posts == 'on') { ?>
#lsi-maincontent {
    padding-top: 0px;
    padding-bottom: 0px;
}
<?php } ?>

<?php if($lsi_theme_layout == 'boxed'){ ?>
<?php if ($lsi_boxed_background_color != ('')){ ?>
body {
	background-color: <?php echo esc_attr($lsi_boxed_background_color); ?> !important;
}
<?php } ?>

<?php if ($lsi_boxed_background_image != ('')){ ?>
body {
    background-image: url("<?php echo esc_url($lsi_boxed_background_image['url']); ?>");
	background-size: <?php echo esc_attr($lsi_boxed_image_size); ?>;
    background-repeat: <?php echo esc_attr($lsi_boxed_image_repeat); ?>;
	<?php if ($lsi_boxed_image_fixed == ('yes')){ ?>
    background-attachment: fixed;
	<?php } ?>
}
<?php } ?>

#lsi-page-holder.lsi-page-boxed {
	width: <?php echo esc_attr($lsi_boxed_width); ?>px;
}

<?php if ($lsi_boxed_margin_top != ('')){ ?>
#lsi-page-holder {
    margin-top: <?php echo esc_attr($lsi_boxed_margin_top); ?>px;
}
<?php } ?>

<?php if ($lsi_boxed_margin_bottom != ('')){ ?>
#lsi-page-holder {
    margin-bottom: <?php echo esc_attr($lsi_boxed_margin_bottom); ?>px;
}
<?php } ?>
<?php } ?>

<?php if($lsi_theme_layout == 'sidepadding'){ ?>
body {
	margin: <?php echo esc_attr($lsi_sidepadding); ?>px !important;
	<?php if ($lsi_sidepadding_background_color != ('')){ ?>background-color: <?php echo esc_attr($lsi_sidepadding_background_color); ?> !important;<?php } ?>
	<?php if ($lsi_sidepadding_background_image != ('')){ ?>background-image: url("<?php echo esc_url($lsi_sidepadding_background_image['url']); ?>");
	background-size: <?php echo esc_attr($lsi_sidepadding_image_size); ?>;
    background-repeat: <?php echo esc_attr($lsi_sidepadding_image_repeat); ?>;
	<?php if ($lsi_sidepadding_image_fixed == ('yes')){ ?>background-attachment: fixed;<?php } ?><?php } ?>
}
<?php } ?>

#lsi-page-holder {
	background-color: <?php echo esc_attr($lsi_page_background_color); ?> !important;
}

<?php if ($lsi_page_background_image != ('')){ ?>
#lsi-page-holder {
    background-image: url("<?php echo esc_url($lsi_page_background_image['url']); ?>");
	background-size: <?php echo esc_attr($lsi_page_image_size); ?>;
    background-repeat: <?php echo esc_attr($lsi_page_image_repeat); ?>;
}
<?php } ?>

<?php if ($lsi_header_background_color != ('')){ ?>
#lsi-outerheader {
    background-color: <?php echo esc_attr($lsi_header_background_color); ?>;
}
<?php } ?>

<?php if ($lsi_header_background_image != ('')){ ?>
#lsi-outerheader {
    background-image: url("<?php echo esc_url($lsi_header_background_image['url']); ?>");
	background-size: <?php echo esc_attr($lsi_header_image_size); ?>;
    background-repeat: <?php echo esc_attr($lsi_header_image_repeat); ?>;
}
<?php } ?>

#lsi-logo {
	padding: <?php echo esc_attr($lsi_logo_padding); ?>;
}
  
#lsi-header-buttons {
	padding: <?php echo esc_attr($lsi_hb_padding); ?>;
}

#lsi-header-buttons .lsi-btn-content {
    padding: <?php echo esc_attr($lsi_hb_ivp); ?>px <?php echo esc_attr($lsi_hb_ihp); ?>px;
}

#lsi-header-navigation li {
	padding: <?php echo esc_attr($lsi_menu_item_pt); ?>px <?php echo esc_attr($lsi_menu_item_pr); ?>px <?php echo esc_attr($lsi_menu_item_pb); ?>px <?php echo esc_attr($lsi_menu_item_pl); ?>px;
	margin-right: <?php echo esc_attr($lsi_menu_item_mr); ?>px;
	-webkit-transition: all <?php echo esc_attr($lsi_menu_item_transition); ?>s ease-in-out;
    -moz-transition: all <?php echo esc_attr($lsi_menu_item_transition); ?>s ease-in-out;
    -o-transition: all <?php echo esc_attr($lsi_menu_item_transition); ?>s ease-in-out;
    -ms-transition: all <?php echo esc_attr($lsi_menu_item_transition); ?>s ease-in-out;
    transition: all <?php echo esc_attr($lsi_menu_item_transition); ?>s ease-in-out;
}

#lsi-toggleMenu {
	padding: <?php echo esc_attr($lsi_menu_item_pt); ?>px 0 <?php echo esc_attr($lsi_menu_item_pb); ?>px;
}

#lsi-header-navigation li a,
#lsi-toggleMenu {
	-webkit-transition: all <?php echo esc_attr($lsi_menu_item_transition); ?>s ease-in-out;
    -moz-transition: all <?php echo esc_attr($lsi_menu_item_transition); ?>s ease-in-out;
    -o-transition: all <?php echo esc_attr($lsi_menu_item_transition); ?>s ease-in-out;
    -ms-transition: all <?php echo esc_attr($lsi_menu_item_transition); ?>s ease-in-out;
    transition: all <?php echo esc_attr($lsi_menu_item_transition); ?>s ease-in-out;
}

#lsi-header-navigation li:hover a {
	<?php if($lsi_menu_item_hover_effect != 'line-animation'){ ?>text-decoration: <?php echo esc_attr($lsi_menu_item_hover_effect); ?>;<?php } ?>
}

#lsi-header-navigation ul ul {
    margin-top: <?php echo esc_attr($lsi_menu_item_pb); ?>px;
}

#lsi-header-navigation ul ul li {
	padding: <?php echo esc_attr($lsi_submenu_item_pt); ?>px <?php echo esc_attr($lsi_submenu_item_pr); ?>px <?php echo esc_attr($lsi_submenu_item_pb); ?>px <?php echo esc_attr($lsi_submenu_item_pl); ?>px;
}

#lsi-header-navigation ul .mega-menu ul li a {
	padding: 0 0 <?php echo esc_attr($lsi_submenu_item_pb); ?>px;
}

#lsi-header-navigation ul ul li:hover a,
#lsi-header-navigation ul ul ul li:hover a {
	text-decoration: <?php echo esc_attr($lsi_submenu_item_hover_effect); ?>;
}
<?php if($lsi_submenu_allow_icon == 'no') { ?>
#lsi-header-navigation .menu-item-has-children a span:after {
   display:none;
}
<?php } ?>
#lsi-header-navigation ul ul a, #lsi-header-navigation .mega-menu ul li {
	width: <?php echo esc_attr($lsi_submenu_width) ; ?>em;
}

@media (max-width: <?php echo esc_attr($lsi_mm_start) ; ?>px) {
	#lsi-header #lsi-logo {
		display: table-caption  !important;
		padding-right: 0;
		padding-left: 0;
		text-align:center;
	}
	
	#lsi-header #lsi-header-menus {
		width: inherit;
	}
	
	#lsi-header,
	#lsi-header #lsi-logo img {
		margin:auto;
		padding: 0 15px;
	}
	
    #lsi-toggleMenu {
        display: block !important;
    }

    #lsi-header #lsi-header-navigation {
        display: none;
    }
	<?php if($lsi_sh_mobil == 'off'){ ?>
	#lsi-outersecondaryheader {
		display: none !important;
	}
	<?php } else { ?>
	#lsi-secondary-header #lsi-sh-menu,
	#lsi-secondary-header #lsi-sh-social,
	#lsi-secondary-header #lsi-sh-custom {
		float: none !important;
		padding: 10px 0 !important;
		width: 100%;
		text-align: center;
	}
	<?php } ?>
}

#lsi-mobile-navigation li {
	padding: <?php echo esc_attr($lsi_mm_vp); ?>px 5px;
}

#lsi-secondary-header {
	padding: <?php echo esc_attr($lsi_sh_padding); ?>;
}

#lsi-secondary-header #lsi-sh-custom {
	padding: <?php echo esc_attr($lsi_sh_custom_padding); ?>;
}

#lsi-secondary-header #lsi-sh-menu {
	padding: <?php echo esc_attr($lsi_sh_menu_padding); ?>;
}

#lsi-secondary-header #lsi-sh-social {
	padding: <?php echo esc_attr($lsi_sh_social_padding); ?>;
}

#lsi-secondary-header #sh-nav li {
	padding: <?php echo esc_attr($lsi_sh_mi_padding); ?>;
	-webkit-transition: all <?php echo esc_attr($lsi_menu_item_transition); ?>s ease-in-out;
    -moz-transition: all <?php echo esc_attr($lsi_menu_item_transition); ?>s ease-in-out;
    -o-transition: all <?php echo esc_attr($lsi_menu_item_transition); ?>s ease-in-out;
    -ms-transition: all <?php echo esc_attr($lsi_menu_item_transition); ?>s ease-in-out;
    transition: all <?php echo esc_attr($lsi_menu_item_transition); ?>s ease-in-out;
}

<?php if ( $lsi_mm_transparent_header == 'no' ) { ?>
@media (min-width: <?php echo esc_attr($lsi_mm_start) ; ?>px) {
<?php } ?>
body.lsi-body-th {
	padding-top: 0 !important;
}

#lsi-transparent-header.active {
	position: absolute;
    z-index: 10;
    width: 100%;
    left: 0;
    right: 0;
}

#lsi-transparent-header.active #lsi-outerheader {
	background-image: none;
}

#lsi-transparent-header.active #lsi-header-navigation li.current-menu-item,
#lsi-transparent-header.active #lsi-header-navigation li.current-menu-ancestor,
#lsi-transparent-header.active #lsi-header-navigation li,
#lsi-transparent-header.active #lsi-header-navigation li:hover {
    background-color: transparent;
}

<?php if ( $lsi_mm_transparent_header == 'no' ) { ?>
}
<?php } ?>

.row .sidebarcol {
    width: <?php echo esc_attr($lsi_sidebar_width); ?>%;
}

.row .contentcol {
    width: <?php echo esc_attr($lsi_content_width); ?>%;
}

.row .sidebarcol .widget-area {
    padding: <?php echo esc_attr($lsi_sidebar_padding); ?> !important;
}

<?php if ($lsi_sidebar_background_color != ('')){ ?>
.row .sidebarcol .widget-area {
	background-color: <?php echo esc_attr($lsi_sidebar_background_color); ?> !important;
}
<?php } ?>

<?php if ($lsi_sidebar_background_image != ('')){ ?>
.row .sidebarcol .widget-area {
    background-image: url("<?php echo esc_url($lsi_sidebar_background_image['url']); ?>");
	background-size: <?php echo esc_attr($lsi_sidebar_image_size); ?>;
    background-repeat: <?php echo esc_attr($lsi_sidebar_image_repeat); ?>;
}
<?php } ?>

<?php if ( is_page()) {
$post_id = get_the_ID();  
if ( function_exists( 'fw_get_db_post_option') ) {
    $lsi_top_padding = fw_get_db_post_option( $post_id, 'lsi_top_padding');
	$lsi_bottom_padding = fw_get_db_post_option( $post_id, 'lsi_bottom_padding');
	$lsi_page_custom_css = fw_get_db_post_option( $post_id, 'lsi_page_custom_css');
?> 
#lsi-maincontent {
	padding-top: <?php echo esc_attr($lsi_top_padding) ; ?>px;
	padding-bottom: <?php echo esc_attr($lsi_bottom_padding) ; ?>px;
}
<?php 
	if ($lsi_page_custom_css != '') { 
		echo wp_kses_post($lsi_page_custom_css) ; 
	}
	}
} ?>

</style>
<!-- End Header Styles -->
<?php 
} 
}
}
add_action( 'wp_head', 'lakshmi_lite_header_styles', 997 );

/*********Footer Styles**************/
if(!function_exists("lakshmi_lite_footer_styles")){
function lakshmi_lite_footer_styles() { 
// Theme Settings
if ( function_exists( 'fw_get_db_customizer_option') ) {
  $lsi_fw_background_color = fw_get_db_customizer_option( 'lsi_fw_background_color');
  $lsi_fw_background_image = fw_get_db_customizer_option( 'lsi_fw_background_image');
  $lsi_fw_image_size = fw_get_db_customizer_option( 'lsi_fw_image_size');
  $lsi_fw_image_repeat = fw_get_db_customizer_option( 'lsi_fw_image_repeat');
  $lsi_fw_image_fixed = fw_get_db_customizer_option( 'lsi_fw_image_fixed');
  $lsi_fw_image_layer = fw_get_db_customizer_option( 'lsi_fw_image_layer/on_off');
  $lsi_fwil_bc = fw_get_db_customizer_option( 'lsi_fwil_bc');
  $lsi_fw_padding = fw_get_db_customizer_option( 'lsi_fw_padding');
  $lsi_fwc_padding = fw_get_db_customizer_option( 'lsi_fwc_padding');
  $lsi_bf_bg = fw_get_db_customizer_option( 'lsi_bf_bg');
  $lsi_bf_padding = fw_get_db_customizer_option( 'lsi_bf_padding');
  $lsi_bf_mi_padding = fw_get_db_customizer_option( 'lsi_bf_mi_padding');
  $lsi_custom_css = fw_get_db_customizer_option( 'lsi_custom_css');
?>
<!-- Footer Styles -->
<style type="text/css">
<?php if ($lsi_fw_background_color != ('')){ ?>
#lsi-footer-sidebar {
	background-color: <?php echo esc_attr($lsi_fw_background_color); ?> !important;
}
<?php } ?>

<?php if ($lsi_fw_background_image != ('')){ ?>
#lsi-footer-sidebar {
    background-image: url("<?php echo esc_url($lsi_fw_background_image['url']); ?>");
	background-size: <?php echo esc_attr($lsi_fw_image_size); ?>;
    background-repeat: <?php echo esc_attr($lsi_fw_image_repeat); ?>;
	<?php if ($lsi_fw_image_fixed == ('yes')){ ?>
    background-attachment: fixed;
	<?php } ?>
}
<?php } ?>
<?php if ($lsi_fw_image_layer == ('yes')){ ?>
#lsi-footer-sidebar-container {
	background-color: <?php echo esc_attr($lsi_fwil_bc); ?>;
}
<?php } ?>

#lsi-fs-content {
	padding: <?php echo esc_attr($lsi_fw_padding); ?>;
}

#lsi-fs-content .lsi-footer-widget {
	padding: <?php echo esc_attr($lsi_fwc_padding); ?>;
}

<?php if ($lsi_bf_bg != ('')){ ?>
#lsi-footer, #lsi-bottom-footer-holder #lsi-menu-social-items-footer li {
    background-color: <?php echo esc_attr($lsi_bf_bg); ?> !important;
}
<?php } ?>

#lsi-bottom-footer {
	padding: <?php echo esc_attr($lsi_bf_padding); ?>;
}

#lsi-bottom-footer .lsi-footer-menu li {
	padding: <?php echo esc_attr($lsi_bf_mi_padding); ?>;
}

<?php echo wp_kses_post($lsi_custom_css); ?>
</style>
<!-- End Footer Styles -->
<?php 
}
}
}
add_action( 'wp_head', 'lakshmi_lite_footer_styles', 998 );

/*********Shortcode Styles**************/
if(!function_exists("lakshmi_lite_shortcode_styles")){
function lakshmi_lite_shortcode_styles() {
	if ( function_exists( 'fw_get_db_customizer_option') ) {
		$lsi_s_cta_padding = fw_get_db_customizer_option( 'lsi_s_cta_padding');
	?>
<!-- Shortcode Styles -->
<style>
.lsi-cta-col {
	padding: <?php echo esc_attr($lsi_s_cta_padding); ?>;
}
</style>
<!-- End Shortcode Styles -->
    <?php
	}
}
}
add_action( 'wp_head', 'lakshmi_lite_shortcode_styles', 999 );