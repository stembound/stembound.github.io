<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Lakshmi
 * @since Lakshmi 1.0
 */

get_header(); ?>
            
    <div id="singlepost">
    	
		  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      
      <div class="single-article-wrapper">
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          
          <?php $post_id = get_the_ID();
		  // Post Option
          if ( function_exists( 'fw_get_db_post_option') ) {  
            $lsi_gallery_format = fw_get_db_post_option( $post_id, 'lsi_gallery_format' ) ;
            $lsi_quote_format = fw_get_db_post_option( $post_id, 'lsi_quote_format' ) ;
            $lsi_quote_format_author = fw_get_db_post_option( $post_id, 'lsi_quote_format_author' ) ;
            $lsi_link_format = fw_get_db_post_option( $post_id, 'lsi_link_format' ) ;	
            $lsi_post_nav = fw_get_db_post_option( $post_id, 'lsi_post_nav' ) ;	
          }
		  // Theme Settings
		  if ( function_exists( 'fw_get_db_customizer_option') ) {
			$lsi_allow_infos_for = fw_get_db_customizer_option( 'lsi_allow_post_info/on/lsi_allow_infos_for');
		  }
		  
          ?>

          <?php
          /* POST FORMATS HEADER
          ----------------------------------------------- */
		
          $lsi_post_format = get_post_format();
        
          if ($lsi_post_format == 'gallery') { 
          if( !empty ($lsi_gallery_format)){ 
          ?>	
		 
		        <div class="postimg">
              <div id="postgalleryslider" class="flexslider">
                <ul class="slides">

                  <?php foreach ( $lsi_gallery_format as $attachment):  ?>
                  <li class="slide">
                    <div class="lsi-spih">
                      <div class="single-post-image" style="background-image: url(<?php echo esc_url( $attachment['url'] );?>)"></div>
                    </div>
                  </li>
                  <?php endforeach; ?> 
                                            
                </ul>
              </div>
            </div>
			<?php } ?>

			<?php } else {

		        if (has_post_thumbnail()) {
            $image = wp_get_attachment_url( get_post_thumbnail_id()) ;        
            ?>

            <div class="lsi-spih">
              <div class="single-post-image" style="background-image: url(<?php echo esc_url($image) ; ?>)"></div>
            </div>
            <?php } ?>

          <?php } ?>

            <div class="lsi-psth">
              <h3 class="lsi-post-single-title"><?php the_title(); ?></h3>
              <p class="lsi-ps-categories"><?php the_category(' '); ?></p>
            </div>
                

            <div class="entry-content">

              <?php
        			/* Content
              ----------------------------------------------- */ 
			  if ( ! defined( 'FW' ) ) {
					echo the_content();
			  } else {
                $lsi_posts = get_posts(array(
					'include' => $post_id,
					'numberposts' => 1,
					'suppress_filters' => false,
				));
				echo apply_filters('the_content', $lsi_posts[0]->post_content);
			  }
     
              if ($lsi_post_format == 'quote') { ?>
		 
              <div class="lsi-blockquote-2-holder">
                <div class="lsi-blockquote-2">
                  <?php if( !empty ($lsi_quote_format)){ ?><div class="lsi-blockquote-2-content"><?php echo wp_kses_post($lsi_quote_format); ?></div><?php } ?>
                  <?php if( !empty ($lsi_quote_format_author)){ ?><div class="lsi-blockquote-2-author"><?php echo esc_html($lsi_quote_format_author); ?></div><?php } ?>
                  <div class="clear"></div>
                </div>
              </div>		
              <?php } ?>

              <?php if ($lsi_post_format == 'link') { 
              if( !empty ($lsi_link_format)){ 
              ?>
				<a class="lsi-btn lsi-btn-basic" href="<?php echo esc_url($lsi_link_format); ?>">
                    <div class="lsi-btn-overlay"></div>
                    <div class="lsi-btn-content"><?php lakshmi_lite_read_more_text(); ?></div>
                </a>
              <?php } ?>
              <?php } ?>

            </div> 
    
            <div class="clearfix"></div><!-- clear float --> 
        </article>

        <div class="lsi-entry-utility">
        	<?php if(isset($lsi_allow_infos_for['post'])){ ?>
				<?php lakshmi_lite_post_infos(); ?>
            <?php } ?>
        </div>
             
        <?php lakshmi_lite_post_tags(); ?>
        
      </div><!-- single-article-wrapper --> 
          
      <?php if (isset($lsi_post_nav) && ($lsi_post_nav != 'no')) { 
	  the_post_navigation(array(
			'prev_text'          => '<div class="nav-indicator">' . __( 'Previous Post:', 'lakshmi-lite') . '</div><p>%title</p>',
        	'next_text'          => '<div class="nav-indicator">' . __( 'Next Post:', 'lakshmi-lite') . '</div><p>%title</p>',
        	'screen_reader_text' => __( 'Post navigation', 'lakshmi-lite'),
	  )); 
	  } ?>

      <?php comments_template(); ?>
        
      <?php endwhile; ?>
    
    </div><!-- singlepost --> 
    <div class="clearfix"></div><!-- clear float --> 

<?php get_footer(); ?>