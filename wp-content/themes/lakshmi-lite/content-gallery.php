<?php
/**
 * The template for displaying posts in the Gallery post format
 *
 * @package WordPress
 * @subpackage Lakshmi
 * @since Lakshmi 1.0
 */
 
// Theme Settings
if ( function_exists( 'fw_get_db_post_option') ) { 
	$post_id = get_the_ID(); 
	$lsi_excerpt = get_the_excerpt();
	$lsi_unique_excerpt = fw_get_db_post_option( $post_id, 'lsi_post_excerpt' ) ;
	if ($lsi_unique_excerpt != '') $lsi_excerpt = $lsi_unique_excerpt;
} else {
	$lsi_excerpt = get_the_excerpt();
}
?>

	<!-- #post start -->
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    	<div class="lsi-article-container">
            <!-- blog-entry  -->
            <div class="blog-entry">
                
                <!-- entry image  -->
                <div class="entry-image">
					<?php
                    $post_id = get_the_ID(); 
                    if ( function_exists( 'fw_get_db_post_option') ) {  
                      $lsi_gallery_format = fw_get_db_post_option( $post_id, 'lsi_gallery_format' ) ;	
                    }
                    if( !empty ($lsi_gallery_format)){ 
                    ?>	
             
                    <div class="postimg">
                        <div id="postgalleryslider" class="flexslider">
                            <ul class="slides">
                                <?php foreach ( $lsi_gallery_format as $attachment):  ?>
                                <li class="slide">
                                    <div class="lsi-spih">
                                        <div class="single-post-image" style="background-image: url(<?php echo esc_url ( $attachment['url'] );?>)"></div>
                                    </div>
                                </li>
                                <?php endforeach; ?> 
                            </ul>
                        </div>
                    </div>
             
                    <?php } else { ?>
                    	<?php lakshmi_lite_post_thumbnails(); ?>
					<?php } ?>
                </div>
                <!-- entry image end -->
                
                <!-- entry texts -->
                <div class="lsi-entry-texts">
                    <div class="lsi-psth">
                    <a href="<?php esc_url(the_permalink()); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'lakshmi-lite'), the_title_attribute( 'echo=0' ) ); ?>"><h3 class="lsi-post-single-title"><?php the_title(); ?></h3></a>
                    <p class="lsi-ps-categories"><?php the_category(' '); ?></p>
                    </div>
    
                    <div class="entry-content">
                        <p class="lsi-entry-excerpt"><?php echo wp_kses_post($lsi_excerpt); ?></p>
                        <div class="lsi-post-button-holder">
                            <a class="lsi-btn lsi-btn-basic" href="<?php esc_url(the_permalink()); ?>">
                                <div class="lsi-btn-overlay"></div>
                                <div class="lsi-btn-content"><?php lakshmi_lite_read_more_text(); ?></div>
                            </a>
                        </div>
                    </div>
                    
					<?php lakshmi_lite_entry_infos(); ?>
                    
                </div>
                <!-- entry texts end  -->
            </div>
            <!-- blog-entry end  -->
            <div class="clear"></div>
        </div>
	</article>
    <!-- #post end -->