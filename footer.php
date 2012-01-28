<div class="recover"></div>
        </div><!--End left-col-->
              
			  <?php get_sidebar(1); ?>
              
              <div class="recover"></div>
			</div><!-- #container-shoulder -->
        </div><!-- #Container-->
         
                  <div id="globalnav">
        	<div id="navpocket">
              <ul id="nav"<?php echo (get_option('tbf1_search_header') == "no") ? ' class="nav-wide"' : '';?>>
                
                <?php if(get_option('tbf1_nav_hide_home') != 'yes') : ?>
                <li><a href="<?php echo get_option('home'); ?>" rel="nofollow"><?php _e('Home')?></a></li>
                <?php endif; ?>

				<!-- #Delete a line-->
				<li class="page_item"><a href="http://logicmd.net/about/">关于</a>
					<ul class="children">
						<li class="page_item page-item-33791"><a href="http://logicmd.net/guestbook/">留言板</a></li>
					</ul> 
				</li>
				<li><a href="#Logs" rel="nofollow">各种志</a> 
					<ul class="children">
						<li class="page_item out-of-site"><a href="http://t.logicmd.net/">Tumblr</a></li>
						<li class="page_item page-item-35659"><a href="http://logicmd.net/lifestreams/">流志</a></li> 
						<!-- <li class="page_item page-item-38217"><a href="http://logicmd.net/gallery/">图志</a></li> -->
						<li class="page_item page-item-42400"><a href="http://logicmd.net/douban-show/">豆瓣秀</a></li> 
					</ul> 
				</li>
				<li><a href="#Tools" rel="nofollow">工具</a> 
					<ul class="children">	 
						<li><a href="#ToolsGoogleApps">Google Apps</a>
							<ul class="children">
								<li><a href="http://logicmd.net/mail" title="Google Apps Mail" rel="nofollow">Mail</a></li>
								<li><a href="http://logicmd.net/docs" title="Google Apps Document" rel="nofollow">Document</a></li>
								<li><a href="http://logicmd.net/calendar" title="Google Apps Calendar" rel="nofollow">Calendar</a></li>
								<li><a href="http://logicmd.net/sites" title="Google Apps Site" rel="nofollow">Site</a></li>
							</ul>
						</li>		 
						<li><a href="http://forms.logicmd.net/">表单系统</a></li>
					</ul>
				</li>
				<li><a href="#Projects" rel="nofollow">项目</a> 
					<ul class="children">	 
						<li><a href="http://logicmd.net/mcv" title="Managed Computer Vision" rel="nofollow">MCV</a></li>
						<li><a href="http://code.logicmd.net/" rel="nofollow" title="Git host sites with many private repositories" rel="nofollow">code.logicmd.net</a>
							<ul class="children">
								<li><a href="http://code.logicmd.net/announcementextract/overview" rel="nofollow" title="A PKU portal announcement extraction tool.">AnnounceExtract</a></li>
								<li><a href="http://code.logicmd.net/join/overview" title="Join implementation using MapReduce" rel="nofollow">Join</a></li>
								<li><a href="http://code.logicmd.net/ttcp/overview" title="Fork of original ttcp with various new features" rel="nofollow">TTCP</a></li>
							</ul>
						</li>
					</ul>
				</li>  
                
                <?php /* Uncomment this if you want to show categories in the top navigation
				<li><a rel="nofollow" href="#"><?php _e("Topics"); ?></a>
                    <ul><?php wp_list_categories('title_li=&depth=4&orderby=name'); ?></ul>
                </li>*/?>
              </ul>
              
                <?php //Search box 
                    if(get_option('tbf1_search_header') == "yes" || (isset($_GET['preview']) && isset($_GET['template']))) : ?>
                    <?php include(TEMPLATEPATH.'/cseform.php'); ?>
                <?php endif; ?>
        	</div>
        </div>
       
		<ul id="socialize-icons">
			<?php if(get_option('tbf1_icon_rss') || isset($_GET['preview'])):?>
            	<!--RSS html-->
            	<li id="icon-rss"><a href="<?php echo (get_option('tbf1_icon_rss')) ? get_option('tbf1_icon_rss') : bloginfo('rss2_url')?>">RSS Feed</a></li>      	
            <?php endif;?>
			<?php if(get_option('tbf1_icon_facebook') || isset($_GET['preview'])):?>
            	<li id="icon-facebook"><a href="<?php echo (get_option('tbf1_icon_facebook')) ? get_option('tbf1_icon_facebook') : '#'?>" rel="nofollow" target="_blank">facebook</a></li>
            <?php endif;?>
            <?php if(get_option('tbf1_icon_twitter') || isset($_GET['preview'])):?>
				<li id="icon-twitter"><a href="<?php echo (get_option('tbf1_icon_twitter')) ? get_option('tbf1_icon_twitter') : '#'?>" rel="nofollow" target="_blank">twitter</a></li>
            <?php endif;?>
		</ul>
		        
      <div id="footer" <?php echo (get_option('tbf1_footer_image_file')) ? 'style="background:url('.get_option('tbf1_footer_image_file'). ') no-repeat"' : ''?>>
		<div class="footer-content">
        	<div class="footer-widget">
                <ul class="footerlinks">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Left") ) : ?>
                    <li><strong>Footer Left Content</strong><br />To replace this, go to "Widgets" page and add your own widgets to "Footer Left".<br /><br />Suggested widgets are: Categories, Recent Comments, Banners, Ads, Promotional Links etc.</li>
					<?php endif; ?>	
				</ul>
            </div>
        	<div class="footer-widget">
                <ul class="footerlinks">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Middle") ) : ?>
                    <li><strong>Footer Middle Content</strong><br />To replace this, go to "Widgets" page and add your own widgets "Footer Middle".<br /><br />Suggested widgets are: Categories, Recent Comments, Banners, Ads, Promotional Links etc.</li>
					<?php endif; ?>	
				</ul>
            </div>
        	<div class="footer-widget">
                <ul class="footerlinks">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Right") ) : ?>
                    <li><strong>Footer Right Content</strong><br />To replace this, go to "Widgets" page and add your own widgets "Footer Right".<br /><br />Suggested widgets are: Categories, Recent Comments, Banners, Ads, Promotional Links etc.</li>
					<?php endif; ?>	
				</ul>
            </div>
       	  <div class="recover"></div>
          </div>
	 
         <span id="copyright"><span class="alignleft"><?php _e('Copyright &copy; ')?>
		  	<script type="text/javascript">
			/* <![CDATA[ */
			printCopyrightYears(2009);
			/* ]]> */
            </script>
            <a href="http://logicmd.net" target="_blank"><?php echo bloginfo('site_name')?></a></span><span id="footer-tag"> | &nbsp;<a href="http://logicmd.net" target="_blank">This site</a> is licensed under a BY-NC-SA 3.0 License <a rel="nofollow" href="http://creativecommons.org/licenses/by-nc-sa/3.0/"><img alt="知识共享许可协议" style="border-width:0; vertical-align:middle; padding-bottom:3px;" src="/wp-content/themes/intrepidity/images/80x15.png" /></a>  | &nbsp; 
			<?php if(is_user_logged_in()):?>
				<a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php echo _e('Log Out') ?>"><?php echo _e('Log Out'); ?></a>
			<?php else:?>
				<a href="<?php echo bloginfo('url')?>/wp-login.php"><?php _e('Log In'); ?></a>
			<?php endif;?></span>
		</span>
</div>  
          
    </div><!--End shadow-->
</div><!--End bg-->


<?php //Login Bar at the top 
		if(get_option('tbf1_user_login') == "yes") { ?>
		 <div id="login">
    <?php
		global $user_identity, $user_level;
		if (is_user_logged_in()) { ?>
            <ul>
                <li><span style="float:left;"><?php _e('Logged in as:')?> <strong><?php echo $user_identity ?></strong></span></li>
				<li><a href="<?php bloginfo('url'); ?>/wp-admin">Control Panel</a></li>
                <?php if ( $user_level >= 1 ) { ?>
                <li class="dot"><a href="<?php bloginfo('url') ?>/wp-admin/post-new.php">New Post</a></li>
                <li class="dot"><a href="<?php bloginfo('url') ?>/wp-admin/page-new.php">New Page</a></li>
                <li class="dot"><a href="<?php bloginfo('url') ?>/wp-admin/widgets.php">Widgets</a></li>
                <li class="dot"><a href="<?php bloginfo('url') ?>/wp-admin/admin.php?page=tbf-design.php">Theme Setting</a></li>
			<?php } ?>
                <li class="dot"><a href="<?php bloginfo('url') ?>/wp-admin/profile.php">Profile</a></li>
				<li class="dot"><a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e('Log Out') ?>"><?php _e('Log Out'); ?></a></li>
             </ul>
            <?php 
		} else {
			echo '<ul>';
			echo '<li><a href="'; echo bloginfo("url"); echo '/wp-login.php">Log In</a></li>';
			if (get_option('users_can_register')) { ?>
				<li class="dot"><a href="<?php echo site_url('wp-login.php?action=register', 'login') ?>"><?php _e('Register') ?></a> </li>
                
            <?php 
			}
			echo "</ul>";
		} ?> 
    </div>
<?php } ?>

<?php wp_footer(); ?>
<script type="text/javascript">
  window.___gcfg = {lang: 'zh-CN'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<?php if (is_singular()) { ?>
<!-- JiaThis Button BEGIN -->
<script type="text/javascript">var jiathis_config = {"data_track_clickback":true};</script>
<script type="text/javascript" src="http://v2.jiathis.com/code/jiathis_r.js?type=left&amp;btn=l1.gif&amp;uid=897642" charset="utf-8"></script>
<!-- JiaThis Button END -->
<?php } ?>
<?php if (false) { ?>
<!-- Adsense BEGIN -->
<div style="position:relative; width:200px; height:200px; margin:-480px auto; left:317px">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-7662151708523775";
/* post-ad */
google_ad_slot = "5617487124";
google_ad_width = 200;
google_ad_height = 200;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<!-- Adsense END -->
</div>
<?php } ?>
</body>
</html>
<!--Your IP Address is <?php echo getIp() ?>; UA string is <?php echo $_SERVER['HTTP_USER_AGENT'] ?> -->
<img src="http://lynnshaw.tk/grey.gif" width="1" height="1" alt="1st" /> <img src="http://i.am-loving.tk/grey.gif" width="1" height="1" alt="2nd" />