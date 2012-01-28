<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<p class="entry-date"><?php the_time('M y') ?><br /><span class="date"><?php the_time('j')?></span></p>
			<div class="entry_header">
                <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a> <!--<?php edit_post_link('Edit', '<span class="editpost">', '</span>'); ?>--></h1>
                
                <?php if ($post->comment_status != 'closed'):?>
                    <div class="comment-bubble"><?php comments_popup_link('<span class="nocomment">Leave a comment &#187;</span>', '1 Comment', '% Comments'); ?></div>
                <?php endif;?>
                <div class="recover"></div>
            </div>
			
			<div class="entry">
				<div class="plusone"><g:plusone size="medium" href="<?php the_permalink() ?>"></g:plusone></div>
				<?php 
				the_content();
				wp_link_pages();
				?>
				
				<?php the_tags( '<p class="tags">Tags: ', ', ', '</p>'); ?>

				<p class="postmetadata alt">
						声明: 本文遵循<a href="http://creativecommons.org/licenses/by-nc-sa/3.0/" target="_blank" rel="nofollow">BY-NC-SA 3.0</a>协议.转载时请注明出处：<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>。
				</p>

			<p class="postmetacat" style="text-indent:0em"><?php _e('Posted in')?> <span class="categories"><?php the_category(' ') ?></span> <?php _e('by')?> <span class="usr-meta"><?php the_author() ?></span> | <span class="comment-icon"><?php comments_popup_link('No Comments Yet', '1 Comment', '% Comments')?></span> | <span class="views"><?php if(function_exists('the_views')) { the_views(); } ?></span> <?php if (isset($options['tags'])) : ?><span class="tags"><?php the_tags('', ', ', ''); ?></span><?php endif; ?></p>
			<!--<script type="text/javascript" src="http://china-addthis.googlecode.com/svn/trunk/addthis.js" charset="UTF-8"></script><span class="addthis_org_cn" style="display:none;"><a href="http://addthis.org.cn/share/" i="0|1|31|22|23|28|49|21|30|47|34|71|72|73|74" side="left" title="收藏&amp;分享"><img src="<?php bloginfo('template_url'); ?>/images/as_t.png" alt="收藏&amp;分享" align="absmiddle" /></a></span>-->
			</div>
		</div>
  <?php if(function_exists('wp_related_posts')) { wp_related_posts(); } ?>
	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p><?php _e('Sorry, no posts matched your criteria.')?></p>

<?php endif; ?>

<?php get_footer(); ?>