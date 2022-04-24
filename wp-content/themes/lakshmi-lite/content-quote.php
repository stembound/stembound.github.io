<?php
/**
 * The template for displaying posts in the Quote post format
 *
 * @package WordPress
 * @subpackage Lakshmi
 * @since Lakshmi 1.0
 */
?>
	
    <!-- #post start -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    	<div class="lsi-article-container">
                      
                <div class="entry-content">
                    <?php 
					$post_id = get_the_ID(); 
					if ( function_exists( 'fw_get_db_post_option') ) {  
					$lsi_quote_format = fw_get_db_post_option( $post_id, 'lsi_quote_format' ) ;
					$lsi_quote_format_author = fw_get_db_post_option( $post_id, 'lsi_quote_format_author' ) ;		
					?>
                    
					<div class="lsi-blockquote-2-holder">
                    	<div class="lsi-blockquote-2">
							<?php if( !empty ($lsi_quote_format)){ ?>
                            <div class="lsi-blockquote-2-content"><?php echo esc_html($lsi_quote_format); ?></div>
							<?php } ?>
							<?php if( !empty ($lsi_quote_format_author)){ ?>
                            <h3 class="lsi-blockquote-2-author"><?php echo esc_html($lsi_quote_format_author); ?></h3>
							<?php } ?>
                            <div class="clear"></div>
						</div>
					</div>	
                    
                    <?php } ?>			       
                </div>  
				<div class="clear"></div>
        </div>
	</article>
    <!-- #post end -->