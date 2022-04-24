<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Lakshmi
 * @since Lakshmi 1.0
 */
 
?>

<?php
// Theme Settings
if ( function_exists( 'fw_get_db_customizer_option') ) {
	$lsi_allow_f_widgets = fw_get_db_customizer_option( 'lsi_allow_f_widgets');
	$lsi_footcolumn = fw_get_db_customizer_option( 'lsi_footer_column');
	$lsi_copyright_content = fw_get_db_customizer_option( 'lsi_copyright_content');
	$lsi_bf_layout = fw_get_db_customizer_option( 'lsi_bf_layout');
	$lsi_bf_menu_switch = fw_get_db_customizer_option( 'lsi_bf_menu_switch/on_off');
	$lsi_social = fw_get_db_customizer_option( 'lsi_footer_social_switch/on_off');
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
	$lsi_allow_link_animation = fw_get_db_customizer_option( 'lsi_allow_link_animation');
  } else {
	$lsi_footcolumn = '1-2-3' ;
	$lsi_allow_f_widgets = 'yes';
	$lsi_bf_layout = 'cr-menu';
	$lsi_allow_link_animation = 'yes';
  }
  
  if($lsi_footcolumn=="1"){
	$lsi_typecol = "col-12";
  }elseif($lsi_footcolumn=="1-2"){
	$lsi_typecol = "col-6";
  }elseif($lsi_footcolumn=="1-2-3-4"){
	$lsi_typecol = "col-3";
  }elseif($lsi_footcolumn=="1-2-3-4-5"){
	$lsi_typecol = "col-1-5";
  }else{
	$lsi_typecol = "col-4";
  }
	
  $lsi_fc_sb = $lsi_footcolumn;
  $lsi_fc_sb_elements = explode('-', $lsi_fc_sb);
?> 
			
                        <div class="clear"></div>
                        </div><!-- main -->                           
                        <div class="clear"></div>
                    </div><!-- content -->
                    <?php lakshmi_lite_sidebar_layout(); ?>
                    <div class="clear"></div>
                </div><!-- END row -->
                <div class="clear"></div>
            </div><!-- END container -->
        </div><!-- END MAIN CONTENT -->

		<?php if($lsi_allow_f_widgets != 'no'){ ?>
        
        <!-- FOOTER SIDEBAR -->
        <div id="lsi-footer-sidebar">
            <div id="lsi-footer-sidebar-container">
                <div class="container">
                    <div class="row"> 
                        <div id="lsi-fs-content">
                            <?php foreach ($lsi_fc_sb_elements as $lsi_fc_sb_element) { ?>
							<div class="<?php echo esc_attr($lsi_typecol); ?> lsi-footer-widget">
								<?php dynamic_sidebar( 'footer-'.$lsi_fc_sb_element ); ?>
                                <div class="clearfix"></div>
                            </div>
							<?php } ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END FOOTER SIDEBAR -->
        <?php } ?>
        
        <!-- FOOTER -->
        <div id="lsi-footer">
        	<div id="lsi-footer-container">
                <div class="container">
                    <div class="row">
						<!-- lsi-bottom-footer-holder -->
                        <div id="lsi-bottom-footer-holder">
                        <?php if(isset($lsi_social) && $lsi_social == 'on'){ ?>
                        <div id="lsi-menu-social-footer" class="lsi-menu-social">
                    			<ul id="lsi-menu-social-items-footer" class="menu-items">
                                 <?php if($lsi_social1 != ''){ ?><li><a href="<?php echo esc_url($lsi_social1) ; ?>"><i class="<?php echo esc_attr($lsi_social_icon1) ; ?>"></i></a></li> <?php } else {} ?>
                                 <?php if($lsi_social2 != ''){ ?><li><a href="<?php echo esc_url($lsi_social2) ; ?>"><i class="<?php echo esc_attr($lsi_social_icon2) ; ?>"></i></a></li> <?php } else {} ?>
                                 <?php if($lsi_social3 != ''){ ?><li><a href="<?php echo esc_url($lsi_social3) ; ?>"><i class="<?php echo esc_attr($lsi_social_icon3) ; ?>"></i></a></li> <?php } else {} ?>
                                 <?php if($lsi_social4 != ''){ ?><li><a href="<?php echo esc_url($lsi_social4) ; ?>"><i class="<?php echo esc_attr($lsi_social_icon4) ; ?>"></i></a></li> <?php } else {} ?>
                                 <?php if($lsi_social5 != ''){ ?><li><a href="<?php echo esc_url($lsi_social5) ; ?>"><i class="<?php echo esc_attr($lsi_social_icon5) ; ?>"></i></a></li> <?php } else {} ?>
                                 <?php if($lsi_social6 != ''){ ?><li><a href="<?php echo esc_url($lsi_social6) ; ?>"><img src="<?php echo esc_url($lsi_social_icon6['url']) ; ?>" class="social-image"/></a></li> <?php } else {} ?>
                                 <?php if($lsi_social7 != ''){ ?><li><a href="<?php echo esc_url($lsi_social7) ; ?>"><img src="<?php echo esc_url($lsi_social_icon7['url']) ; ?>" class="social-image"/></a></li> <?php } else {} ?>
                                 <?php if($lsi_social8 != ''){ ?><li><a href="<?php echo esc_url($lsi_social8) ; ?>"><img src="<?php echo esc_url($lsi_social_icon8['url']) ; ?>" class="social-image"/></a></li> <?php } else {} ?>
                                </ul>
                                <div class="clear"></div>
                		</div>
                        <?php } ?>
                        
						<footer id="lsi-bottom-footer" class="lsi-bf-<?php echo esc_attr($lsi_bf_layout) ; ?><?php if($lsi_allow_link_animation == 'yes'){ ?> lsi-bf-animation<?php } ?>">
							
							<?php if($lsi_bf_layout == 'cr-menu'){ ?>
                            <div class="lsi-bottom-footer-col lsi-bf-cr">
								<?php if(isset($lsi_copyright_content) && ($lsi_copyright_content != '')){ 
									echo wp_kses_post($lsi_copyright_content);
								} ?>
                            </div>
                            <?php } ?>
                            
                            <div class="lsi-bottom-footer-col lsi-bf-menu">
                            <?php if(isset($lsi_bf_menu_switch) && $lsi_bf_menu_switch == 'on'){ ?>
								<?php wp_nav_menu( array(
                                  'container'       => 'ul', 
                                  'menu_class'      => 'lsi-footer-menu',
                                  'menu_id'         => 'footernav', 
                                  'depth'           => 1,
                                  'sort_column'    => 'menu_order',
                                  'fallback_cb'     => 'lakshmi_nav_page_fallback',
                                  'theme_location' => 'footermenu' 
                                  )); 
                                ?>
                            <?php } ?>
                            </div>
                            
                            <?php if($lsi_bf_layout == 'menu-cr'){ ?>
                            <div class="lsi-bottom-footer-col lsi-bf-cr">
								<?php if(isset($lsi_copyright_content) && ($lsi_copyright_content != '')){ 
									echo wp_kses_post($lsi_copyright_content);
								} ?>
                            </div>
                            <?php } ?>
                         	<div class="clearfix"></div>
                        </footer>
                        <?php if(isset($lsi_back_to_top) && ($lsi_back_to_top == 'yes')){ ?>
                        <!-- Back To Top -->
                        <a id="lsi-back-to-top">
                            <div class="lsi-back-to-top-holder">
                                <div class="lsi-back-to-top-content">
                                    <i class="fa fa-angle-double-up"></i>
                                </div>
                            </div>
                        </a>
                        <!-- Back To Top End -->
						<?php } ?> 
                    </div><!-- lsi-bottom-footer-holder end -->
                </div><!-- row end -->
            </div><!-- container end -->
        </div><!-- lsi-footer-container end -->
        </div><!-- lsi-footer end --> 
	</div><!-- lsi-outercontainer end --> 
</div><!-- lsi-page-holder end --> 
<?php wp_footer(); ?>

</body>
</html>
