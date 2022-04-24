<?php
/**
 * Lakshmi Lite About Theme
 *
 * @package lakshmi-lite
 */

//about theme info
add_action( 'admin_menu', 'lakshmi_lite_about_theme' );
function lakshmi_lite_about_theme() {  
	global $lakshmi_lite_about_theme_page; 	
	$lakshmi_lite_about_theme_page = add_theme_page( __('About Theme', 'lakshmi-lite'), __('About Theme', 'lakshmi-lite'), 'edit_theme_options', 'lakshmi_lite_guide', 'lakshmi_lite_guide');   
} 

//guidline for about theme
function lakshmi_lite_guide() { 
?>

<div class="wrapper-info">
	<div class="col-left">
   		   <div class="about-title">
			  <h1><?php esc_html_e('About Lakshmi Theme', 'lakshmi-lite'); ?></h1>
		   </div>
           <p><?php esc_html_e('Lakshmi - Multipurpose WordPress Theme is a responsive theme with all features You need. Lakshmi has different layouts, page builder, customizer options and demo contents. Imagine Your website and build it with Lakshmi. Select from the premade layouts and build Your site with the highly customizable elements. If You would make something big, try Lakshmi Pro with more elements and special functions.', 'lakshmi-lite'); ?></p>
           <p><?php esc_html_e('If You want to know more about Lakshmi Lite, please read the', 'lakshmi-lite'); ?> <a href="<?php echo esc_url(LAKSHMI_LITE_WEBZAKT_THEME_DOC); ?>" target="_blank"><?php esc_html_e('documentation', 'lakshmi-lite'); ?></a>.</p>
           <h2><?php esc_html_e('How to use Lakshmi Lite', 'lakshmi-lite'); ?></h2>
		  <p><?php esc_html_e('1. If You want to use all Lakshmi Lite features install and activate the 3 recommended plugins: Unyson, Lakshmi Features, Contact Form 7.', 'lakshmi-lite'); ?></p>
          <p><?php esc_html_e('2. Install the Unyson extensions: Analytics, Backup & Demo Content, Sliders, Mega Menu, SEO, Page Builder, Sidebars.', 'lakshmi-lite'); ?></p>
          <p><?php esc_html_e('3. Install one of the demo contents at Tools -> Demo Content Install. (This step is optional. You can also select from the styles at the customizer -> general settings.)', 'lakshmi-lite'); ?></p>
          <p><?php esc_html_e('4. Use the customizer to setup Your site and build Your pages and blog posts with the page builder. If You prefer the default editor, You can call the Lakshmi elements with the "editor shortcodes" button.', 'lakshmi-lite'); ?></p>
          <p><?php esc_html_e('5. Have fun!', 'lakshmi-lite'); ?></p>
          
          <h4><?php esc_html_e('If You need more info, please read the', 'lakshmi-lite'); ?> <a href="<?php echo esc_url(LAKSHMI_LITE_WEBZAKT_THEME_DOC); ?>" target="_blank"><?php esc_html_e('documentation', 'lakshmi-lite'); ?></a>. <?php esc_html_e('It contains videos with Lakshmi in action.', 'lakshmi-lite'); ?></h4><br />
           <h2><?php esc_html_e('About Lakshmi Pro', 'lakshmi-lite'); ?></h2>
          <p><?php esc_html_e('Do You want more? Extend Lakshmi Theme! You can download', 'lakshmi-lite'); ?> <a href="<?php echo esc_url(LAKSHMI_LITE_WEBZAKT_THEME_URL); ?>" target="_blank"><?php esc_html_e('Lakshmi - Multipurpose WordPress Theme', 'lakshmi-lite'); ?></a> <?php esc_html_e('pro version from Webzakt.', 'lakshmi-lite'); ?></p>
          <div class="description free-and-pro"><a href="<?php echo esc_url(LAKSHMI_LITE_WEBZAKT_THEME_URL); ?>" class="webzakt-button webzakt-button-pro" target="_blank"><?php esc_html_e('More about Pro Version', 'lakshmi-lite'); ?></a><a href="<?php echo esc_url(LAKSHMI_LITE_WEBZAKT_AUTHOR_URL); ?>" class="webzakt-button webzakt-button-more" target="_blank"><?php esc_html_e('More about Webzakt', 'lakshmi-lite'); ?></a></div>
          <p><?php esc_html_e('Pro version includes above the lite features:', 'lakshmi-lite'); ?></p>
          
          <h3><?php esc_html_e('Customizable Colors & Fonts, WooCommerce & Give Donation Plugin support with page builder elemnts, Events & Portfolio post types with page builder elemnts, Breadcrumbs, Lakshmi Widgets (Contact, Event, Flickr, Popular Posts, Quote), 4 Blog Style, Social share function, Animations, Nice sroll, Back to top, Sticky header, 7 Header style, Countdown, Counter, Map-fullwidth, Member, Pricing-table, Progress, Tabs, Toggle, Calendar, Extra Post carousel and much more...', 'lakshmi-lite'); ?></h3>
	</div><!-- .col-left -->
	
	<div class="col-right">			
			<div class="about-donate">
				<hr />
				<a href="<?php echo esc_url(LAKSHMI_LITE_WEBZAKT_THEME_URL); ?>" target="_blank"><?php esc_html_e('Demo', 'lakshmi-lite'); ?></a> | 
				<a href="<?php echo esc_url(LAKSHMI_LITE_WEBZAKT_THEME_URL); ?>"><?php esc_html_e('Buy Pro', 'lakshmi-lite'); ?></a> | 
				<a href="<?php echo esc_url(LAKSHMI_LITE_WEBZAKT_THEME_DOC); ?>" target="_blank"><?php esc_html_e('Documentation', 'lakshmi-lite'); ?></a>
                <div class="about-space"></div>
				<hr />
                <p><?php esc_html_e('Lakshmi Lite - Multipurpose WordPress Theme is free, and I hope that you find it useful. If you would like to support future development and new product features, please make a (non-tax-deductible) donation via PayPal.','lakshmi-lite'); ?></p>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
			<hr />
            <div class="about-title">
				<?php esc_html_e('Credits', 'lakshmi-lite'); ?>
            </div>
            <p><?php esc_html_e('I`ve used the following scripts as listed. See the source of the images in the documentation.', 'lakshmi-lite'); ?></p>
                        
            <ul>
                <li><?php esc_html_e('Bootstrap', 'lakshmi-lite'); ?></li>
                <li><?php esc_html_e('jQuery easing', 'lakshmi-lite'); ?></li>
                <li><?php esc_html_e('prettyPhoto', 'lakshmi-lite'); ?></li>
                <li><?php esc_html_e('Flexslider', 'lakshmi-lite'); ?></li>
                <li><?php esc_html_e('OwlCarousel', 'lakshmi-lite'); ?></li>
                <li><?php esc_html_e('Nivo Slider', 'lakshmi-lite'); ?></li>
                <li><?php esc_html_e('jQuery Directional Hover', 'lakshmi-lite'); ?></li>
                <li><?php esc_html_e('Font Awesome', 'lakshmi-lite'); ?></li>
                <li><?php esc_html_e('Google Fonts', 'lakshmi-lite'); ?></li>
                <li><?php esc_html_e('Unyson', 'lakshmi-lite'); ?></li>
            </ul>
		</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>