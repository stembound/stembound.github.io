<?php
/**
 * The Sidebar containing the post widget areas.
 *
 * @package WordPress
 * @subpackage Lakshmi
 * @since Lakshmi 1.0
 */

?>
<div class="widget-area">
		<?php if ( !dynamic_sidebar( 'lakshmi_main_sidebar') ) : ?>
		<?php endif; ?>
    <div class="clear"></div>
</div>