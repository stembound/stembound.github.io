<?php
/**
 * The template for displaying Comments.
 *
 * @subpackage Lakshmi
 * @since Lakshmi 1.0
 */
?>

<div id="comments">
	<?php if ( post_password_required() ) : ?>
		<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'lakshmi-lite'); ?></p>
</div><!-- #comments -->
	<?php
            /* Stop the rest of comments.php from being processed,
             * but don't kill the script entirely -- we still have
             * to fully load the template.
             */
            return;
        endif;
    ?>


<?php if ( have_comments() ) : ?>
			<h3 id="comments-title"><?php
			printf( _n( '%d Comment', '%d Comments', get_comments_number(), 'lakshmi-lite'),
			number_format_i18n( get_comments_number() ), '<em>' . get_the_title() . '</em>' );
			?></h3>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
			
<?php endif; // check for comment navigation ?>

			<ol class="commentlist">
				<?php
					/* Loop through and list the comments. Tell wp_list_comments()
					 * to use lakshmi_lite_comment() to format the comments.
					 * If you want to overload this in a child theme then you can
					 * define lakshmi_lite_comment() and that will be used instead.
					 */
					wp_list_comments( 
						array( 
							'callback' => 'lakshmi_lite_comment',
							'avatar_size' => 80,
						) 
					);
				?>
			</ol>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
			<?php lakshmi_lite_comment_nav(); ?>
<?php endif; // check for comment navigation ?>

<?php else : // or, if we don't have comments:

	/* If there are no comments and comments are closed,
	 * let's leave a little note, shall we?
	 */
	if ( ! comments_open() ) :
?>
	<p class="nocomments"><?php _e( 'Comments are closed.', 'lakshmi-lite'); ?></p>
<?php endif; // end ! comments_open() ?>

<?php endif; // end have_comments() ?>

<?php 
comment_form(array(
			'fields' => array(
				'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name', 'lakshmi-lite') . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
	            			'<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" /></p>',
							
				'email'  => '<p class="comment-form-email"><label for="email">' . __( 'Email', 'lakshmi-lite') . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
	            			'<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" /></p>',
							
				'url'    => '<p class="comment-form-url"><label for="url">' . __( 'Website', 'lakshmi-lite') . '</label>' .
	            			'<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>',
			),
			'title_reply' => __( 'Post a Comment', 'lakshmi-lite'),
			'label_submit' => __( 'Submit', 'lakshmi-lite'),
			'comment_notes_after' => ''
)); ?>
</div><!-- #comments -->