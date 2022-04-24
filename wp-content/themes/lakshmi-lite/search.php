<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Lakshmi
 * @since Lakshmi 1.0
 */

get_header(); ?>
                        	
        <div id="searchresult">
        
        
			<?php if ( have_posts() ) the_post(); ?>
            <?php rewind_posts(); get_template_part( 'loop' ); ?>
        </div>
        
    	<div class="clear"></div><!-- clear float --> 

<?php get_footer(); ?>