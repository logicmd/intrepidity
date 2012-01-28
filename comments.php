<?php
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
	die (_e('Please do not load this page directly. Thanks!'));

if ( post_password_required() ) { ?>
	<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.')?></p>
<?php
	return;
}
?>

<?php if ( have_comments() ) : ?>
	<h3 class="commentheading"><?php comments_number('Be the first to comment on', '1 Response to', '% Responses to' );?> "<?php the_title(); ?>"</h3>

	<ul id="comments" class="commentlist">
		<?php wp_list_comments('callback=tbf1_comment&max_depth=10000'); ?>
	</ul>

	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link(__('Older Comments')) ?></div>
		<div class="alignright"><?php next_comments_link(__('Newer Comments')) ?></div>
        <div class="recover"></div>
	</div>
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<?php echo (!is_page()) ? '<p class="nocomments">Comments are closed.</p>' : '' ?>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>
<div id="respond">
    <h5><?php comment_form_title( 'Leave a Comment', 'Leave a Comment to %s' ); ?></h5>
    <div class="cancel-comment-reply">
	<?php cancel_comment_reply_link(); ?>
    </div>

		<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
        <p><?php _e('You must be')?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>"><?php _e('logged in')?></a> <?php _e('to post a comment.')?></p>
        <?php else : ?>

            <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
            
				<?php if ( $user_ID ) : ?>
                
                	<p><?php _e('Logged in as')?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php" class="usr-meta"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e('Log out of this account')?>" class="comment-reply-login"><?php _e('Log out')?> &raquo;</a></p>
                
        <?php else : ?>
        
    		    <p>
        		<?php $useremail = ($user_ID) ? get_the_author_meta('user_email', $user_ID) : $comment_author_email;?>
        		<img id="real-time-gravatar" src="http://www.gravatar.com/avatar/<?php echo md5($useremail);?>?s=50&amp;d=identicon&amp;r=G" alt="gravatar" height="50" width="50" />
    		    </p>
    
    		    <p>
    		        <a href="http://en.gravatar.com/" target="_blank"> <img id="customize" src="/wp-content/themes/intrepidity/images/gravatar.png" z-index="-1" alt="没有个性头像吗？点此来设定头像吧~" height="50" width="180" /> </a>
    		    </p>
    		    
    		    <div id="respond_l">
                    <p title="您的大名，必填"><label for="author"></label><input type="text" name="author" id="author" class="formfield" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
                    </p>
                    
                    <p title="您的Email，必填，但它不会被公布，您可能收到您留言回复的通知邮件"><label for="email"></label><input type="text" name="email" id="email" class="formfield" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
                    </p>
                    
                    <p title="您的网站或博客，此项可以不填"><label for="url"></label><input type="text" name="url" id="url" class="formfield" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
                    </p>            
      		    </div>
                <?php endif; ?>
    		
                <p><textarea name="comment" id="comment" class="formfield" cols="60" rows="10" tabindex="4"></textarea></p>
                <br />
                <?php cs_print_smilies(); ?>
                <?php recapcha_hook(); ?>
                <p><span class="button"><span><input name="submit" type="submit" id="submit" tabindex="5" value="<?php _e('Submit Comment')?>" /></span></span>
                    <?php comment_id_fields(); ?>
                </p>
                <?php do_action('comment_form', $post->ID); ?>
            		<span class="CommentFeed">订阅此<?php post_comments_feed_link('RSS feed'); ?>跟踪本日志的评论情况</span>
            </form>
        
	<!-- real time gravatar -->
	<script type="text/javascript" src="/wp-content/themes/intrepidity/js/real-time-gravatar.js"></script> 
        <?php endif; ?> <!-- If registration required and not logged in -->

</div>
<?php endif; ?>